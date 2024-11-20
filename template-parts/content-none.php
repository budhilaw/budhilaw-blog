<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * @package Budhilaw
 */
?>

<section class="not-found justify-content-center flex">
	<header class="page-header">
		<h1 class="text-3xl font-extrabold text-gray-800 inline-block">
			<?php esc_html_e( 'Nothing Found', 'budhilaw' ); ?>
		</h1>
		<?php if ( is_search() ): ?>
			<p class="text-gray-400 text-sm mt-4">
				<?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'budhilaw' ); ?>
				<?php get_search_form(); ?>
			</p>
		<?php else: ?>
			<p class="text-gray-400 text-sm mt-4">
				<?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'budhilaw' ); ?>
				<?php get_search_form(); ?>
			</p>
		<?php endif; ?>
	</header>
</section>
