<?php
/**
* Twenty Nineteen Child functions and definitions
*
* @link http://codex.wordpress.org/Theme_Development
* @link http://codex.wordpress.org/Child_Themes
*
* @package WordPress
* @subpackage Twenty_Nineteen
* @since 1.0.0
*/



// Enqueue scripts and styles
function twentynineteen_child_scripts(){
	wp_enqueue_style( 'twentynineteen-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'twentynineteen-style' ));
}


