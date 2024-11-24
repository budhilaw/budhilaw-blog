<?php
/**
 * Template part for displaying single post
 */
?>

<article>
	<?php if (has_post_thumbnail()) : ?>
		<div class="relative h-[70vh] mb-12">
			<div class="absolute inset-0 w-full h-full">
				<?php the_post_thumbnail('full', ['class' => 'w-full h-full object-cover']); ?>
				<div class="absolute inset-0 bg-black bg-opacity-50 dark:bg-opacity-60"></div>
			</div>
			<div class="container relative mx-auto h-full flex items-center px-4">
				<header class="max-w-5xl">
					<h1 class="text-5xl font-bold text-white mb-4 leading-tight"><?php the_title(); ?></h1>
					<div class="flex items-center text-gray-200 text-lg">
                            <span class="mr-4">
                                <time datetime="<?php echo get_the_date('c'); ?>">
                                    <?php echo get_the_date(); ?>
                                </time>
                            </span>
						<span class="mr-4">
                                <?php echo get_the_author(); ?>
                            </span>
					</div>
				</header>
			</div>
		</div>
	<?php else : ?>
		<header class="container mx-auto py-20 max-w-5xl">
			<h1 class="text-5xl font-bold dark:text-gray-200 text-gray-900 mb-4 leading-tight"><?php the_title(); ?></h1>
			<div class="flex items-center dark:text-gray-400 text-gray-600 text-lg">
                <span class="mr-4">
                    <time datetime="<?php echo get_the_date('c'); ?>">
                        <?php echo get_the_date(); ?>
                    </time>
                </span>
                <span class="mr-4">
                    <?php echo get_the_author(); ?>
                </span>
			</div>
		</header>
	<?php endif; ?>

	<div class="container mx-auto px-4">
		<div class="max-w-5xl mx-auto">
			<div class="prose prose-xl max-w-none prose-headings:font-bold prose-p:text-lg prose-p:leading-relaxed prose-p:text-gray-800 prose-p:mb-8">
				<?php the_content(); ?>
			</div>
			<footer class="mt-12 pt-8 border-t border-gray-200">
				<?php
				$tags = get_the_tags();
				if ($tags) : ?>
					<div class="flex flex-wrap gap-2">
						<?php foreach ($tags as $tag) : ?>
							<a href="<?php echo get_tag_link($tag->term_id); ?>"
							   class="text-sm dark:text-blue-200 dark:hover:text-blue-500 text-blue-600 hover:text-blue-800">
								#<?php echo $tag->name; ?>
							</a>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
			</footer>
		</div>
	</div>
</article>

<?php
wp_link_pages(
	[
		'before' => '
			<div class="container mx-auto px-4">
				<div class="max-w-5xl mx-auto">
					<div class="page-links">
        				<ul class="font-[sans-serif] flex mx-auto border divide-x-2 border-gray-400 hover:border-black rounded w-max overflow-hidden">',
		'after'  => '
						</ul>
					</div>
				</div>
			</div>',
		'next_or_number'	=> 'next',
		'nextpagelink'		=> __( '
			<li
				class="px-4 py-2.5 flex items-center justify-center shrink-0 cursor-pointer text-sm font-semibold text-gray-400 hover:text-gray-600  hover:bg-gray-50">
        		Next
				<svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-current ml-3 rotate-180" viewBox="0 0 55.753 55.753">
				  <path
					d="M12.745 23.915c.283-.282.59-.52.913-.727L35.266 1.581a5.4 5.4 0 0 1 7.637 7.638L24.294 27.828l18.705 18.706a5.4 5.4 0 0 1-7.636 7.637L13.658 32.464a5.367 5.367 0 0 1-.913-.727 5.367 5.367 0 0 1-1.572-3.911 5.369 5.369 0 0 1 1.572-3.911z"
					data-original="#000000" />
				</svg>
      		</li>
		', 'budhilaw' ),
		'previouspagelink'	=> __( '
			<li
        		class="px-4 py-2.5 flex items-center justify-center shrink-0 cursor-pointer text-sm font-semibold text-gray-400 hover:text-gray-600  hover:bg-gray-50">
        		<svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-current mr-3" viewBox="0 0 55.753 55.753">
          <path
            d="M12.745 23.915c.283-.282.59-.52.913-.727L35.266 1.581a5.4 5.4 0 0 1 7.637 7.638L24.294 27.828l18.705 18.706a5.4 5.4 0 0 1-7.636 7.637L13.658 32.464a5.367 5.367 0 0 1-.913-.727 5.367 5.367 0 0 1-1.572-3.911 5.369 5.369 0 0 1 1.572-3.911z"
            data-original="#000000" />
        </svg>
        			Previous
      		</li>
		', 'budhilaw' ),
    ]
)
?>
