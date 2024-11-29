<?php
/**
 * Header template
 * @package Budhilaw
 * @since 1.0.0
 */

?>

<!DOCTYPE html>
<html <?php language_attributes();?> lang="<?php language_attributes();?>">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title><?php bloginfo( 'name' ); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
}
?>

<div id ="page" class="site dark:bg-slate-900 bg-zinc-50">
    <div class="container mx-auto dark:bg-slate-800 bg-white">
	    <?php get_template_part( 'template-parts/header/nav' ); ?>