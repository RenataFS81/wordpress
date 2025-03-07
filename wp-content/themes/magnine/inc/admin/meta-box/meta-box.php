<?php
/**
 * Implement posts metabox.
 *
 * @package MagNine
 */

if ( ! function_exists( 'magnine_add_theme_meta_box' ) ) :

    /**
     * Add the Meta Box
     *
     * @since 1.0.0
     */
    function magnine_add_theme_meta_box() {

        $post_types = array( 'post', 'page' );

        foreach ( $post_types as $post_type ) {
            add_meta_box(
                'interface-metabox-panel',
                sprintf(
                    /* translators: %s: Post Type. */
                    esc_html__( '%s Settings', 'magnine' ),
                    ucwords( $post_type )
                ),
                'magnine_meta_box_html',
                $post_type,
                'normal',
                'high'
            );
        }
    }

endif;
add_action( 'add_meta_boxes', 'magnine_add_theme_meta_box' );

if ( ! function_exists( 'magnine_meta_box_html' ) ) :

    /**
     * Render theme settings meta box.
     *
     * @param mixed $post Post Object.
     * @since 1.0.0
     */
    function magnine_meta_box_html( $post ) {

        global $post_type;

        wp_nonce_field( basename( __FILE__ ), 'magnine_meta_box_nonce' );
        $single_post_category_meta = get_post_meta( $post->ID, 'magnine_single_category_meta', true );
        $single_post_featured_post = get_post_meta( $post->ID, 'magnine_single_post_featured_post', true );
        $single_post_navigation = get_post_meta( $post->ID, 'magnine_single_post_navigation', true );
        $single_post_author_info = get_post_meta( $post->ID, 'magnine_single_post_author_info', true );
        $single_post_date_meta = get_post_meta( $post->ID, 'magnine_single_date_meta', true );
        $single_post_author_meta = get_post_meta( $post->ID, 'magnine_single_author_meta', true );
        $single_post_related_post = get_post_meta( $post->ID, 'magnine_single_related_post', true );
        $single_post_author_post = get_post_meta( $post->ID, 'magnine_single_author_post', true );
        $page_layout             = get_post_meta( $post->ID, 'magnine_page_layout', true );
        $layouts                 = magnine_get_sidebar_layouts();
        if (empty($single_post_featured_post)) {
            $single_post_featured_post = 0;
        }
        ?>
        <div id="magnine-settings-metabox-container" class="inside be-meta-box">
            <p class="interface-meta-info"><?php esc_html_e( 'This action overrides the global settings from the theme customizer. Leave it unchanged if you want it to remain aligned with the global settings.', 'magnine' ); ?>
            <div class="interface-meta-wrapper">

                <div class="interface-meta-header">
                    <a href="#" class="interface-meta-label is-active" data-tab="section-page-layout">
                        <h3><?php esc_html_e( 'Layout Options', 'magnine' ); ?></h3>
                    </a>
                    <?php if ( 'post' == $post_type ) : ?>
                        <a href="#" class="interface-meta-label" data-tab="section-meta-posts">
                            <h3><?php esc_html_e( 'Post Meta', 'magnine' ); ?></h3>
                        </a>
                        <a href="#" class="interface-meta-label" data-tab="section-related-post">
                            <h3><?php esc_html_e( 'You May Also Like', 'magnine' ); ?></h3>
                        </a>
                        <a href="#" class="interface-meta-label" data-tab="section-author-post">
                            <h3><?php esc_html_e( 'More From Author', 'magnine' ); ?></h3>
                        </a>
                    <?php endif; ?>
                </div>

                <div class="interface-meta-content">

                        <div class="interface-meta-details is-active" id="magnine-tab-section-page-layout">
                            <div class="interface-meta-card">
                                <h4><label for="page-layout"><?php esc_html_e( 'Layout Options', 'magnine' ); ?></label></h4>
                                <div class="interface-input-radio">
                                    <?php
                                    if ( ! empty( $layouts ) && is_array( $layouts ) ) {
                                        foreach ( $layouts as $value => $option ) :
                                            ?>
                                            <input class="image-select" type="radio" id="<?php echo esc_attr( $value ); ?>" name="magnine_page_layout" value="<?php echo esc_attr( $value ); ?>" <?php checked( $value, $page_layout ); ?>>
                                            <label for="<?php echo esc_attr( $value ); ?>">
                                                <img src="<?php echo esc_html( $option['url'] ); ?>" alt="<?php echo esc_attr( $option['label'] ); ?>" title="<?php echo esc_attr( $option['label'] ); ?>">
                                            </label>
                                            <?php
                                        endforeach;
                                    }
                                    ?>
                                </div>
                            </div>


                            <div class="interface-meta-card">
                                <h4><label for="single-post_featured_post-meta"><?php esc_html_e( 'Mark as Featured', 'magnine' ); ?></label></h4>
                                <small>This will add additional top sections on the archive page for the category of these posts.</small>
                                <small><strong>Important:</strong> You need to enable this feature by selecting 'Enable Featured Post' under 'Customizer ▸ Archive Options ▸ Archive Options'.</small>
                                <div class="post-section-wrap">
                                    <select id="single-post_featured_post-meta" name="magnine_single_post_featured_post" class="widefat">
                                        <option value="0" <?php selected( $single_post_featured_post, 0 ); ?>><?php esc_html_e( 'No', 'magnine' ); ?></option>
                                        <option value="1" <?php selected( $single_post_featured_post, 1 ); ?>><?php esc_html_e( 'Yes', 'magnine' ); ?></option>
                                    </select>
                                </div>
                            </div>


                            <div class="interface-meta-card">
                                <h4><label for="single-post_navigation-meta"><?php esc_html_e( 'Enable Sticky Posts Navigation', 'magnine' ); ?></label></h4>
                                <div class="post-section-wrap">
                                    <select id="single-post_navigation-meta" name="magnine_single_post_navigation" class="widefat">
                                        <option value=""><?php esc_html_e( 'Inherit', 'magnine' ); ?></option>
                                        <option value="1" <?php selected( $single_post_navigation, 1 ); ?>><?php esc_html_e( 'Yes', 'magnine' ); ?></option>
                                        <option value="0" <?php selected( $single_post_navigation, 0 ); ?>><?php esc_html_e( 'No', 'magnine' ); ?></option>
                                    </select>
                                </div>
                            </div>

                            <div class="interface-meta-card">
                                <h4><label for="single-post_author-meta"><?php esc_html_e( 'Enable Author Info', 'magnine' ); ?></label></h4>
                                <div class="post-section-wrap">
                                    <select id="single-post_author-meta" name="magnine_single_post_author_info" class="widefat">
                                        <option value=""><?php esc_html_e( 'Inherit', 'magnine' ); ?></option>
                                        <option value="1" <?php selected( $single_post_author_info, 1 ); ?>><?php esc_html_e( 'Yes', 'magnine' ); ?></option>
                                        <option value="0" <?php selected( $single_post_author_info, 0 ); ?>><?php esc_html_e( 'No', 'magnine' ); ?></option>
                                    </select>
                                </div>
                            </div>
                        </div>



                        <div class="interface-meta-details" id="magnine-tab-section-meta-posts">

                            <div class="interface-meta-card">
                                <h4>
                                    <label for="single-enable-category-meta"><?php esc_html_e( 'Display Category Meta', 'magnine' ); ?></label>
                                </h4>
                                <div class="post-section-wrap">
                                    <select id="single-category-meta" name="magnine_single_category_meta" class="widefat">
                                        <option value=""><?php esc_html_e( 'Inherit', 'magnine' ); ?></option>
                                        <option value="1" <?php selected( $single_post_category_meta, 1 ); ?>><?php esc_html_e( 'Yes', 'magnine' ); ?></option>
                                        <option value="0" <?php selected( $single_post_category_meta, 0 ); ?>><?php esc_html_e( 'No', 'magnine' ); ?></option>
                                    </select>
                                </div>
                            </div>

                            <div class="interface-meta-card">
                                <h4>
                                    <label for="single-enable-date-meta"><?php esc_html_e( 'Display Published Date', 'magnine' ); ?></label>
                                </h4>
                                <div class="post-section-wrap">
                                    <select id="single-date-meta" name="magnine_single_date_meta" class="widefat">
                                        <option value=""><?php esc_html_e( 'Inherit', 'magnine' ); ?></option>
                                        <option value="1" <?php selected( $single_post_date_meta, 1 ); ?>><?php esc_html_e( 'Yes', 'magnine' ); ?></option>
                                        <option value="0" <?php selected( $single_post_date_meta, 0 ); ?>><?php esc_html_e( 'No', 'magnine' ); ?></option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="interface-meta-card">
                                <h4>
                                    <label for="single-enable-author-meta"><?php esc_html_e( 'Display Author Meta', 'magnine' ); ?></label>
                                </h4>
                                <div class="post-section-wrap">
                                    <select id="single-author-meta" name="magnine_single_author_meta" class="widefat">
                                        <option value=""><?php esc_html_e( 'Inherit', 'magnine' ); ?></option>
                                        <option value="1" <?php selected( $single_post_author_meta, 1 ); ?>><?php esc_html_e( 'Yes', 'magnine' ); ?></option>
                                        <option value="0" <?php selected( $single_post_author_meta, 0 ); ?>><?php esc_html_e( 'No', 'magnine' ); ?></option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="interface-meta-details" id="magnine-tab-section-related-post">

                            <div class="interface-meta-card">
                                    <h4>
                                    <label for="single-enable-related-post"><?php esc_html_e( 'Enable You May Also Like Section', 'magnine' ); ?></label>
                                    </h4>
                                    <div class="post-section-wrap">
                                        <select id="single-related-post" name="magnine_single_related_post" class="widefat">
                                            <option value=""><?php esc_html_e( 'Inherit', 'magnine' ); ?></option>
                                            <option value="1" <?php selected( $single_post_related_post, 1 ); ?>><?php esc_html_e( 'Yes', 'magnine' ); ?></option>
                                            <option value="0" <?php selected( $single_post_related_post, 0 ); ?>><?php esc_html_e( 'No', 'magnine' ); ?></option>
                                        </select>
                                    </div>

                            </div>

                         </div>

                        <div class="interface-meta-details" id="magnine-tab-section-author-post">

                            <div class="interface-meta-card">
                                <h4>
                                <label for="single-enable-author-post"><?php esc_html_e( 'Enable More From Author Section', 'magnine' ); ?></label>

                                </h4>
                                <div class="post-section-wrap">
                                    <select id="single-related-post" name="magnine_single_author_post" class="widefat">
                                        <option value=""><?php esc_html_e( 'Inherit', 'magnine' ); ?></option>
                                        <option value="1" <?php selected( $single_post_author_post, 1 ); ?>><?php esc_html_e( 'Yes', 'magnine' ); ?></option>
                                        <option value="0" <?php selected( $single_post_author_post, 0 ); ?>><?php esc_html_e( 'No', 'magnine' ); ?></option>
                                    </select>
                                </div>
                            </div>

                         </div>
                </div>
            </div>
        </div>
        <?php
    }

endif;


if ( ! function_exists( 'magnine_save_postdata' ) ) :

    /**
     * Save posts meta box value.
     *
     * @since 1.0.0
     *
     * @param int $post_id Post ID.
     */
    function magnine_save_postdata( $post_id ) {

        // Verify nonce.
        if ( ! isset( $_POST['magnine_meta_box_nonce'] ) || ! wp_verify_nonce( $_POST['magnine_meta_box_nonce'], basename( __FILE__ ) ) ) {
            return;
        }

        // Bail if auto save or revision.
        if ( defined( 'DOING_AUTOSAVE' ) || is_int( wp_is_post_revision( $post_id ) ) || is_int( wp_is_post_autosave( $post_id ) ) ) {
            return;
        }

        // Check the post being saved == the $post_id to prevent triggering this call for other save_post events.
        if ( empty( $_POST['post_ID'] ) || $_POST['post_ID'] != $post_id ) {
            return;
        }

        // Check permission.
        if ( 'page' === $_POST['post_type'] ) {
            if ( ! current_user_can( 'edit_page', $post_id ) ) {
                return;
            }
        } elseif ( ! current_user_can( 'edit_post', $post_id ) ) {
            return;
        }

        // Page layout.
        if ( isset( $_POST['magnine_page_layout'] ) ) {

            $valid_layout_values = array_keys( magnine_get_sidebar_layouts() );
            $layout_value        = sanitize_text_field( $_POST['magnine_page_layout'] );
            if ( in_array( $layout_value, $valid_layout_values ) ) {
                update_post_meta( $post_id, 'magnine_page_layout', $layout_value );
            } else {
                delete_post_meta( $post_id, 'magnine_page_layout' );
            }
        }

        if ( isset( $_POST['magnine_single_post_featured_post'] ) ) {
            if ( '1' == $_POST['magnine_single_post_featured_post'] ) {
                update_post_meta( $post_id, 'magnine_single_post_featured_post', 1 );
            } elseif ( '0' == $_POST['magnine_single_post_featured_post'] ) {
                update_post_meta( $post_id, 'magnine_single_post_featured_post', 0 );
            } else {
                delete_post_meta( $post_id, 'magnine_single_post_featured_post' );
            }
        }
        if ( isset( $_POST['magnine_single_post_navigation'] ) ) {
            if ( '1' == $_POST['magnine_single_post_navigation'] ) {
                update_post_meta( $post_id, 'magnine_single_post_navigation', 1 );
            } elseif ( '0' == $_POST['magnine_single_post_navigation'] ) {
                update_post_meta( $post_id, 'magnine_single_post_navigation', 0 );
            } else {
                delete_post_meta( $post_id, 'magnine_single_post_navigation' );
            }
        }

        if ( isset( $_POST['magnine_single_post_author_info'] ) ) {
            if ( '1' == $_POST['magnine_single_post_author_info'] ) {
                update_post_meta( $post_id, 'magnine_single_post_author_info', 1 );
            } elseif ( '0' == $_POST['magnine_single_post_author_info'] ) {
                update_post_meta( $post_id, 'magnine_single_post_author_info', 0 );
            } else {
                delete_post_meta( $post_id, 'magnine_single_post_author_info' );
            }
        }

        if ( isset( $_POST['magnine_single_category_meta'] ) ) {
            if ( '1' == $_POST['magnine_single_category_meta'] ) {
                update_post_meta( $post_id, 'magnine_single_category_meta', 1 );
            } elseif ( '0' == $_POST['magnine_single_category_meta'] ) {
                update_post_meta( $post_id, 'magnine_single_category_meta', 0 );
            } else {
                delete_post_meta( $post_id, 'magnine_single_category_meta' );
            }
        }

        if ( isset( $_POST['magnine_single_date_meta'] ) ) {
            if ( '1' == $_POST['magnine_single_date_meta'] ) {
                update_post_meta( $post_id, 'magnine_single_date_meta', 1 );
            } elseif ( '0' == $_POST['magnine_single_date_meta'] ) {
                update_post_meta( $post_id, 'magnine_single_date_meta', 0 );
            } else {
                delete_post_meta( $post_id, 'magnine_single_date_meta' );
            }
        }

        if ( isset( $_POST['magnine_single_author_meta'] ) ) {
            if ( '1' == $_POST['magnine_single_author_meta'] ) {
                update_post_meta( $post_id, 'magnine_single_author_meta', 1 );
            } elseif ( '0' == $_POST['magnine_single_author_meta'] ) {
                update_post_meta( $post_id, 'magnine_single_author_meta', 0 );
            } else {
                delete_post_meta( $post_id, 'magnine_single_author_meta' );
            }
        }

        if ( isset( $_POST['magnine_single_related_post'] ) ) {
            if ( '1' == $_POST['magnine_single_related_post'] ) {
                update_post_meta( $post_id, 'magnine_single_related_post', 1 );
            } elseif ( '0' == $_POST['magnine_single_related_post'] ) {
                update_post_meta( $post_id, 'magnine_single_related_post', 0 );
            } else {
                delete_post_meta( $post_id, 'magnine_single_related_post' );
            }
        }

        if ( isset( $_POST['magnine_single_author_post'] ) ) {
            if ( '1' == $_POST['magnine_single_author_post'] ) {
                update_post_meta( $post_id, 'magnine_single_author_post', 1 );
            } elseif ( '0' == $_POST['magnine_single_author_post'] ) {
                update_post_meta( $post_id, 'magnine_single_author_post', 0 );
            } else {
                delete_post_meta( $post_id, 'magnine_single_author_post' );
            }
        }

    }

endif;
add_action( 'save_post', 'magnine_save_postdata' );

// Enqueue scripts and styles for category fields
function magnine_admin_single_post_meta_css($hook)
{
    if (!in_array($hook, array('post.php', 'post-new.php'), true)) {
        return;
    }

    wp_enqueue_style('magnine_single_post_css', get_template_directory_uri() . '/inc/admin/meta-box/assets/single-meta-box.css');
    wp_enqueue_script('magnine_single_post_js', get_template_directory_uri() . '/inc/admin/meta-box/assets/single-meta-box.js');

}

add_action('admin_enqueue_scripts', 'magnine_admin_single_post_meta_css');
