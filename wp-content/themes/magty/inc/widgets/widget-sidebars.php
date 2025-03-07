<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function magty_widgets_init() {

	$sidebar_args['sidebar'] = array(
		'name'        => __( 'Sidebar', 'magty' ),
		'id'          => 'sidebar-1',
		'description' => '',
	);

	// Different sidebars for Woocommerce.
	if ( magty_is_wc_active() ) {

		$sidebar_args['wc_sidebar'] = array(
			'name'        => __( 'WooCommerce Shop/Category page Sidebar', 'magty' ),
			'id'          => 'wc-sidebar',
			'description' => __( 'Widgets added to this region will appear on the shop or category page of woocommerce.', 'magty' ),
		);

		$sidebar_args['wc_product_single_sidebar'] = array(
			'name'        => __( 'WooCommerce Product Detail Page Sidebar', 'magty' ),
			'id'          => 'wc-product-single-sidebar',
			'description' => __( 'Widgets added to this region will appear on detail page of a woocommerce product.', 'magty' ),
		);

	}

	$sidebar_args['offcanvas_before_menu'] = array(
		'name'        => __( 'Offcanvas Before Menu', 'magty' ),
		'id'          => 'offcanvas-before-menu',
		'description' => __( 'Widgets added to this region will appear before menu in the offcanvas sidebar.', 'magty' ),
	);

	$sidebar_args['offcanvas_after_menu'] = array(
		'name'        => __( 'Offcanvas After Menu', 'magty' ),
		'id'          => 'offcanvas-after-menu',
		'description' => __( 'Widgets added to this region will appear after menu in the offcanvas sidebar.', 'magty' ),
	);

	$sidebar_args['below_header'] = array(
		'name'        => __( 'Below Header', 'magty' ),
		'id'          => 'below-header',
		'description' => __( 'Widgets added to this region will appear beneath the header and above the main content.', 'magty' ),
	);

	$sidebar_args['homepage_before_col'] = array(
		'name'        => __( 'Before Homepage Columns', 'magty' ),
		'id'          => 'before-homepage-cols-widget-area',
		'description' => __( 'Widgets added to this region will appear above the homepage columns content.', 'magty' ),
	);

	$sidebar_args['homepage_col_one'] = array(
		'name'        => __( 'Homepage Column One', 'magty' ),
		'id'          => 'home-page-col-one',
		'description' => __( 'Widgets added to this region will appear on the homepage column.', 'magty' ),
	);

	$sidebar_args['homepage_col_two'] = array(
		'name'        => __( 'Homepage Column Two', 'magty' ),
		'id'          => 'home-page-col-two',
		'description' => __( 'Widgets added to this region will appear on the homepage column.', 'magty' ),
	);

	$sidebar_args['above_homepage'] = array(
		'name'        => __( 'Above Homepage', 'magty' ),
		'id'          => 'above-homepage-widget-area',
		'description' => __( 'Widgets added to this region will appear above the homepage content. Basically useful if you want to have sidebar on homepage but want some content on top without the sidebar too.', 'magty' ),
	);

	$sidebar_args['homepage_before_posts'] = array(
		'name'        => __( 'Homepage Before Posts', 'magty' ),
		'id'          => 'home-page-widget-area',
		'description' => __( 'Widgets added to this region will appear on the homepage before posts listing.', 'magty' ),
	);

	/*
	Get homepage sidebar option from the customizer*/
	// if ( get_theme_mod( 'front_page_enable_sidebar' ) ) {
		$sidebar_args['homepage_sidebar'] = array(
			'name'        => __( 'Homepage Sidebar', 'magty' ),
			'id'          => 'home-page-sidebar',
			'description' => __( 'Widgets added to this region will appear on the homepage sidebar.', 'magty' ),
		);
		// }

		$sidebar_args['homepage_after_posts'] = array(
			'name'        => __( 'Homepage After Posts', 'magty' ),
			'id'          => 'home-after-posts-widget-area',
			'description' => __( 'Widgets added to this region will appear on the homepage after posts listing.', 'magty' ),
		);

		$sidebar_args['below_homepage'] = array(
			'name'        => __( 'Below Homepage', 'magty' ),
			'id'          => 'below-homepage-widget-area',
			'description' => __( 'Widgets added to this region will appear below the homepage content. Basically useful if you want to have sidebar on homepage but want some content on bottom without the sidebar too.', 'magty' ),
		);

		$sidebar_args['above_footer'] = array(
			'name'        => __( 'Above Footer', 'magty' ),
			'id'          => 'before-footer-widgetarea',
			'description' => __( 'Widgets added to this region will appear above the footer.', 'magty' ),
		);

		$sidebar_args['above_footer_no_container'] = array(
			'name'        => __( 'Above Footer - No Container', 'magty' ),
			'id'          => 'before-footer-widgetarea-nc',
			'description' => __( 'Same as above footer but does not have its own container.', 'magty' ),
		);

		/*
		Get the footer column from the customizer*/
		// $footer_column_layout = get_theme_mod( 'footer_column_layout', 'footer_layout_2' );
		// if ( $footer_column_layout ) {
		// switch ( $footer_column_layout ) {
		// case 'footer_layout_1':
		// $footer_column = 4;
		// break;
		// case 'footer_layout_2':
		// case 'footer_layout_5':
		// $footer_column = 3;
		// break;
		// case 'footer_layout_3':
		// case 'footer_layout_4':
		// case 'footer_layout_6':
		// $footer_column = 2;
		// break;
		// default:
		// $footer_column = 4;
		// }
		// } else {
		// $footer_column = 4;
		// }

		$footer_column = 4;
		$cols          = intval( apply_filters( 'magty_footer_widget_columns', $footer_column ) );

		for ( $j = 1; $j <= $cols; $j++ ) {
			$footer = sprintf( 'footer_%d', $j );

			$footer_region_name        = sprintf( __( 'Footer Column %1$d', 'magty' ), $j );
			$footer_region_description = sprintf( __( 'Widgets added here will appear in column %1$d of the footer.', 'magty' ), $j );

			$sidebar_args[ $footer ] = array(
				'name'        => $footer_region_name,
				'id'          => sprintf( 'footer-%d', $j ),
				'description' => $footer_region_description,
			);
		}

		$sidebar_args['below_footer'] = array(
			'name'        => __( 'Below Footer', 'magty' ),
			'id'          => 'after-footer-widgetarea',
			'description' => __( 'Widgets added to this region will appear after the footer and before sub-footer.', 'magty' ),
		);

		$sidebar_args['below_footer_no_container'] = array(
			'name'        => __( 'Below Footer - No Container', 'magty' ),
			'id'          => 'after-footer-widgetarea-nc',
			'description' => __( 'Same as below footer but does not have its own container.', 'magty' ),
		);

		$sidebar_args = apply_filters( 'magty_sidebar_args', $sidebar_args );

		foreach ( $sidebar_args as $sidebar => $args ) {
			$widget_tags = array(
				'before_widget' => '<div id="%1$s" class="magty-element-block widget magty-widget %2$s"><div class="widget-content">',
				'after_widget'  => '</div></div>',
				'before_title'  => '<div class="widget-title-wrapper"><h2 class="widget-title"><span>',
				'after_title'   => '</span></h2></div>',
			);

			// Dynamically generated filter hooks. Allow changing widget wrapper and title tags. .
			$filter_hook = sprintf( 'magty_%s_widget_tags', $sidebar );
			$widget_tags = apply_filters( $filter_hook, $widget_tags );

			if ( is_array( $widget_tags ) ) {
				register_sidebar( $args + $widget_tags );
			}
		}
}
add_action( 'widgets_init', 'magty_widgets_init' );
