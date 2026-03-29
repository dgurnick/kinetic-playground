# wpdemo — WordPress + Stitch Design Project

This project is a website built on WordPress, designed using Google Stitch, and brought to life using AI assistance (GitHub Copilot) inside VS Code. This document explains the full process in plain language — no coding experience required to understand it.

---

## What Are We Building?

A children's activity platform called **"Join the Fun"** — inspired by the design concept **"The Kinetic Playground."** The site has a playful, high-end feel with soft shapes, sky blue tones, and a layout meant to feel energetic for children and trustworthy for parents.

The site has four pages:
- **Home** — the main landing page
- **About Our Story** — background and mission
- **Play-Hub Activities** — browsable activity listings
- **Join the Fun** — a sign-up / registration page

---

## The Three Tools Involved

### 1. Google Stitch
Stitch is a Google design tool where you describe the look and feel of a website in plain language, and it generates professional screen designs, color palettes, fonts, and layout rules. Think of it as a very smart visual design tool that speaks both to designers and to AI.

### 2. VS Code (Visual Studio Code)
VS Code is the code editor used to write and manage all the website files. It's where the developer works day-to-day.

### 3. GitHub Copilot (AI Assistant)
Copilot is an AI built into VS Code. It can read the Stitch design directly (via a live connection described below) and write the actual website code to match it — so the designer's vision gets translated into a working site automatically.

---

## How the Tools Connect: The "MCP Bridge"

The key innovation in this workflow is a live connection between Stitch and Copilot called an **MCP server** (think of it as a live data feed). Once connected, Copilot can see every screen design, every color, every font rule, and every layout decision — in real time, as they exist in Stitch.

**To set this up:**
1. Open your Stitch project
2. Go to **Share > Connect to VS Code via MCP**
3. Stitch gives you a configuration snippet (a short block of settings text)
4. That snippet goes into a file called `.vscode/mcp.json` inside the project folder
5. VS Code automatically detects it and activates the connection

> **Important:** The configuration snippet contains a private API key (like a password). It should never be shared publicly or committed to a code repository. In this project it is stored securely and excluded from version control.

---

## How the Website Runs Locally

The website runs on your own computer using **Docker** — software that creates a self-contained mini-server environment. You do not need to set up a web hosting account or install WordPress manually.

Two services run together:
- **WordPress** — the website platform, accessible at http://localhost:8080
- **MariaDB** — the database that stores all website content

Everything is configured to start with a single command (or a one-click VS Code task — see below).

The website files live in a folder called `wordpress/` inside this project. Any file you edit there is immediately reflected on the running site — no manual upload or restart needed.

---

## Starting and Stopping the Site

Rather than typing commands, VS Code tasks are set up so you can manage the site from a menu:

**Terminal > Run Task...**

| Task | What it does |
|---|---|
| **WP: Start** | Starts the website (also works with Ctrl+Shift+B) |
| **WP: Stop** | Stops the website, but keeps all your content |
| **WP: Restart** | Restarts just the WordPress part |
| **WP: Logs** | Shows a live feed of what the site is doing behind the scenes |
| **WP: Stop and wipe data** | Stops everything and deletes all data — use only to start fresh |

---

## The Design: "The Kinetic Playground"

The design system was created in Stitch and is named **"The Digital Playhouse."** Here are the key visual decisions in plain language:

### Colors
The palette uses deep teal, sky blue, warm orange, and mint green — vibrant but never garish. The background is a soft off-white blue (`#f4f6ff`), not stark white, which makes the whole site feel gentle and cohesive.

| Color Name | Value | Used For |
|---|---|---|
| Deep Teal | `#006479` | Branding, nav, headings |
| Sky Blue | `#40cef3` | Buttons, highlights, interactive elements |
| Warm Orange | `#854f00` | Accent elements |
| Mint Green | `#00675f` | Positive actions, nature-themed sections |
| Soft Off-White | `#f4f6ff` | Page background |
| White | `#ffffff` | Cards (to make them "pop" off the background) |

### Fonts
- **Headings:** Plus Jakarta Sans — geometric, friendly, upscale
- **Body text:** Be Vietnam Pro — clean and easy to read

### Key Visual Rules (in plain language)
- **No hard lines or borders** between sections — sections flow into each other using subtle color shifts
- **Rounded corners everywhere** — nothing sharp; all buttons, cards, and containers have soft curves
- **Soft, colored shadows** — shadows use a faint blue tint instead of grey or black, so depth looks like light, not ink
- **Buttons use a gradient** — from deep teal to sky blue, angled at 135 degrees
- **Lots of breathing room** — generous spacing between sections, always more whitespace than you think you need
- **Cards are offset** — in a grid of cards, every second card is shifted down slightly to break the rigid "template" look
- **Icons have organic shapes** — icon backgrounds use irregular blob-like curves instead of perfect circles

---

## How the Theme Was Built: The Implementation Process

This is the step-by-step process of how the Stitch design becomes a real WordPress website.

### Step 1: Design in Stitch
The designer uses Stitch to create all four page screens. Stitch generates a full design system including colors, fonts, spacing rules, and component styles — all stored in the Stitch project.

### Step 2: Connect Stitch to VS Code
Using the MCP connection described above, Copilot gains live access to the Stitch project. It can read every screen's HTML layout, every color token, and every design rule — directly from Stitch.

### Step 3: Copilot Reads the Design and Writes the Theme
Inside VS Code, the developer asks Copilot to build the WordPress theme. Copilot:
- Reads the Stitch screen designs via the MCP connection
- Creates a WordPress theme folder at `wordpress/wp-content/themes/kinetic-playground/`
- Generates the required WordPress theme files (`style.css`, `functions.php`, page templates)
- Translates every Stitch color, font, spacing rule, and layout pattern into real CSS and HTML

No manual re-typing of colors or layout rules — the AI reads the design directly and writes code that matches it exactly.

### Step 4: Instant Preview
Because the `wordpress/` folder is live-linked to the running Docker container, as soon as Copilot writes a file, it is immediately live at http://localhost:8080. The developer can open the browser and see the result right away.

### Step 5: Refine and Iterate
The developer reviews the site in the browser. If something needs adjusting — a color tweak, a layout change — they can either update the design in Stitch (and ask Copilot to re-read it) or make a direct edit to the theme files in VS Code. Either way, the change is visible within seconds.

---

## Files in This Project

```
wpdemo/
├── .vscode/
│   ├── mcp.json          ← Stitch connection config (kept private)
│   └── tasks.json        ← VS Code one-click tasks for managing the site
├── wordpress/            ← All WordPress files (the live site)
├── .env                  ← Login credentials (kept private)
├── .gitignore            ← List of files that are never shared publicly
├── docker-compose.yml    ← Instructions for running the site locally
└── README.md             ← This document
```

---

## Technical Reference

For developers who need the specifics:

- WordPress image: `wordpress:latest`, MariaDB: `mariadb:11`
- WordPress bind-mounted at `./wordpress:/var/www/html`
- DB health check using `healthcheck.sh --connect --innodb_initialized`
- Stitch MCP: HTTP server at `https://stitch.googleapis.com/mcp`, auth via `X-Goog-Api-Key` header
- Theme location: `wordpress/wp-content/themes/kinetic-playground/`
- Stitch project ID: `projects/13783532312901181173`
- Screens: `ca25a569` (Home), `9b9238ca` (About), `8fc665a7` (Activities), `c6dba333` (Join)
