<?php
/**
 * Managing assets in the theme
 *
 * @package Budhilaw
 */
namespace BUDHILAW_THEME\Inc;

use BUDHILAW_THEME\Inc\Traits\Singleton;

class Assets {
	use Singleton;
	protected function __construct() {
		// load classes
		$this->set_hooks();
	}

	protected function set_hooks(): void {
		// actions and filters
		add_action( 'wp_enqueue_scripts', [ $this, 'register_styles' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'register_scripts' ] );
	}

	public function register_styles(): void {
		// register styles
		wp_register_style( 'style-css', get_stylesheet_uri(), array(), filemtime( BUDHILAW_DIR_PATH . '/style.css' ), 'all' );
		wp_register_style( 'tailwind-css', BUDHILAW_DIR_URI . '/css/global.css', array(), '1.0.0', 'all' );

		// enqueue styles
		wp_enqueue_style( 'style-css' );
		wp_enqueue_style( 'tailwind-css' );
	}

	public function register_scripts(): void {
		// register scripts
	}
}
