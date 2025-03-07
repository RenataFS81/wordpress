<?php
/**
 * All settings related to main banner post.
 *
 * @package MagNine
 */
$wp_customize->add_section(
	'main_banner_post',
	array(
		'title' => esc_html__( 'Main Banner Section', 'magnine' ),
		'panel' => 'front_page_theme_options_panel',
	)
);

$wp_customize->add_setting(
    'magnine_options[enable_main_banner_section]',
    array(
        'default'           => $magnine_default['enable_main_banner_section'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_main_banner_section]',
    array(
        'label'       => esc_html__( 'Enable Main Banner', 'magnine' ),
        'section'     => 'main_banner_post',
        'type'        => 'checkbox',
    )
);



$wp_customize->add_setting(
    'magnine_section_seperator_banner_column_1',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new Magnine_Seperator_Control(
        $wp_customize,
        'magnine_section_seperator_banner_column_1',
        array(
            'label'         => esc_html__( 'Banner Column - 1', 'magnine' ),
            'settings' => 'magnine_section_seperator_banner_column_1',
            'section' => 'main_banner_post',
        )
    )
);


$wp_customize->add_setting(
    'magnine_options[banner_grid_post_col_1_category]',
    array(
        'default'           => $magnine_default['banner_grid_post_col_1_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    new Magnine_Dropdown_Taxonomies_Control(
        $wp_customize,
        'magnine_options[banner_grid_post_col_1_category]',
        array(
            'label'           => __( 'Choose Grid Category Column - 1', 'magnine' ),
            'description'     => __( 'Leave Empty if you don\'t want the posts to be category specific', 'magnine' ),
            'section'         => 'main_banner_post',
        )
    )
);




$wp_customize->add_setting(
    'magnine_section_seperator_banner_column_2',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new Magnine_Seperator_Control(
        $wp_customize,
        'magnine_section_seperator_banner_column_2',
        array(
            'label'         => esc_html__( 'Banner Column - 2', 'magnine' ),
            'settings' => 'magnine_section_seperator_banner_column_2',
            'section' => 'main_banner_post',
        )
    )
);


$wp_customize->add_setting(
    'magnine_options[banner_grid_post_category]',
    array(
        'default'           => $magnine_default['banner_grid_post_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    new Magnine_Dropdown_Taxonomies_Control(
        $wp_customize,
        'magnine_options[banner_grid_post_category]',
        array(
            'label'           => __( 'Choose Grid Category', 'magnine' ),
            'description'     => __( 'Leave Empty if you don\'t want the posts to be category specific', 'magnine' ),
            'section'         => 'main_banner_post',
        )
    )
);


$wp_customize->add_setting(
    'magnine_section_seperator_banner_column_3',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new Magnine_Seperator_Control(
        $wp_customize,
        'magnine_section_seperator_banner_column_3',
        array(
            'label'         => esc_html__( 'Banner Column - 3', 'magnine' ),
            'settings' => 'magnine_section_seperator_banner_column_3',
            'section' => 'main_banner_post',
        )
    )
);

$wp_customize->add_setting(
    'magnine_options[banner_list_post_category]',
    array(
        'default'           => $magnine_default['banner_list_post_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    new Magnine_Dropdown_Taxonomies_Control(
        $wp_customize,
        'magnine_options[banner_list_post_category]',
        array(
            'label'           => __( 'Choose List Post Category', 'magnine' ),
            'description'     => __( 'Leave Empty if you don\'t want the posts to be category specific', 'magnine' ),
            'section'         => 'main_banner_post',
        )
    )
);





$wp_customize->add_setting(
    'magnine_section_seperator_banner',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new Magnine_Seperator_Control(
        $wp_customize,
        'magnine_section_seperator_banner',
        array(
            'label'         => esc_html__( 'Banner Section Meta', 'magnine' ),
            'settings' => 'magnine_section_seperator_banner',
            'section' => 'main_banner_post',
        )
    )
);


$wp_customize->add_setting(
    'magnine_options[enable_banner_author_meta]',
    array(
        'default' => $magnine_default['enable_banner_author_meta'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_banner_author_meta]',
    array(
        'label' => esc_html__('Display Author Meta', 'magnine'),
        'section' => 'main_banner_post',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'magnine_options[select_banner_author_meta]',
    array(
        'default' => $magnine_default['select_banner_author_meta'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_banner_author_meta]',
    array(
        'label' => esc_html__('Select Author Meta', 'magnine'),
        'section' => 'main_banner_post',
        'type' => 'select',
        'choices' => magnine_author_meta(),
    )
);
$wp_customize->add_setting(
    'magnine_options[banner_author_meta_title]',
    array(
        'default' => $magnine_default['banner_author_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[banner_author_meta_title]',
    array(
        'label' => __('Author Meta Text', 'magnine'),
        'section' => 'main_banner_post',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'magnine_options[enable_banner_date_meta]',
    array(
        'default' => $magnine_default['enable_banner_date_meta'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_banner_date_meta]',
    array(
        'label' => esc_html__('Display Published Date', 'magnine'),
        'section' => 'main_banner_post',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'magnine_options[select_banner_date]',
    array(
        'default' => $magnine_default['select_banner_date'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_banner_date]',
    array(
        'label' => esc_html__('Select Date Meta', 'magnine'),
        'section' => 'main_banner_post',
        'type' => 'select',
        'choices' => magnine_date_meta(),
    )
);
$wp_customize->add_setting(
    'magnine_options[select_banner_date_meta_title]',
    array(
        'default' => $magnine_default['select_banner_date_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[select_banner_date_meta_title]',
    array(
        'label' => __('Date Meta Text', 'magnine'),
        'section' => 'main_banner_post',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'magnine_options[select_banner_date_format]',
    array(
        'default' => $magnine_default['select_banner_date_format'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_banner_date_format]',
    array(
        'label' => esc_html__('Select Date Format', 'magnine'),
        'section' => 'main_banner_post',
        'type' => 'select',
        'choices' => magnine_get_date_formats(),
    )
);
$wp_customize->add_setting(
    'magnine_options[enable_banner_category_meta]',
    array(
        'default' => $magnine_default['enable_banner_category_meta'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_banner_category_meta]',
    array(
        'label' => esc_html__('Enable Category Meta', 'magnine'),
        'section' => 'main_banner_post',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'magnine_options[select_banner_number_of_category]',
    array(
        'default' => $magnine_default['select_banner_number_of_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'magnine_options[select_banner_number_of_category]',
    array(
        'label' => __('Number of Category', 'magnine'),
        'section' => 'main_banner_post',
        'type' => 'number',
    )
);
$wp_customize->add_setting(
    'magnine_options[banner_category_label]',
    array(
        'default' => $magnine_default['banner_category_label'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[banner_category_label]',
    array(
        'label' => __('Category Label', 'magnine'),
        'section' => 'main_banner_post',
        'type' => 'text',
    )
);

$wp_customize->add_setting(
    'magnine_options[select_banner_category_color]',
    array(
        'default' => $magnine_default['select_banner_category_color'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_banner_category_color]',
    array(
        'label' => esc_html__('Select Category Color', 'magnine'),
        'section' => 'main_banner_post',
        'type' => 'select',
        'choices' => magnine_category_color(),
    )
);