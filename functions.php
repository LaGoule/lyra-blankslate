<?php 
// Theme setup
function register_my_menus() {
    register_nav_menus(
      array(
        'header-main-menu' => __( 'Header Main Menu' ),
        'footer-menu' => __( 'Footer Menu' ) 
      )
    );
  }
add_action( 'init', 'register_my_menus' );

// Enqueue scripts
function lyra_enqueue_scripts() {
  // Script for dynamic font resize
  // This script will be responsible for resizing the font based on the viewport size 
  // Not used in the current version, but can be uncommented if needed
  // wp_enqueue_script('dynamic-font-resize', get_template_directory_uri() . '/scripts/dynamic-font-resize.js', array('jquery'), null, true);
  // Script for menu toggle
  wp_enqueue_script('menu-toggle', get_template_directory_uri() . '/scripts/menu-toggle.js', array(), null, true);
  // Script for swiper
  wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper/swiper-bundle.min.css');
  wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), null, true);
  wp_enqueue_script('swiper-init', get_template_directory_uri() . '/scripts/swiper-init.js', array('swiper-js'), null, true);
}
add_action('wp_enqueue_scripts', 'lyra_enqueue_scripts');

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

// Import Ion icons
function enqueue_ionicons_scripts() {
    wp_enqueue_script('ionicons-esm', 'https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js', array(), null, true);
    wp_enqueue_script('ionicons-nomodule', 'https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_ionicons_scripts');

// Add support for post thumbnails
function enable_post_thumbnail()
{
  add_theme_support('post-thumbnails');
  set_post_thumbnail_size( 1280, 720 );
};
add_action('after_setup_theme', 'enable_post_thumbnail');