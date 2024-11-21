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

		// Base Prism CSS theme
		wp_enqueue_style( 'prismjs-coldark-dark', BUDHILAW_DIR_URI . '/css/prism-coldark-dark.css', array(), '1.0.0', 'all' );
		// wp_enqueue_style( 'prismjs-style', 'https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/themes/prism-okaidia.min.css' );

		// enqueue styles
		wp_enqueue_style( 'style-css' );
		wp_enqueue_style( 'tailwind-css' );
	}

	public function register_scripts(): void {
		// Register Core Prism library
		wp_register_script(
			'prismjs',
			'https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-core.min.js',
			[],
			'1.29.0',
			true
		);

		// Register Autoloader
		wp_register_script(
			'prismjs-autoloader',
			'https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/plugins/autoloader/prism-autoloader.min.js',
			['prismjs'],
			'1.29.0',
			true
		);

		// Register custom initialization script
		wp_register_script(
			'syntax-highlight',
			get_template_directory_uri() . '/assets/js/syntax-highlight.js',
			['prismjs', 'prismjs-autoloader'],
			'1.0.0',
			true
		);

		wp_enqueue_script('prismjs');
		wp_enqueue_script('prismjs-autoloader');
		wp_enqueue_script('syntax-highlight');
	}
}
