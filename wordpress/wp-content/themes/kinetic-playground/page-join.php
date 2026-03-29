<?php
/* Template Name: Join */
get_header(); ?>
<main class="max-w-7xl mx-auto px-4 py-12 md:py-20">

    <!-- Hero Section -->
    <section class="text-center mb-20">
        <h1 class="font-headline text-5xl md:text-7xl font-extrabold tracking-tight text-on-surface mb-6">
            <?php echo esc_html( kp_t( 'join_h1_1' ) ); ?> <span class="text-primary-fixed-dim"><?php echo esc_html( kp_t( 'join_h1_2' ) ); ?></span>
        </h1>
        <p class="text-on-surface-variant text-lg md:text-xl max-w-2xl mx-auto">
            <?php echo esc_html( kp_t( 'join_subtitle' ) ); ?>
        </p>
    </section>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
        <!-- Left Column: Form -->
        <div class="lg:col-span-7 bg-surface-container-lowest rounded-xl p-8 md:p-12 shadow-[0_32px_64px_-4px_rgba(33,47,69,0.06)]">
            <form class="space-y-8" method="post" action="<?php echo esc_url( kp_url( '/join' ) ); ?>">
                <?php wp_nonce_field( 'kinetic_join_form', 'join_nonce' ); ?>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="font-headline font-bold text-on-surface-variant ml-2" for="parent_name"><?php echo esc_html( kp_t( 'join_label_parent' ) ); ?></label>
                        <input id="parent_name" name="parent_name" type="text" class="w-full bg-surface-container-high border-none rounded-full px-6 py-4 focus:ring-2 focus:ring-primary-fixed/50 placeholder:text-outline" placeholder="<?php echo esc_attr( kp_t( 'join_placeholder_parent' ) ); ?>" />
                    </div>
                    <div class="space-y-2">
                        <label class="font-headline font-bold text-on-surface-variant ml-2" for="child_name"><?php echo esc_html( kp_t( 'join_label_child' ) ); ?></label>
                        <input id="child_name" name="child_name" type="text" class="w-full bg-surface-container-high border-none rounded-full px-6 py-4 focus:ring-2 focus:ring-primary-fixed/50 placeholder:text-outline" placeholder="<?php echo esc_attr( kp_t( 'join_placeholder_child' ) ); ?>" />
                    </div>
                </div>
                <div class="space-y-2">
                    <label class="font-headline font-bold text-on-surface-variant ml-2" for="email"><?php echo esc_html( kp_t( 'join_label_email' ) ); ?></label>
                    <input id="email" name="email" type="email" class="w-full bg-surface-container-high border-none rounded-full px-6 py-4 focus:ring-2 focus:ring-primary-fixed/50 placeholder:text-outline" placeholder="<?php echo esc_attr( kp_t( 'join_placeholder_email' ) ); ?>" required />
                </div>
                <div class="space-y-2">
                    <label class="font-headline font-bold text-on-surface-variant ml-2" for="inquiry"><?php echo esc_html( kp_t( 'join_label_inquiry' ) ); ?></label>
                    <select id="inquiry" name="inquiry" class="w-auto bg-surface-container-high border-none rounded-full px-6 py-4 focus:ring-2 focus:ring-primary-fixed/50 text-on-surface-variant appearance-none">
                        <option><?php echo esc_html( kp_t( 'join_option1' ) ); ?></option>
                        <option><?php echo esc_html( kp_t( 'join_option2' ) ); ?></option>
                        <option><?php echo esc_html( kp_t( 'join_option3' ) ); ?></option>
                        <option><?php echo esc_html( kp_t( 'join_option4' ) ); ?></option>
                    </select>
                </div>
                <div class="space-y-2">
                    <label class="font-headline font-bold text-on-surface-variant ml-2" for="message"><?php echo esc_html( kp_t( 'join_label_message' ) ); ?></label>
                    <textarea id="message" name="message" rows="4" class="w-full bg-surface-container-high border-none rounded-3xl px-6 py-4 focus:ring-2 focus:ring-primary-fixed/50 placeholder:text-outline" placeholder="<?php echo esc_attr( kp_t( 'join_placeholder_message' ) ); ?>"></textarea>
                </div>
                <button type="submit" class="w-full md:w-auto bg-gradient-to-br from-primary to-primary-container text-on-primary font-extrabold text-xl px-12 py-5 rounded-full hover:scale-105 transition-transform duration-300 shadow-xl flex items-center justify-center gap-3">
                    <?php echo esc_html( kp_t( 'join_submit' ) ); ?>
                    <span class="material-symbols-outlined">send</span>
                </button>
            </form>
        </div>

        <!-- Right Column: Info & Map -->
        <div class="lg:col-span-5 space-y-8">
            <!-- Contact Info Card -->
            <div class="bg-primary-container text-on-primary-container p-8 rounded-xl shadow-lg relative overflow-hidden">
                <div class="relative z-10">
                    <h3 class="font-headline text-2xl font-bold mb-4"><?php echo esc_html( kp_t( 'join_visit_title' ) ); ?></h3>
                    <p class="mb-6 opacity-90 leading-relaxed"><?php echo kp_t( 'join_visit_address' ); ?></p>
                    <div class="flex items-center gap-4 mb-4">
                        <div class="bg-surface-container-lowest/30 p-2 rounded-full">
                            <span class="material-symbols-outlined">call</span>
                        </div>
                        <span class="font-bold">555-PLAY-NOW</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="bg-surface-container-lowest/30 p-2 rounded-full">
                            <span class="material-symbols-outlined">mail</span>
                        </div>
                        <span class="font-bold">play@kineticplayground.com</span>
                    </div>
                </div>
                <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-on-primary-container/10 rounded-full blur-3xl"></div>
            </div>

            <!-- Map -->
            <div class="rounded-xl overflow-hidden shadow-lg h-80 relative">
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuCct2mlGbZQxhSi1Qr3D-oiZ5s-g0kG3n9i-cZgeEqP2tQ47sXbRZ-1HHR6vIlBCD4iEsdqsAJZqiB0DtqkKzQgQ1F3CkmVxbpko46ukedx5TlOhSN8r-AaPOyVy8wS8GtMRPRjx9Huz2A24NYLAdtzQgwSKt8CvwK6-NjPty6QW9V5xBIfbcTYzUkeT1eKcXb3Msgw0LAP-Yx-bwSjSCNqXbaXpeL5Lnp-0nNBpNKPobX93RELWnO1LYii78m2KhdVU7p4aCKIYJdl" alt="Map location" class="w-full h-full object-cover" />
                <div class="absolute bottom-4 left-4 glass-card px-4 py-2 rounded-full flex items-center gap-2 border border-white/20">
                    <span class="material-symbols-outlined text-primary">location_on</span>
                    <span class="text-sm font-bold"><?php echo esc_html( kp_t( 'join_open_today' ) ); ?></span>
                </div>
            </div>

            <!-- Social Links -->
            <div class="flex justify-between items-center p-6 bg-surface-container-low rounded-xl">
                <span class="font-headline font-bold text-on-surface-variant"><?php echo esc_html( kp_t( 'join_follow' ) ); ?></span>
                <div class="flex gap-4">
                    <a href="#" class="w-12 h-12 flex items-center justify-center bg-surface-container-lowest rounded-full shadow-sm text-primary hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined">photo_camera</span>
                    </a>
                    <a href="#" class="w-12 h-12 flex items-center justify-center bg-surface-container-lowest rounded-full shadow-sm text-primary hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined">video_library</span>
                    </a>
                    <a href="#" class="w-12 h-12 flex items-center justify-center bg-surface-container-lowest rounded-full shadow-sm text-primary hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined">groups</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <section class="mt-32 mb-20">
        <div class="text-center mb-12">
            <h2 class="font-headline text-4xl font-extrabold text-on-surface mb-4"><?php echo esc_html( kp_t( 'join_faq_title' ) ); ?></h2>
            <div class="h-2 w-24 bg-primary-container mx-auto rounded-full"></div>
        </div>
        <div class="max-w-4xl mx-auto space-y-4">
            <div class="bg-surface-container-lowest rounded-xl p-6 shadow-sm group">
                <div class="flex justify-between items-center cursor-pointer">
                    <h4 class="font-headline font-bold text-lg text-on-surface"><?php echo esc_html( kp_t( 'join_faq1' ) ); ?></h4>
                    <div class="organic-blob bg-surface-container-high w-10 h-10 flex items-center justify-center text-primary group-hover:rotate-12 transition-transform">
                        <span class="material-symbols-outlined">expand_more</span>
                    </div>
                </div>
            </div>
            <div class="bg-surface-container-lowest rounded-xl p-6 shadow-sm group">
                <div class="flex justify-between items-center cursor-pointer">
                    <h4 class="font-headline font-bold text-lg text-on-surface"><?php echo esc_html( kp_t( 'join_faq2' ) ); ?></h4>
                    <div class="organic-blob bg-surface-container-high w-10 h-10 flex items-center justify-center text-primary group-hover:rotate-12 transition-transform">
                        <span class="material-symbols-outlined">cake</span>
                    </div>
                </div>
            </div>
            <div class="bg-surface-container-lowest rounded-xl p-6 shadow-sm group">
                <div class="flex justify-between items-center cursor-pointer">
                    <h4 class="font-headline font-bold text-lg text-on-surface"><?php echo esc_html( kp_t( 'join_faq3' ) ); ?></h4>
                    <div class="organic-blob bg-surface-container-high w-10 h-10 flex items-center justify-center text-primary group-hover:rotate-12 transition-transform">
                        <span class="material-symbols-outlined">coffee</span>
                    </div>
                </div>
            </div>
            <div class="bg-surface-container-lowest rounded-xl p-6 shadow-sm group">
                <div class="flex justify-between items-center cursor-pointer">
                    <h4 class="font-headline font-bold text-lg text-on-surface"><?php echo esc_html( kp_t( 'join_faq4' ) ); ?></h4>
                    <div class="organic-blob bg-surface-container-high w-10 h-10 flex items-center justify-center text-primary group-hover:rotate-12 transition-transform">
                        <span class="material-symbols-outlined">verified_user</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
