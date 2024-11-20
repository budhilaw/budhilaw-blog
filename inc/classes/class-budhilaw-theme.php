<?php
/**
 * Boostrap the theme
 *
 * @package Budhilaw
 */

namespace BUDHILAW_THEME\Inc;

use BUDHILAW_THEME\Inc\Traits\Singleton;

class BUDHILAW_THEME {
	use Singleton;

	protected function __construct() {
		// load classes
		Assets::get_instance();
		Menus::get_instance();

		$this->setup_hooks();
	}

	protected function setup_hooks(): void {
		// actions
		add_action( 'after_setup_theme', [ $this, 'setup_theme' ] );
	}

	public function setup_theme(): void {
		global $content_width;

		add_theme_support( 'title-tag' );

		add_theme_support( 'custom-logo', [
			'header-text' => [
				'site-title',
				'site-description',
			],
			'height'      => 100,
			'width'       => 400,
			'flex-height' => true,
			'flex-width'  => true,
		] );

		add_theme_support( 'custom-background', [
			'default-color' => 'F9F7F7',
			'default-image' => '',
			'default-repeat' => 'no-repeat',
		] );

		add_theme_support( 'post-thumbnails' );

		add_image_size( 'featured-thumbnail', 1024, 192, true );

		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'html', [
			'caption',
			'comment-form',
			'comment-list',
			'gallery',
			'search-form',
			'script',
			'style',
		] );

		add_theme_support( 'wp-block-styles' );

		add_theme_support( 'align-wide' );

		// Set content width
		if (!isset($content_width)) {
			$content_width = 750; // pixels
		}
	}
}