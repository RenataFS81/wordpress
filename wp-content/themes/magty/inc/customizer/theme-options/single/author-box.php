<?php
$wp_customize->add_section(
	'single_author_box_options',
	array(
		'title' => __( 'Author Info Box Options', 'magty' ),
		'panel' => 'single_posts_options_panel',
	)
);

$wp_customize->add_setting(
	'show_author_info',
	array(
		'default'           => $theme_options_defaults['show_author_info'],
		'sanitize_callback' => 'magty_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Magty_Toggle_Control(
		$wp_customize,
		'show_author_info',
		array(
			'label'    => __( 'Show Author Info Box', 'magty' ),
			'section'  => 'single_author_box_options',
			'priority' => 10,
		)
	)
);

$wp_customize->add_setting(
	'enable_author_info_bg',
	array(
		'default'           => $theme_options_defaults['enable_author_info_bg'],
		'sanitize_callback' => 'magty_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Magty_Toggle_Control(
		$wp_customize,
		'enable_author_info_bg',
		array(
			'label'           => __( 'Enable Info Box Background', 'magty' ),
			'section'         => 'single_author_box_options',
			'active_callback' => 'magty_is_author_info_enabled',
			'priority'        => 15,
		)
	)
);

$wp_customize->add_setting(
	'author_info_bg_color',
	array(
		'default'           => $theme_options_defaults['author_info_bg_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'author_info_bg_color',
		array(
			'label'           => __( 'Author Info Box Background Color', 'magty' ),
			'section'         => 'single_author_box_options',
			'type'            => 'color',
			'active_callback' => function ( $control ) {
				return (
					magty_is_author_info_enabled( $control )
					&&
					magty_is_author_box_bg_enabled( $control )
				);
			},
			'priority'        => 16,
		)
	)
);

/*Author Info Text.*/
$wp_customize->add_setting(
	'author_info_text',
	array(
		'default'           => $theme_options_defaults['author_info_text'],
		'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control(
	'author_info_text',
	array(
		'label'           => __( 'Author Info Title', 'magty' ),
		'section'         => 'single_author_box_options',
		'type'            => 'text',
		'active_callback' => 'magty_is_author_info_enabled',
		'priority'        => 20,
	)
);

// Author Info Title Style.
$wp_customize->add_setting(
	'author_info_title_style',
	array(
		'default'           => $theme_options_defaults['author_info_title_style'],
		'sanitize_callback' => 'magty_sanitize_select',
	)
);
$wp_customize->add_control(
	'author_info_title_style',
	array(
		'label'           => __( 'Author Info Title Style', 'magty' ),
		'section'         => 'single_author_box_options',
		'type'            => 'select',
		'choices'         => magty_get_title_styles(),
		'active_callback' => 'magty_is_author_info_enabled',
		'priority'        => 30,
	)
);

// Author Info Title Align.
$wp_customize->add_setting(
	'author_info_title_align',
	array(
		'default'           => $theme_options_defaults['author_info_title_align'],
		'sanitize_callback' => 'magty_sanitize_select',
	)
);
$wp_customize->add_control(
	'author_info_title_align',
	array(
		'label'           => __( 'Author Info Title Align', 'magty' ),
		'section'         => 'single_author_box_options',
		'type'            => 'select',
		'choices'         => magty_get_title_alignments(),
		'active_callback' => 'magty_is_author_info_enabled',
		'priority'        => 40,
	)
);

// Author Info Box Style.
$wp_customize->add_setting(
	'author_info_box_style',
	array(
		'default'           => $theme_options_defaults['author_info_box_style'],
		'sanitize_callback' => 'magty_sanitize_select',
	)
);
$wp_customize->add_control(
	'author_info_box_style',
	array(
		'label'           => __( 'Author Info Box Style', 'magty' ),
		'section'         => 'single_author_box_options',
		'type'            => 'select',
		'choices'         => array(
			'style_1' => __( 'Style 1', 'magty' ),
			'style_2' => __( 'Style 2', 'magty' ),
		),
		'active_callback' => 'magty_is_author_info_enabled',
		'priority'        => 50,
	)
);

// Stack on responsive.
$wp_customize->add_setting(
	'stack_author_info_resposive',
	array(
		'default'           => $theme_options_defaults['stack_author_info_resposive'],
		'sanitize_callback' => 'magty_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Magty_Toggle_Control(
		$wp_customize,
		'stack_author_info_resposive',
		array(
			'label'           => __( 'Stack on Responsive', 'magty' ),
			'section'         => 'single_author_box_options',
			'active_callback' => 'magty_is_author_info_enabled',
			'priority'        => 60,
		)
	)
);
