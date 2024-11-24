<?php
/**
 * Managing sidebars in the theme
 *
 * @package Budhilaw
 */
namespace BUDHILAW_THEME\Inc;

use BUDHILAW_THEME\Inc\Traits\Singleton;

class Sidebars {
	use Singleton;
	protected function __construct() {
		// load classes
		$this->set_hooks();
	}

	protected function set_hooks(): void {
		// actions
		add_action( 'widgets_init', [ $this, 'register_sidebars' ] );
	}

	public function register_sidebars(): void {
		register_sidebar( [
			'name'          => __( 'Sidebar', 'budhilaw' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Main Sidebar', 'budhilaw' ),
			'before_widget' => '<div id="%1$s" class="widget p-2 %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		]);

		register_sidebar( [
			'name'          => __( 'Footer', 'budhilaw' ),
			'id'            => 'sidebar-2',
			'description'   => __( 'Footer Sidebar', 'budhilaw' ),
			'before_widget' => '<div id="%1$s" class="widget widget-footer %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		]);
	}
}