<?php
if (!defined('ABSPATH')) {
    exit;
}

class Magnine_Youtube_Video extends Magnine_Widget_Base
{
    /**
     * Constructor.
     */
    public function __construct()
    {

        $this->widget_cssclass = 'magnine_youtube_video';
        $this->widget_description = __('Displays youtube video form your channel.', 'magnine');
        $this->widget_id = 'magnine_youtube_video';
        $this->widget_name = __('MagNine: Youtube Video', 'magnine');

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
            'channel_url' => array(
                'type' => 'url',
                'label' => __('Channel URL:', 'magnine'),
                'desc' => __('Please make sure to provide a complete URL that includes either "http://" or "https://" to ensure the widget operates correctly.', 'magnine'),

            ),
            'channel_name' => array(
                'type' => 'text',
                'label' => __('Channel Name:', 'magnine'),
            ),
            'video_url' => array(
                'type' => 'url',
                'label' => __('Video URL:', 'magnine'),
                'desc' => __('Please make sure to provide a complete URL that includes either "http://" or "https://" to ensure the widget operates correctly.', 'magnine'),

            ),
        );
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

        $channel_url = isset($instance['channel_url']) ? $instance['channel_url'] : $this->settings['channel_url']['std'];
        $channel_name = isset($instance['channel_name']) ? $instance['channel_name'] : $this->settings['channel_name']['std'];
        $video_url = isset($instance['video_url']) ? $instance['video_url'] : $this->settings['video_url']['std'];
        $this->widget_start($args, $instance); ?>

        <div class="site-youtube-widget">
            <?php if (!empty($video_url)) {
                preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $video_url, $matches);
                $id = $matches[1]; ?>
                <iframe width="560" height="190" src="https://www.youtube.com/embed/<?php echo esc_attr($id); ?>?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <?php } ?>

            <a href="<?php echo esc_url($channel_url); ?>" class="site-youtube-channel" target="_blank">&#64;<?php echo wp_kses_post($channel_name); ?></a>


            <a class="site-youtube-subscribe" href="<?php echo esc_url($channel_url); ?>" target="_blank"><?php esc_html_e('Subscribe', 'magnine'); ?></a>

        </div>
        <?php $this->widget_end($args);

        echo ob_get_clean();
    }
}
