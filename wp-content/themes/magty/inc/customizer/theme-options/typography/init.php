<?php
// Add Typography Options Panel.
$wp_customize->add_panel(
	'typography_options_panel',
	array(
		'title'       => __( 'Typography', 'magty' ),
		'description' => __( 'Manage typography settings for different elements of the site.', 'magty' ),
		'priority'    => 43,
	)
);

require_once get_template_directory() . '/inc/customizer/theme-options/typography/primary-menu.php';
require_once get_template_directory() . '/inc/customizer/theme-options/typography/sub-menu.php';
require_once get_template_directory() . '/inc/customizer/theme-options/typography/headings.php';
require_once get_template_directory() . '/inc/customizer/theme-options/typography/body.php';