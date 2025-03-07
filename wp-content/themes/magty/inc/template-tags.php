<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Magty
 */

if ( ! function_exists( 'magty_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function magty_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( 'Posted on %s', 'post date', 'magty' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		echo '<span class="posted-on">' . $posted_on . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
endif;

if ( ! function_exists( 'magty_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function magty_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'by %s', 'post author', 'magty' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="byline"> ' . $byline . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
endif;

if ( ! function_exists( 'magty_get_single_post_metas' ) ) :
	/**
	 * Get allowed single post meta based on post meta/customizer
	 *
	 * @param int $post_id Post ID.
	 */
	function magty_get_single_post_metas( $post_id ) {

		// Check if the metas are overridden in post meta.
		$override_post_metas = get_post_meta( $post_id, 'magty_override_post_metas', true );
		if ( $override_post_metas ) {
			$enabled_post_meta = get_post_meta( $post_id, 'magty_single_post_metas', true );
		} else {
			$enabled_post_meta = get_theme_mod( 'single_post_meta', array( 'read_time', 'date', 'comment', 'category', 'tags' ) );
		}
		// Return an empty array if all options are unchecked.
		if ( $enabled_post_meta ) {
			return $enabled_post_meta;
		} else {
			return array();
		}
	}
endif;

if ( ! function_exists( 'magty_show_single_post_meta_icons' ) ) :
	/**
	 * Get if post meta icons is enabled based on post meta/customizer
	 *
	 * @param int $post_id Post ID.
	 */
	function magty_show_single_post_meta_icons( $post_id ) {

		$show_single_post_meta_icons = get_post_meta( $post_id, 'magty_show_post_meta_icons', true );
		if ( '0' == $show_single_post_meta_icons ) {
			$show_single_post_meta_icons = false;
		} elseif ( '1' == $show_single_post_meta_icons ) {
			$show_single_post_meta_icons = true;
		} else {
			$show_single_post_meta_icons = get_theme_mod( 'show_single_post_meta_icon' );
		}
		return $show_single_post_meta_icons;
	}
endif;

if ( ! function_exists( 'magty_show_author_info' ) ) :
	/**
	 * Get if author info is enabled based on post meta/customizer
	 *
	 * @param int $post_id Post ID.
	 */
	function magty_show_author_info( $post_id ) {

		$show_author_info = get_post_meta( $post_id, 'magty_show_author_info', true );
		if ( '0' == $show_author_info ) {
			$show_author_info = false;
		} elseif ( '1' == $show_author_info ) {
			$show_author_info = true;
		} else {
			$show_author_info = get_theme_mod( 'show_author_info', true );
		}
		return $show_author_info;
	}
endif;

if ( ! function_exists( 'magty_show_related_posts' ) ) :
	/**
	 * Get if related posts are enabled based on post meta/customizer
	 *
	 * @param int $post_id Post ID.
	 */
	function magty_show_related_posts( $post_id ) {

		$show_related_posts = get_post_meta( $post_id, 'magty_show_related_posts', true );
		if ( '0' == $show_related_posts ) {
			$show_related_posts = false;
		} elseif ( '1' == $show_related_posts ) {
			$show_related_posts = true;
		} else {
			$show_related_posts = get_theme_mod( 'show_related_posts' );
		}
		return $show_related_posts;
	}
endif;

if ( ! function_exists( 'magty_show_author_posts' ) ) :
	/**
	 * Get if author posts are enabled based on post meta/customizer
	 *
	 * @param int $post_id Post ID.
	 */
	function magty_show_author_posts( $post_id ) {

		$show_author_posts = get_post_meta( $post_id, 'magty_show_author_posts', true );
		if ( '0' == $show_author_posts ) {
			$show_author_posts = false;
		} elseif ( '1' == $show_author_posts ) {
			$show_author_posts = true;
		} else {
			$show_author_posts = get_theme_mod( 'show_author_posts', true );
		}
		return $show_author_posts;
	}
endif;

if ( ! function_exists( 'magty_post_meta_info' ) ) :
	/**
	 * Display post meta info.
	 *
	 * @param array  $enabled_post_meta Enabled Post Meta.
	 * @param string $settings Additinal Settings
	 *
	 * @since 1.0.0
	 */
	function magty_post_meta_info( $enabled_post_meta = array(), $settings = array() ) {

		if ( $enabled_post_meta && ! empty( $enabled_post_meta ) ) :

			// Filter out valid metas.
			$valid_post_metas  = array( 'author', 'read_time', 'date', 'comment' );
			$enabled_post_meta = array_intersect( $enabled_post_meta, $valid_post_metas );
			$enabled_post_meta = array_values( $enabled_post_meta );

			if ( ! empty( $enabled_post_meta ) ) :

				$wrapper_class = '';

				if ( empty( $settings ) || ! is_array( $settings ) ) {
					$settings = array(
						'date_format'  => 'format_2',
						'author_image' => false,
						'show_icons'   => true,
					);
				} else {
					if ( ! isset( $settings['date_format'] ) ) {
						$settings['date_format'] = 'format_2';
					}
					if ( ! isset( $settings['author_image'] ) ) {
						$settings['author_image'] = false;
					}
					if ( ! isset( $settings['show_icons'] ) ) {
						$settings['show_icons'] = true;
					}
				}

				if ( ! $settings['show_icons'] ) {
					$wrapper_class .= ' magty-meta-icon-disabled';
				}
				?>
				<ul class="magty-entry-meta<?php echo esc_attr( $wrapper_class ); ?>">
					<?php
					// Author.
					$author_image = get_avatar( get_the_author_meta( 'ID' ), 20, '', '', array( 'class' => 'author-avatar-image' ) );
					if ( in_array( 'author', $enabled_post_meta ) ) {
						?>
						<li class="magty-meta post-author">
							<span class="meta-text">
								<?php
								$author_url  = get_author_posts_url( get_the_author_meta( 'ID' ) );
								$author_name = get_the_author_meta( 'display_name' );
								if ( $settings['author_image'] ) {
									?>
									<a href="<?php echo esc_url( $author_url ); ?>" class="text-decoration-none">
										<?php
										echo wp_kses_post( $author_image );
										echo esc_html( $author_name );
										?>
									</a>
									<?php
								} else {
									printf(
										__( 'By %s', 'magty' ),
										'<a href="' . esc_url( $author_url ) . '" class="text-decoration-none">' . esc_html( $author_name ) . '</a>'
									);
								}
								?>
							</span>
						</li>
						<?php
					}

					// Date.
					if ( in_array( 'date', $enabled_post_meta ) ) {
						?>
						<li class="magty-meta post-date">
							<span class="meta-text">
								<?php
								if ( true == $settings['show_icons'] ) :
									magty_the_theme_svg( 'time' );
								endif;
								?>
								<?php
								if ( 'format_1' == $settings['date_format'] ) {
									echo esc_html( human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) . ' ' . __( 'ago', 'magty' ) );
								} else {
									echo esc_html( get_the_date() );
								}
								?>
							</span>
						</li>
						<?php
					}

					// Read time.
					if ( in_array( 'read_time', $enabled_post_meta ) ) {
						?>
						<li class="magty-meta post-read-time">
							<span class="meta-text">
								<span class="screen-reader-text"><?php esc_html_e( 'Estimated read time', 'magty' ); ?></span>
								<?php
								if ( true == $settings['show_icons'] ) :
									magty_the_theme_svg( 'read' );
								endif;
								$read_time = get_post_meta( get_the_ID(), 'magty_post_read_time', true );
								if ( $read_time ) {
									printf( /* translators: %s: Read Time. */
										esc_html__( '%s min read', 'magty' ),
										number_format_i18n( $read_time )
									);
								} else {
									$read_time = magty_estimated_read_time( get_the_content() );
									printf( /* translators: %s: Read Time. */
										esc_html__( '%s min read', 'magty' ),
										number_format_i18n( $read_time )
									);
								}
								?>
							</span>
						</li>
						<?php
					}

					// Comment.
					if ( in_array( 'comment', $enabled_post_meta ) ) {
						if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
							?>
							<li class="magty-meta post-comment">
								<?php
								$number = get_comments_number( get_the_ID() );
								if ( 0 == $number ) {
									$respond_link = get_permalink() . '#respond';
									$comment_link = apply_filters( 'respond_link', $respond_link, get_the_ID() );
								} else {
									$comment_link = get_comments_link();
								}
								?>
								<span class="meta-text">
									<a href="<?php echo esc_url( $comment_link ); ?>" class="text-decoration-none">
										<?php
										if ( true == $settings['show_icons'] ) :
											magty_the_theme_svg( 'comment' );
											printf(
												/* translators: %s: Comment count number. */
												esc_html( _nx( '%s', '%s', $number, 'Comments title', 'magty' ) ),
												esc_html( number_format_i18n( $number ) )
											);
										elseif ( '1' === $number ) :
												esc_html_e( '1 comment', 'magty' );
											else :
												printf(
													/* translators: %s: Comment count number. */
													esc_html( _nx( '%s comment', '%s comments', $number, 'Comments title', 'magty' ) ),
													esc_html( number_format_i18n( $number ) )
												);
										endif;
											?>
									</a>
								</span>
							</li>
							<?php
						}
					}
					?>

				</ul>
				<?php
			endif;
			
		endif;
	}
endif;

if ( ! function_exists( 'magty_post_categories' ) ) :
	/**
	 * Display post categories.
	 *
	 * @param $display_style Display style.
	 * @param $show_color Show Category Color.
	 * @param $limit Get all/partial categories.
	 * @param $show_label Show Label or Not.
	 *
	 * @since 1.0.0
	 */
	function magty_post_categories( $display_style = null, $show_color = null, $limit = 0, $show_label = false ) {

		$categories = get_the_category( get_the_ID() );

		if ( empty( $categories ) ) {
			return;
		}

		if ( 0 != $limit ) {
			$limit = absint( $limit );
			if ( count( $categories ) > $limit ) {
				$categories = array_slice( $categories, 0, $limit );
			}
		}

		if ( null == $display_style ) {
			$display_style = 'style_1';
		}

		if ( null == $show_color ) {
			$show_color = 'none';
		}

		$wrapper_class = $display_style . ' cat-color-' . $show_color;

		?>
		<div class="entry-categories">
			<div class="magty-entry-categories <?php echo esc_attr( $wrapper_class ); ?>">
				<div class="category-list">
					<?php if ( $show_label ) : ?>
						<span class="category-label"><?php magty_the_theme_svg( 'folder2' ); ?><?php esc_html_e( 'Categories:', 'magty' ); ?></span>
					<?php else : ?>
						<span class="screen-reader-text"><?php esc_html_e( 'Categories', 'magty' ); ?></span>
					<?php endif; ?>
					<?php
					$style_attr = '';

					if ( 'none' != $show_color ) :
						if ( 'as_color' == $show_color ) :
							if( 'style_5' == $display_style ) :
								$style_attr = ' style="border-color:value;"';
							else:
								$style_attr = ' style="color:value;"';
							endif;
						else :
							if( 'style_5' == $display_style ) :
								$style_attr = ' style="border-color:value;"';
							else:
								$style_attr = ' style="background-color:value;"';
							endif;
						endif;
					endif;

					global $wp_rewrite;

					$rel = ( is_object( $wp_rewrite ) && $wp_rewrite->using_permalinks() ) ? 'rel="category tag"' : 'rel="category"';

					$separator = ' ';

					$thelist = '';
					$i       = 0;

					foreach ( $categories as $category ) {

						$class = '';

						if ( 0 < $i ) {
							$thelist .= $separator;
						}

						$build_style_attr = '';
						if ( 'none' != $show_color ) {
							$color = get_term_meta( $category->term_id, 'category_color', true );
							if ( $color ) {
								$build_style_attr = str_replace( 'value', $color, $style_attr );
							} else {
								$build_style_attr = '';
							}
							if ( 'as_bg' == $show_color ) :
								$class = ' class="has-bg-color"';
							endif;
						}

						$thelist .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" ' . $rel . $class . $build_style_attr . '>' . $category->name . '</a>';
						++$i;
					}
					echo $thelist;
					?>
				</div>
			</div>
		</div><!-- .entry-categories -->
		<?php
	}
endif;

if ( ! function_exists( 'magty_post_tags' ) ) :
	/**
	 * Display post tags.
	 *
	 * @param $style Display style.
	 *
	 * @since 1.0.0
	 */
	function magty_post_tags( $style = null, $limit = 0, $show_label = false ) {

		$tags = get_the_tags( get_the_ID() );

		if ( empty( $tags ) ) {
			return;
		}

		if ( 0 != $limit ) {
			$limit = absint( $limit );
			if ( count( $tags ) > $limit ) {
				$tags = array_slice( $tags, 0, $limit );
			}
		}

		if ( null == $style ) {
			$style = 'style_1';
		}
		?>
		<div class="entry-tags">
			<div class="magty-entry-tags <?php echo esc_attr( $style ); ?>">
				<div class="tag-list">
					<?php if ( $show_label ) : ?>
						<span class="tag-label"><?php magty_the_theme_svg( 'tag' ); ?><?php esc_html_e( 'Tags:', 'magty' ); ?></span>
					<?php else : ?>
						<span class="screen-reader-text"><?php esc_html_e( 'Tags', 'magty' ); ?></span>
					<?php endif; ?>
					<?php
					if ( 'style_1' == $style || 'style_2' == $style ) {
						$separator = ', ';
					} else {
						$separator = ' ';
					}

					$thelist = '';
					$i       = 0;
					foreach ( $tags as $tag ) {
						if ( 0 < $i ) {
							$thelist .= $separator;
						}
						$link     = get_term_link( $tag, 'post_tag' );
						$thelist .= "<a href='" . esc_url( $link ) . "' rel='tag'>" . $tag->name . '</a>';
						++$i;
					}
					echo $thelist;
					?>
				</div>
			</div>
		</div>
		<?php
	}
endif;

if ( ! function_exists( 'magty_single_categories' ) ) :
	/**
	 * Prints HTML with meta information for the categories on single pages
	 *
	 * @param array $enabled_post_meta Enabled Post Meta.
	 */
	function magty_single_categories( $enabled_post_meta = array() ) {
		if ( 'post' === get_post_type() ) {
			if ( in_array( 'category', $enabled_post_meta ) ) {
				$cat_style = get_post_meta( get_the_ID(), 'magty_cat_style', true );
				if ( empty( $cat_style ) ) {
					$cat_style = get_theme_mod( 'single_category_style', 'style_3' );
				}
				$color = get_post_meta( get_the_ID(), 'magty_cat_color_display', true );
				if ( empty( $color ) ) {
					$color = get_theme_mod( 'single_category_color_display', 'none' );
				}
				$limit = get_theme_mod( 'single_category_limit', 3 );
				$label = get_theme_mod( 'enable_single_cat_label' );
				magty_post_categories( $cat_style, $color, $limit, $label );
			}
		}
	}
endif;

if ( ! function_exists( 'magty_single_tags' ) ) :
	/**
	 * Prints HTML with meta information for the tags on single pages
	 *
	 * @param array $enabled_post_meta Enabled Post Meta.
	 */
	function magty_single_tags( $enabled_post_meta = array() ) {
		if ( 'post' === get_post_type() ) {
			if ( in_array( 'category', $enabled_post_meta ) ) {
				$label     = get_theme_mod( 'enable_single_tag_label', true );
				$tag_style = get_theme_mod( 'single_tag_style', 'style_5' );
				$tag_limit = get_theme_mod( 'single_tag_limit', 3 );
				magty_post_tags( $tag_style, $tag_limit, $label );
			}
		}
	}
endif;

if ( ! function_exists( 'magty_post_edit_link' ) ) :
	/**
	 * Prints HTML with meta information for the tags on single pages
	 */
	function magty_post_edit_link() {
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
	}
endif;

if ( ! function_exists( 'magty_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function magty_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :
			?>

			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div><!-- .post-thumbnail -->

		<?php else : ?>

			<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
				<?php
					the_post_thumbnail(
						'post-thumbnail',
						array(
							'alt' => the_title_attribute(
								array(
									'echo' => false,
								)
							),
						)
					);
				?>
			</a>

			<?php
		endif; // End is_singular().
	}
endif;

if ( ! function_exists( 'wp_body_open' ) ) :
	/**
	 * Shim for sites older than 5.2.
	 *
	 * @link https://core.trac.wordpress.org/ticket/12563
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
endif;

/**
 * Adds a Sub Nav Toggle to Menu
 *
 * @since Magty 1.0
 *
 * @param stdClass $args  An object of wp_nav_menu() arguments.
 * @param WP_Post  $item  Menu item data object.
 * @param int      $depth Depth of menu item. Used for padding.
 * @return stdClass An object of wp_nav_menu() arguments.
 */
function magty_add_sub_toggles_to_main_menu( $args, $item, $depth ) {

	if ( 'primary-menu' === $args->theme_location && ( isset( $args->show_toggles ) && $args->show_toggles ) ) {

		// Wrap the menu item link contents in a div, used for positioning.
		$args->before = '<div class="ancestor-wrapper">';
		$args->after  = '';

		// Add a toggle to items with children.
		if ( in_array( 'menu-item-has-children', $item->classes, true ) ) {

			$toggle_target_string = '.magty-responsive-menu .menu-item-' . $item->ID . ' > .sub-menu';

			// Add the sub menu toggle.
			$args->after .= '<button class="toggle sub-menu-toggle fill-children-current-color" data-toggle-target="' . $toggle_target_string . '" data-toggle-type="slidetoggle" data-toggle-duration="250" aria-expanded="false"><span class="screen-reader-text">' . __( 'Show sub menu', 'magty' ) . '</span>' . magty_get_theme_svg( 'chevron-down' ) . '</button>';

		}

		// Close the wrapper.
		$args->after .= '</div><!-- .ancestor-wrapper -->';

		// Add sub menu icons to the primary menu without toggles.
	} elseif ( 'primary-menu' === $args->theme_location ) {
		if ( in_array( 'menu-item-has-children', $item->classes, true ) ) {
			$args->link_after = '<span class="icon">' . magty_get_theme_svg( 'chevron-down' ) . '</span>';
		} else {
			$args->link_after = '';
		}
	}

	return $args;
}
add_filter( 'nav_menu_item_args', 'magty_add_sub_toggles_to_main_menu', 10, 3 );

/**
 * Displays SVG icons in social links menu.
 *
 * @since Magty 1.0
 *
 * @param string   $item_output The menu item's starting HTML output.
 * @param WP_Post  $item        Menu item data object.
 * @param int      $depth       Depth of the menu. Used for padding.
 * @param stdClass $args        An object of wp_nav_menu() arguments.
 * @return string The menu item output with social icon.
 */
function magty_nav_menu_social_icons( $item_output, $item, $depth, $args ) {
	// Change SVG icon inside social links menu if there is supported URL.
	if ( 'social-menu' === $args->theme_location ) {
		$svg = Magty_SVG_Icons::get_social_link_svg( $item->url );
		if ( empty( $svg ) ) {
			$svg = magty_get_theme_svg( 'link' );
		}
		$item_output = str_replace( $args->link_before, $svg . $args->link_before, $item_output );
	}
	return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'magty_nav_menu_social_icons', 10, 4 );

/**
 * Displays menu description in primary menu
 *
 * @since Magty 1.0
 *
 * @param string   $item_output The menu item's starting HTML output.
 * @param WP_Post  $item        Menu item data object.
 * @param int      $depth       Depth of the menu. Used for padding.
 * @param stdClass $args        An object of wp_nav_menu() arguments.
 * @return string The menu item output with menu description.
 */
function magty_show_main_menu_nav_description( $item_output, $item, $depth, $args ) {
	if ( ! empty( $item->description ) ) {
		$item_output = str_replace( $args->link_after . '</a>', '<span class="menu-item-description">' . $item->description . '</span>' . $args->link_after . '</a>', $item_output );
	}
	return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'magty_show_main_menu_nav_description', 10, 4 );


/**
 * Checks if the specified comment is written by the author of the post commented on.
 *
 * @since Magty 1.0
 *
 * @param object $comment Comment data.
 * @return bool
 */
function magty_is_comment_by_post_author( $comment = null ) {

	if ( is_object( $comment ) && $comment->user_id > 0 ) {

		$user = get_userdata( $comment->user_id );
		$post = get_post( $comment->comment_post_ID );

		if ( ! empty( $user ) && ! empty( $post ) ) {

			return $comment->user_id === $post->post_author;

		}
	}
	return false;
}
