<?php
// Upsell.
$wp_customize->add_section(
	'theme_upsell',
	array(
		'title'    => esc_html__( 'Unlock More Features', 'magnine' ),
		'priority' => 1,
	)
);
$wp_customize->add_setting(
	'theme_pro_features',
	array(
		'sanitize_callback' => '__return_true',
	)
);
$wp_customize->add_control(
	new Magnine_Upsell(
		$wp_customize,
		'theme_pro_features',
		array(
			'section' => 'theme_upsell',
			'type'    => 'upsell',
		)
	)
);

$wp_customize->add_section(
	new Magnine_Section_Features_List(
		$wp_customize,
		'theme_header_features',
		array(
			'title'         => esc_html__( 'More Options on MagNine Pro!', 'magnine' ),
			'features_list' => array(
				esc_html__( 'Dark mode options', 'magnine' ),
				esc_html__( 'Menu badge options', 'magnine' ),
				esc_html__( '17+ Preloader options', 'magnine' ),
				esc_html__( 'More color options', 'magnine' ),
				esc_html__( '404 page options', 'magnine' ),
				esc_html__( '... and many other premium features', 'magnine' ),
			),
			'panel'         => 'header_options_panel',
			'priority'      => 999,
		)
	)
);
