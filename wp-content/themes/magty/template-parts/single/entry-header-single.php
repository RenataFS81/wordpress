<header class="entry-header">

	<?php do_action( 'magty_single_before_header_meta' ); ?>

	<?php 
	$cat_position = get_theme_mod( 'single_category_position', 'before_title' );
	if ( 'before_title' == $cat_position ) {
		magty_single_categories( $enabled_post_meta );
	}
	?>

	<?php do_action( 'magty_single_before_title' ); ?>

	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	<?php do_action( 'magty_single_after_title' ); ?>
	
	<?php if ( 'post' === get_post_type() ) : ?>
		<?php 
		$show_post_meta_icons = magty_show_single_post_meta_icons( get_the_ID() );
		$meta_settings = array(
			'date_format'  => get_theme_mod( 'single_date_format', 'format_2' ),
			'author_image' => get_theme_mod( 'enable_single_author_image' ),
			'show_icons'   => $show_post_meta_icons,
		);
		magty_post_meta_info( $enabled_post_meta, $meta_settings ); 
		?>
	<?php endif; ?>

	<?php do_action( 'magty_single_after_header_meta' ); ?>

</header><!-- .entry-header -->
