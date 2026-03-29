<?php
/* Template Name: About */
get_header(); ?>
<main class="max-w-7xl mx-auto px-6 overflow-hidden">

    <!-- Hero Section -->
    <section class="relative pt-20 pb-12 text-center">
        <div class="inline-block px-6 py-2 bg-surface-container-high text-primary rounded-full font-bold text-sm mb-6"><?php echo esc_html( kp_t( 'about_badge' ) ); ?></div>
        <h1 class="text-5xl md:text-7xl font-headline font-extrabold tracking-tight text-on-surface mb-8">
            <?php echo esc_html( kp_t( 'about_h1_1' ) ); ?> <br/>
            <span style="background: linear-gradient(135deg, #006479, #40cef3); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"><?php echo esc_html( kp_t( 'about_h1_2' ) ); ?></span>
        </h1>
        <p class="text-xl text-on-surface-variant max-w-2xl mx-auto leading-relaxed"><?php echo esc_html( kp_t( 'about_subtitle' ) ); ?></p>
        <div class="absolute top-1/4 -left-20 w-64 h-64 bg-primary-container/20 blur-3xl rounded-full -z-10"></div>
        <div class="absolute bottom-0 -right-20 w-80 h-80 bg-secondary-container/20 blur-3xl rounded-full -z-10"></div>
    </section>

    <!-- Our Story Section -->
    <section class="py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div class="relative">
                <div class="bg-surface-container-lowest p-4 rounded-xl shadow-2xl rotate-2">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDscUVR_MGWi3-tg5WxhefXgXgNY9Xq5QXwB_kCPfQcducKCeTHOCvZnHHUDTXjxKkC3xK-DrSrl5dpydStvR1SbG7BfksDBqhhSCG2IdzQtAlq3CgOtKtcvQC1TBDT7GTxc5O2Tctsh2yZ-u7OrLva4B07JjSV00wKe3ZsXa9HGGWT82aGPva5Dsr4LSQlpsb99_IEH9NokwpstzxhaKsf4BbfflIITjoqvF1mBKlf4VuOwOGGeQv8ZA3rSZ-zQDltsTVlTpNs_P-9" alt="Creative kids play space" class="rounded-lg w-full h-[500px] object-cover" />
                </div>
                <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-tertiary organic-blob flex items-center justify-center opacity-90 -rotate-12">
                    <span class="material-symbols-outlined text-on-tertiary text-5xl">rocket_launch</span>
                </div>
            </div>
            <div class="space-y-8">
                <h2 class="text-4xl font-headline font-bold text-on-surface"><?php echo esc_html( kp_t( 'about_story_title' ) ); ?></h2>
                <div class="space-y-6 text-lg text-on-surface-variant leading-relaxed">
                    <p><?php echo esc_html( kp_t( 'about_story_p1' ) ); ?></p>
                    <p><?php echo esc_html( kp_t( 'about_story_p2' ) ); ?></p>
                    <div class="flex items-center gap-4 pt-4">
                        <div class="w-12 h-12 rounded-full bg-secondary-container flex items-center justify-center text-secondary">
                            <span class="material-symbols-outlined">star</span>
                        </div>
                        <span class="font-bold text-on-surface"><?php echo esc_html( kp_t( 'about_story_stat' ) ); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Philosophy Bento Grid -->
    <section class="py-20">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-headline font-bold text-on-surface mb-4"><?php echo esc_html( kp_t( 'about_philosophy_title' ) ); ?></h2>
            <p class="text-on-surface-variant"><?php echo esc_html( kp_t( 'about_philosophy_sub' ) ); ?></p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="md:col-span-2 bg-primary-container p-10 rounded-xl relative overflow-hidden group">
                <div class="relative z-10">
                    <h3 class="text-3xl font-headline font-bold text-on-primary-container mb-4"><?php echo esc_html( kp_t( 'about_p1_title' ) ); ?></h3>
                    <p class="text-on-primary-container/80 text-lg max-w-md"><?php echo esc_html( kp_t( 'about_p1_desc' ) ); ?></p>
                </div>
                <span class="material-symbols-outlined absolute -bottom-10 -right-10 text-[200px] text-on-primary-container/10 group-hover:scale-110 transition-transform duration-700">directions_run</span>
            </div>
            <div class="bg-surface-container-high p-10 rounded-xl flex flex-col justify-between">
                <div class="w-16 h-16 bg-secondary-container rounded-full flex items-center justify-center text-secondary mb-8">
                    <span class="material-symbols-outlined text-3xl">shield_with_heart</span>
                </div>
                <div>
                <h3 class="text-2xl font-headline font-bold text-on-surface mb-2"><?php echo esc_html( kp_t( 'about_p2_title' ) ); ?></h3>
                <p class="text-on-surface-variant"><?php echo esc_html( kp_t( 'about_p2_desc' ) ); ?></p>
                </div>
            </div>
            <div class="bg-tertiary-container p-10 rounded-xl">
                <h3 class="text-2xl font-headline font-bold text-on-tertiary-container mb-4"><?php echo esc_html( kp_t( 'about_p3_title' ) ); ?></h3>
                <p class="text-on-tertiary-container/80"><?php echo esc_html( kp_t( 'about_p3_desc' ) ); ?></p>
            </div>
            <div class="md:col-span-2 bg-surface-container-lowest border border-outline-variant/15 p-10 rounded-xl flex items-center gap-10 shadow-[0_32px_64px_-4px_rgba(33,47,69,0.06)]">
                <div class="flex-1">
                    <h3 class="text-2xl font-headline font-bold text-on-surface mb-4"><?php echo esc_html( kp_t( 'about_p4_title' ) ); ?></h3>
                    <p class="text-on-surface-variant"><?php echo esc_html( kp_t( 'about_p4_desc' ) ); ?></p>
                </div>
                <div class="hidden md:block w-32 h-32 bg-primary organic-blob flex-shrink-0 opacity-20"></div>
            </div>
        </div>
    </section>

    <!-- Meet the Team -->
    <section class="py-20">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-headline font-bold text-on-surface mb-4"><?php echo esc_html( kp_t( 'about_team_title' ) ); ?></h2>
            <p class="text-on-surface-variant"><?php echo esc_html( kp_t( 'about_team_sub' ) ); ?></p>
        </div>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Dr. Sarah Chen -->
            <div class="group">
                <div class="relative mb-6">
                    <div class="aspect-square bg-surface-container-high rounded-xl overflow-hidden group-hover:shadow-xl transition-all duration-300">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuCr1ez4fPQRIlbzUN34EslGtemJw--YRWVuOkP4g_rIoCY9RYCIxyznd7RFImNNbnhlOT-1d0L0St6ZyJpteoGkYiy8hfaWP6hDDhT1EY5vkiY2iTSN6jQuRnSGcKZ_R9dToshyju7VX7FQ3XjIdAYd-UO3iWyXYxBM-30I9INs7oD7-Uui-HrNwYlyAxKdjeuZ3R3uf1bARzZyjc7HA_7XLORi2NsD1cMXska_26IS7qCbky4r2ZgXh4tNU07xnpqQR_Wcl7BB-aE0" alt="Dr. Sarah Chen" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all" />
                    </div>
                    <div class="absolute -bottom-4 -right-4 w-12 h-12 bg-primary text-on-primary rounded-full flex items-center justify-center border-4 border-background">
                        <span class="material-symbols-outlined text-sm">sports_gymnastics</span>
                    </div>
                </div>
                <h4 class="text-xl font-headline font-bold text-on-surface"><?php echo esc_html( kp_t( 'about_team1_name' ) ); ?></h4>
                <p class="text-primary font-medium text-sm"><?php echo kp_t( 'about_team1_role' ); ?></p>
            </div>
            <!-- Coach Mike Rossi -->
            <div class="group mt-8 lg:mt-0">
                <div class="relative mb-6">
                    <div class="aspect-square bg-surface-container-high rounded-xl overflow-hidden group-hover:shadow-xl transition-all duration-300">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuD3LCquPW4ykOzeNRjbTrDwVo7eiP3ye_wKnQqX0GjoPN7ZXC0ia664mn5bMN2cD_LBNV5dFfjsYQjew8TvCJ3zcx8itsvXFKHuos3xWaWypNAXALjf1q-HPFBO_Bam4dBa4pFel0PubwQ4DnkYmTtvqJDeN9zviBJflb_5Tpsl_A33rGgNTP8GUZxegpqjnI5V4yxGwDfUQYBd3wblBF4MnEgtnFIVA4trmb2LWjSziOl0ZvykjweTV3DAPCjUuln5u_iXzG7ejtLj" alt="Coach Mike Rossi" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all" />
                    </div>
                    <div class="absolute -bottom-4 -right-4 w-12 h-12 bg-secondary text-on-secondary rounded-full flex items-center justify-center border-4 border-background">
                        <span class="material-symbols-outlined text-sm">skateboarding</span>
                    </div>
                </div>
                <h4 class="text-xl font-headline font-bold text-on-surface"><?php echo esc_html( kp_t( 'about_team2_name' ) ); ?></h4>
                <p class="text-primary font-medium text-sm"><?php echo esc_html( kp_t( 'about_team2_role' ) ); ?></p>
            </div>
            <!-- Aisha Ibrahim -->
            <div class="group">
                <div class="relative mb-6">
                    <div class="aspect-square bg-surface-container-high rounded-xl overflow-hidden group-hover:shadow-xl transition-all duration-300">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDw2eS4BfaP-3LbY3zSoEdiQ1D_Jcl7vSDxcHiNrFZy6b5hD71l1SUQl2n5X8QVwoA_6Qhybanh4oCz2ZX5g4zAEj_XgwX3V8qaKKvntRUVdb1sH9lM6klhYOECsEMQGuHydSqfL8eHhA8w72YEuY3hc0GTnzW2UDBFA4jMnhXCcYJRAEYi94JCTR44nm8TwlxUHjdYexgmo6gE0bXrCTR6QYfHkseNxj4hNfg_M2hoNHldWFZ9kOAdhcx4lA3eSGpk18cEtFzJTxtY" alt="Aisha Ibrahim" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all" />
                    </div>
                    <div class="absolute -bottom-4 -right-4 w-12 h-12 bg-tertiary text-on-tertiary rounded-full flex items-center justify-center border-4 border-background">
                        <span class="material-symbols-outlined text-sm">psychology</span>
                    </div>
                </div>
                <h4 class="text-xl font-headline font-bold text-on-surface"><?php echo esc_html( kp_t( 'about_team3_name' ) ); ?></h4>
                <p class="text-primary font-medium text-sm"><?php echo esc_html( kp_t( 'about_team3_role' ) ); ?></p>
            </div>
            <!-- Leo Martinez -->
            <div class="group mt-8 lg:mt-0">
                <div class="relative mb-6">
                    <div class="aspect-square bg-surface-container-high rounded-xl overflow-hidden group-hover:shadow-xl transition-all duration-300">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuBJiz_Pg30abjHtniqIC0A25YPYe5zKDDWInVILsdT-P3k1zx8YkqXblIL86IAXrdq_m-FWv2LEkcqhjZ5f98iNHRUhkBwjbTNypVCNDtr2sJDDYggK2eBMpF09zmgYDq5g9O4T3_-0FKLqLUHEBLHi0xIb7OFAKqgXD-4Zt8yb7RKjw0jFGnWfj-Exp2P1UmKuoeFL1Pzl4OzyPybi3KbrIJ1wqJjcKD4Mrf-UVt0v3bXDU-tr" alt="Leo Martinez" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all" />
                    </div>
                    <div class="absolute -bottom-4 -right-4 w-12 h-12 bg-primary-container text-on-primary-container rounded-full flex items-center justify-center border-4 border-background">
                        <span class="material-symbols-outlined text-sm">health_and_safety</span>
                    </div>
                </div>
                <h4 class="text-xl font-headline font-bold text-on-surface"><?php echo esc_html( kp_t( 'about_team4_name' ) ); ?></h4>
                <p class="text-primary font-medium text-sm"><?php echo esc_html( kp_t( 'about_team4_role' ) ); ?></p>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="my-20 bg-surface-container-low rounded-xl p-12 text-center relative overflow-hidden">
        <div class="relative z-10">
            <h2 class="text-4xl font-headline font-bold text-on-surface mb-6"><?php echo esc_html( kp_t( 'about_cta_title' ) ); ?></h2>
            <p class="text-on-surface-variant mb-10 text-lg max-w-xl mx-auto"><?php echo esc_html( kp_t( 'about_cta_desc' ) ); ?></p>
            <div class="flex flex-col md:flex-row gap-4 justify-center">
                <a href="<?php echo esc_url( kp_url( '/join' ) ); ?>" class="bg-gradient-to-br from-primary to-primary-fixed text-on-primary px-10 py-4 rounded-full font-headline font-bold shadow-xl hover:scale-105 transition-all text-center"><?php echo esc_html( kp_t( 'about_cta1' ) ); ?></a>
                <a href="<?php echo esc_url( kp_url( '/join' ) ); ?>" class="bg-surface-container-lowest text-primary px-10 py-4 rounded-full font-headline font-bold border border-outline-variant/20 hover:bg-surface transition-colors text-center"><?php echo esc_html( kp_t( 'about_cta2' ) ); ?></a>
            </div>
        </div>
        <div class="absolute top-0 left-0 w-64 h-64 bg-primary-container/20 organic-blob -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-80 h-80 bg-tertiary-container/20 organic-blob translate-x-1/3 translate-y-1/3"></div>
    </section>
</main>
<?php get_footer(); ?>
