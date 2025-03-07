<?php
// Tags Posts Options.
$wp_customize->add_section(
	'home_page_tags_options',
	array(
		'title' => __( 'Tags Options', 'magnine' ),
		'panel' => 'header_options_panel',
	)
);

$wp_customize->add_setting(
    'magnine_options[enable_tags]',
    array(
        'default'           => $magnine_default['enable_tags'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_tags]',
    array(
		'label'    => __( 'Enable Tags Section', 'magnine' ),
        'section'     => 'home_page_tags_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'magnine_options[enable_tags_only_on_frontpage]',
    array(
        'default' => $magnine_default['enable_tags_only_on_frontpage'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_tags_only_on_frontpage]',
    array(
        'label' => __('Display only on the Homepage', 'magnine'),
        'section' => 'home_page_tags_options',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting(
    'magnine_options[enable_tags_label]',
    array(
        'default'           => $magnine_default['enable_tags_label'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);

$wp_customize->add_control(
    'magnine_options[enable_tags_label]',
    array(
        'label'           => __( 'Enable Tags Label', 'magnine' ),
        'section'     => 'home_page_tags_options',
        'type'        => 'checkbox',
    )
);

// Tags Label Style.
$wp_customize->add_setting(
    'magnine_options[tags_label_style]',
    array(
        'default'           => $magnine_default['tags_label_style'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[tags_label_style]',
    array(
        'label'           => __( 'Label Style', 'magnine' ),
        'section'         => 'home_page_tags_options',
        'type'            => 'select',
        'choices'         => array(
            'style_1' => __( 'Plain', 'magnine' ),
            'style_2' => __( 'With Icon', 'magnine' ),
        ),
    )
);


// Tags Label Text.
$wp_customize->add_setting(
    'magnine_options[tags_label_text]',
    array(
        'default'           => $magnine_default['tags_label_text'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[tags_label_text]',
    array(
        'label'           => __( 'Tags Label Text', 'magnine' ),
        'description'     => __( 'Leave empty if you want it blank', 'magnine' ),
        'section'         => 'home_page_tags_options',
        'type'            => 'text',
    )
);

// No of posts.
$wp_customize->add_setting(
    'magnine_options[no_of_tags]',
    array(
        'default'           => $magnine_default['no_of_tags'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'magnine_options[no_of_tags]',
    array(
		'label'           => __( 'Number of Tags', 'magnine' ),
		'section'         => 'home_page_tags_options',
		'type'            => 'number',
    )
);


// Posts Orderby.
$wp_customize->add_setting(
    'magnine_options[tags_orderby]',
    array(
        'default'           => $magnine_default['tags_orderby'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[tags_orderby]',
    array(
		'label'           => __( 'Orderby', 'magnine' ),
		'section'         => 'home_page_tags_options',
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
    'magnine_options[tags_order]',
    array(
        'default'           => $magnine_default['tags_order'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[tags_order]',
    array(
		'label'           => __( 'Orderby', 'magnine' ),
		'section'         => 'home_page_tags_options',
		'type'            => 'select',
		'choices'         => array(
			'asc'  => __( 'ASC', 'magnine' ),
			'desc' => __( 'DESC', 'magnine' ),
		),
    )
);


$wp_customize->add_setting(
    'magnine_options[hide_tags_label_responsive]',
    array(
        'default'           => $magnine_default['hide_tags_label_responsive'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[hide_tags_label_responsive]',
    array(
		'label'           => __( 'Hide Label on Responsive', 'magnine' ),
        'section'     => 'home_page_tags_options',
        'type'        => 'checkbox',
    )
);