<?php
/**
 * Default customizer values.
 *
 * @package MagNine
 */
if (!function_exists('magnine_get_all_customizer_default_values')) :
    /**
     * Get default customizer values.
     *
     * @return array Default customizer values.
     * @since 1.0.0
     *
     */
    function magnine_get_all_customizer_default_values()
    {
        $defaults = array();
        // sidebar
        $defaults['magnine_site_logo_height'] = 100;
        
        $defaults['hide_title'] = false;
        $defaults['hide_tagline'] = true;
        $defaults['sidebar_layout_option'] = 'right-sidebar';
        $defaults['single_sidebar_layout_option'] = 'right-sidebar';
        $defaults['enable_sidebar_fix_archive'] = true;
        $defaults['enable_sidebar_fix_single'] = true;
        // preloader
        $defaults['enable_preloader_options'] = true;
        $defaults['magnine_preloader_style'] = 'style-5';
        // breadrumbs
        $defaults['enable_breadcrumb'] = true;
        $defaults['enable_social_mobile_menu'] = true;
        $defaults['select_mobile_social_menu_style'] = 'has-brand-background ';
        $defaults['enable_mobile_social_nav_border_radius'] = true;
        $defaults['enable_copyright_in_menu'] = true;
        
        $defaults['enable_offcanvas'] = true;
        //ticker post
        $defaults['enable_ticker_posts'] = true;
        $defaults['enable_ticker_only_on_frontpage'] = false;
        $defaults['enable_ticker_label'] = true;
        $defaults['ticker_label_text'] = esc_html__('News Flash', 'magnine');
        $defaults['ticker_posts_cat'] = '';
        $defaults['no_of_ticker_posts'] = 7;
        $defaults['ticker_posts_number_of_post_offsets'] = 0;
        $defaults['ticker_posts_orderby'] = 'date';
        $defaults['ticker_posts_order'] = 'desc';
        $defaults['enable_ticker_posts_author_meta'] = true;
        $defaults['select_ticker_posts_author_meta'] = 'with_icon';
        $defaults['single_ticker_post_date_meta_title'] = esc_html__('on', 'magnine');
        $defaults['ticker_posts_author_meta_title'] = esc_html__('Posted by', 'magnine');
        $defaults['enable_ticker_posts_date_meta'] = true;
        $defaults['select_ticker_posts_date'] = 'with_icon';
        $defaults['select_ticker_posts_date_format'] = 'classic';
        $defaults['enable_ticker_posts_category_meta'] = false;
        $defaults['ticker_posts_category_label'] = '';
        $defaults['select_ticker_posts_category_color'] = 'none';
        $defaults['select_ticker_posts_number_of_category'] = 1;
        // topbar
        $defaults['select_header_layout_style'] = 'header_style_1';
        $defaults['enable_header_advertisement'] = false;
        $defaults['header_advert_image'] = '';
        $defaults['header_advert_image_url'] = '';
        $defaults['enable_top_bar'] = false;
        $defaults['hide_topbar_on_mobile'] = false;
        $defaults['enable_header_time'] = true;
        $defaults['enable_header_date'] = true;
        $defaults['date_label_text'] = esc_html__('Today:', 'magnine');
        $defaults['todays_date_format'] = 'l, F j Y';
        $defaults['enable_social_nav_on_topbar'] = true;
        $defaults['enable_social_nav_border_radius'] = true;
        $defaults['select_top_bar_social_menu_style'] = 'has-brand-background';
        //Trending post
        $defaults['enable_search_latest_posts'] = true;
        $defaults['enable_search_latest_label'] = true;
        $defaults['search_latest_label_text'] = esc_html__('Trending News', 'magnine');
        $defaults['search_latest_posts_cat'] = '';
        $defaults['no_of_search_latest_posts'] = 4;
        $defaults['search_latest_posts_orderby'] = 'date';
        $defaults['search_latest_posts_order'] = 'desc';
        $defaults['enable_search_latest_posts_author_meta'] = true;
        $defaults['select_search_latest_posts_author_meta'] = 'with_icon';
        $defaults['single_search_latest_post_date_meta_title'] = esc_html__('on', 'magnine');
        $defaults['search_latest_posts_author_meta_title'] = esc_html__('Posted by', 'magnine');
        $defaults['enable_search_latest_posts_date_meta'] = true;
        $defaults['select_search_latest_posts_date'] = 'with_icon';
        $defaults['select_search_latest_posts_date_format'] = 'classic';
        $defaults['enable_search_latest_posts_category_meta'] = false;
        $defaults['search_latest_posts_category_label'] = '';
        $defaults['select_search_latest_posts_category_color'] = 'none';
        $defaults['select_search_latest_posts_number_of_category'] = 1;
        // tags
        $defaults['enable_tags'] = true;
        $defaults['enable_tags_only_on_frontpage'] = false;
        $defaults['enable_tags_label'] = true;
        $defaults['tags_label_text'] = esc_html__('Tags', 'magnine');
        $defaults['tags_orderby'] = 'date';
        $defaults['tags_order'] = 'desc';
        $defaults['no_of_tags'] = 12;
        $defaults['tags_label_style'] = 'style_2';
        $defaults['hide_tags_label_responsive'] = true;
        //popular post
        $defaults['enable_popular_posts'] = true;
        $defaults['enable_popular_only_on_frontpage'] = true;
        $defaults['popular_post_cat'] = '';
        $defaults['no_of_popular_posts'] = 8;
        $defaults['popular_posts_number_of_post_offsets'] = 0;
        $defaults['popular_post_orderby'] = 'date';
        $defaults['popular_post_order'] = 'desc';
        $defaults['enable_popular_post_author_meta'] = false;
        $defaults['select_popular_post_author_meta'] = 'with_icon';
        $defaults['select_popular_post_date_meta_title'] = esc_html__('on', 'magnine');
        $defaults['popular_post_author_meta_title'] = esc_html__('Posted by', 'magnine');
        $defaults['enable_popular_post_date_meta'] = true;
        $defaults['select_popular_post_date'] = 'with_icon';
        $defaults['select_popular_post_date_format'] = 'classic';
        $defaults['popular_post_column'] = 5;
        $defaults['enable_popular_post_autoplay'] = false;
        $defaults['enable_popular_post_arrows'] = true;
        $defaults['enable_popular_post_dots'] = false;

        // fix post
        $defaults['enable_fixed_trending'] = true;
        $defaults['fixed_trending_cat'] = '';
        $defaults['no_of_fixed_trending'] = 5;
        $defaults['fixed_trending_number_of_post_offsets'] = 0;
        $defaults['fixed_trending_orderby'] = 'date';
        $defaults['fixed_trending_order'] = 'desc';

        //Frontline post
        $defaults['enable_frontlines'] = false;
        $defaults['frontline_cat'] = '';
        $defaults['frontline_layout_style'] = 'frontline-layout-2';
        $defaults['no_of_frontlines'] = 2;
        $defaults['frontlines_number_of_post_offsets'] = 0;
        $defaults['frontline_orderby'] = 'date';
        $defaults['frontline_order'] = 'desc';
        $defaults['frontline_title'] = esc_html__('Must Read', 'magnine');
        $defaults['enable_frontline_author_meta'] = false;
        $defaults['select_frontline_author_meta'] = 'with_icon';
        $defaults['select_frontline_date_meta_title'] = esc_html__('on', 'magnine');
        $defaults['frontline_author_meta_title'] = esc_html__('Posted by', 'magnine');
        $defaults['enable_frontline_date_meta'] = true;
        $defaults['select_frontline_date'] = 'with_icon';
        $defaults['select_frontline_date_format'] = 'classic';
        $defaults['enable_frontline_category_meta'] = true;
        $defaults['frontline_category_label'] = '';
        $defaults['select_frontline_category_color'] = 'has-text-color';
        $defaults['select_frontline_number_of_category'] = 1;
        // banner post
        $defaults['enable_main_banner_section'] = true;
        $defaults['banner_grid_post_col_1_category'] = '';
        $defaults['banner_list_post_category'] = '';
        $defaults['banner_grid_post_category'] = '';
        $defaults['enable_banner_author_meta'] = false;
        $defaults['select_banner_author_meta'] = 'with_avatar_image';
        $defaults['select_banner_date_meta_title'] = esc_html__('on', 'magnine');
        $defaults['banner_author_meta_title'] = esc_html__('Posted by', 'magnine');
        $defaults['enable_banner_date_meta'] = true;
        $defaults['select_banner_date'] = 'with_icon';
        $defaults['select_banner_date_format'] = 'classic';
        $defaults['enable_banner_category_meta'] = true;
        $defaults['banner_category_label'] = '';
        $defaults['select_banner_category_color'] = 'has-text-color';
        $defaults['select_banner_number_of_category'] = 1;
        // Banner Carousel
        $defaults['enable_slider_banner_section'] = false;
        $defaults['title_slider_banner_section'] = esc_html__('Latest News', 'magnine');
        $defaults['number_of_slider_post'] = 8;
        $defaults['banner_section_cat'] = '';
        $defaults['enable_banner_overlay'] = true;
        $defaults['enable_banner_post_description'] = false;
        $defaults['slider_post_content_alignment'] = 'banner-description-bottom';
        $defaults['enable_banner_slider_author_meta'] = false;
        $defaults['select_banner_slider_author_meta'] = 'with_avatar_image';
        $defaults['select_banner_slider_date_meta_title'] = esc_html__('on', 'magnine');
        $defaults['banner_slider_author_meta_title'] = esc_html__('Posted by', 'magnine');
        $defaults['enable_banner_slider_date_meta'] = true;
        $defaults['select_banner_slider_date'] = 'with_icon';
        $defaults['select_banner_slider_date_format'] = 'classic';
        $defaults['enable_banner_slider_category_meta'] = true;
        $defaults['banner_slider_category_label'] = '';
        $defaults['select_banner_slider_category_color'] = 'has-text-color';
        $defaults['select_banner_slider_number_of_category'] = 1;
        $defaults['enable_banner_control_icon'] = true;

        // article list section
        $defaults['enable_article_list_post'] = true;
        $defaults['article_list_post_category_1'] = '';
        $defaults['article_list_post_category_2'] = '';
        $defaults['article_list_post_category_3'] = '';
        $defaults['enable_article_list_post_author_meta'] = false;
        $defaults['select_article_list_post_author_meta'] = 'with_avatar_image';
        $defaults['select_article_list_post_date_meta_title'] = esc_html__('on', 'magnine');
        $defaults['article_list_post_author_meta_title'] = esc_html__('Posted by', 'magnine');
        $defaults['enable_article_list_post_date_meta'] = true;
        $defaults['select_article_list_post_date'] = 'with_icon';
        $defaults['select_article_list_post_date_format'] = 'classic';
        $defaults['enable_article_list_post_category_meta'] = true;
        $defaults['article_list_post_category_label'] = '';
        $defaults['select_article_list_post_category_color'] = 'has-text-color';
        $defaults['select_article_list_post_number_of_category'] = 1;

        //dual insights
        $defaults['enable_dual_insights'] = true;
        $defaults['dual_insights_title'] = esc_html__('Dual Insights', 'magnine');
        $defaults['dual_inner_column_title'] = esc_html__('Trending Now', 'magnine');
        $defaults['main_insights_category'] = '';
        $defaults['trending_insights_category'] = '';
        $defaults['enable_insights_author_meta'] = false;
        $defaults['select_insights_author_meta'] = 'with_avatar_image';
        $defaults['insights_author_meta_title'] = esc_html__('Posted by', 'magnine');
        $defaults['enable_insights_date_meta'] = true;
        $defaults['select_insights_date'] = 'with_icon';
        $defaults['select_insights_date_meta_title'] = esc_html__('on', 'magnine');
        $defaults['select_insights_date_format'] = 'classic';
        $defaults['enable_insights_category_meta'] = true;
        $defaults['insights_category_label'] = '';
        $defaults['select_insights_category_color'] = 'has-text-color';
        $defaults['select_insights_number_of_category'] = 1;

        // split block
        $defaults['enable_split_block'] = true;
        $defaults['split_block_title'] = esc_html__('Split Block Title', 'magnine');
        $defaults['split_block_category'] = '';
        $defaults['enable_split_block_author_meta'] = false;
        $defaults['select_split_block_author_meta'] = 'with_avatar_image';
        $defaults['split_block_author_meta_title'] = esc_html__('Posted by', 'magnine');
        $defaults['enable_split_block_date_meta'] = true;
        $defaults['select_split_block_date'] = 'with_icon';
        $defaults['select_split_block_date_meta_title'] = esc_html__('on', 'magnine');
        $defaults['select_split_block_date_format'] = 'classic';
        $defaults['enable_split_block_category_meta'] = true;
        $defaults['split_block_category_label'] = '';
        $defaults['select_split_block_category_color'] = 'has-text-color';
        $defaults['select_split_block_number_of_category'] = 1;

        // grid list
        $defaults['enable_grid_list'] = true;
        $defaults['grid_list_title'] = esc_html__('Grid List', 'magnine');
        $defaults['grid_list_category_1'] = '';
        $defaults['grid_list_inner_title'] = esc_html__('Recent News', 'magnine');
        $defaults['grid_list_category_2'] = '';
        $defaults['enable_grid_list_author_meta'] = false;
        $defaults['select_grid_list_author_meta'] = 'with_avatar_image';
        $defaults['grid_list_author_meta_title'] = esc_html__('Posted by', 'magnine');
        $defaults['enable_grid_list_date_meta'] = true;
        $defaults['select_grid_list_date'] = 'with_icon';
        $defaults['select_grid_list_date_meta_title'] = esc_html__('on', 'magnine');
        $defaults['select_grid_list_date_format'] = 'classic';
        $defaults['enable_grid_list_category_meta'] = true;
        $defaults['grid_list_category_label'] = '';
        $defaults['select_grid_list_category_color'] = 'has-text-color';
        $defaults['select_grid_list_number_of_category'] = 1;
        $defaults['grid_list_more_category_text'] = esc_html__('More from this category', 'magnine');

        //article group
        $defaults['enable_article_group'] = true;
        $defaults['article_group_title'] = esc_html__('Article Group', 'magnine');
        $defaults['article_group_category'] = '';
        $defaults['article_group_slider_category'] = '';
        $defaults['enable_article_group_author_meta'] = false;
        $defaults['select_article_group_author_meta'] = 'with_avatar_image';
        $defaults['article_group_author_meta_title'] = esc_html__('Posted by', 'magnine');
        $defaults['enable_article_group_date_meta'] = true;
        $defaults['select_article_group_date'] = 'with_icon';
        $defaults['select_article_group_date_meta_title'] = esc_html__('on', 'magnine');
        $defaults['select_article_group_date_format'] = 'classic';
        $defaults['enable_article_group_category_meta'] = true;
        $defaults['article_group_category_label'] = '';
        $defaults['select_article_group_category_color'] = 'has-text-color';
        $defaults['select_article_group_number_of_category'] = 1;

        //must read post
        $defaults['enable_must_reads'] = true;
        $defaults['must_read_cat'] = '';
        $defaults['no_of_must_reads'] = 6;
        $defaults['must_reads_number_of_post_offsets'] = 0;
        $defaults['must_read_orderby'] = 'date';
        $defaults['must_read_order'] = 'desc';
        $defaults['must_read_title'] = esc_html__('Must Read', 'magnine');
        $defaults['enable_must_read_author_meta'] = false;
        $defaults['select_must_read_author_meta'] = 'with_icon';
        $defaults['select_must_read_date_meta_title'] = esc_html__('on', 'magnine');
        $defaults['must_read_author_meta_title'] = esc_html__('Posted by', 'magnine');
        $defaults['enable_must_read_date_meta'] = true;
        $defaults['select_must_read_date'] = 'with_icon';
        $defaults['select_must_read_date_format'] = 'classic';
        $defaults['enable_must_read_category_meta'] = true;
        $defaults['must_read_category_label'] = '';
        $defaults['select_must_read_category_color'] = 'has-text-color';
        $defaults['select_must_read_number_of_category'] = 1;
        // excerpt
        $defaults['number_of_word_in_excerpt'] = '20';
        $defaults['excerpt_posts_title_limit'] = '';
        $defaults['archive_excerpt_button_text'] = esc_html__('Learn More', 'magnine');
        // archive options
        $defaults['archive_layout'] = 'archive_style_3';
        $defaults['enable_archive_featured_post'] = false;
        $defaults['enable_archive_post_count'] = true;
        $defaults['archive_posts_title_limit'] = 'limit-line-3';
        $defaults['enable_excerpt_on_archive_1'] = true;
        $defaults['enable_excerpt_on_archive_2'] = true;
        $defaults['enable_excerpt_on_archive_3'] = false;
        $defaults['select_author_meta'] = 'with_label';
        $defaults['archive_author_meta_title'] = esc_html__('', 'magnine');
        $defaults['enable_archive_author_meta'] = true;
        $defaults['enable_archive_date_meta'] = true;
        $defaults['archive_date_meta_title'] = esc_html__('on', 'magnine');
        $defaults['select_date_format'] = 'classic';
        $defaults['select_archive_date'] = 'with_icon';
        $defaults['enable_category_meta'] = true;
        $defaults['archive_category_label'] = '';
        $defaults['select_category_style'] = 'archive_cat_style_2';
        $defaults['number_of_category_to_display'] = '1';
        $defaults['select_category_color'] = 'none';
        $defaults['enable_tag_meta'] = false;
        $defaults['enable_comment_meta'] = false;
        $defaults['enable_read_time_meta'] = false;
        $defaults['select_read_time_style'] = 'archive_read_time_style_1';
        $defaults['select_pagination_style'] = 'pagination_default';
        // single options
        $defaults['enable_single_author_meta'] = true;
        $defaults['single_author_meta_title'] = esc_html__('', 'magnine');
        $defaults['select_single_author_meta'] = 'with_label';
        $defaults['enable_single_date_meta'] = true;
        $defaults['select_single_date'] = 'with_label';
        $defaults['single_date_meta_title'] = esc_html__('on', 'magnine');
        $defaults['select_single_date_format'] = 'classic';
        $defaults['enable_single_category_meta'] = true;
        $defaults['single_category_label'] = '';
        $defaults['select_single_category_color'] = 'has-text-color';
        $defaults['enable_single_tag_meta'] = true;
        $defaults['enable_single_read_time_meta'] = true;
        $defaults['show_author_info'] = false;
        $defaults['show_sticky_article_navigation'] = true;
        // single related post
        $defaults['show_related_posts'] = true;
        $defaults['related_posts_text'] = __('You May Also Like', 'magnine');
        $defaults['no_of_related_posts'] = 3;
        $defaults['related_posts_number_of_post_offsets'] = 0;
        $defaults['related_posts_orderby'] = 'date';
        $defaults['related_posts_order'] = 'desc';
        $defaults['author_posts_orderby'] = 'date';
        $defaults['enable_related_posts_author_meta'] = true;
        $defaults['select_related_posts_author_meta'] = 'with_icon';
        $defaults['single_related_post_date_meta_title'] = esc_html__('on', 'magnine');
        $defaults['related_posts_author_meta_title'] = esc_html__('Posted by', 'magnine');
        $defaults['enable_related_posts_date_meta'] = true;
        $defaults['select_related_posts_date'] = 'with_icon';
        $defaults['select_related_posts_date_format'] = 'classic';
        $defaults['enable_related_posts_category_meta'] = true;
        $defaults['related_posts_category_label'] = '';
        $defaults['select_related_posts_category_color'] = 'none';
        $defaults['select_related_posts_number_of_category'] = 1;
        // single author post
        $defaults['author_posts_order'] = 'desc';
        $defaults['show_author_posts'] = true;
        $defaults['author_posts_text'] = __('More From Author', 'magnine');
        $defaults['no_of_author_posts'] = 3;
        $defaults['author_posts_number_of_post_offsets'] = 0;
        $defaults['enable_author_posts_author_meta'] = true;
        $defaults['select_author_posts_author_meta'] = 'with_icon';
        $defaults['single_author_post_date_meta_title'] = esc_html__('on', 'magnine');
        $defaults['author_posts_author_meta_title'] = esc_html__('Posted by', 'magnine');
        $defaults['enable_author_posts_date_meta'] = true;
        $defaults['select_author_posts_date'] = 'with_icon';
        $defaults['select_author_posts_date_format'] = 'classic';
        $defaults['enable_author_posts_category_meta'] = true;
        $defaults['author_posts_category_label'] = '';
        $defaults['select_author_posts_category_color'] = 'none';
        $defaults['select_author_posts_number_of_category'] = 1;
        // footer recommended section
        $defaults['enable_recommended_post'] = true;
        $defaults['recommended_post_layout'] = 'wpi-post-recommendation-1';
        $defaults['recommended_post_title'] = esc_html__('Just For You', 'magnine');
        $defaults['recommended_post_category'] = '';
        $defaults['enable_recommended_post_author_meta'] = false;
        $defaults['select_recommended_post_author_meta'] = 'with_avatar_image';
        $defaults['select_recommended_post_date_meta_title'] = esc_html__('on', 'magnine');
        $defaults['recommended_post_author_meta_title'] = esc_html__('Posted by', 'magnine');
        $defaults['enable_recommended_post_date_meta'] = true;
        $defaults['select_recommended_post_date'] = 'with_icon';
        $defaults['select_recommended_post_date_format'] = 'classic';
        $defaults['enable_recommended_post_category_meta'] = true;
        $defaults['recommended_post_category_label'] = '';
        $defaults['select_recommended_post_category_color'] = 'has-text-color';
        $defaults['select_recommended_post_number_of_category'] = 1;


        //featured category section
        $defaults['enable_featured_category'] = false;
        $defaults['featured_category_title'] = esc_html__('Categories', 'magnine');
        // footer widget section
        $defaults['enable_footer_widget'] = true;
        $defaults['footer_column_layout'] = 'footer_layout_2';
        // footer section
        $defaults['copyright_text'] = esc_html__('&copy; All rights reserved. Proudly powered by WordPress.', 'magnine');
        $defaults['copyright_date_format'] = 'Y';
        $defaults['enable_footer_nav'] = false;
        $defaults['enable_footer_social_nav'] = true;
        $defaults['enable_footer_social_nav_border_radius'] = false;
        $defaults['select_footer_social_menu_style'] = 'none';
        $defaults['enable_footer_scroll_to_top'] = true;
        $defaults['enable_footer_progressbar'] = true;
        $defaults = apply_filters('magnine_default_customizer_values', $defaults);
        return $defaults;
    }
endif;
