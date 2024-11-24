<?php
/*
 * Search page template
 *
 * @package Budhilaw
 */
?>
<?php get_header(); ?>
	<div class="w-full flex flex-col lg:flex-row bg-white dark:bg-gray-900 font-sans">
		<div id="primary" class="flex-1">
			<main id="main" class="site-content" role="main">
				<div class="sm:px-6 px-4 py-10">
					<div class="mx-auto max-w-5xl">
						<?php if ( have_posts() ) : ?>
							<div>
								<h1 class="text-3xl font-extrabold text-gray-800 dark:text-gray-200 inline-block">
									<?php esc_html_e( 'Search Results', 'budhilaw' ); ?>
								</h1>

								<p class="text-gray-400 dark:text-gray-200 text-sm mt-4">
									<?php esc_html_e( 'You searched for:', 'budhilaw' ); ?> <?php echo get_search_query(); ?>
								</p>
							</div>

							<hr class="h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-600">

							<div class="grid gap-16">
								<?php
								while ( have_posts() ) {
									the_post();
									get_template_part( 'template-parts/content' );
								}
								?>
							</div>
						<?php else : ?>
							<?php get_template_part( 'template-parts/content-none' ); ?>
						<?php endif; ?>
					</div>
				</div>
			</main>
			<div class="sm:px-6 px-4 py-10">
				<div class="container mx-auto max-w-5xl">
					<?php budhilaw_pagination(); ?>
				</div>
			</div>
		</div>
		<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>