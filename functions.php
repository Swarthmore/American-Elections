<?php

// Register Styles and Scripts
function custom_styles() {

  wp_register_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.css', false, '2.1.1' );
  wp_enqueue_style( 'bootstrap' );

  wp_enqueue_style( 'american-elections-style', get_stylesheet_uri());

  wp_register_script( 'bootstrap-js', get_stylesheet_directory_uri() .'/js/bootstrap.js', array('jquery'), '2.1.1', false );
  wp_enqueue_script( 'bootstrap-js' );

  wp_register_script( 'html5', get_stylesheet_directory_uri() .'/js/html5.js', false, '1.6.2', false );
  wp_enqueue_script( 'html5' );

  wp_register_script( 'html5-shiv', get_stylesheet_directory_uri() .'/js/html5shiv.js', false, '3.6.2', false );
  wp_enqueue_script( 'html5-shiv' );

  wp_register_script( 'jquery-maphilight', get_stylesheet_directory_uri() .'/js/jquery.maphilight.js', array('jquery'), '1.0.0', false );
  wp_enqueue_script( 'jquery-maphilight' );

  wp_register_script( 'jquery-preload', get_stylesheet_directory_uri() .'/js/jquery.preload.min.js', array('jquery'), '1.0.0', false );
  wp_enqueue_script( 'jquery-preload' );

}
add_action( 'wp_enqueue_scripts', 'custom_styles' );
