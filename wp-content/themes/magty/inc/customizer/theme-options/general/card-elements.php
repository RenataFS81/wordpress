<?php
$wp_customize->add_section(
	'card_element_options',
	array(
		'title' => __( 'Card Element Options', 'magty' ),
		'panel' => 'general_options_panel',
	)
);

/*Card Element Color*/
$wp_customize->add_setting(
	'global_card_element_bg_color',
	array(
		'default'           => $theme_options_defaults['global_card_element_bg_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'global_card_element_bg_color',
		array(
			'label'       => __( 'Card Element Background Color', 'magty' ),
			'description' => __( 'Background color for global elements that have card style. Make sure to check you website after changing this as this will affect all the elements that have card styles.', 'magty' ),
			'section'     => 'card_element_options',
			'type'        => 'color',
			'priority'    => 10,
		)
	)
);

/*Card Element Inverted Color*/
$wp_customize->add_setting(
	'global_card_element_inverted_bg_color',
	array(
		'default'           => $theme_options_defaults['global_card_element_inverted_bg_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'global_card_element_inverted_bg_color',
		array(
			'label'       => __( 'Card Element Background Color For Inverted Color Block', 'magty' ),
			'description' => __( 'Background color for global elements that have card style where the element has inverted color.', 'magty' ),
			'section'     => 'card_element_options',
			'type'        => 'color',
			'priority'    => 20,
		)
	)
);