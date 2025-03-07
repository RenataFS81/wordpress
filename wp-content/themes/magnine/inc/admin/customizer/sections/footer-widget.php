<?php
// footer widget Options.
$wp_customize->add_section(
    'footer_widget_section',
    array(
        'title' => __('Footer Widget Options', 'magnine'),
        'panel' => 'footer_options_panel',
    )
);



/*Enable Footer Nav*/
$wp_customize->add_setting(
    'magnine_options[enable_footer_widget]',
    array(
        'default'           => $magnine_default['enable_footer_widget'],
        'sanitize_callback' => 'magnine_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magnine_options[enable_footer_widget]',
    array(
        'label'       => __( 'Show Footer widgetarea', 'magnine' ),
        'section'     => 'footer_widget_section',
        'type'     => 'checkbox',
    )
);

// Option to choose footer column layout.
$wp_customize->add_setting(
	'magnine_options[footer_column_layout]',
	array(
		'default'           => $magnine_default['footer_column_layout'],
		'sanitize_callback' => 'magnine_sanitize_radio',
	)
);
$wp_customize->add_control(
	new Magnine_Custom_Radio_Image_Control(
		$wp_customize,
		'magnine_options[footer_column_layout]',
		array(
			'label'       => __( 'Footer Column Layout', 'magnine' ),
			'description' => __( 'Some footer widgetareas will not be used based on the footer column layout chosen. Also make sure to insert at least one widget on the respective widgetarea for it to display.', 'magnine' ),
			'section'     => 'footer_widget_section',
			'choices'     => magnine_get_footer_layouts(),
			'priority'    => 40,
		)
	)
);
