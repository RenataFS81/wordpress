<?php

$wp_customize->add_section(
	'home_columns_widgetarea_options',
	array(
		'title' => __( 'Home Columns', 'magty' ),
		'panel' => 'widgetareas_options_panel',
	)
);

// Home Columns section background.
$wp_customize->add_setting(
	'home_columns_widgetarea_bg_color',
	array(
		'default'           => $theme_options_defaults['home_columns_widgetarea_bg_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'home_columns_widgetarea_bg_color',
		array(
			'label'    => __( 'Section Background', 'magty' ),
			'section'  => 'home_columns_widgetarea_options',
			'type'     => 'color',
			'priority' => 1,
		)
	)
);

// Column Order.
$wp_customize->add_setting(
	'home_col_order',
	array(
		'default'           => $theme_options_defaults['home_col_order'],
		'sanitize_callback' => 'magty_sanitize_select',
	)
);
$wp_customize->add_control(
	'home_col_order',
	array(
		'label'    => __( 'Columns Order', 'magty' ),
		'section'  => 'home_columns_widgetarea_options',
		'type'     => 'select',
		'choices'  => array(
			'style_1' => __( 'First ( Large ) + Second ( Small )', 'magty' ),
			'style_2' => __( 'Second ( Small ) + First ( Large )', 'magty' ),
		),
		'priority' => 1,
	)
);

// Widget Style.
$wp_customize->add_setting(
	'home_col_one_widgets_style',
	array(
		'default'           => $theme_options_defaults['home_col_one_widgets_style'],
		'sanitize_callback' => 'magty_sanitize_select',
	)
);
$wp_customize->add_control(
	'home_col_one_widgets_style',
	array(
		'label'    => __( 'First Column Widget Style', 'magty' ),
		'section'  => 'home_columns_widgetarea_options',
		'type'     => 'select',
		'choices'  => magty_get_widget_styles_arr(),
		'priority' => 1,
	)
);

/* Home Column One Widgetareas heading style */
$wp_customize->add_setting(
	'home_col_one_widgetarea_heading_style',
	array(
		'default'           => $theme_options_defaults['home_col_one_widgetarea_heading_style'],
		'sanitize_callback' => 'magty_sanitize_select',
	)
);
$wp_customize->add_control(
	'home_col_one_widgetarea_heading_style',
	array(
		'label'    => __( 'First Column Widgets Title Style', 'magty' ),
		'section'  => 'home_columns_widgetarea_options',
		'priority' => 1,
		'type'     => 'select',
		'choices'  => magty_get_title_styles(),
	)
);

/* Home Column One Widgetarea heading Align */
$wp_customize->add_setting(
	'home_col_one_widgetarea_heading_align',
	array(
		'default'           => $theme_options_defaults['home_col_one_widgetarea_heading_align'],
		'sanitize_callback' => 'magty_sanitize_select',
	)
);
$wp_customize->add_control(
	'home_col_one_widgetarea_heading_align',
	array(
		'label'    => __( 'First Column Widgets Title Alignment', 'magty' ),
		'section'  => 'home_columns_widgetarea_options',
		'priority' => 1,
		'type'     => 'select',
		'choices'  => magty_get_title_alignments(),
	)
);

// Widget Style.
$wp_customize->add_setting(
	'home_col_two_widgets_style',
	array(
		'default'           => $theme_options_defaults['home_col_two_widgets_style'],
		'sanitize_callback' => 'magty_sanitize_select',
	)
);
$wp_customize->add_control(
	'home_col_two_widgets_style',
	array(
		'label'    => __( 'Second Column Widget Style', 'magty' ),
		'section'  => 'home_columns_widgetarea_options',
		'type'     => 'select',
		'choices'  => magty_get_widget_styles_arr(),
		'priority' => 1,
	)
);

/* Home Column Two Widgetareas heading style */
$wp_customize->add_setting(
	'home_col_two_widgetarea_heading_style',
	array(
		'default'           => $theme_options_defaults['home_col_two_widgetarea_heading_style'],
		'sanitize_callback' => 'magty_sanitize_select',
	)
);
$wp_customize->add_control(
	'home_col_two_widgetarea_heading_style',
	array(
		'label'    => __( 'Second Column Widgets Title Style', 'magty' ),
		'section'  => 'home_columns_widgetarea_options',
		'priority' => 1,
		'type'     => 'select',
		'choices'  => magty_get_title_styles(),
	)
);

/* Home Column Two Widgetarea heading Align */
$wp_customize->add_setting(
	'home_col_two_widgetarea_heading_align',
	array(
		'default'           => $theme_options_defaults['home_col_two_widgetarea_heading_align'],
		'sanitize_callback' => 'magty_sanitize_select',
	)
);
$wp_customize->add_control(
	'home_col_two_widgetarea_heading_align',
	array(
		'label'    => __( 'Second Column Widgets Title Alignment', 'magty' ),
		'section'  => 'home_columns_widgetarea_options',
		'priority' => 1,
		'type'     => 'select',
		'choices'  => magty_get_title_alignments(),
	)
);

/*Hide Column Two Widgetarea on mobile*/
$wp_customize->add_setting(
	'home_col_two_widgetarea_hide_mobile',
	array(
		'default'           => $theme_options_defaults['home_col_two_widgetarea_hide_mobile'],
		'sanitize_callback' => 'magty_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Magty_Toggle_Control(
		$wp_customize,
		'home_col_two_widgetarea_hide_mobile',
		array(
			'label'    => __( 'Hide Second Column on Mobile', 'magty' ),
			'section'  => 'home_columns_widgetarea_options',
			'priority' => 1,
		)
	)
);