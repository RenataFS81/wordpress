<?php
/**
 * Template part for displaying related posts in single.php
 *
 * @since Bosa Clinic 1.0.0
 */

?>

<?php
	$bosa_clinic_post_ids[] = get_the_ID();
	$bosa_clinic_posts_count = get_theme_mod( 'bosa_clinic_related_posts_count', 4 );
	$bosa_clinic_args = bosa_clinic_get_related_posts( array( 'category', 'post_tag' ), $bosa_clinic_posts_count, true  );
	$bosa_clinic_query = new WP_Query( apply_filters( 'bosa_clinic_related_posts_args', $bosa_clinic_args ) );
	if( $bosa_clinic_query->have_posts() ) {
		while ( $bosa_clinic_query->have_posts() ){
			$bosa_clinic_query->the_post();
			array_push( $bosa_clinic_post_ids, get_the_ID() );		
			?>
			<div class="col-12 col-md-6 col-lg-3">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if ( has_post_thumbnail() ) : ?>
				        <figure class="featured-image">
				            <a href="<?php the_permalink(); ?>">
				                <?php 
				                $bosa_clinic_render_related_post_image_size = get_theme_mod( 'bosa_clinic_render_related_post_image_size', 'bosa-clinic-420-300' );
				                bosa_clinic_image_size( $bosa_clinic_render_related_post_image_size ); ?>
				            </a>
				        </figure>
				   <?php endif; ?>
				    <div class="entry-content">
						<header class="entry-header">
							<?php
								the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
							?>
						</header><!-- .entry-header -->
					</div><!-- .entry-content -->
				</article><!-- #post-->
			</div>
		<?php
		}
		wp_reset_postdata();
	}
	else {
		echo '<div class="col-12">';
		echo '<p class="not-found">';
		esc_html_e( 'No Related Post', 'bosa-clinic' );
		echo '</p>';
		echo '</div>';
	}

