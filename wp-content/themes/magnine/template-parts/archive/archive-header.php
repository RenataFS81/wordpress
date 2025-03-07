<?php
/**
 * Template part for displaying Archive Header
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MagNine
 */
$args = magnine_get_archive_header_query_args();
$enable_archive_featured_post = magnine_get_option('enable_archive_featured_post');
$enable_archive_post_count = magnine_get_option('enable_archive_post_count');
?>
<header class="page-header archive-header">
    <?php
    magnine_get_breadcrumb();
    the_archive_title('<h1 class="page-title">', '</h1>');
    the_archive_description('<div class="archive-description">', '</div>');
    if ($enable_archive_post_count) {
        magnine_archive_post_count();
    }
    ?>
</header><!-- .page-header -->
<?php if ($enable_archive_featured_post) { 
    $counter = 0;
    $enable_archive_author_meta = magnine_get_option('enable_archive_author_meta');
    $select_author_meta = magnine_get_option('select_author_meta');
    $archive_author_meta_title = magnine_get_option('archive_author_meta_title');
    $enable_archive_date_meta = magnine_get_option('enable_archive_date_meta');
    $select_archive_date = magnine_get_option('select_archive_date');
    $archive_date_meta_title = magnine_get_option('archive_date_meta_title');
    $select_date_format = magnine_get_option('select_date_format');
    $enable_category_meta = magnine_get_option('enable_category_meta');
    $archive_category_label = magnine_get_option('archive_category_label');
    $select_category_color = magnine_get_option('select_category_color');
    $enable_read_time_meta = magnine_get_option('enable_read_time_meta');
    ?>
    <section class="wpi-section wpi-archive-header">
        <div class="archive-header-wrapper">
            <?php
            $query_archive_header = new \WP_Query($args);
            if ($query_archive_header->have_posts()) {
                while ($query_archive_header->have_posts()) {
                    $query_archive_header->the_post();
                    $magnine_single_post_featured = get_post_meta($post->ID, 'magnine_single_post_featured_post', true);
                    if($magnine_single_post_featured){
                        ++$counter;
                        if (1 === $counter) {
                            $excerpt = 'true';
                            ?>
                            <article id="archive-image-<?php the_ID(); ?>" <?php post_class('wpi-post wpi-post-default'); ?>>
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="entry-image entry-image-highlight image-hover-effect hover-effect-shine">
                                        <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true"
                                           tabindex="-1">
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
                                    <?php
                                    if ($enable_category_meta) {
                                        magnine_post_category($select_category_color, $archive_category_label);
                                    }
                                    ?>
                                    <?php the_title('<h2 class="entry-title entry-title-big"><a href="' . esc_url(get_permalink()) . '">', '</a></h2>'); ?>

                                    <div class="entry-meta-wrapper">
                                        <?php
                                        if ($enable_read_time_meta) { ?>
                                            <?php magnine_get_readtime(); ?>
                                            <div class="entry-meta-separator"></div>
                                            <?php
                                        } ?>
                                        <?php
                                        if ($enable_archive_date_meta) { ?>
                                            <?php magnine_posted_on($select_date_format, $archive_date_meta_title, $select_archive_date); ?>
                                            <div class="entry-meta-separator"></div>
                                            <?php
                                        } ?>
                                        <?php
                                        if ($enable_archive_author_meta) {
                                            magnine_posted_by($select_author_meta, $archive_author_meta_title);
                                        }
                                        ?>
                                    </div><!-- .entry-meta -->

                                    <?php if ('true' === $excerpt) { ?>
                                        <div class="cs-entry__excerpt">
                                            <?php echo esc_attr(get_the_excerpt()); ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            </article>
                            <?php
                        } elseif (2 === $counter || 3 === $counter) {
                            $excerpt = get_theme_mod('archive_header_excerpt', array('false'));
                            ?>
                            <article id="archive-image-<?php the_ID(); ?>" <?php post_class('wpi-post wpi-post-default'); ?>>
                                <?php if (has_post_thumbnail()) : ?>
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
                                    if ($enable_category_meta) {
                                        magnine_post_category($select_category_color, $archive_category_label);
                                    }
                                    ?>
                                    <?php the_title('<h2 class="entry-title entry-title-medium"><a href="' . esc_url(get_permalink()) . '">', '</a></h2>'); ?>
                                    <?php if ('true' === $excerpt) { ?>
                                        <div class="cs-entry__excerpt">
                                            <?php echo esc_attr(get_the_excerpt()); ?>
                                        </div>
                                    <?php } ?>
                                    <div class="entry-meta-wrapper">
                                        <?php
                                        if ($enable_read_time_meta) { ?>
                                            <?php magnine_get_readtime(); ?>
                                            <div class="entry-meta-separator"></div>
                                            <?php
                                        } ?>
                                        <?php
                                        if ($enable_archive_date_meta) { ?>
                                            <?php magnine_posted_on($select_date_format, $archive_date_meta_title, $select_archive_date); ?>
                                            <div class="entry-meta-separator"></div>
                                            <?php
                                        } ?>
                                        <?php
                                        if ($enable_archive_author_meta) {
                                            magnine_posted_by($select_author_meta, $archive_author_meta_title);
                                        }
                                        ?>
                                    </div><!-- .entry-meta -->
                                </div>
                            </article>
                            <?php
                        } else {
                            $excerpt = get_theme_mod('archive_header_excerpt', array('false'));
                            ?>
                            <article
                                    id="archive-image-<?php the_ID(); ?>" <?php post_class('wpi-post wpi-post-list wpi-post-list-reverse'); ?>>
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="entry-image entry-image-small">
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
                                    if ($enable_category_meta) {
                                        magnine_post_category($select_category_color, $archive_category_label);
                                    }
                                    ?>
                                    <?php the_title('<h2 class="entry-title entry-title-medium"><a href="' . esc_url(get_permalink()) . '">', '</a></h2>'); ?>
                                    <?php if ('true' === $excerpt) { ?>
                                        <div class="cs-entry__excerpt">
                                            <?php echo esc_attr(get_the_excerpt()); ?>
                                        </div>
                                    <?php } ?>
                                    <div class="entry-meta-wrapper">
                                        <?php
                                        if ($enable_read_time_meta) { ?>
                                            <?php magnine_get_readtime(); ?>
                                            <div class="entry-meta-separator"></div>
                                            <?php
                                        } ?>
                                        <?php
                                        if ($enable_archive_date_meta) { ?>
                                            <?php magnine_posted_on($select_date_format, $archive_date_meta_title, $select_archive_date); ?>
                                            <div class="entry-meta-separator"></div>
                                            <?php
                                        } ?>
                                        <?php
                                        if ($enable_archive_author_meta) {
                                            magnine_posted_by($select_author_meta, $archive_author_meta_title);
                                        }
                                        ?>
                                    </div><!-- .entry-meta -->
                                </div>
                            </article>
                            <?php
                        }
                    }

                }
            }
            wp_reset_postdata();
            ?>
        </div>
    </section>
<?php } ?>

