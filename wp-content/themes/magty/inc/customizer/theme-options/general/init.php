<?php
// Add General Options Panel.
$wp_customize->add_panel(
	'general_options_panel',
	array(
		'title'       => __( 'General', 'magty' ),
		'description' => __( 'Some general options for the site.', 'magty' ),
		'priority'    => 38,
	)
);

require_once get_template_directory() . '/inc/customizer/theme-options/general/elements-design.php';
require_once get_template_directory() . '/inc/customizer/theme-options/general/buttons.php';
require_once get_template_directory() . '/inc/customizer/theme-options/general/preloader.php';
require_once get_template_directory() . '/inc/customizer/theme-options/general/progressbar.php';
require_once get_template_directory() . '/inc/customizer/theme-options/general/breadcrumb.php';
require_once get_template_directory() . '/inc/customizer/theme-options/general/post-meta.php';
require_once get_template_directory() . '/inc/customizer/theme-options/general/post-title.php';
require_once get_template_directory() . '/inc/customizer/theme-options/general/card-elements.php';
