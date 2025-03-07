<?php
/**
 * All settings related to single.
 *
 * @package MagNine
 */
$wp_customize->add_section(
	'single_options',
	array(
		'title' => esc_html__( 'Single Page Options', 'magnine' ),
		'panel' => 'single_options_panel',
	)
);

$wp_customize->add_setting(
    'magnine_options[enable_single_author_meta]',
    array(
        'default'           => $magnine_default['enable_single_author_meta'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_single_author_meta]',
    array(
        'label'       => esc_html__( 'Show Author Meta', 'magnine' ),
        'section'     => 'single_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'magnine_options[select_single_author_meta]',
    array(
        'default'           => $magnine_default['select_single_author_meta'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_single_author_meta]',
    array(
        'label'         => esc_html__( 'Author Meta Display Options', 'magnine' ),
        'section'     => 'single_options',
        'type'        => 'select',
        'choices'       => magnine_author_meta(),


    )
);

$wp_customize->add_setting(
    'magnine_options[single_author_meta_title]',
    array(
        'default'           => $magnine_default['single_author_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[single_author_meta_title]',
    array(
        'label'    => __( 'Author Meta Text', 'magnine' ),
        'section'  => 'single_options',
        'type'     => 'text',
    )
);

$wp_customize->add_setting(
    'magnine_options[enable_single_date_meta]',
    array(
        'default'           => $magnine_default['enable_single_date_meta'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_single_date_meta]',
    array(
        'label'       => esc_html__( 'Display Published Date', 'magnine' ),
        'section'     => 'single_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'magnine_options[select_single_date]',
    array(
        'default'           => $magnine_default['select_single_date'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_single_date]',
    array(
        'label'         => esc_html__( 'Select Date Meta', 'magnine' ),
        'section'     => 'single_options',
        'type'        => 'select',
        'choices'       => magnine_date_meta(),

    )
);

$wp_customize->add_setting(
    'magnine_options[single_date_meta_title]',
    array(
        'default'           => $magnine_default['single_date_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[single_date_meta_title]',
    array(
        'label'    => __( 'Date Meta Text', 'magnine' ),
        'section'  => 'single_options',
        'type'     => 'text',
    )
);

$wp_customize->add_setting(
    'magnine_options[select_single_date_format]',
    array(
        'default'           => $magnine_default['select_single_date_format'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_single_date_format]',
    array(
        'label'         => esc_html__( 'Select Date Format', 'magnine' ),
        'section'     => 'single_options',
        'type'        => 'select',
        'choices'  		=> magnine_get_date_formats(),
    )
);

$wp_customize->add_setting(
    'magnine_options[enable_single_category_meta]',
    array(
        'default'           => $magnine_default['enable_single_category_meta'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_single_category_meta]',
    array(
        'label'       => esc_html__( 'Enable Single Category Meta', 'magnine' ),
        'section'     => 'single_options',
        'type'        => 'checkbox',
    )
);


$wp_customize->add_setting(
    'magnine_options[single_category_label]',
    array(
        'default'           => $magnine_default['single_category_label'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[single_category_label]',
    array(
        'label'    => __( 'Category Title', 'magnine' ),
        'section'  => 'single_options',
        'type'     => 'text',
    )
);

$wp_customize->add_setting(
    'magnine_options[select_single_category_color]',
    array(
        'default'           => $magnine_default['select_single_category_color'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_single_category_color]',
    array(
        'label'         => esc_html__( 'Select Category Color', 'magnine' ),
        'section'     => 'single_options',
        'type'        => 'select',
        'choices'  		=> magnine_category_color(),

    )
);

$wp_customize->add_setting(
    'magnine_options[enable_single_tag_meta]',
    array(
        'default'           => $magnine_default['enable_single_tag_meta'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_single_tag_meta]',
    array(
        'label'       => esc_html__( 'Enable Tag Meta', 'magnine' ),
        'section'     => 'single_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'magnine_options[enable_single_read_time_meta]',
    array(
        'default'           => $magnine_default['enable_single_read_time_meta'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_single_read_time_meta]',
    array(
        'label'       => esc_html__( 'Enable Read Time', 'magnine' ),
        'section'     => 'single_options',
        'type'        => 'checkbox',
    )
);



$wp_customize->add_setting(
    'magnine_section_seperator_single_5',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new Magnine_Seperator_Control(
        $wp_customize,
        'magnine_section_seperator_single_5',
        array(
            'settings' => 'magnine_section_seperator_single_5',
            'section'       => 'single_options',
        )
    )
);


$wp_customize->add_setting(
    'magnine_options[show_sticky_article_navigation]',
    array(
        'default'           => $magnine_default['show_sticky_article_navigation'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[show_sticky_article_navigation]',
    array(
        'label'    => __( 'Show Sticky Article Navigation', 'magnine' ),
        'section'  => 'single_options',
        'type'     => 'checkbox',
    )
);

/*Show Author Info Box start
*-------------------------------*/
$wp_customize->add_setting(
    'magnine_section_seperator_single_2',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new Magnine_Seperator_Control(
        $wp_customize,
        'magnine_section_seperator_single_2',
        array(
            'settings' => 'magnine_section_seperator_single_2',
            'section'       => 'single_options',
        )
    )
);

$wp_customize->add_setting(
    'magnine_options[show_author_info]',
    array(
        'default'           => $magnine_default['show_author_info'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[show_author_info]',
    array(
        'label'    => __( 'Show Author Info Box', 'magnine' ),
        'section'  => 'single_options',
        'type'     => 'checkbox',
    )
);


$wp_customize->add_section(
    'single_sidebar_options',
    array(
        'title' => esc_html__( 'SideBar Options', 'magnine' ),
        'panel' => 'single_options_panel',
    )
);


$wp_customize->add_setting(
    'single_sidebar_layout_option',
    array(
        'default'           => $magnine_default['single_sidebar_layout_option'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'magnine_sanitize_radio'
    )
);

$wp_customize->add_control(
    new Magnine_Custom_Radio_Image_Control(
        $wp_customize,
        'single_sidebar_layout_option',
        array(
            'label'         => esc_html__( 'Select Sidebar Layout (Single)', 'magnine' ),
            'section'       => 'single_sidebar_options',
            'choices'       => magnine_get_sidebar_layouts(),
        )
    )
);




$wp_customize->add_setting(
    'magnine_options[enable_sidebar_fix_single]',
    array(
        'default'           => $magnine_default['enable_sidebar_fix_single'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_sidebar_fix_single]',
    array(
        'label'    => __( 'Enable Sticky Sidebar', 'magnine' ),
        'section'     => 'single_options_panel',
        'type'        => 'checkbox',
    )
);