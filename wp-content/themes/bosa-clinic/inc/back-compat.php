<?php
/**
 * Bosa Clinic back compat functionality
 *
 * Prevents Bosa Clinic from running on WordPress versions prior to 5.0,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 5.0.
 *
 * @since Bosa Clinic 1.0.0
 */

/**
 * Prevent switching to Bosa Clinic on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since Bosa Clinic 1.0.0
 */
function bosa_clinic_switch_theme() {
	switch_theme( WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'bosa_clinic_upgrade_notice' );
}
add_action( 'after_switch_theme', 'bosa_clinic_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Bosa Clinic on WordPress versions prior to 5.0.
 *
 * @since Bosa Clinic 1.0.0
 * @global string $wp_version WordPress version.
 */
function bosa_clinic_upgrade_notice() {
	/* translators: %s - WordPress version*/
	$message = sprintf( esc_html__( 'Bosa Clinic requires at least WordPress version 5.0. You are running version %s. Please upgrade and try again.', 'bosa-clinic' ),  $GLOBALS['wp_version'] ) ;
	printf( '<div class="error"><p>%s</p></div>', $message ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 5.0.
 *
 * @since Bosa Clinic 1.0.0
 *
 * @global string $wp_version WordPress version.
 */
function bosa_clinic_customize() {
	/* translators: %s - WordPress version*/
	wp_die( sprintf( esc_html__( 'Bosa Clinic requires at least WordPress version 5.0. You are running version %s. Please upgrade and try again.', 'bosa-clinic' ), esc_html($GLOBALS['wp_version'] ) ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'bosa_clinic_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 5.0.
 *
 * @since Bosa Clinic 1.0.0
 * @global string $wp_version WordPress version.
 */
function bosa_clinic_preview() {
	if ( isset( $_GET['preview'] ) ) {
		/* translators: %s - WordPress version*/
		wp_die( sprintf( esc_html__( 'Bosa Clinic requires at least WordPress version 5.0. You are running version %s. Please upgrade and try again.', 'bosa-clinic' ), esc_html( $GLOBALS['wp_version'] ) ) );
	}
}
add_action( 'template_redirect', 'bosa_clinic_preview' );
