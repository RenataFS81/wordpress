<?php
/**
 * Displays home columns widget area.
 *
 * @package Magty
 */

if ( is_active_sidebar( 'home-page-col-one' ) || is_active_sidebar( 'home-page-col-two' ) ) :

	$wrapper_class = '';

	$widget_style  = ' uf-wa-widget-' . get_theme_mod( 'home_col_one_widgets_style', 'style_1' );
	$heading_style = ' saga-title-style-' . get_theme_mod( 'home_col_one_widgetarea_heading_style', 'style_1' );
	$heading_align = ' saga-title-align-' . get_theme_mod( 'home_col_one_widgetarea_heading_align', 'left' );
	$col_one_class = $widget_style . $heading_style . $heading_align;

	$widget_style    = ' uf-wa-widget-' . get_theme_mod( 'home_col_two_widgets_style', 'style_1' );
	$heading_style   = ' saga-title-style-' . get_theme_mod( 'home_col_two_widgetarea_heading_style', 'style_1' );
	$heading_align   = ' saga-title-align-' . get_theme_mod( 'home_col_two_widgetarea_heading_align', 'left' );
	$hide_col_mobile = get_theme_mod( 'home_col_two_widgetarea_hide_mobile' ) ? ' hide-on-mobile ' : '';
	$col_two_class   = $widget_style . $heading_style . $heading_align . $hide_col_mobile;

	if ( is_active_sidebar( 'home-page-col-one' ) && is_active_sidebar( 'home-page-col-two' ) ) :
		$wrapper_class .= ' column-widgetarea-2-cols';
	endif;

	$col_order = get_theme_mod( 'home_col_order', 'style_1' );
	if ( 'style_1' == $col_order ) :
		$wrapper_class .= ' column-order-ls';
	else :
		$wrapper_class .= ' column-order-sl';
	endif;

	$wrapper_class = apply_filters( 'home_columns_widgetarea_wrapper_class', $wrapper_class );

	?>
	<div class="column-widgetarea-wrapper <?php echo esc_attr( $wrapper_class ); ?>">
		<div class="uf-wrapper">
			<?php do_action( 'home_columns_widgetarea_top' ); ?>
			<div class="column-widgetarea">
				<?php if ( is_active_sidebar( 'home-page-col-one' ) ) : ?>
					<div class="home-page-col-one-widget-region magty-pirmary-column <?php echo esc_attr( $col_one_class ); ?>" role="complementary">
						<div class="magty-sticky-col">
							<?php do_action( 'home_col_one_widgetarea_top' ); ?>
							<?php dynamic_sidebar( 'home-page-col-one' ); ?>
							<?php do_action( 'home_col_one_widgetarea_bottom' ); ?>
						</div>
					</div>
				<?php endif; ?>
				<?php if ( is_active_sidebar( 'home-page-col-two' ) ) : ?>
					<div class="home-page-col-two-widget-region magty-secondary-column <?php echo esc_attr( $col_two_class ); ?>" role="complementary">
						<div class="magty-sticky-col">
							<?php do_action( 'home_col_two_widgetarea_top' ); ?>
							<?php dynamic_sidebar( 'home-page-col-two' ); ?>
							<?php do_action( 'home_col_two_widgetarea_bottom' ); ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
			<?php do_action( 'home_columns_widgetarea_bottom' ); ?>
		</div>
	</div>
	<?php
	
endif;
