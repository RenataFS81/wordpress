<?php

// Add Sub Menu section.
$wp_customize->add_section(
	'sub_menu_typography_options',
	array(
		'title' => __( 'Sub Menu', 'magty' ),
		'panel' => 'typography_options_panel',
	)
);

// Sub Menu Font.
$wp_customize->add_setting(
	'sub_menu_font',
	array(
		'default'           => $theme_options_defaults['sub_menu_font'],
		'sanitize_callback' => 'magty_sanitize_special_select',
	)
);
$wp_customize->add_control(
	'sub_menu_font',
	array(
		'label'    => __( 'Sub Menu Font', 'magty' ),
		'section'  => 'sub_menu_typography_options',
		'type'     => 'select',
		'choices'  => magty_get_fonts(),
		'priority' => 10,
	)
);

// Sub Menu Font Weight.
$wp_customize->add_setting(
	'sub_menu_font_weight',
	array(
		'default'           => $theme_options_defaults['sub_menu_font_weight'],
		'sanitize_callback' => 'magty_sanitize_select',
	)
);
$wp_customize->add_control(
	'sub_menu_font_weight',
	array(
		'label'    => __( 'Sub Menu Font Weight', 'magty' ),
		'section'  => 'sub_menu_typography_options',
		'type'     => 'select',
		'choices'  => array(
			'normal'  => 'Normal',
			'bold'    => 'Bold',
			'bolder'  => 'Bolder',
			'lighter' => 'Lighter',
			'100'     => '100',
			'200'     => '200',
			'300'     => '300',
			'400'     => '400',
			'500'     => '500',
			'600'     => '600',
			'700'     => '700',
			'800'     => '800',
			'900'     => '900',
		),
		'priority' => 20,
	)
);
