<?php
global $post;
$post_id = $post->ID;

$related_posts_text = magnine_get_option('related_posts_text');
$no_of_related_posts = absint(magnine_get_option('no_of_related_posts'));
$order = esc_attr(magnine_get_option('related_posts_order'));
$orderby = esc_attr(magnine_get_option('related_posts_orderby'));


$enable_related_posts_author_meta = magnine_get_option('enable_related_posts_author_meta');
$related_posts_number_of_post_offsets = magnine_get_option('related_posts_number_of_post_offsets');
$select_related_posts_author_meta = magnine_get_option('select_related_posts_author_meta');
$related_posts_author_meta_title = magnine_get_option('related_posts_author_meta_title');

$enable_related_posts_date_meta = magnine_get_option('enable_related_posts_date_meta');
$select_related_posts_date = magnine_get_option('select_related_posts_date');
$single_related_post_date_meta_title = magnine_get_option('single_related_post_date_meta_title');
$select_related_posts_date_format = magnine_get_option('select_related_posts_date_format');

$enable_related_posts_category_meta = magnine_get_option('enable_related_posts_category_meta');
$related_posts_category_label = magnine_get_option('related_posts_category_label');
$select_related_posts_category_color = magnine_get_option('select_related_posts_category_color');
$select_related_posts_number_of_category = magnine_get_option('select_related_posts_number_of_category');

// Covert id to ID to make it work with query
if ('id' == $orderby) {
    $orderby = 'ID';
}

if ($related_posts_number_of_post_offsets) {
    $related_post_offset = $related_posts_number_of_post_offsets;
} else {
    $related_post_offset = '';
}

$category_ids = array();
$categories = get_the_category($post_id);

if (!empty($categories)) :
    foreach ($categories as $cat):
        $category_ids[] = $cat->term_id;
    endforeach;
endif;

if (!empty($category_ids)):

    $related_posts_args = array(
        'category__in' => $category_ids,
        'post_type' => 'post',
        'offset' => $related_post_offset,
        'post__not_in' => array($post_id),
        'posts_per_page' => $no_of_related_posts,
        'ignore_sticky_posts' => 1,
        'orderby' => $orderby,
        'order' => $order,
    );

    $related_posts_query = new WP_Query($related_posts_args);

    if ($related_posts_query->have_posts()):
        ?>
        <section class="wpi-section wpi-single-section single-related-posts">
            <header class="section-header header-has-border">
                <h2 class="section-title">
                    <?php echo esc_html($related_posts_text); ?>
                </h2>
            </header>

            <div class="wpi-section-content related-posts-content">
                <?php while ($related_posts_query->have_posts()):$related_posts_query->the_post(); ?>
                    <article id="related-post-<?php the_ID(); ?>" <?php post_class('wpi-post wpi-post-default'); ?>>
                        <?php if (has_post_thumbnail()): ?>
                            <div class="entry-image entry-image-small image-hover-effect hover-effect-shine">
                                <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                                    <?php
                                    the_post_thumbnail(
                                        'medium_large',
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
                            </div>
                        <?php endif; ?>
                        <div class="entry-details">
                            <header class="entry-header">
                                <?php 
                                if ($enable_related_posts_category_meta) {
                                    magnine_post_category( $select_related_posts_category_color, $related_posts_category_label,$select_related_posts_number_of_category );
                                }
                                ?>

                                <?php the_title('<h3 class="entry-title entry-title-small"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>'); ?>
                            </header>
                            <div class="entry-meta">

                                <?php
                                if ($enable_related_posts_date_meta) {
                                    magnine_posted_on($select_related_posts_date_format, $single_related_post_date_meta_title ,$select_related_posts_date);
                                }
                                ?>
                                <div class="entry-meta-separator"></div>
                                <?php
                                if ($enable_related_posts_author_meta) {
                                    magnine_posted_by($select_related_posts_author_meta , $related_posts_author_meta_title);
                                }
                                ?>

                            </div>
                        </div>
                    </article>
                <?php endwhile;
                wp_reset_postdata(); ?>
            </div>
        </section>

    <?php

    endif;

endif;