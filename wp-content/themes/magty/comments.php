<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Magty
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}

$center_form_content = get_theme_mod( 'single_comments_center_form_content' );
$wrapper_class       = $center_form_content ? ' em-center-form-content' : '';
?>
<div class="comments-wrapper<?php echo esc_attr( $wrapper_class ); ?>">

	<?php
	if ( have_comments() ) :
		$heading_style = get_theme_mod( 'single_comments_heading_style', 'style_9' );
		$heading_align = 'saga-title-align-' . get_theme_mod( 'single_comments_heading_align', 'left' );
		$title_class   = ' comments-title' . ' ' . $heading_style . ' ' . $heading_align;
		?>

		<div class="saga-section-title comment-number-heading">
			<div class="saga-element-header <?php echo esc_attr( $title_class ); ?>">
				<div class="saga-element-title-wrapper">
					<h3 class="saga-element-title">
						<span>
							<?php
							$magty_comment_count = get_comments_number();
							if ( '1' === $magty_comment_count ) {
								esc_html_e( '1 comment', 'magty' );
							} else {
								printf(
									/* translators: %s: Comment count number. */
									esc_html( _nx( '%s comment', '%s comments', $magty_comment_count, 'Comments title', 'magty' ) ),
									esc_html( number_format_i18n( $magty_comment_count ) )
								);
							}
							?>
						</span>
					</h3>
				</div>
			</div>
		</div>

		<div id="comments" class="comments comments-area">

			<?php
			wp_list_comments(
				array(
					'walker'      => new Magty_Walker_Comment(),
					'avatar_size' => 120,
					'style'       => 'div',
				)
			);

			$comment_pagination = paginate_comments_links(
				array(
					'echo'      => false,
					'end_size'  => 0,
					'mid_size'  => 0,
					'next_text' => __( 'Newer Comments', 'magty' ) . ' &rarr;',
					'prev_text' => '&larr; ' . __( 'Older Comments', 'magty' ),
				)
			);

			if ( $comment_pagination ) :

				// If we're only showing the "Next" link, add a class indicating so
				if ( strpos( $comment_pagination, 'prev page-numbers' ) === false ) {
					$pagination_classes = ' only-next';
				} else {
					$pagination_classes = '';
				}
				?>

				<nav class="comments-pagination pagination<?php echo esc_attr( $pagination_classes ); ?>">
					<?php echo wp_kses_post( $comment_pagination ); ?>
				</nav>

				<?php
			endif;

			// If comments are closed and there are comments, let's leave a little note, shall we?
			if ( ! comments_open() ) :
				?>
				<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'magty' ); ?></p>
				<?php
			endif;

			?>

		</div><!-- #comments -->

	<?php endif; ?>

	<?php
	comment_form(
		array(
			'title_reply_before' => '<div class="saga-section-title"><h3 id="reply-title" class="saga-element-header comment-reply-title">',
			'title_reply'        => '<span>' . __( 'Leave a Reply', 'magty' ) . '</span>',
			'title_reply_after'  => '</h3></div>',
		)
	);
	?>

</div>
