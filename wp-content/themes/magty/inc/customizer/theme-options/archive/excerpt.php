<?php

$wp_customize->add_section(
	'excerpt_options',
	array(
		'title' => __( 'Excerpt Options', 'magty' ),
		'panel' => 'blog_options_panel',
	)
);

// Maximium Excerpt Length.
$wp_customize->add_setting(
	'max_excerpt_length',
	array(
		'default'           => $theme_options_defaults['max_excerpt_length'],
		'sanitize_callback' => 'absint',
	)
);
$wp_customize->add_control(
	'max_excerpt_length',
	array(
		'label'    => __( 'Maximum Excerpt Length', 'magty' ),
		'description' => __( 'This can be used to increase the maximum number of words allowed in the excerpt on the whole site. To change the excerpt value of a particular section, use the excerpt settings provided there.', 'magty' ),
		'section'  => 'excerpt_options',
		'type'     => 'number',
		'priority' => 10,
	)
);
