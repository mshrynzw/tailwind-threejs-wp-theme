<?php
/**
 * Sample Theme Functions
 */

// Enqueue styles and scripts
function sample_theme_enqueue_assets() {
    // Main stylesheet (compiled Tailwind)
    wp_enqueue_style(
        'sample-theme-style',
        get_stylesheet_uri(),
        array(),
        '1.0.0'
    );

    // Three.js from CDN
    wp_enqueue_script(
        'three-js',
        'https://cdn.jsdelivr.net/npm/three@0.160.0/build/three.min.js',
        array(),
        '0.160.0',
        true
    );

    // Three.js starfield scene
    wp_enqueue_script(
        'three-scene',
        get_template_directory_uri() . '/js/three-scene.js',
        array('three-js'),
        '1.0.0',
        true
    );

    // Fade-in on scroll
    wp_enqueue_script(
        'fade-in',
        get_template_directory_uri() . '/js/fade-in.js',
        array(),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'sample_theme_enqueue_assets');

// Theme setup
function sample_theme_setup() {
    // Title tag support
    add_theme_support('title-tag');

    // Post thumbnails
    add_theme_support('post-thumbnails');

    // Register navigation menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'sample-theme'),
    ));
}
add_action('after_setup_theme', 'sample_theme_setup');
