<?php
// Must Read Posts Options.
$wp_customize->add_section(
    'home_page_must_read_options',
    array(
        'title' => __('Must Read Section', 'magnine'),
        'panel' => 'front_page_theme_options_panel',
    )
);
$wp_customize->add_setting(
    'magnine_options[enable_must_reads]',
    array(
        'default' => $magnine_default['enable_must_reads'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_must_reads]',
    array(
        'label' => __('Enable Must Read', 'magnine'),
        'section' => 'home_page_must_read_options',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting(
    'magnine_options[must_read_title]',
    array(
        'default'           => $magnine_default['must_read_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[must_read_title]',
    array(
        'label'    => __( 'Section Title', 'magnine' ),
        'section'  => 'main_banner_post',
        'type'     => 'text',
    )
);
// Must Read Posts Category.
$wp_customize->add_setting(
    'magnine_options[must_read_cat]',
    array(
        'default' => $magnine_default['must_read_cat'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    new Magnine_Dropdown_Taxonomies_Control(
        $wp_customize,
        'magnine_options[must_read_cat]',
        array(
            'label' => __('Choose Must Read category', 'magnine'),
            'section' => 'home_page_must_read_options',
        )
    )
);
// No of posts.
$wp_customize->add_setting(
    'magnine_options[no_of_must_reads]',
    array(
        'default' => $magnine_default['no_of_must_reads'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'magnine_options[no_of_must_reads]',
    array(
        'label' => __('Number of Posts', 'magnine'),
        'section' => 'home_page_must_read_options',
        'type' => 'number',
    )
);

// No of posts offset.
$wp_customize->add_setting(
    'magnine_options[must_reads_number_of_post_offsets]',
    array(
        'default' => $magnine_default['must_reads_number_of_post_offsets'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'magnine_options[must_reads_number_of_post_offsets]',
    array(
        'label' => __('Post Offset Number', 'magnine'),
        'section' => 'home_page_must_read_options',
        'type' => 'number',
    )
);

// Posts Orderby.
$wp_customize->add_setting(
    'magnine_options[must_read_orderby]',
    array(
        'default' => $magnine_default['must_read_orderby'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[must_read_orderby]',
    array(
        'label' => __('Orderby', 'magnine'),
        'section' => 'home_page_must_read_options',
        'type' => 'select',
        'choices' => array(
            'date' => __('Date', 'magnine'),
            'id' => __('ID', 'magnine'),
            'title' => __('Title', 'magnine'),
            'rand' => __('Random', 'magnine'),
        ),
    )
);
// Posts Order.
$wp_customize->add_setting(
    'magnine_options[must_read_order]',
    array(
        'default' => $magnine_default['must_read_order'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[must_read_order]',
    array(
        'label' => __('Order', 'magnine'),
        'section' => 'home_page_must_read_options',
        'type' => 'select',
        'choices' => array(
            'asc' => __('ASC', 'magnine'),
            'desc' => __('DESC', 'magnine'),
        ),
    )
);
$wp_customize->add_setting(
    'magnine_options[enable_must_read_author_meta]',
    array(
        'default' => $magnine_default['enable_must_read_author_meta'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_must_read_author_meta]',
    array(
        'label' => esc_html__('Display Author Meta', 'magnine'),
        'section' => 'home_page_must_read_options',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'magnine_options[select_must_read_author_meta]',
    array(
        'default' => $magnine_default['select_must_read_author_meta'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_must_read_author_meta]',
    array(
        'label' => esc_html__('Select Author Meta', 'magnine'),
        'section' => 'home_page_must_read_options',
        'type' => 'select',
        'choices' => magnine_author_meta(),
    )
);
$wp_customize->add_setting(
    'magnine_options[must_read_author_meta_title]',
    array(
        'default' => $magnine_default['must_read_author_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[must_read_author_meta_title]',
    array(
        'label' => __('Author Meta Text', 'magnine'),
        'section' => 'home_page_must_read_options',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'magnine_options[enable_must_read_date_meta]',
    array(
        'default' => $magnine_default['enable_must_read_date_meta'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_must_read_date_meta]',
    array(
        'label' => esc_html__('Display Published Date', 'magnine'),
        'section' => 'home_page_must_read_options',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'magnine_options[select_must_read_date]',
    array(
        'default' => $magnine_default['select_must_read_date'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_must_read_date]',
    array(
        'label' => esc_html__('Select Date Meta', 'magnine'),
        'section' => 'home_page_must_read_options',
        'type' => 'select',
        'choices' => magnine_date_meta(),
    )
);
$wp_customize->add_setting(
    'magnine_options[select_must_read_date_meta_title]',
    array(
        'default' => $magnine_default['select_must_read_date_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[select_must_read_date_meta_title]',
    array(
        'label' => __('Date Meta Text', 'magnine'),
        'section' => 'home_page_must_read_options',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'magnine_options[select_must_read_date_format]',
    array(
        'default' => $magnine_default['select_must_read_date_format'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_must_read_date_format]',
    array(
        'label' => esc_html__('Select Date Format', 'magnine'),
        'section' => 'home_page_must_read_options',
        'type' => 'select',
        'choices' => magnine_get_date_formats(),
    )
);
$wp_customize->add_setting(
    'magnine_options[enable_must_read_category_meta]',
    array(
        'default' => $magnine_default['enable_must_read_category_meta'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_must_read_category_meta]',
    array(
        'label' => esc_html__('Enable Category Meta', 'magnine'),
        'section' => 'home_page_must_read_options',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'magnine_options[select_must_read_number_of_category]',
    array(
        'default' => $magnine_default['select_must_read_number_of_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'magnine_options[select_must_read_number_of_category]',
    array(
        'label' => __('Number of Category', 'magnine'),
        'section' => 'home_page_must_read_options',
        'type' => 'number',
    )
);
$wp_customize->add_setting(
    'magnine_options[must_read_category_label]',
    array(
        'default' => $magnine_default['must_read_category_label'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[must_read_category_label]',
    array(
        'label' => __('Category Label', 'magnine'),
        'section' => 'home_page_must_read_options',
        'type' => 'text',
    )
);

$wp_customize->add_setting(
    'magnine_options[select_must_read_category_color]',
    array(
        'default' => $magnine_default['select_must_read_category_color'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_must_read_category_color]',
    array(
        'label' => esc_html__('Select Category Color', 'magnine'),
        'section' => 'home_page_must_read_options',
        'type' => 'select',
        'choices' => magnine_category_color(),
    )
);
