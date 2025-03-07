<?php
/**
 * Displays the site header.
 *
 * @package Magty
 */

$header_style    = get_theme_mod( 'header_style', 'header_style_1' );
$header_template = str_replace( 'header_', '', $header_style );
$header_template = str_replace( '_', '-', $header_template );
?>

<?php get_template_part( 'template-parts/header/styles/' . $header_template ); ?>

<?php
get_template_part( 'template-parts/header/below-header' );
