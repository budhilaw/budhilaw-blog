<?php
/**
 * Content template part for displaying posts
 *
 * @package Budhilaw
 */

$the_post_id = get_the_ID();
$has_post_thumbnail = get_the_post_thumbnail_url( $the_post_id );
?>

<article id="post-<?php the_ID();?>" class="rounded overflow-hidden">
	<a href="<?php the_permalink(); ?>" class="cursor-pointer group block">
		<div>
			<?php
				if ( $has_post_thumbnail ) {
					the_post_custom_thumbnail(
							$the_post_id,
							'featured-thumbnail',
					[
							'sizes' => '(max-width: 1024px) 1024px, 192px',
							'class' => 'w-full h-80 object-cover group-hover:opacity-80 transition-opacity duration-300 mb-4',
					]);
				} else {
					?>
					<img
						class="lg:h-48 md:h-36 w-full object-cover object-center mb-4"
						src="<?php echo get_template_directory_uri() . '/assets/img/1024x192.png'; ?>'"
						alt="<?php the_title();?>">
					<?php
				}
			?>

			<h3 class="text-xl font-bold text-gray-800 group-hover:text-blue-500 transition-all">
				<?php the_title(); ?>
			</h3>
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
				<p class="text-sm text-gray-600">
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
