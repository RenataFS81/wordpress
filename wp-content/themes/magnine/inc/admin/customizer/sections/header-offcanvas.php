<?php
$wp_customize->add_section(
   'offcanvas_options' ,
    array(
        'title' => __( 'Offcanvas Options', 'magnine' ),
        'panel' => 'header_options_panel',
    )
);

/*Enable Offcanvas*/
$wp_customize->add_setting(
    'magnine_options[enable_offcanvas]',
    array(
        'default'           => $magnine_default['enable_offcanvas'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_offcanvas]',
    array(
        'label'    => __( 'Enable Offcanvas', 'magnine' ),
        'section'  => 'offcanvas_options',
        'type'     => 'checkbox',
    )
);
