<?php
/**
 * Displays before footer widget area.
 *
 * @package Magty
 */

if ( is_active_sidebar( 'before-footer-widgetarea' ) ) :

	$widget_style  = ' uf-wa-widget-' . get_theme_mod( 'above_footer_widgets_style', 'style_1' );
	$heading_style = ' saga-title-style-' . get_theme_mod( 'above_footer_widgetarea_heading_style', 'style_1' );
	$heading_align = ' saga-title-align-' . get_theme_mod( 'above_footer_widgetarea_heading_align', 'left' );
	$class         = $widget_style . $heading_style . $heading_align;
	$class         = apply_filters( 'above_footer_widgetarea_wrapper_class', $class );
	?>
	<div class="before-footer-widget-region general-widget-area <?php echo esc_attr( $class ); ?>" role="complementary">
		<div class="uf-wrapper">
			<?php do_action( 'above_footer_widgetarea_top' ); ?>
			<?php dynamic_sidebar( 'before-footer-widgetarea' ); ?>
			<?php do_action( 'above_footer_widgetarea_bottom' ); ?>
		</div>
	</div>
	<?php

endif;
