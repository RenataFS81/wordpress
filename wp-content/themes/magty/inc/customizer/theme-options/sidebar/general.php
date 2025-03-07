<?php
$wp_customize->add_section(
	'general_sidebar_options',
	array(
		'title' => __( 'General Sidebar', 'magty' ),
		'panel' => 'theme_sidebar_panel',
	)
);

/* Global Layout*/
$wp_customize->add_setting(
	'global_layout',
	array(
		'default'           => $theme_options_defaults['global_layout'],
		'sanitize_callback' => 'magty_sanitize_radio',
	)
);
$wp_customize->add_control(
	new Magty_Radio_Image_Control(
		$wp_customize,
		'global_layout',
		array(
			'label'    => __( 'General Sidebar Layout', 'magty' ),
			'section'  => 'general_sidebar_options',
			'choices'  => magty_get_general_layouts(),
			'priority' => 10,
		)
	)
);

// Hide Side Bar on Mobile.
$wp_customize->add_setting(
	'hide_global_sidebar_mobile',
	array(
		'default'           => $theme_options_defaults['hide_global_sidebar_mobile'],
		'sanitize_callback' => 'magty_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Magty_Toggle_Control(
		$wp_customize,
		'hide_global_sidebar_mobile',
		array(
			'label'    => __( 'Hide Global Sidebar on Mobile', 'magty' ),
			'section'  => 'general_sidebar_options',
			'priority' => 20,
		)
	)
);

/* Sticky enable/disable */
$wp_customize->add_setting(
	'sticky_sidebar',
	array(
		'default'           => $theme_options_defaults['sticky_sidebar'],
		'sanitize_callback' => 'magty_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Magty_Toggle_Control(
		$wp_customize,
		'sticky_sidebar',
		array(
			'label'       => __( 'Sticky?', 'magty' ),
			'section'     => 'general_sidebar_options',
			'description' => __( 'Check to make it a sticky sidebar.', 'magty' ),
			'priority'    => 30,
		)
	)
);

// Widget Style.
$wp_customize->add_setting(
	'sidebar_widget_style',
	array(
		'default'           => $theme_options_defaults['sidebar_widget_style'],
		'sanitize_callback' => 'magty_sanitize_select',
	)
);
$wp_customize->add_control(
	'sidebar_widget_style',
	array(
		'label'    => __( 'Sidebar Widget Style', 'magty' ),
		'section'  => 'general_sidebar_options',
		'type'     => 'select',
		'choices'  => magty_get_widget_styles_arr(),
		'priority' => 40,
	)
);

/* Sidebar widget heading style */
$wp_customize->add_setting(
	'sidebar_widget_heading_style',
	array(
		'default'           => $theme_options_defaults['sidebar_widget_heading_style'],
		'sanitize_callback' => 'magty_sanitize_select',
	)
);
$wp_customize->add_control(
	'sidebar_widget_heading_style',
	array(
		'label'    => __( 'Sidebar Widget Title Style', 'magty' ),
		'section'  => 'general_sidebar_options',
		'type'     => 'select',
		'choices'  => magty_get_title_styles(),
		'priority' => 50,
	)
);

/* Sidebar widget heading Align */
$wp_customize->add_setting(
	'sidebar_widget_heading_align',
	array(
		'default'           => $theme_options_defaults['sidebar_widget_heading_align'],
		'sanitize_callback' => 'magty_sanitize_select',
	)
);
$wp_customize->add_control(
	'sidebar_widget_heading_align',
	array(
		'label'    => __( 'Sidebar Widget Title Alignment', 'magty' ),
		'section'  => 'general_sidebar_options',
		'type'     => 'select',
		'choices'  => magty_get_title_alignments(),
		'priority' => 60,
	)
);

/* Sidebar border */
$wp_customize->add_setting(
	'global_enable_sidebar_border',
	array(
		'default'           => $theme_options_defaults['global_enable_sidebar_border'],
		'sanitize_callback' => 'magty_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Magty_Toggle_Control(
		$wp_customize,
		'global_enable_sidebar_border',
		array(
			'label'    => __( 'Enable Sidebar Border', 'magty' ),
			'section'  => 'general_sidebar_options',
			'priority' => 70,
		)
	)
);
