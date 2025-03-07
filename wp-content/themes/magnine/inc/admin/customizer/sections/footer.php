<?php
// Popular Posts Options.
$wp_customize->add_section(
    'footer_section_options',
    array(
        'title' => __('Footer Copyright Options', 'magnine'),
        'panel' => 'footer_options_panel',
    )
);


/*Copyright Text.*/
$wp_customize->add_setting('magnine_options[copyright_text]'
    ,
    array(
        'default'           => $magnine_default['copyright_text'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control('magnine_options[copyright_text]'
    ,
    array(
        'label'           => __( 'Copyright Text', 'magnine' ),
        'description'     => __( 'Use {{ date }} to get the current date.', 'magnine' ),
        'section'         => 'footer_section_options',
        'type'            => 'text',
    )
);

/*Copyright Date Format*/
$wp_customize->add_setting(
    'magnine_options[copyright_date_format]',
    array(
        'default'           => $magnine_default['copyright_date_format'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magnine_options[copyright_date_format]',
    array(
        'label'           => __( 'Copyright Date Format', 'magnine' ),
        'description'     => sprintf(
            wp_kses(
                __( '<a href="%s" target="_blank">Date and Time Formatting Documentation</a>.', 'magnine' ),
                array(
                    'a' => array(
                        'href'   => array(),
                        'target' => array(),
                    ),
                )
            ),
            esc_url( 'https://wordpress.org/support/article/formatting-date-and-time' )
        ),
        'section'         => 'footer_section_options',
        'type'            => 'text',
    )
);
/*Enable Footer Nav*/
$wp_customize->add_setting(
    'magnine_options[enable_footer_nav]',
    array(
        'default'           => $magnine_default['enable_footer_nav'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_footer_nav]',
    array(
        'label'       => __( 'Show Footer Nav Menu', 'magnine' ),
        'description' => sprintf( __( 'You can add/edit footer nav menu from <a href="%s">here</a>.', 'magnine' ), "javascript:wp.customize.control( 'nav_menu_locations[footer]' ).focus();" ),
        'section'     => 'footer_section_options',
        'type'     => 'checkbox',
    )
);


/*Enable Footer Social Nav*/

$wp_customize->add_setting(
    'magnine_options[enable_footer_social_nav]',
    array(
        'default'           => $magnine_default['enable_footer_social_nav'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_footer_social_nav]',
    array(
        'label'       => __( 'Show Social Nav Menu in Footer', 'magnine' ),
        'description' => sprintf( __( 'You can add/edit social nav menu from <a href="%s">here</a>.', 'magnine' ), "javascript:wp.customize.control( 'nav_menu_locations[social]' ).focus();" ),
        'section'     => 'footer_section_options',
        'type'     => 'checkbox',
    )
);



$wp_customize->add_setting(
    'magnine_options[select_footer_social_menu_style]',
    array(
        'default'           => $magnine_default['select_footer_social_menu_style'],
        'sanitize_callback' => 'magnine_sanitize_select',
    )
);
$wp_customize->add_control(
    'magnine_options[select_footer_social_menu_style]',
    array(
        'label'         => esc_html__( 'Social Menu Options', 'magnine' ),
        'section'     => 'footer_section_options',
        'type'        => 'select',
        'choices'       => magnine_social_menu_style(),


    )
);

$wp_customize->add_setting(
    'magnine_options[enable_footer_social_nav_border_radius]',
    array(
        'default'           => $magnine_default['enable_footer_social_nav_border_radius'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_footer_social_nav_border_radius]',
    array(
        'label'    => __( 'Enable Border Radius', 'magnine' ),
        'section'  => 'footer_section_options',
        'type'     => 'checkbox',
    )
);

// Popular Posts Options.
$wp_customize->add_section(
    'footer_scroll_to_top_options',
    array(
        'title' => __('Footer Scroll To Top', 'magnine'),
        'panel' => 'footer_options_panel',
    )
);


/*Copyright Text.*/
$wp_customize->add_setting('magnine_options[enable_footer_scroll_to_top]'
    ,
    array(
        'default'           => $magnine_default['enable_footer_scroll_to_top'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
        
    )
);
$wp_customize->add_control('magnine_options[enable_footer_scroll_to_top]'
    ,
    array(
        'label'           => __( 'Enable Footer Scroll To Top', 'magnine' ),
        'section'         => 'footer_scroll_to_top_options',
        'type'            => 'checkbox',
    )
);


// Popular Posts Options.
$wp_customize->add_section(
    'footer_progressbar_options',
    array(
        'title' => __('Footer ProgressBar', 'magnine'),
        'panel' => 'footer_options_panel',
    )
);


/*Copyright Text.*/
$wp_customize->add_setting('magnine_options[enable_footer_progressbar]'
    ,
    array(
        'default'           => $magnine_default['enable_footer_progressbar'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',

    )
);
$wp_customize->add_control('magnine_options[enable_footer_progressbar]'
    ,
    array(
        'label'           => __( 'Enable Footer ProgressBar', 'magnine' ),
        'description'     => __( 'Screen Progressbar enable option', 'magnine' ),
        'section'         => 'footer_progressbar_options',
        'type'            => 'checkbox',
    )
);

