<?php

/**
 * Title: About Us
 * Slug: manifold/about-us
 * Categories: manifold-template
 */
$manifold_about_url = get_template_directory_uri();
$manifold_about_img = array(
    $manifold_about_url . '/assets/images/banner-1.jpg',
    $manifold_about_url . '/assets/images/banner-2.jpg'
);
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"Light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-light-background-color has-background" style="margin-top:0;margin-bottom:0"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"120px","bottom":"120px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"100px"}},"layout":{"type":"constrained","wideSize":"1180px"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:120px;padding-right:var(--wp--preset--spacing--40);padding-bottom:120px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"120px","left":"120px"},"padding":{"top":"0px","bottom":"0px","left":"0","right":"0"}}}} -->
        <div class="wp-block-columns" style="padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($manifold_about_img[0]) ?>","id":6,"dimRatio":0,"customOverlayColor":"#b6b5b3","isUserOverlayColor":true,"isDark":false,"style":{"border":{"radius":"10px"}},"className":"manifold-aboutus-img","layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light manifold-aboutus-img" style="border-radius:10px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#b6b5b3"></span><img class="wp-block-cover__image-background wp-image-6" alt="" src="<?php echo esc_url($manifold_about_img[0]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"textAlign":"left","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"textTransform":"uppercase"}},"textColor":"secondary"} -->
                <h4 class="wp-block-heading has-text-align-left has-secondary-color has-text-color has-link-color" style="text-transform:uppercase"><?php esc_html_e('- Our Mission', 'manifold') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:heading -->
                <h2 class="wp-block-heading"><?php esc_html_e('Company Mission and Vision is to exceed expectations', 'manifold') ?></h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Far far away, behind the word mountains, far from the countries Vocalic and Consonantal, there live the blind texts. Separated they live in Bookmarks grove right at the coast of the Semantics, a large language ocean.', 'manifold') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"120px","left":"120px"},"padding":{"top":"0px","bottom":"0px","left":"0","right":"0"}}}} -->
        <div class="wp-block-columns" style="padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0"><!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"textAlign":"left","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"textTransform":"uppercase"}},"textColor":"secondary"} -->
                <h4 class="wp-block-heading has-text-align-left has-secondary-color has-text-color has-link-color" style="text-transform:uppercase"><?php esc_html_e('- Our vision', 'manifold') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:heading -->
                <h2 class="wp-block-heading"><?php esc_html_e('Luxury amenities comestandard in every office', 'manifold') ?></h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Far far away, behind the word mountains, far from the countries Vocalic and Consonantal, there live the blind texts. Separated they live in Bookmarks grove right at the coast of the Semantics, a large language ocean.', 'manifold') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($manifold_about_img[1]) ?>","id":7,"dimRatio":0,"customOverlayColor":"#3d607c","isUserOverlayColor":true,"isDark":false,"style":{"border":{"radius":"10px"}},"className":"manifold-aboutus-img","layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light manifold-aboutus-img" style="border-radius:10px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#3d607c"></span><img class="wp-block-cover__image-background wp-image-7" alt="" src="<?php echo esc_url($manifold_about_img[1]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->