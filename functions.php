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