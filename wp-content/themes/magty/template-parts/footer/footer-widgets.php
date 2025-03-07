<?php
/**
 * Displays the footer widget area.
 *
 * @package Magty
 */

 /*Get the footer column from the customizer*/
$footer_column_layout = get_theme_mod( 'footer_column_layout', 'footer_layout_2' );
$footer_class         = 'col-md-6 col-lg-3';

// Match Column value with Column class.
if ( $footer_column_layout ) {
	switch ( $footer_column_layout ) {
		case 'footer_layout_1':
			$footer_column = 4;
			$footer_class  = 'col-md-6 col-lg-3';
			break;
		case 'footer_layout_2':
			$footer_column = 3;
			$footer_class  = 'col-md-4';
			break;
		case 'footer_layout_3':
			$footer_column = 2;
			$footer_class  = 'col-md-6';
			break;
		case 'footer_layout_4':
			$footer_column = 2;
			$footer_class  = array( 'col-md-6 col-lg-9', 'col-md-6 col-lg-3' );
			break;
		case 'footer_layout_5':
			$footer_column = 3;
			$footer_class  = array( 'col-lg-3', 'col-lg-6', 'col-lg-3' );
			break;
		case 'footer_layout_6':
			$footer_column = 2;
			$footer_class  = array( 'col-md-6 col-lg-3', 'col-md-6 col-lg-9' );
			break;
		case 'footer_layout_7':
			$footer_column = 1;
			$footer_class  = 'col-md-12';
			break;
		default:
			$footer_column = 4;
			$footer_class  = 'col-md-6 col-lg-3';
	}
} else {
	$footer_column = 4;
	$footer_class  = 'col-md-6 col-lg-3';
}

$cols = intval( apply_filters( 'magty_footer_widget_columns', $footer_column ) );

// Defines the number of active columns in this footer row.
for ( $j = $cols; 0 < $j; $j-- ) {
	if ( is_active_sidebar( 'footer-' . strval( $j ) ) ) {
		$columns = $j;
		break;
	}
}

if ( isset( $columns ) ) :

	$wrapper_classes = $footer_bg_image = $overlay_div = $border_class = '';

	if ( get_theme_mod( 'enable_border_above_footer' ) ) {
		$wrapper_classes .= ' saga-item-border-top';
	}

	/*Footer Background Image*/
	if ( get_theme_mod( 'enable_footer_bg_image' ) ) {
		$has_footer_bg_image = get_theme_mod( 'footer_bg_image' );
		if ( $has_footer_bg_image ) {
			$footer_bg_image = 'background-image:url(' . esc_url( $has_footer_bg_image ) . ')';
			$footer_bg_image = 'style="' . esc_attr( $footer_bg_image ) . '"';

			$wrapper_classes .= ' footer-bg-enabled';

			if ( get_theme_mod( 'footer_fixed_bg_image' ) ) {
				$wrapper_classes .= ' magty-bg-attachment-fixed';
			}

			$overlay_style  = 'background-color:' . get_theme_mod( 'footer_bg_image_overlay_color', '#000000' ) . ';';
			$overlay_style .= 'opacity:' . get_theme_mod( 'footer_bg_image_opacity', '0.5' ) . ';';

			$overlay_div = '<span aria-hidden="true" class="footer-bg-overlay" style="' . esc_attr( $overlay_style ) . '"></span>';
		}
	}

	// Inverted Footer.
	if ( 'dark' == get_theme_mod( 'footer_theme', 'dark' ) ) {
		$wrapper_classes .= ' inverted-footer';
	}

	$heading_style = ' saga-title-style-' . get_theme_mod( 'footer_widget_heading_style', 'style_9' );
	$heading_align = ' saga-title-align-' . get_theme_mod( 'footer_widget_heading_align', 'left' );

	$wrapper_classes .= $heading_style . $heading_align;
	?>
	<footer id="colophon" class="site-footer<?php echo esc_attr( $wrapper_classes ); ?>" <?php echo $footer_bg_image; ?>>
		<?php echo $overlay_div; ?>
		<div class="uf-wrapper">
			<div class="magty-footer-widgets">
				<div class="row g-4">
					<?php
					for ( $column = 1; $column <= $columns; $column++ ) :
						if ( is_active_sidebar( 'footer-' . strval( $column ) ) ) :

							// Get the proper column class.
							if ( is_array( $footer_class ) ) {
								$footer_display_class = $footer_class[ $column - 1 ];
							} else {
								$footer_display_class = $footer_class;
							}
							?>
							<div class="col-sm-12 footer-common-widget <?php echo esc_attr( $footer_display_class ); ?> footer-widget-<?php echo esc_attr( strval( $column ) ); ?>">
								<?php dynamic_sidebar( 'footer-' . strval( $column ) ); ?>
							</div><!-- .footer-widget-<?php echo esc_html( strval( $column ) ); ?> -->
							<?php
						endif;
					endfor;
					?>
				</div>
			</div>
		</div><!-- wrapper -->
	</footer><!-- #colophon -->
	<?php
	unset( $columns );
endif;
