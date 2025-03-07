<?php
$enable_grid_list = magnine_get_option('enable_grid_list');
if (!$enable_grid_list) {
    return;
}

$grid_list_title = magnine_get_option('grid_list_title', 'Grid List');
$grid_list_category_1 = magnine_get_option('grid_list_category_1');
$grid_list_category_2 = magnine_get_option('grid_list_category_2');

$enable_grid_list_author_meta = magnine_get_option('enable_grid_list_author_meta');
$select_grid_list_author_meta = magnine_get_option('select_grid_list_author_meta');
$grid_list_author_meta_title = magnine_get_option('grid_list_author_meta_title');
$enable_grid_list_date_meta = magnine_get_option('enable_grid_list_date_meta');
$select_grid_list_date = magnine_get_option('select_grid_list_date');
$select_grid_list_date_meta_title = magnine_get_option('select_grid_list_date_meta_title');
$select_grid_list_date_format = magnine_get_option('select_grid_list_date_format');
$enable_grid_list_category_meta = magnine_get_option('enable_grid_list_category_meta');
$grid_list_category_label = magnine_get_option('grid_list_category_label');
$select_grid_list_category_color = magnine_get_option('select_grid_list_category_color');
$select_grid_list_number_of_category = magnine_get_option('select_grid_list_number_of_category');
$grid_list_more_category_text = magnine_get_option('grid_list_more_category_text');
$grid_list_inner_title = magnine_get_option('grid_list_inner_title');
// Query for left column posts
$grid_list_left_args = array(
    'post_type' => 'post',
    'posts_per_page' => 4,
    'post_status' => 'publish',
    'no_found_rows' => 1,
    'ignore_sticky_posts' => 1,
);

if (!empty($grid_list_category_1)) {
    $grid_list_left_args['tax_query'] = array(
        array(
            'taxonomy' => 'category',
            'field' => 'term_id',
            'terms' => $grid_list_category_1,
        ),
    );
}

$grid_list_left_query = new WP_Query($grid_list_left_args);

// Query for right column posts
$grid_list_right_args = array(
    'post_type' => 'post',
    'posts_per_page' => 5,
    'post_status' => 'publish',
    'no_found_rows' => 1,
    'ignore_sticky_posts' => 1,
);

if (!empty($grid_list_category_2)) {
    $grid_list_right_args['tax_query'] = array(
        array(
            'taxonomy' => 'category',
            'field' => 'term_id',
            'terms' => $grid_list_category_2,
        ),
    );
}

$grid_list_right_query = new WP_Query($grid_list_right_args);

if ($grid_list_left_query->have_posts() || $grid_list_right_query->have_posts()) :
?>
    <section class="wpi-section wpi-grid-list">
        <div class="wrapper">
            <div class="row-group">
                <div class="column-lg-12">
                    <header class="section-header header-has-border">
                        <h2 class="section-title"><?php echo esc_html($grid_list_title); ?></h2>
                    </header>

                    <div class="section-body">
                        <div class="row-group">
                            <div class="column-lg-8 column-md-8">
                              <div class="grid-list-left">
                                <?php
                                if ($grid_list_left_query->have_posts()) :
                                    $grid_list_left_query->the_post();
                                ?>
                                <article id="grid-list-main-<?php the_ID(); ?>" <?php post_class('wpi-post wpi-post-large'); ?>>
                                    <?php if (has_post_thumbnail()) : ?>
                                        <div class="entry-image entry-image-large image-hover-effect hover-effect-shine">
                                            <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                                                <?php the_post_thumbnail('large', array('alt' => the_title_attribute(array('echo' => false)))); ?>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                    <div class="entry-details">
                                        <?php
                                        if ($enable_grid_list_category_meta) {
                                            magnine_post_category($select_grid_list_category_color, $grid_list_category_label, $select_grid_list_number_of_category);
                                        }
                                        ?>
                                        <h3 class="entry-title entry-title-big">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h3>
                                        <div class="entry-meta-wrapper">
                                            <?php
                                            if ($enable_grid_list_date_meta) {
                                                magnine_posted_on($select_grid_list_date_format, $select_grid_list_date_meta_title, $select_grid_list_date);
                                            }
                                            if ($enable_grid_list_date_meta && $enable_grid_list_author_meta) {
                                                echo '<div class="entry-meta-separator"></div>';
                                            }
                                            if ($enable_grid_list_author_meta) {
                                                magnine_posted_by($select_grid_list_author_meta, $grid_list_author_meta_title);
                                            }
                                            ?>
                                        </div>
                                        <div class="entry-summary">
                                            <?php echo esc_html(wp_trim_words(get_the_content(), 25, '...')); ?>
                                        </div>
                                    </div>
                                </article>

                                <div class="grid-list-bottom">
                                    <?php
                                    while ($grid_list_left_query->have_posts()) : $grid_list_left_query->the_post();
                                    ?>
                                        <article id="grid-list-bottom-<?php the_ID(); ?>" <?php post_class('wpi-post wpi-post-small'); ?>>
                                            <?php if (has_post_thumbnail()) : ?>
                                                <div class="entry-image entry-image-small image-hover-effect hover-effect-shine">
                                                    <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                                                        <?php the_post_thumbnail('medium', array('alt' => the_title_attribute(array('echo' => false)))); ?>
                                                    </a>
                                                </div>
                                            <?php endif; ?>
                                            <div class="entry-details">
                                                <?php
                                                if ($enable_grid_list_category_meta) {
                                                    magnine_post_category($select_grid_list_category_color, $grid_list_category_label, $select_grid_list_number_of_category);
                                                }
                                                ?>
                                                <h3 class="entry-title entry-title-small">
                                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                </h3>
                                                <div class="entry-meta-wrapper">
                                                    <?php
                                                    if ($enable_grid_list_date_meta) {
                                                        magnine_posted_on($select_grid_list_date_format, $select_grid_list_date_meta_title, $select_grid_list_date);
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </article>
                                    <?php
                                    endwhile;
                                    wp_reset_postdata();
                                    endif;
                                    ?>
                                </div>
                              </div>
                            </div>

                            <div class="column-lg-4 column-md-4">
                              <?php if (!empty($grid_list_inner_title)) : ?>
                                  <header class="section-header header-has-style">
                                      <h2 class="section-title"><?php echo esc_html($grid_list_inner_title); ?></h2>
                                  </header>
                              <?php endif; ?>
                              
                              <div class="grid-list-right">
                                <?php
                                if ($grid_list_right_query->have_posts()) :
                                    while ($grid_list_right_query->have_posts()) : $grid_list_right_query->the_post();
                                ?>
                                    <article id="grid-list-side-<?php the_ID(); ?>" <?php post_class('wpi-post article-has-border'); ?>>
                                        <div class="entry-details">
                                            <?php
                                            if ($enable_grid_list_category_meta) {
                                                magnine_post_category($select_grid_list_category_color, $grid_list_category_label, $select_grid_list_number_of_category);
                                            }
                                            ?>
                                            <h3 class="entry-title entry-title-small">
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h3>
                                            <div class="entry-meta-wrapper">
                                                <?php
                                                if ($enable_grid_list_date_meta) {
                                                    magnine_posted_on($select_grid_list_date_format, $select_grid_list_date_meta_title, $select_grid_list_date);
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </article>
                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                endif;
                                ?>
                                <?php if (!empty($grid_list_more_category_text)) : ?>
                                    <a href="<?php echo esc_url(get_category_link($grid_list_category_2)); ?>" class="wpi-button wpi-button-block wpi-button-outline">
                                        <?php echo esc_html($grid_list_more_category_text); ?>
                                    </a>
                                <?php endif; ?>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
endif;
?>