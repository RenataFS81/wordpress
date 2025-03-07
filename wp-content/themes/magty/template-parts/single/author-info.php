<?php
global $post;
$post_id = $post->ID;

$author_id   = get_the_author_meta( 'ID' );
$author_url  = get_author_posts_url( $author_id );
$author_name = get_the_author_meta( 'display_name' );
$author_site = get_the_author_meta( 'url' );
$author_desc = get_the_author_meta( 'description' );

$info_box_class = '';
$author_info_bg = get_theme_mod( 'enable_author_info_bg' );
if ( $author_info_bg ) {
	$info_box_class .= ' is-block-bg-enabled';
}

?>
<div class="magty-author-info-box<?php echo esc_attr( $info_box_class ); ?>">
	<?php
	$author_info_text = get_theme_mod( 'author_info_text', __( 'About The Author', 'magty' ) );
	if ( $author_info_text ) :
		$title_style = get_theme_mod( 'author_info_title_style', 'style_9' );
		$title_align = 'saga-title-align-' . get_theme_mod( 'author_info_title_align', 'left' );
		?>
		<div class="saga-section-title">
			<div class="saga-element-header <?php echo esc_attr( $title_style . ' ' . $title_align ); ?>">
				<div class="saga-element-title-wrapper">
					<h3 class="saga-element-title">
						<span><?php echo esc_html( $author_info_text ); ?></span>
					</h3>
				</div>
			</div>
		</div>
		<?php
	endif;
	
	$wrapper_class = '';

	$style               = get_theme_mod( 'author_info_box_style', 'style_1' );
	$stack_on_responsive = get_theme_mod( 'stack_author_info_resposive' );

	$wrapper_class .= ' author-info-' . $style;
	if ( $stack_on_responsive ) {
		$wrapper_class .= ' author-info-stack-responsive';
	}
	?>
	<div class="magty-author-info-wrapper magty-card-box<?php echo esc_attr( $wrapper_class ); ?>">

		<a href="<?php echo esc_url( $author_url ); ?>" title="<?php echo esc_attr( get_the_author() ); ?>" class="author-image">
			<?php echo get_avatar( get_the_author_meta( 'ID' ), 250 ); ?>
		</a>

		<div class="author-details">

			<?php do_action( 'magty_author_detail_start' ); ?>

			<div class="author-header-info">
				<h5 class="author-name">
					<a href="<?php echo esc_url( $author_url ); ?>" title="<?php echo esc_attr( get_the_author() ); ?>">
						<?php the_author(); ?>
					</a>
				</h5>
				<?php if ( $author_site ) : ?>
					<a href="<?php echo esc_url( $author_site ); ?>" target="_blank" class="author-site">
						<?php echo esc_attr( esc_url( $author_site ) ); ?>
					</a>
				<?php endif; ?>
			</div>

			<?php if ( $author_desc ) : ?>
				<div class="author-desc"> 
					<?php echo wpautop( $author_desc ); ?>
				</div>
			<?php endif; ?>

			<?php do_action( 'magty_author_detail_end' ); ?>

		</div>

	</div>
</div>
