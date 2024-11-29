<?php
/**
 * Custom template tags for the theme.
 *
 * @package Budhilaw
 */

/**
 * Gets the thumbnail with Lazy Load.
 * Should be called in the WordPress Loop.
 *
 * @param int|null $post_id               Post ID.
 * @param string $size                  The registered image size.
 * @param array $additional_attributes Additional attributes.
 *
 * @return string
 */
function get_the_post_custom_thumbnail( ?int $post_id, string $size = 'featured-thumbnail', array $additional_attributes = [] ): string {
	$custom_thumbnail = '';

	if ( null === $post_id ) {
		$post_id = get_the_ID();
	}

	if ( has_post_thumbnail( $post_id ) ) {
		$default_attributes = [
			'loading' => 'lazy'
		];

		$attributes = array_merge( $additional_attributes, $default_attributes );

		$custom_thumbnail = wp_get_attachment_image(
			get_post_thumbnail_id( $post_id ),
			$size,
			false,
			$attributes
		);
	}

	return $custom_thumbnail;
}

/**
 * Gets the thumbnail URL only.
 * Should be called in the WordPress Loop.
 *
 * @param int|null $post_id Post ID.
 * @param string $size    The registered image size.
 *
 * @return string
 */
function get_the_post_thumbnail_url_only( ?int $post_id, string $size = 'featured-thumbnail' ): string {
	if ( null === $post_id ) {
		$post_id = get_the_ID();
	}

	if ( has_post_thumbnail( $post_id ) ) {
		return wp_get_attachment_image_url( get_post_thumbnail_id( $post_id ), $size );
	}

	return '';
}

/**
 * Renders Custom Thumbnail with Lazy Load.
 *
 * @param int $post_id               Post ID.
 * @param string $size                  The registered image size.
 * @param array $additional_attributes Additional attributes.
 */
function the_post_custom_thumbnail( int $post_id, string $size = 'featured-thumbnail', array $additional_attributes = [] ): void {
	echo get_the_post_custom_thumbnail( $post_id, $size, $additional_attributes );
}

/**
 * Set excerpt length.
 *
 * @param int $length
 */
function budhilaw_the_excerpt_length( int $length = 0 ): void {
	if ( ! has_excerpt() || $length == 0 ) {
		$excerpt = get_the_excerpt();
		$excerpt = substr($excerpt, 0, strrpos($excerpt, ' ', -1));
		echo $excerpt . '[...]';

		return;
	}

	$excerpt = wp_strip_all_tags( get_the_excerpt() );
	$excerpt = substr( $excerpt, 0, $length );
	$excerpt = substr( $excerpt, 0, strrpos( $excerpt, ' ' ) );

	$excerpt = $excerpt . '[...]';
	echo $excerpt;
	return;
}

/**
 * Pagination for single and archive pages.
 *
 */
function budhilaw_pagination() {
	echo '<nav class="flex items-center gap-x-1">';

	// Previous button
	echo get_previous_posts_link(
		'<button type="button" class="btn btn-soft">Previous</button>'
	);

	echo '<div class="flex items-center gap-x-1">';

	$paged = get_query_var('paged') ? get_query_var('paged') : 1;
	$pages = paginate_links(array(
		'type' => 'array',
		'prev_next' => false,
	));

	if ($pages) {
		foreach ($pages as $page) {
			$is_current = strpos($page, 'current') !== false;
			$current = $is_current ? 'aria-current="page"' : '';
			preg_match('/href="([^"]+)"/', $page, $matches);
			$href = isset($matches[1]) ? $matches[1] : '#';
			$number = strip_tags($page);

			$button_classes = $is_current
				? 'btn btn-soft btn-square bg-blue-600 text-white aria-[current=\'page\']:text-bg-soft-primary'
				: 'btn btn-soft btn-square aria-[current=\'page\']:text-bg-soft-primary';

			echo sprintf(
				'<a href="%s"><button type="button" class="%s" %s>%s</button></a>',
				esc_url($href),
				$button_classes,
				$current,
				$number
			);
		}
	}

	echo '</div>';

	echo get_next_posts_link(
		'<button type="button" class="btn btn-soft">Next</button>'
	);

	echo '</nav>';
}
