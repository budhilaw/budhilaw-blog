<?php
/**
 * Theme functions and definitions
 * @package Budhilaw
 * @since 1.0.0
 */

if ( ! defined( 'BUDHILAW_DIR_PATH' ) ) {
	define( 'BUDHILAW_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'BUDHILAW_DIR_URI' ) ) {
	define( 'BUDHILAW_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

require_once BUDHILAW_DIR_PATH . '/inc/helpers/autoloader.php';
require_once BUDHILAW_DIR_PATH . '/inc/helpers/template-tags.php';

function budhilaw_get_theme_instance(): void {
	\BUDHILAW_THEME\Inc\BUDHILAW_THEME::get_instance();
}
budhilaw_get_theme_instance();

/**
 * Load Tailwind CSS
 * @return void
 */
//function load_tailwind_css(): void {
//	wp_enqueue_style(
//		'tailwind-css',
//		get_template_directory_uri() .
//		'/css/global.css', array(), '1.0.0', 'all');
//}
//add_action('wp_enqueue_scripts', 'load_tailwind_css');