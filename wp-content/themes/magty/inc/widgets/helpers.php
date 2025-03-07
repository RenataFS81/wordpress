<?php

// Adds inline css for widgets. Must be called within wp_enqueue_scripts callback.
if ( ! function_exists( 'magty_widget_css' ) ) :
	function magty_widget_css( $widget_id, $block_name ) {
		if ( 'global' != get_theme_mod( 'widgets_css_loading', 'conditional' ) ) {
			if ( is_active_widget( false, false, $widget_id ) || is_customize_preview() ) {

				$file_prefix   = is_rtl() ? '-rtl' : '';
				$base_path     = get_template_directory() . '/inc/widgets/css/';
				$css_file_path = $base_path . $block_name . $file_prefix . '.css';

				if ( file_exists( $css_file_path ) ) {
					$styles = wp_strip_all_tags( file_get_contents( $css_file_path ) );
					wp_add_inline_style( 'magty-style', $styles );
				}
			}
		}
	}
endif;