<?php
$enable_main_banner_section = magnine_get_option('enable_main_banner_section');
$banner_grid_post_col_1_category = magnine_get_option('banner_grid_post_col_1_category');
$banner_list_post_category = magnine_get_option('banner_list_post_category');
$banner_grid_post_category = magnine_get_option('banner_grid_post_category');
$enable_banner_author_meta = magnine_get_option('enable_banner_author_meta');
$select_banner_author_meta = magnine_get_option('select_banner_author_meta');
$banner_author_meta_title = magnine_get_option('banner_author_meta_title');
$enable_banner_date_meta = magnine_get_option('enable_banner_date_meta');
$select_banner_date = magnine_get_option('select_banner_date');
$select_banner_date_meta_title = magnine_get_option('select_banner_date_meta_title');
$select_banner_date_format = magnine_get_option('select_banner_date_format');
$enable_banner_category_meta = magnine_get_option('enable_banner_category_meta');
$banner_category_label = magnine_get_option('banner_category_label');
$select_banner_category_color = magnine_get_option('select_banner_category_color');
$select_banner_number_of_category = magnine_get_option('select_banner_number_of_category');

if (empty($enable_main_banner_section)) {
    return;
}
?>
<section class="wpi-section wpi-banner-section">
    <div class="wrapper">
        <div class="row-group">
            <div class="column-lg-3 column-md-12 column-sm-12">
            
                <?php
                // Post list middle section
                $post_list_args_col_1 = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'post_status' => 'publish',
                    'no_found_rows' => 1,
                    'ignore_sticky_posts' => 1,
                );

                // Check for category.
                if (!empty($banner_grid_post_col_1_category)) {
                    $post_list_args_col_1['tax_query'] = array(
                        array(
                            'taxonomy' => 'category',
                            'field' => 'term_id',
                            'terms' => $banner_grid_post_col_1_category,
                        ),
                    );
                }

                $count = 1;
                $list_posts_col_1 = new WP_Query($post_list_args_col_1); ?>


                <?php if ($list_posts_col_1->have_posts()) :
                    while ($list_posts_col_1->have_posts()) : $list_posts_col_1->the_post(); ?>
                        <article id="banner-left-<?php the_ID(); ?>" <?php post_class('wpi-post wpi-post-default wpi-post-prime-left'); ?>>
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="entry-image entry-image-medium image-hover-effect hover-effect-shine">
                                    <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                                        <?php the_post_thumbnail('medium', array('alt' => the_title_attribute(array('echo' => false)))); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <div class="entry-details">
                                <?php if ($enable_banner_category_meta) {
                                    magnine_post_category($select_banner_category_color, $banner_category_label, $select_banner_number_of_category);
                                } ?>
                                <h3 class="entry-title entry-title-small">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                <div class="entry-meta-wrapper">
                                    <?php if ($enable_banner_date_meta) {
                                        magnine_posted_on($select_banner_date_format, $select_banner_date_meta_title, $select_banner_date);
                                    } ?>
                                    <?php if ($enable_banner_author_meta) {
                                        magnine_posted_by($select_banner_author_meta, $banner_author_meta_title);
                                    } ?>
                                </div>
                            </div>
                        </article>
                    <?php endwhile;
                    wp_reset_postdata();
                endif;
                ?>

            </div>
            <div class="column-lg-6 column-md-12 column-sm-12">
                <?php
                // Post grid middle section
                $post_grid_args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'post_status' => 'publish',
                    'no_found_rows' => 1,
                    'ignore_sticky_posts' => 1,
                );

                // Check for category.
                if (!empty($banner_grid_post_category)) {
                    $post_grid_args['tax_query'] = array(
                        array(
                            'taxonomy' => 'category',
                            'field' => 'term_id',
                            'terms' => $banner_grid_post_category,
                        ),
                    );
                }

                $counts = 1;
                $grid_posts = new WP_Query($post_grid_args);
                if ($grid_posts->have_posts()) :
                    while ($grid_posts->have_posts()) : $grid_posts->the_post();
                        $image_class = '';
                        $title_class = '';

                        switch ($counts) {
                            case 1:
                                $image_class = "entry-image-large";
                                $title_class = "entry-title-big";
                                break;
                            case 2:
                            case 3:
                                $image_class = "entry-image-medium";
                                $title_class = "entry-title-medium";
                                break;
                            default:
                                $image_class = "entry-image-small";
                                $title_class = "entry-title-medium";
                        }
                        ?>
                        <?php if ($counts == 1) { ?>
                            <article id="banner-prime-<?php the_ID(); ?>" <?php post_class('wpi-post wpi-post-default wpi-banner-prime'); ?>>
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="entry-image <?php echo esc_attr($image_class); ?> image-hover-effect hover-effect-shine">
                                        <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                                            <?php the_post_thumbnail('large', array('alt' => the_title_attribute(array('echo' => false)))); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                                <div class="entry-details">
                                    <?php if ($enable_banner_category_meta) {
                                        magnine_post_category($select_banner_category_color, $banner_category_label, $select_banner_number_of_category);
                                    } ?>
                                    <h3 class="entry-title <?php echo esc_attr($title_class); ?>">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                    <div class="entry-meta-wrapper">
                                        <?php if ($enable_banner_date_meta) {
                                            magnine_posted_on($select_banner_date_format, $select_banner_date_meta_title, $select_banner_date);
                                        } ?>
                                        <?php if ($enable_banner_author_meta) {
                                            magnine_posted_by($select_banner_author_meta, $banner_author_meta_title);
                                        } ?>
                                    </div>
                                </div>
                            </article>
                            <div class="row-group">
                        <?php } else { ?>
                            <div class="column-lg-6 column-md-6 column-sm-12">
                                <article id="banner-center-<?php the_ID(); ?>" <?php post_class('wpi-post wpi-post-default wpi-post-banner-center'); ?>>
                                    <?php if (has_post_thumbnail()) : ?>
                                        <div class="entry-image <?php echo esc_attr($image_class); ?> image-hover-effect hover-effect-shine">
                                            <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                                                <?php the_post_thumbnail('medium', array('alt' => the_title_attribute(array('echo' => false)))); ?>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                    <div class="entry-details">
                                        <?php if ($enable_banner_category_meta) {
                                            magnine_post_category($select_banner_category_color, $banner_category_label, $select_banner_number_of_category);
                                        } ?>
                                        <h3 class="entry-title <?php echo esc_attr($title_class); ?>">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h3>
                                        <div class="entry-meta-wrapper">
                                            <?php if ($enable_banner_date_meta) {
                                                magnine_posted_on($select_banner_date_format, $select_banner_date_meta_title, $select_banner_date);
                                            } ?>
                                            <?php if ($enable_banner_author_meta) {
                                                magnine_posted_by($select_banner_author_meta, $banner_author_meta_title);
                                            } ?>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        <?php } ?>
                        <?php if ($grid_posts->current_post + 1 == $grid_posts->post_count) { ?>
                            </div> <!-- Close row-group -->
                        <?php } ?>
                        <?php $counts++;
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
            <div class="column-lg-3 column-md-12 column-sm-12">
                <?php
                // Post list middle section
                $post_list_args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 6,
                    'post_status' => 'publish',
                    'no_found_rows' => 1,
                    'ignore_sticky_posts' => 1,
                );

                // Check for category.
                if (!empty($banner_list_post_category)) {
                    $post_list_args['tax_query'] = array(
                        array(
                            'taxonomy' => 'category',
                            'field' => 'term_id',
                            'terms' => $banner_list_post_category,
                        ),
                    );
                }

                $count = 1;
                $list_posts = new WP_Query($post_list_args); ?>
                <?php if ($list_posts->have_posts()) :
                    while ($list_posts->have_posts()) : $list_posts->the_post(); ?>
                        <?php if ($count == 1) { ?>
                            <article id="banner-right-<?php the_ID(); ?>" <?php post_class('wpi-post wpi-post-default wpi-post-prime'); ?>>
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="entry-image entry-image-medium image-hover-effect hover-effect-shine">
                                        <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                                            <?php the_post_thumbnail('medium', array('alt' => the_title_attribute(array('echo' => false)))); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                                <div class="entry-details">
                                    <?php if ($enable_banner_category_meta) {
                                        magnine_post_category($select_banner_category_color, $banner_category_label, $select_banner_number_of_category);
                                    } ?>
                                    <h3 class="entry-title entry-title-medium">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                    <div class="entry-meta-wrapper">
                                        <?php if ($enable_banner_date_meta) {
                                            magnine_posted_on($select_banner_date_format, $select_banner_date_meta_title, $select_banner_date);
                                        } ?>
                                        <?php if ($enable_banner_author_meta) {
                                            magnine_posted_by($select_banner_author_meta, $banner_author_meta_title);
                                        } ?>
                                    </div>
                                </div>
                            </article>
                            <?php $count++;
                        } else { ?>
                            <article id="banner-right-<?php the_ID(); ?>" <?php post_class('wpi-post wpi-post-list'); ?>>
                                <div class="entry-details">
                                    <?php if ($enable_banner_category_meta) {
                                        magnine_post_category($select_banner_category_color, $banner_category_label, $select_banner_number_of_category);
                                    } ?>
                                    <h3 class="entry-title entry-title-xsmall">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                    <div class="entry-meta-wrapper">
                                        <?php if ($enable_banner_date_meta) {
                                            magnine_posted_on($select_banner_date_format, $select_banner_date_meta_title, $select_banner_date);
                                        } ?>
                                        <?php if ($enable_banner_author_meta) {
                                            magnine_posted_by($select_banner_author_meta, $banner_author_meta_title);
                                        } ?>
                                    </div>
                                </div>
                            </article>
                        <?php } ?>
                    <?php endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </div>
</section>
