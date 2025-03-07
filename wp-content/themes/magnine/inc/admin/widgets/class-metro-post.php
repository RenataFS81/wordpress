<?php
if (!defined('ABSPATH')) {
    exit;
}

class Magnine_Metro_Post_Widget extends Magnine_Widget_Base
{
    /**
     * Sets up a new widget instance.
     *
     * @since 1.0.0
     */
    public function __construct()
    {
        $this->widget_cssclass = 'magnine-widget-metro-post';
        $this->widget_description = __("Metro Widget transforms your posts into a visually appealing mosaic, creating a stylish and organized showcase for an immersive reader experience.", 'magnine');
        $this->widget_id = 'Magnine_Metro_Post_Widget';
        $this->widget_name = __('MagNine: Metro Post', 'magnine');
        $this->settings = $this->get_widget_settings();
        parent::__construct();
    }

    /**
     * Define widget settings.
     */
    protected function get_widget_settings()
    {
        return array(
            'title' => array(
                'type' => 'text',
                'label' => __('Title', 'magnine'),
            ),
            'layout_style' => array(
                'type' => 'select',
                'label' => __('Style Layout', 'magnine'),
                'options' => array(
                    'metro-layout-1' => __('Layout 1', 'magnine'),
                    'metro-layout-2' => __('Layout 2', 'magnine'),
                    'metro-layout-3' => __('Layout 3', 'magnine'),
                    'metro-layout-4' => __('Layout 4', 'magnine'),
                    'metro-layout-5' => __('Layout 5', 'magnine'),
                ),
                'std' => 'metro-layout-1',
            ),
            'offset' => array(
                'type' => 'number',
                'step' => 1,
                'min' => 0,
                'max' => '',
                'std' => '',
                'label' => __('Offset', 'magnine'),
                'desc' => __('Offsets are used to skip a certain number of WordPress posts before starting output. Set it to 0 if you do not wish to use this feature.', 'magnine'),
            ),
            'image_hover_effects' => array(
                'type' => 'select',
                'label' => __('Image hover effects', 'magnine'),
                'options' => array(
                    'hover-effect-shine' => __('Shine', 'magnine'),
                    'hover-effect-slide' => __('Slide', 'magnine'),
                    'hover-effect-zoom' => __('Zoom', 'magnine'),
                ),
                'std' => 'hover-effect-shine',
            ),
            'category' => array(
                'type' => 'dropdown-taxonomies',
                'label' => __('Select Category', 'magnine'),
                'desc' => __('Leave empty if you don\'t want the posts to be category specific', 'magnine'),
                'args' => array(
                    'taxonomy' => 'category',
                    'class' => 'widefat',
                    'hierarchical' => true,
                    'show_count' => 1,
                    'show_option_all' => __('&mdash; Select &mdash;', 'magnine'),
                ),
            ),
            'show_category' => array(
                'type' => 'checkbox',
                'label' => __('Show Category', 'magnine'),
                'std' => true,
            ),
            'category_text' => array(
                'type' => 'text',
                'label' => __('Category Text', 'magnine'),
            ),
            'display_category_option' => array(
                'type' => 'select',
                'label' => __('Category Option', 'magnine'),
                'options' => array(
                    'none' => __('None', 'magnine'),
                    'has-background' => __('Has background', 'magnine'),
                    'has-text-color' => __('Has text color', 'magnine'),
                ),
                'std' => 'has-text-color',
            ),
            'number_of_cat' => array(
                'type' => 'number',
                'step' => 1,
                'min' => 1,
                'std' => 1,
                'label' => __('Number of Category to show', 'magnine'),
            ),
            'show_date' => array(
                'type' => 'checkbox',
                'label' => __('Show Date', 'magnine'),
                'std' => true,
            ),
            'date_format' => array(
                'type' => 'select',
                'label' => __('Date Format', 'magnine'),
                'options' => array(
                    'format_1' => __('Format 1', 'magnine'),
                    'format_2' => __('Format 2', 'magnine'),
                ),
                'std' => 'format_1',
            ),
            'show_author' => array(
                'type' => 'checkbox',
                'label' => __('Show Author', 'magnine'),
                'std' => true,
            ),
            'display_author_option' => array(
                'type' => 'select',
                'label' => __('Author Option', 'magnine'),
                'options' => array(
                    'with_label' => __('With Label', 'magnine'),
                    'with_icon' => __('With Icon', 'magnine'),
                    'with_avatar_image' => __('With Avatar Image', 'magnine'),
                ),
                'std' => 'with_icon',
            ),
            'author_text' => array(
                'type' => 'text',
                'label' => __('Author Text', 'magnine'),
                'std' => __('By:', 'magnine'),
                'desc' => __('This only works when the "With Label" option is selected under "Author Option"', 'magnine'),
            ),
        );
    }

    /**
     * Query the posts and return them.
     * @param array $args
     * @param array $instance
     * @return WP_Query
     */
    public function get_posts($args, $instance)
    {
        $post_count = "";
        switch ($instance['layout_style']) {
            case "metro-layout-1":
                $post_count = "5";
                break;
            case "metro-layout-2":
                $post_count = "4";
                break;
            case "metro-layout-3":
                $post_count = "5";
                break;
            case "metro-layout-4":
                $post_count = "5";
                break;
            case "metro-layout-5":
                $post_count = "3";
                break;
            default:
                $post_count = "";
        }
        $query_args = array(
            'post_status' => 'publish',
            'posts_per_page' => $post_count,
            'no_found_rows' => 1,
            'offset' => !empty($instance['offset']) ? sanitize_text_field($instance['offset']) : $this->settings['offset']['std'],
            'ignore_sticky_posts' => 1
        );
        if (isset($instance['offset']) && absint($instance['offset']) != 0) {
            $query_args['offset'] = absint($instance['offset']);
        }
        if (!empty($instance['category']) && -1 != $instance['category'] && 0 != $instance['category']) {
            $query_args['tax_query'][] = array(
                'taxonomy' => 'category',
                'field' => 'term_id',
                'terms' => $instance['category'],
            );
        }
        return new WP_Query(apply_filters('Magnine_Metro_Post_Widget_query_args', $query_args));
    }

    /**
     * Output widget.
     *
     * @param array $args
     * @param array $instance
     * @see WP_Widget
     */
    public function widget($args, $instance)
    {
        ob_start();
        echo $args['before_widget'];
        do_action('magnine_before_metro_widget');
        $counter = 1;
        // Provide a default value for $instance['title']
        $title = isset($instance['title']) ? esc_html($instance['title']) : '';
        $image_hover_effects = !empty($instance['image_hover_effects']) ? $instance['image_hover_effects'] : $this->settings['image_hover_effects']['std'];
        $category_text = !empty($instance['category_text']) ? $instance['category_text'] : '';
        $display_category_option = !empty($instance['display_category_option']) ? $instance['display_category_option'] : $this->settings['display_category_option']['std'];
        $number_of_cat = !empty($instance['number_of_cat']) ? absint($instance['number_of_cat']) : $this->settings['number_of_cat']['std'];
        $show_author = !empty($instance['show_author']) ? $instance['show_author'] : $this->settings['show_author']['std'];
        $author_text = !empty($instance['author_text']) ? $instance['author_text'] : $this->settings['author_text']['std'];
        $display_author_option = !empty($instance['display_author_option']) ? $instance['display_author_option'] : $this->settings['display_author_option']['std'];
        if (($posts = $this->get_posts($args, $instance)) && $posts->have_posts()) {
            ?>
            <div class="metro-layout-style <?php echo esc_attr($instance['layout_style']); ?>">
                <?php if ($title) : ?>
                    <h2 class="widget-title">
                        <?php echo $title; ?>
                    </h2>
                <?php endif; ?>
                <div class="wpi-metro-widget">
                    <?php
                    while ($posts->have_posts()): $posts->the_post();
                        $image_class = "";
                        $title_class = "";
                        switch ($instance['layout_style']) {
                            case "metro-layout-1":
                                if ($counter == 1) {
                                    $image_class = "entry-image-highlight";
                                    $title_class = "entry-title-big";
                                } else {
                                    $image_class = "entry-image-medium";
                                    $title_class = "entry-title-medium";
                                }
                                break;
                            case "metro-layout-2":
                                if ($counter == 1) {
                                    $image_class = "entry-image-highlight";
                                    $title_class = "entry-title-big";
                                } else {
                                    $image_class = "entry-image-medium";
                                    $title_class = "entry-title-medium";
                                }
                                break;
                            case "metro-layout-3":
                                if ($counter == 2) {
                                    $image_class = "entry-image-highlight";
                                    $title_class = "entry-title-big";
                                } else {
                                    $image_class = "entry-image-medium";
                                    $title_class = "entry-title-medium";
                                }
                                break;
                            case "metro-layout-4":
                                if ($counter == 5) {
                                    $image_class = "entry-image-highlight";
                                    $title_class = "entry-title-big";
                                } else {
                                    $image_class = "entry-image-medium";
                                    $title_class = "entry-title-medium";
                                }
                                break;
                            case "metro-layout-5":
                                    $image_class = "entry-image-highlight";
                                    $title_class = "entry-title-big";

                                break;
                            default:
                                $image_class = "entry-image-medium";
                                $title_class = "entry-title-small";
                        }
                        ?>
                        <article id="metro-article-<?php the_ID(); ?>" <?php post_class('wpi-post wpi-tile-post wpi-post-metro wpi-post-metro-' . $counter . ''); ?>>
                            <?php if (has_post_thumbnail()): ?>
                                <div class="entry-image <?php echo $image_hover_effects; ?> <?php echo esc_attr($image_class); ?>">
                                    <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
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
                                if (!empty($instance['show_category']) && $instance['show_category']) {
                                    magnine_post_category($display_category_option, $category_text, $number_of_cat);
                                }
                                ?>
                                <header class="entry-header">
                                    <?php the_title('<h3 class="entry-title ' . esc_attr($title_class) . '"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>'); ?>
                                </header>
                                <div class="entry-meta-wrapper">
                                    <?php if (!empty($instance['show_date']) && $instance['show_date']) : ?>
                                        <div class="entry-meta entry-date posted-on">
                                            <span class="screen-reader-text"><?php _e('Post Date', 'magnine'); ?></span>
                                            <?php magnine_the_theme_svg('calendar'); ?>
                                            <?php
                                            $date_format = !empty($instance['date_format']) ? $instance['date_format'] : 'format_1';
                                            if ('format_1' === $date_format) {
                                                echo esc_html(human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ' . __('ago', 'magnine'));
                                            } else {
                                                echo esc_html(get_the_date());
                                            }
                                            ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($instance['show_author']) && $instance['show_author']) : ?>

                                            <?php
                                            if ($show_author) {
                                                magnine_posted_by($display_author_option, $author_text);
                                            }
                                            ?>

                                    <?php endif; ?>
                                </div>
                            </div>
                        </article>
                        <?php
                        $counter++;
                    endwhile;
                    wp_reset_postdata(); ?>
                </div>
            </div>
            <?php
        }
        do_action('magnine_after_metro_widget');
        echo $args['after_widget'];
        echo ob_get_clean();
    }
}