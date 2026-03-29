<!-- Footer -->
<footer class="w-full py-12 px-8 grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl mx-auto rounded-t-[3rem] mt-20 bg-[#ebf1ff]">
    <div class="flex flex-col gap-4">
        <span class="text-xl font-bold text-[#006479] font-headline"><?php bloginfo( 'name' ); ?></span>
        <p class="text-[#4e5c74] font-body text-sm leading-relaxed max-w-xs">
            <?php echo esc_html( kp_t( 'footer_tagline' ) ); ?>
        </p>
        <p class="text-[#4e5c74] font-body text-sm">&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. <?php echo esc_html( kp_t( 'footer_rights' ) ); ?></p>
    </div>
    <div class="flex flex-col gap-4">
        <h4 class="font-headline font-bold text-[#006479]"><?php echo esc_html( kp_t( 'footer_links' ) ); ?></h4>
        <div class="grid grid-cols-2 gap-2">
            <a class="text-[#4e5c74] font-body text-sm hover:text-[#006479] transition-colors" href="<?php echo esc_url( kp_url( '/programs' ) ); ?>"><?php echo esc_html( kp_t( 'nav_programs' ) ); ?></a>
            <a class="text-[#4e5c74] font-body text-sm hover:text-[#006479] transition-colors" href="#"><?php echo esc_html( kp_t( 'footer_privacy' ) ); ?></a>
            <a class="text-[#4e5c74] font-body text-sm hover:text-[#006479] transition-colors" href="<?php echo esc_url( kp_url( '/activities' ) ); ?>"><?php echo esc_html( kp_t( 'nav_play_hub' ) ); ?></a>
            <a class="text-[#4e5c74] font-body text-sm hover:text-[#006479] transition-colors" href="#"><?php echo esc_html( kp_t( 'footer_terms' ) ); ?></a>
            <a class="text-[#4e5c74] font-body text-sm hover:text-[#006479] transition-colors" href="<?php echo esc_url( kp_url( '/parents' ) ); ?>"><?php echo esc_html( kp_t( 'nav_parents' ) ); ?></a>
            <a class="text-[#4e5c74] font-body text-sm hover:text-[#006479] transition-colors" href="<?php echo esc_url( kp_url( '/join' ) ); ?>"><?php echo esc_html( kp_t( 'footer_contact' ) ); ?></a>
            <a class="text-[#4e5c74] font-body text-sm hover:text-[#006479] transition-colors" href="<?php echo esc_url( kp_url( '/about' ) ); ?>"><?php echo esc_html( kp_t( 'nav_about' ) ); ?></a>
        </div>
    </div>
    <div class="flex flex-col gap-4">
        <h4 class="font-headline font-bold text-[#006479]"><?php echo esc_html( kp_t( 'footer_connect' ) ); ?></h4>
        <div class="flex gap-4">
            <div class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-[#006479] hover:scale-110 transition-transform cursor-pointer">
                <span class="material-symbols-outlined">share</span>
            </div>
            <div class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-[#006479] hover:scale-110 transition-transform cursor-pointer">
                <span class="material-symbols-outlined">chat</span>
            </div>
            <div class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-[#006479] hover:scale-110 transition-transform cursor-pointer">
                <span class="material-symbols-outlined">videocam</span>
            </div>
        </div>
        <p class="text-[#4e5c74] font-body text-xs mt-4">
            123 Play Lane, Curiosity City, CP 45678
        </p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
