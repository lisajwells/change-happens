<?php
/**
 *
 */

// including parent theme css
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

// including child theme template-tags
include( get_stylesheet_directory() . '/inc/template-tags.php' );

// change featured image size since we're not using them full-width
add_action( 'after_setup_theme', 'ch_theme_thumb', 11 );
function ch_theme_thumb() {
    set_post_thumbnail_size( 300 );
}
