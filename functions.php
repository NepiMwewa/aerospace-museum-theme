<?php

//functions
function aerospace_museum_styles() {
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_script( 'menuToggle', get_template_directory_uri() . '/js/menuToggle.js', array(), '1.0.0', true );
}
add_action('wp_enqueue_scripts', 'aerospace_museum_styles', 15);


function wpdocs_custom_excerpt_length( $length ) {
	return 55;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

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
  'shop' => __('Shop Header Menu'),
));

//adding woocommerce support
function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );

add_action( 'woocommerce_before_mini_cart_contents', 'minicart_display_before_content' );
function minicart_display_before_content() {
  $items_count = WC()->cart->get_cart_contents_count();
  $text_label  = _n( 'Item', 'Items', $items_count, 'woocommerce' );
  ?>
      <h3 class="total item-count">Your cart (<?php echo $items_count; ?> <?php echo $text_label; ?>)</h3>
      <a class="cart-close" href="javascript:void(0);" onclick="toggleCart()">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
      </a>
  <?php
}
