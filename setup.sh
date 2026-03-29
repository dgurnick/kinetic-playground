#!/usr/bin/env bash
# Kinetic Playground — first-time WordPress setup
# Run after `docker compose up -d` to install and configure WordPress.
# Requires: Docker, docker compose, bash (Git Bash or WSL on Windows).
#
# Usage:
#   cp .env.example .env   # fill in values first
#   docker compose up -d
#   bash setup.sh

set -euo pipefail

# Load .env so WP_PORT is available
if [ -f .env ]; then
  set -a; source .env; set +a
fi

SITE_URL="http://localhost:${WP_PORT:-8080}"
ADMIN_USER="admin"
ADMIN_PASS="admin"
ADMIN_EMAIL="admin@example.com"
SITE_TITLE="Kinetic Playground"

# Run a WP-CLI command inside the shared wordpress volume via the cli service
wpcli() {
  docker compose run --rm cli wp --allow-root --path=/var/www/html "$@"
}

# Create a page only if the slug does not already exist; echoes the post ID
create_page() {
  local title="$1" slug="$2"
  local existing
  existing=$(wpcli post list --post_type=page --name="$slug" --field=ID --format=csv 2>/dev/null | tr -d '[:space:]')
  if [ -n "$existing" ]; then
    echo "$existing"
  else
    wpcli post create \
      --post_type=page \
      --post_status=publish \
      --post_title="$title" \
      --post_name="$slug" \
      --porcelain
  fi
}

echo "Waiting for WordPress to be ready..."
until wpcli core is-installed 2>/dev/null; do
  sleep 3
done || true

# Install WordPress if not already configured
if ! wpcli core is-installed 2>/dev/null; then
  echo "Installing WordPress..."
  wpcli core install \
    --url="$SITE_URL" \
    --title="$SITE_TITLE" \
    --admin_user="$ADMIN_USER" \
    --admin_password="$ADMIN_PASS" \
    --admin_email="$ADMIN_EMAIL" \
    --skip-email
fi

echo "Activating theme..."
wpcli theme activate kinetic-playground

echo "Creating pages..."
HOME_ID=$(create_page "Home"     "home")
create_page "Programs"           "programs"    > /dev/null
create_page "Play-Hub"           "activities"  > /dev/null
create_page "Parents"            "parents"     > /dev/null
create_page "About"              "about"       > /dev/null
create_page "Join"               "join"        > /dev/null

echo "Setting static front page..."
wpcli option update show_on_front  page
wpcli option update page_on_front  "$HOME_ID"

echo "Setting permalink structure and flushing rewrite rules..."
wpcli option update permalink_structure "/%postname%/"
wpcli rewrite flush

echo ""
echo "Setup complete. Visit $SITE_URL"
echo "Admin: $SITE_URL/wp-admin  (user: $ADMIN_USER / pass: $ADMIN_PASS)"
