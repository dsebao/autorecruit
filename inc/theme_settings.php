<?php

/**
 * 
 * Theme Settings
 *  
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;


add_action('after_setup_theme', 'vasi_setup');

if (!function_exists('vasi_setup')) {

	function vasi_setup()
	{

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary' => __('Main menu', 'autorecruit'),
				'footer' => __('Footer menu', 'autorecruit'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
			)
		);

		/*
		 * Adding Thumbnail basic support
		 */
		add_theme_support('post-thumbnails');

		/*
		 * Adding support for Widget edit icons in customizer
		 */
		add_theme_support('customize-selective-refresh-widgets');

		/*
		 * Enable support for Post Formats.
		 * See http://codex.wordpress.org/Post_Formats
		 */
		add_theme_support(
			'post-formats',
			array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
			)
		);

		// Set up the WordPress Theme logo feature.
		add_theme_support('custom-logo');

		// Add support for responsive embedded content.
		add_theme_support('responsive-embeds');
	}
}
