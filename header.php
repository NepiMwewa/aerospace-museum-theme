<!DOCTYPE html>
<html <?php language_attributes(); ?>
  <head>
   
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="">


    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
<body <?php body_class(); ?>>

  <header class="header-content sticky">
    <?php
      wp_nav_menu( array(
        'theme_location' 	=> 'header',
        'menu_id' 		 	=> 'header-menu',
        'menu_class' 		=> '',
        'container' 	 	=> 'nav',
        'container_class'	=> 'header-menu-container',
        'depth'				=> 1,
        'fallback_cb' 		=> false
      ) );
    ?>
  </header>
