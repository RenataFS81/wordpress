<?php
/**
 * Displays breadcrumb
 *
 * @package Magty
 */

if ( get_theme_mod( 'enable_breadcrumb' ) ) :

	if ( ! function_exists( 'breadcrumb_trail' ) ) {
		require_once get_template_directory() . '/lib/breadcrumbs/breadcrumbs.php';
	}

	$breadcrumb_args = array(
		'wrapper_start' => '<div class="magty-breadcrumb-wrapper">',
		'wrapper_end'   => '</div>',
		'container'     => 'div',
		'before'        => '<div class="reset-list-style">',
		'after'         => '</div>',
		'show_browse'   => false,
		'show_on_front' => false,
	);
	breadcrumb_trail( $breadcrumb_args );

endif;
