<?php
// Add Single Post Options Panel.
$wp_customize->add_panel(
	'single_posts_options_panel',
	array(
		'title'       => __( 'Single Posts', 'magty' ),
		'description' => __( 'Manage options for single post pages.', 'magty' ),
		'priority'    => 44,
	)
);

require_once get_template_directory() . '/inc/customizer/theme-options/single/single.php';
require_once get_template_directory() . '/inc/customizer/theme-options/single/author-box.php';
require_once get_template_directory() . '/inc/customizer/theme-options/single/related-posts.php';
require_once get_template_directory() . '/inc/customizer/theme-options/single/author-posts.php';
require_once get_template_directory() . '/inc/customizer/theme-options/single/comments.php';