<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Magty
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
	$disable_page_title = get_post_meta( get_the_ID(), 'magty_disable_page_title', true );
	if ( ! $disable_page_title ) :
		?>
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
	<?php endif; ?>

	<?php 
	$wrapper_classes = ' magty-rounded-img wide-max-width';
	if ( has_post_thumbnail() && ! post_password_required() ) {
		?>
		<div class="entry-image<?php echo esc_attr( $wrapper_classes ); ?>">
			<figure class="featured-media">
				<?php
				the_post_thumbnail();
				$caption = get_the_post_thumbnail_caption();
				if ( $caption ) {
					?>
					<figcaption class="wp-caption-text"><?php echo wp_kses_post( $caption ); ?></figcaption>
					<?php
				}
				?>
			</figure>
		</div>
		<?php
	}
	?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<nav class="page-links"><span class="label">' . __( 'Pages:', 'magty' ) . '</span>',
				'after'  => '</nav>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'magty' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="magty-edit edit-link">' . magty_get_theme_svg( 'edit' ),
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
