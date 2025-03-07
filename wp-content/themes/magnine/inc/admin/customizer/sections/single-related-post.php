<?php
$wp_customize->add_section(
    'single_related_options',
    array(
        'title' => esc_html__( 'Single Related Options', 'magnine' ),
        'panel' => 'single_options_panel',
    )
);
/*Show Related Posts
*-------------------------------*/
$wp_customize->add_setting(
    'magnine_options[show_related_posts]',
    array(
        'default'           => $magnine_default['show_related_posts'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[show_related_posts]',
    array(
        'label'    => __( 'Show Related Posts', 'magnine' ),
        'section'  => 'single_related_options',
        'type'     => 'checkbox',
    )
);

/*Related Posts Text.*/
$wp_customize->add_setting(
    'magnine_options[related_posts_text]',
    array(
        'default'           => $magnine_default['related_posts_text'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[related_posts_text]',
    array(
        'label'    => __( 'Related Posts Text', 'magnine' ),
        'section'  => 'single_related_options',
        'type'     => 'text',
    )
);

/* Number of Related Posts */
$wp_customize->add_setting(
    'magnine_options[no_of_related_posts]',
    array(
        'default'           => $magnine_default['no_of_related_posts'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'magnine_options[no_of_related_posts]',
    array(
        'label'       => __( 'Number of Related Posts', 'magnine' ),
        'section'     => 'single_related_options',
        'type'        => 'number',
    )
);

// No of posts offset.
$wp_customize->add_setting(
    'magnine_options[related_posts_number_of_post_offsets]',
    array(
        'default' => $magnine_default['related_posts_number_of_post_offsets'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'magnine_options[related_posts_number_of_post_offsets]',
    array(
        'label' => __('Post Offset Number', 'magnine'),
        'section' => 'single_related_options',
        'type' => 'number',
    )
);


/*Related Posts Orderby*/
$wp_customize->add_setting(
    'magnine_options[related_posts_orderby]',
    array(
        'default'           => $magnine_default['related_posts_orderby'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[related_posts_orderby]',
    array(
        'label'       => __( 'Orderby', 'magnine' ),
        'section'     => 'single_related_options',
        'type'        => 'select',
        'choices' => array(
            'date' => __('Date', 'magnine'),
            'id' => __('ID', 'magnine'),
            'title' => __('Title', 'magnine'),
            'rand' => __('Random', 'magnine'),
        ),
    )
);

/*Related Posts Order*/
$wp_customize->add_setting(
    'magnine_options[related_posts_order]',
    array(
        'default'           => $magnine_default['related_posts_order'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[related_posts_order]',
    array(
        'label'       => __( 'Order', 'magnine' ),
        'section'     => 'single_related_options',
        'type'        => 'select',
        'choices' => array(
            'asc' => __('ASC', 'magnine'),
            'desc' => __('DESC', 'magnine'),
        ),
    )
);

$wp_customize->add_setting(
    'magnine_options[enable_related_posts_author_meta]',
    array(
        'default'           => $magnine_default['enable_related_posts_author_meta'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_related_posts_author_meta]',
    array(
        'label'       => esc_html__( 'Show Author Meta', 'magnine' ),
        'section'     => 'single_related_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'magnine_options[select_related_posts_author_meta]',
    array(
        'default'           => $magnine_default['select_related_posts_author_meta'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_related_posts_author_meta]',
    array(
        'label'         => esc_html__( 'Author Meta Display Options', 'magnine' ),
        'section'     => 'single_related_options',
        'type'        => 'select',
        'choices'       => magnine_author_meta(),


    )
);

$wp_customize->add_setting(
    'magnine_options[related_posts_author_meta_title]',
    array(
        'default'           => $magnine_default['related_posts_author_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[related_posts_author_meta_title]',
    array(
        'label'    => __( 'Author Meta Text', 'magnine' ),
        'section'  => 'single_related_options',
        'type'     => 'text',
    )
);

$wp_customize->add_setting(
    'magnine_options[enable_related_posts_date_meta]',
    array(
        'default'           => $magnine_default['enable_related_posts_date_meta'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_related_posts_date_meta]',
    array(
        'label'       => esc_html__( 'Display Published Date', 'magnine' ),
        'section'     => 'single_related_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'magnine_options[select_related_posts_date]',
    array(
        'default'           => $magnine_default['select_related_posts_date'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_related_posts_date]',
    array(
        'label'         => esc_html__( 'Select Date Meta', 'magnine' ),
        'section'     => 'single_related_options',
        'type'        => 'select',
        'choices'       => magnine_date_meta(),

    )
);

$wp_customize->add_setting(
    'magnine_options[single_related_post_date_meta_title]',
    array(
        'default'           => $magnine_default['single_related_post_date_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[single_related_post_date_meta_title]',
    array(
        'label'    => __( 'Date Meta Text', 'magnine' ),
        'section'  => 'single_related_options',
        'type'     => 'text',
    )
);

$wp_customize->add_setting(
    'magnine_options[select_related_posts_date_format]',
    array(
        'default'           => $magnine_default['select_related_posts_date_format'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_related_posts_date_format]',
    array(
        'label'         => esc_html__( 'Select Date Format', 'magnine' ),
        'section'     => 'single_related_options',
        'type'        => 'select',
        'choices'       => magnine_get_date_formats(),
    )
);

$wp_customize->add_setting(
    'magnine_options[enable_related_posts_category_meta]',
    array(
        'default'           => $magnine_default['enable_related_posts_category_meta'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_related_posts_category_meta]',
    array(
        'label'       => esc_html__( 'Enable Category Meta', 'magnine' ),
        'section'     => 'single_related_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'magnine_options[select_related_posts_number_of_category]',
    array(
        'default'           => $magnine_default['select_related_posts_number_of_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'magnine_options[select_related_posts_number_of_category]',
    array(
        'label'       => __( 'Number of Category', 'magnine' ),
        'section'     => 'single_related_options',
        'type'        => 'number',
    )
);

$wp_customize->add_setting(
    'magnine_options[related_posts_category_label]',
    array(
        'default'           => $magnine_default['related_posts_category_label'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[related_posts_category_label]',
    array(
        'label'    => __( 'Category Label', 'magnine' ),
        'section'  => 'single_related_options',
        'type'     => 'text',
    )
);

$wp_customize->add_setting(
    'magnine_options[select_related_posts_category_color]',
    array(
        'default'           => $magnine_default['select_related_posts_category_color'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_related_posts_category_color]',
    array(
        'label'         => esc_html__( 'Select Category Color', 'magnine' ),
        'section'     => 'single_related_options',
        'type'        => 'select',
        'choices'       => magnine_category_color(),

    )
);