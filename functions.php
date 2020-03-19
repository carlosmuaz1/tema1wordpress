<?php
//dependencias
add_action( 'wp_enqueue_scripts', 'dependencias' );
function dependencias() {
  wp_enqueue_style('wp-style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/custom.css');
  //
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery'));
}

//Menu custom
add_action( 'after_setup_theme' , 'menu' );
function menu() {
  register_nav_menu( 'menu-principal', __( 'Menu ADM' , 'adm-slug'));
}