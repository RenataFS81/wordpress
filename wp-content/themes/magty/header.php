<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Magty
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> data-theme="light">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<?php do_action( 'magty_before_site' ); ?>

<div id="page" class="site">

	<?php 
	if ( get_theme_mod( 'show_preloader' ) ) :
		get_template_part( 'template-parts/header/preloader' ); 
	endif;
	 
	if ( get_theme_mod( 'show_progressbar', true ) ) :
		get_template_part( 'template-parts/header/progressbar' ); 
	endif;
	?>

	<a class="skip-link screen-reader-text" href="#site-content-wrapper"><?php esc_html_e( 'Skip to content', 'magty' ); ?></a>

	<?php do_action( 'magty_before_header' ); ?>

	<?php get_template_part( 'template-parts/header/site-header' ); ?>

	<?php do_action( 'magty_before_content' ); ?>

	<div id="site-content-wrapper">

	<?php
	do_action( 'magty_content_top' );
