<?php

// Some Header Global Options.
$wp_customize->add_section(
	'header_global_options',
	array(
		'title' => __( 'Header Element Options', 'magty' ),
		'panel' => 'header_options_panel',
	)
);

// Social Links Brand Color.
$wp_customize->add_setting(
	'header_social_links_color_as',
	array(
		'default'           => $theme_options_defaults['header_social_links_color_as'],
		'sanitize_callback' => 'magty_sanitize_select',
	)
);
$wp_customize->add_control(
	'header_social_links_color_as',
	array(
		'label'    => __( 'Social Menu Brand Color', 'magty' ),
		'section'  => 'header_global_options',
		'type'     => 'select',
		'choices'  => array(
			'theme_color' => __( 'Use Theme Color', 'magty' ),
			'brand_color' => __( 'Use Brand Color', 'magty' ),
		),
		'priority' => 10,
	)
);

// Social Icons Color
$wp_customize->add_setting(
	'header_social_links_icons_color',
	array(
		'default'           => $theme_options_defaults['header_social_links_icons_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'header_social_links_icons_color',
		array(
			'label'           => __( 'Social Menu Icons Color', 'magty' ),
			'section'         => 'header_global_options',
			'type'            => 'color',
			'active_callback' => 'magty_is_header_social_icons_theme_color',
			'priority'        => 20,
		)
	)
);

// Social Icons Hover Color
$wp_customize->add_setting(
	'header_social_links_icons_hover_color',
	array(
		'default'           => $theme_options_defaults['header_social_links_icons_hover_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'header_social_links_icons_hover_color',
		array(
			'label'           => __( 'Social Menu Icons Hover Color', 'magty' ),
			'section'         => 'header_global_options',
			'type'            => 'color',
			'active_callback' => 'magty_is_header_social_icons_theme_color',
			'priority'        => 30,
		)
	)
);

// Social Icons Bg Color.
$wp_customize->add_setting(
	'header_social_links_icons_bg_color',
	array(
		'default'           => $theme_options_defaults['header_social_links_icons_bg_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'header_social_links_icons_bg_color',
		array(
			'label'           => __( 'Social Menu Icons Background Color', 'magty' ),
			'section'         => 'header_global_options',
			'type'            => 'color',
			'active_callback' => 'magty_is_header_social_icons_theme_color',
			'priority'        => 35,
		)
	)
);

// Social Icons Bg Hover Color.
$wp_customize->add_setting(
	'header_social_links_icons_hover_bg_color',
	array(
		'default'           => $theme_options_defaults['header_social_links_icons_hover_bg_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'header_social_links_icons_hover_bg_color',
		array(
			'label'           => __( 'Social Menu Icons Hover Background Color', 'magty' ),
			'section'         => 'header_global_options',
			'type'            => 'color',
			'active_callback' => 'magty_is_header_social_icons_theme_color',
			'priority'        => 36,
		)
	)
);

// Social Links Display Style.
$wp_customize->add_setting(
	'header_social_links_display_style',
	array(
		'default'           => $theme_options_defaults['header_social_links_display_style'],
		'sanitize_callback' => 'magty_sanitize_select',
	)
);
$wp_customize->add_control(
	'header_social_links_display_style',
	array(
		'label'    => __( 'Social Menu Display Style', 'magty' ),
		'section'  => 'header_global_options',
		'type'     => 'select',
		'choices'  => magty_get_social_links_styles(),
		'priority' => 40,
	)
);

/*Enable Social menu label*/
$wp_customize->add_setting(
	'enable_header_social_links_label',
	array(
		'default'           => $theme_options_defaults['enable_header_social_links_label'],
		'sanitize_callback' => 'magty_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Magty_Toggle_Control(
		$wp_customize,
		'enable_header_social_links_label',
		array(
			'label'    => __( 'Enable Social Menu Label', 'magty' ),
			'section'  => 'header_global_options',
			'priority' => 50,
		)
	)
);

// Social Menu Label Text.
$wp_customize->add_setting(
	'header_social_links_label_text',
	array(
		'default'           => $theme_options_defaults['header_social_links_label_text'],
		'sanitize_callback' => 'wp_filter_nohtml_kses',
	)
);
$wp_customize->add_control(
	'header_social_links_label_text',
	array(
		'label'       => __( 'Social Menu Label Text', 'magty' ),
		'description' => __( 'Leave empty if you want to use the default text "Follow Us:".', 'magty' ),
		'section'     => 'header_global_options',
		'type'        => 'text',
		'priority'    => 60,
	)
);

// Social Menu Label Color
$wp_customize->add_setting(
	'header_social_links_label_color',
	array(
		'default'           => $theme_options_defaults['header_social_links_label_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'header_social_links_label_color',
		array(
			'label'    => __( 'Social Menu Label Color', 'magty' ),
			'section'  => 'header_global_options',
			'type'     => 'color',
			'priority' => 70,
		)
	)
);

// Search Button Background Color.
$wp_customize->add_setting(
	'header_search_btn_bg_color',
	array(
		'default'           => $theme_options_defaults['header_search_btn_bg_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'header_search_btn_bg_color',
		array(
			'label'    => __( 'Search Form Button Background', 'magty' ),
			'section'  => 'header_global_options',
			'type'     => 'color',
			'priority' => 80,
		)
	)
);
