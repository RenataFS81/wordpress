<?php
$wp_customize->add_section(
    'homepage_slider_banner_option',
    array(
        'title' => __('Carousel Banner', 'magnine'),
        'panel' => 'front_page_theme_options_panel',
    )
);

/* Home Page Layout */
$wp_customize->add_setting(
    'magnine_options[enable_slider_banner_section]',
    array(
        'default' => $magnine_default['enable_slider_banner_section'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_slider_banner_section]',
    array(
        'label' => __('Enable Carousel Banner Section', 'magnine'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'checkbox',
    )
);


$wp_customize->add_setting(
    'magnine_options[title_slider_banner_section]',
    array(
        'default'           => $magnine_default['title_slider_banner_section'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[title_slider_banner_section]',
    array(
        'label'    => __( 'Section Title', 'magnine' ),
        'section'  => 'homepage_slider_banner_option',
        'type'     => 'text',
    )
);

$wp_customize->add_setting(
    'magnine_options[number_of_slider_post]',
    array(
        'default' => $magnine_default['number_of_slider_post'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[number_of_slider_post]',
    array(
        'label' => __('Post In Slider', 'magnine'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'select',
        'choices' => array(
            '3' => __('3', 'magnine'),
            '4' => __('4', 'magnine'),
            '5' => __('5', 'magnine'),
            '6' => __('6', 'magnine'),
        ),
    )
);


$wp_customize->add_setting(
    'magnine_options[banner_section_cat]',
    array(
        'default'           => $magnine_default['banner_section_cat'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    new Magnine_Dropdown_Taxonomies_Control(
        $wp_customize,
        'magnine_options[banner_section_cat]',
        array(
            'label'           => __( 'Choose  Category', 'magnine' ),
            'description'     => __( 'Leave Empty if you don\'t want the posts to be category specific', 'magnine' ),
            'section'         => 'homepage_slider_banner_option',
        )
    )
);


$wp_customize->add_setting(
    'magnine_options[enable_banner_post_description]',
    array(
        'default' => $magnine_default['enable_banner_post_description'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_banner_post_description]',
    array(
        'label' => __('Enable Post Description', 'magnine'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'checkbox',
    )
);


$wp_customize->add_setting(
    'magnine_options[enable_banner_overlay]',
    array(
        'default' => $magnine_default['enable_banner_overlay'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_banner_overlay]',
    array(
        'label' => __('Enable Banner Overlay', 'magnine'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'checkbox',
    )
);


$wp_customize->add_setting(
    'magnine_options[slider_post_content_alignment]',
    array(
        'default' => $magnine_default['slider_post_content_alignment'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[slider_post_content_alignment]',
    array(
        'label' => __('Content Vertical Alignment', 'magnine'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'select',
        'choices' => array(
            'banner-description-top' => __('Vertical alignment top', 'magnine'),
            'banner-description-space' => __('Vertical alignment space between', 'magnine'),
            'banner-description-bottom' => __('Vertical alignment bottom', 'magnine'),
        ),
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
            'label'         => esc_html__( 'Banner Slider Meta', 'magnine' ),
            'settings' => 'magnine_section_seperator_banner',
            'section' => 'homepage_slider_banner_option',
        )
    )
);


$wp_customize->add_setting(
    'magnine_options[enable_banner_slider_author_meta]',
    array(
        'default' => $magnine_default['enable_banner_slider_author_meta'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_banner_slider_author_meta]',
    array(
        'label' => esc_html__('Display Author Meta', 'magnine'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'magnine_options[select_banner_slider_author_meta]',
    array(
        'default' => $magnine_default['select_banner_slider_author_meta'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_banner_slider_author_meta]',
    array(
        'label' => esc_html__('Select Author Meta', 'magnine'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'select',
        'choices' => magnine_author_meta(),
    )
);
$wp_customize->add_setting(
    'magnine_options[banner_slider_author_meta_title]',
    array(
        'default' => $magnine_default['banner_slider_author_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[banner_slider_author_meta_title]',
    array(
        'label' => __('Author Meta Text', 'magnine'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'magnine_options[enable_banner_slider_date_meta]',
    array(
        'default' => $magnine_default['enable_banner_slider_date_meta'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_banner_slider_date_meta]',
    array(
        'label' => esc_html__('Display Published Date', 'magnine'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'magnine_options[select_banner_slider_date]',
    array(
        'default' => $magnine_default['select_banner_slider_date'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_banner_slider_date]',
    array(
        'label' => esc_html__('Select Date Meta', 'magnine'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'select',
        'choices' => magnine_date_meta(),
    )
);
$wp_customize->add_setting(
    'magnine_options[select_banner_slider_date_meta_title]',
    array(
        'default' => $magnine_default['select_banner_slider_date_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[select_banner_slider_date_meta_title]',
    array(
        'label' => __('Date Meta Text', 'magnine'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'magnine_options[select_banner_slider_date_format]',
    array(
        'default' => $magnine_default['select_banner_slider_date_format'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_banner_slider_date_format]',
    array(
        'label' => esc_html__('Select Date Format', 'magnine'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'select',
        'choices' => magnine_get_date_formats(),
    )
);
$wp_customize->add_setting(
    'magnine_options[enable_banner_slider_category_meta]',
    array(
        'default' => $magnine_default['enable_banner_slider_category_meta'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_banner_slider_category_meta]',
    array(
        'label' => esc_html__('Enable Category Meta', 'magnine'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'magnine_options[select_banner_slider_number_of_category]',
    array(
        'default' => $magnine_default['select_banner_slider_number_of_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'magnine_options[select_banner_slider_number_of_category]',
    array(
        'label' => __('Number of Category', 'magnine'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'number',
    )
);
$wp_customize->add_setting(
    'magnine_options[banner_slider_category_label]',
    array(
        'default' => $magnine_default['banner_slider_category_label'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[banner_slider_category_label]',
    array(
        'label' => __('Category Label', 'magnine'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'text',
    )
);

$wp_customize->add_setting(
    'magnine_options[select_banner_slider_category_color]',
    array(
        'default' => $magnine_default['select_banner_slider_category_color'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_banner_slider_category_color]',
    array(
        'label' => esc_html__('Select Category Color', 'magnine'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'select',
        'choices' => magnine_category_color(),
    )
);

/* Home Page Layout */
$wp_customize->add_setting(
    'magnine_options[enable_banner_control_icon]',
    array(
        'default' => $magnine_default['enable_banner_control_icon'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_banner_control_icon]',
    array(
        'label' => __('Enable Slider Control', 'magnine'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'checkbox',
    )
);