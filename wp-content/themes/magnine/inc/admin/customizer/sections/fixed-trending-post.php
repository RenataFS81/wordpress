<?php

// Fixed Trending Posts Options.
$wp_customize->add_section(
    'home_page_fixed_trending_options',
    array(
        'title' => __('Sitewide Fix Section', 'magnine'),
        'panel' => 'general_options_panel',
    )
);
$wp_customize->add_setting(
    'magnine_options[enable_fixed_trending]',
    array(
        'default' => $magnine_default['enable_fixed_trending'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_fixed_trending]',
    array(
        'label' => __('Enable Fixed Trending', 'magnine'),
        'section' => 'home_page_fixed_trending_options',
        'type' => 'checkbox',
    )
);



// Fixed Trending Posts Category.
$wp_customize->add_setting(
    'magnine_options[fixed_trending_cat]',
    array(
        'default' => $magnine_default['fixed_trending_cat'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    new Magnine_Dropdown_Taxonomies_Control(
        $wp_customize,
        'magnine_options[fixed_trending_cat]',
        array(
            'label' => __('Choose Fixed Trending category', 'magnine'),
            'section' => 'home_page_fixed_trending_options',
        )
    )
);
// No of posts.
$wp_customize->add_setting(
    'magnine_options[no_of_fixed_trending]',
    array(
        'default' => $magnine_default['no_of_fixed_trending'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'magnine_options[no_of_fixed_trending]',
    array(
        'label' => __('Number of Posts', 'magnine'),
        'section' => 'home_page_fixed_trending_options',
        'type' => 'number',
    )
);

// No of posts offset.
$wp_customize->add_setting(
    'magnine_options[fixed_trending_number_of_post_offsets]',
    array(
        'default' => $magnine_default['fixed_trending_number_of_post_offsets'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'magnine_options[fixed_trending_number_of_post_offsets]',
    array(
        'label' => __('Post Offset Number', 'magnine'),
        'section' => 'home_page_fixed_trending_options',
        'type' => 'number',
    )
);
// Posts Orderby.
$wp_customize->add_setting(
    'magnine_options[fixed_trending_orderby]',
    array(
        'default' => $magnine_default['fixed_trending_orderby'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[fixed_trending_orderby]',
    array(
        'label' => __('Orderby', 'magnine'),
        'section' => 'home_page_fixed_trending_options',
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
    'magnine_options[fixed_trending_order]',
    array(
        'default' => $magnine_default['fixed_trending_order'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[fixed_trending_order]',
    array(
        'label' => __('Order', 'magnine'),
        'section' => 'home_page_fixed_trending_options',
        'type' => 'select',
        'choices' => array(
            'asc' => __('ASC', 'magnine'),
            'desc' => __('DESC', 'magnine'),
        ),
    )
);