<?php
/**
 * Displays before home columns widget area.
 *
 * @package Magty
 */

if ( is_active_sidebar( 'before-homepage-cols-widget-area' ) ) :

	$widget_style  = ' uf-wa-widget-' . get_theme_mod( 'before_home_cols_widgets_style', 'style_1' );
	$heading_style = ' saga-title-style-' . get_theme_mod( 'before_home_cols_widgetarea_heading_style', 'style_1' );
	$heading_align = ' saga-title-align-' . get_theme_mod( 'before_home_cols_widgetarea_heading_align', 'left' );
	$class         = $widget_style . $heading_style . $heading_align;
	$class         = apply_filters( 'before_home_columns_widgetarea_wrapper_class', $class );
	?>
	<div class="before-home-cols-widget-region general-widget-area <?php echo esc_attr( $class ); ?>" role="complementary">
		<div class="uf-wrapper">
			<?php do_action( 'before_home_columns_widgetarea_top' ); ?>
			<?php dynamic_sidebar( 'before-homepage-cols-widget-area' ); ?>
			<?php do_action( 'before_home_columns_widgetarea_bottom' ); ?>
		</div>
	</div>
	<?php

endif;
