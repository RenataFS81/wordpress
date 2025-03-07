<?php
$trending_posts_cat     = get_theme_mod( 'trending_posts_cat' );
$trending_posts_orderby = get_theme_mod( 'trending_posts_orderby', 'date' );
$trending_no_of_posts   = get_theme_mod( 'no_of_trending_posts', 5 );

// Covert id to ID to make it work with query
if ( 'id' == $trending_posts_orderby ) {
	$trending_posts_orderby = 'ID';
}

$post_args = array(
	'post_type'           => 'post',
	'posts_per_page'      => absint( $trending_no_of_posts ),
	'post_status'         => 'publish',
	'no_found_rows'       => 1,
	'ignore_sticky_posts' => 1,
	'orderby'             => esc_attr( $trending_posts_orderby ),
	'order'               => esc_attr( get_theme_mod( 'trending_posts_order', 'desc' ) ),
);

// Check for category.
if ( ! empty( $trending_posts_cat ) ) :
	$post_args['tax_query'] = array(
		array(
			'taxonomy' => 'category',
			'field'    => 'term_id',
			'terms'    => $trending_posts_cat,
		),
	);
endif;

$trending_post = new WP_Query( $post_args );
if ( $trending_post->have_posts() ) :

	$trending_posts_title = get_theme_mod( 'trending_posts_title' );
	$column               = get_theme_mod( 'trending_posts_column', 3 );

	$show_category = get_theme_mod( 'show_trending_posts_category', true );
	if ( $show_category ) :
		$cat_style = get_theme_mod( 'trending_posts_category_style', 'style_1' );
		$color     = get_theme_mod( 'trending_posts_category_color_display', 'none' );
		$limit     = get_theme_mod( 'trending_posts_category_limit', 3 );
	endif;

	$enabled_post_meta = get_theme_mod( 'trending_post_meta' );
	$meta_settings     = array(
		'date_format'  => get_theme_mod( 'trending_posts_date_format', 'format_2' ),
		'author_image' => get_theme_mod( 'enable_trending_posts_author_image' ),
		'show_icons'   => get_theme_mod( 'show_trending_post_meta_icon', true ),
	);

	$show_posts_thumbnail    = get_theme_mod( 'show_trending_posts_thumbnail', true );
	$invert_posts_display    = get_theme_mod( 'invert_trending_posts_display' );
	$enable_post_format_icon = get_theme_mod( 'show_trending_posts_post_format_icon' );
	$title_limit             = get_theme_mod( 'trending_posts_title_limit' );
	$image_size              = 'thumbnail';

	$autoplay = get_theme_mod( 'enable_trending_posts_autoplay' );
	$loop     = get_theme_mod( 'enable_trending_posts_loop' );
	$arrows   = get_theme_mod( 'enable_trending_posts_arrows', true );
	$dots     = get_theme_mod( 'enable_trending_posts_dots' );
	$margin   = 24;

	$wrapper_class = $block_class = '';

	// Build attributes.
	$data_slider                 = array();
	$data_slider['spaceBetween'] = $margin;
	// $data_slider['loop'] = true;

	if ( $arrows ) :
		$data_slider['navigation'] = array(
			'nextEl' => '.section-trending .swiper-button-next',
			'prevEl' => '.section-trending .swiper-button-prev',
		);
		$block_class              .= ' magty-swiper-outer-arrows';
	endif;

	if ( $dots ) :
		$data_slider['pagination'] = array(
			'el'        => '.section-trending .swiper-pagination',
			'clickable' => true,
		);

		$wrapper_class .= ' magty-slider-pagination-enabled';
		$block_class   .= ' magty-swiper-outer-bullets';
	endif;

	if ( $autoplay ) :
		$data_slider['autoplay'] = array(
			'delay' => 5000,
		);
	endif;

	if ( $loop ) :
		$data_slider['loop'] = true;
	endif;

	if ( $column == 2 ) {
		$data_slider['breakpoints'] = array(
			'768' => array(
				'slidesPerView' => 2,
			),
		);

		$block_class .= ' magty-grid-2';
	} elseif ( $column == 3 ) {
		$data_slider['breakpoints'] = array(
			'768' => array(
				'slidesPerView' => 2,
			),
			'992' => array(
				'slidesPerView' => 3,
			),
		);

		$block_class .= ' magty-grid-3';
	} elseif ( $column == 4 ) {
		$data_slider['breakpoints'] = array(
			'768'  => array(
				'slidesPerView' => 2,
			),
			'992'  => array(
				'slidesPerView' => 3,
			),
			'1024' => array(
				'slidesPerView' => 4,
			),
		);

		$block_class .= ' magty-grid-4';
	} elseif ( $column == 5 ) {
		$data_slider['breakpoints'] = array(
			'768'  => array(
				'slidesPerView' => 2,
			),
			'992'  => array(
				'slidesPerView' => 3,
			),
			'1024' => array(
				'slidesPerView' => 4,
			),
			'1200' => array(
				'slidesPerView' => 5,
			),
		);

		$block_class .= ' magty-grid-5';
	}

	if ( $invert_posts_display ) {
		$wrapper_class .= ' saga-inverted-item';
	}

	$counter          = 1;
	$counter_position = get_theme_mod( 'trending_posts_counter' );
	$counter_class    = $counter_position;
	$wrapper_class .= ' is-posts-counter-active';

	$wrapper_class .= ' ' . get_theme_mod( 'trending_posts_style', 'style_2' );
	?>
	<section class="magty-section-block section-trending <?php echo esc_attr( $wrapper_class ); ?>">
		<div class="uf-wrapper">
			<?php
			if ( ! empty( $trending_posts_title ) ) :
				$title_style = get_theme_mod( 'trending_posts_title_style', 'style_1' );
				$title_align = 'saga-title-align-' . get_theme_mod( 'trending_posts_title_align', 'left' );
				?>
				<div class="saga-section-title">
					<div class="saga-element-header <?php echo esc_attr( $title_style . ' ' . $title_align ); ?>">
						<div class="saga-element-title-wrapper">
							<h2 class="saga-element-title">
								<span><?php echo esc_html( $trending_posts_title ); ?></span>
							</h2>
						</div>
					</div>
				</div>
			<?php endif; ?>
			<div class="saga-section-content">
				<div class="magty-slider-wrapper-block as_carousel <?php echo esc_attr( $block_class ); ?>">
					<div class="swiper" data-slider='<?php echo esc_attr( json_encode( $data_slider ) ); ?>'>
						<div class="swiper-wrapper">
							<?php
							while ( $trending_post->have_posts() ) :
								$trending_post->the_post();
								?>
								<div class="swiper-slide">
									<div class="magty-list-posts">
										<div class="magty-article-block-wrapper img-animate-zoom">
											<?php
											if ( $show_posts_thumbnail && has_post_thumbnail() ) {
												?>
												<div class="article-image magty-rounded-img">
													<a href="<?php the_permalink(); ?>">
														<?php if ( $counter_position ) : ?>
															<span class="article-counter bg-accent <?php echo esc_attr( $counter_class ); ?>"><?php echo esc_html( $counter ); ?></span>
														<?php endif; ?>
														<?php
														if ( $enable_post_format_icon ) :
															magty_post_format_icon( 'center' );
														endif;
														?>
														<?php
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
														?>
													</a>
												</div>
												<?php
											}
											?>
											<div class="article-details">
												<?php
												if ( $show_category ) {
													echo '<div class="article-cat-info">';
													magty_post_categories( $cat_style, $color, $limit );
													echo '</div>';
												}
												?>
												<h3 class="article-title no-margin magty-limit-lines <?php echo esc_attr( $title_limit ); ?>">
													<a href="<?php the_permalink(); ?>" class="text-decoration-none color-accent-hover magty-title-line">
														<?php the_title(); ?>
													</a>
												</h3>
												<?php magty_post_meta_info( $enabled_post_meta, $meta_settings ); ?>
											</div>
										</div>
									</div>
								</div>
								<?php
								++$counter;
							endwhile;
							wp_reset_postdata();
							?>
						</div>
					</div>
					<?php
					if ( $dots ) :
						echo '<div class="swiper-pagination"></div>';
					endif;
					if ( $arrows ) :
						echo '<div class="swiper-button-next"></div><div class="swiper-button-prev"></div>';
					endif;
					?>
				</div>
			</div>
		</div>
	</section>
	<?php
endif;
