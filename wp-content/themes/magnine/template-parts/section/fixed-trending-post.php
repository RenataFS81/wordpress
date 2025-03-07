<?php
$enable_fixed_trending = magnine_get_option('enable_fixed_trending');
if (!$enable_fixed_trending) {
    return;
}
$fixed_trending_cat = magnine_get_option('fixed_trending_cat', []);
$no_of_fixed_trending = absint(magnine_get_option('no_of_fixed_trending', 5));
$fixed_trending_number_of_post_offsets = absint(magnine_get_option('fixed_trending_number_of_post_offsets', 0));
$fixed_trending_orderby = magnine_get_option('fixed_trending_orderby', 'date');
$fixed_trending_order = magnine_get_option('fixed_trending_order', 'desc');
// Convert id to ID to ensure compatibility
if ('id' === $fixed_trending_orderby) {
    $fixed_trending_orderby = 'ID';
}
// Define query arguments for WP_Query
$post_args = array(
    'post_type' => 'post',
    'posts_per_page' => $no_of_fixed_trending,
    'post_status' => 'publish',
    'no_found_rows' => true, // Optimize query by skipping count queries
    'ignore_sticky_posts' => true,
    'offset' => $fixed_trending_number_of_post_offsets,
    'orderby' => sanitize_key($fixed_trending_orderby),
    'order' => sanitize_text_field($fixed_trending_order),
);
// Add taxonomy query for the category
if (!empty($fixed_trending_cat)) {
    $post_args['tax_query'] = array(
        array(
            'taxonomy' => 'category',
            'field' => 'term_id',
            'terms' => array_map('absint', (array)$fixed_trending_cat),
        ),
    );
}
$fixed_trending_post = new WP_Query($post_args);
if ($fixed_trending_post->have_posts()) :
    $count = 1;
    ?>
    <aside class="wpi-fixed-aside wpi-aside-trending-left">
        <div class="aside-trending hide-on-tablet hide-on-mobile">
            <span class="aside-trending-circle">
               <?php magnine_the_theme_svg('flame'); ?>
            </span>
            <div class="aside-trending-post">
                <ul class="reset-list-style">
                    <?php while ($fixed_trending_post->have_posts()) : $fixed_trending_post->the_post(); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>">
                            <span class="aside-trending-image">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail(
                                        'thumbnail',
                                        array(
                                            'alt' => esc_attr(get_the_title()),
                                        )
                                    );
                                }
                                ?>
                            </span>
                                <span class="aside-trending-counter">
                                <?php echo intval($count); ?>
                            </span>
                                <span class="aside-trending-title">
                                <span><?php the_title(); ?></span>
                            </span>
                            </a>
                        </li>
                        <?php
                        $count++;
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </ul>
            </div>
        </div>
    </aside>
<?php
else :
    // Handle case when no posts are found
    ?>
    <p><?php esc_html_e('No posts found.', 'magnine'); ?></p>
<?php
endif;
?>