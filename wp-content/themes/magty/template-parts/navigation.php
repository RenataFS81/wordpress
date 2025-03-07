<?php
/**
 * Displays the next and previous post navigation in single posts.
 *
 * @package WordPress
 * @subpackage Magty
 */

$posts_navigation_style = get_post_meta( $post->ID, 'magty_single_post_nav_style', true );
if ( empty( $posts_navigation_style ) ) {
	$posts_navigation_style = get_theme_mod( 'posts_navigation_style', 'style_2' );
}

if ( 'none' == $posts_navigation_style ) {
	return;
}

$next_post = get_next_post();
$prev_post = get_previous_post();

if ( $next_post || $prev_post ) :

	$pagination_classes = '';

	if ( ! $next_post ) {
		$pagination_classes = ' only-one only-prev';
	} elseif ( ! $prev_post ) {
		$pagination_classes = ' only-one only-next';
	}

	?>
	<nav class="navigation post-navigation<?php echo esc_attr( $pagination_classes ); ?>" aria-label="<?php esc_attr_e( 'Post', 'magty' ); ?>">
		<div class="magty-pagination-single <?php echo esc_attr( $posts_navigation_style ); ?> nav-links">
			<?php

			switch ( $posts_navigation_style ) {
				case 'style_2':
				case 'style_3':
					$prev_thumb = $next_thumb = '';
					if ( is_attachment() && 'attachment' == $prev_post->post_type ) {
						return;
					}

					if ( 'style_2' == $posts_navigation_style ) {
						$image_size = 'magty-square-img';
						$class      = ' magty-card-box img-animate-zoom magty-rounded-img';
						$overlay    = '';
					} else {
						$image_size = 'magty-large-img';
						$class      = ' img-animate-zoom magty-rounded-img';
						$overlay    = '<span aria-hidden="true" class="magty-block-overlay"></span>';
					}

					if ( $prev_post && has_post_thumbnail( $prev_post->ID ) ) {
						$prev_thumb = '<span class="post-thumb">' . wp_kses_post( $overlay ) . get_the_post_thumbnail( $prev_post->ID, $image_size ) . '</span>';
					}
					if ( $next_post && has_post_thumbnail( $next_post->ID ) ) {
						$next_thumb = '<span class="post-thumb">' . wp_kses_post( $overlay ) . get_the_post_thumbnail( $next_post->ID, $image_size ) . '</span>';
					}

					if ( $prev_post ) :
						?>
						<a class="nav-previous<?php if ( $prev_thumb ) : echo $class; endif; ?>" href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>">
							<?php echo $prev_thumb; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							<span class="post-info">
								<span class="meta-nav" aria-hidden="true"><?php esc_html_e( 'Previous Article', 'magty' ); ?></span> 
								<span class="screen-reader-text"><?php esc_html_e( 'Previous Post:', 'magty' ); ?></span> 
								<span class="title"><span class="title-inner magty-title-line"><?php echo wp_kses_post( get_the_title( $prev_post->ID ) ); ?></span></span>
							</span>
						</a>
						<?php
					endif;
					if ( $next_post ) :
						?>
						<a class="nav-next<?php if ( $next_thumb ) : echo $class; endif; ?>" href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>">
							<?php echo $next_thumb; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							<span class="post-info">
								<span class="meta-nav" aria-hidden="true"><?php esc_html_e( 'Next Article', 'magty' ); ?></span> 
								<span class="screen-reader-text"><?php esc_html_e( 'Next Post:', 'magty' ); ?></span> 
								<span class="title"><span class="title-inner magty-title-line"><?php echo wp_kses_post( get_the_title( $next_post->ID ) ); ?></span></span>
							</span>
						</a>
						<?php
					endif;
					break;
				default:
					if ( $prev_post ) :
						?>
						<a class="nav-previous" href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>">
							<span class="arrow" aria-hidden="true">&larr;</span>
							<span class="title"><span class="title-inner"><?php echo wp_kses_post( get_the_title( $prev_post->ID ) ); ?></span></span>
						</a>
						<?php
					endif;
					if ( $next_post ) :
						?>
						<a class="nav-next" href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>">
							<span class="arrow" aria-hidden="true">&rarr;</span>
							<span class="title"><span class="title-inner"><?php echo wp_kses_post( get_the_title( $next_post->ID ) ); ?></span></span>
						</a>
						<?php
					endif;
			}
			?>
		</div><!-- .magty-pagination-single -->
	</nav><!-- .post-navigation -->
	<?php
endif;
