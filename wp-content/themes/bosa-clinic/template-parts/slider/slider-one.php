<?php
$bosa_clinic_width_control = '';
if( get_theme_mod( 'bosa_clinic_slider_width_controls', 'full' ) == 'boxed' ){
	$bosa_clinic_width_control = 'container boxed';
}

$bosa_clinic_slider_layout = 'slider-layout-one';
$bosa_clinic_posts_per_page_count = get_theme_mod( 'bosa_clinic_slider_posts_number', 6 );
$bosa_clinic_slider_id = get_theme_mod( 'bosa_clinic_slider_category', '' );

$bosa_clinic_query = new WP_Query( apply_filters( 'bosa_clinic_blog_args', array(
	'post_type'           => 'post',
	'post_status'         => 'publish',
	'posts_per_page'      => $bosa_clinic_posts_per_page_count,
	'cat'                 => $bosa_clinic_slider_id,
	'offset'              => 0,
	'ignore_sticky_posts' => 1
)));

$bosa_clinic_posts_array = $bosa_clinic_query->get_posts(); ?>

<div class="main-slider-wrap <?php echo esc_attr( $bosa_clinic_slider_layout ); ?> <?php echo esc_attr( $bosa_clinic_width_control ); ?>">
	<div class="main-slider">
		<?php
			while ( $bosa_clinic_query->have_posts() ) : $bosa_clinic_query->the_post();
			$bosa_clinic_render_slider_image 	= get_theme_mod( 'bosa_clinic_render_slider_image_size', 'bosa-clinic-1370-550' );
			$bosa_clinic_image 					= get_the_post_thumbnail_url( get_the_ID(), $bosa_clinic_render_slider_image );
		?>
			<div class="slide-item">
				<div class="banner-img" style="background-image: url( <?php echo esc_url( $bosa_clinic_image ); ?> );">
					<?php
					$bosa_clinic_alignmentClass = 'text-center';
					if ( get_theme_mod( 'bosa_clinic_main_slider_content_alignment' , 'center' ) == 'left' ){
						$bosa_clinic_alignmentClass = 'text-left';
					}elseif ( get_theme_mod( 'bosa_clinic_main_slider_content_alignment' , 'center' ) == 'right' ){
						$bosa_clinic_alignmentClass = 'text-right';
					}
					?>
					<div class="slide-inner">
						<div class="banner-content <?php echo esc_attr( $bosa_clinic_alignmentClass ); ?>">
						    <div class="entry-content">
						    	<header class="entry-header">
									<?php
									if( !get_theme_mod( 'bosa_clinic_hide_slider_category', false ) ){
										bosa_clinic_entry_header();
									}
									if ( is_singular() ) :
										the_title( '<h1 class="entry-title">', '</h1>' );
									else :
										if ( !get_theme_mod( 'bosa_clinic_hide_slider_title', false ) ){
											the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
										}
									endif; 
									
									?>
								</header><!-- .entry-header -->
								<div class="entry-meta">
									<?php
										if( !get_theme_mod( 'bosa_clinic_hide_slider_date', false ) ): ?>
											<span class="posted-on">
												<a href="<?php echo esc_url( bosa_clinic_get_day_link() ); ?>" >
													<?php echo esc_html(get_the_date('M j, Y')); ?>
												</a>
											</span>
										<?php endif; 
										if( !get_theme_mod( 'bosa_clinic_hide_slider_author', false ) ): ?>
											<span class="byline">
												<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
													<?php echo esc_html( get_the_author() ); ?>
												</a>
											</span>
										<?php endif; 
										if( !get_theme_mod( 'bosa_clinic_hide_slider_comment', false ) ):
											echo '<span class="comments-link">';
											comments_popup_link(
												sprintf(
													wp_kses(
														/* translators: %s: post title */
														__( 'Comment<span class="screen-reader-text"> on %s</span>', 'bosa-clinic' ),
														array(
															'span' => array(
																'class' => array(),
															),
														)
													),
													esc_html( get_the_title() ) 
												)
											);
											echo '</span>';
										endif;
									?>
						        </div><!-- .entry-meta -->
								
								<?php if ( !get_theme_mod( 'bosa_clinic_hide_slider_excerpt', false ) || !get_theme_mod( 'bosa_clinic_hide_slider_button', false ) ){ ?>
						        	<div class="entry-text">
										<?php
											if ( !get_theme_mod( 'bosa_clinic_hide_slider_excerpt', false ) ){
												$bosa_clinic_excerpt_length = get_theme_mod( 'bosa_clinic_slider_excerpt_length', 25 );
												bosa_clinic_excerpt( $bosa_clinic_excerpt_length , true );
											}
											if( !get_theme_mod( 'bosa_clinic_hide_slider_button', false ) ){
												$bosa_clinic_slider_btn_defaults = array(
													array(
														'slider_btn_type' 			=> 'button-outline',
														'slider_btn_bg_color' 		=> '#E12454',
														'slider_btn_border_color' 	=> '#ffffff',
														'slider_btn_text_color' 	=> '#ffffff',
														'slider_btn_hover_color' 	=> '#8cb46c',
														'slider_btn_text' 			=> '',
														'slider_btn_radius' 		=> 0,
													),		
												);
										        $bosa_clinic_slider_button = get_theme_mod( 'bosa_clinic_main_slider_button_repeater', $bosa_clinic_slider_btn_defaults );
										        
										        if( !empty( $bosa_clinic_slider_button ) && is_array( $bosa_clinic_slider_button ) ){ ?>
										        	<div class="button-container">
										        		<?php
												            $bosa_clinic_count = 0.2;
												            foreach( $bosa_clinic_slider_button as $bosa_clinic_value ){
												            	if( !empty( $bosa_clinic_value['slider_btn_text'] ) ){ ?>
																	<a href="<?php the_permalink(); ?>" class="<?php echo esc_attr( $bosa_clinic_value['slider_btn_type'] ); ?>">
																		<?php
																			echo esc_html( $bosa_clinic_value['slider_btn_text'] );
																		?>
																	</a>
																	<?php
												                	$bosa_clinic_count = $bosa_clinic_count + 0.2;
												                }
												            }
												        ?>
												    </div>
												    <?php  
												}
											} 
										?>
									</div>
								<?php } ?>
							</div><!-- .entry-content -->
						</div>
					</div>
					<div class="overlay"></div>
				</div>
			</div>
		<?php
		endwhile; 
		wp_reset_postdata();
		?>
	</div>
	<?php if( !get_theme_mod( 'bosa_clinic_disable_slider_arrows', false ) ) { ?>
		<ul class="slick-control">
	        <li class="main-slider-prev">
	        	<span></span>
	        </li>
	        <li class="main-slider-next">
	        	<span></span>
	        </li>
	    </ul>
	<?php } ?>
	<?php if ( !get_theme_mod( 'bosa_clinic_disable_slider_dots', false ) ){ ?>
		<div class="main-slider-dots"></div>
	<?php } ?>
</div>