<?php
// Add Header Options Panel.
$wp_customize->add_panel(
	'header_options_panel',
	array(
		'title'       => __( 'Header', 'magty' ),
		'description' => __( 'Header options for the site.', 'magty' ),
		'priority'    => 39,
	)
);

// Move Site Identity section inside our panel.
$site_identity = $wp_customize->get_section( 'title_tagline' );
$site_identity->panel = 'header_options_panel';

// Move Header Image section inside our panel.
$site_identity = $wp_customize->get_section( 'header_image' );
$site_identity->panel = 'header_options_panel';

require_once get_template_directory() . '/inc/customizer/theme-options/header/site-identity.php';
require_once get_template_directory() . '/inc/customizer/theme-options/header/global-options.php';
require_once get_template_directory() . '/inc/customizer/theme-options/header/button-one.php';
require_once get_template_directory() . '/inc/customizer/theme-options/header/top-bar.php';
require_once get_template_directory() . '/inc/customizer/theme-options/header/header.php';
require_once get_template_directory() . '/inc/customizer/theme-options/header/primary-menu.php';
require_once get_template_directory() . '/inc/customizer/theme-options/header/sticky-menu.php';