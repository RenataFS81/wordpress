<?php
// Add Performance Options Panel.
$wp_customize->add_panel(
	'performance_options_panel',
	array(
		'title'       => __( 'Performance', 'magty' ),
		'description' => __( 'Some performance options for the site.', 'magty' ),
		'priority'    => 38,
	)
);

require_once get_template_directory() . '/inc/customizer/theme-options/performance/widgets-css-optimization.php';
