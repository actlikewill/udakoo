<?php
require_once('bs4navwalker.php');


function register_my_menu() {
    register_nav_menu('header-menu',__('Header Menu'));
}

add_action('init', 'register_my_menu');

function add_theme_scripts() {
   
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css');

    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css');

    wp_enqueue_script( 'popper.min', get_template_directory_uri() . '/js/popper.min.js');
   
    wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', array ( 'jquery' ));
   
  }
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

  add_theme_support( 'post-thumbnails' );

  


