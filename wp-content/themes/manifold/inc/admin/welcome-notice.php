<?php

/**
 * file for holding dashboard welcome page for theme
 */
if (!function_exists('manifold_is_plugin_installed')) {
    function manifold_is_plugin_installed($plugin_slug)
    {
        $plugin_path = WP_PLUGIN_DIR . '/' . $plugin_slug;
        return file_exists($plugin_path);
    }
}
if (!function_exists('manifold_is_plugin_activated')) {
    function manifold_is_plugin_activated($plugin_slug)
    {
        return is_plugin_active($plugin_slug);
    }
}
if (!function_exists('manifold_welcome_notice')) :
    function manifold_welcome_notice()
    {
        global $pagenow;
        $meta            = get_option('manifold-welcome-notice');
        $current_screen  = get_current_screen();

        if (is_admin() && !$meta) {
            if ($current_screen->id !== 'dashboard' && $current_screen->id !== 'themes') {
                return;
            }
            if (is_network_admin()) {
                return;
            }
            if (!current_user_can('manage_options')) {
                return;
            }
            $theme = wp_get_theme();

            if (is_child_theme()) {
                $theme = wp_get_theme()->parent();
            }
            $manifold_version = $theme->get('Version');
?>
            <div class="manifold-admin-notice notice notice-info is-dismissible content-install-plugin theme-info-notice">
                <div class="info-content">
                    <h5><span class="theme-name"><span><?php echo __('Welcome to Manifold', 'manifold'); ?></span></h5>
                    <h1><?php echo __('Congratulations! Manifold has been installed and ready to build your website!', 'manifold'); ?></h1>
                    <div class='admin-btn'>
                        <a href="<?php echo admin_url(); ?>themes.php?page=about-manifold" class="button admin-button info-button"><?php echo __('Explore Manifold', 'manifold'); ?></a>
                    </div>
                </div>
            </div>
    <?php
        }
    }
endif;
add_action('admin_notices', 'manifold_welcome_notice');

if (!function_exists('manifold_ignore_admin_notice')) :
    function manifold_ignore_admin_notice()
    {
        if (isset($_GET['manifold']) && $_GET['manifold-welcome-notice'] = 'true') {
            update_option('manifold-welcome-notice', true);
        }
    }
endif;
add_action('admin_init', 'manifold_ignore_admin_notice');
function manifold_dashboard_menu()
{
    add_theme_page(esc_html__('Manifold', 'manifold'), esc_html__('Manifold', 'manifold'), 'edit_theme_options', 'about-manifold', 'manifold_theme_info_display');
}
add_action('admin_menu', 'manifold_dashboard_menu');
function manifold_theme_info_display()
{ ?>
    <div class="dashboard-about-manifold">
        <h1> <?php echo __('Welcome to the Manifold - FSE WordPress Theme', 'manifold') ?></h1>
        <p><?php echo __("Introducing Manifold, the ultimate multipurpose WordPress theme designed to effortlessly adapt to any niche, including corporate business, startup ventures, consulting agencies, and professional firms. With its full site editing capabilities, Manifold puts the power of customization in your hands, allowing for unlimited adjustments to suit your brand's unique identity and requirements. Whether you're a seasoned professional or a budding entrepreneur, Manifold offers the flexibility and versatility needed to create a stunning online presence that stands out in any industry. Explore more about manifold at https://walkerwp.com/manifold-multipurpose-wordpress-theme/", 'manifold') ?></p>

        <h3 class="manifold-baisc-guideline-header"><?php echo __('Basic Theme Setup', 'manifold') ?></h3>
        <div class="manifold-baisc-guideline">
            <div class="featured-box">
                <ul>
                    <li><strong><?php echo __('Setup Header Layout:', 'manifold') ?></strong>
                        <ul>
                            <li> - <?php echo __('Go to Appearance -> Editor -> Template Parts -> Header:', 'manifold') ?></li>
                            <li> - <?php echo __('Click on Header -> Click on Edit (Icon) > Add or Remove Requirend block/content as your requirement.:', 'manifold') ?></li>
                            <li> - <?php echo __('Click on save to update your layout', 'manifold') ?></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="featured-box">
                <ul>
                    <li><strong><?php echo __('Setup Footer Layout:', 'manifold') ?></strong>
                        <ul>
                            <li> - <?php echo __('Go to Appearance -> Editor -> Template Parts -> Footer:', 'manifold') ?></li>
                            <li> - <?php echo __('click on Footer > Click on Edit (Icon) > Add or Remove Requirend block/content as your requirement.:', 'manifold') ?></li>
                            <li> - <?php echo __('Click on save to update your layout', 'manifold') ?></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="featured-box">
                <ul>
                    <li><strong><?php echo __('Setup Templates like Homepage/404/Search/Page/Single and more templates Layout:', 'manifold') ?></strong>
                        <ul>
                            <li> - <?php echo __('Go to Appearance -> Editor -> Templates:', 'manifold') ?></li>
                            <li> - <?php echo __('click on Template(You need to edit/update) > Click on Edit (Icon) > Add or Remove Requirend block/content as your requirement.:', 'manifold') ?></li>
                            <li> - <?php echo __('Click on save to update your layout', 'manifold') ?></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <h3><?php echo __('Required Plugins', 'manifold'); ?></h3>
        <p class="notice-text"><?php echo __('Please install and activate all recommended pluign to import the demo with "one click demo import" feature and unlock premium features!(For Pro version)', 'manifold') ?></p>
        <ul class="manifold-required-plugin">
            <li>
                <h4><?php echo __('1.  Walker Core', 'manifold'); ?>
                    <?php
                    if (manifold_is_plugin_activated('walker-core/walker-core.php')) {
                        echo __(': Plugin has been already activated!', 'manifold');
                    } elseif (manifold_is_plugin_installed('walker-core/walker-core.php')) {
                        echo __(': Plugin does not activated, Activate the plugin to use one click demo import and unlock premium features.', 'manifold');
                    } else {
                        echo ': <a href="' . get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=walker-core&TB_iframe=true&width=600&height=550">' . esc_html__('Install and Activate', 'manifold') . '</a>';
                    }
                    ?>
                </h4>
            </li>
            <li>
                <h4><?php echo __('2. Advanced Import - Need only to use "one click demo import" features', 'manifold'); ?>
                    <?php
                    if (manifold_is_plugin_activated('advanced-import/advanced-import.php')) {
                        echo __(': Plugin has been already activated!', 'manifold');
                    } elseif (manifold_is_plugin_installed('advanced-import/advanced-import.php')) {
                        echo __(': Plugin does not activated, Activate the plugin to use one click demo import feature.', 'manifold');
                    } else {
                        echo ': <a href="' . get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=advanced-import&TB_iframe=true&width=600&height=550">' . esc_html__('Install and Activate', 'manifold') . '</a>';
                    }
                    ?>
                </h4>
            </li>
        </ul>
        <div class="featured-list">
            <div class="half-col free-features">
                <h3><?php echo __('manifold Features (Free)', 'manifold') ?></h3>
                <ul>
                    <li><strong> - <?php echo __('Home Sections and Patterns', 'manifold') ?></strong>
                        <ul>
                            <li> <?php echo __('404 - Page Not Found pattern', 'manifold') ?></li>
                            <li> <?php echo __('Hero section pattern', 'manifold') ?></li>
                            <li> <?php echo __('Partners pattern', 'manifold') ?></li>
                            <li> <?php echo __('Our Services pattern', 'manifold') ?></li>
                            <li> <?php echo __('About Us section pattern', 'manifold') ?></li>
                            <li> <?php echo __('Why Us pattern', 'manifold') ?></li>
                            <li> <?php echo __('Banner section pattern', 'manifold') ?></li>
                            <li> <?php echo __('Team pattern', 'manifold') ?></li>
                            <li> <?php echo __('Testimonial pattern', 'manifold') ?></li>
                            <li> <?php echo __('Blog section pattern', 'manifold') ?></li>
                            <li> <?php echo __('FAQs pattern', 'manifold') ?></li>
                            <li> <?php echo __('Sidebar pattern', 'manifold') ?></li>
                        </ul>
                    </li>
                    <li> <strong>- <?php echo __('Our FSE Templates Ready', 'manifold') ?></strong>
                        <ul>
                            <li> <?php echo __('404 Template', 'manifold') ?></li>
                            <li> <?php echo __('Archive Template', 'manifold') ?></li>
                            <li> <?php echo __('Blank Template', 'manifold') ?></li>
                            <li> <?php echo __('Front Page Template', 'manifold') ?></li>
                            <li> <?php echo __('Left Sidebar Page Template', 'manifold') ?></li>
                            <li> <?php echo __('Page Template', 'manifold') ?></li>
                            <li> <?php echo __('Right Sidebar Page Template', 'manifold') ?></li>
                            <li> <?php echo __('Search Template', 'manifold') ?></li>
                            <li> <?php echo __('Left Sidebar Single Template', 'manifold') ?></li>
                            <li> <?php echo __('Single Template', 'manifold') ?></li>
                            <li> <?php echo __('Right Sidebar Single Template', 'manifold') ?></li>
                            <li> <?php echo __('Sitemap Template', 'manifold') ?></li>
                        </ul>
                    <li>
                    <li><strong> - <?php echo __('Header Layouts', 'manifold') ?></strong></li>
                    <li> <strong>- <?php echo __('Footer Layouts', 'manifold') ?></strong></li>
                    <li><strong> - <?php echo __('Multiple Beautiful Fonts Option', 'manifold') ?></strong></li>
                    <li> <strong>- <?php echo __('Multiple Styles Variations', 'manifold') ?></strong></li>
                </ul>
            </div>
            <div class="half-col pro-features">
                <h3><?php echo __('Premium Features', 'manifold') ?></h3>
                <ul>
                    <li><?php echo __('Including all free features and 20+ more Premium patterns (35 Patterns and 10+ Templates)', 'manifold') ?></strong></li>
                    <li><?php echo __('About Us Layout - 2 ', 'manifold') ?></li>
                    <li><?php echo __('Blog Parts Layout', 'manifold') ?></li>
                    <li><?php echo __('Call to Action Layout - 2', 'manifold') ?></li>
                    <li><?php echo __('Counter Layout - 2', 'manifold') ?></li>
                    <li><?php echo __('FAQ Layout Patterns - 2', 'manifold') ?></li>
                    <li><?php echo __('Features Patterns - 2', 'manifold') ?></li>
                    <li><?php echo __('Gallery Patterns', 'manifold') ?></li>
                    <li><?php echo __('Newsletter Patterns', 'manifold') ?></li>
                    <li><?php echo __('Partners Layout', 'manifold') ?></li>
                    <li><?php echo __('Pricing Layout Section - 2', 'manifold') ?></li>
                    <li><?php echo __('Services Section - 2', 'manifold') ?></li>
                    <li><?php echo __('Team Section', 'manifold') ?></li>
                    <li><?php echo __('Testimonials Layout', 'manifold') ?></li>
                </ul>
            </div>
        </div>
    </div>
<?php
}
