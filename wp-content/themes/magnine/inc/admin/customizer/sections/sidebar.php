<?php
$wp_customize->add_section(
	'sidebar_options',
	array(
		'title' => esc_html__( 'SideBar Options', 'magnine' ),
		'panel' => 'archive_options_panel',
	)
);

$wp_customize->add_setting(
    'magnine_options[sidebar_layout_option]',
    array(
        'default'           => $magnine_default['sidebar_layout_option'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'magnine_sanitize_radio'
    )
);

$wp_customize->add_control(
    new Magnine_Custom_Radio_Image_Control(
        $wp_customize,
        'magnine_options[sidebar_layout_option]',
        array(
            'label'         => esc_html__( 'Select Sidebar Layout (archive)', 'magnine' ),
            'section'       => 'sidebar_options',
            'choices'       => magnine_get_sidebar_layouts(),
        )
    )
);


$wp_customize->add_setting(
    'magnine_options[single_sidebar_layout_option]',
    array(
        'default'           => $magnine_default['single_sidebar_layout_option'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'magnine_sanitize_radio'
    )
);

$wp_customize->add_control(
    new Magnine_Custom_Radio_Image_Control(
        $wp_customize,
        'magnine_options[single_sidebar_layout_option]',
        array(
            'label'         => esc_html__( 'Select Sidebar Layout (Single)', 'magnine' ),
            'section'       => 'sidebar_options',
            'choices'       => magnine_get_sidebar_layouts(),
        )
    )
);


$wp_customize->add_setting(
    'magnine_options[enable_sidebar_fix_archive]',
    array(
        'default'           => $magnine_default['enable_sidebar_fix_archive'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_sidebar_fix_archive]',
    array(
        'label'    => __( 'Enable Sticky Sidebar', 'magnine' ),
        'section'     => 'sidebar_options',
        'type'        => 'checkbox',
    )
);
