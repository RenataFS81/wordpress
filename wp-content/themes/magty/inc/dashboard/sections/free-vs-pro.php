<?php
/**
 * Free v Pro
 *
 * @package Magty
 */

$icons = array(
	'0' => '<span class="dashicons dashicons-no"></span>',
	'1' => '<span class="dashicons dashicons-yes"></span>',
);
?>
<div class="magty-dashboard-body">
	<div class="free-vs-pro-wrapper">
		<div class="section-cta-upgrade">
			<span><?php esc_html_e( 'PREMIUM', 'magty' ); ?></span>
			<h2><?php esc_html_e( 'Unlock More with Magty Pro', 'magty' ); ?></h2>
			<p><?php esc_html_e( 'Unlock all the possibilties and true potential with premium version of this theme', 'magty' ); ?></p>
			<a href="<?php echo esc_url( $this->theme_url . '?utm_source=wp&utm_medium=theme-dashboard&utm_campaign=fvp' ); ?>" target="_blank" class="button button-primary button-plus"><?php esc_html_e( 'Upgrade To Pro', 'magty' ); ?></a>
		</div>
		<table>
			<thead>
				<tr>
					<th class="magty-text-left"><?php esc_html_e( 'Features', 'magty' ); ?></th>
					<th class="magty-text-center"><?php esc_html_e( 'Free', 'magty' ); ?></th>
					<th class="magty-text-center"><?php esc_html_e( 'Pro', 'magty' ); ?></th>
				</tr>
			</thead>
			<tbody>
				<?php
				$free_vs_pro = array(
					array(
						'feature' => __( 'Help and support', 'magty' ),
						'free'    => __( 'Standard support', 'magty' ),
						'pro'     => __( 'High priority support', 'magty' ),
					),
					array(
						'feature' => __( 'Predesigned website templates', 'magty' ),
						'free'    => __( '1', 'magty' ),
						'pro'     => __( '5', 'magty' ),
					),
					array(
						'feature' => __( 'Seo optimized', 'magty' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Translation ready', 'magty' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'RTL ready', 'magty' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Post formats support', 'magty' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'WooCommerce ready', 'magty' ),
						'free'    => 1,
						'pro'     => __( 'With more options', 'magty' ),
					),
					array(
						'feature' => __( 'Preloader option', 'magty' ),
						'free'    => 1,
						'pro'     => __( '20+ Preloaders', 'magty' ),
					),
					array(
						'feature' => __( 'Progressbar option', 'magty' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Typography font option', 'magty' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Typography color option', 'magty' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Primary menu font option', 'magty' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Primary menu responisve font sizes', 'magty' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Sub menu font option', 'magty' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Sub menu responisve font sizes', 'magty' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Headings font option', 'magty' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'H1 - H6 color options', 'magty' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'H1 - H6 responisve font sizes', 'magty' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Body font option', 'magty' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Body responisve font sizes', 'magty' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Primary color option', 'magty' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Menu color option', 'magty' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Sub-menu color option', 'magty' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Homepage ticker posts', 'magty' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Multiple ticker labels', 'magty' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Multiple ticker styles', 'magty' ),
						'free'    => 0,
						'pro'     => __( '5+', 'magty' ),
					),
					array(
						'feature' => __( 'Homepage banner slider option', 'magty' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Banner slider multiple style', 'magty' ),
						'free'    => 0,
						'pro'     => __( '4', 'magty' ),
					),
					array(
						'feature' => __( 'Homepage banner thumbnail option', 'magty' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Homepage banner thumbnail style', 'magty' ),
						'free'    => 0,
						'pro'     => __( '3', 'magty' ),
					),
					array(
						'feature' => __( 'Homepage banner carousel option', 'magty' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Banner carousel multiple style', 'magty' ),
						'free'    => 0,
						'pro'     => __( '4', 'magty' ),
					),
					array(
						'feature' => __( 'Homepage pinned posts', 'magty' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Homepage banner section visibility options', 'magty' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Homepage banner section dimensions', 'magty' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Homepage banner section dividers', 'magty' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Homepage trending posts', 'magty' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Homepage trending post style', 'magty' ),
						'free'    => __( '1', 'magty' ),
						'pro'     => __( '2', 'magty' ),
					),
					array(
						'feature' => __( 'Homepage trending post visibility options', 'magty' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Homepage trending post section dimensions', 'magty' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Homepage trending post section dividers', 'magty' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Homepage layout option', 'magty' ),
						'free'    => 1,
						'pro'     => __( 'With more options', 'magty' ),
					),
					array(
						'feature' => __( 'Homepage custom sidebar', 'magty' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Darkmode option', 'magty' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Topbar option', 'magty' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Topbar color option', 'magty' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Header style', 'magty' ),
						'free'    => __( '3', 'magty' ),
						'pro'     => __( '5', 'magty' ),
					),
					array(
						'feature' => __( 'Header ad banner', 'magty' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Sticky header', 'magty' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Sticky header on scroll up', 'magty' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Header section dimensions', 'magty' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Menu Bar option', 'magty' ),
						'free'    => 1,
						'pro'     => 1,
					),
				
					array(
						'feature' => __( 'Sticky sidebar', 'magty' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Offcanvas', 'magty' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Offcanvas light/dark theme', 'magty' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Offcanvas logo', 'magty' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Offcanvas widgets title style', 'magty' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Archive style', 'magty' ),
						'free'    => __( '4', 'magty' ),
						'pro'     => __( '9', 'magty' ),
					),
					array(
						'feature' => __( 'Archive post metas', 'magty' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Ajax load posts on click', 'magty' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Infinite scroll load posts', 'magty' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Related posts', 'magty' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Floating related posts', 'magty' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Author posts', 'magty' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Author info box', 'magty' ),
						'free'    => 1,
						'pro'     => __( 'With social links option', 'magty' ),
					),
					array(
						'feature' => __( 'Integrated social share option', 'magty' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Single posts social share position', 'magty' ),
						'free'    => 0,
						'pro'     =>  __( '8+', 'magty' ),
					),
					array(
						'feature' => __( 'Page layout option', 'magty' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Category image option', 'magty' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Category color option', 'magty' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Category banner image option', 'magty' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Category different pagination', 'magty' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Category post metas option', 'magty' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Different design style for each category', 'magty' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Different design style for each tags', 'magty' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Tags different pagination', 'magty' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Tags post metas option', 'magty' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Custom widgets', 'magty' ),
						'free'    => __( '16+', 'magty' ),
						'pro'     => __( '22+', 'magty' ),
					),
					array(
						'feature' => __( 'Widgets title style & align options', 'magty' ),
						'free'    =>  __( '10+', 'magty' ),
						'pro'     =>  __( '20+', 'magty' ),
					),
					array(
						'feature' => __( 'Widgetareas', 'magty' ),
						'free'    =>  __( '12+', 'magty' ),
						'pro'     =>  __( '12+', 'magty' ),
					),
					array(
						'feature' => __( 'Widgetareas visibility options', 'magty' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Widgetareas dimension options', 'magty' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Widgetareas background image options', 'magty' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Widgetareas dividers', 'magty' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Single post layout', 'magty' ),
						'free'    =>  __( '3', 'magty' ),
						'pro'     =>  __( '6', 'magty' ),
					),
					array(
						'feature' => __( 'Single post navigation style', 'magty' ),
						'free'    => __( '3', 'magty' ),
						'pro'     => __( '5', 'magty' ),
					),
					array(
						'feature' => __( 'Post primary category option', 'magty' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Post subtitle option', 'magty' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Extended gallery format support', 'magty' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Extended video format support', 'magty' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Extended audio format support', 'magty' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( '404 page options', 'magty' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Animation options', 'magty' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Coming soon mode', 'magty' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Shortcode modules', 'magty' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Footer layouts', 'magty' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Footer widgets title style & align options', 'magty' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Footer light/dark theme', 'magty' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Hide theme credit link', 'magty' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Sub footer', 'magty' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Sub footer light/dark theme', 'magty' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Sub footer multiple layout', 'magty' ),
						'free'    => 0,
						'pro'     => __( '2', 'magty' ),
					),
					array(
						'feature' => __( 'Sub footer logo', 'magty' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Scroll to top', 'magty' ),
						'free'    => 1,
						'pro'     => __( 'With more options', 'magty' ),
					),
				);
				foreach ( $free_vs_pro as $features ) :
					?>
					<tr>
						<td class="magty-text-left"><?php echo esc_html( $features['feature'] ); ?></td>
						<td class="magty-text-center">
							<?php
							if ( 1 === $features['free'] ) {
								echo $icons[1];
							} elseif ( 0 === $features['free'] ) {
								echo $icons[0];
							} else {
								echo esc_html( $features['free'] );
							}
							?>
						</td>
						<td class="magty-text-center">
							<?php
							if ( 1 === $features['pro'] ) {
								echo $icons[1];
							} elseif ( 0 === $features['pro'] ) {
								echo $icons[0];
							} else {
								echo esc_html( $features['pro'] );
							}
							?>
						</td>
					</tr>
					<?php
				endforeach;
				?>
			</tbody>
		</table>
		<div class="free-vs-pro-footer">
			<a href="<?php echo esc_url( $this->theme_url . '?utm_source=wp&utm_medium=theme-dashboard&utm_campaign=fvp' ); ?>" target="_blank"><?php esc_html_e( 'And many more features', 'magty' ); ?><span class="dashicons dashicons-external"></span></a>
		</div>
	</div>
</div>
