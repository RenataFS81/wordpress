<?php
/**
 * All settings related to footer recommended post.
 *
 * @package MagNine
 */
$wp_customize->add_section(
	'split_block',
	array(
		'title' => esc_html__( 'Split Block Section', 'magnine' ),
		'panel' => 'front_page_theme_options_panel',
	)
);

$wp_customize->add_setting(
    'magnine_options[enable_split_block]',
    array(
        'default'           => $magnine_default['enable_split_block'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_split_block]',
    array(
        'label'       => esc_html__( 'Enable Split Block', 'magnine' ),
        'section'     => 'split_block',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
  'magnine_options[split_block_title]',
  array(
      'default' => $magnine_default['split_block_title'],
      'sanitize_callback' => 'sanitize_text_field',
  )
);
$wp_customize->add_control(
  'magnine_options[split_block_title]',
  array(
      'label' => __('Section Title', 'magnine'),
      'section' => 'split_block',
      'type' => 'text',
  )
);

$wp_customize->add_setting(
    'magnine_options[split_block_category]',
    array(
        'default'           => $magnine_default['split_block_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    new Magnine_Dropdown_Taxonomies_Control(
        $wp_customize,
        'magnine_options[split_block_category]',
        array(
            'label'           => __( 'Choose Category', 'magnine' ),
            'description'     => __( 'Leave Empty if you don\'t want the posts to be category specific', 'magnine' ),
            'section'         => 'split_block',
        )
    )
);

$wp_customize->add_setting(
    'magnine_options[enable_split_block_author_meta]',
    array(
        'default' => $magnine_default['enable_split_block_author_meta'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_split_block_author_meta]',
    array(
        'label' => esc_html__('Display Author Meta', 'magnine'),
        'section' => 'split_block',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'magnine_options[select_split_block_author_meta]',
    array(
        'default' => $magnine_default['select_split_block_author_meta'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_split_block_author_meta]',
    array(
        'label' => esc_html__('Select Author Meta', 'magnine'),
        'section' => 'split_block',
        'type' => 'select',
        'choices' => magnine_author_meta(),
    )
);
$wp_customize->add_setting(
    'magnine_options[split_block_author_meta_title]',
    array(
        'default' => $magnine_default['split_block_author_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[split_block_author_meta_title]',
    array(
        'label' => __('Author Meta Text', 'magnine'),
        'section' => 'split_block',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'magnine_options[enable_split_block_date_meta]',
    array(
        'default' => $magnine_default['enable_split_block_date_meta'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_split_block_date_meta]',
    array(
        'label' => esc_html__('Display Published Date', 'magnine'),
        'section' => 'split_block',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'magnine_options[select_split_block_date]',
    array(
        'default' => $magnine_default['select_split_block_date'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_split_block_date]',
    array(
        'label' => esc_html__('Select Date Meta', 'magnine'),
        'section' => 'split_block',
        'type' => 'select',
        'choices' => magnine_date_meta(),
    )
);
$wp_customize->add_setting(
    'magnine_options[select_split_block_date_meta_title]',
    array(
        'default' => $magnine_default['select_split_block_date_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[select_split_block_date_meta_title]',
    array(
        'label' => __('Date Meta Text', 'magnine'),
        'section' => 'split_block',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'magnine_options[select_split_block_date_format]',
    array(
        'default' => $magnine_default['select_split_block_date_format'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_split_block_date_format]',
    array(
        'label' => esc_html__('Select Date Format', 'magnine'),
        'section' => 'split_block',
        'type' => 'select',
        'choices' => magnine_get_date_formats(),
    )
);
$wp_customize->add_setting(
    'magnine_options[enable_split_block_category_meta]',
    array(
        'default' => $magnine_default['enable_split_block_category_meta'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_split_block_category_meta]',
    array(
        'label' => esc_html__('Enable Category Meta', 'magnine'),
        'section' => 'split_block',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'magnine_options[select_split_block_number_of_category]',
    array(
        'default' => $magnine_default['select_split_block_number_of_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'magnine_options[select_split_block_number_of_category]',
    array(
        'label' => __('Number of Category', 'magnine'),
        'section' => 'split_block',
        'type' => 'number',
    )
);
$wp_customize->add_setting(
    'magnine_options[split_block_category_label]',
    array(
        'default' => $magnine_default['split_block_category_label'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[split_block_category_label]',
    array(
        'label' => __('Category Label', 'magnine'),
        'section' => 'split_block',
        'type' => 'text',
    )
);

$wp_customize->add_setting(
    'magnine_options[select_split_block_category_color]',
    array(
        'default' => $magnine_default['select_split_block_category_color'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_split_block_category_color]',
    array(
        'label' => esc_html__('Select Category Color', 'magnine'),
        'section' => 'split_block',
        'type' => 'select',
        'choices' => magnine_category_color(),
    )
);