<?php
/**
* Load widget components
*
* @since Bosa Clinic 1.0.0
*/
// @codingStandardsIgnoreStart WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
require_once get_parent_theme_file_path( '/inc/widgets/class-base-widget.php' );
require_once get_parent_theme_file_path( '/inc/widgets/latest-posts.php' );
require_once get_parent_theme_file_path( '/inc/widgets/author.php' );
// @codingStandardsIgnoreEnd WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
/**
 * Register widgets
 *
 * @since Bosa Clinic 1.0.0
 */
/**
* Load all the widgets
* @since Bosa Clinic 1.0.0
*/
function bosa_clinic_register_widget() {

	$widgets = array(
		'Bosa_Clinic_Latest_Posts_Widget',
		'Bosa_Clinic_Author_Widget',
	);

	foreach ( $widgets as $key => $value) {
    	register_widget( $value );
	}
}
add_action( 'widgets_init', 'bosa_clinic_register_widget' );