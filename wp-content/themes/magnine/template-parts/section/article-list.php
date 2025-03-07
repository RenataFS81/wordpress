<?php
$enable_article_list_post = magnine_get_option('enable_article_list_post');
$enable_article_list_post_author_meta = magnine_get_option('enable_article_list_post_author_meta');
$select_article_list_post_author_meta = magnine_get_option('select_article_list_post_author_meta');
$article_list_post_author_meta_title = magnine_get_option('article_list_post_author_meta_title');

$enable_article_list_post_date_meta = magnine_get_option('enable_article_list_post_date_meta');
$select_article_list_post_date = magnine_get_option('select_article_list_post_date');
$select_article_list_post_date_meta_title = magnine_get_option('select_article_list_post_date_meta_title');
$select_article_list_post_date_format = magnine_get_option('select_article_list_post_date_format');

$enable_article_list_post_category_meta = magnine_get_option('enable_article_list_post_category_meta');
$article_list_post_category_label = magnine_get_option('article_list_post_category_label');
$select_article_list_post_category_color = magnine_get_option('select_article_list_post_category_color');
$select_article_list_post_number_of_category = magnine_get_option('select_article_list_post_number_of_category');
if ($enable_article_list_post) { ?>

    <section class="wpi-section wpi-article-grid">
        <div class="wrapper">
            <div class="row-group">

                <?php
                $article_list_post_args_1 = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'no_found_rows' => 1,
                    'ignore_sticky_posts' => 1,
                );
                $article_list_post_category_1 = magnine_get_option('article_list_post_category_1');
                $article_list_post_args_1['posts_per_page'] = 4;
                if (!empty($article_list_post_category_1)) :
                    $article_list_post_args_1['tax_query'][] = array(
                        'taxonomy' => 'category',
                        'field' => 'term_id',
                        'terms' => absint($article_list_post_category_1),
                    );
                endif;
                $article_list_post_1 = new WP_Query($article_list_post_args_1);
                ?>
                <div class="column-lg-4 column-md-7">
                    <div class="article-grid-slider swiper adjust-pagination">
                        <div class="swiper-wrapper">
                            <?php while ($article_list_post_1->have_posts()) :
                                $article_list_post_1->the_post(); ?>
                                <div class="swiper-slide">
                                    <article id="article-list-<?php the_ID(); ?>" <?php post_class('wpi-post wpi-post-default'); ?>>

                                        <div class="entry-image entry-image-large image-hover-effect hover-effect-shine">
                                            <a class="post-thumbnail" href="<?php the_permalink(); ?>"
                                               aria-hidden="true" tabindex="-1">
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

                                        <div class="entry-details">
                                            <?php
                                            if ($enable_article_list_post_category_meta) {
                                                magnine_post_category($select_article_list_post_category_color, $article_list_post_category_label, $select_article_list_post_number_of_category);
                                            }
                                            ?>

                                            <h3 class="entry-title entry-title-big">
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h3>

                                            <div class="entry-meta-wrapper">

                                                <?php
                                                if ($enable_article_list_post_date_meta) {
                                                    magnine_posted_on($select_article_list_post_date_format, $select_article_list_post_date_meta_title, $select_article_list_post_date);
                                                }
                                                ?>

                                                <?php
                                                if ($enable_article_list_post_date_meta && $enable_article_list_post_author_meta) { ?>
                                                    <div class="entry-meta-separator"></div>
                                                <?php } ?>

                                                <?php
                                                if ($enable_article_list_post_author_meta) {
                                                    magnine_posted_by($select_article_list_post_author_meta, $article_list_post_author_meta_title);
                                                }
                                                ?>

                                            </div>

                                            <div class="entry-summary">
                                                <?php echo esc_html(wp_trim_words(get_the_content(), 25, '...')); ?>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            <?php endwhile;
                            wp_reset_postdata();
                            ?>
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <?php
                $article_list_post_args_2 = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'no_found_rows' => 1,
                    'ignore_sticky_posts' => 1,
                );
                $article_list_post_category_2 = magnine_get_option('article_list_post_category_2');
                $article_list_post_args_2['posts_per_page'] = 5;
                if (!empty($article_list_post_category_2)) :
                    $article_list_post_args_2['tax_query'][] = array(
                        'taxonomy' => 'category',
                        'field' => 'term_id',
                        'terms' => absint($article_list_post_category_2),
                    );
                endif;
                $article_list_post_2 = new WP_Query($article_list_post_args_2);
                ?>
                <div class="column-lg-3 column-md-5">
                    <div class="article-grid-middle">
                        <?php
                        $post_counter = 0;
                        while ($article_list_post_2->have_posts()) :
                            $article_list_post_2->the_post();
                            $post_counter++;
                            ?>
                            <article id="article-list-<?php the_ID(); ?>" <?php post_class($post_counter === 1 ? 'wpi-post wpi-post-default wpi-content-overlay' : 'wpi-post wpi-post-default post-has-padding'); ?>>

                                <?php if ($post_counter === 1) : ?>
                                    <div class="entry-image entry-image-big image-hover-effect hover-effect-shine">
                                        <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true"
                                           tabindex="-1">
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
                                    if ($enable_article_list_post_category_meta) {
                                        magnine_post_category($select_article_list_post_category_color, $article_list_post_category_label, $select_article_list_post_number_of_category);
                                    }
                                    ?>
                                    <h3 class="entry-title <?php echo $post_counter === 1 ? 'entry-title-medium' : 'entry-title-xsmall'; ?>">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>

                                    <div class="entry-meta-wrapper">
                                        <?php
                                        if ($enable_article_list_post_date_meta) {
                                            magnine_posted_on($select_article_list_post_date_format, $select_article_list_post_date_meta_title, $select_article_list_post_date);
                                        }
                                        ?>

                                        <?php
                                        if ($enable_article_list_post_date_meta && $enable_article_list_post_author_meta) { ?>
                                            <div class="entry-meta-separator"></div>
                                        <?php } ?>

                                        <?php
                                        if ($enable_article_list_post_author_meta) {
                                            magnine_posted_by($select_article_list_post_author_meta, $article_list_post_author_meta_title);
                                        }
                                        ?>

                                    </div>

                                </div>
                            </article>
                        <?php endwhile;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>


                <?php
                $article_list_post_args_3 = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'no_found_rows' => 1,
                    'ignore_sticky_posts' => 1,
                );
                $article_list_post_category_3 = magnine_get_option('article_list_post_category_3');
                $article_list_post_args_3['posts_per_page'] = 4;
                if (!empty($article_list_post_category_3)) :
                    $article_list_post_args_3['tax_query'][] = array(
                        'taxonomy' => 'category',
                        'field' => 'term_id',
                        'terms' => absint($article_list_post_category_3),
                    );
                endif;
                $article_list_post_3 = new WP_Query($article_list_post_args_3);
                ?>
                <div class="column-lg-5 column-md-12">
                    <div class="article-grid-right">
                        <?php
                        $counter = 0; // Initialize counter outside the loop
                        while ($article_list_post_3->have_posts()) :
                            $article_list_post_3->the_post();
                            $counter++; // Increment the counter for each post
                            ?>
                            <article id="article-list-<?php the_ID(); ?>" <?php post_class('wpi-post wpi-post-default'); ?>>
                                <div class="entry-image entry-image-small image-hover-effect hover-effect-shine">
                                    <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
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

                                <div class="entry-details">
                                    <?php
                                    if ($enable_article_list_post_category_meta) {
                                        magnine_post_category($select_article_list_post_category_color, $article_list_post_category_label, $select_article_list_post_number_of_category);
                                    }
                                    ?>

                                    <h3 class="entry-title <?php echo $counter <= 2 ? 'entry-title-medium' : 'entry-title-small'; ?>">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>

                                    <div class="entry-meta-wrapper">
                                        <?php
                                        if ($enable_article_list_post_date_meta) {
                                            magnine_posted_on($select_article_list_post_date_format, $select_article_list_post_date_meta_title, $select_article_list_post_date);
                                        }

                                        if ($enable_article_list_post_date_meta && $enable_article_list_post_author_meta) { ?>
                                            <div class="entry-meta-separator"></div>
                                        <?php }

                                        if ($enable_article_list_post_author_meta) {
                                            magnine_posted_by($select_article_list_post_author_meta, $article_list_post_author_meta_title);
                                        }
                                        ?>
                                    </div>

                                    <?php if ($counter <= 2): ?>
                                        <div class="entry-summary">
                                            <?php echo esc_html(wp_trim_words(get_the_content(), 16, '...')); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </article>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php }
