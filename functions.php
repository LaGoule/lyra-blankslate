<?php 

// Enqueue stylesheets
function theme_styles() {
    wp_enqueue_style('main', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'theme_styles');

// Import Inter fonts
function inter_font() {
    wp_enqueue_style('inter-font', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');
}
add_action('wp_enqueue_scripts', 'inter_font');

// Import Scripts in scripts/dynamic-font-resize.js
function dynamic_font_resize() {
    wp_enqueue_script('dynamic-font-resize', get_template_directory_uri() . '/scripts/dynamic-font-resize.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'dynamic_font_resize');

// Import ion icons
function enqueue_ionicons_scripts() {
    wp_enqueue_script('ionicons-esm', 'https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js', array(), null, true);
    wp_enqueue_script('ionicons-nomodule', 'https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_ionicons_scripts');

?>