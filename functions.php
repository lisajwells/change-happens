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
    wp_enqueue_script( 'changehappens_js', get_stylesheet_directory_uri() . '/js/changehappens.js', array(), true );
}

// including child theme template-tags
include( get_stylesheet_directory() . '/inc/template-tags.php' );

// change featured image size since we're not using them full-width
add_action( 'after_setup_theme', 'ch_theme_thumb', 11 );
function ch_theme_thumb() {
    set_post_thumbnail_size( 300 );
}

// add refresh meta to guide-thank-you page for auto pdf download !!cannot use target_blank
// function add_meta_for_pdf() {
//     if (is_page('thank-you-guide')) { <!--  -->
        // <!-- <meta http-equiv="refresh" content="2; URL=http://changehappens.dev/wp-content/uploads/2016/05/ChangeHappensMock.pdf"> -->
// <?php
    // }
// }
// add_action('wp_head', 'add_meta_for_pdf', 1);

function add_meta_for_pdf() {
    if (is_page('thank-you-guide')) { ?>
        <script>
            window.open('http://changehappens.dev/wp-content/uploads/2016/05/ChangeHappensMock.pdf', '_blank');
        </script><?php
    }
}
add_action('wp_head', 'add_meta_for_pdf', 1);
