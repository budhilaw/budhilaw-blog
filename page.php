<?php
/*
 * Single page template
 *
 * @package Budhilaw
 */

?>
<?php get_header(); ?>
	<div id="content" class="site-content">
        <main id="primary" class="site-main bg-white dark:bg-gray-800 font-sans">
            <div class="container mx-auto py-4">
	            <?php
                    while ( have_posts() ) : the_post();
                        the_content();
                    endwhile;
	            ?>
            </div>
		</main>
	</div>
<?php get_footer(); ?>