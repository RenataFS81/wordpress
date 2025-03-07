<?php

$widgets_link = admin_url( 'widgets.php' );

// Add Footer Options Panel.
$wp_customize->add_panel(
	'footer_options_panel',
	array(
		'title'       => __( 'Footer', 'magty' ),
		'description' => __( 'Footer options for the site.', 'magty' ),
		'priority'    => 40,
	)
);

require_once get_template_directory() . '/inc/customizer/theme-options/footer/footer.php';
require_once get_template_directory() . '/inc/customizer/theme-options/footer/sub-footer.php';
require_once get_template_directory() . '/inc/customizer/theme-options/footer/scroll-to-top.php';