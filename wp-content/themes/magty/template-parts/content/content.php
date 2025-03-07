<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Magty
 */

if( ! $single_post_style ) {
	$single_post_style = 'single_style_1';
}
$single_template = str_replace( 'single_', '', $single_post_style );
$single_template = str_replace( '_', '-', $single_template );
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php get_template_part( 'template-parts/single/styles/' . $single_template ); ?>
</article><!-- #post-<?php the_ID(); ?> -->
