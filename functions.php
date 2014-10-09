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
  $locale = get_locale();
  $domain = 'woothemes';

  if ( $loaded = load_theme_textdomain( $domain, WP_LANG_DIR . '/scrollider/' ) ) {
    return $loaded;
  } elseif ( $loaded = load_theme_textdomain( $domain, get_stylesheet_directory() . '/languages/' ) ) {
    return $loaded;
  } else {
    load_theme_textdomain( $domain, get_template_directory() . '/languages/' );
  }

  if( is_child_theme() ) {
    $domain = 'scrollider-child';
    $mofile = get_stylesheet_directory() . "/languages/{$domain}-{$locale}.mo";
    load_textdomain( $domain, $mofile );
  }

}

/**
 * Load theme updater functions.
 * Thanks to @devinsays
 */

function scrollider_child_theme_updater() {
  require( get_stylesheet_directory() . '/updater/theme-updater.php' );
}
add_action( 'after_setup_theme', 'scrollider_child_theme_updater' );
