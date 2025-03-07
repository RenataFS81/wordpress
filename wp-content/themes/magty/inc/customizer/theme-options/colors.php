<?php
/**
 * Color Options added to default color section
 * */

/*Primary Color*/
$wp_customize->add_setting(
	'primary_color',
	array(
		'default'           => $theme_options_defaults['primary_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'primary_color',
		array(
			'label'       => __( 'Primary Color', 'magty' ),
			'description' => __( 'Body text color', 'magty' ),
			'section'     => 'colors',
			'type'        => 'color',
			'priority'    => 11,
		)
	)
);

/*Accent Color*/
$wp_customize->add_setting(
	'accent_color',
	array(
		'default'           => $theme_options_defaults['accent_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'accent_color',
		array(
			'label'       => __( 'Accent Color', 'magty' ),
			'description' => __( 'Unique color for the theme', 'magty' ),
			'section'     => 'colors',
			'type'        => 'color',
			'priority'    => 20,
		)
	)
);

/*Link Color*/
$wp_customize->add_setting(
	'link_color',
	array(
		'default'           => $theme_options_defaults['link_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'link_color',
		array(
			'label'    => __( 'Link Color', 'magty' ),
			'section'  => 'colors',
			'type'     => 'color',
			'priority' => 30,
		)
	)
);

/*Link Hover Color*/
$wp_customize->add_setting(
	'link_color_hover',
	array(
		'default'           => $theme_options_defaults['link_color_hover'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'link_color_hover',
		array(
			'label'    => __( 'Link Color Hover', 'magty' ),
			'section'  => 'colors',
			'type'     => 'color',
			'priority' => 40,
		)
	)
);
