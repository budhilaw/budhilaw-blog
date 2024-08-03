<?php
/*
 * Main template file
 *
 * @package Budhilaw
 */

?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title><?php bloginfo( 'name' ); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header id="masthead" class="site-header">
		<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
		<?php get_template_part( 'template-parts/header/site', 'navigation' ); ?>
	</header>
	<div id="content" class="site-content">
		<main id="primary" class="site-main">
			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					get_template_part( 'template-parts/content/content', get_post_type() );
				}
			} else {
				get_template_part( 'template-parts/content/content', 'none' );
			}
			?>
		</main>
	</div>
	<footer id="colophon" class="site-footer">
		<?php get_template_part( 'template-parts/footer/site', 'info' ); ?>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>
