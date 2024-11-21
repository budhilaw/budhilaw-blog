<?php
/*
 * Main template file
 *
 * @package Budhilaw
 */

?>
<?php get_header(); ?>
	<div id="primary">
		<main id="main" class="site-content" role="main">
            <div class="bg-white sm:px-6 px-4 py-10 font-sans">
                <div class="mx-auto max-w-5xl">
                    <?php if ( have_posts() ) : ?>
                        <header>
                            <?php if ( is_home() && ! is_front_page() ) : ?>
                                <h1 class="text-3xl font-extrabold text-gray-800 inline-block">
                                    <?php single_post_title(); ?>
                                </h1>
                            <?php endif; ?>

                            <p class="text-gray-400 text-sm mt-4">
                                Feel free to browse my latest articles and don't hesitate to reach out
                                if you have any questions.
                            </p>
                        </header>
                        <hr class="my-8" />

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
	</div>
<?php get_footer(); ?>