<?php

function the_theme_setup(){
  add_theme_support('automatic-feed-links');
  add_theme_support('post-thumbnails');

  register_nav_menus( array(
    'primary' => __('Primary Menu', 'Primary side menu'),
    'secondary' => __('Sidebar Menu', 'Side bar menu')
  ) );

  add_theme_support('custom-header' );
  add_theme_support( 'custom-background' );
}
add_action( 'after_setup_theme', 'the_theme_setup' );