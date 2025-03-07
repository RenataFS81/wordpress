<?php

$bg_attr = $wrapper_class = $header_class = '';

$is_header_image = get_header_image();
if ( $is_header_image ) {
	$header_bg_image = 'url(' . esc_url( $is_header_image ) . ')';
	$bg_attr         = 'style="background-image:' . $header_bg_image . '"';
	$header_class    = ' has-header-image';
}

if ( get_theme_mod( 'enable_top_bar', true ) ) :
	get_template_part( 'template-parts/header/top-bar' );
endif;

if ( get_theme_mod( 'center_logo', true ) ) {
	$wrapper_class .= ' centered has-text-align-center';
}

$ad_banner_image = get_theme_mod( 'ad_banner_image' );
if ( $ad_banner_image ) {
	$wrapper_class .= ' ad-banner-enabled';
}
?>

<header id="masthead" class="site-header-row-wrapper site-header magty-site-header<?php echo esc_attr( $header_class ); ?>" role="banner" <?php echo $bg_attr; ?>>
	<div class="magty-site-branding-row">
		<div class="uf-wrapper">
			<div class="magty-site-brand-ad-wrapper<?php echo esc_attr( $wrapper_class ); ?>">
				<div class="magty-site-branding-main">
					<?php get_template_part( 'template-parts/header/site-branding' ); ?>
				</div>
				<?php
				if ( $ad_banner_image ) {
					$ad_banner_img_tag  = wp_get_attachment_image( $ad_banner_image, 'full' );
					$ad_banner_link     = get_theme_mod( 'ad_banner_link' );
					?>
					<div class="magty-ad-space">
						<?php
						if ( $ad_banner_link ) {
							$ad_banner_img_html  = '';
							$ad_banner_img_html .= '<a href="' . esc_url( $ad_banner_link ) . '" target="_blank">';
							$ad_banner_img_html .= $ad_banner_img_tag;
							$ad_banner_img_html .= '</a>';
							echo $ad_banner_img_html;
						} else {
							echo $ad_banner_img_tag;
						}
						?>
					</div>
					<?php
				}
				if ( get_theme_mod( 'enable_header_btn_one' ) ) :
					magty_header_btn_one();
				endif;
				?>
			</div>
		</div> <!-- .wrapper -->
	</div>
</header>

<?php get_template_part( 'template-parts/header/site-nav' ); ?>
