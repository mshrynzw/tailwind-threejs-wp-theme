<!DOCTYPE html>
<html <?php language_attributes(); ?> class="dark">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-[#0b0f19] text-white antialiased'); ?>>

<header class="fixed top-0 left-0 right-0 z-50 px-4 py-4">
    <nav class="max-w-screen-xl mx-auto bg-white/10 backdrop-blur-md border border-white/20 rounded-xl shadow-lg px-6 py-4 flex items-center justify-between">
        <div class="flex items-center gap-3">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.svg" alt="" aria-hidden="true" class="w-8 h-8">
            <span class="text-lg font-semibold"><?php bloginfo('name'); ?></span>
        </div>

        <div class="flex items-center gap-6">
            <a href="#about" class="text-sm hover:text-white/80 transition-colors focus:outline-none focus:ring-2 focus:ring-white/50 rounded px-2 py-1" aria-label="Navigate to About section">About</a>
            <a href="#contact" class="text-sm hover:text-white/80 transition-colors focus:outline-none focus:ring-2 focus:ring-white/50 rounded px-2 py-1" aria-label="Navigate to Contact section">Contact</a>
        </div>
    </nav>
</header>

<?php wp_body_open(); ?>
