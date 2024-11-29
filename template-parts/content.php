<?php
/**
 * Content template part for displaying posts
 *
 * @package Budhilaw
 */

$the_post_id = get_the_ID();
$has_post_thumbnail = get_the_post_thumbnail_url( $the_post_id );
$article_terms = wp_get_post_terms( $the_post_id, [ 'category', 'post_tag' ] );
?>

<article id="post-<?php the_ID();?>" class="rounded overflow-hidden">
    <a href="<?php the_permalink(); ?>" class="cursor-pointer group block">
        <div class="box-post">
			<?php
			if ( $has_post_thumbnail ) {
				the_post_custom_thumbnail(
					$the_post_id,
					'featured-thumbnail',
					[
						'sizes' => '(max-width: 1024px) 1024px, 192px',
						'class' => 'w-full h-80 object-cover group-hover:opacity-80 transition-opacity duration-300 mb-4 shadow-md',
					]);
			} else { ?>

                <div class="card min-h-60 w-full mb-4 text-gray-400 bg-gray-200 dark:bg-gray-700 dark:border-gray-700">
                    <div class="card-body items-center justify-center">
                        <span class="icon-[tabler--brand-google-drive] mb-2 size-8"></span>
                        <p>No featured image.</p>
                    </div>
                </div>

				<?php
			}
			?>

            <h3 class="text-xl font-bold text-gray-800 dark:text-gray-200 dark:hover:text-[#608BC1] group-hover:text-blue-500 transition-all">
				<?php the_title(); ?>
            </h3>

            <!-- Add this new category section -->
			<?php if ( ! empty( $article_terms ) ) : ?>
                <div class="flex flex-wrap mt-2">
					<?php foreach ( $article_terms as $key => $article_term ) : ?>
                        <a
                                class="text-xs mr-2 px-2 py-1 rounded-full bg-gray-100 dark:bg-gray-800 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-[#608BC1] text-gray-600 hover:bg-blue-100 hover:text-blue-600 transition-colors"
                                href="<?php echo esc_url( get_term_link( $article_term ) ); ?>">
							<?php echo esc_html($article_term->name); ?>
                        </a>
					<?php endforeach; ?>
                </div>
			<?php endif; ?>
            <div class="mt-4">
                <p class="text-gray-400 text-sm">
					<?php
					    budhilaw_the_excerpt_length( 100 );
					?>
                </p>
            </div>
        </div>
    </a>
    <div class="flex items-center justify-between mt-6">
        <div class="flex items-center gap-3">
            <img
                    src='<?php echo get_avatar_url(get_the_author_meta('ID')); ?>'
                    class="w-10 h-10 rounded-full"  alt="<?php the_author(); ?>" />
            <div>
                <p class="text-sm text-gray-600 dark:text-gray-200">
                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="hover:text-blue-500 transition-colors">
						<?php the_author(); ?>
                    </a>
                </p>
                <span class="text-sm text-gray-400">
					<?php echo get_the_date(); ?>
				</span>
            </div>
        </div>
        <div class="flex items-center gap-1 text-gray-400">
            <span class="align-middle text-xs"><?php echo get_comments_number(); ?> Comments</span>
            <span class="icon-[icon-park-outline--comments] text-xl text-gray-400"></span>
        </div>
    </div>
</article>
