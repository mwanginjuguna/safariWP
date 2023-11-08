<?php
/**
 * Theme functions
 *
 * @package safarirestaurant
 */

/**
 * die and dump - for debugging
 * @param $value
 * @return void
 */
function dd($value) {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';

    wp_die();
}


/**
 * Enqueue stylesheets - styles.css file
 */
function safari_styles() {
    wp_enqueue_style('safari-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
}

add_action('wp_enqueue_scripts', 'safari_styles');

if ( ! function_exists( 'safari_setup' ) ) {
    function safari_setup() {
        add_theme_support( 'wp-block-styles' );

        /**
         * Add support for two custom navigation menus.
         */
        register_nav_menus( array(
            'primary'   => __( 'Primary Menu', 'myfirsttheme' ),
            'secondary' => __( 'Secondary Menu', 'myfirsttheme' ),
        ) );
    }
}
add_action( 'after_setup_theme', 'safari_setup' );
