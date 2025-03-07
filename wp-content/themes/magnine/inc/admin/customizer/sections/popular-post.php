<?php
// Popular Posts Options.
$wp_customize->add_section(
    'home_page_popular_post_options',
    array(
        'title' => __('Popular Options', 'magnine'),
        'panel' => 'header_options_panel',
    )
);
$wp_customize->add_setting(
    'magnine_options[enable_popular_posts]',
    array(
        'default' => $magnine_default['enable_popular_posts'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_popular_posts]',
    array(
        'label' => __('Enable Popular Section', 'magnine'),
        'section' => 'home_page_popular_post_options',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting(
    'magnine_options[enable_popular_only_on_frontpage]',
    array(
        'default' => $magnine_default['enable_popular_only_on_frontpage'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_popular_only_on_frontpage]',
    array(
        'label' => __('Display only on the Homepage', 'magnine'),
        'section' => 'home_page_popular_post_options',
        'type' => 'checkbox',
    )
);

// Popular Posts Category.
$wp_customize->add_setting(
    'magnine_options[popular_post_cat]',
    array(
        'default' => $magnine_default['popular_post_cat'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    new Magnine_Dropdown_Taxonomies_Control(
        $wp_customize,
        'magnine_options[popular_post_cat]',
        array(
            'label' => __('Choose Category', 'magnine'),
            'section' => 'home_page_popular_post_options',
        )
    )
);
// No of posts.
$wp_customize->add_setting(
    'magnine_options[no_of_popular_posts]',
    array(
        'default' => $magnine_default['no_of_popular_posts'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'magnine_options[no_of_popular_posts]',
    array(
        'label' => __('Number of Posts', 'magnine'),
        'section' => 'home_page_popular_post_options',
        'type' => 'number',
    )
);

// No of posts offset.
$wp_customize->add_setting(
    'magnine_options[popular_posts_number_of_post_offsets]',
    array(
        'default' => $magnine_default['popular_posts_number_of_post_offsets'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'magnine_options[popular_posts_number_of_post_offsets]',
    array(
        'label' => __('Post Offset Number', 'magnine'),
        'section' => 'home_page_popular_post_options',
        'type' => 'number',
    )
);


// Posts Orderby.
$wp_customize->add_setting(
    'magnine_options[popular_post_orderby]',
    array(
        'default' => $magnine_default['popular_post_orderby'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[popular_post_orderby]',
    array(
        'label' => __('Orderby', 'magnine'),
        'section' => 'home_page_popular_post_options',
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
    'magnine_options[popular_post_order]',
    array(
        'default' => $magnine_default['popular_post_order'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[popular_post_order]',
    array(
        'label' => __('Order', 'magnine'),
        'section' => 'home_page_popular_post_options',
        'type' => 'select',
        'choices' => array(
            'asc' => __('ASC', 'magnine'),
            'desc' => __('DESC', 'magnine'),
        ),
    )
);
$wp_customize->add_setting(
    'magnine_options[enable_popular_post_author_meta]',
    array(
        'default' => $magnine_default['enable_popular_post_author_meta'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_popular_post_author_meta]',
    array(
        'label' => esc_html__('Display Author Meta', 'magnine'),
        'section' => 'home_page_popular_post_options',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'magnine_options[select_popular_post_author_meta]',
    array(
        'default' => $magnine_default['select_popular_post_author_meta'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_popular_post_author_meta]',
    array(
        'label' => esc_html__('Select Author Meta', 'magnine'),
        'section' => 'home_page_popular_post_options',
        'type' => 'select',
        'choices' => magnine_author_meta(),
    )
);
$wp_customize->add_setting(
    'magnine_options[popular_post_author_meta_title]',
    array(
        'default' => $magnine_default['popular_post_author_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[popular_post_author_meta_title]',
    array(
        'label' => __('Author Meta Text', 'magnine'),
        'section' => 'home_page_popular_post_options',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'magnine_options[enable_popular_post_date_meta]',
    array(
        'default' => $magnine_default['enable_popular_post_date_meta'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_popular_post_date_meta]',
    array(
        'label' => esc_html__('Display Published Date', 'magnine'),
        'section' => 'home_page_popular_post_options',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'magnine_options[select_popular_post_date]',
    array(
        'default' => $magnine_default['select_popular_post_date'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_popular_post_date]',
    array(
        'label' => esc_html__('Select Date Meta', 'magnine'),
        'section' => 'home_page_popular_post_options',
        'type' => 'select',
        'choices' => magnine_date_meta(),
    )
);
$wp_customize->add_setting(
    'magnine_options[select_popular_post_date_meta_title]',
    array(
        'default' => $magnine_default['select_popular_post_date_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[select_popular_post_date_meta_title]',
    array(
        'label' => __('Date Meta Text', 'magnine'),
        'section' => 'home_page_popular_post_options',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'magnine_options[select_popular_post_date_format]',
    array(
        'default' => $magnine_default['select_popular_post_date_format'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_popular_post_date_format]',
    array(
        'label' => esc_html__('Select Date Format', 'magnine'),
        'section' => 'home_page_popular_post_options',
        'type' => 'select',
        'choices' => magnine_get_date_formats(),
    )
);
$wp_customize->add_setting(
    'magnine_options[popular_post_column]',
    array(
        'default' => $magnine_default['popular_post_column'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[popular_post_column]',
    array(
        'label' => __('Popular Post Column', 'magnine'),
        'section' => 'home_page_popular_post_options',
        'type' => 'select',
        'choices' => array(
            '2' => __('2', 'magnine'),
            '3' => __('3', 'magnine'),
            '4' => __('4', 'magnine'),
            '5' => __('5', 'magnine'),
        ),
        'active_callback' => 'magnine_is_popular_post_enabled',
    )
);
// Enable  Autoplay.
$wp_customize->add_setting(
    'magnine_options[enable_popular_post_autoplay]',
    array(
        'default' => $magnine_default['enable_popular_post_autoplay'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_popular_post_autoplay]',
    array(
        'label' => __('Enable Autoplay', 'magnine'),
        'section' => 'home_page_popular_post_options',
        'type' => 'checkbox',
        'active_callback' => 'magnine_is_popular_post_enabled',
    )
);
$wp_customize->add_setting(
    'magnine_options[enable_popular_post_arrows]',
    array(
        'default' => $magnine_default['enable_popular_post_arrows'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_popular_post_arrows]',
    array(
        'label' => __('Enable Arrows', 'magnine'),
        'section' => 'home_page_popular_post_options',
        'type' => 'checkbox',
        'active_callback' => 'magnine_is_popular_post_enabled',
    )
);
$wp_customize->add_setting(
    'magnine_options[enable_popular_post_dots]',
    array(
        'default' => $magnine_default['enable_popular_post_dots'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_popular_post_dots]',
    array(
        'label' => __('Enable Dots', 'magnine'),
        'section' => 'home_page_popular_post_options',
        'type' => 'checkbox',
        'active_callback' => 'magnine_is_popular_post_enabled',
    )
);
