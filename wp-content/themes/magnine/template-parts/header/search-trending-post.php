<?php
$enable_search_latest_posts = magnine_get_option('enable_search_latest_posts');
if ($enable_search_latest_posts) {
    $search_latest_posts_cat = magnine_get_option('search_latest_posts_cat');
    $no_of_search_latest_posts = magnine_get_option('no_of_search_latest_posts', 4);
    $search_latest_posts_orderby = magnine_get_option('search_latest_posts_orderby', 'date');
    $search_latest_posts_order = magnine_get_option('search_latest_posts_order', 'desc');
    $enable_search_latest_posts_author_meta = magnine_get_option('enable_search_latest_posts_author_meta');
    $select_search_latest_posts_author_meta = magnine_get_option('select_search_latest_posts_author_meta');
    $search_latest_posts_author_meta_title = magnine_get_option('search_latest_posts_author_meta_title');
    $enable_search_latest_posts_date_meta = magnine_get_option('enable_search_latest_posts_date_meta');
    $select_search_latest_posts_date = magnine_get_option('select_search_latest_posts_date');
    $single_search_latest_post_date_meta_title = magnine_get_option('single_search_latest_post_date_meta_title');
    $select_search_latest_posts_date_format = magnine_get_option('select_search_latest_posts_date_format');
    $enable_search_latest_posts_category_meta = magnine_get_option('enable_search_latest_posts_category_meta');
    $search_latest_posts_category_label = magnine_get_option('search_latest_posts_category_label');
    $select_search_latest_posts_category_color = magnine_get_option('select_search_latest_posts_category_color');
    $select_search_latest_posts_number_of_category = magnine_get_option('select_search_latest_posts_number_of_category');
    // Covert id to ID to make it work with query
    if ('id' == $search_latest_posts_orderby) {
        $search_latest_posts_orderby = 'ID';
    }
    $post_args = array(
        'post_type' => 'post',
        'posts_per_page' => absint($no_of_search_latest_posts),
        'post_status' => 'publish',
        'no_found_rows' => 1,
        'ignore_sticky_posts' => 1,
        'orderby' => esc_attr($search_latest_posts_orderby),
        'order' => esc_attr($search_latest_posts_order),
    );
    // Check for category.
    if (!empty($search_latest_posts_cat)) :
        $post_args['tax_query'] = array(
            array(
                'taxonomy' => 'category',
                'field' => 'term_id',
                'terms' => $search_latest_posts_cat,
            ),
        );
    endif;
    $search_latest_posts = new WP_Query($post_args);
    if ($search_latest_posts->have_posts()) :
        $search_latest_label_text = magnine_get_option('search_latest_label_text');
        
        ?>
            <div class="search-modal-articles">
                <?php if (magnine_get_option('enable_search_latest_label', true)) : ?>
                    <h2>
                        <?php
                        if ($search_latest_label_text) :
                            echo esc_html($search_latest_label_text);
                        else :
                            esc_html_e('News Flash', 'magnine');
                        endif;
                        ?>
                    </h2>
                <?php endif; ?>
                <div class="wpi-search-articles">
                    <?php
                    while ($search_latest_posts->have_posts()) :
                        $search_latest_posts->the_post();
                        ?>
                        <article id="search-articles-<?php the_ID(); ?>" <?php post_class('wpi-post wpi-post-default'); ?>>
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="entry-image entry-image-medium image-hover-effect hover-effect-shine">
                                    <a class="post-thumbnail" href="<?php the_permalink(); ?>"
                                       aria-hidden="true" tabindex="-1">
                                        <?php
                                        the_post_thumbnail(
                                            'medium',
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
                                <?php
                                if ($enable_search_latest_posts_category_meta) {
                                    magnine_post_category($select_search_latest_posts_category_color, $search_latest_posts_category_label, $select_search_latest_posts_number_of_category);
                                }
                                ?>
                                <h3 class="entry-title entry-title-xsmall">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                <div class="entry-meta-wrapper">
                                    <?php
                                    if ($enable_search_latest_posts_date_meta) {
                                        magnine_posted_on($select_search_latest_posts_date_format, $single_search_latest_post_date_meta_title, $select_search_latest_posts_date);
                                    }
                                    ?>
                                    <?php
                                    if ($enable_search_latest_posts_date_meta && $enable_search_latest_posts_author_meta) { ?>
                                        <div class="entry-meta-separator"></div>
                                    <?php } ?>
                                    <?php
                                    if ($enable_search_latest_posts_author_meta) {
                                        magnine_posted_by($select_search_latest_posts_author_meta, $search_latest_posts_author_meta_title);
                                    }
                                    ?>
                                </div>
                            </div>
                        </article>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
    <?php
    endif;
}
