<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Magty
 */

if ( magty_is_wc_active() ) :

	$page_layout = magty_get_page_layout();

	if ( is_shop() || is_product_category() ) :

		$page_layout = get_theme_mod( 'shop_page_layout', 'right-sidebar' );

		if ( 'no-sidebar' != $page_layout ) :

			if ( get_theme_mod( 'shop_page_enable_sidebar' ) && is_active_sidebar( 'wc-sidebar' ) ) :
				?>

				<div id="secondary" class="magty-secondary-column">
					<aside class="widget-area">
						<?php dynamic_sidebar( 'wc-sidebar' ); ?>
					</aside>
				</div>

				<?php
			else :

				if ( is_active_sidebar( 'sidebar-1' ) ) :
					?>
					<div id="secondary" class="magty-secondary-column">
						<aside class="widget-area">
							<?php dynamic_sidebar( 'sidebar-1' ); ?>
						</aside>
					</div>
					<?php
				endif;

			endif;

		endif;

	elseif ( is_product() ) :

		$page_layout = get_theme_mod( 'product_page_layout', 'right-sidebar' );

		if ( 'no-sidebar' != $page_layout ) :

			if ( get_theme_mod( 'product_page_enable_sidebar' ) && is_active_sidebar( 'wc-product-single-sidebar' ) ) :
				?>

				<div id="secondary" class="magty-secondary-column">
					<aside class="widget-area">
						<?php dynamic_sidebar( 'wc-product-single-sidebar' ); ?>
					</aside>
				</div>

				<?php
			else :

				if ( is_active_sidebar( 'sidebar-1' ) ) :
					?>
					<div id="secondary" class="magty-secondary-column">
						<aside class="widget-area">
							<?php dynamic_sidebar( 'sidebar-1' ); ?>
						</aside>
					</div>
					<?php
				endif;

			endif;

		endif;

	else :

		magty_get_sidebar();

	endif;

else :

	magty_get_sidebar();

endif;
