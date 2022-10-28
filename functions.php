<?php

//Theme Options
add_theme_support('widgets');

//functions
function aerospace_museum_styles() {
  wp_enqueue_style('style', get_stylesheet_uri());
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
  'primary' => __('Primary Menu'),
  'footer' => __('Footer Menu'),
));


//add custom post to display with standard query
function add_custom_pt( $query ) {
  if ( $query->is_home() && $query->is_main_query() || $query->is_category()
    || $query->is_author() || $query->is_date() )  {
    $query->set( 'post_type', array( 'post', 'photo-showcase' ) );
  }
}
add_action( 'pre_get_posts', 'add_custom_pt' );
