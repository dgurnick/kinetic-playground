<!-- Footer -->
<footer class="w-full py-12 px-8 grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl mx-auto rounded-t-[3rem] mt-20 bg-[#ebf1ff]">
    <div class="flex flex-col gap-4">
        <span class="text-xl font-bold text-[#006479] font-headline"><?php bloginfo( 'name' ); ?></span>
        <p class="text-[#4e5c74] font-body text-sm leading-relaxed max-w-xs">
            Creating vibrant spaces where children learn through movement and creativity. Join our community of little explorers.
        </p>
        <p class="text-[#4e5c74] font-body text-sm">&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
    </div>
    <div class="flex flex-col gap-4">
        <h4 class="font-headline font-bold text-[#006479]">Quick Links</h4>
        <div class="grid grid-cols-2 gap-2">
            <a class="text-[#4e5c74] font-body text-sm hover:text-[#006479] transition-colors" href="<?php echo esc_url( home_url( '/programs' ) ); ?>">Programs</a>
            <a class="text-[#4e5c74] font-body text-sm hover:text-[#006479] transition-colors" href="#">Privacy Policy</a>
            <a class="text-[#4e5c74] font-body text-sm hover:text-[#006479] transition-colors" href="<?php echo esc_url( home_url( '/activities' ) ); ?>">Play-Hub</a>
            <a class="text-[#4e5c74] font-body text-sm hover:text-[#006479] transition-colors" href="#">Terms of Play</a>
            <a class="text-[#4e5c74] font-body text-sm hover:text-[#006479] transition-colors" href="#">Parents</a>
            <a class="text-[#4e5c74] font-body text-sm hover:text-[#006479] transition-colors" href="<?php echo esc_url( home_url( '/join' ) ); ?>">Contact Us</a>
            <a class="text-[#4e5c74] font-body text-sm hover:text-[#006479] transition-colors" href="<?php echo esc_url( home_url( '/about' ) ); ?>">About Us</a>
        </div>
    </div>
    <div class="flex flex-col gap-4">
        <h4 class="font-headline font-bold text-[#006479]">Connect</h4>
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
