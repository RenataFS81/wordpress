<?php
$wp_customize->add_section(
    'pagination_options',
    array(
        'title' => esc_html__( 'Pagination Options', 'magnine' ),
        'panel' => 'archive_options_panel',
    )
);


$wp_customize->add_setting(
    'magnine_options[select_pagination_style]',
    array(
        'default'           => $magnine_default['select_pagination_style'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_pagination_style]',
    array(
        'label'         => esc_html__( 'Select Pagination Style', 'magnine' ),
        'section'     => 'pagination_options',
        'type'        => 'select',
        'choices'       => magnine_pagination_style_choice(),

    )
);


$wp_customize->add_section(
    'excerpt_options',
    array(
        'title' => esc_html__( 'Excerpt Options', 'magnine' ),
        'panel' => 'archive_options_panel',
    )
);

$wp_customize->add_setting(
    'magnine_options[number_of_word_in_excerpt]',
    array(
        'default'           => $magnine_default['number_of_word_in_excerpt'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'magnine_options[number_of_word_in_excerpt]',
    array(
        'label'         => esc_html__( 'Number Of Excerpt Word', 'magnine' ),
        'section'     => 'excerpt_options',
        'type'        => 'number',

    )
);


$wp_customize->add_setting(
    'magnine_options[excerpt_posts_title_limit]',
    array(
        'default'           => $magnine_default['excerpt_posts_title_limit'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[excerpt_posts_title_limit]',
    array(
        'label'    => __( 'Excerpt Line Limit', 'magnine' ),
        'section'  => 'excerpt_options',
        'type'     => 'select',
        'choices'  => magnine_line_limit_choices(),
    )
);

$wp_customize->add_setting(
    'magnine_options[archive_excerpt_button_text]',
    array(
        'default'           => $magnine_default['archive_excerpt_button_text'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[archive_excerpt_button_text]',
    array(
        'label'    => __( 'Excerpt Button Text', 'magnine' ),
        'section'  => 'excerpt_options',
        'type'     => 'text',
    )
);