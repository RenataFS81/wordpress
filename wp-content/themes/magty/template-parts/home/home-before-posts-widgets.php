<?php
/**
 * Displays before home posts widget area.
 *
 * @package Magty
 */

if ( is_active_sidebar( 'home-page-widget-area' ) ) :

	$widget_style  = ' uf-wa-widget-' . get_theme_mod( 'before_home_posts_widgets_style', 'style_1' );
	$heading_style = ' saga-title-style-' . get_theme_mod( 'before_home_posts_widgetarea_heading_style', 'style_1' );
	$heading_align = ' saga-title-align-' . get_theme_mod( 'before_home_posts_widgetarea_heading_align', 'left' );
	$class         = $widget_style . $heading_style . $heading_align;
	$class         = apply_filters( 'before_home_posts_widgetarea_wrapper_class', $class );
	?>
	<div class="home-page-widget-region before-posts general-widget-area <?php echo esc_attr( $class ); ?>" role="complementary">
		<?php do_action( 'before_home_posts_widgetarea_top' ); ?>
		<?php dynamic_sidebar( 'home-page-widget-area' ); ?>
		<?php do_action( 'before_home_posts_widgetarea_bottom' ); ?>
	</div>
	<?php

endif;
