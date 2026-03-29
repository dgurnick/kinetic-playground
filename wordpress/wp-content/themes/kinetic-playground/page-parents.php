<?php
/* Template Name: Parents */
get_header(); ?>
<main class="max-w-7xl mx-auto px-6 pt-16 pb-20">

    <!-- Hero -->
    <header class="text-center mb-20 relative">
        <div class="inline-block px-6 py-2 bg-surface-container-high text-primary rounded-full font-bold text-sm mb-6">FOR THE GROWN-UPS</div>
        <h1 class="font-headline text-5xl md:text-7xl font-extrabold tracking-tight text-on-surface mb-6">
            Everything You Need to <span class="text-primary">Know</span>
        </h1>
        <p class="text-on-surface-variant text-xl max-w-2xl mx-auto leading-relaxed">
            We know you have questions. Here's everything parents want to know before their child's first day — and after.
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
            <h3 class="font-headline text-xl font-bold text-on-surface mb-3">Safety First, Always</h3>
            <p class="text-on-surface-variant leading-relaxed">All surfaces are soft and impact-rated. Staff are certified in first aid and child CPR. We maintain a strict 1:6 staff-to-child ratio at all times.</p>
        </div>
        <!-- Drop-off -->
        <div class="bg-surface-container-lowest rounded-xl p-8 shadow-sm border border-outline-variant/10 group hover:shadow-xl transition-all duration-300">
            <div class="w-14 h-14 bg-secondary-container rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                <span class="material-symbols-outlined text-on-secondary-container text-2xl">directions_car</span>
            </div>
            <h3 class="font-headline text-xl font-bold text-on-surface mb-3">Easy Drop-Off</h3>
            <p class="text-on-surface-variant leading-relaxed">Dedicated drop-off and pick-up zone with covered parking. Staff greet children at the car door. No long walks with little ones in the rain.</p>
        </div>
        <!-- Parent Lounge -->
        <div class="bg-surface-container-lowest rounded-xl p-8 shadow-sm border border-outline-variant/10 group hover:shadow-xl transition-all duration-300">
            <div class="w-14 h-14 bg-tertiary-container rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                <span class="material-symbols-outlined text-on-tertiary-container text-2xl">coffee</span>
            </div>
            <h3 class="font-headline text-xl font-bold text-on-surface mb-3">Parent Lounge</h3>
            <p class="text-on-surface-variant leading-relaxed">Stay and unwind in our comfortable lounge with complimentary coffee, fast WiFi, and a viewing window so you can watch without distracting your little one.</p>
        </div>
        <!-- Communication -->
        <div class="bg-surface-container-lowest rounded-xl p-8 shadow-sm border border-outline-variant/10 group hover:shadow-xl transition-all duration-300">
            <div class="w-14 h-14 bg-primary-container rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                <span class="material-symbols-outlined text-on-primary-container text-2xl">notifications</span>
            </div>
            <h3 class="font-headline text-xl font-bold text-on-surface mb-3">Always in the Loop</h3>
            <p class="text-on-surface-variant leading-relaxed">Weekly recap emails, progress photos after every class, and a parent app to track attendance, upcoming events, and session notes.</p>
        </div>
        <!-- Allergies -->
        <div class="bg-surface-container-lowest rounded-xl p-8 shadow-sm border border-outline-variant/10 group hover:shadow-xl transition-all duration-300">
            <div class="w-14 h-14 bg-secondary-container rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                <span class="material-symbols-outlined text-on-secondary-container text-2xl">health_and_safety</span>
            </div>
            <h3 class="font-headline text-xl font-bold text-on-surface mb-3">Allergy &amp; Health Aware</h3>
            <p class="text-on-surface-variant leading-relaxed">Nut-free facility. All health notes and allergy profiles are reviewed by staff before your child's first session. We take special needs seriously.</p>
        </div>
        <!-- Flexible Plans -->
        <div class="bg-surface-container-lowest rounded-xl p-8 shadow-sm border border-outline-variant/10 group hover:shadow-xl transition-all duration-300">
            <div class="w-14 h-14 bg-tertiary-container rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                <span class="material-symbols-outlined text-on-tertiary-container text-2xl">swap_horiz</span>
            </div>
            <h3 class="font-headline text-xl font-bold text-on-surface mb-3">Flexible Plans</h3>
            <p class="text-on-surface-variant leading-relaxed">Pause or change programs at the end of any month — no penalty. Life with kids is unpredictable; your membership shouldn't make it harder.</p>
        </div>
    </section>

    <!-- What to Bring -->
    <section class="mb-24 bg-surface-container-low rounded-xl p-10 md:p-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-start">
            <div>
                <h2 class="font-headline text-3xl font-extrabold text-on-surface mb-6">What to Bring</h2>
                <p class="text-on-surface-variant mb-8">Keep it simple. Here's our recommended checklist for every visit:</p>
                <ul class="space-y-4">
                    <?php
                    $items = [
                        ['sports_and_outdoors', 'Comfortable, stretchy clothing — kids move a lot!'],
                        ['sports', 'Closed-toe sneakers (no sandals or Crocs on the floor)'],
                        ['water_drop', 'A labelled water bottle'],
                        ['lunch_dining', 'A nut-free snack for longer sessions'],
                        ['medication', 'Any prescribed medication with written instructions'],
                        ['sentiment_satisfied', 'A big smile — everything else we take care of'],
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
                <h2 class="font-headline text-3xl font-extrabold text-on-surface mb-6">Hours &amp; Location</h2>
                <div class="space-y-6">
                    <div class="bg-surface-container-lowest rounded-xl p-6 shadow-sm">
                        <h4 class="font-headline font-bold text-primary mb-4 flex items-center gap-2">
                            <span class="material-symbols-outlined">schedule</span> Opening Hours
                        </h4>
                        <div class="space-y-2 text-on-surface-variant">
                            <div class="flex justify-between"><span>Monday – Friday</span><span class="font-medium text-on-surface">8:00 AM – 7:00 PM</span></div>
                            <div class="flex justify-between"><span>Saturday</span><span class="font-medium text-on-surface">8:00 AM – 5:00 PM</span></div>
                            <div class="flex justify-between"><span>Sunday</span><span class="font-medium text-on-surface">10:00 AM – 3:00 PM</span></div>
                        </div>
                    </div>
                    <div class="bg-surface-container-lowest rounded-xl p-6 shadow-sm">
                        <h4 class="font-headline font-bold text-primary mb-4 flex items-center gap-2">
                            <span class="material-symbols-outlined">location_on</span> Address
                        </h4>
                        <p class="text-on-surface-variant">123 Energy Lane<br/>Brighton Heights, BH 90210</p>
                        <p class="text-sm text-on-surface-variant mt-2">Ample free parking on-site. Bus routes 14 and 22 stop directly outside.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="text-center bg-primary-container rounded-xl p-12 relative overflow-hidden">
        <div class="relative z-10">
            <h2 class="font-headline text-3xl font-extrabold text-on-primary-container mb-4">Still have questions?</h2>
            <p class="text-on-primary-container/80 mb-8 text-lg max-w-xl mx-auto">Our team is always happy to chat — by phone, email, or in person. Come by for a free tour anytime.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo esc_url( home_url( '/join' ) ); ?>" class="bg-primary text-on-primary px-10 py-4 rounded-full font-headline font-bold shadow-xl hover:scale-105 transition-all text-center">Get in Touch</a>
                <a href="<?php echo esc_url( home_url( '/programs' ) ); ?>" class="bg-surface-container-lowest text-on-primary-container px-10 py-4 rounded-full font-headline font-bold hover:bg-white transition-colors text-center">View Programs</a>
            </div>
        </div>
        <div class="absolute top-0 left-0 w-64 h-64 bg-white/10 organic-blob -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-80 h-80 bg-primary/20 organic-blob translate-x-1/3 translate-y-1/3"></div>
    </section>

</main>
<?php get_footer(); ?>
