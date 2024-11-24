<?php
$current_post_id = get_the_ID();

$args = array(
	'post_type' => 'post',
	'posts_per_page' => 3,
	'post__not_in' => array($current_post_id),
	'orderby' => 'date',
	'order' => 'DESC'
);

$query = new WP_Query($args);
$posts_markup = '';

if ($query->have_posts()) {
	while ($query->have_posts()) {
		$query->the_post();

		$post_link = esc_url(get_permalink());
		$title = get_the_title();

		$posts_markup .= '<div class="flex items-center space-x-4 mb-4">';

		if (has_post_thumbnail()) {
			$posts_markup .= sprintf(
				'<div class="flex-shrink-0"><a href="%1$s" class="block">%2$s</a></div>',
				$post_link,
				get_the_post_thumbnail(null, array(64, 64), array('class' => 'w-16 h-16 rounded-lg object-cover'))
			);
		}

		$posts_markup .= '<div class="flex-1 min-w-0">';
		$posts_markup .= sprintf(
			'<h3 class="text-sm font-medium text-gray-900 dark:text-white truncate"><a href="%1$s">%2$s</a></h3>',
			$post_link,
			$title
		);

		$posts_markup .= sprintf(
			'<time datetime="%1$s" class="block text-xs text-gray-500 dark:text-gray-400">%2$s</time>',
			esc_attr(get_the_date('c')),
			get_the_date()
		);

		$posts_markup .= '</div></div>';
	}
	wp_reset_postdata();
}

$wrapper_attributes = get_block_wrapper_attributes(array(
	'class' => 'max-w-screen-xl mx-auto px-4 pb-4'
));
?>

<div <?php echo $wrapper_attributes; ?>>
	<h2 class="text-xl font-bold mb-4 text-gray-900 dark:text-white"><?php echo $attributes['title']; ?></h2>
	<div class="bg-white dark:bg-gray-800 rounded-lg p-4 shadow-md">
		<?php echo $posts_markup; ?>
	</div>
</div>