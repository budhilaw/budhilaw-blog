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

		add_filter('the_content', [ $this, 'budhilaw_content_classes' ]);
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

	/**
	 * Add Tailwind CSS classes to post content paragraphs
	 *
	 * Filters the_content to enhance typography and spacing
	 * by adding Tailwind utility classes to paragraph tags.
	 *
	 * @param string $content The post content
	 *
	 * @return string Modified content with Tailwind classes
	 *@since 1.0.0
	 */
	public function budhilaw_content_classes(string $content): string {
		// Existing paragraph and heading styles
		$content = str_replace( '<p>', '<p class="mb-8 text-lg leading-relaxed text-gray-800">', $content );
		$content = str_replace( '<h2 class="wp-block-heading">', '<h2 class="wp-block-heading text-4xl font-bold mb-8 mt-12 text-gray-900">', $content );
		$content = str_replace( '<h3 class="wp-block-heading">', '<h3 class="wp-block-heading text-3xl font-semibold mb-6 mt-10 text-gray-900">', $content );
		$content = str_replace( '<h4 class="wp-block-heading">', '<h4 class="wp-block-heading text-2xl font-medium mb-4 mt-8 text-gray-900">', $content );

		// Enhanced code block with macOS-style window and copy button - removed gap
		$content = preg_replace(
			'/<pre class="wp-block-code language-([^"]+)?">/i',
			'<div class="relative mb-8">
				<div class="bg-[#111b27] rounded-t-lg px-4 py-4 flex items-center border-b border-[#111b27]">
					<div class="flex space-x-2 -mb-1">
						<div class="w-3 h-3 rounded-full bg-red-500"></div>
						<div class="w-3 h-3 rounded-full bg-yellow-500"></div>
						<div class="w-3 h-3 rounded-full bg-green-500"></div>
					</div>
					<button class="copy-button absolute right-4 top-2 text-gray-400 hover:text-white text-sm">
						Copy
					</button>
				</div>
				<pre class="rounded-scrollbar horizontal-scrollbar rounded-none p-4 overflow-x-auto font-mono text-sm leading-relaxed -mb-2 language-$1">',
			$content
		);

		// Update closing tag to include rounded bottom corners
		$content = str_replace( '</pre>', '</pre></div>', $content );

		// Add syntax highlighting container with dynamic language support
		$content = preg_replace(
			'/<code>/i',
			'<code class="highlight-syntax">',
			$content
		);

		return $content;
	}}