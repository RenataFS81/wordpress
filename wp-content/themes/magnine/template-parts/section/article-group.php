<?php
$enable_article_group = magnine_get_option('enable_article_group', true);
if (!$enable_article_group) {
    return;
}

$article_group_title = magnine_get_option('article_group_title', 'Article Group');
$article_group_category = magnine_get_option('article_group_category');
$article_group_slider_category = magnine_get_option('article_group_slider_category');

$enable_article_group_author_meta = magnine_get_option('enable_article_group_author_meta', true);
$select_article_group_author_meta = magnine_get_option('select_article_group_author_meta', 'display_name');
$article_group_author_meta_title = magnine_get_option('article_group_author_meta_title', 'By');
$enable_article_group_date_meta = magnine_get_option('enable_article_group_date_meta', true);
$select_article_group_date = magnine_get_option('select_article_group_date', 'published');
$select_article_group_date_meta_title = magnine_get_option('select_article_group_date_meta_title', '');
$select_article_group_date_format = magnine_get_option('select_article_group_date_format', 'F j, Y');
$enable_article_group_category_meta = magnine_get_option('enable_article_group_category_meta', true);
$article_group_category_label = magnine_get_option('article_group_category_label', '');
$select_article_group_category_color = magnine_get_option('select_article_group_category_color', 'category-color-1');
$select_article_group_number_of_category = magnine_get_option('select_article_group_number_of_category', 1);

// Query for main column posts
$main_column_args = array(
    'post_type' => 'post',
    'posts_per_page' => 4,
    'post_status' => 'publish',
    'ignore_sticky_posts' => 1,
);

if (!empty($article_group_category)) {
    $main_column_args['cat'] = $article_group_category;
}

$main_column_query = new WP_Query($main_column_args);

// Query for slider posts
$slider_args = array(
    'post_type' => 'post',
    'posts_per_page' => 5,
    'post_status' => 'publish',
    'ignore_sticky_posts' => 1,
);

if (!empty($article_group_slider_category)) {
    $slider_args['cat'] = $article_group_slider_category;
}

$slider_query = new WP_Query($slider_args);

if ($main_column_query->have_posts() || $slider_query->have_posts()) :
    ?>
    <section class="wpi-section wpi-article-group">
        <div class="wrapper">
            <div class="row-group">
                <div class="column-lg-12">
                    <header class="section-header header-has-border">
                        <h2 class="section-title"><?php echo esc_html($article_group_title); ?></h2>
                    </header>

                    <div class="section-body">
                        <div class="row-group">
                            <div class="column-lg-7 column-md-6">
                                <div class="row-group">
                                    <?php
                                    $counter = 0;
                                    while ($main_column_query->have_posts()) : $main_column_query->the_post();
                                        $counter++;
                                        ?>
                                        <div class="column-lg-6">
                                            <article id="article-group-<?php the_ID(); ?>" <?php post_class('wpi-post wpi-post-default'); ?>>
                                                <?php if (has_post_thumbnail()) : ?>
                                                    <div class="entry-image entry-image-medium image-hover-effect hover-effect-shine">
                                                        <a class="post-thumbnail" href="<?php the_permalink(); ?>"
                                                           aria-hidden="true" tabindex="-1">
                                                            <?php the_post_thumbnail('medium_large', array('alt' => the_title_attribute(array('echo' => false)))); ?>
                                                        </a>
                                                    </div>
                                                <?php endif; ?>
                                                <div class="entry-details">
                                                    <?php
                                                    if ($enable_article_group_category_meta) {
                                                        magnine_post_category($select_article_group_category_color, $article_group_category_label, $select_article_group_number_of_category);
                                                    }
                                                    ?>
                                                    <h3 class="entry-title entry-title-small">
                                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                    </h3>
                                                    <div class="entry-meta-wrapper">
                                                        <?php
                                                        if ($enable_article_group_date_meta) {
                                                            magnine_posted_on($select_article_group_date_format, $select_article_group_date_meta_title, $select_article_group_date);
                                                        }
                                                        if ($enable_article_group_date_meta && $enable_article_group_author_meta) {
                                                            echo '<div class="entry-meta-separator"></div>';
                                                        }
                                                        if ($enable_article_group_author_meta) {
                                                            magnine_posted_by($select_article_group_author_meta, $article_group_author_meta_title);
                                                        }
                                                        ?>
                                                    </div>
                                                    <?php if ($counter <= 2): // Display entry content only for the first two posts ?>
                                                        <div class="entry-summary">
                                                            <?php echo esc_html(wp_trim_words(get_the_content(), 20, '...')); ?>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </article>
                                        </div>
                                    <?php
                                    endwhile;
                                    wp_reset_postdata();
                                    ?>
                                </div>
                            </div>

                            <div class="column-lg-5 column-md-6">
                                <div class="article-group-slider swiper adjust-pagination">
                                    <div class="swiper-wrapper">
                                        <?php
                                        while ($slider_query->have_posts()) : $slider_query->the_post();
                                            ?>
                                            <div class="swiper-slide">
                                                <article
                                                        id="article-group-slide-<?php the_ID(); ?>" <?php post_class('wpi-post wpi-post-default'); ?>>
                                                    <?php if (has_post_thumbnail()) : ?>
                                                        <div class="entry-image entry-image-large image-hover-effect hover-effect-shine">
                                                            <a class="post-thumbnail" href="<?php the_permalink(); ?>"
                                                               aria-hidden="true" tabindex="-1">
                                                                <?php the_post_thumbnail('large', array('alt' => the_title_attribute(array('echo' => false)))); ?>
                                                            </a>
                                                        </div>
                                                    <?php endif; ?>
                                                    <div class="entry-details">
                                                        <?php
                                                        if ($enable_article_group_category_meta) {
                                                            magnine_post_category($select_article_group_category_color, $article_group_category_label, $select_article_group_number_of_category);
                                                        }
                                                        ?>
                                                        <h3 class="entry-title entry-title-big">
                                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                        </h3>
                                                        <div class="entry-meta-wrapper">
                                                            <?php
                                                            if ($enable_article_group_date_meta) {
                                                                magnine_posted_on($select_article_group_date_format, $select_article_group_date_meta_title, $select_article_group_date);
                                                            }
                                                            if ($enable_article_group_date_meta && $enable_article_group_author_meta) {
                                                                echo '<div class="entry-meta-separator"></div>';
                                                            }
                                                            if ($enable_article_group_author_meta) {
                                                                magnine_posted_by($select_article_group_author_meta, $article_group_author_meta_title);
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
                                    <div class="swiper-pagination"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

