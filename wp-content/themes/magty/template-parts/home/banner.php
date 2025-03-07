<?php
$post_args = array(
	'post_type'           => 'post',
	'post_status'         => 'publish',
	'no_found_rows'       => 1,
	'ignore_sticky_posts' => 1,
);

$banner_content_from = get_theme_mod( 'banner_content_from', 'category' );

if ( 'category' == $banner_content_from ) :

	$banner_cat                  = get_theme_mod( 'banner_cat' );
	$banner_posts_orderby        = esc_attr( get_theme_mod( 'banner_posts_orderby', 'date' ) );
	$post_args['posts_per_page'] = absint( get_theme_mod( 'no_of_banner_posts', 4 ) );
	$post_args['orderby']        = ( 'id' == $banner_posts_orderby ) ? strtoupper( $banner_posts_orderby ) : $banner_posts_orderby;
	$post_args['order']          = esc_attr( get_theme_mod( 'banner_posts_order', 'desc' ) );

	if ( ! empty( $banner_cat ) ) :
		$post_args['tax_query'][] = array(
			'taxonomy' => 'category',
			'field'    => 'term_id',
			'terms'    => absint( $banner_cat ),
		);
	endif;

else :

	$banner_post_ids = get_theme_mod( 'banner_post_ids' );
	if ( ! empty( $banner_post_ids ) ) :
		$post_ids                    = explode( ',', esc_attr( $banner_post_ids ) );
		$post_args['post__in']       = $post_ids;
		$post_args['orderby']        = 'post__in';
		$post_args['posts_per_page'] = count( $post_ids );
	endif;

endif;

$banner_posts = new WP_Query( $post_args );
if ( $banner_posts->have_posts() ) :

	// Empty container class for full width banner.
	$container_class = $slider_wrapper_class = '';

	// Holds banner attributes.
	$data_banner = array();

	// Default image size.
	$image_size = 'magty-cover-image';
	$img_class  = ' magty-rounded-img';

	$enable_banner_dots = $enable_banner_arrows = '';

	$banner_layout         = get_theme_mod( 'banner_layout', 'boxed' );
	$banner_display_as     = get_theme_mod( 'banner_display_as', 'slider' );
	$enable_banner_arrows  = get_theme_mod( 'enable_banner_arrows', true );
	$enable_banner_dots    = get_theme_mod( 'enable_banner_dots' );
	$enable_banner_overlay = get_theme_mod( 'enable_banner_overlay', true );
	if ( $enable_banner_overlay ) {
		$banner_overlay_style  = 'background-color:' . esc_attr( get_theme_mod( 'banner_overlay_color', '#000000' ) ) . ';';
		$banner_overlay_style .= 'opacity:' . esc_attr( get_theme_mod( 'banner_overlay_opacity', 0.6 ) ) . ';';
	}
	$show_banner_category = get_theme_mod( 'show_banner_category', true );
	if ( $show_banner_category ) {
		$banner_cat_style = get_theme_mod( 'banner_category_style', 'style_3' );
		$banner_cat_color = get_theme_mod( 'banner_category_color_display', 'none' );
		$banner_cat_limit = get_theme_mod( 'banner_category_limit', 1 );
	}
	$banner_post_meta            = get_theme_mod( 'banner_post_meta', array( 'author', 'date' ) );
	$banner_post_meta_settings   = array(
		'date_format'  => get_theme_mod( 'banner_posts_date_format', 'format_2' ),
		'author_image' => get_theme_mod( 'enable_banner_author_image' ),
		'show_icons'   => get_theme_mod( 'show_banner_post_meta_icon' ),
	);
	$enable_banner_desc          = get_theme_mod( 'enable_banner_desc' );
	$banner_desc_length          = get_theme_mod( 'banner_desc_length', 25 );
	$enable_banner_read_more_btn = get_theme_mod( 'enable_banner_read_more_btn' );
	$banner_read_more_btn_text   = get_theme_mod( 'banner_read_more_btn_text' );
	$banner_read_more_style      = get_theme_mod( 'banner_read_more_style', 'style_3' );
	$banner_read_more_icon       = get_theme_mod( 'banner_read_more_icon' );

	$enable_pinned_posts = get_theme_mod( 'enable_pinned_posts' );

	// Wrapper class for non full width banner.
	if ( 'boxed' == $banner_layout ) :
		$container_class = ' uf-wrapper';
		if ( $enable_pinned_posts ) :
			$image_size           = 'magty-large-img';
			$slider_wrapper_class = 'col-lg-6';
		else :
			$slider_wrapper_class = 'col-lg-12';
		endif;
	endif;

	if ( 'full-width' == $banner_layout ) :
		$enable_pinned_posts  = false;
		$image_size           = 'magty-cover-image';
		$slider_wrapper_class = 'col-lg-12';
	endif;

	if ( 'slider' == $banner_display_as ) :

		$banner_style = 'as-slider style_1';

		$data_banner['effect']     = 'fade';
		$data_banner['fadeEffect'] = array(
			'crossFade' => true,
		);

		$banner_style .= ' em-animate-content';
		$banner_dots_class = ' magty-swiper-inner-bullets ';

	else :

		$banner_style = 'as-carousel style_1';
		$item_gap     = absint( get_theme_mod( 'banner_carousel_item_gap', 4 ) );
		if ( $item_gap == 0 ) {
			$img_class = '';
		}

		$data_banner['slidesPerView']  = 1;
		$data_banner['centeredSlides'] = true;
		$data_banner['keyboard']       = array(
			'enabled' => true,
		);
		$data_banner['spaceBetween']   = $item_gap;
		$data_banner['breakpoints']    = array(
			'800' => array(
				'slidesPerView' => 1.5,
			),
		);

		$banner_style .= ' em-animate-content';
		$banner_dots_class = ' magty-swiper-outer-bullets ';

	endif;

	if ( $enable_banner_arrows ) :
		$data_banner['navigation'] = array(
			'nextEl' => '.swiper-button-next',
			'prevEl' => '.swiper-button-prev',
		);
	endif;

	if ( $enable_banner_dots ) :
		$data_banner['pagination'] = array(
			'el'        => '.swiper-pagination',
			'clickable' => true,
		);
	endif;

	if ( get_theme_mod( 'enable_banner_autoplay' ) ) :
		$data_banner['autoplay'] = array(
			'delay'                => absint( get_theme_mod( 'banner_autoplay_speed', 5000 ) ),
			'disableOnInteraction' => false,
		);
	endif;

	if ( $enable_pinned_posts ) {
		$banner_style .= ' is-pinned-posts-active';
	}

	$wrapper_class = $banner_layout . ' ' . $banner_style;

	?>
	<section class="magty-section-banner-wrapper <?php echo esc_attr( $wrapper_class ); ?>">
		<div class="magty-section-banner<?php echo esc_attr( $container_class ); ?>">
			<div class="row<?php echo esc_attr( 'full-width' == $banner_layout ) ? ' gy-0' : ' g-1'; ?>">
				<div class="<?php echo esc_attr( $slider_wrapper_class ); ?>">
					<?php
					$banner_title = get_theme_mod( 'banner_title' );
					if ( ! empty( $banner_title ) ) :
						$title_style = get_theme_mod( 'banner_title_style', 'style_1' );
						$title_align = 'saga-title-align-' . get_theme_mod( 'banner_title_align', 'left' );
						?>
						<div class="saga-section-title">
							<div class="saga-element-header <?php echo esc_attr( $title_style . ' ' . $title_align ); ?>">
								<div class="saga-element-title-wrapper">
									<h2 class="saga-element-title">
										<span><?php echo esc_html( $banner_title ); ?></span>
									</h2>
								</div>
							</div>
						</div>
					<?php endif; ?>
					<div class="magty-banner-wrapper <?php echo esc_attr( $banner_dots_class ); ?> swiper" data-banner='<?php echo esc_attr( json_encode( $data_banner ) ); ?>'>
						<div class="magty-banner swiper-wrapper">
							<?php
							$title_limit = get_theme_mod( 'banner_posts_title_limit' );
							while ( $banner_posts->have_posts() ) :
								$banner_posts->the_post();
								?>
									<div class="swiper-slide">
										<div class="banner-block-wrapper img-animate-zoom">
											<div class="banner-image <?php echo esc_attr( $img_class ); ?>">
												<a href="<?php the_permalink(); ?>">
													<?php if ( $enable_banner_overlay ) : ?>
														<span aria-hidden="true" class="magty-block-overlay" style="<?php echo $banner_overlay_style; ?>"></span>
													<?php endif; ?>
													<?php
													if ( has_post_thumbnail() ) :
														the_post_thumbnail(
															$image_size,
															array(
																'alt' => the_title_attribute(
																	array(
																		'echo' => false,
																	)
																),
															)
														);
													endif;
													?>
												</a>
											</div>
											<div class="banner-caption">
												<div class="banner-caption-inner">
													<?php
													if ( $show_banner_category ) :
														magty_post_categories( $banner_cat_style, $banner_cat_color, $banner_cat_limit );
													endif;
													?>
													<h3 class="banner-title no-margin magty-limit-lines <?php echo esc_attr( $title_limit ); ?>">
														<a href="<?php the_permalink(); ?>" class="text-decoration-none magty-title-line">
															<?php the_title(); ?>
														</a>
													</h3>
													<?php magty_post_meta_info( $banner_post_meta, $banner_post_meta_settings ); ?>
													<?php
													if ( $enable_banner_desc && $banner_desc_length > 0 ) {
														?>
														<div class="banner-excerpt hide-on-mobile hide-on-tablet">
															<p class="no-margin">
																<?php echo wp_trim_words( get_the_excerpt(), $banner_desc_length, '&hellip;' ); ?>
															</p>
														</div>
													<?php } ?>
													<?php
													if ( $enable_banner_read_more_btn ) {
														?>
														<div class="banner-read-more">
															<a href="<?php the_permalink(); ?>" class="magty-btn-link text-decoration-none <?php echo esc_attr( $banner_read_more_style ); ?>">
																<?php
																if ( $banner_read_more_btn_text ) {
																	echo esc_html( $banner_read_more_btn_text );
																} else {
																	esc_html_e( 'Read More', 'magty' );
																}
																if ( $banner_read_more_icon ) {
																	?>
																	<span><?php magty_the_theme_svg( $banner_read_more_icon ); ?></span>
																	<?php
																}
																?>
															</a>
														</div>
														<?php
													}
													?>
												</div>
											</div>
										</div>
									</div>
								<?php
							endwhile;
							wp_reset_postdata();
							?>
						</div>
						<?php
						if ( $enable_banner_dots ) :
							echo '<div class="swiper-pagination"></div>';
						endif;
						if ( $enable_banner_arrows ) :
							echo '<div class="swiper-button-next"></div><div class="swiper-button-prev"></div>';
						endif;
						?>
					</div>
				</div>
				<?php
				// Pinned Posts.
				if ( 'full-width' != $banner_layout && $enable_pinned_posts ) :
					get_template_part( 'template-parts/home/pinned', 'posts' );
				endif;
				?>
			</div>
		</div>
	</section>       
	<?php
endif;
