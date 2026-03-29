<?php
/**
 * Kinetic Playground — functions.php
 * Enqueues assets, registers nav menus, and sets up theme support.
 */

// ── Language helpers ───────────────────────────────────────────────────────
require_once get_template_directory() . '/languages.php';

// ── Language URL routing (/en/ prefix for English) ─────────────────────────
add_action( 'init', function () {
    // /en  or  /en/          → front page (WordPress serves its configured front page)
    add_rewrite_rule( '^en/?$', 'index.php', 'top' );
    // /en/about  /en/programs  etc. → the matching page slug
    add_rewrite_rule( '^en/(.+?)/?$', 'index.php?pagename=$matches[1]', 'top' );
} );

// Flush rewrite rules once whenever the theme is activated.
add_action( 'after_switch_theme', function () {
    add_rewrite_rule( '^en/?$', 'index.php', 'top' );
    add_rewrite_rule( '^en/(.+?)/?$', 'index.php?pagename=$matches[1]', 'top' );
    flush_rewrite_rules();
} );

// ── Theme support ──────────────────────────────────────────────────────────
add_action( 'after_setup_theme', function () {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [ 'search-form', 'comment-form', 'gallery', 'caption', 'script', 'style' ] );

    register_nav_menus( [
        'primary' => __( 'Primary Navigation', 'kinetic-playground' ),
    ] );
} );

// ── Enqueue scripts & styles ───────────────────────────────────────────────
add_action( 'wp_enqueue_scripts', function () {
    // Theme stylesheet (required by WordPress even though Tailwind does the heavy lifting)
    wp_enqueue_style( 'kinetic-playground-style', get_stylesheet_uri(), [], '1.0.0' );
} );

// ── Tailwind config inline (output once in <head>) ─────────────────────────
add_action( 'wp_head', function () {
    ?>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Be+Vietnam+Pro:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                colors: {
                    "on-primary-container": "#00414f",
                    "secondary": "#854f00",
                    "tertiary-fixed-dim": "#67efe0",
                    "error": "#b31b25",
                    "on-surface": "#212f45",
                    "secondary-fixed": "#ffc78e",
                    "error-container": "#fb5151",
                    "surface-container": "#dee8ff",
                    "on-tertiary-fixed": "#004c45",
                    "primary-fixed-dim": "#28c0e4",
                    "tertiary": "#00675f",
                    "on-tertiary-container": "#006058",
                    "surface-tint": "#006479",
                    "surface-container-low": "#ebf1ff",
                    "secondary-dim": "#744400",
                    "secondary-container": "#ffc78e",
                    "error-dim": "#9f0519",
                    "primary": "#006479",
                    "background": "#f4f6ff",
                    "surface": "#f4f6ff",
                    "on-error": "#ffefee",
                    "surface-container-highest": "#ccdeff",
                    "on-surface-variant": "#4e5c74",
                    "inverse-on-surface": "#8f9db8",
                    "surface-bright": "#f4f6ff",
                    "on-secondary-fixed-variant": "#764500",
                    "surface-container-lowest": "#ffffff",
                    "primary-container": "#40cef3",
                    "inverse-primary": "#40cef3",
                    "on-tertiary-fixed-variant": "#006b63",
                    "inverse-surface": "#010e23",
                    "primary-dim": "#00576a",
                    "outline-variant": "#9faec9",
                    "surface-dim": "#bfd5fe",
                    "on-primary-fixed-variant": "#004a5a",
                    "on-background": "#212f45",
                    "on-secondary-container": "#693d00",
                    "on-error-container": "#570008",
                    "surface-container-high": "#d5e3ff",
                    "tertiary-container": "#77feee",
                    "secondary-fixed-dim": "#ffb462",
                    "on-secondary-fixed": "#4e2c00",
                    "on-secondary": "#fff0e5",
                    "on-primary-fixed": "#002a34",
                    "tertiary-dim": "#005a53",
                    "outline": "#697790",
                    "tertiary-fixed": "#77feee",
                    "on-tertiary": "#bffff5",
                    "surface-variant": "#ccdeff",
                    "primary-fixed": "#40cef3",
                    "on-primary": "#e0f6ff"
                },
                fontFamily: {
                    "headline": ["Plus Jakarta Sans"],
                    "body": ["Be Vietnam Pro"],
                    "label": ["Be Vietnam Pro"]
                },
                borderRadius: {
                    "DEFAULT": "1rem",
                    "lg": "2rem",
                    "xl": "3rem",
                    "full": "9999px"
                },
            },
        },
    }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .organic-blob {
            border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
        }
        .text-shadow-soft {
            text-shadow: 0 4px 12px rgba(33, 47, 69, 0.1);
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(24px);
        }
        .glass-panel {
            background-color: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(24px);
        }
    </style>
    <?php
}, 1 );

// ── Disable wp-emoji (keeps head clean) ───────────────────────────────────
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
