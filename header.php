<!DOCTYPE html>
<html <?php language_attributes(); ?>
  <head>
   
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
<body <?php body_class(); ?>>
  <div class="blur-background"></div>
  <header id="header-id" class="header-content sticky">
    <div class="nav-containers" id="nav-containers-id">
      <?php
        wp_nav_menu( array(
          'theme_location' 	=> 'primary',
          'menu_id' 		 	=> 'header-menu',
          'menu_class' 		=> '',
          'container' 	 	=> 'nav',
          'container_id'  => 'menu-nav',
          'container_class'	=> 'header-menu-container',
          'depth'				=> 2,
          'fallback_cb' 		=> false
        ) );
      ?>
      <?php
        wp_nav_menu( array(
          'theme_location' 	=> 'shop',
          'menu_id' 		 	=> 'shop-menu',
          'menu_class' 		=> '',
          'container' 	 	=> 'nav',
          'container_id'  => 'shop-menu-nav',
          'container_class'	=> 'shop-menu-container',
          'depth'				=> 2,
          'fallback_cb' 		=> false
        ) );
      ?>
    </div>
    <div id="hamburger-menu">
      <a href="javascript:void(0);" onclick="toggleMenu()">
          <svg fill="none" stroke="currentColor" 
              viewBox="0 0 24 24" 
              xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" 
              stroke-linejoin="round" 
              stroke-width="2" 
              d="M4 6h16M4 12h16M4 18h16">
              </path>
          </svg>
      </a>
    </div>
  </header>
