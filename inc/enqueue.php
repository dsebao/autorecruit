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
		wp_enqueue_script('core-js', get_template_directory_uri() . '/js/core.min.js', array(), null, true);
		wp_enqueue_script('app-js', get_template_directory_uri() . '/js/app.min.js', array('core-js'), null, true);

		//If comments are using
		if (is_singular() && comments_open() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		}
	}
} // End of if function_exists( 'theme_scripts' ).

add_action('wp_enqueue_scripts', 'theme_scripts');


function add_tagmanager()
{ ?>
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-N6N2L5J');
	</script>
<?php }

add_action('wp_head', 'add_tagmanager', 10);

function add_tagmanageriframe()
{ ?>
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N6N2L5J" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<?php }

add_action('wp_body_open', 'add_tagmanageriframe', 10);


function add_cors_http_header()
{
	header("Access-Control-Allow-Origin: *");
}
add_action('init', 'add_cors_http_header');
