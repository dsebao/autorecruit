<?php

/**
 * Enqueue Scripts and styles
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

if (!function_exists('theme_scripts')) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function theme_scripts()
	{
		// Get the theme data.
		wp_enqueue_style('styles', get_template_directory_uri() . '/style.css');
		wp_enqueue_script('core-js', get_template_directory_uri() . '/js/core.js', array(), '', true);
		wp_enqueue_script('app-js', get_template_directory_uri() . '/js/app.js', array('core-js'), '', true);

		//If comments are using
		if (is_singular() && comments_open() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		}
	}
} // End of if function_exists( 'theme_scripts' ).

add_action('wp_enqueue_scripts', 'theme_scripts');
