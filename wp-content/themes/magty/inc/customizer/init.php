<?php
/**
 * Magty Theme Customizer
 *
 * @package Magty
 */

// Load customizer callback.
require get_template_directory() . '/inc/customizer/callback.php';

// Load google Fonts.
require get_template_directory() . '/inc/fonts/fonts.php';

/**
 * Add Theme Customizer Options
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function magty_customize_register( $wp_customize ) {

	/*Load custom controls for customizer.*/
	require get_template_directory() . '/inc/customizer/controls/init.php';

	/*Load sanitization functions.*/
	require get_template_directory() . '/inc/customizer/sanitize.php';

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'magty_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'magty_customize_partial_blogdescription',
			)
		);
	}

	// Some Defaults to reference.
	$theme_options_defaults = magty_get_default_customizer_values();

	// Register custom section types.
	$wp_customize->register_panel_type( 'Magty_Panel_Upsell' );
	$wp_customize->register_section_type( 'Magty_Section_Upsell' );
	$wp_customize->register_section_type( 'Magty_Section_Features_List' );

	/*Load customizer options.*/
	require_once get_template_directory() . '/inc/customizer/theme-options/upsell.php';
	require_once get_template_directory() . '/inc/customizer/theme-options/general/init.php';
	require_once get_template_directory() . '/inc/customizer/theme-options/performance/init.php';
	require_once get_template_directory() . '/inc/customizer/theme-options/header/init.php';
	require_once get_template_directory() . '/inc/customizer/theme-options/footer/init.php';
	require_once get_template_directory() . '/inc/customizer/theme-options/colors.php';
	require_once get_template_directory() . '/inc/customizer/theme-options/front-page/init.php';
	require_once get_template_directory() . '/inc/customizer/theme-options/typography/init.php';
	require_once get_template_directory() . '/inc/customizer/theme-options/archive/init.php';
	require_once get_template_directory() . '/inc/customizer/theme-options/single/init.php';
	require_once get_template_directory() . '/inc/customizer/theme-options/sidebar/init.php';
	require_once get_template_directory() . '/inc/customizer/theme-options/widgetareas/init.php';

	if ( magty_is_wc_active() ) :
		require_once get_template_directory() . '/inc/customizer/theme-options/woocommerce.php';
	endif;
}
add_action( 'customize_register', 'magty_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function magty_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function magty_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function magty_customize_preview_js() {

	$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	wp_enqueue_script( 'magty-customizer', get_template_directory_uri() . '/assets/custom/js/customizer' . $min . '.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'magty_customize_preview_js' );

/**
 * Customizer control scripts and styles.
 *
 * @since 1.0.0
 */
function magty_customizer_control_scripts() {

	$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	wp_enqueue_style( 'magty-customizer-css', get_template_directory_uri() . '/assets/custom/css/customizer' . $min . '.css', array(), _S_VERSION );
	wp_enqueue_script( 'magty-customizer-controls', get_template_directory_uri() . '/assets/custom/js/customizer-admin' . $min . '.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-sortable', 'customize-controls' ), _S_VERSION, true );
}
add_action( 'customize_controls_enqueue_scripts', 'magty_customizer_control_scripts', 0 );
