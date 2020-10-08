<?php


// Exit if accessed directly.
defined('ABSPATH') || exit;


$theme_includes = array(
	'/globals.php',
	'/utils.php',
	'/api.php',
	'/wp.php',
	'/pagination.php',
	'/enqueue.php',
	'/shortcode.php',
	'/metaboxes.php',
	'/theme_settings.php',
	'/ajax.php',
	'/wp_bootstrap_nav.php',
);

foreach ($theme_includes as $file) {

	require_once get_template_directory() . '/inc' . $file;
}
