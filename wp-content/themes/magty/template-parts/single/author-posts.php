<?php
global $post;
$post_id = $post->ID;

$author_posts_text = get_theme_mod( 'author_posts_text', __( 'More From Author', 'magty' ) );
$orderby           = esc_attr( get_theme_mod( 'author_posts_orderby', 'date' ) );

// Covert id to ID to make it work with query
if ( 'id' == $orderby ) {
	$orderby = 'ID';
}

$author_posts_args  = array(
	'author'              => get_the_author_meta( 'ID' ),
	'post_type'           => 'post',
	'post__not_in'        => array( $post_id ),
	'posts_per_page'      => absint( get_theme_mod( 'no_of_author_posts', 3 ) ),
	'ignore_sticky_posts' => 1,
	'orderby'             => $orderby,
	'order'               => esc_attr( get_theme_mod( 'author_posts_order', 'desc' ) ),
);
$author_posts_query = new WP_Query( $author_posts_args );

if ( $author_posts_query->have_posts() ) :

	$show_author_posts_category = get_theme_mod( 'show_author_posts_category' );
	if ( $show_author_posts_category ) {
		$author_posts_category_style         = get_theme_mod( 'author_posts_category_style', 'style_1' );
		$author_posts_category_color_display = get_theme_mod( 'author_posts_category_color_display', 'none' );
		$author_posts_category_limit         = get_theme_mod( 'author_posts_category_limit', 1 );
	}
	$author_post_meta                  = get_theme_mod( 'author_post_meta', array() );
	$author_post_meta_settings         = array(
		'date_format'  => get_theme_mod( 'author_posts_date_format', 'format_2' ),
		'author_image' => get_theme_mod( 'enable_author_posts_author_image' ),
		'show_icons'   => get_theme_mod( 'show_author_post_meta_icon' ),
	);
	$enable_author_posts_desc          = get_theme_mod( 'enable_author_posts_desc' );
	$author_posts_desc_length          = get_theme_mod( 'author_posts_desc_length', 15 );
	$enable_author_posts_read_more_btn = get_theme_mod( 'enable_author_posts_read_more_btn' );
	$author_posts_read_more_btn_text   = get_theme_mod( 'author_posts_read_more_btn_text' );
	$read_more_style                   = get_theme_mod( 'author_posts_read_more_style', 'style_2' );
	$read_more_icon                    = get_theme_mod( 'author_posts_read_more_icon' );
	$show_post_format_icon             = get_theme_mod( 'show_author_posts_post_format_icon' );

	?>
	<div class="magty-author-posts-wrapper magty-post-extras-grid-block wide-max-width">
		<?php
		if ( $author_posts_text ) :
			$title_style = get_theme_mod( 'author_posts_title_style', 'style_9' );
			$title_align = 'saga-title-align-' . get_theme_mod( 'author_posts_title_align', 'left' );
			?>
			<div class="saga-section-title">
				<div class="saga-element-header <?php echo esc_attr( $title_style . ' ' . $title_align ); ?>">
					<div class="saga-element-title-wrapper">
						<h3 class="saga-element-title">
							<span><?php echo esc_html( $author_posts_text ); ?></span>
						</h3>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<div class="section-posts magty-grid-posts-block">
			<?php
			$title_limit = get_theme_mod( 'author_posts_title_limit' );
			while ( $author_posts_query->have_posts() ) :
				$author_posts_query->the_post();
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
						if ( $show_author_posts_category ) :
							echo '<div class="article-cat-info">';
							magty_post_categories( $author_posts_category_style, $author_posts_category_color_display, $author_posts_category_limit );
							echo '</div>';
						endif;
						?>
						<h3 class="article-title no-margin color-accent-hover magty-limit-lines <?php echo esc_attr( $title_limit ); ?>">
							<a href="<?php the_permalink(); ?>" class="text-decoration-none magty-title-line">
								<?php the_title(); ?>
							</a>
						</h3>
						<?php magty_post_meta_info( $author_post_meta, $author_post_meta_settings ); ?>
						<?php
						if ( $enable_author_posts_desc && $author_posts_desc_length > 0 ) :
							?>
							<div class="article-excerpt">
								<p class="no-margin">
									<?php echo wp_trim_words( get_the_excerpt(), $author_posts_desc_length, '&hellip;' ); ?>
								</p>
							</div>
						<?php endif; ?>
						<?php if ( $enable_author_posts_read_more_btn ) : ?>
							<div class="article-read-more">
								<a href="<?php the_permalink(); ?>" class="magty-btn-link text-decoration-none <?php echo esc_attr( $read_more_style ); ?>">
									<?php
									if ( $author_posts_read_more_btn_text ) {
										echo esc_html( $author_posts_read_more_btn_text );
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
