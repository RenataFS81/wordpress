<?php

$wp_customize->add_section(
	'header_button_one_options',
	array(
		'title' => __( 'Header Button Elements', 'magty' ),
		'panel' => 'header_options_panel',
	)
);

$wp_customize->add_setting(
	'header_btn_one_label',
	array(
		'default'           => $theme_options_defaults['header_btn_one_label'],
		'sanitize_callback' => 'wp_filter_nohtml_kses',
	)
);
$wp_customize->add_control(
	'header_btn_one_label',
	array(
		'label'    => __( 'Button Label', 'magty' ),
		'section'  => 'header_button_one_options',
		'type'     => 'text',
		'priority' => 10,
	)
);

$wp_customize->add_setting(
	'header_btn_one_link',
	array(
		'default'           => $theme_options_defaults['header_btn_one_link'],
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	'header_btn_one_link',
	array(
		'label'    => __( 'Button Link', 'magty' ),
		'section'  => 'header_button_one_options',
		'type'     => 'text',
		'priority' => 20,
	)
);

$wp_customize->add_setting(
	'header_btn_one_class',
	array(
		'default'           => $theme_options_defaults['header_btn_one_class'],
		'sanitize_callback' => 'wp_filter_nohtml_kses',
	)
);
$wp_customize->add_control(
	'header_btn_one_class',
	array(
		'label'    => __( 'Button Class', 'magty' ),
		'section'  => 'header_button_one_options',
		'type'     => 'text',
		'priority' => 30,
	)
);

$wp_customize->add_setting(
	'header_btn_one_display_style',
	array(
		'default'           => $theme_options_defaults['header_btn_one_display_style'],
		'sanitize_callback' => 'magty_sanitize_select',
	)
);
$wp_customize->add_control(
	'header_btn_one_display_style',
	array(
		'label'    => __( 'Button Display Style', 'magty' ),
		'section'  => 'header_button_one_options',
		'type'     => 'select',
		'choices'  => magty_get_read_more_styles(),
		'priority' => 40,
	)
);

$wp_customize->add_setting(
	'header_btn_one_icon',
	array(
		'default'           => $theme_options_defaults['header_btn_one_icon'],
		'sanitize_callback' => 'magty_sanitize_radio',
	)
);
$wp_customize->add_control(
	new Magty_Radio_Image_Control(
		$wp_customize,
		'header_btn_one_icon',
		array(
			'label'    => __( 'Button Icon', 'magty' ),
			'section'  => 'header_button_one_options',
			'choices'  => magty_get_header_btn_icons(),
			'priority' => 50,
		)
	)
);

$wp_customize->add_setting(
	'header_btn_one_new_tab',
	array(
		'default'           => $theme_options_defaults['header_btn_one_new_tab'],
		'sanitize_callback' => 'magty_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Magty_Toggle_Control(
		$wp_customize,
		'header_btn_one_new_tab',
		array(
			'label'    => __( 'Open in New Tab', 'magty' ),
			'section'  => 'header_button_one_options',
			'priority' => 60,
		)
	)
);

$wp_customize->add_setting(
	'header_btn_one_icon_only',
	array(
		'default'           => $theme_options_defaults['header_btn_one_icon_only'],
		'sanitize_callback' => 'magty_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Magty_Toggle_Control(
		$wp_customize,
		'header_btn_one_icon_only',
		array(
			'label'    => __( 'Show Icon Only', 'magty' ),
			'section'  => 'header_button_one_options',
			'priority' => 70,
		)
	)
);

$wp_customize->add_setting(
	'header_btn_one_icon_before_label',
	array(
		'default'           => $theme_options_defaults['header_btn_one_icon_before_label'],
		'sanitize_callback' => 'magty_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Magty_Toggle_Control(
		$wp_customize,
		'header_btn_one_icon_before_label',
		array(
			'label'    => __( 'Show Icon Before Label', 'magty' ),
			'section'  => 'header_button_one_options',
			'priority' => 80,
		)
	)
);

$wp_customize->add_setting(
	'header_btn_one_responsive_style',
	array(
		'default'           => $theme_options_defaults['header_btn_one_responsive_style'],
		'sanitize_callback' => 'magty_sanitize_select',
	)
);
$wp_customize->add_control(
	'header_btn_one_responsive_style',
	array(
		'label'    => __( 'Button on Responsive', 'magty' ),
		'section'  => 'header_button_one_options',
		'type'     => 'select',
		'choices'  => array(
			'hidden'    => __( 'Hidden', 'magty' ),
			'icon_only' => __( 'Icon Only', 'magty' ),
			'default'   => __( 'Default', 'magty' ),
		),
		'priority' => 90,
	)
);

$wp_customize->add_setting(
	'header_btn_one_icon_gap',
	array(
		'default'           => $theme_options_defaults['header_btn_one_icon_gap'],
		'sanitize_callback' => 'magty_sanitize_float',
	)
);
$wp_customize->add_control(
	'header_btn_one_icon_gap',
	array(
		'label'       => __( 'Icon Gap (In px)', 'magty' ),
		'section'     => 'header_button_one_options',
		'type'        => 'number',
		'input_attrs' => array(
			'min'   => 0,
			'max'   => 20,
			'step'  => 1,
			'style' => 'width: 150px;',
		),
		'priority'    => 100,
	)
);

$wp_customize->add_setting(
	'header_btn_one_text_color',
	array(
		'default'           => $theme_options_defaults['header_btn_one_text_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'header_btn_one_text_color',
		array(
			'label'    => __( 'Text Color', 'magty' ),
			'section'  => 'header_button_one_options',
			'type'     => 'color',
			'priority' => 110,
		)
	)
);

$wp_customize->add_setting(
	'header_btn_one_text_hover_color',
	array(
		'default'           => $theme_options_defaults['header_btn_one_text_hover_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'header_btn_one_text_hover_color',
		array(
			'label'    => __( 'Text Hover Color', 'magty' ),
			'section'  => 'header_button_one_options',
			'type'     => 'color',
			'priority' => 120,
		)
	)
);

$wp_customize->add_setting(
	'header_btn_one_bg_color',
	array(
		'default'           => $theme_options_defaults['header_btn_one_bg_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'header_btn_one_bg_color',
		array(
			'label'    => __( 'Background Color', 'magty' ),
			'section'  => 'header_button_one_options',
			'type'     => 'color',
			'priority' => 130,
		)
	)
);

$wp_customize->add_setting(
	'header_btn_one_bg_hover_color',
	array(
		'default'           => $theme_options_defaults['header_btn_one_bg_hover_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'header_btn_one_bg_hover_color',
		array(
			'label'    => __( 'Background Hover Color', 'magty' ),
			'section'  => 'header_button_one_options',
			'type'     => 'color',
			'priority' => 140,
		)
	)
);

$wp_customize->add_setting(
	'header_btn_one_border_color',
	array(
		'default'           => $theme_options_defaults['header_btn_one_border_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'header_btn_one_border_color',
		array(
			'label'    => __( 'Border Color', 'magty' ),
			'section'  => 'header_button_one_options',
			'type'     => 'color',
			'priority' => 150,
		)
	)
);

$wp_customize->add_setting(
	'header_btn_one_border_hover_color',
	array(
		'default'           => $theme_options_defaults['header_btn_one_border_hover_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'header_btn_one_border_hover_color',
		array(
			'label'    => __( 'Border Hover Color', 'magty' ),
			'section'  => 'header_button_one_options',
			'type'     => 'color',
			'priority' => 160,
		)
	)
);

$wp_customize->add_setting(
	'header_btn_one_icon_color',
	array(
		'default'           => $theme_options_defaults['header_btn_one_icon_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'header_btn_one_icon_color',
		array(
			'label'    => __( 'Icon Color', 'magty' ),
			'section'  => 'header_button_one_options',
			'type'     => 'color',
			'priority' => 170,
		)
	)
);

$wp_customize->add_setting(
	'header_btn_one_icon_hover_color',
	array(
		'default'           => $theme_options_defaults['header_btn_one_icon_hover_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'header_btn_one_icon_hover_color',
		array(
			'label'    => __( 'Icon Hover Color', 'magty' ),
			'section'  => 'header_button_one_options',
			'type'     => 'color',
			'priority' => 180,
		)
	)
);
