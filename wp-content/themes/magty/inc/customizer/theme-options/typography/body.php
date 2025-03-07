<?php

// Add Body section.
$wp_customize->add_section(
	'body_typography_options',
	array(
		'title' => __( 'Body', 'magty' ),
		'panel' => 'typography_options_panel',
	)
);

/*Secondary Font*/
$wp_customize->add_setting(
	'secondary_font',
	array(
		'default'           => $theme_options_defaults['secondary_font'],
		'sanitize_callback' => 'magty_sanitize_special_select',
	)
);
$wp_customize->add_control(
	'secondary_font',
	array(
		'label'    => __( 'Font for body text', 'magty' ),
		'section'  => 'body_typography_options',
		'type'     => 'select',
		'choices'  => magty_get_fonts(),
		'priority' => 10,
	)
);

// Secondary Font Weight
$wp_customize->add_setting(
	'secondary_font_weight',
	array(
		'default'           => $theme_options_defaults['secondary_font_weight'],
		'sanitize_callback' => 'magty_sanitize_select',
	)
);
$wp_customize->add_control(
	'secondary_font_weight',
	array(
		'label'    => __( 'Body Text Font Weight', 'magty' ),
		'section'  => 'body_typography_options',
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
