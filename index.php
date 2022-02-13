<?php
/**
 * Front to the ArkPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells ArkPress to load the theme.
 *
 * @package ArkPress
 */

/**
 * Tells ArkPress to load the ArkPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

/** Loads the ArkPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';
