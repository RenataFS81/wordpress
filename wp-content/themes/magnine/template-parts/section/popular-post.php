<?php
$enable_popular_posts = magnine_get_option('enable_popular_posts');
if (!$enable_popular_posts) {
    return;
}
$popular_post_cat = magnine_get_option('popular_post_cat');
$no_of_popular_posts = magnine_get_option('no_of_popular_posts', 4);
$popular_post_orderby = magnine_get_option('popular_post_orderby', 'date');
$popular_post_order = magnine_get_option('popular_post_order', 'desc');
$popular_posts_number_of_post_offsets = magnine_get_option('popular_posts_number_of_post_offsets');
$enable_popular_post_author_meta = magnine_get_option('enable_popular_post_author_meta');
$select_popular_post_author_meta = magnine_get_option('select_popular_post_author_meta');
$popular_post_author_meta_title = magnine_get_option('popular_post_author_meta_title');
$enable_popular_post_date_meta = magnine_get_option('enable_popular_post_date_meta');
$select_popular_post_date = magnine_get_option('select_popular_post_date');
$select_popular_post_date_meta_title = magnine_get_option('select_popular_post_date_meta_title');
$select_popular_post_date_format = magnine_get_option('select_popular_post_date_format');
// Covert id to ID to make it work with query
if ('id' == $popular_post_orderby) {
    $popular_post_orderby = 'ID';
}
if ($popular_posts_number_of_post_offsets) {
    $popular_post_offset = $popular_posts_number_of_post_offsets;
} else {
    $popular_post_offset = '';
}
$post_args = array(
    'post_type' => 'post',
    'posts_per_page' => absint($no_of_popular_posts),
    'post_status' => 'publish',
    'no_found_rows' => 1,
    'offset' => $popular_post_offset,
    'ignore_sticky_posts' => 1,
    'orderby' => esc_attr($popular_post_orderby),
    'order' => esc_attr($popular_post_order),
);
// Check for category.
if (!empty($popular_post_cat)) :
    $post_args['tax_query'] = array(
        array(
            'taxonomy' => 'category',
            'field' => 'term_id',
            'terms' => $popular_post_cat,
        ),
    );
endif;
$popular_posts = new WP_Query($post_args);
if ($popular_posts->have_posts()) :
    $column = magnine_get_option('popular_post_column', 3);
    $autoplay = magnine_get_option('enable_popular_post_autoplay');
    $arrows = magnine_get_option('enable_popular_post_arrows', true);
    $dots = magnine_get_option('enable_popular_post_dots');
    $margin = 20;
    // Build attributes.
    $data_slider = array();
    $data_slider['spaceBetween'] = $margin;
    if ($arrows) :
        $data_slider['navigation'] = array(
            'nextEl' => '.wpi-header-popular .swiper-button-next',
            'prevEl' => '.wpi-header-popular .swiper-button-prev',
        );
    endif;
    if ($dots) :
        $data_slider['pagination'] = array(
            'el' => '.wpi-header-popular .swiper-pagination',
            'clickable' => true,
        );
    endif;
    if ($autoplay) :
        $data_slider['autoplay'] = array(
            'delay' => 5000,
        );
    endif;
    if ($column == 2) {
        $data_slider['breakpoints'] = array(
            '768' => array(
                'slidesPerView' => 2,
            ),
        );
    } elseif ($column == 3) {
        $data_slider['breakpoints'] = array(
            '768' => array(
                'slidesPerView' => 2,
            ),
            '992' => array(
                'slidesPerView' => 3
            ),
        );
    } elseif ($column == 4) {
        $data_slider['breakpoints'] = array(
            '768' => array(
                'slidesPerView' => 2,
            ),
            '992' => array(
                'slidesPerView' => 3,
            ),
            '1600' => array(
                'slidesPerView' => 4
            ),
        );
    } elseif ($column == 5) {
        $data_slider['breakpoints'] = array(
            '768' => array(
                'slidesPerView' => 2,
            ),
            '992' => array(
                'slidesPerView' => 3,
            ),
            '1200' => array(
                'slidesPerView' => 4,
            ),
            '1600' => array(
                'slidesPerView' => 5
            ),
        );
    }
    ?>
    <div class="wpi-header-popular">
        <div class="wrapper">
            <div class="wpi-popular-panel">
                <div class="wpi-popular-init swiper" data-slider='<?php echo esc_attr(json_encode($data_slider)); ?>'>
                    <div class="swiper-wrapper">
                        <?php
                        while ($popular_posts->have_posts()) :
                            $popular_posts->the_post();
                            ?>
                            <div class="swiper-slide">
                                <article id="popular-post-<?php the_ID(); ?>" <?php post_class('wpi-post wpi-post-list'); ?>>
                                    <div class="entry-details">
                                        <h3 class="entry-title entry-title-xsmall limit-line-4">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h3>
                                        <div class="entry-meta-wrapper">
                                            <?php
                                            if ($enable_popular_post_date_meta) {
                                                magnine_posted_on($select_popular_post_date_format, $select_popular_post_date_meta_title, $select_popular_post_date);
                                            }
                                            ?>
                                            <?php
                                            if ($enable_popular_post_date_meta && $enable_popular_post_author_meta) { ?>
                                                <div class="entry-meta-separator"></div>
                                            <?php } ?>
                                            <?php
                                            if ($enable_popular_post_author_meta) {
                                                magnine_posted_by($select_popular_post_author_meta, $popular_post_author_meta_title);
                                            }
                                            ?>
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
                <?php
                if ($dots) :
                    echo '<div class="swiper-pagination"></div>';
                endif;
                if ($arrows) :
                    echo '<div class="swiper-button-next"></div><div class="swiper-button-prev"></div>';
                endif;
                ?>
            </div>
        </div>
    </div>
<?php
endif;
