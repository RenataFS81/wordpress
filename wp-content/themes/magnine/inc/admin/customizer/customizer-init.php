<?php
/**
 * MagNine Theme Customizer
 *
 * @package MagNine
 */
/**
 * Customizer default values.
 */
require get_template_directory() . '/inc/admin/customizer/helpers/helper-function.php';
require get_template_directory() . '/inc/admin/customizer/helpers/defaults.php';
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function magnine_customize_register( $wp_customize ) {

	/*Load custom controls for customizer.*/
	require get_template_directory() . '/inc/admin/customizer/helpers/controls.php';

	/*Load sanitization functions.*/
	require get_template_directory() . '/inc/admin/customizer/helpers/sanitize.php';

	require get_template_directory() . '/inc/admin/customizer/helpers/callback.php';

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'magnine_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'magnine_customize_partial_blogdescription',
			)
		);
	}

	/*Get default values to set while building customizer elements*/
	$magnine_default = magnine_get_all_customizer_default_values();
	// Register custom section types.
	$wp_customize->register_section_type( 'Magnine_Section_Features_List' );

	require_once get_template_directory() . '/inc/admin/customizer/sections/panel.php';
}
add_action( 'customize_register', 'magnine_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function magnine_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function magnine_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function magnine_customize_preview_js() {
    $min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
	wp_enqueue_script( 'magnine-customizer-js', get_template_directory_uri() . '/inc/admin/customizer/assets/js/customizer' . $min . '.js', array( 'customize-preview' ), MAGNINE_VERSION, true );
}
add_action( 'customize_preview_init', 'magnine_customize_preview_js' );

/**
 * Customizer control scripts and styles.
 *
 * @since MagNine 1.0.0
 */
function magnine_customizer_control_scripts() {
	$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
	wp_enqueue_style( 'magnine-customizer-css', get_template_directory_uri() . '/inc/admin/customizer/assets/css/customizer' . $min . '.css', array(), MAGNINE_VERSION );
}
add_action( 'customize_controls_enqueue_scripts', 'magnine_customizer_control_scripts', 0 );

