<?php
/**
 * Displays after home widget area.
 *
 * @package Magty
 */

if ( is_active_sidebar( 'below-homepage-widget-area' ) ) :

	$widget_style  = ' uf-wa-widget-' . get_theme_mod( 'below_home_widgets_style', 'style_1' );
	$heading_style = ' saga-title-style-' . get_theme_mod( 'below_home_widgetarea_heading_style', 'style_1' );
	$heading_align = ' saga-title-align-' . get_theme_mod( 'below_home_widgetarea_heading_align', 'left' );
	$class         = $widget_style . $heading_style . $heading_align;
	$class         = apply_filters( 'below_home_widgetarea_wrapper_class', $class );
	?>
	<div class="below-home-widget-region general-widget-area <?php echo esc_attr( $class ); ?>" role="complementary">
		<div class="uf-wrapper">
			<?php do_action( 'below_home_widgetarea_top' ); ?>
			<?php dynamic_sidebar( 'below-homepage-widget-area' ); ?>
			<?php do_action( 'below_home_widgetarea_bottom' ); ?>
		</div>
	</div>
	<?php

endif;
