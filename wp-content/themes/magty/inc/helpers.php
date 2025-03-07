<?php

if ( ! function_exists( 'magty_get_default_customizer_values' ) ) :
	/**
	 * Get default customizer values.
	 *
	 * @since 1.0.0
	 *
	 * @return array Default customizer values.
	 */
	function magty_get_default_customizer_values() {

		$theme_options_defaults =
		array(
			'hide_title'                                 => false,
			'hide_tagline'                               => false,
			'site_title_font_size_desktop'               => 42,
			'site_tagline_font_size_desktop'             => 16,
			'site_tagline_style'                         => 'style_3',
			'primary_color'                              => '#232222',
			'accent_color'                               => '#f84666',
			'link_color'                                 => '#f84666',
			'link_color_hover'                           => '#f84666',
			'h1_color'                                   => '#020202',
			'h2_color'                                   => '#020202',
			'h3_color'                                   => '#020202',
			'h4_color'                                   => '#020202',
			'h5_color'                                   => '#020202',
			'h6_color'                                   => '#020202',
			'header_social_links_color_as'               => 'theme_color',
			'header_social_links_icons_color'            => '#ffffff',
			'header_social_links_icons_hover_color'      => '#f84666',
			'header_social_links_icons_bg_color'         => '#e8e8e8',
			'header_social_links_icons_hover_bg_color'   => '#e8e8e8',
			'header_social_links_display_style'          => 'style_1',
			'enable_header_social_links_label'           => false,
			'header_social_links_label_text'             => '',
			'header_social_links_label_color'            => '#ffffff',
			'header_search_btn_bg_color'                 => '#f84666',

			'header_btn_one_label'                       => __( 'Subscribe', 'magty' ),
			'header_btn_one_link'                        => '#',
			'header_btn_one_class'                       => '',
			'header_btn_one_display_style'               => 'style_1',
			'header_btn_one_icon'                        => '',
			'header_btn_one_new_tab'                     => false,
			'header_btn_one_icon_only'                   => false,
			'header_btn_one_icon_before_label'           => false,
			'header_btn_one_responsive_style'            => 'hidden',
			'header_btn_one_icon_gap'                    => 6,
			'header_btn_one_text_color'                  => '#ffffff',
			'header_btn_one_text_hover_color'            => '#ffffff',
			'header_btn_one_bg_color'                    => '#f84666',
			'header_btn_one_bg_hover_color'              => '#000000',
			'header_btn_one_border_color'                => '#f84666',
			'header_btn_one_border_hover_color'          => '#000000',
			'header_btn_one_icon_color'                  => '#ffffff',
			'header_btn_one_icon_hover_color'            => '#ffffff',

			'enable_top_bar'                             => true,
			'hide_top_bar_mobile'                        => true,
			'stack_top_bar_col_responsive'               => false,
			'enable_topbar_border_bottom'                => true,
			'enable_todays_date'                         => true,
			'todays_date_format'                         => 'F j, Y',
			'enable_todays_time'                         => false,
			'todays_time_hr12_format'                    => true,
			'enable_topbar_social_nav'                   => true,
			'enable_top_nav'                             => true,
			'enable_random_post_top_bar'                 => false,
			'enable_search_on_top_bar'                   => false,
			'enable_top_bar_btn_one'                     => false,
			'enable_woo_mini_cart_top_bar'               => false,
			'enable_woo_my_account_top_bar'              => false,
			'top_bar_theme'                              => 'dark',
			'top_bar_bg_color'                           => '#000000',
			'top_bar_date_color'                         => '#ffffff',
			'top_bar_nav_menu_color'                     => '#ffffff',
			'top_bar_nav_menu_hover_color'               => '#f84666',
			'top_bar_sub_menu_color'                     => '#010101',
			'top_bar_sub_menu_hover_color'               => '#000000',
			'top_bar_sub_menu_bg_color'                  => '#ffffff',
			'primary_menu_bg_color'                      => '#f84666',
			'offcanvas_icon_color'                       => '#ffffff',
			'center_align_primary_nav'                   => true,
			'enable_different_logo_menu_bar'             => false,
			'logo_menu_bar'                              => '',
			'enable_top_border_menu_bar'                 => false,
			'enable_bottom_border_menu_bar'              => false,
			'show_menu_bar_social_nav'                   => false,
			'enable_random_post_menu_bar'                => true,
			'enable_search_on_menu_bar'                  => true,
			'enable_menu_bar_btn_one'                    => false,
			'enable_woo_mini_cart_menu_bar'              => true,
			'enable_woo_my_account_menu_bar'             => true,
			'primary_menu_text_color'                    => '#ffffff',
			'primary_menu_text_hover_color'              => '#ffffff',
			'primary_menu_text_hover_border'             => '#ffffff',
			'primary_menu_active_item_color'             => '#ffffff',
			'primary_menu_active_item_border'            => '#ffffff',
			'primary_menu_desc_color'                    => '#ffffff',
			'capitalize_primary_nav_text'                => false,
			'sub_menu_style'                             => 'style_1',
			'sub_menu_bg_color'                          => '#ffffff',
			'sub_menu_text_color'                        => '#010101',
			'sub_menu_text_hover_color'                  => '#f84666',
			'sub_menu_desc_color'                        => '#292929',
			'capitalize_sub_nav_text'                    => false,
			'header_bg_color'                            => '#ffffff',
			'header_style'                               => 'header_style_1',
			'enable_sticky_menu'                         => true,
			'show_ad_banner'                             => false,
			'ad_banner_image'                            => '',
			'ad_banner_link'                             => '',
			'global_border_radius_small'                 => 0,
			'global_border_radius_medium'                => 0,
			'global_border_radius_large'                 => 0,
			'center_logo'                                => true,
			'enable_header_btn_one'                      => false,
			'show_preloader'                             => false,
			'preloader_bg_color'                         => '#ffffff',
			'preloader_color'                            => '#f84666',
			'show_progressbar'                           => true,
			'progressbar_position'                       => 'bottom',
			'progressbar_color'                          => '#f84666',
			'enable_breadcrumb'                          => false,
			'breadcrumb_type'                            => 'simple',
			'breadcrumb_link_color'                      => '#f84666',
			'global_buttons_text_color'                  => '#ffffff',
			'global_buttons_text_hover_color'            => '#ffffff',
			'global_buttons_bg_color'                    => '#f84666',
			'global_buttons_bg_hover_color'              => '#000000',
			'global_buttons_border_color'                => '#f84666',
			'global_buttons_border_hover_color'          => '#000000',
			'global_post_meta_icons_color'               => '#f84666',
			'global_show_title_line_hover'               => false,
			'global_card_element_bg_color'               => '#ffffff',
			'global_card_element_inverted_bg_color'      => '#1e1e1e',
			'enable_ticker_posts'                        => false,
			'ticker_theme'                               => 'light',
			'ticker_section_bg_color'                    => '#ffffff',
			'enable_ticker_label'                        => true,
			'ticker_label_color'                         => '#ffffff',
			'ticker_label_bg_color'                      => '#f84666',
			'ticker_loader_icon_color'                   => '#ffffff',
			'ticker_label_text'                          => '',
			'ticker_label_style'                         => 'style_3',
			'ticker_posts_cat'                           => '',
			'no_of_ticker_posts'                         => 4,
			'ticker_posts_orderby'                       => 'date',
			'ticker_posts_order'                         => 'desc',
			'ticker_posts_meta'                          => array( 'date' ),
			'ticker_posts_date_format'                   => 'format_2',
			'ticker_posts_speed'                         => 3500,
			'show_ticker_arrows'                         => true,
			'show_ticker_posts_thumbnail'                => true,
			'circle_ticker_posts_thumbnail'              => false,
			'show_ticker_posts_category'                 => false,
			'ticker_posts_category_color_display'        => 'as_bg',
			'ticker_posts_category_style'                => 'style_2',
			'ticker_posts_category_limit'                => 1,
			'stack_ticker_responsive'                    => true,
			'hide_ticker_label_responsive'               => false,
			'hide_ticker_arrows_responsive'              => false,
			'hide_ticker_thumbnail_responsive'           => false,
			'hide_ticker_category_responsive'            => true,
			'hide_ticker_meta_responsive'                => true,
			'ticker_section_padding_top'                 => 20,
			'ticker_section_padding_bottom'              => 0,
			'enable_banner'                              => false,
			'banner_title'                               => '',
			'banner_title_style'                         => 'style_1',
			'banner_title_align'                         => 'left',
			'banner_layout'                              => 'boxed',
			'banner_display_as'                          => 'slider',
			'banner_carousel_item_gap'                   => 4,
			'banner_content_from'                        => 'category',
			'banner_cat'                                 => '',
			'no_of_banner_posts'                         => 4,
			'banner_posts_orderby'                       => 'date',
			'banner_posts_order'                         => 'desc',
			'banner_post_ids'                            => '',
			'enable_banner_autoplay'                     => false,
			'banner_autoplay_speed'                      => 5000,
			'enable_banner_arrows'                       => true,
			'banner_arrows_bg_color'                     => '#ffffff',
			'enable_banner_dots'                         => false,
			'enable_banner_overlay'                      => true,
			'banner_overlay_color'                       => '#000000',
			'banner_overlay_opacity'                     => 0.6,
			'show_banner_category'                       => true,
			'banner_category_style'                      => 'style_3',
			'banner_category_color_display'              => 'none',
			'banner_category_limit'                      => 1,
			'banner_post_meta'                           => array( 'author', 'date' ),
			'show_banner_post_meta_icon'                 => false,
			'banner_posts_date_format'                   => 'format_2',
			'enable_banner_author_image'                 => false,
			'enable_banner_desc'                         => false,
			'banner_desc_length'                         => 25,
			'enable_banner_read_more_btn'                => false,
			'banner_read_more_btn_text'                  => '',
			'banner_read_more_style'                     => 'style_3',
			'banner_read_more_icon'                      => '',
			'front_page_enable_sidebar'                  => false,
			'home_page_layout'                           => 'right-sidebar',
			'hide_front_page_sidebar_mobile'             => false,
			'front_page_sticky_sidebar'                  => true,
			'home_sidebar_widget_style'                  => 'style_1',
			'home_sidebar_widget_heading_style'          => 'style_9',
			'home_sidebar_widget_heading_align'          => 'left',
			'front_page_enable_sidebar_border'           => false,
			'enable_home_title'                          => false,
			'front_page_content_title'                   => '',
			'home_title_heading_style'                   => 'style_1',
			'home_title_heading_align'                   => 'left',
			'enable_pinned_posts'                        => false,
			'pinned_posts_style'                         => 'style_2',
			'pinned_posts_title'                         => '',
			'pinned_posts_title_style'                   => 'style_1',
			'pinned_posts_title_align'                   => 'left',
			'pinned_posts_cat'                           => '',
			'pinned_posts_content_from'                  => 'category',
			'pinned_posts_ids'                           => '',
			'show_pinned_posts_category'                 => true,
			'pinned_posts_category_style'                => 'style_2',
			'pinned_posts_category_color_display'        => 'as_bg',
			'pinned_posts_category_limit'                => 1,
			'pinned_post_meta'                           => array(),
			'show_pinned_post_meta_icon'                 => true,
			'pinned_posts_date_format'                   => 'format_2',
			'enable_pinned_posts_author_image'           => false,
			'enable_pinned_posts_overlay'                => true,
			'pinned_posts_overlay_color'                 => '#000000',
			'pinned_posts_overlay_opacity'               => 0.6,
			'show_pinned_posts_post_format_icon'         => false,
			'enable_trending_posts'                      => false,
			'trending_posts_title'                       => '',
			'trending_posts_title_style'                 => 'style_1',
			'trending_posts_title_align'                 => 'left',
			'trending_posts_column'                      => '3',
			'trending_posts_cat'                         => '',
			'no_of_trending_posts'                       => 5,
			'trending_posts_orderby'                     => 'date',
			'trending_posts_order'                       => 'desc',
			'show_trending_posts_category'               => true,
			'trending_posts_category_style'              => 'style_1',
			'trending_posts_category_color_display'      => 'none',
			'trending_posts_category_limit'              => 3,
			'trending_post_meta'                         => array(),
			'show_trending_post_meta_icon'               => true,
			'trending_posts_date_format'                 => 'format_2',
			'enable_trending_posts_author_image'         => false,
			'show_trending_posts_thumbnail'              => true,
			'invert_trending_posts_display'              => false,
			'show_trending_posts_post_format_icon'       => false,
			'enable_trending_posts_autoplay'             => false,
			'enable_trending_posts_loop'                 => false,
			'enable_trending_posts_arrows'               => true,
			'enable_trending_posts_dots'                 => false,
			'trending_posts_style'                       => 'style_2',
			'trending_posts_counter'                     => '',

			'primary_font'                               => '"Aleo", "100:200:300:regular:500:600:700:800:900:100italic:200italic:300italic:italic:500italic:600italic:700italic:800italic:900italic", serif',
			'primary_font_weight'                        => 600,
			'secondary_font'                             => '"Inter", "100:200:300:regular:500:600:700:800:900", sans-serif',
			'secondary_font_weight'                      => 'normal',
			'primary_menu_font'                          => '"Inter", "100:200:300:regular:500:600:700:800:900", sans-serif',
			'primary_menu_font_weight'                   => 600,
			'sub_menu_font'                              => '"Aleo", "100:200:300:regular:500:600:700:800:900:100italic:200italic:300italic:italic:500italic:600italic:700italic:800italic:900italic", serif',
			'sub_menu_font_weight'                       => 400,

			'global_layout'                              => 'right-sidebar',
			'hide_global_sidebar_mobile'                 => false,
			'sticky_sidebar'                             => true,
			'sidebar_widget_style'                       => 'style_1',
			'sidebar_widget_heading_style'               => 'style_9',
			'sidebar_widget_heading_align'               => 'left',
			'global_enable_sidebar_border'               => false,
			'offcanvas_theme'                            => 'light',
			'offcanvas_bg_color'                         => '#ffffff',
			'dark_offcanvas_bg_color'                    => '#10100f',
			'offcanvas_logo'                             => '',
			'offcanvas_widgetarea_heading_style'         => 'style_9',
			'offcanvas_widgetarea_heading_align'         => 'left',
			'offcanvas_hide_desktop'                     => false,
			'offcanvas_menu_hide_desktop'                => true,

			'below_header_widgets_style'                 => 'style_1',
			'before_home_cols_widgets_style'             => 'style_1',
			'home_col_one_widgets_style'                 => 'style_1',
			'home_col_two_widgets_style'                 => 'style_1',
			'above_home_widgets_style'                   => 'style_1',
			'before_home_posts_widgets_style'            => 'style_1',
			'after_home_posts_widgets_style'             => 'style_1',
			'below_home_widgets_style'                   => 'style_1',
			'above_footer_widgets_style'                 => 'style_1',
			'below_footer_widgets_style'                 => 'style_1',
			
			'below_header_widgetarea_heading_style'      => 'style_1',
			'below_header_widgetarea_heading_align'      => 'left',
			'before_home_cols_widgetarea_heading_style'  => 'style_1',
			'before_home_cols_widgetarea_heading_align'  => 'left',
			'home_col_order'                             => 'style_1',
			'home_col_one_widgetarea_heading_style'      => 'style_1',
			'home_col_one_widgetarea_heading_align'      => 'left',
			'home_col_two_widgetarea_heading_style'      => 'style_1',
			'home_col_two_widgetarea_heading_align'      => 'left',
			'home_col_two_widgetarea_hide_mobile'        => false,
			'above_home_widgetarea_heading_style'        => 'style_1',
			'above_home_widgetarea_heading_align'        => 'left',
			'before_home_posts_widgetarea_heading_style' => 'style_1',
			'before_home_posts_widgetarea_heading_align' => 'left',
			'after_home_posts_widgetarea_heading_style'  => 'style_1',
			'after_home_posts_widgetarea_heading_align'  => 'left',
			'below_home_widgetarea_heading_style'        => 'style_1',
			'below_home_widgetarea_heading_align'        => 'left',
			'above_footer_widgetarea_heading_style'      => 'style_1',
			'above_footer_widgetarea_heading_align'      => 'left',
			'above_footer_nc_widgetarea_heading_style'   => 'style_1',
			'above_footer_nc_widgetarea_heading_align'   => 'left',
			'below_footer_widgetarea_heading_style'      => 'style_1',
			'below_footer_widgetarea_heading_align'      => 'left',
			'below_footer_nc_widgetarea_heading_style'   => 'style_1',
			'below_footer_nc_widgetarea_heading_align'   => 'left',
			'single_post_layout'                         => 'right-sidebar',
			'single_post_style'                          => 'single_style_1',
			'enable_single_cat_label'                    => false,
			'single_category_color_display'              => 'none',
			'single_category_style'                      => 'style_3',
			'single_category_limit'                      => 3,
			'single_category_position'                   => 'before_title',
			'enable_single_tag_label'                    => true,
			'single_tag_style'                           => 'style_5',
			'single_tag_limit'                           => 0,
			'posts_navigation_style'                     => 'style_2',
			'single_post_meta'                           => array( 'read_time', 'date', 'comment', 'category', 'tags' ),
			'show_single_post_meta_icon'                 => false,
			'center_align_single_header_meta'            => true,
			'single_date_format'                         => 'format_2',
			'enable_single_author_image'                 => false,
			'show_author_info'                           => true,
			'enable_author_info_bg'                      => false,
			'author_info_bg_color'                       => '#f8f9fa',
			'author_info_text'                           => __( 'About The Author', 'magty' ),
			'author_info_title_style'                    => 'style_9',
			'author_info_title_align'                    => 'left',
			'author_info_box_style'                      => 'style_1',
			'stack_author_info_resposive'                => false,
			'single_comments_heading_style'              => 'style_9',
			'single_comments_heading_align'              => 'left',
			'single_comments_center_form_content'        => false,
			'show_related_posts'                         => false,
			'related_posts_text'                         => __( 'You May Also Like', 'magty' ),
			'related_posts_title_style'                  => 'style_9',
			'related_posts_title_align'                  => 'left',
			'no_of_related_posts'                        => 3,
			'related_posts_orderby'                      => 'date',
			'related_posts_order'                        => 'desc',
			'show_related_posts_category'                => false,
			'related_posts_category_color_display'       => 'none',
			'related_posts_category_style'               => 'style_1',
			'related_posts_category_limit'               => 1,
			'related_post_meta'                          => array(),
			'show_related_post_meta_icon'                => false,
			'related_posts_date_format'                  => 'format_2',
			'enable_related_posts_author_image'          => false,
			'enable_related_posts_desc'                  => false,
			'related_posts_desc_length'                  => 15,
			'enable_related_posts_read_more_btn'         => false,
			'related_posts_read_more_btn_text'           => '',
			'related_posts_read_more_style'              => 'style_2',
			'related_posts_read_more_icon'               => '',
			'show_related_posts_post_format_icon'        => false,
			'author_posts_orderby'                       => 'date',
			'author_posts_order'                         => 'desc',
			'show_author_posts'                          => true,
			'author_posts_text'                          => __( 'More From Author', 'magty' ),
			'author_posts_title_style'                   => 'style_9',
			'author_posts_title_align'                   => 'left',
			'no_of_author_posts'                         => 3,
			'show_author_posts_category'                 => false,
			'author_posts_category_color_display'        => 'none',
			'author_posts_category_style'                => 'style_1',
			'author_posts_category_limit'                => 1,
			'author_post_meta'                           => array(),
			'show_author_post_meta_icon'                 => false,
			'author_posts_date_format'                   => 'format_2',
			'enable_author_posts_author_image'           => false,
			'enable_author_posts_desc'                   => false,
			'author_posts_desc_length'                   => 15,
			'enable_author_posts_read_more_btn'          => false,
			'author_posts_read_more_btn_text'            => '',
			'author_posts_read_more_style'               => 'style_2',
			'author_posts_read_more_icon'                => '',
			'show_author_posts_post_format_icon'         => false,
			'archive_style'                              => 'archive_style_1',
			'enable_archive_cat_label'                   => false,
			'archive_category_color_display'             => 'none',
			'archive_category_style'                     => 'style_3',
			'archive_category_limit'                     => 1,
			'archive_category_position'                  => 'before_title',
			'enable_archive_tag_label'                   => true,
			'archive_tag_style'                          => 'style_4',
			'archive_tag_limit'                          => 0,
			'pagination_type'                            => 'button_click_load',
			'center_aligned_pagination'                  => true,
			'archive_post_meta'                          => array( 'date', 'read_time', 'category' ),
			'show_archive_post_meta_icon'                => false,
			'archive_date_format'                        => 'format_2',
			'enable_archive_author_image'                => false,
			'show_archive_post_format_icon'              => false,
			'show_archive_excerpt'                       => true,
			'show_archive_read_more'                     => true,
			'archive_read_more_style'                    => 'style_1',
			'excerpt_length'                             => 32,
			'max_excerpt_length'                         => 55,
			'excerpt_read_more_text'                     => '',
			'excerpt_read_more_icon'                     => 'arrow-right-circle',
			'show_static_page_content'                   => true,
			'footer_theme'                               => 'dark',
			'footer_bg_color'                            => '#ffffff',
			'dark_footer_bg_color'                       => '#080808',
			'enable_footer_bg_image'                     => false,
			'footer_fixed_bg_image'                      => false,
			'footer_bg_image'                            => '',
			'footer_bg_image_opacity'                    => 0.5,
			'footer_bg_image_overlay_color'              => '#000000',
			'footer_column_layout'                       => 'footer_layout_2',
			'footer_widget_heading_style'                => 'style_9',
			'footer_widget_heading_align'                => 'left',
			'enable_border_above_footer'                 => false,
			'sub_footer_theme'                           => 'dark',
			'sub_footer_bg_color'                        => '#ffffff',
			'dark_sub_footer_bg_color'                   => '#000000',
			'enable_border_above_sub_footer'             => false,
			'enable_copyright'                           => true,
			'copyright_text'                             => esc_html__( 'Copyright &copy; {{ date }}', 'magty' ),
			'copyright_date_format'                      => 'Y',
			'enable_footer_credit'                       => true,
			'enable_footer_nav'                          => false,
			'enable_footer_social_nav'                   => false,
			'footer_social_links_color'                  => 'theme_color',
			'footer_social_links_display_style'          => 'style_1',
			'enable_scroll_to_top'                       => true,
			'scroll_to_top_pos'                          => 'right',
			'scroll_to_top_color'                        => '#ffffff',
			'scroll_to_top_hover_color'                  => '#ffffff',
			'scroll_to_top_bg_color'                     => '#f84666',
			'scroll_to_top_hover_bg_color'               => '#f84666',
			'shop_page_enable_sidebar'                   => false,
			'shop_page_disable_breadcrumb'               => false,
			'shop_page_layout'                           => 'right-sidebar',
			'product_page_enable_sidebar'                => false,
			'product_page_disable_breadcrumb'            => false,
			'product_page_layout'                        => 'right-sidebar',
			'trending_section_bg_color'                  => '#ffffff',
			'banner_section_bg_color'                    => '#ffffff',
			'below_header_widgetarea_bg_color'           => '#ffffff',
			'before_home_columns_widgetarea_bg_color'    => '#ffffff',
			'home_columns_widgetarea_bg_color'           => '#ffffff',
			'above_home_widgetarea_bg_color'             => '#ffffff',
			'below_home_widgetarea_bg_color'             => '#ffffff',
			'above_footer_widgetarea_bg_color'           => '#ffffff',
			'above_footer_nc_widgetarea_bg_color'        => '#ffffff',
			'below_footer_widgetarea_bg_color'           => '#ffffff',
			'below_footer_nc_widgetarea_bg_color'        => '#ffffff',
		);

		return $theme_options_defaults;
	}
endif;

if ( ! function_exists( 'magty_get_fonts' ) ) :
	/**
	 * Returns fonts array
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function magty_get_fonts() {
		return magty_get_google_fonts();
	}
endif;

if ( ! function_exists( 'magty_is_wc_active' ) ) :
	/**
	 * Check WooCommerce Status
	 *
	 * @since 1.0.0
	 *
	 * return boolean true/false
	 */
	function magty_is_wc_active() {
		return class_exists( 'WooCommerce' ) ? true : false;
	}
endif;

if ( ! function_exists( 'magty_placeholder_img_src' ) ) :
	/**
	 * Get placeholder image
	 *
	 * @since 1.0.0
	 */
	function magty_placeholder_img_src() {
		$src = get_template_directory_uri() . '/assets/images/placeholder.png';
		return apply_filters( 'magty_placeholder_img_src', $src );
	}
endif;

if ( ! function_exists( 'magty_get_page_layout' ) ) :
	/**
	 * Get Page Layout based on the post meta or customizer value
	 *
	 * @since 1.0.0
	 *
	 * @return string Page Layout.
	 */
	function magty_get_page_layout() {

		global $post;

		$page_layout = '';

		// For homepage regardless of static page or latest posts.
		if ( is_front_page() ) {
			return get_theme_mod( 'home_page_layout', 'right-sidebar' );
		}

		// For Posts page chosen on reading settings.
		if ( is_home() ) {
			return get_theme_mod( 'global_layout', 'right-sidebar' );
		}

		// Fetch from Post Meta on single posts or pages.
		if ( $post && is_singular() ) {
			$page_layout = get_post_meta( $post->ID, 'magty_page_layout', true );
			if ( empty( $page_layout ) && is_single() ) {
				$page_layout = get_theme_mod( 'single_post_layout', 'right-sidebar' );
			}
		}

		// Woocommerce.
		if ( magty_is_wc_active() ) :
			if ( is_shop() || is_product_category() ) :
				$page_layout = get_theme_mod( 'shop_page_layout', 'right-sidebar' );
			endif;
			if ( is_product() ) :
				$page_layout = get_theme_mod( 'product_page_layout', 'right-sidebar' );
			endif;
		endif;

		// Fetch from customizer if everything else fails.
		if ( empty( $page_layout ) ) {
			$page_layout = get_theme_mod( 'global_layout', 'right-sidebar' );
		}

		return $page_layout;
	}
endif;

if ( ! function_exists( 'magty_get_sidebar' ) ) :
	/**
	 * Get Proper sidebar based on settings
	 *
	 * @since 1.0.0
	 *
	 * @return string Sidebar
	 */
	function magty_get_sidebar() {

		$sidebar_style = magty_get_sidebar_widget_style();
		$heading_style = magty_get_sidebar_heading_style();
		$heading_align = magty_get_sidebar_heading_align();

		$class  = $sidebar_style;
		$class .= ' ' . $heading_style;
		$class .= ' ' . $heading_align;

		if ( is_front_page() ) :

			$hide_sidebar_mobile = get_theme_mod( 'hide_front_page_sidebar_mobile' );
			$class              .= $hide_sidebar_mobile ? ' hide-on-mobile ' : '';

			if ( get_theme_mod( 'front_page_enable_sidebar' ) ) :
				if ( is_active_sidebar( 'home-page-sidebar' ) ) :
					?>
					<div id="secondary" class="magty-secondary-column <?php echo esc_attr( $class ); ?>">
						<aside class="widget-area">
							<?php dynamic_sidebar( 'home-page-sidebar' ); ?>
						</aside>
					</div>
					<?php
				endif;
			elseif ( is_active_sidebar( 'sidebar-1' ) ) :
				?>
					<div id="secondary" class="magty-secondary-column <?php echo esc_attr( $class ); ?>">
						<aside class="widget-area">
							<?php dynamic_sidebar( 'sidebar-1' ); ?>
						</aside>
					</div>
					<?php

			endif;

		else :

			$hide_sidebar_mobile = get_theme_mod( 'hide_global_sidebar_mobile' );
			$class              .= $hide_sidebar_mobile ? ' hide-on-mobile ' : '';

			if ( is_active_sidebar( 'sidebar-1' ) ) :
				?>
				<div id="secondary" class="magty-secondary-column <?php echo esc_attr( $class ); ?>">
					<aside class="widget-area">
						<?php dynamic_sidebar( 'sidebar-1' ); ?>
					</aside>
				</div>
				<?php
			endif;

		endif;
	}
endif;

if ( ! function_exists( 'magty_get_all_image_sizes' ) ) :
	/**
	 * Returns all image sizes available.
	 *
	 * @since 1.0.0
	 *
	 * @param bool $for_choice True/False to construct the output as key and value choice
	 * @return array Image Size Array.
	 */
	function magty_get_all_image_sizes( $for_choice = false ) {

		global $_wp_additional_image_sizes;

		$sizes = array();

		if ( true == $for_choice ) {
			$sizes['no-image'] = __( 'No Image', 'magty' );
		}

		foreach ( get_intermediate_image_sizes() as $_size ) {
			if ( in_array( $_size, array( 'thumbnail', 'medium', 'large' ) ) ) {

				$width  = get_option( "{$_size}_size_w" );
				$height = get_option( "{$_size}_size_h" );

				if ( true == $for_choice ) {
					$sizes[ $_size ] = ucfirst( $_size ) . ' (' . $width . 'x' . $height . ')';
				} else {
					$sizes[ $_size ]['width']  = $width;
					$sizes[ $_size ]['height'] = $height;
					$sizes[ $_size ]['crop']   = (bool) get_option( "{$_size}_crop" );
				}
			} elseif ( isset( $_wp_additional_image_sizes[ $_size ] ) ) {

				$width  = $_wp_additional_image_sizes[ $_size ]['width'];
				$height = $_wp_additional_image_sizes[ $_size ]['height'];

				if ( true == $for_choice ) {
					$sizes[ $_size ] = ucfirst( $_size ) . ' (' . $width . 'x' . $height . ')';
				} else {
					$sizes[ $_size ] = array(
						'width'  => $width,
						'height' => $height,
						'crop'   => $_wp_additional_image_sizes[ $_size ]['crop'],
					);
				}
			}
		}

		if ( true == $for_choice ) {
			$sizes['full'] = __( 'Full Image', 'magty' );
		}

		return $sizes;
	}
endif;

if ( ! function_exists( 'magty_get_header_layouts' ) ) :
	/**
	 * Returns header layout options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function magty_get_header_layouts() {
		$options = apply_filters(
			'magty_header_layouts',
			array(
				'header_style_1' => array(
					'url'   => get_template_directory_uri() . '/assets/images/header1.png',
					'label' => esc_html__( 'Header Style 1', 'magty' ),
				),
				'header_style_2' => array(
					'url'   => get_template_directory_uri() . '/assets/images/header2.png',
					'label' => esc_html__( 'Header Style 2', 'magty' ),
				),
			)
		);
		return $options;
	}
endif;

if ( ! function_exists( 'magty_get_header_btn_icons' ) ) :
	/**
	 * Returns header button icons options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function magty_get_header_btn_icons() {
		$options = apply_filters(
			'magty_header_btn_icons',
			array(
				''                        => array(
					'url'   => get_template_directory_uri() . '/assets/images/circle-backslash.svg',
					'label' => esc_html__( 'None', 'magty' ),
				),
				'arrow-bar-right'         => array(
					'url'   => get_template_directory_uri() . '/assets/images/arrow-bar-right.svg',
					'label' => esc_html__( 'Arrow Bar Right', 'magty' ),
				),
				'arrow-right'             => array(
					'url'   => get_template_directory_uri() . '/assets/images/arrow-right.svg',
					'label' => esc_html__( 'Arrow Right', 'magty' ),
				),
				'arrow-right-circle'      => array(
					'url'   => get_template_directory_uri() . '/assets/images/arrow-right-circle.svg',
					'label' => esc_html__( 'Arrow Right Circle', 'magty' ),
				),
				'arrow-right-circle-fill' => array(
					'url'   => get_template_directory_uri() . '/assets/images/arrow-right-circle-fill.svg',
					'label' => esc_html__( 'Arrow Right Circle Fill', 'magty' ),
				),
				'arrow-right-short'       => array(
					'url'   => get_template_directory_uri() . '/assets/images/arrow-right-short.svg',
					'label' => esc_html__( 'Arrow Right Short', 'magty' ),
				),
				'bell'                    => array(
					'url'   => get_template_directory_uri() . '/assets/images/bell.svg',
					'label' => esc_html__( 'Bell', 'magty' ),
				),
				'bell-fill'               => array(
					'url'   => get_template_directory_uri() . '/assets/images/bell-fill.svg',
					'label' => esc_html__( 'Bell Fill', 'magty' ),
				),
				'bookmark'                => array(
					'url'   => get_template_directory_uri() . '/assets/images/bookmark.svg',
					'label' => esc_html__( 'Bookmark', 'magty' ),
				),
				'bookmark-fill'           => array(
					'url'   => get_template_directory_uri() . '/assets/images/bookmark-fill.svg',
					'label' => esc_html__( 'Bookmark Fill', 'magty' ),
				),
				'chevron-right'           => array(
					'url'   => get_template_directory_uri() . '/assets/images/chevron-right.svg',
					'label' => esc_html__( 'Chevron Right', 'magty' ),
				),
				'chevron-double-right'    => array(
					'url'   => get_template_directory_uri() . '/assets/images/chevron-double-right.svg',
					'label' => esc_html__( 'Chevron Double Right', 'magty' ),
				),
				'caret-right'             => array(
					'url'   => get_template_directory_uri() . '/assets/images/caret-right.svg',
					'label' => esc_html__( 'Caret Right', 'magty' ),
				),
				'caret-right-fill'        => array(
					'url'   => get_template_directory_uri() . '/assets/images/caret-right-fill.svg',
					'label' => esc_html__( 'Caret Right Fill', 'magty' ),
				),
				'clowd-arrow-down'        => array(
					'url'   => get_template_directory_uri() . '/assets/images/cloud-arrow-down.svg',
					'label' => esc_html__( 'Clowd Arrow Down', 'magty' ),
				),
				'clowd-arrow-down-fill'        => array(
					'url'   => get_template_directory_uri() . '/assets/images/cloud-arrow-down-fill.svg',
					'label' => esc_html__( 'Clowd Arrow Down Fill', 'magty' ),
				),
				'clowd-arrow-up'        => array(
					'url'   => get_template_directory_uri() . '/assets/images/cloud-arrow-up.svg',
					'label' => esc_html__( 'Clowd Arrow Up', 'magty' ),
				),
				'clowd-arrow-up-fill'        => array(
					'url'   => get_template_directory_uri() . '/assets/images/cloud-arrow-up-fill.svg',
					'label' => esc_html__( 'Clowd Arrow Up Fill', 'magty' ),
				),
				'envelope'                => array(
					'url'   => get_template_directory_uri() . '/assets/images/envelope.svg',
					'label' => esc_html__( 'Envelope', 'magty' ),
				),
				'envelope-fill'           => array(
					'url'   => get_template_directory_uri() . '/assets/images/envelope-fill.svg',
					'label' => esc_html__( 'Envelope Fill', 'magty' ),
				),
				'geo-alt'                 => array(
					'url'   => get_template_directory_uri() . '/assets/images/geo-alt.svg',
					'label' => esc_html__( 'Geo Alt', 'magty' ),
				),
				'geo-alt-fill'            => array(
					'url'   => get_template_directory_uri() . '/assets/images/geo-alt-fill.svg',
					'label' => esc_html__( 'Geo Alt Fill', 'magty' ),
				),
				'person-circle'           => array(
					'url'   => get_template_directory_uri() . '/assets/images/person-circle.svg',
					'label' => esc_html__( 'Person Circle', 'magty' ),
				),
				'plus'                    => array(
					'url'   => get_template_directory_uri() . '/assets/images/plus.svg',
					'label' => esc_html__( 'Plus', 'magty' ),
				),
				'send'                    => array(
					'url'   => get_template_directory_uri() . '/assets/images/send.svg',
					'label' => esc_html__( 'send', 'magty' ),
				),
				'send-fill'               => array(
					'url'   => get_template_directory_uri() . '/assets/images/send-fill.svg',
					'label' => esc_html__( 'Send Fill', 'magty' ),
				),
			)
		);
		return $options;
	}
endif;

if ( ! function_exists( 'magty_get_submenu_styles_arr' ) ) :
	/**
	 * Returns submenu styles options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function magty_get_submenu_styles_arr() {
		$options = apply_filters(
			'magty_submenu_styles_arr',
			array(
				'style_1' => __( 'Style 1', 'magty' ),
				'style_2' => __( 'Style 2', 'magty' ),
			)
		);
		return $options;
	}
endif;

if ( ! function_exists( 'magty_get_footer_layouts' ) ) :
	/**
	 * Returns footer layout options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function magty_get_footer_layouts() {
		$options = apply_filters(
			'magty_footer_layouts',
			array(
				'footer_layout_1' => array(
					'url'   => get_template_directory_uri() . '/assets/images/footer-col-4.png',
					'label' => esc_html__( 'Four Columns', 'magty' ),
				),
				'footer_layout_2' => array(
					'url'   => get_template_directory_uri() . '/assets/images/footer-col-3.png',
					'label' => esc_html__( 'Three Columns', 'magty' ),
				),
				'footer_layout_3' => array(
					'url'   => get_template_directory_uri() . '/assets/images/footer-col-2.png',
					'label' => esc_html__( 'Two Columns', 'magty' ),
				),
				'footer_layout_4' => array(
					'url'   => get_template_directory_uri() . '/assets/images/footer-col-2-big-left.png',
					'label' => esc_html__( 'Two Columns Big Left', 'magty' ),
				),
				'footer_layout_5' => array(
					'url'   => get_template_directory_uri() . '/assets/images/footer-col-3-big-middle.png',
					'label' => esc_html__( 'Three Columns Big Middle', 'magty' ),
				),
				'footer_layout_6' => array(
					'url'   => get_template_directory_uri() . '/assets/images/footer-col-2-big-right.png',
					'label' => esc_html__( 'Two Columns Big Right', 'magty' ),
				),
				'footer_layout_7' => array(
					'url'   => get_template_directory_uri() . '/assets/images/footer-col-1.png',
					'label' => esc_html__( 'Single Column', 'magty' ),
				),
			)
		);
		return $options;
	}
endif;

if ( ! function_exists( 'magty_get_general_layouts' ) ) :
	/**
	 * Returns general layout options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function magty_get_general_layouts() {
		$options = apply_filters(
			'magty_general_layouts',
			array(
				'left-sidebar'      => array(
					'url'   => get_template_directory_uri() . '/assets/images/left_sidebar.png',
					'label' => esc_html__( 'Left Sidebar', 'magty' ),
				),
				'right-sidebar'     => array(
					'url'   => get_template_directory_uri() . '/assets/images/right_sidebar.png',
					'label' => esc_html__( 'Right Sidebar', 'magty' ),
				),
				'no-sidebar'        => array(
					'url'   => get_template_directory_uri() . '/assets/images/no_sidebar.png',
					'label' => esc_html__( 'No Sidebar - Wide', 'magty' ),
				),
				'no-sidebar-narrow' => array(
					'url'   => get_template_directory_uri() . '/assets/images/no_sidebar_narrow.png',
					'label' => esc_html__( 'No Sidebar - Narrow', 'magty' ),
				),
			)
		);
		return $options;
	}
endif;

if ( ! function_exists( 'magty_get_archive_layouts' ) ) :
	/**
	 * Returns archive layout options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function magty_get_archive_layouts() {
		$options = apply_filters(
			'magty_archive_layouts',
			array(
				'archive_style_1' => array(
					'url'   => get_template_directory_uri() . '/assets/images/archive1.png',
					'label' => esc_html__( 'Single Column List', 'magty' ),
				),
				'archive_style_2' => array(
					'url'   => get_template_directory_uri() . '/assets/images/archive2.png',
					'label' => esc_html__( 'Single Column List Alternate', 'magty' ),
				),
				'archive_style_3' => array(
					'url'   => get_template_directory_uri() . '/assets/images/archive3.png',
					'label' => esc_html__( 'Full Column', 'magty' ),
				),
				'archive_style_4' => array(
					'url'   => get_template_directory_uri() . '/assets/images/archive4.png',
					'label' => esc_html__( 'Full Column Alternate', 'magty' ),
				),
			)
		);
		return $options;
	}
endif;

if ( ! function_exists( 'magty_get_single_layouts' ) ) :
	/**
	 * Returns Single Post layout options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function magty_get_single_layouts() {
		$options = apply_filters(
			'magty_single_layouts',
			array(
				'single_style_1' => esc_html__( 'Style 1', 'magty' ),
				'single_style_2' => esc_html__( 'Style 2', 'magty' ),
				'single_style_3' => esc_html__( 'Style 3', 'magty' ),
			)
		);
		return $options;
	}
endif;

if ( ! function_exists( 'magty_get_single_navigation_styles' ) ) :
	/**
	 * Returns Single Post Navigation Style options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function magty_get_single_navigation_styles() {
		$options = apply_filters(
			'magty_single_navigation_styles',
			array(
				'none'    => esc_html__( 'None', 'magty' ),
				'style_1' => esc_html__( 'Text Only', 'magty' ),
				'style_2' => esc_html__( 'Text + Image', 'magty' ),
				'style_3' => esc_html__( 'Image + Text Overlay', 'magty' ),
			)
		);
		return $options;
	}
endif;

if ( ! function_exists( 'magty_get_category_color_display' ) ) :
	/**
	 * Returns category color display options
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function magty_get_category_color_display() {
		$options = apply_filters(
			'magty_category_color_display',
			array(
				'none'     => __( 'None', 'magty' ),
				'as_color' => __( 'As Color', 'magty' ),
				'as_bg'    => __( 'As Background Color', 'magty' ),
			)
		);
		return $options;
	}
endif;

if ( ! function_exists( 'magty_get_category_styles' ) ) :
	/**
	 * Returns category styles options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function magty_get_category_styles() {
		$options = apply_filters(
			'magty_category_styles',
			array(
				'style_1' => __( 'Style 1', 'magty' ),
				'style_2' => __( 'Style 2', 'magty' ),
				'style_3' => __( 'Style 3', 'magty' ),
				'style_4' => __( 'Style 4', 'magty' ),
				'style_5' => __( 'Style 5', 'magty' ),
			)
		);
		return $options;
	}
endif;

if ( ! function_exists( 'magty_get_tag_styles' ) ) :
	/**
	 * Returns tag styles options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function magty_get_tag_styles() {
		$options = apply_filters(
			'magty_tag_styles',
			array(
				'style_1' => __( 'Style 1', 'magty' ),
				'style_2' => __( 'Style 2', 'magty' ),
				'style_3' => __( 'Style 3', 'magty' ),
				'style_4' => __( 'Style 4', 'magty' ),
				'style_5' => __( 'Style 5', 'magty' ),
			)
		);
		return $options;
	}
endif;

if ( ! function_exists( 'magty_get_read_more_styles' ) ) :
	/**
	 * Returns read more styles options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function magty_get_read_more_styles() {
		$options = apply_filters(
			'magty_read_more_styles',
			array(
				'style_1' => __( 'Style 1', 'magty' ),
				'style_2' => __( 'Style 2', 'magty' ),
				'style_3' => __( 'Style 3', 'magty' ),
			)
		);
		return $options;
	}
endif;

if ( ! function_exists( 'magty_get_read_more_icons' ) ) :
	/**
	 * Returns read more icons options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function magty_get_read_more_icons() {
		$options = apply_filters(
			'magty_read_more_icons',
			array(
				''                        => array(
					'url'   => get_template_directory_uri() . '/assets/images/circle-backslash.svg',
					'label' => esc_html__( 'None', 'magty' ),
				),
				'arrow-bar-right'         => array(
					'url'   => get_template_directory_uri() . '/assets/images/arrow-bar-right.svg',
					'label' => esc_html__( 'Arrow Bar Right', 'magty' ),
				),
				'arrow-right'             => array(
					'url'   => get_template_directory_uri() . '/assets/images/arrow-right.svg',
					'label' => esc_html__( 'Arrow Right', 'magty' ),
				),
				'arrow-right-circle'      => array(
					'url'   => get_template_directory_uri() . '/assets/images/arrow-right-circle.svg',
					'label' => esc_html__( 'Arrow Right Circle', 'magty' ),
				),
				'arrow-right-circle-fill' => array(
					'url'   => get_template_directory_uri() . '/assets/images/arrow-right-circle-fill.svg',
					'label' => esc_html__( 'Arrow Right Circle Fill', 'magty' ),
				),
				'arrow-right-short'       => array(
					'url'   => get_template_directory_uri() . '/assets/images/arrow-right-short.svg',
					'label' => esc_html__( 'Arrow Right Short', 'magty' ),
				),
				'bell'                    => array(
					'url'   => get_template_directory_uri() . '/assets/images/bell.svg',
					'label' => esc_html__( 'Bell', 'magty' ),
				),
				'bell-fill'               => array(
					'url'   => get_template_directory_uri() . '/assets/images/bell-fill.svg',
					'label' => esc_html__( 'Bell Fill', 'magty' ),
				),
				'bookmark'                => array(
					'url'   => get_template_directory_uri() . '/assets/images/bookmark.svg',
					'label' => esc_html__( 'Bookmark', 'magty' ),
				),
				'bookmark-fill'           => array(
					'url'   => get_template_directory_uri() . '/assets/images/bookmark-fill.svg',
					'label' => esc_html__( 'Bookmark Fill', 'magty' ),
				),
				'chevron-right'           => array(
					'url'   => get_template_directory_uri() . '/assets/images/chevron-right.svg',
					'label' => esc_html__( 'Chevron Right', 'magty' ),
				),
				'chevron-double-right'    => array(
					'url'   => get_template_directory_uri() . '/assets/images/chevron-double-right.svg',
					'label' => esc_html__( 'Chevron Double Right', 'magty' ),
				),
				'caret-right'             => array(
					'url'   => get_template_directory_uri() . '/assets/images/caret-right.svg',
					'label' => esc_html__( 'Caret Right', 'magty' ),
				),
				'caret-right-fill'        => array(
					'url'   => get_template_directory_uri() . '/assets/images/caret-right-fill.svg',
					'label' => esc_html__( 'Caret Right Fill', 'magty' ),
				),
				'envelope'                => array(
					'url'   => get_template_directory_uri() . '/assets/images/envelope.svg',
					'label' => esc_html__( 'Envelope', 'magty' ),
				),
				'envelope-fill'           => array(
					'url'   => get_template_directory_uri() . '/assets/images/envelope-fill.svg',
					'label' => esc_html__( 'Envelope Fill', 'magty' ),
				),
				'plus'                    => array(
					'url'   => get_template_directory_uri() . '/assets/images/plus.svg',
					'label' => esc_html__( 'Plus', 'magty' ),
				),
				'send'                    => array(
					'url'   => get_template_directory_uri() . '/assets/images/send.svg',
					'label' => esc_html__( 'send', 'magty' ),
				),
				'send-fill'               => array(
					'url'   => get_template_directory_uri() . '/assets/images/send-fill.svg',
					'label' => esc_html__( 'Send Fill', 'magty' ),
				),
			)
		);
		return $options;
	}
endif;

if ( ! function_exists( 'magty_get_read_more_icons_list' ) ) :
	/**
	 * Returns read more icons for select.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function magty_get_read_more_icons_list() {
		$list    = array();
		$options = magty_get_read_more_icons();
		foreach ( $options as $key => $value ) {
			$list[ $key ] = $value['label'];
		}
		return $list;
	}
endif;

if ( ! function_exists( 'magty_get_social_links_styles' ) ) :
	/**
	 * Returns social links styles options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function magty_get_social_links_styles() {
		$options = apply_filters(
			'magty_social_links_styles',
			array(
				'style_1' => __( 'Style 1', 'magty' ),
				'style_2' => __( 'Style 2', 'magty' ),
				'style_3' => __( 'Style 3', 'magty' ),
				'style_4' => __( 'Style 4', 'magty' ),
			)
		);
		return $options;
	}
endif;

if ( ! function_exists( 'magty_get_widget_styles_arr' ) ) :
	/**
	 * Returns widget styles options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function magty_get_widget_styles_arr() {
		$options = apply_filters(
			'magty_widget_styles_arr',
			array(
				'style_1' => __( 'Plain', 'magty' ),
				'style_2' => __( 'Bordered', 'magty' ),
				'style_3' => __( 'Border Below', 'magty' ),
				'style_4' => __( 'Box Shadow', 'magty' ),
				'style_5' => __( 'Card Background', 'magty' ),
			)
		);
		return $options;
	}
endif;

if ( ! function_exists( 'magty_get_title_styles' ) ) :
	/**
	 * Returns title styles options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function magty_get_title_styles() {
		$options = apply_filters(
			'magty_title_styles',
			array(
				'style_1'  => __( 'Style 1', 'magty' ),
				'style_2'  => __( 'Style 2', 'magty' ),
				'style_3'  => __( 'Style 3', 'magty' ),
				'style_4'  => __( 'Style 4', 'magty' ),
				'style_5'  => __( 'Style 5', 'magty' ),
				'style_6'  => __( 'Style 6', 'magty' ),
				'style_7'  => __( 'Style 7', 'magty' ),
				'style_8'  => __( 'Style 8', 'magty' ),
				'style_9'  => __( 'Style 9', 'magty' ),
				'style_10' => __( 'Style 10', 'magty' ),
			)
		);
		return $options;
	}
endif;

if ( ! function_exists( 'magty_get_title_alignments' ) ) :
	/**
	 * Returns title Alignments
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function magty_get_title_alignments() {
		$options = apply_filters(
			'magty_title_alignments',
			array(
				'left'   => __( 'Left', 'magty' ),
				'center' => __( 'Center', 'magty' ),
				'right'  => __( 'Right', 'magty' ),
			)
		);
		return $options;
	}
endif;

if ( ! function_exists( 'magty_get_sidebar_widget_style' ) ) :
	/**
	 * Returns sidebar widget style
	 *
	 * @since 1.0.0
	 *
	 * @return string style
	 */
	function magty_get_sidebar_widget_style() {
		if ( is_front_page() ) {
			$widget_style = get_theme_mod( 'home_sidebar_widget_style', 'style_1' );
		} else {
			$widget_style = get_theme_mod( 'sidebar_widget_style', 'style_1' );
		}
		return 'uf-wa-widget-' . $widget_style;
	}
endif;

if ( ! function_exists( 'magty_get_sidebar_heading_style' ) ) :
	/**
	 * Returns sidebar widget heading style
	 *
	 * @since 1.0.0
	 *
	 * @return string heading_style
	 */
	function magty_get_sidebar_heading_style() {
		if ( is_front_page() ) {
			$heading_style = get_theme_mod( 'home_sidebar_widget_heading_style', 'style_9' );
		} else {
			$heading_style = get_theme_mod( 'sidebar_widget_heading_style', 'style_9' );
		}
		return 'saga-title-style-' . $heading_style;
	}
endif;

if ( ! function_exists( 'magty_get_sidebar_heading_align' ) ) :
	/**
	 * Returns sidebar widget heading align
	 *
	 * @since 1.0.0
	 *
	 * @return string heading_align
	 */
	function magty_get_sidebar_heading_align() {
		if ( is_front_page() ) {
			$heading_align = get_theme_mod( 'home_sidebar_widget_heading_align', 'left' );
		} else {
			$heading_align = get_theme_mod( 'sidebar_widget_heading_align', 'left' );
		}
		return 'saga-title-align-' . $heading_align;
	}
endif;

if ( ! function_exists( 'magty_in_multi_array' ) ) :
	/**
	 * Returns true/false if the key exists in array
	 *
	 * @since 1.0.0
	 *
	 * @param string $needle
	 * @param array  $haystack
	 *
	 * @return boolean Key exists/not
	 */
	function magty_in_multi_array( $needle, $haystack ) {
		if ( array_key_exists( $needle, $haystack ) or in_array( $needle, $haystack ) ) {
			return true;
		} else {
			$return = false;
			foreach ( array_values( $haystack ) as $value ) {
				if ( is_array( $value ) and ! $return ) {
					$return = magty_in_multi_array( $needle, $value );
				}
			}
			return $return;
		}
	}
endif;

if ( ! function_exists( 'magty_hex2rbga' ) ) :
	/**Convert hex to rbga
	 *
	 * @since 1.0.0
	 *
	 * @param $color string Hex color
	 * @param $opacity int Opacity
	 */
	function magty_hex2rbga( $color, $opacity = false ) {

		$default = 'rgb(0,0,0)';

		// Return default if no color provided.
		if ( empty( $color ) ) {
			return $default;
		}

		// Sanitize $color if "#" is provided.
		if ( $color[0] == '#' ) {
			$color = substr( $color, 1 );
		}

		// Check if color has 6 or 3 characters and get values.
		if ( strlen( $color ) == 6 ) {
			$hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
		} elseif ( strlen( $color ) == 3 ) {
			$hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
		} else {
			return $default;
		}

		// Convert hexadec to rgb.
		$rgb = array_map( 'hexdec', $hex );

		// Check if opacity is set(rgba or rgb).
		if ( $opacity ) {
			if ( abs( $opacity ) > 1 ) {
				$opacity = 1.0;
			}
			$output = 'rgba(' . implode( ',', $rgb ) . ',' . $opacity . ')';
		} else {
			$output = 'rgb(' . implode( ',', $rgb ) . ')';
		}

		// Return rgb(a) color string.
		return $output;
	}
endif;

if ( ! function_exists( 'magty_estimated_read_time' ) ) :
	/**
	 * Estimated reading time in minutes
	 *
	 * @param $content
	 * @param $with_gutenberg
	 *
	 * @return int estimated time in minutes
	 */
	function magty_estimated_read_time( $content = '', $with_gutenberg = false ) {

		// In case if content is build with gutenberg parse blocks.
		if ( $with_gutenberg ) {
			$blocks      = parse_blocks( $content );
			$contentHtml = '';

			foreach ( $blocks as $block ) {
				$contentHtml .= render_block( $block );
			}

			$content = $contentHtml;
		}

		// Remove HTML tags from string.
		$content = wp_strip_all_tags( $content );

		// When content is empty return 0.
		if ( ! $content ) {
			return 0;
		}

		// Count words containing string.
		$words_count = str_word_count( $content );

		// Words per minute.
		$words_per_minute = 200;

		// Calculate time for read all words and round.
		$minutes = ceil( $words_count / $words_per_minute );

		return $minutes;
	}
endif;

if ( ! function_exists( 'magty_print_first_instance_of_block' ) ) :

	/** Print the first instance of a block in the content, and then break away.
	 *
	 * @param string      $block_name The full block type name, or a partial match.
	 *                                Example: `core/image`, `core-embed/*`.
	 * @param string|null $content    The content to search in. Use null for get_the_content().
	 * @param int         $instances  How many instances of the block will be printed (max). Default  1.
	 * @return bool Returns true if a block was located & printed, otherwise false.
	 */
	function magty_print_first_instance_of_block( $block_name, $content = null, $instances = 1 ) {
		$instances_count = 0;
		$blocks_content  = '';

		if ( ! $content ) {
			$content = get_the_content();
		}

		// Parse blocks in the content.
		$blocks = parse_blocks( $content );

		// Loop blocks.
		foreach ( $blocks as $block ) {

			// Sanity check.
			if ( ! isset( $block['blockName'] ) ) {
				continue;
			}

			// Check if this the block matches the $block_name.
			$is_matching_block = false;

			// If the block ends with *, try to match the first portion.
			if ( '*' === $block_name[-1] ) {
				$is_matching_block = 0 === strpos( $block['blockName'], rtrim( $block_name, '*' ) );
			} else {
				$is_matching_block = $block_name === $block['blockName'];
			}

			if ( $is_matching_block ) {
				// Increment count.
				++$instances_count;

				// Add the block HTML.
				$blocks_content .= render_block( $block );

				// Break the loop if the $instances count was reached.
				if ( $instances_count >= $instances ) {
					break;
				}
			}
		}

		if ( $blocks_content ) {
			/** This filter is documented in wp-includes/post-template.php */
			echo apply_filters( 'the_content', $blocks_content ); // phpcs:ignore WordPress.Security.EscapeOutput
			return true;
		}

		return false;
	}
endif;

if ( ! function_exists( 'magty_excerpt_length' ) ) {
	/**
	 * Change Excerpt Length
	 *
	 * @param string $length of the excerpt.
	 */
	function magty_excerpt_length( $length ) {

		if ( is_admin() && ! wp_doing_ajax() ) {
			return $length;
		}

		$length = get_theme_mod( 'max_excerpt_length', 55 );

		return $length;
	}
}
add_filter( 'excerpt_length', 'magty_excerpt_length' );

if ( ! function_exists( 'magty_more' ) ) {
	/**
	 * Change Excerpt Suffix
	 *
	 * @param string $more suffix for the excerpt.
	 */
	function magty_excerpt_more( $more ) {
		return '&hellip;';
	}
}
add_filter( 'excerpt_more', 'magty_excerpt_more' );

if ( ! function_exists( 'magty_archive_title_prefix_wrapper' ) ) :
	/**
	 * Wrap prefix
	 *
	 * @return string Prefix
	 */
	function magty_archive_title_prefix_wrapper( $prefix ) {
		$prefix = str_replace( ':', '', $prefix );
		return '<span class="archive-title-prefix">' . $prefix . '</span>';
	}
endif;
add_filter( 'get_the_archive_title_prefix', 'magty_archive_title_prefix_wrapper' );

if ( ! function_exists( 'magty_get_localized_variables' ) ) {
	/**
	 * Get array of localized variables
	 *
	 * @return array Array of localized vairables
	 */
	function magty_get_localized_variables() {

		$args = array();

		/*For Ajax Load Posts*/
		$args['nonce']   = wp_create_nonce( 'magty-load-more-nonce' );
		$args['ajaxurl'] = admin_url( 'admin-ajax.php' );

		if ( is_front_page() ) {
			$args['post_type'] = 'post';
		}

		/*Support for custom post types*/
		if ( is_post_type_archive() ) {
			$args['post_type'] = get_queried_object()->name;
		}

		/*Support for categories and taxonomies*/
		if ( is_category() || is_tag() || is_tax() ) {
			$args['cat']      = get_queried_object()->slug;
			$args['taxonomy'] = get_queried_object()->taxonomy;
			/*Get the associated post type for custom taxonomy*/
			if ( is_tax() ) {
				global $wp_taxonomies;
				$tax_object        = isset( $wp_taxonomies[ $args['taxonomy'] ] ) ? $wp_taxonomies[ $args['taxonomy'] ]->object_type : array();
				$args['post_type'] = array_pop( $tax_object );
			}
		}

		/*Support for search*/
		if ( is_search() ) {
			$args['search'] = get_search_query();
		}

		/*Support for author*/
		if ( is_author() ) {
			$args['author'] = get_the_author_meta( 'user_nicename' );
		}

		/*Support for date archive*/
		if ( is_date() ) {
			$args['year']  = get_query_var( 'year' );
			$args['month'] = get_query_var( 'monthnum' );
			$args['day']   = get_query_var( 'day' );
		}

		global $wp_query;

		$arggs['nonce']        = wp_create_nonce( 'magty-load-more-nonce' );
		$arggs['ajaxurl']      = admin_url( 'admin-ajax.php' );
		$arggs['posts']        = json_encode( $wp_query->query_vars );
		$arggs['current_page'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
		$arggs['max_page']     = $wp_query->max_num_pages;

		return $args;
	}
}

if ( ! function_exists( 'magty_post_image' ) ) :
	/**
	 * Display post image.
	 *
	 * @param string  $image_size Image Size to fetch
	 * @param boolean $bg Image in background
	 *
	 * @since 1.1.0
	 */
	function magty_post_image( $image_size = 'thumbnail', $bg = false ) {
		$class = '';
		if ( true == $bg ) {
			$class = 'magty-bg-image';
		}
		?>
		<div class="article-image <?php echo esc_attr( $class ); ?>">
			<a href="<?php the_permalink(); ?>">
				<?php
				the_post_thumbnail(
					$image_size,
					array(
						'alt' => the_title_attribute(
							array(
								'echo' => false,
							)
						),
					)
				);
				?>
			</a>
		</div>
		<?php
	}
endif;

if ( ! function_exists( 'magty_post_format_icon' ) ) :
	/**
	 * Displays Post format Icon
	 *
	 * @since 1.1.0
	 */
	function magty_post_format_icon( $pos = 'left' ) {
		$post_format = get_post_format();
		if ( $post_format && ( $post_format !== 'standard' && $post_format !== 'aside' && $post_format !== 'status' ) ) {
			$icon = magty_get_theme_svg( $post_format );
			if ( $icon ) {
				?>
				<div class="post-format-icon <?php echo esc_attr( $pos ); ?>">
					<span class="post-format-svg">
						<?php echo $icon; ?>
					</span>
				</div>
				<?php
			}
		}
	}
endif;

if ( ! function_exists( 'magty_get_social_icons_class' ) ) :
	/**
	 * Returns proper class for social icons
	 *
	 * @param string $style Style
	 *
	 * @since 1.1.0
	 */
	function magty_get_social_icons_class( $style = 'style_1' ) {
		switch ( $style ) {
			case 'style_1':
			case 'style_4':
				return ' as_color';
			case 'style_2':
			case 'style_3':
				return ' as_bg';
			default:
				return;
		}
	}
endif;

if ( ! function_exists( 'magty_get_sticky_menu' ) ) :
	/**
	 * Returns proper class for sticky menu
	 *
	 * @since 1.1.0
	 */
	function magty_get_sticky_menu() {

		$class     = '';
		$is_sticky = get_theme_mod( 'enable_sticky_menu', true );
		if ( $is_sticky ) {
			$class = ' sticky-menu sticky-style-normal';
		}
		return $class;
	}
endif;

if ( ! function_exists( 'magty_get_menu_bar_border' ) ) :
	/**
	 * Returns proper class for menu bar border
	 *
	 * @since 1.1.0
	 */
	function magty_get_menu_bar_border() {
		$border_top    = get_theme_mod( 'enable_top_border_menu_bar' );
		$border_bottom = get_theme_mod( 'enable_bottom_border_menu_bar' );
		$border_top    = $border_top ? ' saga-item-border-top' : '';
		$border_bottom = $border_bottom ? ' saga-item-border-bottom' : '';
		return $border_top . $border_bottom;
	}
endif;

if ( ! function_exists( 'magty_get_sub_menu_style' ) ) :
	/**
	 * Returns proper class for submenu style.
	 *
	 * @since 1.1.0
	 */
	function magty_get_sub_menu_style() {
		return ' sub-menu-' . get_theme_mod( 'sub_menu_style', 'style_1' );
	}
endif;

if ( ! function_exists( 'magty_get_title_limit_choices' ) ) :
	/**
	 * Returns title limit options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function magty_get_title_limit_choices() {
		$options = apply_filters(
			'magty_title_limit_options',
			array(
				''              => __( '&mdash; No Limit &mdash;', 'magty' ),
				'limit-lines-1' => __( '1 Line', 'magty' ),
				'limit-lines-2' => __( '2 Lines', 'magty' ),
				'limit-lines-3' => __( '3 Lines', 'magty' ),
				'limit-lines-4' => __( '4 Lines', 'magty' ),
				'limit-lines-5' => __( '5 Lines', 'magty' ),
			)
		);
		return $options;
	}
endif;

if ( ! function_exists( 'magty_get_archive_excerpt' ) ) :
	/**
	 * Get archive excerpt
	 *
	 * @since 1.0.0
	 *
	 * @return string Page ID.
	 */
	function magty_get_archive_excerpt() {
		$excerpt_length = get_theme_mod( 'excerpt_length', 32 );
		return wp_trim_words( get_the_excerpt(), $excerpt_length, '&hellip;' );
	}
endif;

if ( ! function_exists( 'magty_the_archive_excerpt' ) ) :
	/**
	 * Print archive excerpt
	 *
	 * @since 1.0.0
	 *
	 * @return string Page ID.
	 */
	function magty_the_archive_excerpt() {
		echo wpautop( wp_kses_post( magty_get_archive_excerpt() ) );
	}
endif;

if ( ! function_exists( 'magty_redirect_random_post' ) ) :
	/**
	 * Go to a random post.
	 *
	 * @since 1.0.0
	 */
	function magty_redirect_random_post() {

		if ( wp_doing_ajax() ) {
			return;
		}

		if ( isset( $_GET['random-post'] ) ) {

			$args = apply_filters(
				'magty_redirect_random_post_args',
				array(
					'posts_per_page'      => 1,
					'orderby'             => 'rand',
					'fields'              => 'ids',
					'no_found_rows'       => true,
					'ignore_sticky_posts' => true,
				)
			);

			$random_post = new WP_Query( $args );
			if ( $random_post->have_posts() ) :
				while ( $random_post->have_posts() ) :
					$random_post->the_post();
					wp_redirect( get_permalink() );
					exit;
				endwhile;
				wp_reset_postdata();
			endif;
		}
	}
endif;
add_action( 'init', 'magty_redirect_random_post' );

if ( ! function_exists( 'magty_random_post' ) ) :
	/**
	 * Displays a random post link with an icon.
	 *
	 * @since 1.0.0
	 */
	function magty_random_post() {
		?>
		<a href="<?php echo esc_url( add_query_arg( 'random-post', 1 ) ); ?>" class="magty-random-post" title="<?php esc_attr_e( 'Random Article', 'magty' ); ?>" rel="nofollow">
			<?php magty_the_theme_svg( 'shuffle' ); ?>
			<span class="screen-reader-text"><?php esc_html_e( 'Random Article', 'magty' ); ?></span>
		</a>
		<?php
	}
endif;

if ( ! function_exists( 'magty_header_btn_one' ) ) :
	/**
	 * Displays a header button one element.
	 *
	 * @since 1.0.0
	 */
	function magty_header_btn_one() {

		$btn_wrapper_class = array();

		$btn_label = get_theme_mod( 'header_btn_one_label', __( 'Subscribe', 'magty' ) );
		$btn_link  = get_theme_mod( 'header_btn_one_link', '#' );
		$btn_icon  = get_theme_mod( 'header_btn_one_icon' );
		$icon_only = get_theme_mod( 'header_btn_one_icon_only' );

		if ( $btn_label && ! $icon_only ) {
			$btn_wrapper_class[] = 'component-btn-w-label';
		}

		if ( ! $btn_label || $icon_only ) {
			$btn_wrapper_class[] = 'component-btn-wo-label';
		}

		if ( $btn_icon ) {
			$btn_wrapper_class[] = 'component-btn-w-icon';
		} else {
			$btn_wrapper_class[] = 'component-btn-wo-icon';
		}

		if ( ( $btn_label || $btn_icon ) && $btn_link ) {

			$btn_style         = get_theme_mod( 'header_btn_one_display_style', 'style_1' );
			$btn_custom_class  = get_theme_mod( 'header_btn_one_class' );
			$new_tab           = get_theme_mod( 'header_btn_one_new_tab' );
			$icon_before_label = get_theme_mod( 'header_btn_one_icon_before_label' );
			$responsive        = get_theme_mod( 'header_btn_one_responsive_style', 'hidden' );

			$btn_wrapper_class[] = $btn_style;

			if ( $btn_custom_class ) {
				$btn_wrapper_class[] = $btn_custom_class;
			}

			if ( 'hidden' == $responsive ) {
				$btn_wrapper_class[] = 'hide-on-mobile';
			}

			if ( 'icon_only' == $responsive ) {
				$btn_wrapper_class[] = 'component-btn-r-icon-only';
			}

			if ( $icon_before_label ) {
				$btn_wrapper_class[] = 'component-btn-icon-first';
			}

			?>
			<div class="magty-header-btn header-btn-one">
				<a href="<?php echo esc_attr( $btn_link ); ?>" target="<?php echo ( $new_tab ) ? '_blank' : '_self'; ?>" class="magty-btn-link text-decoration-none <?php echo esc_attr( implode( ' ', $btn_wrapper_class ) ); ?>">
					<?php
					if ( $btn_label ) {
						if ( $icon_only ) {
							echo '<span class="screen-reader-text">' . $btn_label . '</span>';
						} else {
							echo esc_html( $btn_label );
						}
					}
					if ( $btn_icon ) {
						?>
						<span><?php magty_the_theme_svg( $btn_icon ); ?></span>
						<?php
					}
					?>
				</a>
			</div>
			<?php
		}
	}
endif;