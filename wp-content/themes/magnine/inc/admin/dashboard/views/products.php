<div class="magnine-dashboard-content products-page">
    <div class="dashboard-content-panel">
        <div class="postbox magnine-quick-settings">
            <div class="postbox-header">
            <h2 class="hndle ui-sortable-handle">
                <?php esc_html_e('Themes', 'magnine'); ?>
            </h2>
            </div>
            <div class="inside inside__themes">
                <?php
                $themes_data = array(
                    'newsarc' => array(
                        'name' => 'NewsArc',
                        'slug' => 'newsarc',
                        'image' => MAGNINE_PARENT_URL . '/inc/admin/dashboard/images/newsarc.webp',
                        'description' => 'NewsArc is a revolutionary magazine theme designed to boost engagement and user retention.',
                        'learn_more_link' => 'https://wpinterface.com/themes/newsarc',
                        'live_demo_link' => 'https://wpinterface.com/themes/newsarc/#demo-links',
                    ),
                    'newsmarks' => array(
                        'name' => 'NewsMarks',
                        'slug' => 'newsmarks',
                        'image' => MAGNINE_PARENT_URL . '/inc/admin/dashboard/images/newsmarks.webp',
                        'description' => 'NewsMarks is a flexible Modern WordPress theme ideal for news sites, blogs, and magazines.',
                        'learn_more_link' => 'https://wpinterface.com/themes/newsmarks',
                        'live_demo_link' => 'https://wpinterface.com/themes/newsmarks/#demo-links',
                    ),
                    'newsmass' => array(
                        'name' => 'NewsMass',
                        'slug' => 'newsmass',
                        'image' => MAGNINE_PARENT_URL . '/inc/admin/dashboard/images/newsmass.webp',
                        'description' => 'NewsMass offers full customization with widgets, a live customizer editor, and custom Elementor addons.',
                        'learn_more_link' => 'https://wpinterface.com/themes/newsmass',
                        'live_demo_link' => 'https://wpinterface.com/themes/newsmass/#demo-links',
                    ),
                    'blogmarks' => array(
                        'name' => 'BlogMarks',
                        'slug' => 'blogmarks',
                        'image' => MAGNINE_PARENT_URL . '/inc/admin/dashboard/images/blogmarks.webp',
                        'description' => 'BlogMarks is a sleek, elegant, and versatile WordPress blog theme, featuring a minimalistic layout that emphasizes simplicity and readability.',
                        'learn_more_link' => 'https://wpinterface.com/themes/blogmarks',
                        'live_demo_link' => 'https://wpinterface.com/themes/blogmarks/#demo-links',
                    ),
                );
                foreach ($themes_data as $theme_info) :
                    $theme_slug = $theme_info['slug'];
                    ?>
                    <div class="item item-<?php echo esc_attr($theme_slug); ?>">
                        <img class="<?php echo esc_attr($theme_slug); ?>-logo"
                             src="<?php echo esc_url($theme_info['image']); ?>"
                             alt="<?php echo esc_attr($theme_info['name']); ?>">
                        <div class="content">
                            <h3><?php echo esc_html($theme_info['name']); ?></h3>
                            <p><?php echo esc_html($theme_info['description']); ?></p>
                        </div>
                        <div class="cta">
                            <div class="cta-text">
                                <a href="<?php echo esc_url($theme_info['learn_more_link']); ?>"
                                   target="_blank"><?php esc_html_e('Learn More', 'magnine'); ?></a>
                                <a href="<?php echo esc_url($theme_info['live_demo_link']); ?>"
                                   target="_blank"><?php esc_html_e('Live demo', 'magnine'); ?></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="postbox magnine-quick-settings">
            <div class="postbox-header">
            <h2 class="hndle ui-sortable-handle">
                <?php esc_html_e('Plugins', 'magnine'); ?>
            </h2>
            </div>
            <div class="inside inside__plugins">
                <?php
                $plugins_data = array(

                    'elementor' => array(
                        'name' => 'Elementor Website Builder',
                        'file' => 'elementor/elementor.php',
                        'slug' => 'elementor',
                        'image' => MAGNINE_PARENT_URL . '/inc/admin/dashboard/images/elementor-banner.webp',
                        'description' => 'Elementor, the leading WordPress website builder,empowers you to build professional, pixel-perfect websites. With an intuitive, no-code drag and drop interface, you can build any website.',
                        'learn_more_link' => 'https://wordpress.org/plugins/elementor/',
                        'live_demo_link' => 'https://elementor.com/',
                    ),

                    'one-click-demo-import' => array(
                        'name' => 'One Click Demo Import',
                        'file' => 'one-click-demo-import/one-click-demo-import.php',
                        'slug' => 'one-click-demo-import',
                        'image' => MAGNINE_PARENT_URL . '/inc/admin/dashboard/images/ocdi.webp',
                        'description' => '"One Click Demo Import" is a WordPress plugin that effortlessly imports demo content, themes, and settings with a single click, simplifying site setup.',
                        'learn_more_link' => 'https://wordpress.org/plugins/one-click-demo-import/',
                        'live_demo_link' => 'https://ocdi.com/',
                    ),

                    'mailchimp-for-wp' => array(
                        'name' => 'MC4WP: Mailchimp for WordPress',
                        'file' => 'mailchimp-for-wp/mailchimp-for-wp.php',
                        'slug' => 'mailchimp-for-wp',
                        'image' => MAGNINE_PARENT_URL . '/inc/admin/dashboard/images/mc4wp.webp',
                        'description' => 'This plugin effortlessly creates stunning, accessible sign-up forms and integrates seamlessly with your existing WordPress forms, including contact, comment, and checkout forms.',
                        'learn_more_link' => 'https://wordpress.org/plugins/mailchimp-for-wp/',
                        'live_demo_link' => 'https://www.mc4wp.com/',
                    ),

                );
                foreach ($plugins_data as $plugin_info) :
                    $plugin_file = $plugin_info['file'];
                    $plugin_slug = $plugin_info['slug'];
                    $is_plugin_installed = magnine_is_plugin_installed($plugin_file);
                    $is_plugin_activated = is_plugin_active($plugin_file);
                    ?>
                    <div class="item item-<?php echo $plugin_slug; ?>">
                        <img class="<?php echo $plugin_slug; ?>-logo"
                             src="<?php echo $plugin_info['image']; ?>"
                             alt="<?php echo $plugin_info['name']; ?>">
                        <div class="content">
                            <h3><?php echo $plugin_info['name']; ?></h3>
                            <p><?php echo $plugin_info['description']; ?></p>
                        </div>
                        <div class="cta">
                            <div class="cta-text">
                                <a href="<?php echo $plugin_info['learn_more_link']; ?>"
                                   target="_blank"><?php esc_html_e('Learn More', 'magnine'); ?></a>
                                <a href="<?php echo $plugin_info['live_demo_link']; ?>"
                                   target="_blank"><?php esc_html_e('Plugin Page', 'magnine'); ?></a>
                            </div>
                            <div class="cta-button">
                                <?php if ($is_plugin_installed) : ?>
                                    <?php if ($is_plugin_activated) : ?>
                                        <span class="activated"><?php esc_html_e('Activated', 'magnine'); ?></span>
                                    <?php else : ?>
                                        <a href="#" class="button button-primary dashboard-button dashboard-button-primary activate-plugin" data-plugin="<?php echo $plugin_file; ?>" data-slug="<?php echo $plugin_slug; ?> "><?php esc_html_e('Activate', 'magnine'); ?></a>
                                    <?php endif; ?>
                                <?php else : ?>
                                    <a href="#" class="button button-secondary dashboard-button dashboard-button-secondary install-plugin" data-plugin="<?php echo $plugin_file; ?>" data-slug="<?php echo $plugin_slug; ?> "><?php esc_html_e('Install', 'magnine'); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
