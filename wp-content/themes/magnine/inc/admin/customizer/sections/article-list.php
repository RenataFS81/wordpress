<?php
/**
 * All settings related to footer recommended post.
 *
 * @package MagNine
 */
$wp_customize->add_section(
	'article_list_post',
	array(
		'title' => esc_html__( 'Article List Section', 'magnine' ),
		'panel' => 'front_page_theme_options_panel',
	)
);

$wp_customize->add_setting(
    'magnine_options[enable_article_list_post]',
    array(
        'default'           => $magnine_default['enable_article_list_post'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_article_list_post]',
    array(
        'label'       => esc_html__( 'Enable Article List Post', 'magnine' ),
        'section'     => 'article_list_post',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'magnine_section_seperator_article_list_1',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new Magnine_Seperator_Control(
        $wp_customize,
        'magnine_section_seperator_article_list_1',
        array(
            'label'         => esc_html__( 'Article List Column - 1', 'magnine' ),
            'settings' => 'magnine_section_seperator_article_list_1',
            'section' => 'article_list_post',
        )
    )
);

$wp_customize->add_setting(
    'magnine_options[article_list_post_category_1]',
    array(
        'default'           => $magnine_default['article_list_post_category_1'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    new Magnine_Dropdown_Taxonomies_Control(
        $wp_customize,
        'magnine_options[article_list_post_category_1]',
        array(
            'label'           => __( 'Choose Column - 1 Category', 'magnine' ),
            'description'     => __( 'Leave Empty if you don\'t want the posts to be category specific', 'magnine' ),
            'section'         => 'article_list_post',
        )
    )
);




$wp_customize->add_setting(
    'magnine_section_seperator_article_list_2',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new Magnine_Seperator_Control(
        $wp_customize,
        'magnine_section_seperator_article_list_2',
        array(
            'label'         => esc_html__( 'Article List Column - 2', 'magnine' ),
            'settings' => 'magnine_section_seperator_article_list_2',
            'section' => 'article_list_post',
        )
    )
);

$wp_customize->add_setting(
    'magnine_options[article_list_post_category_2]',
    array(
        'default'           => $magnine_default['article_list_post_category_2'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    new Magnine_Dropdown_Taxonomies_Control(
        $wp_customize,
        'magnine_options[article_list_post_category_2]',
        array(
            'label'           => __( 'Choose Column - 2 Category', 'magnine' ),
            'description'     => __( 'Leave Empty if you don\'t want the posts to be category specific', 'magnine' ),
            'section'         => 'article_list_post',
        )
    )
);


$wp_customize->add_setting(
    'magnine_section_seperator_article_list_3',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new Magnine_Seperator_Control(
        $wp_customize,
        'magnine_section_seperator_article_list_3',
        array(
            'label'         => esc_html__( 'Article List Column - 3', 'magnine' ),
            'settings' => 'magnine_section_seperator_article_list_3',
            'section' => 'article_list_post',
        )
    )
);

$wp_customize->add_setting(
    'magnine_options[article_list_post_category_3]',
    array(
        'default'           => $magnine_default['article_list_post_category_3'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    new Magnine_Dropdown_Taxonomies_Control(
        $wp_customize,
        'magnine_options[article_list_post_category_3]',
        array(
            'label'           => __( 'Choose Column - 3 Category', 'magnine' ),
            'description'     => __( 'Leave Empty if you don\'t want the posts to be category specific', 'magnine' ),
            'section'         => 'article_list_post',
        )
    )
);




$wp_customize->add_setting(
    'magnine_section_seperator_article_list_meta',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new Magnine_Seperator_Control(
        $wp_customize,
        'magnine_section_seperator_article_list_meta',
        array(
            'label'         => esc_html__( 'Article List Meta Option', 'magnine' ),
            'settings' => 'magnine_section_seperator_article_list_meta',
            'section' => 'article_list_post',
        )
    )
);





$wp_customize->add_setting(
    'magnine_options[enable_article_list_post_author_meta]',
    array(
        'default' => $magnine_default['enable_article_list_post_author_meta'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_article_list_post_author_meta]',
    array(
        'label' => esc_html__('Display Author Meta', 'magnine'),
        'section' => 'article_list_post',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'magnine_options[select_article_list_post_author_meta]',
    array(
        'default' => $magnine_default['select_article_list_post_author_meta'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_article_list_post_author_meta]',
    array(
        'label' => esc_html__('Select Author Meta', 'magnine'),
        'section' => 'article_list_post',
        'type' => 'select',
        'choices' => magnine_author_meta(),
    )
);
$wp_customize->add_setting(
    'magnine_options[article_list_post_author_meta_title]',
    array(
        'default' => $magnine_default['article_list_post_author_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[article_list_post_author_meta_title]',
    array(
        'label' => __('Author Meta Text', 'magnine'),
        'section' => 'article_list_post',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'magnine_options[enable_article_list_post_date_meta]',
    array(
        'default' => $magnine_default['enable_article_list_post_date_meta'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_article_list_post_date_meta]',
    array(
        'label' => esc_html__('Display Published Date', 'magnine'),
        'section' => 'article_list_post',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'magnine_options[select_article_list_post_date]',
    array(
        'default' => $magnine_default['select_article_list_post_date'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_article_list_post_date]',
    array(
        'label' => esc_html__('Select Date Meta', 'magnine'),
        'section' => 'article_list_post',
        'type' => 'select',
        'choices' => magnine_date_meta(),
    )
);
$wp_customize->add_setting(
    'magnine_options[select_article_list_post_date_meta_title]',
    array(
        'default' => $magnine_default['select_article_list_post_date_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[select_article_list_post_date_meta_title]',
    array(
        'label' => __('Date Meta Text', 'magnine'),
        'section' => 'article_list_post',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'magnine_options[select_article_list_post_date_format]',
    array(
        'default' => $magnine_default['select_article_list_post_date_format'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_article_list_post_date_format]',
    array(
        'label' => esc_html__('Select Date Format', 'magnine'),
        'section' => 'article_list_post',
        'type' => 'select',
        'choices' => magnine_get_date_formats(),
    )
);
$wp_customize->add_setting(
    'magnine_options[enable_article_list_post_category_meta]',
    array(
        'default' => $magnine_default['enable_article_list_post_category_meta'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_article_list_post_category_meta]',
    array(
        'label' => esc_html__('Enable Category Meta', 'magnine'),
        'section' => 'article_list_post',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'magnine_options[select_article_list_post_number_of_category]',
    array(
        'default' => $magnine_default['select_article_list_post_number_of_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'magnine_options[select_article_list_post_number_of_category]',
    array(
        'label' => __('Number of Category', 'magnine'),
        'section' => 'article_list_post',
        'type' => 'number',
    )
);
$wp_customize->add_setting(
    'magnine_options[article_list_post_category_label]',
    array(
        'default' => $magnine_default['article_list_post_category_label'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[article_list_post_category_label]',
    array(
        'label' => __('Category Label', 'magnine'),
        'section' => 'article_list_post',
        'type' => 'text',
    )
);

$wp_customize->add_setting(
    'magnine_options[select_article_list_post_category_color]',
    array(
        'default' => $magnine_default['select_article_list_post_category_color'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_article_list_post_category_color]',
    array(
        'label' => esc_html__('Select Category Color', 'magnine'),
        'section' => 'article_list_post',
        'type' => 'select',
        'choices' => magnine_category_color(),
    )
);