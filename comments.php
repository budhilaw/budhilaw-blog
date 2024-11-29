<?php
if ( post_password_required() ) {
    return;
}
?>

<section id="comments-section" class="pb-8 lg:pb-8 antialiased text-gray-800 dark:text-gray-100">
    <div class="max-w-5xl mx-auto px-4">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">
                <?php
                $comments_number = get_comments_number();
                printf(
                    _n('Discussion (%s)', 'Discussions (%s)', $comments_number, 'budhilaw'),
                    number_format_i18n($comments_number)
                );
                ?>
            </h2>
        </div>

	    <?php if ( comments_open() ) : ?>
	        <?php comment_form(array(
	            'class_form' => 'mb-6',
	            'class_submit' => 'inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-blue-700 bg-blue-800',
	            'comment_field' => '
				<div class="my-4 py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
	                <label for="comment" class="sr-only">Your comment</label>
	                <textarea id="comment" name="comment" rows="6"
	                    class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
	                    placeholder="' . esc_attr__('Write a comment...', 'budhilaw') . '" required></textarea>
	            </div>',
	        )); ?>
	    <?php endif; ?>

        <?php if ( have_comments() ) : ?>
	        <?php
		        wp_list_comments(array(
		            'style' => 'ul',
		            'callback' => function($comment, $args, $depth) {
		                    $GLOBALS['comment'] = $comment;
		                ?>
		                <li <?php comment_class('p-6 text-base rounded-lg' . ($depth > 1 ? ' mb-3 ml-6 lg:ml-12' : '')); ?>>
		                    <div class="flex justify-between items-center mb-2">
		                        <div class="flex items-center">
		                            <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white font-semibold">
		                                <?php echo get_avatar($comment, 24, '', '', array('class' => 'mr-2 w-6 h-6 rounded-full')); ?>
		                                <?php comment_author(); ?>
		                            </p>
		                            <p class="text-sm text-gray-600 dark:text-gray-400">
		                                <time datetime="<?php comment_time('c'); ?>"><?php printf(__('%1$s at %2$s', 'budhilaw'), get_comment_date(), get_comment_time()); ?></time>
		                            </p>
		                        </div>
		                    </div>
		                    <?php if (!$comment->comment_approved) : ?>
		                        <p><?php _e('Your comment is awaiting moderation.', 'budhilaw'); ?></p>
		                    <?php endif; ?>
		                    <div>
		                        <?php comment_text(); ?>
		                    </div>
		                    <div class="flex items-center mt-4 space-x-4">
		                        <?php
		                        comment_reply_link(array_merge($args, array(
		                            'depth' => $depth,
		                            'max_depth' => $args['max_depth'],
		                            'before' => '<button type="button" class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400 font-medium">
		                                <svg class="mr-1.5 w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
		                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5h5M5 8h2m6-3h2m-5 3h6m2-7H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"/>
		                                </svg>',
		                            'after' => '</button>'
		                        )));
		                        ?>
		                    </div>
		                </li>
		                <?php
		            }
		        ));
	        ?>

	        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		        <nav class="comment-navigation">
		            <div class="nav-previous"><?php previous_comments_link( __( '← Older Comments', 'budhilaw' ) ); ?></div>
		            <div class="nav-next"><?php next_comments_link( __( 'Newer Comments →', 'budhilaw' ) ); ?></div>
		        </nav>
	        <?php endif; ?>
        <?php endif; ?>

		<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		    <p class="no-comments"><?php _e( 'Comments are closed.', 'budhilaw' ); ?></p>
		<?php endif; ?>

    </div>
</section>
