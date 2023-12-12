<?php

/**
 * Enqueue scripts and styles.
 */
function html_scripts() {
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
    wp_enqueue_style('jquery-ui', get_template_directory_uri() . '/assets/css/jquery-ui.css');
    wp_enqueue_style('owl.carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css');
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css');
    wp_enqueue_style('fotorama', get_template_directory_uri() . '/assets/css/fotorama.css');
    wp_enqueue_style('custom', get_template_directory_uri() . '/assets/css/custom.css');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css');

    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-1.12.3.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'fotorama', get_template_directory_uri() . '/assets/js/fotorama.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'jquery.magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', array(), _S_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'html_scripts' );

//Add class logo
add_filter( 'get_custom_logo', 'change_logo_class' );

function change_logo_class( $html ) {

    $html = str_replace( 'custom-logo-link', 'navbar-brand page-scroll', $html );
//    $html = str_replace( 'custom-logo-link', 'your-custom-class', $html );

    return $html;
}