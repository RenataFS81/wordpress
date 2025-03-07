<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;
class MagNine_Dashboard
{
    private static $instance;
    /**
     * The pro_status of theme.
     *
     * @var string $pro_status The pro_status.
     */
    public $pro_status = false;
    public $demo_packages;
    public static function instance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    private function __construct()
    {
        $this->setup_hooks();
    }
    private function setup_hooks()
    {
        add_action('admin_menu', array($this, 'create_menu'));
        add_action('in_admin_header', array($this, 'hide_admin_notices'));
    }
    /**
     * Theme Url
     *
     * @access private
     * @var string $theme_url
     * @since 1.0.0
     */
    private $theme_url = 'https://wpinterface.com/themes/magnine/';
    /**
     * Documentation Url
     *
     * @access private
     * @var string $doc_url
     * @since 1.0.0
     */
    private $doc_url = 'https://docs.wpinterface.com/magnine/';
    /**
     * Preview Url
     *
     * @access private
     * @var string $preview_url
     * @since 1.0.0
     */
    private $preview_url = 'https://demo.wpinterface.com/magnine';
    /**
     * Misc Support Url
     *
     * @access private
     * @since 1.0.0
     */
    private $community_url = 'https://wordpress.org/support/theme/magnine/';
    private $support_url = 'https://wpinterface.com/support/';
    private $facebook_url = 'https://www.facebook.com/wpinterface';
    private $x_url = 'https://x.com/wp_interface';
    private $youtube_url = 'https://www.youtube.com/@wpinterface';
    public function create_menu()
    {
        if (!is_child_theme()) {
            $theme = wp_get_theme();
        } else {
            $theme = wp_get_theme()->parent();
        }
        /* translators: %s: Theme Name. */
        $theme_page_name = sprintf(esc_html__('%s', 'magnine'), $theme->Name);
        add_theme_page(
            $theme_page_name,
            $theme_page_name,
            'edit_theme_options',
            'magnine',
            array(
                $this,
                'dashboard_page',
            )
        );
    }
    /**
     * Hide admin notices from BlockArt admin pages.
     *
     * @since 1.0.0
     */
    public function hide_admin_notices()
    {
        // Bail if we're not on a MagNine screen or page.
        if (empty($_REQUEST['page']) || false === strpos(sanitize_text_field(wp_unslash($_REQUEST['page'])), 'magnine')) { // phpcs:ignore WordPress.Security.NonceVerification
            return;
        }
        global $wp_filter;
        $ignore_notices = apply_filters('magnine_ignore_hide_admin_notices', array());
        foreach (array('user_admin_notices', 'admin_notices', 'all_admin_notices') as $wp_notice) {
            if (empty($wp_filter[$wp_notice])) {
                continue;
            }
            $hook_callbacks = $wp_filter[$wp_notice]->callbacks;
            if (empty($hook_callbacks) || !is_array($hook_callbacks)) {
                continue;
            }
            foreach ($hook_callbacks as $priority => $hooks) {
                foreach ($hooks as $name => $callback) {
                    if (!empty($name) && in_array($name, $ignore_notices, true)) {
                        continue;
                    }
                    if (
                        !empty($callback['function']) &&
                        !is_a($callback['function'], '\Closure') &&
                        isset($callback['function'][0], $callback['function'][1]) &&
                        is_object($callback['function'][0]) &&
                        in_array($callback['function'][1], $ignore_notices, true)
                    ) {
                        continue;
                    }
                    unset($wp_filter[$wp_notice]->callbacks[$priority][$name]);
                }
            }
        }
    }
    public function dashboard_page()
    {
        if (!is_child_theme()) {
            $theme = wp_get_theme();
        } else {
            $theme = wp_get_theme()->parent();
        }
        $admin_url = admin_url();
        $tabs = apply_filters(
            'magnine_dashboard_tabs',
            array(
                'dashboard' => array(
                    'name' => esc_html__('Dashboard', 'magnine'),
                    'callback' => function () {
                        include __DIR__ . '/views/dashboard.php';
                    },
                ),
                'starter-templates' => array(
                    'name' => esc_html__('Starter Templates', 'magnine'),
                    'callback' => function () {
                            include __DIR__ . '/views/starter-templates.php';
                    },
                ),
                'products' => array(
                    'name' => esc_html__('Our Recommendation', 'magnine'),
                    'callback' => function () {
                        include __DIR__ . '/views/products.php';
                    },
                ),
                'free-vs-pro' => array(
                    'name' => esc_html__('Free Vs Pro', 'magnine'),
                    'callback' => function () {
                        include __DIR__ . '/views/free-vs-pro.php';
                    },
                ),
                'help' => array(
                    'name' => esc_html__('Help', 'magnine'),
                    'callback' => function () {
                        include __DIR__ . '/views/help.php';
                    },
                ),
            )
        )
        ?>
        <div class="wrap">
            <div class="magnine-dashboard-area">
                <div class="magnine-dashboard-header">
                    <a class="magnine-logo" href="<?php echo esc_url($this->theme_url); ?>"
                       target="_blank">
                        <img class="magnine-premium-badge"
                             src="<?php echo esc_url(MAGNINE_PARENT_URL . '/inc/admin/dashboard/images/magnine-logo.webp'); ?>"
                             alt="<?php esc_attr_e('MagNine', 'magnine'); ?>">
                        <span class="magnine-theme-version">
									<?php
                                    echo esc_html($theme->Version);
                                    ?>
							</span>
                    </a>
                    <nav class="dashboard-header-nav">
                        <ul class="dashboard-primary-menu">
                            <?php
                            foreach ($tabs as $id => $tab) :
                                if (!is_callable($tab['callback'])) {
                                    continue;
                                }
                                ?>
                                <li class="menu-item menu-item-<?php echo esc_attr($id); ?>">
                                    <a id="<?php echo esc_attr($id); ?>"
                                       href=<?php echo esc_url("{$admin_url}themes.php?page=magnine&tab=$id"); ?>><?php echo esc_html($tab['name']); ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </nav>
                    <div class="dashboard-header-extras">
                        <div class="dashboard-button-group">
                            <?php if (!$this->pro_status) { ?>
                                <a href="<?php echo esc_url($this->theme_url); ?>#choose-pricing-plan" class="button button-secondary dashboard-button dashboard-button-primary" target="_blank">
                                    <?php esc_html_e('Upgrade to Pro', 'magnine'); ?>
                                </a>
                            <?php } ?>
                            <button type="button" id="dashboard-changelog-button" class="button button-secondary dashboard-button dashboard-button-secondary">
                                <?php esc_html_e('Changelog', 'magnine'); ?>
                            </button>
                        </div>
                    </div>
                </div>
                <?php
                $current_tab = isset($_GET['tab']) ? sanitize_text_field(wp_unslash($_GET['tab'])) : 'dashboard';
                $current_tab = in_array($current_tab, array_keys($tabs), true) ? $current_tab : 'dashboard';
                $callback = $tabs[$current_tab]['callback'];
                call_user_func($callback);
                ?>
            </div><!--/.magnine-dashboard-area-->
        </div><!--/.wrap-->
        <div id="magnine-dashboard-offcanvas" class="magnine-dashboard-offcanvas">
            <div class="dialog-head">
                <h3><?php esc_html_e('Latest Updates', 'magnine'); ?></h3>
                <div id="dialog-close" class="dialog-close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <path d="M10.052 9.34082L16.277 3.11582C16.577 2.81582 16.577 2.36582 16.277 2.06582C15.977 1.76582 15.5269 1.76582 15.227 2.06582L9.00195 8.29082L2.77695 2.06582C2.47695 1.76582 2.02695 1.76582 1.72695 2.06582C1.42695 2.36582 1.42695 2.81582 1.72695 3.11582L7.95195 9.34082L1.72695 15.5658C1.42695 15.8658 1.42695 16.3158 1.72695 16.6158C1.87695 16.7658 2.02695 16.8408 2.25195 16.8408C2.47695 16.8408 2.62695 16.7658 2.77695 16.6158L9.00195 10.3908L15.227 16.6158C15.377 16.7658 15.602 16.8408 15.752 16.8408C15.902 16.8408 16.127 16.7658 16.277 16.6158C16.577 16.3158 16.577 15.8658 16.277 15.5658L10.052 9.34082Z" fill="#999999"/>
                    </svg>
                </div>
            </div>
            <div class="dialog-content">
                <?php
                $changelog = new MagNine_Changelog_Parser();
                // Fetch changelog data.
                $changelog_data = $changelog->get_items();

                if ($changelog_data) {
                    // Output the changelog data
                    echo '<div class="magnine-changelog">';
                    foreach ($changelog_data as $entry) {
                        echo '<div class="magnine-changelog-list-item">';
                        echo '<div class="magnine-changelog-list-head">';
                        echo '<h4 class="magnine-changelog-version">Version: ' . esc_html($entry['version']) . '</h4>';
                        echo '<p class="magnine-changelog-date">' . esc_html($entry['date']) . '</p>';
                        echo '</div>'; // magnine-changelog-list-head
                        // Display each change
                        echo '<div class="magnine-changelog-change">';
                        foreach ($entry['changes'] as $tag => $changes) {
                            echo '<div class="magnine-changelog-change-item item--' . esc_html(strtolower($tag)) . '">';
                            echo '<span class="magnine-changelog-change-type">' . esc_html($tag) . '</span>';
                            echo '<div class="magnine-changelog-change-list">';
                            foreach ($changes as $change) {
                                echo '<p class="magnine-changelog-change-desc">' . esc_html($change) . '</p>';
                            }
                            echo '</div>'; // magnine-changelog-change-list
                            echo '</div >'; // magnine-changelog-change-item
                        }
                        echo '</div>'; // magnine-changelog-change
                        echo '</div>'; // magnine-changelog-list-item
                    }
                    echo '</div>'; // magnine-changelog
                } else {
                    echo '<p>No changelog data available.</p>';
                }
                ?>
            </div>
        </div>
        <?php
    }
}
MagNine_Dashboard::instance();
