<?php
/**
* Bosa Clinic Recent/Popular Post Widget
* 
* @since Bosa Clinic 1.0.0
*/
if ( ! class_exists( 'Bosa_Clinic_Latest_Posts_Widget' ) ) :

class Bosa_Clinic_Latest_Posts_Widget extends Bosa_Clinic_Base_Widget{

	public $defaults = array();

	public function __construct(){

		parent::__construct(
			'bosa_clinic_latest_post',
			esc_html__( 'Bosa Clinic Latest Posts', 'bosa-clinic' ),
			array(
				'description' => esc_html__( 'Display your site’s most recent Posts or a Selected Category Posts with Thumbnail.', 'bosa-clinic' )
			)
		);

		$defaults = array(
			'per_page' => 5,
			'show_date_comment' => true,
			'layout' => 'left'
		);

		$this->defaults = apply_filters( 'bosa_clinic_rcs_widget_default', $defaults );

		$this->fields = array(
			'title' => array(
				'label' => esc_html__( 'Title', 'bosa-clinic' ),
				'type' => 'text'
			),
			'category' => array(
				'label'   => esc_html__( 'Select a Category', 'bosa-clinic' ),
				'type'    => 'dropdown-categories',
			),
			'per_page' => array(
				'label'   => esc_html__( 'Number of Posts', 'bosa-clinic' ),
				'type'    => 'number',
				'min'     => 1,
				'max'     => $this->defaults[ 'per_page' ],
				'default' => $this->defaults[ 'per_page' ],
			),
			'show_date_comment' => array(
				'label' => esc_html__( 'Show Date & Comments', 'bosa-clinic' ),
				'type' => 'checkbox',
				'default' => $this->defaults[ 'show_date_comment' ]
			),
			'layout' => array(
				'label' => esc_html__( 'Layout', 'bosa-clinic' ),
				'type' => 'radio',
				'choices' => array(
					'left'  => esc_html__( 'Left Image', 'bosa-clinic' ),
					'right' => esc_html__( 'Right Image', 'bosa-clinic' ),
					'full'  => esc_html__( 'Full Image', 'bosa-clinic' )
				),
				'default' => $this->defaults[ 'layout' ]
			)
		);
	}

	public function widget( $args, $instance ){

		echo $args[ 'before_widget' ]; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		
		$instance = $this->init_defaults( $instance );
		$query_args = apply_filters( 'bosa_clinic_post_widget_query_args', array(
			'post_type'           => 'post',
			'posts_per_page'      => $instance[ 'per_page' ],
			'cat'                 => $instance[ 'category' ],
			'no_found_rows'       => true,
			'post_status'         => 'publish',
			'ignore_sticky_posts' => 1
		), $instance );

		if( 'left' == $instance[ 'layout' ] ){
			$class = 'left-thumb-widget';
		}else if( 'right' == $instance[ 'layout' ] ){
			$class = 'right-thumb-widget';
		}else {
			$class = 'full-thumb-widget';
		}
		?>
		<!-- sidebar category slide widget -->
		<section class="wrapper sidebar-item latest-posts-widget <?php echo esc_attr( $class ); ?>">
			<?php 
			if( !isset( $instance[ 'title' ] ) || empty( $instance[ 'title' ] ) ){
				$instance[ 'title' ] = esc_html__( 'Latest Posts', 'bosa-clinic' );
			}

			echo $args[ 'before_title' ] . esc_html( $instance[ 'title' ] )   . $args[ 'after_title' ]; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			?>

			<div class="widget-content">
			<?php
				$this->query_it( $query_args, $instance );
			?>
			</div>
		</section>
		<?php
		
		echo $args[ 'after_widget' ]; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}

	public function query_it( $query_args, $instance ){

		$query = new WP_Query( $query_args );

		if ( $query->have_posts() ){
			
			while ( $query->have_posts() ){ 
				$query->the_post();
				$this->item( $instance );
			}
			
		}else{
			?>
			<p class="text-center">
				<?php esc_html_e( 'No Posts Found.', 'bosa-clinic' ); ?>
			</p>
			<?php
		} 
		wp_reset_postdata();
	}
	
	public function item( $instance ){
		?>
		<article class="post">
		    <?php
		   
		   		if( has_post_thumbnail() ){
		   			if ( $instance[ 'layout' ] == 'full' ){
		   				$src = get_the_post_thumbnail_url( get_the_ID(), 'bosa-clinic-290-150' );
		   			}else if ( $instance[ 'layout' ] == 'right' ){
		   				$src = get_the_post_thumbnail_url( get_the_ID(), 'bosa-clinic-80-60' );
		   			}else {
		   				$src = get_the_post_thumbnail_url( get_the_ID(), 'bosa-clinic-80-60' );
		   			}

			   		$image_id = get_post_thumbnail_id();
			   		$alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true);
		   		?>
	   		    <figure class="featured-image">
	   		        <a href="<?php the_permalink(); ?>">
	   		          	<img src="<?php echo esc_url( $src ); ?>" alt="<?php echo esc_attr($alt); ?>"/>
	   		        </a>
	   		    </figure>
		   		<?php } ?>

		   
			<div class="post-content">
				<h3 class="entry-title">
					<a href="<?php the_permalink(); ?>">
						<?php the_title();  ?>
					</a>
				</h3>
				<div class="entry-meta">
					<?php if( $instance[ 'show_date_comment' ] ): ?>
						  <span class="posted-on">
						       <a href="<?php echo esc_url( bosa_clinic_get_day_link() ); ?>" >
						            <time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>">
						            	<?php echo esc_html( get_the_date('M m, Y') ); ?>
						            </time>
						       </a>
						  </span>
						  <span class="comments-link">
						   <a href="<?php comments_link(); ?>">
							   	<?php echo esc_html( wp_count_comments( get_the_ID() )->approved ); ?>
						   </a>
						</span>
				 	<?php endif; ?>
				</div>
			</div>
		</article>
		<?php
	}
}

endif;