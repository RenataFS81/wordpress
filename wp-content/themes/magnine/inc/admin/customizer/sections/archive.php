<?php
/**
 * All settings related to archive.
 *
 * @package MagNine
 */
$wp_customize->add_section(
	'archive_options',
	array(
		'title' => esc_html__( 'Archive Options', 'magnine' ),
		'panel' => 'archive_options_panel',
	)
);

// Archive Layout.
$wp_customize->add_setting(
    'magnine_options[archive_layout]',
    array(
        'default'           => $magnine_default['archive_layout'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'magnine_sanitize_radio'
    )
);

$wp_customize->add_control(
    new Magnine_Custom_Radio_Image_Control(
        $wp_customize,
        'magnine_options[archive_layout]',
        array(
            'label'         => esc_html__( 'Archive Layout', 'magnine' ),
            'section'       => 'archive_options',
            'choices'       => magnine_get_archive_layouts(),
        )
    )
);

$wp_customize->add_setting(
    'magnine_options[enable_archive_featured_post]',
    array(
        'default'           => $magnine_default['enable_archive_featured_post'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_archive_featured_post]',
    array(
        'label'    => __( 'Enable Featured Post', 'magnine' ),
        'description' => __( 'After enabling, set \'Mark as Featured\' to \'Yes\' in the single post options to display the post in the top section of the relevant archive page.', 'magnine' ),
        'section'     => 'archive_options',
        'type'        => 'checkbox',

    )
);

$wp_customize->add_setting(
    'magnine_section_seperator_archive_1',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new Magnine_Seperator_Control(
        $wp_customize,
        'magnine_section_seperator_archive_1',
        array(
            'label'         => esc_html__( 'Archive Meta Options', 'magnine' ),
            'settings' => 'magnine_section_seperator_archive_1',
            'section' => 'archive_options',
        )
    )
);

$wp_customize->add_setting(
    'magnine_options[enable_archive_post_count]',
    array(
        'default'           => $magnine_default['enable_archive_post_count'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_archive_post_count]',
    array(
        'label'    => __( 'Enable Archive Post Count', 'magnine' ),
        'section'     => 'archive_options',
        'type'        => 'checkbox',

    )
);


$wp_customize->add_setting(
    'magnine_options[archive_posts_title_limit]',
    array(
        'default'           => $magnine_default['archive_posts_title_limit'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[archive_posts_title_limit]',
    array(
        'label'    => __( 'Title Line Limit', 'magnine' ),
        'section'  => 'archive_options',
        'type'     => 'select',
        'choices'  => magnine_line_limit_choices(),
    )
);


$wp_customize->add_setting(
    'magnine_options[enable_excerpt_on_archive_1]',
    array(
        'default'           => $magnine_default['enable_excerpt_on_archive_1'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_excerpt_on_archive_1]',
    array(
        'label'    => __( 'Enable Excerpt On Archive', 'magnine' ),
        'section'     => 'archive_options',
        'type'        => 'checkbox',
        'active_callback' => 'magnine_is_archive_excerpt_callbac_1',

    )
);



$wp_customize->add_setting(
    'magnine_options[enable_excerpt_on_archive_2]',
    array(
        'default'           => $magnine_default['enable_excerpt_on_archive_2'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_excerpt_on_archive_2]',
    array(
        'label'    => __( 'Enable Excerpt On Archive', 'magnine' ),
        'section'     => 'archive_options',
        'type'        => 'checkbox',
        'active_callback' => 'magnine_is_archive_excerpt_callbac_2',
        
    )
);


$wp_customize->add_setting(
    'magnine_options[enable_excerpt_on_archive_3]',
    array(
        'default'           => $magnine_default['enable_excerpt_on_archive_3'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_excerpt_on_archive_3]',
    array(
        'label'    => __( 'Enable Excerpt On Archive', 'magnine' ),
        'section'     => 'archive_options',
        'type'        => 'checkbox',
        'active_callback' => 'magnine_is_archive_excerpt_callbac_3',
        
    )
);

$wp_customize->add_setting(
    'magnine_options[enable_archive_author_meta]',
    array(
        'default'           => $magnine_default['enable_archive_author_meta'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_archive_author_meta]',
    array(
        'label'       => esc_html__( 'Show Author Meta', 'magnine' ),
        'section'     => 'archive_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'magnine_options[select_author_meta]',
    array(
        'default'           => $magnine_default['select_author_meta'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_author_meta]',
    array(
        'label'         => esc_html__( 'Author Meta Display Options', 'magnine' ),
        'section'     => 'archive_options',
        'type'        => 'select',
        'choices'       => magnine_author_meta(),
        'active_callback' => 'magnine_is_archive_author_meta_enabled',


    )
);

$wp_customize->add_setting(
    'magnine_options[archive_author_meta_title]',
    array(
        'default'           => $magnine_default['archive_author_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[archive_author_meta_title]',
    array(
        'label'    => __( 'Author Meta Text', 'magnine' ),
        'section'  => 'archive_options',
        'type'     => 'text',
        'active_callback' => function ( $control ) {
            return (
                magnine_is_archive_author_meta_enabled( $control )
                &&
                magnine_archive_author_meta_title( $control )
            );
        },
    )
);

$wp_customize->add_setting(
    'magnine_options[enable_archive_date_meta]',
    array(
        'default'           => $magnine_default['enable_archive_date_meta'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_archive_date_meta]',
    array(
        'label'       => esc_html__( 'Show Date Meta', 'magnine' ),
        'section'     => 'archive_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'magnine_options[select_archive_date]',
    array(
        'default'           => $magnine_default['select_archive_date'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_archive_date]',
    array(
        'label'         => esc_html__( 'Date Meta Display Options', 'magnine' ),
        'section'     => 'archive_options',
        'type'        => 'select',
        'choices'       => magnine_date_meta(),
        'active_callback' => 'magnine_is_archive_date_meta_enabled',

    )
);

$wp_customize->add_setting(
    'magnine_options[archive_date_meta_title]',
    array(
        'default'           => $magnine_default['archive_date_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[archive_date_meta_title]',
    array(
        'label'    => __( 'Date Meta Text', 'magnine' ),
        'section'  => 'archive_options',
        'type'     => 'text',
        'active_callback' => function ( $control ) {
            return (
                magnine_is_archive_date_meta_enabled( $control )
                &&
                magnine_archive_date_meta_title( $control )
            );
        },
    )
);

$wp_customize->add_setting(
    'magnine_options[select_date_format]',
    array(
        'default'           => $magnine_default['select_date_format'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_date_format]',
    array(
        'label'         => esc_html__( 'Select Date Format', 'magnine' ),
        'section'     => 'archive_options',
        'type'        => 'select',
        'choices'  		=> magnine_get_date_formats(),
        'active_callback' => 'magnine_is_archive_date_meta_enabled',
    )
);

$wp_customize->add_setting(
    'magnine_options[enable_category_meta]',
    array(
        'default'           => $magnine_default['enable_category_meta'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_category_meta]',
    array(
        'label'       => esc_html__( 'Enable Category Meta', 'magnine' ),
        'section'     => 'archive_options',
        'type'        => 'checkbox',
    )
);
        
$wp_customize->add_setting(
    'magnine_options[archive_category_label]',
    array(
        'default'           => $magnine_default['archive_category_label'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[archive_category_label]',
    array(
        'label'    => __( 'Category Title', 'magnine' ),
        'section'  => 'archive_options',
        'type'     => 'text',
        'active_callback' => 'magnine_is_archive_category_meta_enabled',
    )
);

$wp_customize->add_setting(
    'magnine_options[select_category_color]',
    array(
        'default'           => $magnine_default['select_category_color'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_category_color]',
    array(
        'label'         => esc_html__( 'Select Category Color', 'magnine' ),
        'section'     => 'archive_options',
        'type'        => 'select',
        'choices'  		=> magnine_category_color(),
        'active_callback' => 'magnine_is_archive_category_meta_enabled',

    )
);

$wp_customize->add_setting(
    'magnine_options[enable_tag_meta]',
    array(
        'default'           => $magnine_default['enable_tag_meta'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_tag_meta]',
    array(
        'label'       => esc_html__( 'Enable Tag Meta', 'magnine' ),
        'section'     => 'archive_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'magnine_options[enable_comment_meta]',
    array(
        'default'           => $magnine_default['enable_comment_meta'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_comment_meta]',
    array(
        'label'       => esc_html__( 'Enable Comment Meta', 'magnine' ),
        'section'     => 'archive_options',
        'type'        => 'checkbox',
    )
);


$wp_customize->add_setting(
    'magnine_options[enable_read_time_meta]',
    array(
        'default'           => $magnine_default['enable_read_time_meta'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_read_time_meta]',
    array(
        'label'       => esc_html__( 'Enable Read Time', 'magnine' ),
        'section'     => 'archive_options',
        'type'        => 'checkbox',
    )
);
