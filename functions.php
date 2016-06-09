<?php
/**
 *
 */

add_action( 'wp_enqueue_scripts', 'ch_enqueue_changehappens' );
function ch_enqueue_changehappens() {

    // including parent theme css
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );

    // including changehappens js
    if (is_page('thank-you-guide')) {
        wp_enqueue_script( 'changehappens_js', get_stylesheet_directory_uri() . '/js/changehappenspdf.js', array(), true );
    }

    // use my version of sticky.js instead
    wp_dequeue_script( 'hello-world-sticky-kit', get_template_directory_uri() . '/js/sticky-kit.js', array( 'jquery' ), '20150128', true );
    wp_enqueue_script('change-happens-sticky-kit', get_stylesheet_directory_uri().'/js/sticky-kit.js', array('jquery'), '20150128', true);
}

// including child theme template-tags
include( get_stylesheet_directory() . '/inc/template-tags.php' );

// change featured image size since we're not using them full-width
add_action( 'after_setup_theme', 'ch_theme_thumb', 11 );
function ch_theme_thumb() {
    set_post_thumbnail_size( 300 );
}

// get rid of the second-page sticky post
add_action( 'pre_get_posts', function ( WP_Query $query ) {

    if ( ! $query->is_main_query() ) {
        return;
    }

    if ( ! $query->is_home() ) {
        return;
    }

    if ( $query->get( 'paged', 1 ) == 1 ) {
        return;
    }

    $query->set ( 'post__not_in', array( 658 ) );

});
