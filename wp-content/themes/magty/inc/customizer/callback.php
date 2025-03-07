<?php

if ( ! function_exists( 'magty_is_preloader_enabled' ) ) :
	/**
	 * Check if preloader is enabled
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_preloader_enabled( $control ) {

		if ( $control->manager->get_setting( 'show_preloader' )->value() === true ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_progressbar_enabled' ) ) :
	/**
	 * Check if progressbar is enabled
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_progressbar_enabled( $control ) {

		if ( $control->manager->get_setting( 'show_progressbar' )->value() === true ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_header_social_icons_theme_color' ) ) :
	/**
	 * Check if theme color is enabled in header social icons
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_header_social_icons_theme_color( $control ) {

		if ( $control->manager->get_setting( 'header_social_links_color_as' )->value() === 'theme_color' ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_top_bar_enabled' ) ) :
	/**
	 * Check if top bar is enabled
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_top_bar_enabled( $control ) {

		if ( $control->manager->get_setting( 'enable_top_bar' )->value() === true ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_todays_time_enabled' ) ) :
	/**
	 * Check if Todays time is enabled
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_todays_time_enabled( $control ) {

		if ( $control->manager->get_setting( 'enable_todays_time' )->value() === true ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_todays_date_enabled' ) ) :
	/**
	 * Check if Todays Date is enabled
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_todays_date_enabled( $control ) {

		if ( $control->manager->get_setting( 'enable_todays_date' )->value() === true ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_menu_bar_logo_available' ) ) :
	/**
	 * Check if Menu Bar logo is available in header types
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_menu_bar_logo_available( $control ) {

		$header_style   = $control->manager->get_setting( 'header_style' )->value();
		$allowed_styles = array( 'header_style_1', 'header_style_2' );

		if ( in_array( $header_style, $allowed_styles ) ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_menu_bar_logo_enabled' ) ) :
	/**
	 * Check if Menu Bar logo is enabled
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_menu_bar_logo_enabled( $control ) {

		if ( $control->manager->get_setting( 'enable_different_logo_menu_bar' )->value() === true ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_ad_banner_enabled' ) ) :
	/**
	 * Check if Ad banner is enabled for appropriate header style
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_ad_banner_enabled( $control ) {

		$header_style   = $control->manager->get_setting( 'header_style' )->value();
		$allowed_styles = array( 'header_style_1', 'header_style_2' );

		if ( in_array( $header_style, $allowed_styles ) ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_header_buttons_available' ) ) :
	/**
	 * Check if Header buttons are available in header types
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_header_buttons_available( $control ) {

		$header_style   = $control->manager->get_setting( 'header_style' )->value();
		$allowed_styles = array( 'header_style_1', 'header_style_2', 'header_style_4' );

		if ( in_array( $header_style, $allowed_styles ) ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_sticky_menu_enabled' ) ) :
	/**
	 * Check for if sticky menu enabled
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 */
	function magty_is_sticky_menu_enabled( $control ) {
		if ( $control->manager->get_setting( 'enable_sticky_menu' )->value() === true ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_ticker_posts_enabled' ) ) :
	/**
	 * Check if Ticker posts is active.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_ticker_posts_enabled( $control ) {
		if ( $control->manager->get_setting( 'enable_ticker_posts' )->value() === true ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_ticker_label_enabled' ) ) :
	/**
	 * Check if Ticker label is active.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_ticker_label_enabled( $control ) {
		if ( $control->manager->get_setting( 'enable_ticker_label' )->value() === true ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_ticker_posts_category_enabled' ) ) :
	/**
	 * Check if Ticker posts category is active.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_ticker_posts_category_enabled( $control ) {
		if ( $control->manager->get_setting( 'show_ticker_posts_category' )->value() === true ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_home_banner_enabled' ) ) :
	/**
	 * Check if Home Banner is active.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_home_banner_enabled( $control ) {
		if ( $control->manager->get_setting( 'enable_banner' )->value() === true ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_home_banner_as_slider' ) ) :
	/**
	 * Check if Home Banner is display as slider.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_home_banner_as_slider( $control ) {
		if ( $control->manager->get_setting( 'banner_display_as' )->value() === 'slider' ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_home_banner_as_carousel' ) ) :
	/**
	 * Check if Home Banner is display as carousel.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_home_banner_as_carousel( $control ) {
		if ( $control->manager->get_setting( 'banner_display_as' )->value() === 'carousel' ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_home_banner_not_fullwidth' ) ) :
	/**
	 * Check if Home Banner is not fullwidth.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_home_banner_not_fullwidth( $control ) {
		if ( $control->manager->get_setting( 'banner_layout' )->value() !== 'full-width' ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_banner_content_from_category' ) ) :
	/**
	 * Check if Banner content is from category
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_banner_content_from_category( $control ) {
		if ( $control->manager->get_setting( 'banner_content_from' )->value() === 'category' ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_banner_content_from_post_ids' ) ) :
	/**
	 * Check if Banner content is from post IDs
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_banner_content_from_post_ids( $control ) {
		if ( $control->manager->get_setting( 'banner_content_from' )->value() === 'post_ids' ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_home_banner_arrows_enabled' ) ) :
	/**
	 * Check if Banner arrows is enabled.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_home_banner_arrows_enabled( $control ) {
		if ( $control->manager->get_setting( 'enable_banner_arrows' )->value() === true ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_banner_overlay_enabled' ) ) :
	/**
	 * Check if Banner overlay is enabled.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_banner_overlay_enabled( $control ) {
		if ( $control->manager->get_setting( 'enable_banner_overlay' )->value() === true ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_banner_category_enabled' ) ) :
	/**
	 * Check if Banner Category is enabled.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_banner_category_enabled( $control ) {
		if ( $control->manager->get_setting( 'show_banner_category' )->value() === true ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_banner_desc_enabled' ) ) :
	/**
	 * Check if banner desc is active.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_banner_desc_enabled( $control ) {
		if ( $control->manager->get_setting( 'enable_banner_desc' )->value() === true ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_banner_read_more_enabled' ) ) :
	/**
	 * Check if banner read more is active.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_banner_read_more_enabled( $control ) {
		if ( $control->manager->get_setting( 'enable_banner_read_more_btn' )->value() === true ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_pinned_posts_enabled' ) ) :
	/**
	 * Check if Pinned Posts is active.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_pinned_posts_enabled( $control ) {
		if ( $control->manager->get_setting( 'enable_pinned_posts' )->value() === true ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_pinned_overlay_enabled' ) ) :
	/**
	 * Check if Pinned Post overlay is enabled.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_pinned_overlay_enabled( $control ) {
		if ( $control->manager->get_setting( 'enable_pinned_posts_overlay' )->value() === true ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_pinned_posts_content_from_category' ) ) :
	/**
	 * Check if Pinned Posts content is from category
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_pinned_posts_content_from_category( $control ) {
		if ( $control->manager->get_setting( 'pinned_posts_content_from' )->value() === 'category' ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_pinned_posts_content_from_post_ids' ) ) :
	/**
	 * Check if Pinned Posts content is from post IDs
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_pinned_posts_content_from_post_ids( $control ) {
		if ( $control->manager->get_setting( 'pinned_posts_content_from' )->value() === 'post_ids' ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_pinned_posts_category_enabled' ) ) :
	/**
	 * Check if Pinned Posts Category is enabled.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_pinned_posts_category_enabled( $control ) {
		if ( $control->manager->get_setting( 'show_pinned_posts_category' )->value() === true ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_trending_posts_enabled' ) ) :
	/**
	 * Check if Trending Posts is active.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_trending_posts_enabled( $control ) {
		if ( $control->manager->get_setting( 'enable_trending_posts' )->value() === true ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_trending_posts_category_enabled' ) ) :
	/**
	 * Check if Trending Posts Category is enabled.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_trending_posts_category_enabled( $control ) {
		if ( $control->manager->get_setting( 'show_trending_posts_category' )->value() === true ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_related_posts_enabled' ) ) :
	/**
	 * Check if related Posts is active.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_related_posts_enabled( $control ) {
		if ( $control->manager->get_setting( 'show_related_posts' )->value() === true ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_related_posts_category_enabled' ) ) :
	/**
	 * Check if related Posts category is active.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_related_posts_category_enabled( $control ) {
		if ( $control->manager->get_setting( 'show_related_posts_category' )->value() === true ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_related_posts_desc_enabled' ) ) :
	/**
	 * Check if related Posts desc is active.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_related_posts_desc_enabled( $control ) {
		if ( $control->manager->get_setting( 'enable_related_posts_desc' )->value() === true ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_related_posts_read_more_enabled' ) ) :
	/**
	 * Check if related Posts read_more is active.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_related_posts_read_more_enabled( $control ) {
		if ( $control->manager->get_setting( 'enable_related_posts_read_more_btn' )->value() === true ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_author_info_enabled' ) ) :
	/**
	 * Check if author info is active.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_author_info_enabled( $control ) {
		if ( $control->manager->get_setting( 'show_author_info' )->value() === true ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_author_box_bg_enabled' ) ) :
	/**
	 * Check if author info box background is active.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_author_box_bg_enabled( $control ) {
		if ( $control->manager->get_setting( 'enable_author_info_bg' )->value() === true ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_author_posts_enabled' ) ) :
	/**
	 * Check if author Posts is active.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_author_posts_enabled( $control ) {
		if ( $control->manager->get_setting( 'show_author_posts' )->value() === true ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_author_posts_category_enabled' ) ) :
	/**
	 * Check if author Posts category is active.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_author_posts_category_enabled( $control ) {
		if ( $control->manager->get_setting( 'show_author_posts_category' )->value() === true ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_author_posts_desc_enabled' ) ) :
	/**
	 * Check if author Posts desc is active.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_author_posts_desc_enabled( $control ) {
		if ( $control->manager->get_setting( 'enable_author_posts_desc' )->value() === true ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_author_posts_read_more_enabled' ) ) :
	/**
	 * Check if author Posts read_more is active.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_author_posts_read_more_enabled( $control ) {
		if ( $control->manager->get_setting( 'enable_author_posts_read_more_btn' )->value() === true ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_copyright_enabled' ) ) :
	/**
	 * Check if copyright section is enabled
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_copyright_enabled( $control ) {
		if ( $control->manager->get_setting( 'enable_copyright' )->value() === true ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_light_footer' ) ) :
	/**
	 * Check if Light Footer is enabled.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_light_footer( $control ) {

		if ( $control->manager->get_setting( 'footer_theme' )->value() === 'light' ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_dark_footer' ) ) :
	/**
	 * Check if Dark Footer is enabled.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_dark_footer( $control ) {

		if ( $control->manager->get_setting( 'footer_theme' )->value() === 'dark' ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_footer_bg_enabled' ) ) :
	/**
	 * Check if Footer background is enabled
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_footer_bg_enabled( $control ) {

		if ( $control->manager->get_setting( 'enable_footer_bg_image' )->value() === true ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_light_sub_footer' ) ) :
	/**
	 * Check if Light Sub Footer is enabled.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_light_sub_footer( $control ) {

		if ( $control->manager->get_setting( 'sub_footer_theme' )->value() === 'light' ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_dark_sub_footer' ) ) :
	/**
	 * Check if Dark Sub Footer is enabled.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_dark_sub_footer( $control ) {

		if ( $control->manager->get_setting( 'sub_footer_theme' )->value() === 'dark' ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_footer_social_menu_enabled' ) ) :
	/**
	 * Check if Footer social menu is enabled.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_footer_social_menu_enabled( $control ) {

		if ( $control->manager->get_setting( 'enable_footer_social_nav' )->value() === true ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_posts_on_front' ) ) :
	/**
	 * Check if a posts is enabled in frontpage.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_posts_on_front( $control ) {

		if ( $control->manager->get_setting( 'show_on_front' )->value() === 'posts' ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_home_title_enabled' ) ) :
	/**
	 * Check if a title is is enabled on homepage.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_home_title_enabled( $control ) {

		if ( $control->manager->get_setting( 'enable_home_title' )->value() === true ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_archive_read_more_enabled' ) ) :
	/**
	 * Check if a read more is is enabled on archive.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_archive_read_more_enabled( $control ) {

		if ( $control->manager->get_setting( 'show_archive_read_more' )->value() === true ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_scroll_top_enabled' ) ) :
	/**
	 * Check if scroll to top is enabled on archive.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_scroll_top_enabled( $control ) {

		if ( $control->manager->get_setting( 'enable_scroll_to_top' )->value() === true ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_light_offcanvas' ) ) :
	/**
	 * Check if Light offcanvas is enabled.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_light_offcanvas( $control ) {

		if ( $control->manager->get_setting( 'offcanvas_theme' )->value() === 'light' ) {
			return true;
		} else {
			return false;
		}
	}
endif;

if ( ! function_exists( 'magty_is_dark_offcanvas' ) ) :
	/**
	 * Check if Dark offcanvas is enabled.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 *
	 * @return bool Whether the control is active to the current preview.
	 */
	function magty_is_dark_offcanvas( $control ) {

		if ( $control->manager->get_setting( 'offcanvas_theme' )->value() === 'dark' ) {
			return true;
		} else {
			return false;
		}
	}
endif;
