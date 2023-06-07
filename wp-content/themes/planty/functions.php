<?php
/**
 * Planty Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Planty
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_PLANTY_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'planty-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_PLANTY_VERSION, 'all' );
	wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css');
}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );



function astra_child_login_menu_item( $items, $args ) {
    if ( is_user_logged_in() ) {
        $new_item = '<li id="menu-item-300"><a href="http://localhost:8888/planty/wp-admin/">Admin</a></li>';

        if ( $args->theme_location == 'primary' ) {
            $items .= $new_item;
        } elseif ( $args->theme_location == 'mobile_menu' ) {
            $items .= $new_item;
        }
    }

    return $items;
}
add_filter( 'wp_nav_menu_items', 'astra_child_login_menu_item', 10, 2 );
