<?php
/**
 * Uninstaller
 *
 * Uninstall the plugin by removing any options from the database
 *
 * @package draft-concluder
 */

// If the uninstall was not called by WordPress, exit.

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit();
}

// Delete options.

delete_option( 'draft_concluder_when' );

// Remove scheduled event.

wp_clear_scheduled_hook( 'draft_concluder_mailer' );