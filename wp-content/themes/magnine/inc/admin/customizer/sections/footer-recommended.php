<?php
/**
 * All settings related to footer recommended post.
 *
 * @package MagNine
 */
$wp_customize->add_section(
	'footer_recommended_post',
	array(
		'title' => esc_html__( 'Recommended Section', 'magnine' ),
		'panel' => 'front_page_theme_options_panel',
	)
);

$wp_customize->add_setting(
    'magnine_options[enable_recommended_post]',
    array(
        'default'           => $magnine_default['enable_recommended_post'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_recommended_post]',
    array(
        'label'       => esc_html__( 'Enable Recommended Post', 'magnine' ),
        'section'     => 'footer_recommended_post',
        'type'        => 'checkbox',
    )
);


$wp_customize->add_setting(
    'magnine_options[recommended_post_layout]',
    array(
        'default'           => $magnine_default['recommended_post_layout'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'magnine_sanitize_radio'
    )
);


$wp_customize->add_control(
    new Magnine_Custom_Radio_Image_Control(
        $wp_customize,
        'magnine_options[recommended_post_layout]',
        array(
            'label'         => esc_html__( 'Recommended Post Layout', 'magnine' ),
            'section'       => 'footer_recommended_post',
            'choices'       => magnine_get_recommended_post(),
        )
    )
);



$wp_customize->add_setting(
    'magnine_options[recommended_post_title]',
    array(
        'default'           => $magnine_default['recommended_post_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[recommended_post_title]',
    array(
        'label'    => __( 'Recommended Post', 'magnine' ),
        'section'  => 'footer_recommended_post',
        'type'     => 'text',
    )
);

$wp_customize->add_setting(
    'magnine_options[recommended_post_category]',
    array(
        'default'           => $magnine_default['recommended_post_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    new Magnine_Dropdown_Taxonomies_Control(
        $wp_customize,
        'magnine_options[recommended_post_category]',
        array(
            'label'           => __( 'Choose Category', 'magnine' ),
            'description'     => __( 'Leave Empty if you don\'t want the posts to be category specific', 'magnine' ),
            'section'         => 'footer_recommended_post',
        )
    )
);









$wp_customize->add_setting(
    'magnine_options[enable_recommended_post_author_meta]',
    array(
        'default' => $magnine_default['enable_recommended_post_author_meta'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_recommended_post_author_meta]',
    array(
        'label' => esc_html__('Display Author Meta', 'magnine'),
        'section' => 'footer_recommended_post',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'magnine_options[select_recommended_post_author_meta]',
    array(
        'default' => $magnine_default['select_recommended_post_author_meta'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_recommended_post_author_meta]',
    array(
        'label' => esc_html__('Select Author Meta', 'magnine'),
        'section' => 'footer_recommended_post',
        'type' => 'select',
        'choices' => magnine_author_meta(),
    )
);
$wp_customize->add_setting(
    'magnine_options[recommended_post_author_meta_title]',
    array(
        'default' => $magnine_default['recommended_post_author_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[recommended_post_author_meta_title]',
    array(
        'label' => __('Author Meta Text', 'magnine'),
        'section' => 'footer_recommended_post',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'magnine_options[enable_recommended_post_date_meta]',
    array(
        'default' => $magnine_default['enable_recommended_post_date_meta'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_recommended_post_date_meta]',
    array(
        'label' => esc_html__('Display Published Date', 'magnine'),
        'section' => 'footer_recommended_post',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'magnine_options[select_recommended_post_date]',
    array(
        'default' => $magnine_default['select_recommended_post_date'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_recommended_post_date]',
    array(
        'label' => esc_html__('Select Date Meta', 'magnine'),
        'section' => 'footer_recommended_post',
        'type' => 'select',
        'choices' => magnine_date_meta(),
    )
);
$wp_customize->add_setting(
    'magnine_options[select_recommended_post_date_meta_title]',
    array(
        'default' => $magnine_default['select_recommended_post_date_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[select_recommended_post_date_meta_title]',
    array(
        'label' => __('Date Meta Text', 'magnine'),
        'section' => 'footer_recommended_post',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'magnine_options[select_recommended_post_date_format]',
    array(
        'default' => $magnine_default['select_recommended_post_date_format'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_recommended_post_date_format]',
    array(
        'label' => esc_html__('Select Date Format', 'magnine'),
        'section' => 'footer_recommended_post',
        'type' => 'select',
        'choices' => magnine_get_date_formats(),
    )
);
$wp_customize->add_setting(
    'magnine_options[enable_recommended_post_category_meta]',
    array(
        'default' => $magnine_default['enable_recommended_post_category_meta'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_recommended_post_category_meta]',
    array(
        'label' => esc_html__('Enable Category Meta', 'magnine'),
        'section' => 'footer_recommended_post',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'magnine_options[select_recommended_post_number_of_category]',
    array(
        'default' => $magnine_default['select_recommended_post_number_of_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'magnine_options[select_recommended_post_number_of_category]',
    array(
        'label' => __('Number of Category', 'magnine'),
        'section' => 'footer_recommended_post',
        'type' => 'number',
    )
);
$wp_customize->add_setting(
    'magnine_options[recommended_post_category_label]',
    array(
        'default' => $magnine_default['recommended_post_category_label'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[recommended_post_category_label]',
    array(
        'label' => __('Category Label', 'magnine'),
        'section' => 'footer_recommended_post',
        'type' => 'text',
    )
);

$wp_customize->add_setting(
    'magnine_options[select_recommended_post_category_color]',
    array(
        'default' => $magnine_default['select_recommended_post_category_color'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_recommended_post_category_color]',
    array(
        'label' => esc_html__('Select Category Color', 'magnine'),
        'section' => 'footer_recommended_post',
        'type' => 'select',
        'choices' => magnine_category_color(),
    )
);