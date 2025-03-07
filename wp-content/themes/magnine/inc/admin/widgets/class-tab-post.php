<?php
if (!defined('ABSPATH')) {
    exit;
}

class Magnine_Tab_Post extends Magnine_Widget_Base
{
    public $display_style = '';
    private static $counter = 0;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->widget_cssclass = 'magnine-tabbed-widget';
        $this->widget_description = __('Displays posts in tab', 'magnine');
        $this->widget_id = 'magnine_tab_posts';
        $this->widget_name = __('MagNine: Tab Posts', 'magnine');
        $this->settings = $this->get_widget_settings();
        parent::__construct();
    }

    /**
     * Define widget settings.
     */
    protected function get_widget_settings()
    {
        return array(
            'popular_post_settings' => array(
                'type' => 'heading',
                'label' => __('Popular Post Settings', 'magnine'),
            ),
            'show_popular_posts' => array(
                'type' => 'checkbox',
                'label' => __('Show Tab', 'magnine'),
                'std' => true,
            ),
            'popular_post_desc' => array(
                'type' => 'subtitle',
                'label' => __('Will display post based on comments count', 'magnine'),
            ),
            'popular_posts_title' => array(
                'type' => 'text',
                'label' => __('Title', 'magnine'),
                'std' => __('Popular', 'magnine'),
                'desc' => __('Leave as it is to show default title or leave blank to only show icon', 'magnine'),
            ),
            'popular_post_cat' => array(
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
            'popular_post_offset' => array(
                'type' => 'number',
                'step' => 1,
                'min' => 0,
                'max' => '',
                'std' => '',
                'label' => __('Offset', 'magnine'),
                'desc' => __('Can be useful if you want to skip certain number of posts. Leave as 0 if you do not want to use it.', 'magnine'),
            ),
            'popular_post_orderby' => array(
                'type' => 'select',
                'std' => 'date',
                'label' => __('Order By', 'magnine'),
                'options' => array(
                    'date' => __('Date', 'magnine'),
                    'ID' => __('ID', 'magnine'),
                    'title' => __('Title', 'magnine'),
                    'rand' => __('Random', 'magnine'),
                ),
            ),
            'popular_post_order' => array(
                'type' => 'select',
                'std' => 'desc',
                'label' => __('Order', 'magnine'),
                'options' => array(
                    'asc' => __('ASC', 'magnine'),
                    'desc' => __('DESC', 'magnine'),
                ),
            ),
            'hot_post_settings' => array(
                'type' => 'heading',
                'label' => __('Hot Post Settings', 'magnine'),
            ),
            'show_hot_posts' => array(
                'type' => 'checkbox',
                'label' => __('Show Tab', 'magnine'),
                'std' => true,
            ),
            'hot_posts_title' => array(
                'type' => 'text',
                'label' => __('Title', 'magnine'),
                'std' => __('Hot', 'magnine'),
                'desc' => __('Leave as it is to show default title or leave blank to only show icon', 'magnine'),
            ),
            'hot_post_cat' => array(
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
            'hot_post_offset' => array(
                'type' => 'number',
                'step' => 1,
                'min' => 0,
                'max' => '',
                'std' => '',
                'label' => __('Offset', 'magnine'),
                'desc' => __('Can be useful if you want to skip certain number of posts. Leave as 0 if you do not want to use it.', 'magnine'),
            ),
            'hot_post_orderby' => array(
                'type' => 'select',
                'std' => 'date',
                'label' => __('Order By', 'magnine'),
                'options' => array(
                    'date' => __('Date', 'magnine'),
                    'ID' => __('ID', 'magnine'),
                    'title' => __('Title', 'magnine'),
                    'rand' => __('Random', 'magnine'),
                ),
            ),
            'hot_post_order' => array(
                'type' => 'select',
                'std' => 'desc',
                'label' => __('Order', 'magnine'),
                'options' => array(
                    'asc' => __('ASC', 'magnine'),
                    'desc' => __('DESC', 'magnine'),
                ),
            ),
            'latest_post_settings' => array(
                'type' => 'heading',
                'label' => __('Latest Post Settings', 'magnine'),
            ),
            'show_latest_posts' => array(
                'type' => 'checkbox',
                'label' => __('Show Tab', 'magnine'),
                'std' => true,
            ),
            'latest_posts_title' => array(
                'type' => 'text',
                'label' => __('Title', 'magnine'),
                'std' => __('Latest', 'magnine'),
                'desc' => __('Leave as it is to show default title or leave blank to only show icon', 'magnine'),
            ),
            'latest_post_cat' => array(
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
            'latest_post_offset' => array(
                'type' => 'number',
                'step' => 1,
                'min' => 0,
                'max' => '',
                'std' => '',
                'label' => __('Offset', 'magnine'),
                'desc' => __('Can be useful if you want to skip certain number of posts. Leave as 0 if you do not want to use it.', 'magnine'),
            ),
            'latest_post_orderby' => array(
                'type' => 'select',
                'std' => 'date',
                'label' => __('Order By', 'magnine'),
                'options' => array(
                    'date' => __('Date', 'magnine'),
                    'ID' => __('ID', 'magnine'),
                    'title' => __('Title', 'magnine'),
                    'rand' => __('Random', 'magnine'),
                ),
            ),
            'latest_post_order' => array(
                'type' => 'select',
                'std' => 'desc',
                'label' => __('Order', 'magnine'),
                'options' => array(
                    'asc' => __('ASC', 'magnine'),
                    'desc' => __('DESC', 'magnine'),
                ),
            ),
            'general_settings' => array(
                'type' => 'heading',
                'label' => __('General Settings', 'magnine'),
            ),
            'number' => array(
                'type' => 'number',
                'step' => 1,
                'min' => 1,
                'max' => '',
                'std' => 5,
                'label' => __('Number of posts to show', 'magnine'),
            ),
            'date_format' => array(
                'type' => 'select',
                'label' => __('Date Format', 'magnine'),
                'desc' => __('Make sure to select Date from above for this to work.', 'magnine'),
                'options' => array(
                    'format_1' => __('Times Ago', 'magnine'),
                    'format_2' => __('Default Format', 'magnine'),
                ),
                'std' => 'format_1',
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
            'tab_display_style' => array(
                'type' => 'select',
                'label' => __('Display Style', 'magnine'),
                'options' => array(
                    'wpi-post-regular' => __('Regular View', 'magnine'),
                    'wpi-post-list' => __('List View', 'magnine'),
                    'wpi-post-card' => __('Card View', 'magnine'),
                ),
                'std' => 'wpi-post-list',
            ),
            'show_counter' => array(
                'type' => 'checkbox',
                'label' => __('Show Counter', 'magnine'),
                'std' => true,
            ),
            'show_image' => array(
                'type' => 'checkbox',
                'label' => __('Show Image', 'magnine'),
                'std' => true,
            ),
            'image_size' => array(
                'type' => 'select',
                'label' => __('Image size', 'magnine'),
                'options' => array(
                    'thumbnail' => __('Thumbnail', 'magnine'),
                    'medium' => __('Medium', 'magnine'),
                    'medium_large' => __('Medium Large', 'magnine'),
                    'large' => __('Large', 'magnine'),
                ),
                'std' => 'thumbnail',
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
            'font_size' => array(
                'type' => 'select',
                'label' => __('Entry title font size', 'magnine'),
                'options' => array(
                    'entry-title-xsmall' => __('Extra Small', 'magnine'),
                    'entry-title-small' => __('Small', 'magnine'),
                    'entry-title-medium' => __('Medium', 'magnine'),
                    'entry-title-big' => __('Big', 'magnine'),
                ),
                'std' => 'entry-title-small',
            ),
            'font_style' => array(
                'type' => 'select',
                'label' => __('Entry title font style', 'magnine'),
                'options' => array(
                    'entry-title-normal' => __('Normal', 'magnine'),
                    'entry-title-italic' => __('Italic', 'magnine'),
                ),
                'std' => 'entry-title-normal',
            ),
        );
    }

    /**
     * Outputs the tab Content
     *
     * @param array $instance
     * @param string $block The block to display.
     */
    public function render_tab_title($instance, $block, $is_active = false)
    {
        if (!$block) {
            return;
        }
        $enabled = isset($instance["show_{$block}_posts"]) ? $instance["show_{$block}_posts"] : $this->settings["show_{$block}_posts"]['std'];
        if ($enabled) :
            $title = isset($instance["{$block}_posts_title"]) ? $instance["{$block}_posts_title"] : $this->settings["{$block}_posts_title"]['std'];
            ?>
            <li tab-data="tab-<?php echo $block; ?>"
                class="tab-<?php echo $block; ?> tabbed-header-item<?php echo ($is_active) ? ' active' : ''; ?>">
                <a href="javascript:void(0)"
                   aria-controls="<?php echo esc_attr($block); ?>-posts-<?php echo $this->widget_id; ?>-block"
                   role="tab">
                    <?php if ($title) : ?>
                        <?php echo $title; ?>
                    <?php endif; ?>
                </a>
            </li>
        <?php
        endif;
    }

    /**
     * Outputs the tab Content
     *
     * @param array $instance
     * @param string $block The block to display.
     */
    public function render_tab_content($instance, $block, $is_active = false)
    {
        $counter_class = '';
        if (!$block) {
            return;
        }
        $enabled = isset($instance["show_{$block}_posts"]) ? $instance["show_{$block}_posts"] : $this->settings["show_{$block}_posts"]['std'];
        if ($enabled) :
            $number = !empty($instance['number']) ? absint($instance['number']) : $this->settings['number']['std'];
            if ('popular' == $block) {
                $orderby = 'comment_count';
            } else {
                $orderby = !empty($instance["{$block}_post_orderby"]) ? sanitize_text_field($instance["{$block}_post_orderby"]) : $this->settings["{$block}_post_orderby"]['std'];
            }
            $order = !empty($instance["{$block}_post_order"]) ? sanitize_text_field($instance["{$block}_post_order"]) : $this->settings["{$block}_post_order"]['std'];
            $offset = !empty($instance["{$block}_post_offset"]) ? sanitize_text_field($instance["{$block}_post_offset"]) : $this->settings["{$block}_post_offset"]['std'];
            $query_args = array(
                'post_type' => 'post',
                'posts_per_page' => $number,
                'post_status' => 'publish',
                'no_found_rows' => 1,
                'orderby' => $orderby,
                'order' => $order,
                'ignore_sticky_posts' => 1,
            );
            if ($offset && 0 != $offset) {
                $query_args['offset'] = absint($offset);
            }
            if (!empty($instance["{$block}_post_cat"]) && -1 != $instance["{$block}_post_cat"] && 0 != $instance["{$block}_post_cat"]) {
                $query_args['tax_query'][] = array(
                    'taxonomy' => 'category',
                    'field' => 'term_id',
                    'terms' => $instance["{$block}_post_cat"],
                );
            }
            $posts = new WP_Query($query_args);
            if ($posts->have_posts()) :
                $this->display_style = isset($instance['tab_display_style']) ? $instance['tab_display_style'] : $this->settings['tab_display_style']['std'];
                $widget_class = $this->display_style;
                $image_size = !empty($instance['image_size']) ? $instance['image_size'] : $this->settings['image_size']['std'];
                $image_hover_effects = !empty($instance['image_hover_effects']) ? $instance['image_hover_effects'] : $this->settings['image_hover_effects']['std'];
                $font_size = !empty($instance['font_size']) ? $instance['font_size'] : $this->settings['font_size']['std'];
                $font_style = !empty($instance['font_style']) ? $instance['font_style'] : $this->settings['font_style']['std'];
                $show_counter = !empty($instance['show_counter']) ? $instance['show_counter'] : $this->settings['show_counter']['std'];
                if ($show_counter) {
                    $counter_class = 'has-post-counter';
                }
                $category_text = !empty($instance['category_text']) ? $instance['category_text'] : '';
                $display_category_option = !empty($instance['display_category_option']) ? $instance['display_category_option'] : $this->settings['display_category_option']['std'];
                $number_of_cat = !empty($instance['number_of_cat']) ? absint($instance['number_of_cat']) : $this->settings['number_of_cat']['std'];
                $counter = 1;
                ?>
                <div id="<?php echo esc_attr($block); ?>-posts-<?php echo $this->widget_id; ?>-block" class="content-tab-<?php echo $block; ?> tabbed-content-item wpi-widget-list <?php echo ($is_active) ? ' active' : ''; ?>" role="tabpanel">
                    <?php
                    while ($posts->have_posts()) :
                        $posts->the_post();
                        ?>
                        <article id="tabs-widget-<?php the_ID(); ?>" <?php post_class('wpi-post ' . esc_attr($counter_class) . ' ' . esc_attr($widget_class)); ?>>
                            <?php if ($show_counter) { ?>
                                <div class="wpi-post-counter">
                                    <span><?php echo $counter++; ?></span>
                                </div>
                            <?php } ?>
                            <?php if (has_post_thumbnail() && !empty($instance['show_image'])) : ?>
                                <div class="entry-image entry-image-thumbnail image-hover-effect <?php echo $image_hover_effects; ?>">
                                    <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                                        <?php
                                        the_post_thumbnail(
                                            $image_size,
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
                                    <?php the_title('<h3 class="entry-title ' . $font_size . ' ' . $font_style . '"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>'); ?>
                                </header>
                            </div>
                        </article>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            <?php
            endif;
        endif;
    }

    /**
     * Output widget.
     *
     * @param array $args
     * @param array $instance
     * @see WP_Widget
     *
     */
    public function widget($args, $instance)
    {
        ob_start();
        $before_widget = $args['before_widget'];
        $after_widget = $args['after_widget'];
        echo wp_kses_post($before_widget);
        do_action('magnine_before_tab_posts');
        ++self::$counter;
        $this->unique_id = 'magnine-tab-' . self::$counter;
        ?>
        <div class="wpi-tabbed-widget">
            <ul class="tabbed-widget-header reset-list-style" role="tablist"
                aria-label="<?php esc_attr_e('Tab Navigation', 'magnine'); ?>">
                <?php $this->render_tab_title($instance, 'popular', true); ?>
                <?php $this->render_tab_title($instance, 'hot'); ?>
                <?php $this->render_tab_title($instance, 'latest'); ?>
            </ul>
            <div class="tabbed-widget-content">
                <?php $this->render_tab_content($instance, 'popular', true); ?>
                <?php $this->render_tab_content($instance, 'hot'); ?>
                <?php $this->render_tab_content($instance, 'latest'); ?>
            </div>
        </div>
        <?php
        do_action('magnine_after_tab_posts');
        echo wp_kses_post($after_widget);
        echo ob_get_clean();
    }
}
