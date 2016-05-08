<?php
/**
 *
 * @package Hello World
 */

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

///// including child theme template-tags
include( get_stylesheet_directory() . '/inc/template-tags.php' );
