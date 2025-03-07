<?php

$widgets_link = admin_url( 'widgets.php' );

$wp_customize->add_section(
	'sub_footer_options',
	array(
		'title' => __( 'Sub Footer Options', 'magty' ),
		'panel' => 'footer_options_panel',
	)
);

// Sub Footer Theme.
$wp_customize->add_setting(
	'sub_footer_theme',
	array(
		'default'           => $theme_options_defaults['sub_footer_theme'],
		'sanitize_callback' => 'magty_sanitize_select',
	)
);
$wp_customize->add_control(
	'sub_footer_theme',
	array(
		'label'    => __( 'Sub Footer Theme', 'magty' ),
		'section'  => 'sub_footer_options',
		'type'     => 'select',
		'choices'  => array(
			'light' => __( 'Light', 'magty' ),
			'dark'  => __( 'Dark', 'magty' ),
		),
		'priority' => 11,
	)
);

// Light Sub Footer Background Color.
$wp_customize->add_setting(
	'sub_footer_bg_color',
	array(
		'default'           => $theme_options_defaults['sub_footer_bg_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'sub_footer_bg_color',
		array(
			'label'           => __( 'Light Theme Background', 'magty' ),
			'section'         => 'sub_footer_options',
			'type'            => 'color',
			'active_callback' => 'magty_is_light_sub_footer',
			'priority'        => 20,
		)
	)
);

// Dark Sub Footer Background Color.
$wp_customize->add_setting(
	'dark_sub_footer_bg_color',
	array(
		'default'           => $theme_options_defaults['dark_sub_footer_bg_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'dark_sub_footer_bg_color',
		array(
			'label'           => __( 'Dark Theme Background', 'magty' ),
			'section'         => 'sub_footer_options',
			'type'            => 'color',
			'active_callback' => 'magty_is_dark_sub_footer',
			'priority'        => 30,
		)
	)
);

// Enable Border above footer info
$wp_customize->add_setting(
	'enable_border_above_sub_footer',
	array(
		'default'           => $theme_options_defaults['enable_border_above_sub_footer'],
		'sanitize_callback' => 'magty_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Magty_Toggle_Control(
		$wp_customize,
		'enable_border_above_sub_footer',
		array(
			'label'    => __( 'Enable a Border Above Footer Info', 'magty' ),
			'section'  => 'sub_footer_options',
			'priority' => 40,
		)
	)
);

/*Enable copyright*/
$wp_customize->add_setting(
	'enable_copyright',
	array(
		'default'           => $theme_options_defaults['enable_copyright'],
		'sanitize_callback' => 'magty_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Magty_Toggle_Control(
		$wp_customize,
		'enable_copyright',
		array(
			'label'    => __( 'Enable Copyright', 'magty' ),
			'section'  => 'sub_footer_options',
			'priority' => 50,
		)
	)
);

/*Copyright Text.*/
$wp_customize->add_setting(
	'copyright_text',
	array(
		'default'           => $theme_options_defaults['copyright_text'],
		'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control(
	'copyright_text',
	array(
		'label'           => __( 'Copyright Text', 'magty' ),
		'description'     => __( 'Use {{ date }} to get the current date.', 'magty' ),
		'section'         => 'sub_footer_options',
		'type'            => 'text',
		'active_callback' => 'magty_is_copyright_enabled',
		'priority'        => 60,
	)
);

/*Copyright Date Format*/
$wp_customize->add_setting(
	'copyright_date_format',
	array(
		'default'           => $theme_options_defaults['copyright_date_format'],
		'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control(
	'copyright_date_format',
	array(
		'label'           => __( 'Copyright Date Format', 'magty' ),
		'description'     => sprintf(
			wp_kses(
				__( '<a href="%s" target="_blank">Date and Time Formatting Documentation</a>.', 'magty' ),
				array(
					'a' => array(
						'href'   => array(),
						'target' => array(),
					),
				)
			),
			esc_url( 'https://wordpress.org/support/article/formatting-date-and-time' )
		),
		'section'         => 'sub_footer_options',
		'type'            => 'text',
		'active_callback' => 'magty_is_copyright_enabled',
		'priority'        => 70,
	)
);

/*Enable footer credit*/
// $wp_customize->add_setting(
// 	'enable_footer_credit',
// 	array(
// 		'default'           => $theme_options_defaults['enable_footer_credit'],
// 		'sanitize_callback' => 'magty_sanitize_checkbox',
// 	)
// );
// $wp_customize->add_control(
// 	new Magty_Toggle_Control(
// 		$wp_customize,
// 		'enable_footer_credit',
// 		array(
// 			'label'    => __( 'Enable Footer Credit', 'magty' ),
// 			'section'  => 'sub_footer_options',
// 			'type'     => 'checkbox',
// 			'priority' => 80,
// 		)
// 	)
// );

/*Enable Footer Nav*/
$wp_customize->add_setting(
	'enable_footer_nav',
	array(
		'default'           => $theme_options_defaults['enable_footer_nav'],
		'sanitize_callback' => 'magty_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Magty_Toggle_Control(
		$wp_customize,
		'enable_footer_nav',
		array(
			'label'       => __( 'Show Footer Nav Menu', 'magty' ),
			'description' => sprintf( __( 'You can add/edit footer nav menu from <a href="%s">here</a>.', 'magty' ), "javascript:wp.customize.control( 'nav_menu_locations[footer-menu]' ).focus();" ),
			'section'     => 'sub_footer_options',
			'priority'    => 90,
		)
	)
);

/*Enable Footer Social Nav*/
$wp_customize->add_setting(
	'enable_footer_social_nav',
	array(
		'default'           => $theme_options_defaults['enable_footer_social_nav'],
		'sanitize_callback' => 'magty_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Magty_Toggle_Control(
		$wp_customize,
		'enable_footer_social_nav',
		array(
			'label'       => __( 'Show Social Nav Menu in Footer', 'magty' ),
			'description' => sprintf( __( 'You can add/edit social nav menu from <a href="%s">here</a>.', 'magty' ), "javascript:wp.customize.control( 'nav_menu_locations[social-menu]' ).focus();" ),
			'section'     => 'sub_footer_options',
			'priority'    => 100,
		)
	)
);

// Social Links Brand Color.
$wp_customize->add_setting(
	'footer_social_links_color',
	array(
		'default'           => $theme_options_defaults['footer_social_links_color'],
		'sanitize_callback' => 'magty_sanitize_select',
	)
);
$wp_customize->add_control(
	'footer_social_links_color',
	array(
		'label'           => __( 'Social Links Color', 'magty' ),
		'section'         => 'sub_footer_options',
		'type'            => 'select',
		'choices'         => array(
			'theme_color' => __( 'Use Theme Color', 'magty' ),
			'brand_color' => __( 'Use Brand Color', 'magty' ),
		),
		'active_callback' => 'magty_is_footer_social_menu_enabled',
		'priority'        => 110,
	)
);

// Social Links Display Style.
$wp_customize->add_setting(
	'footer_social_links_display_style',
	array(
		'default'           => $theme_options_defaults['footer_social_links_display_style'],
		'sanitize_callback' => 'magty_sanitize_select',
	)
);
$wp_customize->add_control(
	'footer_social_links_display_style',
	array(
		'label'           => __( 'Social Links Display Style', 'magty' ),
		'section'         => 'sub_footer_options',
		'type'            => 'select',
		'choices'         => magty_get_social_links_styles(),
		'active_callback' => 'magty_is_footer_social_menu_enabled',
		'priority'        => 120,
	)
);
