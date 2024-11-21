<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package BudhiLaw
 * @subpackage Blog
 * @since 1.0.0
 */

get_header();
?>

<main>
    <?php while (have_posts()) : the_post(); ?>
        <article>
            <?php if (has_post_thumbnail()) : ?>
            <div class="relative h-[70vh] mb-12">
                <div class="absolute inset-0 w-full h-full">
                    <?php the_post_thumbnail('full', ['class' => 'w-full h-full object-cover']); ?>
                    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
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
            <header class="container mx-auto px-4 py-20 max-w-5xl">
                <h1 class="text-5xl font-bold text-gray-900 mb-4 leading-tight"><?php the_title(); ?></h1>
                <div class="flex items-center text-gray-600 text-lg">
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
                                       class="text-sm text-blue-600 hover:text-blue-800">
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
        if (comments_open() || get_comments_number()) :
            echo '<div class="container mx-auto px-4 max-w-5xl my-12">';
            comments_template();
            echo '</div>';
        endif;
        ?>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>