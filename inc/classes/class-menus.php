<?php
/**
 * Managing menus in the theme
 *
 * @package Budhilaw
 */

namespace BUDHILAW_THEME\Inc;

use BUDHILAW_THEME\Inc\Traits\Singleton;

class Menus {
	use Singleton;

	protected function __construct() {
		// load classes
		$this->set_hooks();
	}

	protected function set_hooks(): void {
		// actions and filters
		add_action( 'init', [ $this, 'register_menus' ] );
	}

	public function register_menus(): void {
		register_nav_menus(
			array(
				'budhilaw-header-menu' => esc_html__( 'Header Menu', 'budhilaw' ),
				'budhilaw-footer-menu' => esc_html__( 'Footer Menu', 'budhilaw' ),
			)
		);
	}

	/**
	 * Get the menu id by menu location.
	 *
	 * @param string $location
	 *
	 * @return integer
	 */
	public function get_menu_id( string $location ): int {
		// Get all the locations
		$locations = get_nav_menu_locations();

		// Get object id by location
		$menu_id = $locations[ $location ];

		return ! empty( $menu_id ) ? $menu_id : '';
	}

	/**
	 * Get all child menus that has given parent menu id.
	 *
	 * @param array $menu_array Menu array.
	 * @param integer $parent_id Parent menu id.
	 *
	 * @return array Child menu array.
	 */
	public function get_child_menu_items( array $menu_array, int $parent_id ): array {

		$child_menus = [];

		if ( ! empty( $menu_array ) ) {

			foreach ( $menu_array as $menu ) {
				if ( intval( $menu->menu_item_parent ) === $parent_id ) {
					$child_menus[] = $menu;
				}
			}
		}

		return $child_menus;
	}

	public function special_nav_class ($classes, $item) {
		if (in_array('current-menu-item', $classes) ){
			$classes[] = 'active ';
		}
		return $classes;
	}
}