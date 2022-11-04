<?php

//Theme Options
add_theme_support('widgets');

//functions
function aerospace_museum_styles() {
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_script( 'stickyNav', get_template_directory_uri() . '/js/stickyNav.js', array(), '1.0.0', true );
}
add_action('wp_enqueue_scripts', 'aerospace_museum_styles');

function index_page_excerpt_length(){
  return 35;
}

function nd_dosth_theme_setup() {

    // Add <title> tag support
    add_theme_support( 'title-tag' );

    // Add custom-logo support
    add_theme_support( 'custom-logo' );

}
add_action( 'after_setup_theme', 'nd_dosth_theme_setup');

function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );

// nav functions
register_nav_menus(array(
  'primary' => __('Header Menu'),
  'footer' => __('Footer Menu'),
  'privacy' => __('Privacy Menu'),
));

