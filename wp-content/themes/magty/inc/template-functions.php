<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Magty
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function magty_body_classes( $classes ) {

	global $post;

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Get Sticky menu.
	$sticky_menu = get_theme_mod( 'enable_sticky_menu', true );
	if ( $sticky_menu ) {
		$classes[] = 'has-sticky-menu';
	}

	// Get Header Style.
	$classes[] = get_theme_mod( 'header_style', 'header_style_1' );

	// Get appropriate class for the sidebar layout.
	$page_layout = magty_get_page_layout();
	if ( 'no-sidebar' == $page_layout ) {
		$classes[] = 'no-sidebar wide-container';
	} elseif ( 'no-sidebar-narrow' == $page_layout ) {
		$classes[] = 'no-sidebar narrow-container';
	} else {
		$classes[] = 'has-sidebar ' . esc_attr( $page_layout );
	}

	// Get Sticky.
	if ( is_front_page() ) {
		$enable_sidebar_border = '';
		$sticky                = get_theme_mod( 'front_page_sticky_sidebar', true );
		// Fetch from Post Meta first.
		if ( $post && is_singular() ) {
			$enable_sidebar_border = get_post_meta( $post->ID, 'magty_enable_sidebar_border', true );
			if ( '0' == $enable_sidebar_border ) {
				$enable_sidebar_border = false;
			} elseif ( '1' == $enable_sidebar_border ) {
				$enable_sidebar_border = true;
			} else {
				$enable_sidebar_border = get_theme_mod( 'front_page_enable_sidebar_border' );
			}
		} else {
			$enable_sidebar_border = get_theme_mod( 'front_page_enable_sidebar_border' );
		}
		if ( $enable_sidebar_border ) {
			$classes[] = 'has-sidebar-border';
		}
	} else {
		$enable_sidebar_border = '';
		$sticky = get_theme_mod( 'sticky_sidebar', true );
		// Fetch from Post Meta on single posts or pages.
		if ( $post && is_singular() ) {
			$enable_sidebar_border = get_post_meta( $post->ID, 'magty_enable_sidebar_border', true );
			if ( '0' == $enable_sidebar_border ) {
				$enable_sidebar_border = false;
			} elseif ( '1' == $enable_sidebar_border ) {
				$enable_sidebar_border = true;
			} else {
				$enable_sidebar_border = get_theme_mod( 'global_enable_sidebar_border' );
			}
		} else {
			$enable_sidebar_border = get_theme_mod( 'global_enable_sidebar_border' );
		}
		if ( $enable_sidebar_border ) {
			$classes[] = 'has-sidebar-border';
		}
	}
	if ( $sticky ) {
		$classes[] = 'has-sticky-sidebar';
	}

	// Check for title line animation.
	$title_line_hover = get_theme_mod( 'global_show_title_line_hover' );
	if ( $title_line_hover ) {
		$classes[] = 'has-title-line-hover';
	}

	return $classes;
}
add_filter( 'body_class', 'magty_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function magty_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'magty_pingback_header' );
