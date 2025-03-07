<?php
$wp_customize->add_section(
   'search_latest_post_options' ,
    array(
        'title' => __( 'Within Search Modal', 'magnine' ),
        'panel' => 'header_options_panel',
    )
);

$wp_customize->add_setting(
    'magnine_options[enable_search_latest_posts]',
    array(
        'default'           => $magnine_default['enable_search_latest_posts'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_search_latest_posts]',
    array(
		'label'    => __( 'Enable Trending', 'magnine' ),
        'section'     => 'search_latest_post_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'magnine_options[enable_search_latest_label]',
    array(
        'default'           => $magnine_default['enable_search_latest_label'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_search_latest_label]',
    array(
		'label'           => __( 'Enable Trending Label', 'magnine' ),
        'section'     => 'search_latest_post_options',
        'type'        => 'checkbox',
    )
);

// Trending Label Text.
$wp_customize->add_setting(
    'magnine_options[search_latest_label_text]',
    array(
        'default'           => $magnine_default['search_latest_label_text'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[search_latest_label_text]',
    array(
        'label'           => __( 'Trending Label Text', 'magnine' ),
        'section'         => 'search_latest_post_options',
        'type'            => 'text',
    )
);

// Trending Posts Category.
$wp_customize->add_setting(
	'magnine_options[search_latest_posts_cat]',
	array(
		'default'           => $magnine_default['search_latest_posts_cat'],
		'sanitize_callback' => 'absint',
	)
);
$wp_customize->add_control(
	new Magnine_Dropdown_Taxonomies_Control(
		$wp_customize,
		'magnine_options[search_latest_posts_cat]',
		array(
			'label'           => __( 'Choose Trending posts category', 'magnine' ),
			'section'         => 'search_latest_post_options',
		)
	)
);

// No of posts.
$wp_customize->add_setting(
	'magnine_options[no_of_search_latest_posts]',
	array(
		'default'           => $magnine_default['no_of_search_latest_posts'],
		'sanitize_callback' => 'absint',
	)
);
$wp_customize->add_control(
	'magnine_options[no_of_search_latest_posts]',
	array(
		'label'           => __( 'Number of Posts', 'magnine' ),
		'section'         => 'search_latest_post_options',
		'type'            => 'number',
	)
);

// Posts Orderby.
$wp_customize->add_setting(
	'magnine_options[search_latest_posts_orderby]',
	array(
		'default'           => $magnine_default['search_latest_posts_orderby'],
		'sanitize_callback' => 'magnine_sanitize_select',
	)
);
$wp_customize->add_control(
	'magnine_options[search_latest_posts_orderby]',
	array(
		'label'           => __( 'Orderby', 'magnine' ),
		'section'         => 'search_latest_post_options',
		'type'            => 'select',
		'choices'         => array(
			'date'  => __( 'Date', 'magnine' ),
			'id'    => __( 'ID', 'magnine' ),
			'title' => __( 'Title', 'magnine' ),
			'rand'  => __( 'Random', 'magnine' ),
		),
	)
);

// Posts Order.
$wp_customize->add_setting(
	'magnine_options[search_latest_posts_order]',
	array(
		'default'           => $magnine_default['search_latest_posts_order'],
		'sanitize_callback' => 'magnine_sanitize_select',
	)
);
$wp_customize->add_control(
	'magnine_options[search_latest_posts_order]',
	array(
		'label'           => __( 'Order', 'magnine' ),
		'section'         => 'search_latest_post_options',
		'type'            => 'select',
		'choices'         => array(
			'asc'  => __( 'ASC', 'magnine' ),
			'desc' => __( 'DESC', 'magnine' ),
		),
	)
);


$wp_customize->add_setting(
    'magnine_options[enable_search_latest_posts_author_meta]',
    array(
        'default'           => $magnine_default['enable_search_latest_posts_author_meta'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_search_latest_posts_author_meta]',
    array(
        'label'       => esc_html__( 'Display Author Meta', 'magnine' ),
        'section'     => 'search_latest_post_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'magnine_options[select_search_latest_posts_author_meta]',
    array(
        'default'           => $magnine_default['select_search_latest_posts_author_meta'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_search_latest_posts_author_meta]',
    array(
        'label'         => esc_html__( 'Select Author Meta', 'magnine' ),
        'section'     => 'search_latest_post_options',
        'type'        => 'select',
        'choices'       => magnine_author_meta(),


    )
);

$wp_customize->add_setting(
    'magnine_options[search_latest_posts_author_meta_title]',
    array(
        'default'           => $magnine_default['search_latest_posts_author_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[search_latest_posts_author_meta_title]',
    array(
        'label'    => __( 'Author Meta Text', 'magnine' ),
        'section'  => 'search_latest_post_options',
        'type'     => 'text',
    )
);

$wp_customize->add_setting(
    'magnine_options[enable_search_latest_posts_date_meta]',
    array(
        'default'           => $magnine_default['enable_search_latest_posts_date_meta'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_search_latest_posts_date_meta]',
    array(
        'label'       => esc_html__( 'Display Published Date', 'magnine' ),
        'section'     => 'search_latest_post_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'magnine_options[select_search_latest_posts_date]',
    array(
        'default'           => $magnine_default['select_search_latest_posts_date'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_search_latest_posts_date]',
    array(
        'label'         => esc_html__( 'Select Date Meta', 'magnine' ),
        'section'     => 'search_latest_post_options',
        'type'        => 'select',
        'choices'       => magnine_date_meta(),

    )
);

$wp_customize->add_setting(
    'magnine_options[single_search_latest_post_date_meta_title]',
    array(
        'default'           => $magnine_default['single_search_latest_post_date_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[single_search_latest_post_date_meta_title]',
    array(
        'label'    => __( 'Date Meta Text', 'magnine' ),
        'section'  => 'search_latest_post_options',
        'type'     => 'text',
    )
);

$wp_customize->add_setting(
    'magnine_options[select_search_latest_posts_date_format]',
    array(
        'default'           => $magnine_default['select_search_latest_posts_date_format'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_search_latest_posts_date_format]',
    array(
        'label'         => esc_html__( 'Select Date Format', 'magnine' ),
        'section'     => 'search_latest_post_options',
        'type'        => 'select',
        'choices'       => magnine_get_date_formats(),
    )
);

$wp_customize->add_setting(
    'magnine_options[enable_search_latest_posts_category_meta]',
    array(
        'default'           => $magnine_default['enable_search_latest_posts_category_meta'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_search_latest_posts_category_meta]',
    array(
        'label'       => esc_html__( 'Enable Category Meta', 'magnine' ),
        'section'     => 'search_latest_post_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'magnine_options[select_search_latest_posts_number_of_category]',
    array(
        'default'           => $magnine_default['select_search_latest_posts_number_of_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'magnine_options[select_search_latest_posts_number_of_category]',
    array(
        'label'       => __( 'Number of Category', 'magnine' ),
        'section'     => 'search_latest_post_options',
        'type'        => 'number',
    )
);

$wp_customize->add_setting(
    'magnine_options[search_latest_posts_category_label]',
    array(
        'default'           => $magnine_default['search_latest_posts_category_label'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[search_latest_posts_category_label]',
    array(
        'label'       => esc_html__( 'Category Label', 'magnine' ),
        'section'  => 'search_latest_post_options',
        'type'     => 'text',
    )
);

$wp_customize->add_setting(
    'magnine_options[select_search_latest_posts_category_color]',
    array(
        'default'           => $magnine_default['select_search_latest_posts_category_color'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_search_latest_posts_category_color]',
    array(
        'label'         => esc_html__( 'Select Category Color', 'magnine' ),
        'section'     => 'search_latest_post_options',
        'type'        => 'select',
        'choices'       => magnine_category_color(),

    )
);