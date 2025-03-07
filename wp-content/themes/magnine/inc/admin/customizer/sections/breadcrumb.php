<?php
$wp_customize->add_section(
	'breadcrumb_options',
	array(
		'title' => __( 'Breadcrumb Options', 'magnine' ),
		'panel' => 'general_options_panel',
	)
);

$wp_customize->add_setting(
    'magnine_options[enable_breadcrumb]',
    array(
        'default'           => $magnine_default['enable_breadcrumb'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_breadcrumb]',
    array(
		'label'    => __( 'Enable Breadcrumb', 'magnine' ),
        'section'     => 'breadcrumb_options',
        'type'        => 'checkbox',
    )
);
