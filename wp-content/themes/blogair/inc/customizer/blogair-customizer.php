<?php
function blogair_customizer_settings( $wp_customize ){

    // Header Navigation
	$wp_customize->add_section( 'header_navigation',
		array(
			'priority'    => 3,
			'title'       => esc_html__('Header Navigation','blogair'),
			'panel'       => 'blogone_header',
		)
	);

	// blogair_nav_btn_show
	$wp_customize->add_setting('blogair_nav_btn_show',
		array(
			'sanitize_callback' => 'blogone_sanitize_checkbox',
			'default'           => true,
			'priority'          => 1,
		)
	);
	$wp_customize->add_control('blogair_nav_btn_show',
		array(
			'type'        => 'checkbox',
			'label'       => esc_html__('Hide/Show Nav Button?', 'blogair'),
			'section'     => 'header_navigation',
		)
	);

	 // blogair_nav_btn_label
	$wp_customize->add_setting('blogair_nav_btn_label',
		array(
			'sanitize_callback' => 'sanitize_text_field',
			'default'           => __('Subscribe','blogair'),
			'priority'          => 2
		)
	);
	$wp_customize->add_control('blogair_nav_btn_label',
		array(
			'type'        => 'text',
			'label'       => esc_html__('Nav Button Label', 'blogair'),
			'section'     => 'header_navigation',
		)
	);

	// blogair_nav_btn_link
	$wp_customize->add_setting('blogair_nav_btn_link',
		array(
			'sanitize_callback' => 'sanitize_text_field',
			'default'           => __('Subscribe','blogair'),
			'priority'          => 3,
		)
	);

	$wp_customize->add_control('blogair_nav_btn_link',
		array(
			'type'        => 'text',
			'label'       => esc_html__('Nav Button Link', 'blogair'),
			'section'     => 'header_navigation',
		)
	);

	// blogair_nav_btn_target
	$wp_customize->add_setting('blogair_nav_btn_target',
		array(
			'sanitize_callback' => 'blogone_sanitize_checkbox',
			'default'           => false,
			'priority'          => 4,
		)
	);

	$wp_customize->add_control('blogair_nav_btn_target',
		array(
			'type'        => 'checkbox',
			'label'       => esc_html__('Nav button open in new tab?', 'blogair'),
			'section'     => 'header_navigation',
		)
	);

	 // blogair_nav_ticker_title
	$wp_customize->add_setting('blogair_nav_ticker_title',
		array(
			'sanitize_callback' => 'sanitize_text_field',
			'default'           => __('Ticker','blogair'),
			'priority'          => 5
		)
	);
	$wp_customize->add_control('blogair_nav_ticker_title',
		array(
			'type'        => 'text',
			'label'       => esc_html__('Ticker Title', 'blogair'),
			'section'     => 'header_navigation',
		)
	);	

	 // blogair_nav_marquee_text
	$wp_customize->add_setting('blogair_nav_marquee_text',
		array(
			'sanitize_callback' => 'wp_kses_post',
			'default'           => __( 'The Strength of a Plant-Based Diet | Adopting Minimalism: Streamline Your Life | Outdoor Adventures: Must-Have Gear for Hiking', 'blogair' ),
			'priority'          => 6
		)
	);
	$wp_customize->add_control('blogair_nav_marquee_text',
		array(
			'type'        => 'textarea',
			'label'      => __( 'Marquee Text (Separate items with |)', 'blogair' ),
			'section'     => 'header_navigation',
		)
	);	
}
add_action('customize_register','blogair_customizer_settings');