<?php
/**
 * Easy Digital Downloads Theme Updater
 *
 * @package EDD Theme Updater
 */

// Includes the files needed for the theme updater
if ( !class_exists( 'EDD_Theme_Updater_Admin' ) ) {
	include( dirname( __FILE__ ) . '/theme-updater-admin.php' );
}

// Loads the updater classes
$updater = new EDD_Theme_Updater_Admin(

	// Config settings
	$config = array(
		'remote_api_url' => 'http://fxbenard.com', // Site where EDD is hosted
		'item_name' => 'Scrollider Child', // Name of theme
		'theme_slug' => 'scrollider-child', // Theme slug
		'version' => SCROLLIDER_CHILD_VERSION, // The current version of this theme
		'author' => 'FX Bénard', // The author of this theme
		'download_id' => '', // Optional, used for generating a license renewal link
		'renew_url' => '' // Optional, allows for a custom license renewal link
	)

);