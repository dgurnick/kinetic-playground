<?php
/* Template Name: Parents */
get_header(); ?>
<main class="max-w-7xl mx-auto px-6 pt-16 pb-20">

    <!-- Hero -->
    <header class="text-center mb-20 relative">
        <div class="inline-block px-6 py-2 bg-surface-container-high text-primary rounded-full font-bold text-sm mb-6"><?php echo esc_html( kp_t( 'parents_badge' ) ); ?></div>
        <h1 class="font-headline text-5xl md:text-7xl font-extrabold tracking-tight text-on-surface mb-6">
            <?php echo esc_html( kp_t( 'parents_h1_1' ) ); ?> <span class="text-primary"><?php echo esc_html( kp_t( 'parents_h1_2' ) ); ?></span>
        </h1>
        <p class="text-on-surface-variant text-xl max-w-2xl mx-auto leading-relaxed">
            <?php echo esc_html( kp_t( 'parents_subtitle' ) ); ?>
        </p>
        <div class="absolute top-1/4 -left-20 w-64 h-64 bg-secondary-container/20 blur-3xl rounded-full -z-10"></div>
        <div class="absolute top-0 -right-20 w-80 h-80 bg-primary-container/20 blur-3xl rounded-full -z-10"></div>
    </header>

    <!-- Parent Comfort Grid -->
    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-24">
        <!-- Safety -->
        <div class="bg-surface-container-lowest rounded-xl p-8 shadow-sm border border-outline-variant/10 group hover:shadow-xl transition-all duration-300">
            <div class="w-14 h-14 bg-primary-container rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                <span class="material-symbols-outlined text-on-primary-container text-2xl">shield_with_heart</span>
            </div>
            <h3 class="font-headline text-xl font-bold text-on-surface mb-3"><?php echo esc_html( kp_t( 'parents_safety_title' ) ); ?></h3>
            <p class="text-on-surface-variant leading-relaxed"><?php echo esc_html( kp_t( 'parents_safety_desc' ) ); ?></p>
        </div>
        <!-- Drop-off -->
        <div class="bg-surface-container-lowest rounded-xl p-8 shadow-sm border border-outline-variant/10 group hover:shadow-xl transition-all duration-300">
            <div class="w-14 h-14 bg-secondary-container rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                <span class="material-symbols-outlined text-on-secondary-container text-2xl">directions_car</span>
            </div>
            <h3 class="font-headline text-xl font-bold text-on-surface mb-3"><?php echo esc_html( kp_t( 'parents_dropoff_title' ) ); ?></h3>
            <p class="text-on-surface-variant leading-relaxed"><?php echo esc_html( kp_t( 'parents_dropoff_desc' ) ); ?></p>
        </div>
        <!-- Parent Lounge -->
        <div class="bg-surface-container-lowest rounded-xl p-8 shadow-sm border border-outline-variant/10 group hover:shadow-xl transition-all duration-300">
            <div class="w-14 h-14 bg-tertiary-container rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                <span class="material-symbols-outlined text-on-tertiary-container text-2xl">coffee</span>
            </div>
            <h3 class="font-headline text-xl font-bold text-on-surface mb-3"><?php echo esc_html( kp_t( 'parents_lounge_title' ) ); ?></h3>
            <p class="text-on-surface-variant leading-relaxed"><?php echo esc_html( kp_t( 'parents_lounge_desc' ) ); ?></p>
        </div>
        <!-- Communication -->
        <div class="bg-surface-container-lowest rounded-xl p-8 shadow-sm border border-outline-variant/10 group hover:shadow-xl transition-all duration-300">
            <div class="w-14 h-14 bg-primary-container rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                <span class="material-symbols-outlined text-on-primary-container text-2xl">notifications</span>
            </div>
            <h3 class="font-headline text-xl font-bold text-on-surface mb-3"><?php echo esc_html( kp_t( 'parents_loop_title' ) ); ?></h3>
            <p class="text-on-surface-variant leading-relaxed"><?php echo esc_html( kp_t( 'parents_loop_desc' ) ); ?></p>
        </div>
        <!-- Allergies -->
        <div class="bg-surface-container-lowest rounded-xl p-8 shadow-sm border border-outline-variant/10 group hover:shadow-xl transition-all duration-300">
            <div class="w-14 h-14 bg-secondary-container rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                <span class="material-symbols-outlined text-on-secondary-container text-2xl">health_and_safety</span>
            </div>
            <h3 class="font-headline text-xl font-bold text-on-surface mb-3"><?php echo esc_html( kp_t( 'parents_allergy_title' ) ); ?></h3>
            <p class="text-on-surface-variant leading-relaxed"><?php echo esc_html( kp_t( 'parents_allergy_desc' ) ); ?></p>
        </div>
        <!-- Flexible Plans -->
        <div class="bg-surface-container-lowest rounded-xl p-8 shadow-sm border border-outline-variant/10 group hover:shadow-xl transition-all duration-300">
            <div class="w-14 h-14 bg-tertiary-container rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                <span class="material-symbols-outlined text-on-tertiary-container text-2xl">swap_horiz</span>
            </div>
            <h3 class="font-headline text-xl font-bold text-on-surface mb-3"><?php echo esc_html( kp_t( 'parents_flex_title' ) ); ?></h3>
            <p class="text-on-surface-variant leading-relaxed"><?php echo esc_html( kp_t( 'parents_flex_desc' ) ); ?></p>
        </div>
    </section>

    <!-- What to Bring -->
    <section class="mb-24 bg-surface-container-low rounded-xl p-10 md:p-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-start">
            <div>
                <h2 class="font-headline text-3xl font-extrabold text-on-surface mb-6"><?php echo esc_html( kp_t( 'parents_bring_title' ) ); ?></h2>
                <p class="text-on-surface-variant mb-8"><?php echo esc_html( kp_t( 'parents_bring_desc' ) ); ?></p>
                <ul class="space-y-4">
                    <?php
                    $items = [
                        ['sports_and_outdoors', kp_t('parents_bring1')],
                        ['sports',              kp_t('parents_bring2')],
                        ['water_drop',          kp_t('parents_bring3')],
                        ['lunch_dining',        kp_t('parents_bring4')],
                        ['medication',          kp_t('parents_bring5')],
                        ['sentiment_satisfied', kp_t('parents_bring6')],
                    ];
                    foreach ( $items as $item ) : ?>
                    <li class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-primary-container rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                            <span class="material-symbols-outlined text-on-primary-container text-sm"><?php echo esc_html( $item[0] ); ?></span>
                        </div>
                        <span class="text-on-surface leading-relaxed"><?php echo esc_html( $item[1] ); ?></span>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div>
                <h2 class="font-headline text-3xl font-extrabold text-on-surface mb-6"><?php echo esc_html( kp_t( 'parents_hours_title' ) ); ?></h2>
                <div class="space-y-6">
                    <div class="bg-surface-container-lowest rounded-xl p-6 shadow-sm">
                        <h4 class="font-headline font-bold text-primary mb-4 flex items-center gap-2">
                            <span class="material-symbols-outlined">schedule</span> <?php echo esc_html( kp_t( 'parents_hours_label' ) ); ?>
                        </h4>
                        <div class="space-y-2 text-on-surface-variant">
                            <div class="flex justify-between"><span><?php echo esc_html( kp_t( 'parents_monday_friday' ) ); ?></span><span class="font-medium text-on-surface">8:00 - 19:00</span></div>
                            <div class="flex justify-between"><span><?php echo esc_html( kp_t( 'parents_saturday' ) ); ?></span><span class="font-medium text-on-surface">8:00 - 17:00</span></div>
                            <div class="flex justify-between"><span><?php echo esc_html( kp_t( 'parents_sunday' ) ); ?></span><span class="font-medium text-on-surface">10:00 - 15:00</span></div>
                        </div>
                    </div>
                    <div class="bg-surface-container-lowest rounded-xl p-6 shadow-sm">
                        <h4 class="font-headline font-bold text-primary mb-4 flex items-center gap-2">
                            <span class="material-symbols-outlined">location_on</span> <?php echo esc_html( kp_t( 'parents_address_label' ) ); ?>
                        </h4>
                        <p class="text-on-surface-variant"><?php echo kp_t( 'parents_address' ); ?></p>
                        <p class="text-sm text-on-surface-variant mt-2"><?php echo esc_html( kp_t( 'parents_address_note' ) ); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="text-center bg-primary-container rounded-xl p-12 relative overflow-hidden">
        <div class="relative z-10">
            <h2 class="font-headline text-3xl font-extrabold text-on-primary-container mb-4"><?php echo esc_html( kp_t( 'parents_cta_title' ) ); ?></h2>
            <p class="text-on-primary-container/80 mb-8 text-lg max-w-xl mx-auto"><?php echo esc_html( kp_t( 'parents_cta_desc' ) ); ?></p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo esc_url( kp_url( '/join' ) ); ?>" class="bg-primary text-on-primary px-10 py-4 rounded-full font-headline font-bold shadow-xl hover:scale-105 transition-all text-center"><?php echo esc_html( kp_t( 'parents_cta1' ) ); ?></a>
                <a href="<?php echo esc_url( kp_url( '/programs' ) ); ?>" class="bg-surface-container-lowest text-on-primary-container px-10 py-4 rounded-full font-headline font-bold hover:bg-white transition-colors text-center"><?php echo esc_html( kp_t( 'parents_cta2' ) ); ?></a>
            </div>
        </div>
        <div class="absolute top-0 left-0 w-64 h-64 bg-white/10 organic-blob -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-80 h-80 bg-primary/20 organic-blob translate-x-1/3 translate-y-1/3"></div>
    </section>

</main>
<?php get_footer(); ?>
