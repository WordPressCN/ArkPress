<?php
/**
 * Loads the ArkPress environment and template.
 *
 * @package ArkPress
 */

if ( ! isset( $wp_did_header ) ) {

	$wp_did_header = true;

	// Load the ArkPress library.
	require_once __DIR__ . '/wp-load.php';

	// Set up the ArkPress query.
	wp();

	// Load the theme template.
	require_once ABSPATH . WPINC . '/template-loader.php';

}
