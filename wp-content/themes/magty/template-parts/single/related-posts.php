<?php
global $post;
$post_id = $post->ID;

$related_posts_text = get_theme_mod( 'related_posts_text', __( 'You May Also Like', 'magty' ) );
$orderby            = esc_attr( get_theme_mod( 'related_posts_orderby', 'date' ) );

// Covert id to ID to make it work with query
if ( 'id' == $orderby ) {
	$orderby = 'ID';
}

$category_ids = array();
$categories   = get_the_category( $post_id );

if ( ! empty( $categories ) ) :
	foreach ( $categories as $cat ) :
		$category_ids[] = $cat->term_id;
	endforeach;
endif;

if ( ! empty( $category_ids ) ) :

	$related_posts_args = array(
		'category__in'        => $category_ids,
		'post_type'           => 'post',
		'post__not_in'        => array( $post_id ),
		'posts_per_page'      => absint( get_theme_mod( 'no_of_related_posts', 3 ) ),
		'ignore_sticky_posts' => 1,
		'orderby'             => $orderby,
		'order'               => esc_attr( get_theme_mod( 'related_posts_order', 'desc' ) ),
	);

	$related_posts_query = new WP_Query( $related_posts_args );

	if ( $related_posts_query->have_posts() ) :

		$show_related_posts_category = get_theme_mod( 'show_related_posts_category' );
		if ( $show_related_posts_category ) {
			$related_posts_category_style         = get_theme_mod( 'related_posts_category_style', 'style_1' );
			$related_posts_category_color_display = get_theme_mod( 'related_posts_category_color_display', 'none' );
			$related_posts_category_limit         = get_theme_mod( 'related_posts_category_limit', 1 );
		}
		$related_post_meta                  = get_theme_mod( 'related_post_meta', array() );
		$related_post_meta_settings         = array(
			'date_format'  => get_theme_mod( 'related_posts_date_format', 'format_2' ),
			'author_image' => get_theme_mod( 'enable_related_posts_author_image' ),
			'show_icons'   => get_theme_mod( 'show_related_post_meta_icon' ),
		);
		$enable_related_posts_desc          = get_theme_mod( 'enable_related_posts_desc' );
		$related_posts_desc_length          = get_theme_mod( 'related_posts_desc_length', 15 );
		$enable_related_posts_read_more_btn = get_theme_mod( 'enable_related_posts_read_more_btn' );
		$related_posts_read_more_btn_text   = get_theme_mod( 'related_posts_read_more_btn_text' );
		$read_more_style                    = get_theme_mod( 'related_posts_read_more_style', 'style_2' );
		$read_more_icon                     = get_theme_mod( 'related_posts_read_more_icon' );
		$show_post_format_icon              = get_theme_mod( 'show_related_posts_post_format_icon' );

		?>
		<div class="magty-related-posts-wrapper magty-post-extras-grid-block wide-max-width">
			<?php
			if ( $related_posts_text ) :
				$title_style = get_theme_mod( 'related_posts_title_style', 'style_9' );
				$title_align = 'saga-title-align-' . get_theme_mod( 'related_posts_title_align', 'left' );
				?>
				<div class="saga-section-title">
					<div class="saga-element-header <?php echo esc_attr( $title_style . ' ' . $title_align ); ?>">
						<div class="saga-element-title-wrapper">
							<h3 class="saga-element-title">
								<span><?php echo esc_html( $related_posts_text ); ?></span>
							</h3>
						</div>
					</div>
				</div>
			<?php endif; ?>
			<div class="section-posts magty-grid-posts-block">
				<?php
				$title_limit = get_theme_mod( 'related_posts_title_limit' );
				while ( $related_posts_query->have_posts() ) :
					$related_posts_query->the_post();
					?>
					<div class="magty-article-block-wrapper img-animate-zoom magty-card-box">
						<?php if ( has_post_thumbnail() ) : ?>
							<div class="article-image magty-rounded-img">
								<a href="<?php the_permalink(); ?>">
									<?php
									if ( $show_post_format_icon ) :
										magty_post_format_icon( 'center' );
									endif;
									?>
									<?php the_post_thumbnail( 'magty-medium-img' ); ?>
								</a>
							</div>
						<?php endif; ?>
						<div class="article-details">
							<?php
							if ( $show_related_posts_category ) :
								echo '<div class="article-cat-info">';
								magty_post_categories( $related_posts_category_style, $related_posts_category_color_display, $related_posts_category_limit );
								echo '</div>';
							endif;
							?>
							<h3 class="article-title no-margin color-accent-hover magty-limit-lines <?php echo esc_attr( $title_limit ); ?>">
								<a href="<?php the_permalink(); ?>" class="text-decoration-none magty-title-line">
									<?php the_title(); ?>
								</a>
							</h3>
							<?php magty_post_meta_info( $related_post_meta, $related_post_meta_settings ); ?>
							<?php
							if ( $enable_related_posts_desc && $related_posts_desc_length > 0 ) :
								?>
								<div class="article-excerpt">
									<p class="no-margin">
										<?php echo wp_trim_words( get_the_excerpt(), $related_posts_desc_length, '&hellip;' ); ?>
									</p>
								</div>
							<?php endif; ?>
							<?php if ( $enable_related_posts_read_more_btn ) : ?>
								<div class="article-read-more">
									<a href="<?php the_permalink(); ?>" class="magty-btn-link text-decoration-none <?php echo esc_attr( $read_more_style ); ?>">
										<?php
										if ( $related_posts_read_more_btn_text ) {
											echo esc_html( $related_posts_read_more_btn_text );
										} else {
											esc_html_e( 'Read More', 'magty' );
										}
										if ( $read_more_icon ) {
											?>
											<span><?php magty_the_theme_svg( $read_more_icon ); ?></span>
											<?php
										}
										?>
									</a>
								</div>
							<?php endif; ?>
						</div>
					</div>
					<?php
				endwhile;
				wp_reset_postdata();
				?>
			</div>
		</div>
		<?php
	endif;
endif;
