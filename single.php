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

<main id="main-content" class="bg-white dark:bg-gray-900">
    <?php
        while (have_posts()) : the_post();
            get_template_part('template-parts/content-single');
        endwhile;
    ?>
</main>

<?php
    if (comments_open() || get_comments_number()) {
        comments_template();
    }
?>
<?php get_footer(); ?>