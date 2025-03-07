<?php
// Add Widgetareas Options Panel.
$wp_customize->add_panel(
	'widgetareas_options_panel',
	array(
		'title'       => __( 'Widgetareas', 'magty' ),
		'description' => __( 'Manage Widgetareas options.', 'magty' ),
		'priority'    => 45,
	)
);
require_once get_template_directory() . '/inc/customizer/theme-options/widgetareas/offcanvas.php';
require_once get_template_directory() . '/inc/customizer/theme-options/widgetareas/below-header.php';
require_once get_template_directory() . '/inc/customizer/theme-options/widgetareas/before-home-columns.php';
require_once get_template_directory() . '/inc/customizer/theme-options/widgetareas/home-columns.php';
require_once get_template_directory() . '/inc/customizer/theme-options/widgetareas/above-home.php';
require_once get_template_directory() . '/inc/customizer/theme-options/widgetareas/home-before-posts.php';
require_once get_template_directory() . '/inc/customizer/theme-options/widgetareas/home-after-posts.php';
require_once get_template_directory() . '/inc/customizer/theme-options/widgetareas/below-home.php';
require_once get_template_directory() . '/inc/customizer/theme-options/widgetareas/above-footer.php';
require_once get_template_directory() . '/inc/customizer/theme-options/widgetareas/above-footer-nc.php';
require_once get_template_directory() . '/inc/customizer/theme-options/widgetareas/below-footer.php';
require_once get_template_directory() . '/inc/customizer/theme-options/widgetareas/below-footer-nc.php';
