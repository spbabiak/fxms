<?php

// Load CSS
function load_css() {
    wp_register_style('normalize-css', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', array(), false, 'all');
    wp_register_style('inter-google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap', array(), false, 'all');
    wp_register_style('main-style', get_template_directory_uri() . '/css/main.css', array(), '', false, 'all');
    wp_enqueue_style('normalize-css');
    wp_enqueue_style('inter-google-fonts');
    wp_enqueue_style('main-style');
}

add_action('wp_enqueue_scripts', 'load_css');

// Load Javascript
function load_js() {
    
    wp_register_script('main-script', get_template_directory_uri() . '/js/main.js', array(), '', false, true);
    wp_enqueue_script('main-script');
}

add_action('wp_enqueue_scripts', 'load_js');

// Theme Options
add_theme_support('menus');

// Menus
register_nav_menus(
    array(
        'main-menu' => 'Main Menu Location',
        'footer-menu' => 'Footer Menu Location'
    )
);