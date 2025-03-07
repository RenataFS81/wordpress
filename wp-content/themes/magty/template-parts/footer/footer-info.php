<?php

$wrapper_classes = $border_class = '';

$enable_copyright         = get_theme_mod( 'enable_copyright', true );
$enable_footer_nav        = get_theme_mod( 'enable_footer_nav' );
$enable_footer_social_nav = get_theme_mod( 'enable_footer_social_nav' );
$enable_footer_credit     = get_theme_mod( 'enable_footer_credit', true );

if ( $enable_copyright || $enable_footer_credit || $enable_footer_nav || $enable_footer_social_nav ) :
	if ( get_theme_mod( 'enable_border_above_sub_footer' ) ) {
		$border_class .= ' saga-item-border-top';
	}
	// Inverted Footer.
	if ( 'dark' == get_theme_mod( 'sub_footer_theme', 'dark' ) ) {
		$wrapper_classes .= ' inverted-sub-footer';
	}
	?>
	<div class="site-sub-footer<?php echo esc_attr( $wrapper_classes ); ?>">
		<div class="uf-wrapper">
			<div class="magty-footer-siteinfo<?php echo esc_attr( $border_class ); ?>">

				<div class="footer-credits">

					<?php if ( $enable_copyright ) : ?>
						<div class="footer-copyright">
							<?php
							$copyright_text = get_theme_mod( 'copyright_text', esc_html__( 'Copyright &copy; {{ date }}', 'magty' ) );
							if ( $copyright_text ) :
								$copyright_date_format = get_theme_mod( 'copyright_date_format', 'Y' );
								if ( $copyright_date_format ) {
									$copyright_date_format = date_i18n( $copyright_date_format, current_time( 'timestamp' ) );
								}
								$copyright_text = str_replace( '{{ date }}', $copyright_date_format, $copyright_text );
								echo wp_kses_post( $copyright_text );
							endif;
							?>
						</div><!-- .footer-copyright -->
					<?php endif; ?>

					<?php if ( $enable_footer_credit ) : ?>
						<?php if ( $enable_copyright ) : ?>
							<div class="theme-credit">
								<?php printf( esc_html__( '&nbsp;- Powered by %1$s.', 'magty' ), '<a href="https://unfoldwp.com/products/magty" target = "_blank" rel="designer">Magty</a>' ); ?>
							</div>
						<?php else: ?>
							<div class="theme-credit">
								<?php printf( esc_html__( 'Powered by %1$s.', 'magty' ), '<a href="https://unfoldwp.com/products/magty" target = "_blank" rel="designer">Magty</a>' ); ?>
							</div>
						<?php endif; ?>
					<?php endif; ?><!-- .theme-credit -->

				</div>

				<?php
				if ( $enable_footer_social_nav ) :

					$menu_class         = ' reset-list-style magty-social-icons ';
					$social_link_style  = get_theme_mod( 'footer_social_links_display_style', 'style_1' );
					$social_link_style .= magty_get_social_icons_class( $social_link_style );
					$social_link_color  = get_theme_mod( 'footer_social_links_color', 'theme_color' );
					$menu_class        .= $social_link_style . ' ' . $social_link_color;

					?>
					<div class="site-footer-menu footer-social-menu">
						<?php
						wp_nav_menu(
							array(
								'theme_location'  => 'social-menu',
								'container_class' => 'footer-navigation',
								'fallback_cb'     => false,
								'depth'           => 1,
								'menu_class'      => $menu_class,
								'link_before'     => '<span class="screen-reader-text">',
								'link_after'      => '</span>',
							)
						);
						?>
					</div>
				<?php endif; ?>

				<?php if ( $enable_footer_nav ) : ?>
					<div class="site-footer-menu footer-nav-menu">
						<?php
						wp_nav_menu(
							array(
								'theme_location'  => 'footer-menu',
								'container_class' => 'footer-navigation',
								'fallback_cb'     => false,
								'depth'           => 1,
								'menu_class'      => 'magty-footer-menu reset-list-style',
							)
						);
						?>
					</div>
				<?php endif; ?>

			</div><!-- .magty-footer-siteinfo-->
		</div>
	</div>

	<?php
endif;
