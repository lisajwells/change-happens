<?php
/**
 *
 */

// including parent theme css
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

// including changehappens js
add_action( 'wp_enqueue_scripts', 'enqueue_changehappens_js' );
function enqueue_changehappens_js() {
    if (is_page('thank-you-guide')) {
        wp_enqueue_script( 'changehappens_js', get_stylesheet_directory_uri() . '/js/changehappenspdf.js', array(), true );
    }
}

// including child theme template-tags
include( get_stylesheet_directory() . '/inc/template-tags.php' );

// change featured image size since we're not using them full-width
add_action( 'after_setup_theme', 'ch_theme_thumb', 11 );
function ch_theme_thumb() {
    set_post_thumbnail_size( 300 );
}

// use my version of sticky.js instead
// here's the parent's
        // wp_enqueue_script( 'hello-world-sticky-kit-js', get_template_directory_uri() . '/js/jquery.sticky-kit.min.js', array( 'jquery' ), '1.0.4' );

// http://wordpress.stackexchange.com/questions/26822/how-to-override-javascript-files-in-child-theme
// hook in late to make sure the parent theme's registration
// has fired so you can undo it. Otherwise the parent will simply
// enqueue its script anyway.
add_action('wp_enqueue_scripts', 'wpse26822_script_fix', 100);
function wpse26822_script_fix()
{
    wp_dequeue_script( 'hello-world-sticky-kit', get_template_directory_uri() . '/js/sticky-kit.js', array( 'jquery' ), '20150128', true );
    wp_enqueue_script('change-happens-sticky-kit', get_stylesheet_directory_uri().'/js/sticky-kit.js', array('jquery'), '20150128', true);
}
