<?php
// Add Blog Options Panel.
$wp_customize->add_panel(
	'blog_options_panel',
	array(
		'title'       => __( 'Archive Posts', 'magty' ),
		'description' => __( 'Manage posts options for archive.', 'magty' ),
		'priority'    => 43,
	)
);

require_once get_template_directory() . '/inc/customizer/theme-options/archive/archive.php';
require_once get_template_directory() . '/inc/customizer/theme-options/archive/excerpt.php';