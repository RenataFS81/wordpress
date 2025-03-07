<?php
// Retrieve split block configuration options.
$enable_split_block = magnine_get_option('enable_split_block');
if (!$enable_split_block) {
    return;
}

// Configuration variables.
$split_block_title = magnine_get_option('split_block_title', 'Split Block');
$split_block_category = magnine_get_option('split_block_category');

$enable_split_block_author_meta = magnine_get_option('enable_split_block_author_meta');
$select_split_block_author_meta = magnine_get_option('select_split_block_author_meta');
$split_block_author_meta_title = magnine_get_option('split_block_author_meta_title');
$enable_split_block_date_meta = magnine_get_option('enable_split_block_date_meta');
$select_split_block_date = magnine_get_option('select_split_block_date');
$select_split_block_date_meta_title = magnine_get_option('select_split_block_date_meta_title');
$select_split_block_date_format = magnine_get_option('select_split_block_date_format');
$enable_split_block_category_meta = magnine_get_option('enable_split_block_category_meta');
$split_block_category_label = magnine_get_option('split_block_category_label');
$select_split_block_category_color = magnine_get_option('select_split_block_category_color');
$select_split_block_number_of_category = magnine_get_option('select_split_block_number_of_category');

// Prepare query arguments for split block posts.
$split_block_args = array(
    'post_type' => 'post',
    'posts_per_page' => 5,
    'post_status' => 'publish',
    'no_found_rows' => true,
    'ignore_sticky_posts' => true,
);

// Include category filter if selected.
if (!empty($split_block_category)) {
    $split_block_args['tax_query'] = array(
        array(
            'taxonomy' => 'category',
            'field' => 'term_id',
            'terms' => $split_block_category,
        ),
    );
}

$split_block_query = new WP_Query($split_block_args);
?>

<section class="wpi-section wpi-split-block">
    <div class="wrapper">
        <div class="row-group">
            <div class="column-lg-12">
                <header class="section-header header-has-border">
                    <h2 class="section-title"><?php echo esc_html($split_block_title); ?></h2>
                </header>

                <div class="section-body">
                    <div class="row-group">
                        <div class="column-lg-4">
                            <div class="split-block-left">
                                <?php
                                if ($split_block_query->have_posts()) :
                                    $split_block_query->the_post();
                                    ?>
                                    <article id="split-block-main-<?php the_ID(); ?>" <?php post_class('wpi-post wpi-post-large'); ?>>
                                        <?php if (has_post_thumbnail()) : ?>
                                            <div class="entry-image entry-image-big image-hover-effect hover-effect-shine">
                                                <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                                                    <?php the_post_thumbnail('large', array('alt' => the_title_attribute(array('echo' => false)))); ?>
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                        <div class="entry-details">
                                            <?php
                                            if ($enable_split_block_category_meta) {
                                                magnine_post_category($select_split_block_category_color, $split_block_category_label, $select_split_block_number_of_category);
                                            }
                                            ?>
                                            <h3 class="entry-title entry-title-big">
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h3>
                                            <div class="entry-meta-wrapper">
                                                <?php
                                                if ($enable_split_block_date_meta) {
                                                    magnine_posted_on($select_split_block_date_format, $select_split_block_date_meta_title, $select_split_block_date);
                                                }
                                                if ($enable_split_block_date_meta && $enable_split_block_author_meta) {
                                                    echo '<div class="entry-meta-separator"></div>';
                                                }
                                                if ($enable_split_block_author_meta) {
                                                    magnine_posted_by($select_split_block_author_meta, $split_block_author_meta_title);
                                                }
                                                ?>
                                            </div>
                                            <div class="entry-summary">
                                                <?php echo esc_html(wp_trim_words(get_the_content(), 25, '...')); ?>
                                            </div>
                                        </div>
                                    </article>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="column-lg-8">
                            <div class="split-block-right">
                                <div class="split-block-top">
                                    <?php
                                    if ($split_block_query->have_posts()) :
                                        $split_block_query->the_post();
                                        ?>
                                        <article id="split-block-featured-<?php the_ID(); ?>" <?php post_class('wpi-post wpi-post-list wpi-post-list-reverse'); ?>>
                                            <?php if (has_post_thumbnail()) : ?>
                                                <div class="entry-image entry-image-medium image-hover-effect hover-effect-shine">
                                                    <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                                                        <?php the_post_thumbnail('small', array('alt' => the_title_attribute(array('echo' => false)))); ?>
                                                    </a>
                                                </div>
                                            <?php endif; ?>
                                            <div class="entry-details">
                                                <?php
                                                if ($enable_split_block_category_meta) {
                                                    magnine_post_category($select_split_block_category_color, $split_block_category_label, $select_split_block_number_of_category);
                                                }
                                                ?>
                                                <h3 class="entry-title entry-title-medium">
                                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                </h3>
                                                <div class="entry-meta-wrapper">
                                                    <?php
                                                    if ($enable_split_block_date_meta) {
                                                        magnine_posted_on($select_split_block_date_format, $select_split_block_date_meta_title, $select_split_block_date);
                                                    }
                                                    if ($enable_split_block_date_meta && $enable_split_block_author_meta) {
                                                        echo '<div class="entry-meta-separator"></div>';
                                                    }
                                                    if ($enable_split_block_author_meta) {
                                                        magnine_posted_by($select_split_block_author_meta, $split_block_author_meta_title);
                                                    }
                                                    ?>
                                                </div>
                                                <div class="entry-summary">
                                                    <?php echo esc_html(wp_trim_words(get_the_content(), 12, '...')); ?>
                                                </div>
                                            </div>
                                        </article>
                                    <?php endif; ?>
                                </div>

                                <div class="split-block-bottom">
                                    <?php
                                    while ($split_block_query->have_posts()) : $split_block_query->the_post();
                                        ?>
                                        <article id="split-block-small-<?php the_ID(); ?>" <?php post_class('wpi-post'); ?>>
                                            <?php if (has_post_thumbnail()) : ?>
                                                <div class="entry-image entry-image-small image-hover-effect hover-effect-shine">
                                                    <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                                                        <?php the_post_thumbnail('medium_large', array('alt' => the_title_attribute(array('echo' => false)))); ?>
                                                    </a>
                                                </div>
                                            <?php endif; ?>

                                            <div class="entry-details">
                                                <?php
                                                if ($enable_split_block_category_meta) {
                                                    magnine_post_category($select_split_block_category_color, $split_block_category_label, $select_split_block_number_of_category);
                                                }
                                                ?>
                                                <h3 class="entry-title entry-title-small">
                                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                </h3>
                                                <div class="entry-meta-wrapper">
                                                    <?php
                                                    if ($enable_split_block_date_meta) {
                                                        magnine_posted_on($select_split_block_date_format, $select_split_block_date_meta_title, $select_split_block_date);
                                                    }
                                                    if ($enable_split_block_date_meta && $enable_split_block_author_meta) {
                                                        echo '<div class="entry-meta-separator"></div>';
                                                    }
                                                    if ($enable_split_block_author_meta) {
                                                        magnine_posted_by($select_split_block_author_meta, $split_block_author_meta_title);
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </article>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
// Reset post data to avoid conflicts with subsequent queries.
wp_reset_postdata();
?>