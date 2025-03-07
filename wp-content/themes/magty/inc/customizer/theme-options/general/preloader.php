<?php
$wp_customize->add_section(
	'preloader_options',
	array(
		'title' => __( 'Preloader Options', 'magty' ),
		'panel' => 'general_options_panel',
	)
);

/*Show Preloader*/
$wp_customize->add_setting(
	'show_preloader',
	array(
		'default'           => $theme_options_defaults['show_preloader'],
		'sanitize_callback' => 'magty_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Magty_Toggle_Control(
		$wp_customize,
		'show_preloader',
		array(
			'label'    => __( 'Show Preloader', 'magty' ),
			'section'  => 'preloader_options',
			'priority' => 10,
		)
	)
);

/*Preloader background Color*/
$wp_customize->add_setting(
	'preloader_bg_color',
	array(
		'default'           => $theme_options_defaults['preloader_bg_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'preloader_bg_color',
		array(
			'label'           => __( 'Preloader Page Background Color', 'magty' ),
			'section'         => 'preloader_options',
			'type'            => 'color',
			'active_callback' => 'magty_is_preloader_enabled',
			'priority'        => 20,
		)
	)
);

// Preloader Color.
$wp_customize->add_setting(
	'preloader_color',
	array(
		'default'           => $theme_options_defaults['preloader_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'preloader_color',
		array(
			'label'           => __( 'Preloader Color', 'magty' ),
			'section'         => 'preloader_options',
			'type'            => 'color',
			'active_callback' => 'magty_is_preloader_enabled',
			'priority'        => 30,
		)
	)
);
