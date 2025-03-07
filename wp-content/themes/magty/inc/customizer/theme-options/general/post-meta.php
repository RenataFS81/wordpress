<?php
$wp_customize->add_section(
	'post_meta_options',
	array(
		'title' => __( 'Post Meta Options', 'magty' ),
		'panel' => 'general_options_panel',
	)
);

/*Post Meta icons Color*/
$wp_customize->add_setting(
	'global_post_meta_icons_color',
	array(
		'default'           => $theme_options_defaults['global_post_meta_icons_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'global_post_meta_icons_color',
		array(
			'label'    => __( 'Post Meta Icons Color', 'magty' ),
			'section'  => 'post_meta_options',
			'type'     => 'color',
			'priority' => 10,
		)
	)
);
