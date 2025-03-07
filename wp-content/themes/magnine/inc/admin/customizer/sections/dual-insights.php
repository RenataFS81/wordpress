<?php
/**
 * All settings related to footer recommended post.
 *
 * @package MagNine
 */
$wp_customize->add_section(
	'dual_insights',
	array(
		'title' => esc_html__( 'Dual Insights Section', 'magnine' ),
		'panel' => 'front_page_theme_options_panel',
	)
);

$wp_customize->add_setting(
    'magnine_options[enable_dual_insights]',
    array(
        'default'           => $magnine_default['enable_dual_insights'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_dual_insights]',
    array(
        'label'       => esc_html__( 'Enable Dual Insights', 'magnine' ),
        'section'     => 'dual_insights',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
  'magnine_options[dual_insights_title]',
  array(
      'default' => $magnine_default['dual_insights_title'],
      'sanitize_callback' => 'sanitize_text_field',
  )
);
$wp_customize->add_control(
  'magnine_options[dual_insights_title]',
  array(
      'label' => __('Section Title', 'magnine'),
      'section' => 'dual_insights',
      'type' => 'text',
  )
);

$wp_customize->add_setting(
    'magnine_section_seperator_dual_insights_1',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new Magnine_Seperator_Control(
        $wp_customize,
        'magnine_section_seperator_dual_insights_1',
        array(
            'label'         => esc_html__( 'Dual Insights Column - 1', 'magnine' ),
            'settings' => 'magnine_section_seperator_dual_insights_1',
            'section' => 'dual_insights',
        )
    )
);

$wp_customize->add_setting(
    'magnine_options[main_insights_category]',
    array(
        'default'           => $magnine_default['main_insights_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    new Magnine_Dropdown_Taxonomies_Control(
        $wp_customize,
        'magnine_options[main_insights_category]',
        array(
            'label'           => __( 'Choose Column - 1 Category', 'magnine' ),
            'description'     => __( 'Leave Empty if you don\'t want the posts to be category specific', 'magnine' ),
            'section'         => 'dual_insights',
        )
    )
);

$wp_customize->add_setting(
    'magnine_section_seperator_dual_insights_2',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new Magnine_Seperator_Control(
        $wp_customize,
        'magnine_section_seperator_dual_insights_2',
        array(
            'label'         => esc_html__( 'Dual Insights Column - 2', 'magnine' ),
            'settings' => 'magnine_section_seperator_dual_insights_2',
            'section' => 'dual_insights',
        )
    )
);

$wp_customize->add_setting(
  'magnine_options[dual_inner_column_title]',
  array(
      'default' => $magnine_default['dual_inner_column_title'],
      'sanitize_callback' => 'sanitize_text_field',
  )
);
$wp_customize->add_control(
  'magnine_options[dual_inner_column_title]',
  array(
      'label' => __('Inner Column Title', 'magnine'),
      'section' => 'dual_insights',
      'type' => 'text',
  )
);

$wp_customize->add_setting(
    'magnine_options[trending_insights_category]',
    array(
        'default'           => $magnine_default['trending_insights_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    new Magnine_Dropdown_Taxonomies_Control(
        $wp_customize,
        'magnine_options[trending_insights_category]',
        array(
            'label'           => __( 'Choose Column - 2 Category', 'magnine' ),
            'description'     => __( 'Leave Empty if you don\'t want the posts to be category specific', 'magnine' ),
            'section'         => 'dual_insights',
        )
    )
);

$wp_customize->add_setting(
    'magnine_options[enable_insights_author_meta]',
    array(
        'default' => $magnine_default['enable_insights_author_meta'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_insights_author_meta]',
    array(
        'label' => esc_html__('Display Author Meta', 'magnine'),
        'section' => 'dual_insights',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'magnine_options[select_insights_author_meta]',
    array(
        'default' => $magnine_default['select_insights_author_meta'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_insights_author_meta]',
    array(
        'label' => esc_html__('Select Author Meta', 'magnine'),
        'section' => 'dual_insights',
        'type' => 'select',
        'choices' => magnine_author_meta(),
    )
);
$wp_customize->add_setting(
    'magnine_options[insights_author_meta_title]',
    array(
        'default' => $magnine_default['insights_author_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[insights_author_meta_title]',
    array(
        'label' => __('Author Meta Text', 'magnine'),
        'section' => 'dual_insights',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'magnine_options[enable_insights_date_meta]',
    array(
        'default' => $magnine_default['enable_insights_date_meta'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_insights_date_meta]',
    array(
        'label' => esc_html__('Display Published Date', 'magnine'),
        'section' => 'dual_insights',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'magnine_options[select_insights_date]',
    array(
        'default' => $magnine_default['select_insights_date'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_insights_date]',
    array(
        'label' => esc_html__('Select Date Meta', 'magnine'),
        'section' => 'dual_insights',
        'type' => 'select',
        'choices' => magnine_date_meta(),
    )
);
$wp_customize->add_setting(
    'magnine_options[select_insights_date_meta_title]',
    array(
        'default' => $magnine_default['select_insights_date_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[select_insights_date_meta_title]',
    array(
        'label' => __('Date Meta Text', 'magnine'),
        'section' => 'dual_insights',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'magnine_options[select_insights_date_format]',
    array(
        'default' => $magnine_default['select_insights_date_format'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_insights_date_format]',
    array(
        'label' => esc_html__('Select Date Format', 'magnine'),
        'section' => 'dual_insights',
        'type' => 'select',
        'choices' => magnine_get_date_formats(),
    )
);
$wp_customize->add_setting(
    'magnine_options[enable_insights_category_meta]',
    array(
        'default' => $magnine_default['enable_insights_category_meta'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_insights_category_meta]',
    array(
        'label' => esc_html__('Enable Category Meta', 'magnine'),
        'section' => 'dual_insights',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'magnine_options[select_insights_number_of_category]',
    array(
        'default' => $magnine_default['select_insights_number_of_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'magnine_options[select_insights_number_of_category]',
    array(
        'label' => __('Number of Category', 'magnine'),
        'section' => 'dual_insights',
        'type' => 'number',
    )
);
$wp_customize->add_setting(
    'magnine_options[insights_category_label]',
    array(
        'default' => $magnine_default['insights_category_label'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[insights_category_label]',
    array(
        'label' => __('Category Label', 'magnine'),
        'section' => 'dual_insights',
        'type' => 'text',
    )
);

$wp_customize->add_setting(
    'magnine_options[select_insights_category_color]',
    array(
        'default' => $magnine_default['select_insights_category_color'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_insights_category_color]',
    array(
        'label' => esc_html__('Select Category Color', 'magnine'),
        'section' => 'dual_insights',
        'type' => 'select',
        'choices' => magnine_category_color(),
    )
);