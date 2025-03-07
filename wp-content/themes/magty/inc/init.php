<?php

// Load libraries for this theme.
if ( is_admin() ) {
	require_once get_template_directory() . '/inc/dashboard/class-dashboard.php';
}

// Implement the Custom Header feature.
require get_template_directory() . '/inc/custom-header.php';

// Custom template tags for the theme.
require get_template_directory() . '/inc/template-tags.php';

// Some Helper Template functions for the theme.
require get_template_directory() . '/inc/template-functions.php';

// Handle SVG icons.
require get_template_directory() . '/classes/class-magty-svg-icons.php';
require get_template_directory() . '/inc/svg-icons.php';

// Comment Walker.
require get_template_directory() . '/classes/class-magty-walker-comment.php';

// Load helper functions for theme.
require get_template_directory() . '/inc/helpers.php';

// Customizer additions.
require get_template_directory() . '/inc/customizer/init.php';

// Widgets and Sidebars for this theme.
require get_template_directory() . '/inc/widgets/init.php';

// Post meta fields for this theme.
require get_template_directory() . '/inc/post-meta/init.php';

// Category meta fields for this theme.
require get_template_directory() . '/inc/category-meta/init.php';

// Inline Style.
require get_template_directory() . '/inc/inline-style.php';

// Ajax posts load helper file.
require get_template_directory() . '/inc/load-posts.php';

// Load WooCommerce compatibility file.
if ( magty_is_wc_active() ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

// Load Hooks
require get_template_directory() . '/template-parts/header/hooks.php';