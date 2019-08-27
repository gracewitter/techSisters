<?php
/**
 * Libre child functions and definitions
 *
 * @package Libre-child
 */

// Enqueue scripts and styles
function libre_child_scripts(){
	wp_enqueue_style( 'libre-style', get_stylesheet_uri() );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'libre-style' ));
}
add_action( 'wp_enqueue_scripts', 'tribe_child_scripts' );
