<?php
$wp_customize->add_section(
   'header_style_options' ,
    array(
        'title' => __( 'Header Layout', 'magnine' ),
        'panel' => 'header_options_panel',
    )
);


$wp_customize->add_setting(
    'magnine_options[select_header_layout_style]',
    array(
        'default'           => $magnine_default['select_header_layout_style'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'magnine_sanitize_radio'
    )
);

$wp_customize->add_control(
    new Magnine_Custom_Radio_Image_Control(
        $wp_customize,
        'magnine_options[select_header_layout_style]',
        array(
            'label'         => esc_html__( 'Select Header Layout', 'magnine' ),
            'section'       => 'header_style_options',
            'choices'       => magnine_get_header_layout(),
        )
    )
);

$wp_customize->add_setting(
    'magnine_options[enable_header_advertisement]',
    array(
        'default'           => $magnine_default['enable_header_advertisement'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_header_advertisement]',
    array(
        'label'    => __( 'Enable Header Advertisement', 'magnine' ),
        'section'     => 'header_style_options',
        'type'        => 'checkbox',
    )
);


$wp_customize->add_setting(
    'magnine_options[header_advert_image]',
    array(
        'default' => $magnine_default['header_advert_image'],
        'sanitize_callback' => 'magnine_sanitize_image',
    )
);
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'magnine_options[header_advert_image]',
        array(
            'label' => __('Upload Banner Advertisement', 'magnine'),
            'section' => 'header_style_options',
            'active_callback' => 'magnine_header_advertisement',

        )
    )
);


$wp_customize->add_setting(
    'magnine_options[header_advert_image_url]',
    array(
        'default'           => $magnine_default['header_advert_image_url'],
        'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control(
    'magnine_options[header_advert_image_url]',
    array(
        'label'    => __( 'Banner Advertisement URL', 'magnine' ),
        'section'  => 'header_style_options',
        'type'     => 'text',
        'active_callback' => 'magnine_header_advertisement',

    )
);