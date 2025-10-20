<footer class="py-12 px-4">
    <div class="max-w-screen-lg mx-auto">
        <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl shadow-lg p-8 text-center">
            <p class="text-sm text-white/70 mb-2">
                &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.
            </p>
            <p class="text-xs text-white/50">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-white/80 transition-colors focus:outline-none focus:ring-2 focus:ring-white/50 rounded px-1">Home</a>
                <span class="mx-2">•</span>
                <a href="#about" class="hover:text-white/80 transition-colors focus:outline-none focus:ring-2 focus:ring-white/50 rounded px-1">About</a>
                <span class="mx-2">•</span>
                <a href="#contact" class="hover:text-white/80 transition-colors focus:outline-none focus:ring-2 focus:ring-white/50 rounded px-1">Contact</a>
            </p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
