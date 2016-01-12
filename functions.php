<?php

// Register Style
function custom_styles() {

  wp_register_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css', false, '3.3.6' );
  wp_enqueue_style( 'bootstrap-css' );

  wp_enqueue_style( 'american-elections-style', get_stylesheet_uri());

  wp_register_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array('jquery'), '3.3.6', false );
  wp_enqueue_script( 'bootstrap' );

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
