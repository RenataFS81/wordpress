<?php

$ticker_posts_cat     = get_theme_mod( 'ticker_posts_cat' );
$no_of_ticker_posts   = get_theme_mod( 'no_of_ticker_posts', 4 );
$ticker_posts_orderby = get_theme_mod( 'ticker_posts_orderby', 'date' );
$ticker_posts_order   = get_theme_mod( 'ticker_posts_order', 'desc' );

// Covert id to ID to make it work with query
if ( 'id' == $ticker_posts_orderby ) {
	$ticker_posts_orderby = 'ID';
}

$post_args = array(
	'post_type'           => 'post',
	'posts_per_page'      => absint( $no_of_ticker_posts ),
	'post_status'         => 'publish',
	'no_found_rows'       => 1,
	'ignore_sticky_posts' => 1,
	'orderby'             => esc_attr( $ticker_posts_orderby ),
	'order'               => esc_attr( $ticker_posts_order ),
);

// Check for category.
if ( ! empty( $ticker_posts_cat ) ) :
	$post_args['tax_query'] = array(
		array(
			'taxonomy' => 'category',
			'field'    => 'term_id',
			'terms'    => $ticker_posts_cat,
		),
	);
endif;

$ticker_posts = new WP_Query( $post_args );
if ( $ticker_posts->have_posts() ) :

	$ticker_label_text  = get_theme_mod( 'ticker_label_text' );
	$ticker_label_style = get_theme_mod( 'ticker_label_style', 'style_3' );

	$wrapper_class = ' ticker-label-' . $ticker_label_style;

	$enabled_post_meta = get_theme_mod( 'ticker_posts_meta', array( 'date' ) );
	$meta_settings     = array(
		'date_format' => get_theme_mod( 'ticker_posts_date_format', 'format_2' ),
		'show_icons'  => false,
	);

	$show_category = get_theme_mod( 'show_ticker_posts_category' );
	if ( $show_category ) :
		$cat_style = get_theme_mod( 'ticker_posts_category_style', 'style_2' );
		$color     = get_theme_mod( 'ticker_posts_category_color_display', 'as_bg' );
		$limit     = get_theme_mod( 'ticker_posts_category_limit', 1 );
	endif;

	$show_posts_thumbnail = get_theme_mod( 'show_ticker_posts_thumbnail', true );
	if ( get_theme_mod( 'circle_ticker_posts_thumbnail' ) ) {
		$wrapper_class .= ' ticker-round-thumb';
	}

	// Build attributes.
	$data_slider = array();

	$data_slider['spaceBetween']  = 0;
	$data_slider['slidesPerView'] = 1;
	$data_slider['autoplay']      = array(
		'delay'                => absint( get_theme_mod( 'ticker_posts_speed', 3500 ) ),
		'disableOnInteraction' => false,
	);
	$data_slider['loop']          = true;
	$data_slider['effect']        = 'fade';
	$data_slider['fadeEffect']    = array(
		'crossFade' => true,
	);
	$data_slider['navigation']    = array(
		'nextEl' => '.section-ticker .swiper-button-next',
		'prevEl' => '.section-ticker .swiper-button-prev',
	);

	if ( get_theme_mod( 'stack_ticker_responsive', true ) ) {
		$wrapper_class .= ' stack-ticker-responsive';
	}

	// Inverted.
	if ( 'dark' == get_theme_mod( 'ticker_theme', 'light' ) ) {
		$wrapper_class .= ' saga-block-inverted-color';
	}

	$label_class     = get_theme_mod( 'hide_ticker_label_responsive' ) ? ' hide-on-mobile ' : '';
	$cat_class       = get_theme_mod( 'hide_ticker_category_responsive', true ) ? ' hide-on-mobile ' : '';
	$meta_class      = get_theme_mod( 'hide_ticker_meta_responsive', true ) ? ' hide-on-mobile ' : '';
	$arrows_class    = get_theme_mod( 'hide_ticker_arrows_responsive' ) ? ' hide-on-mobile ' : '';
	$thumbnail_class = get_theme_mod( 'hide_ticker_thumbnail_responsive' ) ? ' hide-on-mobile ' : '';

	?>
	<section class="magty-section-block section-ticker <?php echo esc_attr( $wrapper_class ); ?>">
		<div class="uf-wrapper">
			<div class="magty-ticker-posts-wrapper">
				<?php if ( get_theme_mod( 'enable_ticker_label', true ) ) : ?>
					<div class="magty-ticker-label-text<?php echo esc_attr( $label_class ); ?>">
						<?php
						if ( 'style_2' == $ticker_label_style ) :
							echo '<div class="ticker-loader"></div>';
						elseif ( 'style_3' == $ticker_label_style ) :
							magty_the_theme_svg( 'popular' );
						endif;
						?>
						<span>
							<?php
							if ( $ticker_label_text ) :
								echo esc_html( $ticker_label_text );
							else :
								esc_html_e( 'Hot News', 'magty' );
							endif;
							?>
						</span>
					</div>
				<?php endif; ?>
				<div class="magty-ticker-posts-content">
					<div class="magty-ticker-slider-wrapper swiper" data-slider='<?php echo esc_attr( json_encode( $data_slider ) ); ?>'>
						<div class="swiper-wrapper">
							<?php
							while ( $ticker_posts->have_posts() ) :
								$ticker_posts->the_post();
								?>
								<div class="swiper-slide">
									<div class="ticker-item-inner">
										<?php if ( $show_posts_thumbnail && has_post_thumbnail() ) : ?>
											<div class="article-image magty-rounded-img<?php echo esc_attr( $thumbnail_class ); ?>">
												<a href="<?php the_permalink(); ?>">
													<?php
													the_post_thumbnail(
														'thumbnail',
														array(
															'alt' => the_title_attribute(
																array(
																	'echo' => false,
																)
															),
														)
													);
													?>
												</a>
											</div>
										<?php endif; ?>
										<?php if ( $show_category ) : ?>
											<div class="article-cat-info<?php echo esc_attr( $cat_class ); ?>">
												<?php magty_post_categories( $cat_style, $color, $limit ); ?>
											</div>
										<?php endif; ?>
										<a href="<?php the_permalink(); ?>" class="text-decoration-none">
											<span class="magty-ticker-post-title"><?php the_title(); ?></span>
										</a>
										<div class="article-meta-info<?php echo esc_attr( $meta_class ); ?>">
											<?php magty_post_meta_info( $enabled_post_meta, $meta_settings ); ?>
										</div>
									</div>
								</div>
								<?php
							endwhile;
							wp_reset_postdata();
							?>
						</div>
					</div>
					<?php if ( get_theme_mod( 'show_ticker_arrows', true ) ) : ?>
						<div class="magty-ticker-slider-nav<?php echo esc_attr( $arrows_class ); ?>">
							<div class="swiper-button-prev"></div>
							<div class="swiper-button-next"></div>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
	<?php
endif;
