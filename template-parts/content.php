<?php
/**
 * Content template part for displaying posts
 *
 * @package Budhilaw
 */

$the_post_id = get_the_ID();
$has_post_thumbnail = get_the_post_thumbnail_url( $the_post_id );
?>

<article id="post-<?php the_ID();?>" class="cursor-pointer rounded overflow-hidden group">
	<div>
		<?php
            if ( $has_post_thumbnail ) {
                the_post_custom_thumbnail(
                        $the_post_id,
                        'featured-thumbnail',
                [
                        'sizes' => '(max-width: 1024px) 1024px, 192px',
                        'class' => 'w-full h-80 object-cover group-hover:opacity-80 transition-opacity duration-300',
                ]);
            } else {
                ?>
                <img
                    class="lg:h-48 md:h-36 w-full object-cover object-center"
                    src="<?php echo get_template_directory_uri() . '/assets/img/1024x192.png'; ?>'"
                    alt="<?php the_title();?>">
                <?php
            }
        ?>

		<span class="text-sm block text-gray-400 my-4">
			<?php echo get_the_date(); ?>
		</span>
		<h3 class="text-xl font-bold text-gray-800 group-hover:text-blue-500 transition-all">
			<?php the_title(); ?>
		</h3>
		<div class="mt-4">
			<p class="text-gray-400 text-sm">
				<?php
				// remove [...] from excerpt
				$excerpt = get_the_excerpt();
				$excerpt = substr($excerpt, 0, strrpos($excerpt, ' ', -1));
				echo $excerpt;
				?>
			</p>
		</div>
	</div>
	<div class="flex flex-wrap items-center gap-3 mt-6">
		<img
			src='<?php echo get_avatar_url(get_the_author_meta('ID')); ?>'
			class="w-10 h-10 rounded-full"  alt="<?php the_author(); ?>" />
		<p class="text-xs text-gray-400">
			<?php the_author(); ?>
		</p>
	</div>
</article>
