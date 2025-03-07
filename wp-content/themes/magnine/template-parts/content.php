<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MagNine
 */

/**
 * Update post meta and check if it was updated.
 *
 * @param int    $post_id    The post ID.
 * @param string $meta_key   The meta key.
 * @param mixed  $meta_value The meta value.
 * @return bool  True if updated, false otherwise.
 */
function magnine_update_post_meta_and_check( $post_id, $meta_key, $meta_value ) {
    $result = update_post_meta( $post_id, $meta_key, $meta_value );

    if ( $result === true || is_numeric( $result ) ) {
        return true; // Meta was updated or added.
    } elseif ( $result === false ) {
        return false; // Meta was not updated.
    }

    return false;
}

$enable_single_author_meta = magnine_get_option('enable_single_author_meta');
$select_single_author_meta = magnine_get_option('select_single_author_meta');
$single_author_meta_title = magnine_get_option('single_author_meta_title');

$enable_single_date_meta = magnine_get_option('enable_single_date_meta');
$select_single_date = magnine_get_option('select_single_date');
$single_date_meta_title = magnine_get_option('single_date_meta_title');
$select_single_date_format = magnine_get_option('select_single_date_format');

$enable_single_category_meta = magnine_get_option('enable_single_category_meta');
$single_category_label = magnine_get_option('single_category_label');
$select_single_category_color = magnine_get_option('select_single_category_color');
$enable_single_read_time_meta = magnine_get_option('enable_single_read_time_meta');
$enable_single_tag_meta = magnine_get_option('enable_single_tag_meta');

$show_sticky_article_navigation = magnine_get_option('show_sticky_article_navigation');
$show_related_posts = magnine_get_option('show_related_posts');
$show_author_posts = magnine_get_option('show_author_posts');
$show_author_info = magnine_get_option('show_author_info');

$magnine_post_navigation = get_post_meta($post->ID, 'magnine_single_post_navigation', true);
$magnine_single_category_meta = get_post_meta($post->ID, 'magnine_single_category_meta', true);
$magnine_single_date_meta = get_post_meta($post->ID, 'magnine_single_date_meta', true);
$magnine_single_author_meta = get_post_meta($post->ID, 'magnine_single_author_meta', true);
$magnine_single_related_post = get_post_meta($post->ID, 'magnine_single_related_post', true);
$magnine_single_author_post = get_post_meta($post->ID, 'magnine_single_author_post', true);
$magnine_single_post_author = get_post_meta($post->ID, 'magnine_single_post_author', true);
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('wpi-post wpi-post-default has-border-divider'); ?>>
    <?php magnine_get_breadcrumb(); ?>
    <?php magnine_post_thumbnail(); ?>
    <div class="entry-details">
        <header class="entry-header">
            <?php 
            if ($magnine_single_category_meta == 1) {
                magnine_post_category($select_single_category_color, $single_category_label);
            } elseif ($magnine_single_category_meta == '') {
                if ($enable_single_category_meta) {
                    magnine_post_category($select_single_category_color, $single_category_label);
                }
            } elseif ($magnine_single_category_meta == 0) {
            }

            ?>
            <?php
            if (! $enable_single_read_time_meta) {
                magnine_get_readtime();
            } ?>
            <?php
            the_title('<h1 class="entry-title entry-title-large">', '</h1>');

            if ('post' === get_post_type()) :
                ?>
                <div class="entry-meta-wrapper">
                    <?php
                    if ($magnine_single_date_meta == 1) {
                        magnine_posted_on($select_single_date_format, $single_date_meta_title ,$select_single_date);
                    } elseif ($magnine_single_date_meta == '') {
                        if ($enable_single_date_meta) {
                        magnine_posted_on($select_single_date_format, $single_date_meta_title ,$select_single_date);
                        }
                    } elseif ($magnine_single_date_meta == 0) {
                    }
                    ?>

                    <?php
                    if ($magnine_single_author_meta == 1) {
                        echo '<div class="entry-meta-separator"></div>';
                        magnine_posted_by($select_single_author_meta , $single_author_meta_title);
                    } elseif ($magnine_single_author_meta == '') {
                        if ($enable_single_author_meta) {
                            echo '<div class="entry-meta-separator"></div>';
                            magnine_posted_by($select_single_author_meta , $single_author_meta_title);
                        }
                    } elseif ($magnine_single_author_meta == 0) {
                    }
                    ?>
                </div><!-- .entry-meta -->
            <?php endif; ?>
        </header><!-- .entry-header -->

        <div class="entry-content">
            <?php
            the_content(
                sprintf(
                    wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers */
                        __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'magnine'),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    wp_kses_post(get_the_title())
                )
            );

            wp_link_pages(
                array(
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'magnine'),
                    'after' => '</div>',
                )
            );
            ?>
        </div><!-- .entry-content -->

        <footer class="entry-footer">
            <?php magnine_entry_footer($enable_single_tag_meta); ?>
        </footer><!-- .entry-footer -->
    </div>
</article><!-- #post-<?php the_ID(); ?> -->

<?php
    if ('post' === get_post_type()) :
        
    if ($magnine_single_post_author == 1) {
        get_template_part('template-parts/single/single-author-info');
    } elseif ($magnine_single_post_author == '') {
        if ($show_author_info) {
        get_template_part('template-parts/single/single-author-info');
        }
    } elseif ($magnine_single_post_author == 0) {
    }


    if ( !$magnine_single_related_post ){
        if ($show_related_posts) {
        get_template_part('template-parts/single/single-related-posts');
        }
    }elseif($magnine_single_related_post == 1){
        get_template_part('template-parts/single/single-related-posts');
    }

    if ( !$magnine_single_author_post ){
        if ($show_author_posts) {
        get_template_part('template-parts/single/single-author-posts');
        }
    }elseif($magnine_single_author_post == 1){
        get_template_part('template-parts/single/single-author-posts');
    }

endif;
?>

<?php
if ($magnine_post_navigation == 1) {
    get_template_part( 'template-parts/single/sticky-article-nav' );
} elseif ($magnine_post_navigation == '') {
    if ($show_sticky_article_navigation) {
    get_template_part( 'template-parts/single/sticky-article-nav' );
    }
} elseif ($magnine_post_navigation == 0) {
}
?>