<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * @package Budhilaw
 */
?>

<section class="not-found justify-content-center flex">
	<header class="page-header">
		<?php if ( is_search() ): ?>
            <div>
                <h1 class="text-3xl font-extrabold text-gray-800 dark:text-gray-200 inline-block">
					<?php esc_html_e( 'Search Results', 'budhilaw' ); ?>
                </h1>

                <p class="text-gray-400 dark:text-gray-200 text-sm mt-4">
	                <?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'budhilaw' ); ?>
                </p>
            </div>
		<?php else: ?>
            <div>
                <h1 class="text-3xl font-extrabold text-gray-800 dark:text-gray-200 inline-block">
					<?php esc_html_e( 'Are you lost?', 'budhilaw' ); ?>
                </h1>

                <p class="text-gray-400 dark:text-gray-200 text-sm mt-4">
	                <?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'budhilaw' ); ?>
                </p>
            </div>
		<?php endif; ?>
	</header>
</section>
