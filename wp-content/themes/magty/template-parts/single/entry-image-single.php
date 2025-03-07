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