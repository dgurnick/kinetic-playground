<!DOCTYPE html>
<html <?php language_attributes(); ?> class="light">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'bg-background font-body text-on-surface selection:bg-primary-container selection:text-on-primary-container' ); ?>>
<?php wp_body_open(); ?>

<!-- TopNavBar -->
<header class="sticky top-0 z-50 flex justify-between items-center max-w-7xl mx-auto w-full rounded-full mt-4 px-6 py-3 bg-[#f4f6ff] shadow-[0_32px_64px_-4px_rgba(33,47,69,0.06)]">
    <div class="flex items-center gap-2">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-2xl font-black text-[#006479] font-headline">
            <?php bloginfo( 'name' ); ?>
        </a>
    </div>
    <nav class="hidden md:flex gap-8 items-center">
        <a class="font-headline font-bold tracking-tight text-[#4e5c74] hover:scale-105 transition-transform duration-300 hover:text-[#006479]" href="<?php echo esc_url( home_url( '/programs' ) ); ?>">Programs</a>
        <a class="font-headline font-bold tracking-tight text-[#4e5c74] hover:scale-105 transition-transform duration-300 hover:text-[#006479]" href="<?php echo esc_url( home_url( '/activities' ) ); ?>">Play-Hub</a>
        <a class="font-headline font-bold tracking-tight text-[#4e5c74] hover:scale-105 transition-transform duration-300 hover:text-[#006479]" href="#">Parents</a>
        <a class="font-headline font-bold tracking-tight text-[#4e5c74] hover:scale-105 transition-transform duration-300 hover:text-[#006479]" href="<?php echo esc_url( home_url( '/about' ) ); ?>">About Us</a>
    </nav>
    <a href="<?php echo esc_url( home_url( '/join' ) ); ?>" class="bg-gradient-to-br from-primary to-primary-fixed text-on-primary px-8 py-3 rounded-full font-headline font-bold shadow-lg hover:scale-105 transition-transform active:scale-95 duration-150">
        Join Now
    </a>
</header>
