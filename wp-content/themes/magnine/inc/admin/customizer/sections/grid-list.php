<?php
/**
 * All settings related to footer recommended post.
 *
 * @package MagNine
 */
$wp_customize->add_section(
	'grid_list',
	array(
		'title' => esc_html__( 'Grid List Section', 'magnine' ),
		'panel' => 'front_page_theme_options_panel',
	)
);

$wp_customize->add_setting(
    'magnine_options[enable_grid_list]',
    array(
        'default'           => $magnine_default['enable_grid_list'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_grid_list]',
    array(
        'label'       => esc_html__( 'Enable Grid List', 'magnine' ),
        'section'     => 'grid_list',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'magnine_section_seperator_grid_list_1',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new Magnine_Seperator_Control(
        $wp_customize,
        'magnine_section_seperator_grid_list_1',
        array(
            'label'         => esc_html__( 'Grid List Column - 1', 'magnine' ),
            'settings' => 'magnine_section_seperator_grid_list_1',
            'section' => 'grid_list',
        )
    )
);

$wp_customize->add_setting(
    'magnine_options[grid_list_category_1]',
    array(
        'default'           => $magnine_default['grid_list_category_1'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    new Magnine_Dropdown_Taxonomies_Control(
        $wp_customize,
        'magnine_options[grid_list_category_1]',
        array(
            'label'           => __( 'Choose Column - 1 Category', 'magnine' ),
            'description'     => __( 'Leave Empty if you don\'t want the posts to be category specific', 'magnine' ),
            'section'         => 'grid_list',
        )
    )
);

$wp_customize->add_setting(
    'magnine_section_seperator_grid_list_2',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new Magnine_Seperator_Control(
        $wp_customize,
        'magnine_section_seperator_grid_list_2',
        array(
            'label'         => esc_html__( 'Grid List Column - 2', 'magnine' ),
            'settings' => 'magnine_section_seperator_grid_list_2',
            'section' => 'grid_list',
        )
    )
);

$wp_customize->add_setting(
  'magnine_options[grid_list_inner_title]',
  array(
      'default' => $magnine_default['grid_list_inner_title'],
      'sanitize_callback' => 'sanitize_text_field',
  )
);
$wp_customize->add_control(
  'magnine_options[grid_list_inner_title]',
  array(
      'label' => __('Inner Column Title', 'magnine'),
      'section' => 'grid_list',
      'type' => 'text',
  )
);

$wp_customize->add_setting(
    'magnine_options[grid_list_category_2]',
    array(
        'default'           => $magnine_default['grid_list_category_2'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    new Magnine_Dropdown_Taxonomies_Control(
        $wp_customize,
        'magnine_options[grid_list_category_2]',
        array(
            'label'           => __( 'Choose Column - 2 Category', 'magnine' ),
            'description'     => __( 'Leave Empty if you don\'t want the posts to be category specific', 'magnine' ),
            'section'         => 'grid_list',
        )
    )
);

$wp_customize->add_setting(
  'magnine_options[grid_list_more_category_text]',
  array(
      'default' => $magnine_default['grid_list_more_category_text'],
      'sanitize_callback' => 'sanitize_text_field',
  )
);
$wp_customize->add_control(
  'magnine_options[grid_list_more_category_text]',
  array(
      'label' => __('Redirect to Category Page Text', 'magnine'),
      'section' => 'grid_list',
      'type' => 'text',
  )
);

$wp_customize->add_setting(
    'magnine_section_seperator_grid_list_meta',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new Magnine_Seperator_Control(
        $wp_customize,
        'magnine_section_seperator_grid_list_meta',
        array(
            'label'         => esc_html__( 'Grid List Meta Option', 'magnine' ),
            'settings' => 'magnine_section_seperator_grid_list_meta',
            'section' => 'grid_list',
        )
    )
);

$wp_customize->add_setting(
    'magnine_options[enable_grid_list_author_meta]',
    array(
        'default' => $magnine_default['enable_grid_list_author_meta'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_grid_list_author_meta]',
    array(
        'label' => esc_html__('Display Author Meta', 'magnine'),
        'section' => 'grid_list',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'magnine_options[select_grid_list_author_meta]',
    array(
        'default' => $magnine_default['select_grid_list_author_meta'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_grid_list_author_meta]',
    array(
        'label' => esc_html__('Select Author Meta', 'magnine'),
        'section' => 'grid_list',
        'type' => 'select',
        'choices' => magnine_author_meta(),
    )
);
$wp_customize->add_setting(
    'magnine_options[grid_list_author_meta_title]',
    array(
        'default' => $magnine_default['grid_list_author_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[grid_list_author_meta_title]',
    array(
        'label' => __('Author Meta Text', 'magnine'),
        'section' => 'grid_list',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'magnine_options[enable_grid_list_date_meta]',
    array(
        'default' => $magnine_default['enable_grid_list_date_meta'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_grid_list_date_meta]',
    array(
        'label' => esc_html__('Display Published Date', 'magnine'),
        'section' => 'grid_list',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'magnine_options[select_grid_list_date]',
    array(
        'default' => $magnine_default['select_grid_list_date'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_grid_list_date]',
    array(
        'label' => esc_html__('Select Date Meta', 'magnine'),
        'section' => 'grid_list',
        'type' => 'select',
        'choices' => magnine_date_meta(),
    )
);
$wp_customize->add_setting(
    'magnine_options[select_grid_list_date_meta_title]',
    array(
        'default' => $magnine_default['select_grid_list_date_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[select_grid_list_date_meta_title]',
    array(
        'label' => __('Date Meta Text', 'magnine'),
        'section' => 'grid_list',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'magnine_options[select_grid_list_date_format]',
    array(
        'default' => $magnine_default['select_grid_list_date_format'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_grid_list_date_format]',
    array(
        'label' => esc_html__('Select Date Format', 'magnine'),
        'section' => 'grid_list',
        'type' => 'select',
        'choices' => magnine_get_date_formats(),
    )
);
$wp_customize->add_setting(
    'magnine_options[enable_grid_list_category_meta]',
    array(
        'default' => $magnine_default['enable_grid_list_category_meta'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_grid_list_category_meta]',
    array(
        'label' => esc_html__('Enable Category Meta', 'magnine'),
        'section' => 'grid_list',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'magnine_options[select_grid_list_number_of_category]',
    array(
        'default' => $magnine_default['select_grid_list_number_of_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'magnine_options[select_grid_list_number_of_category]',
    array(
        'label' => __('Number of Category', 'magnine'),
        'section' => 'grid_list',
        'type' => 'number',
    )
);
$wp_customize->add_setting(
    'magnine_options[grid_list_category_label]',
    array(
        'default' => $magnine_default['grid_list_category_label'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[grid_list_category_label]',
    array(
        'label' => __('Category Label', 'magnine'),
        'section' => 'grid_list',
        'type' => 'text',
    )
);

$wp_customize->add_setting(
    'magnine_options[select_grid_list_category_color]',
    array(
        'default' => $magnine_default['select_grid_list_category_color'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_grid_list_category_color]',
    array(
        'label' => esc_html__('Select Category Color', 'magnine'),
        'section' => 'grid_list',
        'type' => 'select',
        'choices' => magnine_category_color(),
    )
);
