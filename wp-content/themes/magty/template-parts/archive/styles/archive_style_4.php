<?php
/**
 * Template part for displaying post archives
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Magty
 */

$class             = 'magty-card-box';
$enabled_post_meta = get_theme_mod( 'archive_post_meta', array( 'date', 'read_time', 'category' ) );
set_query_var( 'enabled_post_meta', $enabled_post_meta );

$cats_enabled = $tags_enabled = false;

$cat_position  = get_theme_mod( 'archive_category_position', 'before_title' );
$meta_settings = array(
	'date_format'  => get_theme_mod( 'archive_date_format', 'format_2' ),
	'author_image' => get_theme_mod( 'enable_archive_author_image' ),
	'show_icons'   => get_theme_mod( 'show_archive_post_meta_icon' ),
);

$show_archive_excerpt = get_theme_mod( 'show_archive_excerpt', true );
$show_read_more       = get_theme_mod( 'show_archive_read_more', true );
if ( $show_read_more ) {
	$read_more_text = get_theme_mod( 'excerpt_read_more_text' );
	if ( ! $read_more_text ) {
		$read_more_text = __( 'Read More', 'magty' );
	}
	$read_more_icon  = get_theme_mod( 'excerpt_read_more_icon', 'arrow-right-circle' );
	$read_more_style = get_theme_mod( 'archive_read_more_style', 'style_1' );
}

// Build category.
if ( in_array( 'category', $enabled_post_meta ) ) {
	$cats_enabled = true;
	$cat_style    = get_theme_mod( 'archive_category_style', 'style_3' );
	$cat_color    = get_theme_mod( 'archive_category_color_display', 'none' );
	$cat_limit    = get_theme_mod( 'archive_category_limit', 1 );
	$cat_label    = get_theme_mod( 'enable_archive_cat_label' );
}

// Build tags.
if ( in_array( 'tags', $enabled_post_meta ) ) {
	$tags_enabled = true;
	$tag_style    = get_theme_mod( 'archive_tag_style', 'style_4' );
	$tag_limit    = get_theme_mod( 'archive_tag_limit', 3 );
	$tag_label    = get_theme_mod( 'enable_archive_tag_label', true );
}

$show_post_format_icon = get_theme_mod( 'show_archive_post_format_icon' );
$archive_title_limit   = get_theme_mod( 'archive_posts_title_limit' );

// Use custom query if available.
global $wp_query;
$custom_archive_query = isset( $archive_query ) ? $archive_query : $wp_query;
while ( $custom_archive_query->have_posts() ) :
	$custom_archive_query->the_post();
	?>

	<article id="post-<?php the_ID(); ?>" <?php post_class( $class ); ?>>

		<div class="magty-article-block-wrapper">

			<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
				<div class="entry-image img-animate-zoom magty-rounded-img">
					<a href="<?php the_permalink(); ?>">
						<?php
						if ( $show_post_format_icon ) :
							magty_post_format_icon( 'center' );
						endif;
						?>
						<figure class="featured-media">
							<?php the_post_thumbnail( 'magty-cover-image' ); ?>
						</figure><!-- .featured-media -->
					</a>
				</div><!-- .entry-image -->
			<?php endif; ?>

			<header class="entry-header">
				<?php
				if ( 'post' === get_post_type() ) :
					if ( $cats_enabled && 'before_title' == $cat_position ) :
						magty_post_categories( $cat_style, $cat_color, $cat_limit, $cat_label );
					endif;
				endif;
				?>
				<h2 class="entry-title color-accent-hover magty-limit-lines <?php echo esc_attr( $archive_title_limit ); ?>">
					<a href="<?php the_permalink(); ?>" class="magty-title-line"><?php the_title(); ?></a>
				</h2>
				<?php if ( 'post' === get_post_type() ) : ?>
					<?php magty_post_meta_info( $enabled_post_meta, $meta_settings ); ?>
				<?php endif; ?>
			</header>

			<div class="entry-summary">
				<?php
				if ( $show_archive_excerpt ) :
					magty_the_archive_excerpt();
				endif;
				?>
				<?php
				if ( $show_read_more ) :
					?>
					<a href="<?php the_permalink(); ?>" class="magty-btn-link text-decoration-none <?php echo esc_attr( $read_more_style ); ?>">
						<?php
						echo esc_html( $read_more_text );
						if ( $read_more_icon ) :
							?>
							<span><?php magty_the_theme_svg( $read_more_icon ); ?></span>
							<?php
						endif;
						?>
					</a>
				<?php endif; ?>
			</div>

			<?php
			if ( 'post' === get_post_type() ) :
				if ( $cats_enabled && 'after_excerpt' == $cat_position ) :
					magty_post_categories( $cat_style, $cat_color, $cat_limit, $cat_label );
				endif;
				if ( $tags_enabled ) :
					magty_post_tags( $tag_style, $tag_limit, $tag_label );
				endif;
			endif;
			magty_post_edit_link();
			?>
			
		</div>

	</article><!-- #post-<?php the_ID(); ?> -->

	<?php
endwhile;
wp_reset_postdata();
