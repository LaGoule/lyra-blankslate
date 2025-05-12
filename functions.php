<?php 

// Import scripts
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
  // Script for the team member popup on mobile
  wp_enqueue_script('team-member-popup', get_template_directory_uri() . '/scripts/team-popup.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'lyra_enqueue_scripts');

// Import styles
function lyra_enqueue_styles() {
  // Main stylesheet
  wp_enqueue_style('main', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'lyra_enqueue_styles');

// Import fonts
function lyra_enqueue_fonts() {
  // Inter font
  wp_enqueue_style('inter-font', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
  // Import material icons as a font
  wp_enqueue_style('material-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), null, 'all');
}
add_action('wp_enqueue_scripts', 'lyra_enqueue_fonts');

// Import icons
function lyra_enqueue_icons() {
  // Ionicons
  wp_enqueue_script('ionicons-esm', 'https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js', array(), null, true);
  wp_enqueue_script('ionicons-nomodule', 'https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'lyra_enqueue_icons');

//
//
//

// Add support for theme menus
function register_my_menus() {
  register_nav_menus(
    array(
      'header-main-menu' => __( 'Header Main Menu' ),
      'footer-menu' => __( 'Footer Menu' ) 
    )
  );
}
add_action( 'init', 'register_my_menus' );

// Add support for post thumbnails
function enable_post_thumbnail()
{
  add_theme_support('post-thumbnails');
  set_post_thumbnail_size( 1280, 720 );
};
add_action('after_setup_theme', 'enable_post_thumbnail');

// Add page slug to body class
function add_page_slug_body_class( $classes ) {
  global $post;
  
  if ( isset( $post ) ) {
      $classes[] = 'page-' . $post->post_name;
  }
  return $classes;
}

add_filter( 'body_class', 'add_page_slug_body_class' );