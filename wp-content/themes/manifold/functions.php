<?php
if (!defined('MANIFOLD_VERSION')) {
    // Replace the version number of the theme on each release.
    define('MANIFOLD_VERSION', wp_get_theme()->get('Version'));
}
define('MANIFOLD_DEBUG', defined('WP_DEBUG') && WP_DEBUG === true);
define('MANIFOLD_DIR', trailingslashit(get_template_directory()));
define('MANIFOLD_URL', trailingslashit(get_template_directory_uri()));
if (!function_exists('manifold_support')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * @since walker_fse 1.0.0
     *
     * @return void
     */
    function manifold_support()
    {
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');
        // Add support for block styles.
        add_theme_support('wp-block-styles');
        add_theme_support('post-thumbnails');
        // Enqueue editor styles.
        add_editor_style('style.css');
    }

endif;
add_action('after_setup_theme', 'manifold_support');

function manifold_style()
{
    wp_enqueue_style(
        'manifold-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'manifold_style');

/**
 * Enqueue assets scripts for both backend and frontend
 */
function manifold_block_style()
{
    wp_enqueue_style('manifold-block-style', get_template_directory_uri() . '/assets/css/block.css', array());
}
add_action('enqueue_block_assets', 'manifold_block_style');
function manifold_admin_style()
{
    $hello_notice_current_screen = get_current_screen();
    if (!empty($_GET['page']) && 'about-manifold' === $_GET['page'] || $hello_notice_current_screen->id === 'themes') {
        wp_enqueue_style('manifold-admin-style', get_template_directory_uri() . '/assets/css/admin-style.css', array(), MANIFOLD_VERSION, 'all');
    }
}
add_action('admin_enqueue_scripts', 'manifold_admin_style');

/**
 * Load core file.
 */
require_once get_template_directory() . '/inc/core/init.php';

/**
 * Load welcome page file.
 */
require_once get_template_directory() . '/inc/admin/welcome-notice.php';

if (!function_exists('manifold_excerpt_more_postfix')) {
    function manifold_excerpt_more_postfix($more)
    {
        if (is_admin()) {
            return $more;
        }
        return '...';
    }
    add_filter('excerpt_more', 'manifold_excerpt_more_postfix');
}
