<?php

if ( ! function_exists( 'magty_ajax_pagination' ) ) :
	/**
	 * Outputs the required structure for ajax loading posts on scroll and click
	 *
	 * @since 1.0.0
	 * @param $type string Ajax Load Type
	 */
	function magty_ajax_pagination( $type ) {
		global $wp_query;
		if ( $wp_query->max_num_pages > 1 ) {

			?>
			<div class="magty-load-posts-btn-wrapper" 
			data-page="1" 
			data-max-pages="<?php echo esc_attr( $wp_query->max_num_pages ); ?>" 
			data-load-type="<?php echo esc_attr( $type ); ?>"
			>
				<a href="#" class="magty-ajax-load-btn text-decoration-none">
					<span class="magty-ajax-btn-txt"><?php esc_html_e( 'Load More Posts', 'magty' ); ?></span>
					<span class="magty-ajax-loader">
						<?php magty_the_theme_svg( 'arrow-repeat' ); ?>
					</span>
				</a>
			</div>
			<?php
		}
	}
endif;

if ( ! function_exists( 'magty_load_posts' ) ) :
	/**
	 * Ajax Load posts Callback.
	 *
	 * @since 1.0.0
	 */
	function magty_load_posts() {

		check_ajax_referer( 'magty-load-posts-nonce', 'load_post_nonce' );

		$query_vars = json_decode( stripslashes( $_POST['query_vars'] ), true );

		$is_search = ( isset( $query_vars['s'] ) && ! empty( $query_vars['s'] ) ) ? true : false;
		if ( ! $is_search ) {
			$query_vars['post_type'] = ( isset( $_POST['post_type'] ) && ! empty( $_POST['post_type'] ) ) ? esc_attr( $_POST['post_type'] ) : 'post';
		}
		
		$query_vars['paged']       = (int) $_POST['page'];
		$query_vars['post_status'] = 'publish';

		$posts = new WP_Query( $query_vars );

		if ( $posts->have_posts() ) :

			ob_start();

			$archive_style = $_POST['template'];
			set_query_var( 'archive_style', $archive_style );

			// Set a query var for new query to work with the default query.
			set_query_var( 'archive_query', $posts );

			// Load a different template for search page else load archive template.
			if ( $is_search ) {
				$template_part = 'template-parts/content/content-search';
			} else {
				$template_part = 'template-parts/archive/styles/' . $archive_style;
			}

			get_template_part( $template_part );

			$output['content'][] = ob_get_clean();
			wp_send_json_success( $output );

		else :

			$error = new WP_Error( '500', __( 'No More Posts', 'magty' ) );
			wp_send_json_error( $error );

		endif;

		wp_die();
	}
endif;
add_action( 'wp_ajax_magty_load_posts', 'magty_load_posts' );
add_action( 'wp_ajax_nopriv_magty_load_posts', 'magty_load_posts' );
