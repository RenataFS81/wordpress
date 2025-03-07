<?php
$wp_customize->remove_setting( 'display_header_text' );
$wp_customize->remove_control( 'display_header_text' );

$wp_customize->add_setting(
	'hide_title',
	array(
		'default'           => $theme_options_defaults['hide_title'],
		'sanitize_callback' => 'magty_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Magty_Toggle_Control(
		$wp_customize,
		'hide_title',
		array(
			'label'    => __( 'Hide Site Title', 'magty' ),
			'section'  => 'title_tagline',
			'priority' => 10,
		)
	)
);

$wp_customize->add_setting(
	'hide_tagline',
	array(
		'default'           => $theme_options_defaults['hide_tagline'],
		'sanitize_callback' => 'magty_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Magty_Toggle_Control(
		$wp_customize,
		'hide_tagline',
		array(
			'label'    => __( 'Hide Tagline', 'magty' ),
			'section'  => 'title_tagline',
			'priority' => 20,
		)
	)
);

// Tagline Style
$wp_customize->add_setting(
	'site_tagline_style',
	array(
		'default'           => $theme_options_defaults['site_tagline_style'],
		'sanitize_callback' => 'magty_sanitize_select',
	)
);
$wp_customize->add_control(
	'site_tagline_style',
	array(
		'label'    => __( 'Site Tagline Style', 'magty' ),
		'section'  => 'title_tagline',
		'type'     => 'select',
		'choices'  => array(
			'style_1' => __( 'Style 1', 'magty' ),
			'style_2' => __( 'Style 2', 'magty' ),
			'style_3' => __( 'Style 3', 'magty' ),
			'style_4' => __( 'Style 4', 'magty' ),
		),
		'priority' => 30,
	)
);

/*Site title text size*/
$wp_customize->add_setting(
	'site_title_font_size_desktop',
	array(
		'default'           => $theme_options_defaults['site_title_font_size_desktop'],
		'sanitize_callback' => 'absint',
	)
);
$wp_customize->add_control(
	'site_title_font_size_desktop',
	array(
		'label'       => __( 'Site Title Text Size', 'magty' ),
		'description' => __( '( Default: 42px ) Changes\'re only applicable to desktop version.', 'magty' ),
		'section'     => 'title_tagline',
		'type'        => 'number',
		'input_attrs' => array(
			'min'   => 1,
			'max'   => 100,
			'style' => 'width: 150px;',
		),
		'priority'    => 40,
	)
);
$wp_customize->add_setting(
	'site_tagline_font_size_desktop',
	array(
		'default'           => $theme_options_defaults['site_tagline_font_size_desktop'],
		'sanitize_callback' => 'absint',
	)
);
$wp_customize->add_control(
	'site_tagline_font_size_desktop',
	array(
		'label'       => __( 'Site Tagline Text Size', 'magty' ),
		'description' => __( '( Default: 16px ) Changes\'re only applicable to desktop version.', 'magty' ),
		'section'     => 'title_tagline',
		'type'        => 'number',
		'input_attrs' => array(
			'min'   => 1,
			'max'   => 100,
			'style' => 'width: 150px;',
		),
		'priority'    => 50,
	)
);
