<?php
$enable_must_reads = magnine_get_option('enable_must_reads');
if (!$enable_must_reads) {
    return;
}
$must_read_cat = magnine_get_option('must_read_cat');
$must_read_title = magnine_get_option('must_read_title');
$no_of_must_reads = magnine_get_option('no_of_must_reads', 4);
$must_reads_number_of_post_offsets = magnine_get_option('must_reads_number_of_post_offsets', 4);
$must_read_orderby = magnine_get_option('must_read_orderby', 'date');
$must_read_order = magnine_get_option('must_read_order', 'desc');
$enable_must_read_author_meta = magnine_get_option('enable_must_read_author_meta');
$select_must_read_author_meta = magnine_get_option('select_must_read_author_meta');
$must_read_author_meta_title = magnine_get_option('must_read_author_meta_title');
$enable_must_read_date_meta = magnine_get_option('enable_must_read_date_meta');
$select_must_read_date = magnine_get_option('select_must_read_date');
$select_must_read_date_meta_title = magnine_get_option('select_must_read_date_meta_title');
$select_must_read_date_format = magnine_get_option('select_must_read_date_format');
$enable_must_read_category_meta = magnine_get_option('enable_must_read_category_meta');
$must_read_category_label = magnine_get_option('must_read_category_label');
$select_must_read_category_color = magnine_get_option('select_must_read_category_color');
$select_must_read_number_of_category = magnine_get_option('select_must_read_number_of_category');
// Covert id to ID to make it work with query
if ('id' == $must_read_orderby) {
    $must_read_orderby = 'ID';
}
if ($must_reads_number_of_post_offsets) {
    $must_reads_offset = $must_reads_number_of_post_offsets;
} else {
    $must_reads_offset = '';
}
$post_args = array(
    'post_type' => 'post',
    'posts_per_page' => absint($no_of_must_reads),
    'post_status' => 'publish',
    'no_found_rows' => 1,
    'offset' => absint($must_reads_offset),
    'ignore_sticky_posts' => 1,
    'orderby' => esc_attr($must_read_orderby),
    'order' => esc_attr($must_read_order),
);
// Check for category.
if (!empty($must_read_cat)) :
    $post_args['tax_query'] = array(
        array(
            'taxonomy' => 'category',
            'field' => 'term_id',
            'terms' => $must_read_cat,
        ),
    );
endif;

$must_reads = new WP_Query($post_args);
if ($must_reads->have_posts()) :
    ?>
    <section class="wpi-section wpi-mustread-section">

            <header class="section-header is-marquee section-header-marquee">
                <h2 class="section-title">
                        <?php echo esc_html($must_read_title); ?>
                    <div class="item_sep"></div>
                </h2>
            </header>
        <div class="mustread-carousel">
            <div class="swiper mustread-swiper">
                <div class="swiper-wrapper">
                    <?php
                    while ($must_reads->have_posts()) :
                        $must_reads->the_post();
                        ?>
                    <div class="swiper-slide">
                        <article id="must-read-<?php the_ID(); ?>" <?php post_class('wpi-post wpi-post-slide'); ?>>
                            <?php if (has_post_thumbnail()): ?>
                                <div class="entry-image entry-image-large image-hover-effect hover-effect-shine">
                                    <a class="post-thumbnail" href="<?php the_permalink(); ?>">
                                        <?php
                                        the_post_thumbnail(
                                            'large',
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
                                if ($enable_must_read_category_meta) {
                                    magnine_post_category($select_must_read_category_color, $must_read_category_label, $select_must_read_number_of_category);
                                }
                                ?>
                                <h3 class="entry-title entry-title-large">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                <div class="entry-meta-wrapper">
                                    <?php
                                    if ($enable_must_read_date_meta) {
                                        magnine_posted_on($select_must_read_date_format, $select_must_read_date_meta_title, $select_must_read_date);
                                    }
                                    ?>
                                    <?php
                                    if ($enable_must_read_date_meta && $enable_must_read_author_meta) { ?>
                                        <div class="entry-meta-separator"></div>
                                    <?php } ?>
                                    <?php
                                    if ($enable_must_read_author_meta) {
                                        magnine_posted_by($select_must_read_author_meta, $must_read_author_meta_title);
                                    }
                                    ?>
                                </div>
                                <div class="entry-summary">
                                    <?php echo esc_html(wp_trim_words(get_the_content(), 25, '...')); ?>
                                </div>
                            </div>
                        </article>
                    </div>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </section>
<?php
endif;
