<?php
// Custom Theme built for Woocomerce integrated with Elementor theme  
// Autor: Vladimir Dukoski 
// Git: https://github.com/blueuke
// email: vladimir.dukoski@gmail.com

// Exit if accessed directly
if (!defined('ABSPATH')) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:
if (!function_exists('chld_thm_cfg_locale_css')):
    function chld_thm_cfg_locale_css($uri)
    {
        if (empty($uri) && is_rtl() && file_exists(get_template_directory() . '/rtl.css')) $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter('locale_stylesheet_uri', 'chld_thm_cfg_locale_css');
/*
if (!function_exists('chld_thm_cfg_parent_css')):
    function chld_thm_cfg_parent_css()
    {
      wp_enqueue_style('chld_thm_cfg_parent', trailingslashit(get_template_directory_uri()) . 'style.css', array(
          'hello-elementor-theme-style',
          'jet-menu-hello'
      ));
    }
endif;
add_action('wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10);
*/

function hello_elementor_child_enqueue_scripts() {
	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		'1.0.0'
	);
    wp_enqueue_style('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css');
    wp_enqueue_style('slick-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css');
    wp_enqueue_script('child-scripts', get_stylesheet_directory_uri() . '/assets/js/child.js', [ 'jquery', 'slick' ], null, true);
    wp_enqueue_script('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', [ 'jquery' ]);
    wp_enqueue_script('sticky-kit', 'https://cdnjs.cloudflare.com/ajax/libs/sticky-kit/1.1.3/sticky-kit.min.js');
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts', 20 );
// END ENQUEUE PARENT ACTION

// Include files here
include ('theme_setup/error_handling/index.php');

include ('theme_setup/global_functions/index.php');

include ('theme_setup/shortcodes/index.php');

include ('theme_setup/wp_edits/redirects.php');
include ('theme_setup/wp_edits/script-edits.php');
include ('theme_setup/wp_edits/wp-comments.php');
include ('theme_setup/wp_edits/wp-menu-edits.php');
include ('theme_setup/wp_edits/wp-support.php');

include ('theme_setup/wp_header_footer/header.php');
include ('theme_setup/wp_header_footer/footer.php');

include ('theme_setup/wp_plugin_edits/index.php');

// This one's for playing
include ('theme_setup/playground.php');



