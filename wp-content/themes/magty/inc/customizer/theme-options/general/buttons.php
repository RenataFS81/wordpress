<?php
$wp_customize->add_section(
	'global_buttons_options',
	array(
		'title' => __( 'Buttons Options', 'magty' ),
		'panel' => 'general_options_panel',
	)
);

/*Text Color*/
$wp_customize->add_setting(
	'global_buttons_text_color',
	array(
		'default'           => $theme_options_defaults['global_buttons_text_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'global_buttons_text_color',
		array(
			'label'    => __( 'Text Color', 'magty' ),
			'section'  => 'global_buttons_options',
			'type'     => 'color',
			'priority' => 10,
		)
	)
);

/*Text Hover Color*/
$wp_customize->add_setting(
	'global_buttons_text_hover_color',
	array(
		'default'           => $theme_options_defaults['global_buttons_text_hover_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'global_buttons_text_hover_color',
		array(
			'label'    => __( 'Text Hover Color', 'magty' ),
			'section'  => 'global_buttons_options',
			'type'     => 'color',
			'priority' => 15,
		)
	)
);

/*Background Color*/
$wp_customize->add_setting(
	'global_buttons_bg_color',
	array(
		'default'           => $theme_options_defaults['global_buttons_bg_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'global_buttons_bg_color',
		array(
			'label'    => __( 'Background Color', 'magty' ),
			'section'  => 'global_buttons_options',
			'type'     => 'color',
			'priority' => 20,
		)
	)
);

/*Background Hover Color*/
$wp_customize->add_setting(
	'global_buttons_bg_hover_color',
	array(
		'default'           => $theme_options_defaults['global_buttons_bg_hover_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'global_buttons_bg_hover_color',
		array(
			'label'    => __( 'Background Hover Color', 'magty' ),
			'section'  => 'global_buttons_options',
			'type'     => 'color',
			'priority' => 25,
		)
	)
);

/*Border Color*/
$wp_customize->add_setting(
	'global_buttons_border_color',
	array(
		'default'           => $theme_options_defaults['global_buttons_border_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'global_buttons_border_color',
		array(
			'label'    => __( 'Border Color', 'magty' ),
			'section'  => 'global_buttons_options',
			'type'     => 'color',
			'priority' => 30,
		)
	)
);

/*Border Hover Color*/
$wp_customize->add_setting(
	'global_buttons_border_hover_color',
	array(
		'default'           => $theme_options_defaults['global_buttons_border_hover_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'global_buttons_border_hover_color',
		array(
			'label'    => __( 'Border Hover Color', 'magty' ),
			'section'  => 'global_buttons_options',
			'type'     => 'color',
			'priority' => 40,
		)
	)
);