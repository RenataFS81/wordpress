<?php

// Show Title.
$wp_customize->add_setting(
	'enable_home_title',
	array(
		'default'           => $theme_options_defaults['enable_home_title'],
		'sanitize_callback' => 'magty_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Magty_Toggle_Control(
		$wp_customize,
		'enable_home_title',
		array(
			'label'           => __( 'Show title above homepage posts', 'magty' ),
			'description'     => __( 'Add a title that will show above homepage posts to match theme title styles.', 'magty' ),
			'section'         => 'static_front_page',
			'active_callback' => 'magty_is_posts_on_front',

		)
	)
);

// Home Title.
$wp_customize->add_setting(
	'front_page_content_title',
	array(
		'default'           => $theme_options_defaults['front_page_content_title'],
		'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control(
	'front_page_content_title',
	array(
		'label'           => __( 'Title', 'magty' ),
		'section'         => 'static_front_page',
		'type'            => 'text',
		'active_callback' => function( $control ) {
			return (
				magty_is_posts_on_front( $control )
				&&
				magty_is_home_title_enabled( $control )
			);
		},
	)
);

// Home Title Style.
$wp_customize->add_setting(
	'home_title_heading_style',
	array(
		'default'           => $theme_options_defaults['home_title_heading_style'],
		'sanitize_callback' => 'magty_sanitize_select',
	)
);
$wp_customize->add_control(
	'home_title_heading_style',
	array(
		'label'           => __( 'Home Title Style', 'magty' ),
		'section'         => 'static_front_page',
		'type'            => 'select',
		'choices'         => magty_get_title_styles(),
		'active_callback' => function( $control ) {
			return (
				magty_is_posts_on_front( $control )
				&&
				magty_is_home_title_enabled( $control )
			);
		},
	)
);

// Home Title Align.
$wp_customize->add_setting(
	'home_title_heading_align',
	array(
		'default'           => $theme_options_defaults['home_title_heading_align'],
		'sanitize_callback' => 'magty_sanitize_select',
	)
);
$wp_customize->add_control(
	'home_title_heading_align',
	array(
		'label'           => __( 'Home Title Alignment', 'magty' ),
		'section'         => 'static_front_page',
		'type'            => 'select',
		'choices'         => magty_get_title_alignments(),
		'active_callback' => function( $control ) {
			return (
				magty_is_posts_on_front( $control )
				&&
				magty_is_home_title_enabled( $control )
			);
		},
	)
);
