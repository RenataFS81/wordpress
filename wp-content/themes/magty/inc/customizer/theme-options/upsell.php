<?php

// Upsell.
$wp_customize->add_section(
	'theme_upsell',
	array(
		'title'    => esc_html__( 'Unlock More Features', 'magty' ),
		'priority' => 1,
	)
);
$wp_customize->add_setting(
	'theme_pro_features',
	array(
		'sanitize_callback' => '__return_true',
	)
);
$wp_customize->add_control(
	new Magty_Upsell(
		$wp_customize,
		'theme_pro_features',
		array(
			'section' => 'theme_upsell',
			'type'    => 'upsell',
		)
	)
);

// Sections upsell.
$wp_customize->add_section(
	new Magty_Section_Upsell(
		$wp_customize,
		'magty_section_404',
		array(
			'title'    => esc_html__( '404 Page', 'magty' ),
			'priority' => 46,
		)
	)
);
$wp_customize->add_section(
	new Magty_Section_Upsell(
		$wp_customize,
		'magty_section_coming_soon',
		array(
			'title'    => esc_html__( 'Coming Soon Mode', 'magty' ),
			'priority' => 46,
		)
	)
);
$wp_customize->add_section(
	new Magty_Section_Upsell(
		$wp_customize,
		'magty_section_social_share',
		array(
			'title'    => esc_html__( 'Social Share', 'magty' ),
			'priority' => 46,
		)
	)
);
$wp_customize->add_section(
	new Magty_Section_Upsell(
		$wp_customize,
		'magty_section_menu_badge',
		array(
			'title'    => esc_html__( 'Menu Badge', 'magty' ),
			'priority' => 46,
		)
	)
);
$wp_customize->add_section(
	new Magty_Section_Upsell(
		$wp_customize,
		'magty_section_dark_mode',
		array(
			'title'    => esc_html__( 'Dark Mode', 'magty' ),
			'priority' => 46,
		)
	)
);
$wp_customize->add_section(
	new Magty_Section_Upsell(
		$wp_customize,
		'magty_section_animation',
		array(
			'title'    => esc_html__( 'Animation', 'magty' ),
			'priority' => 46,
		)
	)
);
$wp_customize->add_section(
	new Magty_Section_Upsell(
		$wp_customize,
		'magty_section_shortcodes',
		array(
			'title'    => esc_html__( 'Shortcodes', 'magty' ),
			'priority' => 46,
		)
	)
);

$wp_customize->add_section(
	new Magty_Section_Upsell(
		$wp_customize,
		'magty_section_archive_one',
		array(
			'title'    => esc_html__( 'Layout: Single Column List', 'magty' ),
			'panel'    => 'blog_options_panel',
			'priority' => 999,
		)
	)
);
$wp_customize->add_section(
	new Magty_Section_Upsell(
		$wp_customize,
		'magty_section_archive_two',
		array(
			'title'    => esc_html__( 'Layout: Single Column List Alternate', 'magty' ),
			'panel'    => 'blog_options_panel',
			'priority' => 999,
		)
	)
);
$wp_customize->add_section(
	new Magty_Section_Upsell(
		$wp_customize,
		'magty_section_archive_three',
		array(
			'title'    => esc_html__( 'Layout: Full Column', 'magty' ),
			'panel'    => 'blog_options_panel',
			'priority' => 999,
		)
	)
);
$wp_customize->add_section(
	new Magty_Section_Upsell(
		$wp_customize,
		'magty_section_archive_four',
		array(
			'title'    => esc_html__( 'Layout: Full Column Alternate', 'magty' ),
			'panel'    => 'blog_options_panel',
			'priority' => 999,
		)
	)
);
$wp_customize->add_section(
	new Magty_Section_Upsell(
		$wp_customize,
		'magty_section_archive_five',
		array(
			'title'    => esc_html__( 'Layout: 3 Columns Grid', 'magty' ),
			'panel'    => 'blog_options_panel',
			'priority' => 999,
		)
	)
);
$wp_customize->add_section(
	new Magty_Section_Upsell(
		$wp_customize,
		'magty_section_archive_six',
		array(
			'title'    => esc_html__( 'Layout: Overlay Grid', 'magty' ),
			'panel'    => 'blog_options_panel',
			'priority' => 999,
		)
	)
);
$wp_customize->add_section(
	new Magty_Section_Upsell(
		$wp_customize,
		'magty_section_archive_seven',
		array(
			'title'    => esc_html__( 'Layout: Mixed Columns Grid', 'magty' ),
			'panel'    => 'blog_options_panel',
			'priority' => 999,
		)
	)
);
$wp_customize->add_section(
	new Magty_Section_Upsell(
		$wp_customize,
		'magty_section_archive_eight',
		array(
			'title'    => esc_html__( 'Layout: 3 Columns Card', 'magty' ),
			'panel'    => 'blog_options_panel',
			'priority' => 999,
		)
	)
);
$wp_customize->add_section(
	new Magty_Section_Upsell(
		$wp_customize,
		'magty_section_archive_nine',
		array(
			'title'    => esc_html__( 'Layout: 3 Columns Masonry', 'magty' ),
			'panel'    => 'blog_options_panel',
			'priority' => 999,
		)
	)
);

$wp_customize->add_section(
	new Magty_Section_Upsell(
		$wp_customize,
		'magty_section_single_post_subtitle',
		array(
			'title'    => esc_html__( 'Post Subtitle Options', 'magty' ),
			'panel'    => 'single_posts_options_panel',
			'priority' => 999,
		)
	)
);
$wp_customize->add_section(
	new Magty_Section_Upsell(
		$wp_customize,
		'magty_section_single_floating_posts',
		array(
			'title'    => esc_html__( 'Floating Related Posts', 'magty' ),
			'panel'    => 'single_posts_options_panel',
			'priority' => 999,
		)
	)
);
$wp_customize->add_section(
	new Magty_Section_Upsell(
		$wp_customize,
		'magty_section_single_gallery_format',
		array(
			'title'    => esc_html__( 'Post Format Gallery', 'magty' ),
			'panel'    => 'single_posts_options_panel',
			'priority' => 999,
		)
	)
);
$wp_customize->add_section(
	new Magty_Section_Upsell(
		$wp_customize,
		'magty_section_single_video_format',
		array(
			'title'    => esc_html__( 'Post Format Video', 'magty' ),
			'panel'    => 'single_posts_options_panel',
			'priority' => 999,
		)
	)
);
$wp_customize->add_section(
	new Magty_Section_Upsell(
		$wp_customize,
		'magty_section_single_audio_format',
		array(
			'title'    => esc_html__( 'Post Format Audio', 'magty' ),
			'panel'    => 'single_posts_options_panel',
			'priority' => 999,
		)
	)
);

// General Options.
$wp_customize->add_section(
	new Magty_Section_Features_List(
		$wp_customize,
		'theme_general_features',
		array(
			'title'         => esc_html__( 'More Options on Magty Pro!', 'magty' ),
			'features_list' => array(
				esc_html__( 'Dark mode options', 'magty' ),
				esc_html__( 'Menu badge options', 'magty' ),
				esc_html__( '20+ Preloader options', 'magty' ),
				esc_html__( 'More color options', 'magty' ),
				esc_html__( '404 page options', 'magty' ),
				esc_html__( '... and many other premium features', 'magty' ),
			),
			'panel'         => 'general_options_panel',
			'priority'      => 999,
		)
	)
);

// Header Options.
$wp_customize->add_section(
	new Magty_Section_Features_List(
		$wp_customize,
		'theme_header_features',
		array(
			'title'         => esc_html__( 'More Options on Magty Pro!', 'magty' ),
			'features_list' => array(
				esc_html__( 'More topbar options', 'magty' ),
				esc_html__( '5+ header styles', 'magty' ),
				esc_html__( 'Header margin & padding controls', 'magty' ),
				esc_html__( 'Dark mode options', 'magty' ),
				esc_html__( 'More color options', 'magty' ),
				esc_html__( '... and many other premium features', 'magty' ),
			),
			'panel'         => 'header_options_panel',
			'priority'      => 999,
		)
	)
);

// Footer Options.
$wp_customize->add_section(
	new Magty_Section_Features_List(
		$wp_customize,
		'theme_footer_features',
		array(
			'title'         => esc_html__( 'More Options on Magty Pro!', 'magty' ),
			'features_list' => array(
				esc_html__( '13+ footer layouts', 'magty' ),
				esc_html__( '40+ footer shape dividers', 'magty' ),
				esc_html__( 'Footer margin & padding controls', 'magty' ),
				esc_html__( 'More sub footer styles', 'magty' ),
				esc_html__( '40+ sub footer shape dividers', 'magty' ),
				esc_html__( 'Sub footer margin & padding controls', 'magty' ),
				esc_html__( '9+ scroll to top icons', 'magty' ),
				esc_html__( 'More scroll to top options', 'magty' ),
				esc_html__( 'Dark mode options', 'magty' ),
				esc_html__( 'More color options', 'magty' ),
				esc_html__( '... and many other premium features', 'magty' ),
			),
			'panel'         => 'footer_options_panel',
			'priority'      => 999,
		)
	)
);

// Front Page.
$wp_customize->add_section(
	new Magty_Section_Features_List(
		$wp_customize,
		'theme_widget_features_home',
		array(
			'title'             => esc_html__( 'Over 16+ Widgets', 'magty' ),
			'description'       => sprintf( __( 'Along with the above sections, this theme comes with wide range of widgets that you can combine in any number and sequences and place in over 10+ widgetareas to build your unique website. <br/> <br/> Go to <a href="%s" target="_blank">widgets</a>.', 'magty' ), esc_url( admin_url( 'widgets.php' ) ) ),
			'features_list'     => array(
				esc_html__( 'Ads Code', 'magty' ),
				esc_html__( 'Adress Info ( 2+ Styles )', 'magty' ),
				esc_html__( 'Author Info ( 3+ Styles )', 'magty' ),
				esc_html__( 'Call To Action ( 4+ Styles )', 'magty' ),
				esc_html__( 'Grid Posts ( Upto 5 Columns )', 'magty' ),
				esc_html__( 'Heading ( 10+ Styles )', 'magty' ),
				esc_html__( 'List Posts ( 11+ Styles )', 'magty' ),
				esc_html__( 'Mailchimp/Newsletter ( 3+ Styles )', 'magty' ),
				esc_html__( 'Popular Posts ( 2+ Styles )', 'magty' ),
				esc_html__( 'Categories Grid ( 4+ Styles )', 'magty' ),
				esc_html__( 'Posts Overlay Grid ( 7+ Styles )', 'magty' ),
				esc_html__( 'Posts slider ( 2+ Styles )', 'magty' ),
				esc_html__( 'Posts Carousel ( 2+ Styles )', 'magty' ),
				esc_html__( 'Single Column Posts', 'magty' ),
				esc_html__( 'Tab Posts ( 3+ Styles )', 'magty' ),
				esc_html__( 'Social Menu ( 4+ Styles )', 'magty' ),
			),
			'is_upsell_feature' => false,
			'panel'             => 'theme_home_option_panel',
			'priority'          => 999,
		)
	)
);

$wp_customize->add_section(
	new Magty_Section_Features_List(
		$wp_customize,
		'theme_home_features',
		array(
			'title'         => esc_html__( 'More Options on Magty Pro!', 'magty' ),
			'features_list' => array(
				esc_html__( '4+ home slider style', 'magty' ),
				esc_html__( '4+ home carousel style', 'magty' ),
				esc_html__( '2+ slider thumbnail style', 'magty' ),
				esc_html__( '5+ ticker styles', 'magty' ),
				esc_html__( 'More settings for home sections', 'magty' ),
				esc_html__( '6+ extra widgets', 'magty' ),
				esc_html__( 'Dark mode options', 'magty' ),
				esc_html__( '... and many other premium features', 'magty' ),
			),
			'panel'             => 'theme_home_option_panel',
			'priority'          => 999,
		)
	)
);

// Typography Options.
$wp_customize->add_section(
	new Magty_Section_Features_List(
		$wp_customize,
		'theme_typography_features',
		array(
			'title'         => esc_html__( 'More Options on Magty Pro!', 'magty' ),
			'features_list' => array(
				esc_html__( 'Line heights', 'magty' ),
				esc_html__( 'Letter spacings', 'magty' ),
				esc_html__( 'Menu font sizes', 'magty' ),
				esc_html__( '(H1-H6) font sizes', 'magty' ),
				esc_html__( 'Body font sizes', 'magty' ),
				esc_html__( '... and many other premium features', 'magty' ),
			),
			'panel'         => 'typography_options_panel',
			'priority'      => 999,
		)
	)
);

// Archive Options.
$wp_customize->add_section(
	new Magty_Section_Features_List(
		$wp_customize,
		'theme_archive_features',
		array(
			'title'         => esc_html__( 'More Options on Magty Pro!', 'magty' ),
			'features_list' => array(
				esc_html__( '9+ archive styles', 'magty' ),
				esc_html__( 'Read time options', 'magty' ),
				esc_html__( 'More category styles', 'magty' ),
				esc_html__( 'More read more styles', 'magty' ),
				esc_html__( '... and many other premium features', 'magty' ),
			),
			'panel'         => 'blog_options_panel',
			'priority'      => 999,
		)
	)
);

// Single Options.
$wp_customize->add_section(
	new Magty_Section_Features_List(
		$wp_customize,
		'theme_single_features',
		array(
			'title'         => esc_html__( 'More Options on Magty Pro!', 'magty' ),
			'features_list' => array(
				esc_html__( '6+ single styles', 'magty' ),
				esc_html__( '5+ post navigation styles', 'magty' ),
				esc_html__( 'Floating related posts', 'magty' ),
				esc_html__( 'Extended gallery formats', 'magty' ),
				esc_html__( 'Extended audio formats', 'magty' ),
				esc_html__( 'Extended video formats', 'magty' ),
				esc_html__( 'Author box social links', 'magty' ),
				esc_html__( 'Post subtitle options', 'magty' ),
				esc_html__( 'Social share options', 'magty' ),
				esc_html__( '8+ custom social share positions', 'magty' ),
				esc_html__( '... and many other premium features', 'magty' ),
			),
			'panel'         => 'single_posts_options_panel',
			'priority'      => 999,
		)
	)
);

// Widgetarea Options.
$wp_customize->add_section(
	new Magty_Section_Features_List(
		$wp_customize,
		'theme_widgetarea_features',
		array(
			'title'         => esc_html__( 'More Options on Magty Pro!', 'magty' ),
			'features_list' => array(
				esc_html__( '40+ widgetareas shape dividers', 'magty' ),
				esc_html__( '20+ widgetareas title styles', 'magty' ),
				esc_html__( 'Widgetareas margin & padding', 'magty' ),
				esc_html__( 'Widgetareas visibilty options', 'magty' ),
				esc_html__( 'Dark mode options', 'magty' ),
				esc_html__( 'More color options', 'magty' ),
				esc_html__( '... and many other premium features', 'magty' ),
			),
			'panel'         => 'widgetareas_options_panel',
			'priority'      => 999,
		)
	)
);

$sections = array(

	// Widgetareas.
	'below_header'        => array(
		'section' => 'below_header_widgetarea_options',
	),
	'before_home_columns' => array(
		'section' => 'before_home_columns_widgetarea_options',
	),
	'home_columns'        => array(
		'section' => 'home_columns_widgetarea_options',
	),
	'above_home'          => array(
		'section' => 'above_home_widgetarea_options',
	),
	'below_home'          => array(
		'section' => 'below_home_widgetarea_options',
	),
	'above_footer'        => array(
		'section' => 'above_footer_widgetarea_options',
	),
	'above_footer_nc'     => array(
		'section' => 'above_footer_nc_widgetarea_options',
	),
	'below_footer'        => array(
		'section' => 'below_footer_widgetarea_options',
	),
	'below_footer_nc'     => array(
		'section' => 'below_footer_nc_widgetarea_options',
	),

	// Home sections.
	'trending_section'    => array(
		'section'         => 'home_page_trending_posts_options',
		'active_callback' => 'magty_is_trending_posts_enabled',
	),
	'banner_section'      => array(
		'section'         => 'home_banner_options',
		'active_callback' => 'magty_is_home_banner_enabled',
	),
);

foreach ( $sections as $position => $section_options ) {

	$key = $position . '_feature_list';

	$control_args = array(
		'label'         => esc_html__( 'More Options on Magty Pro!', 'magty' ),
		'section'       => $section_options['section'],
		'features_list' => array(
			esc_html__( '20+ title styles', 'magty' ),
			esc_html__( 'Section animation options', 'magty' ),
			esc_html__( '40+ top section divider shapes', 'magty' ),
			esc_html__( '40+ bottom section divider shapes ', 'magty' ),
			esc_html__( 'Padding controls for desktop, tablet & mobile', 'magty' ),
			esc_html__( 'Margin controls for desktop, tablet & mobile', 'magty' ),
			esc_html__( 'Hide/show on desktop, tablet or mobile', 'magty' ),
			esc_html__( 'Background image with options like position, size, repeat, overlay, fixed background, etc', 'magty' ),
			esc_html__( '... and many other premium features', 'magty' ),
		),
		'priority'      => 999,
	);

	if ( isset( $section_options['active_callback'] ) ) {
		$control_args['active_callback'] = $section_options['active_callback'];
	}

	$wp_customize->add_setting(
		$key,
		array(
			'sanitize_callback' => 'wp_filter_nohtml_kses',
		)
	);
	$wp_customize->add_control(
		new Magty_Features_List(
			$wp_customize,
			$key,
			$control_args
		)
	);
}
