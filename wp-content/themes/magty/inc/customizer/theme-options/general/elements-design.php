<?php
$wp_customize->add_section(
	'global_element_options',
	array(
		'title' => __( 'Global Elements', 'magty' ),
		'panel' => 'general_options_panel',
	)
);

// Border Radius small.
$wp_customize->add_setting(
	'global_border_radius_small',
	array(
		'default'           => $theme_options_defaults['global_border_radius_small'],
		'sanitize_callback' => 'absint',
	)
);
$wp_customize->add_control(
	'global_border_radius_small',
	array(
		'label'       => __( 'Small Border Radius', 'magty' ),
		'description' => __( 'Affects elements like input fiels, buttons, label backgrounds, etc. This affects multiple elements on the website, make sure to check your website after changing this.', 'magty' ),
		'section'     => 'global_element_options',
		'type'        => 'number',
		'input_attrs' => array(
			'min' => 1,
			'max' => 20,
		),
		'priority'    => 10,
	)
);

// Border Radius medium.
$wp_customize->add_setting(
	'global_border_radius_medium',
	array(
		'default'           => $theme_options_defaults['global_border_radius_medium'],
		'sanitize_callback' => 'absint',
	)
);
$wp_customize->add_control(
	'global_border_radius_medium',
	array(
		'label'       => __( 'Medium Border Radius', 'magty' ),
		'description' => __( 'Affects theme supported embeds. This affects multiple elements on the website, make sure to check your website after changing this.', 'magty' ),
		'section'     => 'global_element_options',
		'type'        => 'number',
		'input_attrs' => array(
			'min' => 1,
			'max' => 20,
		),
		'priority'    => 20,
	)
);

// Border Radius large.
$wp_customize->add_setting(
	'global_border_radius_large',
	array(
		'default'           => $theme_options_defaults['global_border_radius_large'],
		'sanitize_callback' => 'absint',
	)
);
$wp_customize->add_control(
	'global_border_radius_large',
	array(
		'label'       => __( 'Large Border Radius', 'magty' ),
		'description' => __( 'Affects theme supported image/post blocks, card layouts, etc. This affects multiple elements on the website, make sure to check your website after changing this.', 'magty' ),
		'section'     => 'global_element_options',
		'type'        => 'number',
		'input_attrs' => array(
			'min' => 1,
			'max' => 20,
		),
		'priority'    => 30,
	)
);
