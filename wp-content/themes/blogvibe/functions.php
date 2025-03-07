<?php
/**
 * Blogvibe functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Blogvibe
 */

if ( ! function_exists( 'magty_add_new_read_more_styles' ) ) :
	function magty_add_new_read_more_styles( $styles ) {
		return array_merge(
			$styles,
			array(
				'style_4' => __( 'Style 4', 'magty' ),
			)
		);
	}
endif;
add_filter( 'magty_read_more_styles', 'magty_add_new_read_more_styles' );

function blogvibe_set_theme_mods() {

	$fresh_site_activate = get_option( 'blogvibe_site_activate' );
	if ( (bool) $fresh_site_activate === false ) {
	
		$options = array(
			'accent_color'                               => '#0072ff',
			'primary_color'                              => '#666666',
			'link_color'                                 => '#0072ff',
			'link_color_hover'                           => '#0072ff',
			'header_social_links_label_color'            => '#000000',
			'header_social_links_icons_color'            => '#000000',
			'header_social_links_icons_hover_color'      => '#0072ff',
			'header_search_btn_bg_color'                 => '#0072ff',
			'header_btn_one_bg_color'                    => '#0072ff',
			'header_btn_one_border_color'                => '#0072ff',
			'preloader_color'                            => '#0072ff',
			'progressbar_color'                          => '#0072ff',
			'enable_breadcrumb'                          => true,
			'breadcrumb_link_color'                      => '#0072ff',
			'global_buttons_bg_color'                    => '#0072ff',
			'global_buttons_border_color'                => '#0072ff',
			'global_post_meta_icons_color'               => '#0072ff',
			'ticker_label_bg_color'                      => '#0072ff',
			'scroll_to_top_bg_color'                     => '#0072ff',
			'scroll_to_top_hover_bg_color'               => '#0072ff',
			'header_style'                               => 'header_style_2',
			'enable_top_bar'                             => false,
			'top_bar_nav_menu_hover_color'               => '#0072ff',
			'primary_menu_bg_color'                      => '#ffffff',
			'offcanvas_icon_color'                       => '#000000',
			'primary_menu_text_color'                    => '#000000',
			'primary_menu_text_hover_color'              => '#000000',
			'primary_menu_text_hover_border'             => '#0072ff',
			'primary_menu_active_item_color'             => '#000000',
			'primary_menu_active_item_border'            => '#0072ff',
			'primary_menu_desc_color'                    => '#000000',
			'sub_menu_text_hover_color'                  => '#0072ff',
			'offcanvas_hide_desktop'                     => false,
			'primary_font'                               => '"Nunito", "200:300:regular:500:600:700:800:900:200italic:300italic:italic:500italic:600italic:700italic:800italic:900italic", sans-serif',
			'primary_font_weight'                        => 700,
			'secondary_font'                             => '"Roboto", "100:100italic:300:300italic:regular:italic:500:500italic:700:700italic:900:900italic", sans-serif',
			'secondary_font_weight'                      => 'normal',
			'primary_menu_font'                          => '"Nunito", "200:300:regular:500:600:700:800:900:200italic:300italic:italic:500italic:600italic:700italic:800italic:900italic", sans-serif',
			'primary_menu_font_weight'                   => 600,
			'sub_menu_font'                              => '"Nunito", "200:300:regular:500:600:700:800:900:200italic:300italic:italic:500italic:600italic:700italic:800italic:900italic", sans-serif',
			'sub_menu_font_weight'                       => 500,
			'center_align_single_header_meta'            => false,
			'archive_style'                              => 'archive_style_3',
			'excerpt_length'                             => 48,
			'pagination_type'                            => 'numeric',
			'center_aligned_pagination'                  => true,
			'single_category_position'                   => 'after_content',
			'enable_single_tag_label'                    => false,
			'show_related_posts'                         => true,
			'footer_theme'                               => 'light',
			'footer_bg_color'                            => '#f9f9fa',
			'sub_footer_theme'                           => 'light',
			'sub_footer_bg_color'                        => '#f9f9fa',
			'enable_border_above_sub_footer'             => true,
		);
	
		foreach ( $options as $key => $value ) {
			set_theme_mod( $key, $value );
		}
	
		update_option( 'blogvibe_site_activate', true );
	}
}
add_action( 'after_switch_theme', 'blogvibe_set_theme_mods' );