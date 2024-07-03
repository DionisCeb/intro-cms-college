<?php

/**
 * Title: Hero Section
 * Slug: manifold/hero-section
 * Categories: manifold-template
 */
$manifold_hero_url = get_template_directory_uri();
$manifold_hero_img = array(
    $manifold_hero_url . '/assets/images/banner.png'
);
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"80px","bottom":"80px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"gradient":"primary-gradient","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-gradient-gradient-background has-background" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:var(--wp--preset--spacing--40);padding-bottom:80px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"constrained","wideSize":"1180px"}} -->
    <div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"30px","left":"30px"}}}} -->
        <div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"50px"}}} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                <h1 class="wp-block-heading has-white-color has-text-color has-link-color"><?php esc_html_e('Empowering Brands, Crafting Digital Materpiece with manifold.', 'manifold') ?></h1>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"normal"} -->
                <p class="has-white-color has-text-color has-link-color has-normal-font-size"><?php esc_html_e('Establishing and maintaining a strong online presence through websites, social media, and other digital channels.', 'manifold') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons -->
                <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button-hover-light"} -->
                    <div class="wp-block-button is-style-button-hover-light"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Download Free', 'manifold') ?></a></div>
                    <!-- /wp:button -->

                    <!-- wp:button {"textColor":"white","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"className":"is-style-outline"} -->
                    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-white-color has-text-color has-link-color wp-element-button"><?php esc_html_e('Request Demo', 'manifold') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":17,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img src="<?php echo esc_url($manifold_hero_img[0]) ?>" alt="" class="wp-image-17" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->