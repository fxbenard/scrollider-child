<?php

/**
 * Scrollider Child functions and definitions
 *
 * @package Scrollider Child
 */

/**
 * The current version of the child theme.
 */
define( 'SCROLLIDER_CHILD_VERSION', '0.1.0' );


/*
 * Load my own woo-load-textdomain function
 * Thanks to @grappler for his help
 */
add_action( 'after_setup_theme', 'woo_load_textdomain', 10 );
function woo_load_textdomain(){
	$domain = 'woothemes';

	if ( $loaded = load_theme_textdomain( $domain, WP_LANG_DIR . '/scrollider/' ) ) {
		return $loaded;
	} elseif ( $loaded = load_theme_textdomain( $domain, get_stylesheet_directory() . '/languages/' ) ) {
		return $loaded;
	} else {
		load_theme_textdomain( $domain, get_template_directory() . '/languages/' );
	}

}
/*
 * Load child theme textdomain function
 * Thanks to @grappler for his help
 */
add_action( 'after_setup_theme', 'scrollider_child_load_textdomain' );
function scrollider_child_load_textdomain(){
	$domain = 'scrollider-child';
	load_theme_textdomain( $domain, get_stylesheet_directory() . '/languages/' . $domain . '/' );
}

/**
 * Load theme updater functions.
 * Thanks to @devinsays
 */
add_action( 'after_setup_theme', 'scrollider_child_theme_updater' );
function scrollider_child_theme_updater() {
	require( get_stylesheet_directory() . '/updater/theme-updater.php' );
}
