<?php
/* Template Name: Programs */
get_header(); ?>
<main class="max-w-7xl mx-auto px-6 pt-16 pb-20">

    <!-- Hero -->
    <header class="text-center mb-20">
        <div class="inline-block px-6 py-2 bg-surface-container-high text-primary rounded-full font-bold text-sm mb-6"><?php echo esc_html( kp_t( 'programs_badge' ) ); ?></div>
        <h1 class="font-headline text-5xl md:text-7xl font-extrabold tracking-tight text-on-surface mb-6">
            <?php echo esc_html( kp_t( 'programs_h1_1' ) ); ?> <span class="text-primary"><?php echo esc_html( kp_t( 'programs_h1_2' ) ); ?></span>
        </h1>
        <p class="text-on-surface-variant text-xl max-w-2xl mx-auto leading-relaxed">
            <?php echo esc_html( kp_t( 'programs_subtitle' ) ); ?>
        </p>
    </header>

    <!-- Season Tracks -->
    <section class="mb-24">
        <h2 class="font-headline text-3xl font-extrabold text-on-surface mb-10 text-center"><?php echo esc_html( kp_t( 'programs_tracks_title' ) ); ?></h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Track 1 -->
            <div class="bg-primary-container rounded-xl p-10 relative overflow-hidden group">
                <div class="relative z-10">
                    <div class="w-14 h-14 bg-primary rounded-full flex items-center justify-center mb-6">
                        <span class="material-symbols-outlined text-on-primary text-2xl">child_care</span>
                    </div>
                    <span class="px-3 py-1 rounded-full bg-primary text-on-primary font-bold text-xs mb-4 inline-block"><?php echo esc_html( kp_t( 'prog_track1_age' ) ); ?></span>
                    <h3 class="font-headline text-2xl font-bold text-on-primary-container mb-3"><?php echo esc_html( kp_t( 'prog_track1_name' ) ); ?></h3>
                    <p class="text-on-primary-container/80 mb-6"><?php echo esc_html( kp_t( 'prog_track1_desc' ) ); ?></p>
                    <ul class="space-y-2 text-on-primary-container/80 text-sm mb-8">
                        <li class="flex items-center gap-2"><span class="material-symbols-outlined text-sm">check_circle</span> <?php echo esc_html( kp_t( 'prog_track1_feat1' ) ); ?></li>
                        <li class="flex items-center gap-2"><span class="material-symbols-outlined text-sm">check_circle</span> <?php echo kp_t( 'prog_track1_feat2' ); ?></li>
                        <li class="flex items-center gap-2"><span class="material-symbols-outlined text-sm">check_circle</span> <?php echo esc_html( kp_t( 'prog_track1_feat3' ) ); ?></li>
                    </ul>
                    <p class="font-headline font-extrabold text-on-primary-container text-2xl"><?php echo esc_html( kp_t( 'prog_track1_price' ) ); ?><span class="text-base font-normal"><?php echo esc_html( kp_t( 'prog_track1_period' ) ); ?></span></p>
                </div>
                <span class="material-symbols-outlined absolute -bottom-8 -right-8 text-[160px] text-on-primary-container/10 group-hover:scale-110 transition-transform duration-700">child_care</span>
            </div>
            <!-- Track 2 -->
            <div class="bg-surface-container-lowest rounded-xl p-10 shadow-[0_32px_64px_-4px_rgba(33,47,69,0.06)] relative overflow-hidden group border-4 border-primary/20">
                <div class="absolute top-4 right-4 bg-secondary-container text-on-secondary-container px-3 py-1 rounded-full text-xs font-bold"><?php echo esc_html( kp_t( 'prog_track2_popular' ) ); ?></div>
                <div class="relative z-10">
                    <div class="w-14 h-14 bg-secondary rounded-full flex items-center justify-center mb-6">
                        <span class="material-symbols-outlined text-on-secondary text-2xl">directions_run</span>
                    </div>
                    <span class="px-3 py-1 rounded-full bg-secondary-container text-on-secondary-container font-bold text-xs mb-4 inline-block"><?php echo esc_html( kp_t( 'prog_track2_age' ) ); ?></span>
                    <h3 class="font-headline text-2xl font-bold text-on-surface mb-3"><?php echo esc_html( kp_t( 'prog_track2_name' ) ); ?></h3>
                    <p class="text-on-surface-variant mb-6"><?php echo esc_html( kp_t( 'prog_track2_desc' ) ); ?></p>
                    <ul class="space-y-2 text-on-surface-variant text-sm mb-8">
                        <li class="flex items-center gap-2"><span class="material-symbols-outlined text-primary text-sm">check_circle</span> <?php echo esc_html( kp_t( 'prog_track2_feat1' ) ); ?></li>
                        <li class="flex items-center gap-2"><span class="material-symbols-outlined text-primary text-sm">check_circle</span> <?php echo esc_html( kp_t( 'prog_track2_feat2' ) ); ?></li>
                        <li class="flex items-center gap-2"><span class="material-symbols-outlined text-primary text-sm">check_circle</span> <?php echo esc_html( kp_t( 'prog_track2_feat3' ) ); ?></li>
                    </ul>
                    <p class="font-headline font-extrabold text-on-surface text-2xl"><?php echo esc_html( kp_t( 'prog_track2_price' ) ); ?><span class="text-base font-normal text-on-surface-variant"><?php echo esc_html( kp_t( 'prog_track2_period' ) ); ?></span></p>
                </div>
            </div>
            <!-- Track 3 -->
            <div class="bg-tertiary-container rounded-xl p-10 relative overflow-hidden group">
                <div class="relative z-10">
                    <div class="w-14 h-14 bg-tertiary rounded-full flex items-center justify-center mb-6">
                        <span class="material-symbols-outlined text-on-tertiary text-2xl">emoji_events</span>
                    </div>
                    <span class="px-3 py-1 rounded-full bg-tertiary text-on-tertiary font-bold text-xs mb-4 inline-block"><?php echo esc_html( kp_t( 'prog_track3_age' ) ); ?></span>
                    <h3 class="font-headline text-2xl font-bold text-on-tertiary-container mb-3"><?php echo esc_html( kp_t( 'prog_track3_name' ) ); ?></h3>
                    <p class="text-on-tertiary-container/80 mb-6"><?php echo esc_html( kp_t( 'prog_track3_desc' ) ); ?></p>
                    <ul class="space-y-2 text-on-tertiary-container/80 text-sm mb-8">
                        <li class="flex items-center gap-2"><span class="material-symbols-outlined text-sm">check_circle</span> <?php echo esc_html( kp_t( 'prog_track3_feat1' ) ); ?></li>
                        <li class="flex items-center gap-2"><span class="material-symbols-outlined text-sm">check_circle</span> <?php echo esc_html( kp_t( 'prog_track3_feat2' ) ); ?></li>
                        <li class="flex items-center gap-2"><span class="material-symbols-outlined text-sm">check_circle</span> <?php echo esc_html( kp_t( 'prog_track3_feat3' ) ); ?></li>
                    </ul>
                    <p class="font-headline font-extrabold text-on-tertiary-container text-2xl"><?php echo esc_html( kp_t( 'prog_track3_price' ) ); ?><span class="text-base font-normal"><?php echo esc_html( kp_t( 'prog_track3_period' ) ); ?></span></p>
                </div>
                <span class="material-symbols-outlined absolute -bottom-8 -right-8 text-[160px] text-on-tertiary-container/10 group-hover:scale-110 transition-transform duration-700">emoji_events</span>
            </div>
        </div>
    </section>

    <!-- Schedule Section -->
    <section class="mb-24 bg-surface-container-low rounded-xl p-10 md:p-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="font-headline text-3xl font-extrabold text-on-surface mb-6"><?php echo esc_html( kp_t( 'programs_schedule_title' ) ); ?></h2>
                <p class="text-on-surface-variant mb-8 text-lg"><?php echo esc_html( kp_t( 'programs_schedule_desc' ) ); ?></p>
                <div class="space-y-4">
                    <?php
                    $schedule = [
                        [ kp_t('day_monday'),    kp_t('prog_track1_name'), '9:00 – 9:45' ],
                        [ kp_t('day_tuesday'),   kp_t('prog_track2_name'), '10:00 – 11:00' ],
                        [ kp_t('day_wednesday'), kp_t('prog_track3_name'), '4:00 – 5:30' ],
                        [ kp_t('day_thursday'),  kp_t('prog_track2_name'), '5:00 – 6:00' ],
                        [ kp_t('day_friday'),    kp_t('prog_track1_name'), '10:00 – 10:45' ],
                        [ kp_t('day_saturday'),  kp_t('prog_open_play'),   '9:00 – 12:00' ],
                    ];
                    foreach ( $schedule as $slot ) : ?>
                    <div class="flex items-center justify-between bg-surface-container-lowest rounded-xl px-6 py-4 shadow-sm">
                        <span class="font-headline font-bold text-primary w-24"><?php echo esc_html( $slot[0] ); ?></span>
                        <span class="font-medium text-on-surface flex-1 px-4"><?php echo esc_html( $slot[1] ); ?></span>
                        <span class="text-on-surface-variant text-sm"><?php echo esc_html( $slot[2] ); ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="text-center">
                <div class="bg-primary rounded-xl p-10 inline-block">
                    <span class="material-symbols-outlined text-on-primary text-7xl mb-4 block">event_available</span>
                    <h3 class="font-headline text-2xl font-bold text-on-primary mb-4"><?php echo esc_html( kp_t( 'programs_trial_title' ) ); ?></h3>
                    <p class="text-on-primary/80 mb-8"><?php echo esc_html( kp_t( 'programs_trial_desc' ) ); ?></p>
                    <a href="<?php echo esc_url( kp_url( '/join' ) ); ?>" class="inline-block bg-surface-container-lowest text-primary font-headline font-bold px-8 py-4 rounded-full hover:bg-white transition-colors shadow-lg">
                        <?php echo esc_html( kp_t( 'programs_trial_btn' ) ); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Enrollment CTA -->
    <section class="text-center bg-surface-container-lowest rounded-xl p-12 shadow-sm border border-outline-variant/10">
        <h2 class="font-headline text-3xl font-extrabold text-on-surface mb-4"><?php echo esc_html( kp_t( 'programs_enroll_title' ) ); ?></h2>
        <p class="text-on-surface-variant mb-8 text-lg max-w-xl mx-auto"><?php echo esc_html( kp_t( 'programs_enroll_desc' ) ); ?></p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="<?php echo esc_url( kp_url( '/join' ) ); ?>" class="bg-gradient-to-br from-primary to-primary-fixed text-on-primary px-10 py-4 rounded-full font-headline font-bold shadow-xl hover:scale-105 transition-all text-center"><?php echo esc_html( kp_t( 'programs_enroll_btn' ) ); ?></a>
            <a href="<?php echo esc_url( kp_url( '/activities' ) ); ?>" class="bg-surface-container text-on-surface px-10 py-4 rounded-full font-headline font-bold hover:bg-surface-container-high transition-colors text-center"><?php echo esc_html( kp_t( 'programs_browse_btn' ) ); ?></a>
        </div>
    </section>

</main>
<?php get_footer(); ?>
