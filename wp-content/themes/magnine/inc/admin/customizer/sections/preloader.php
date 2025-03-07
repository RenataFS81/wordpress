<?php
/**
 * All settings related to preloader.
 *
 * @package MagNine
 */
$wp_customize->add_section(
	'preloader_options',
	array(
		'title' => esc_html__( 'Preloader Options', 'magnine' ),
		'panel' => 'general_options_panel',
	)
);

$wp_customize->add_setting(
    'magnine_options[enable_preloader_options]',
    array(
        'default'           => $magnine_default['enable_preloader_options'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_preloader_options]',
    array(
        'label'       => esc_html__( 'Enable Preloader Option', 'magnine' ),
        'section'     => 'preloader_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'magnine_options[magnine_preloader_style]',
    array(
        'default'           => $magnine_default['magnine_preloader_style'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[magnine_preloader_style]',
    array(
        'label'         => esc_html__( 'Select Preloader Style', 'magnine' ),
        'section'     => 'preloader_options',
        'type'        => 'select',
        'choices'       => magnine_preloader_style_option(),

    )
);
