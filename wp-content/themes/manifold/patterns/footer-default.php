<?php

/**
 * Title: Footer Default
 * Slug: manifold/footer-default
 * Categories: manifold-template
 */
$manifold_footer_url = get_template_directory_uri();
$manifold_footer_img = array(
    $manifold_footer_url . '/assets/images/footer-waves.png'
)
?>
<!-- wp:group {"style":{"background":{"backgroundImage":{"url":"<?php echo esc_url($manifold_footer_img[0]) ?>","id":87,"source":"file","title":"footer-waves"},"backgroundPosition":"50% 100%","backgroundSize":"contain","backgroundRepeat":"no-repeat"},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"100px","bottom":"100px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-right:var(--wp--preset--spacing--40);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"85px"}},"layout":{"type":"constrained","wideSize":"1180px"}} -->
    <div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"30px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                <h2 class="wp-block-heading has-white-color has-text-color has-link-color"><?php esc_html_e("Enough Talk, Let's Build Something Togeather", 'manifold') ?></h2>
                <!-- /wp:heading -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button-hover-light"} -->
                    <div class="wp-block-button is-style-button-hover-light"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Free Join Us', 'manifold') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:separator {"backgroundColor":"Light","className":"is-style-wide"} -->
        <hr class="wp-block-separator has-text-color has-light-color has-alpha-channel-opacity has-light-background-color has-background is-style-wide" />
        <!-- /wp:separator -->

        <!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"80px"}}}} -->
            <div class="wp-block-columns"><!-- wp:column {"width":"25%","style":{"spacing":{"blockGap":"30px"}}} -->
                <div class="wp-block-column" style="flex-basis:25%"><!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","className":"manifold-text-decoration-none","fontSize":"x-large"} /-->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
                    <p class="has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'manifold') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
                    <p class="has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Proudly Powered by WordPress Theme by WalkerWP', 'manifold') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"top","width":"25%","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"spacing":{"blockGap":"30px"}},"textColor":"foreground-alt"} -->
                <div class="wp-block-column is-vertically-aligned-top has-foreground-alt-color has-text-color has-link-color" style="flex-basis:25%"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
                    <h3 class="wp-block-heading has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Product', 'manifold') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:list {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"className":"manifold-list-style-none"} -->
                    <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0" class="manifold-list-style-none"><!-- wp:list-item {"className":"manifold-list-style-none manifold-text-decoration-none"} -->
                        <li class="manifold-list-style-none manifold-text-decoration-none"><a href="#"><?php esc_html_e('Cozy Addons for Elementor', 'manifold') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"className":"manifold-list-style-none manifold-text-decoration-none"} -->
                        <li class="manifold-list-style-none manifold-text-decoration-none"><a href="#"><?php esc_html_e('Cozy Essential Addons', 'manifold') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"className":"manifold-list-style-none manifold-text-decoration-none"} -->
                        <li class="manifold-list-style-none manifold-text-decoration-none"><a href="#"><?php esc_html_e('FotaWP', 'manifold') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"className":"manifold-list-style-none manifold-text-decoration-none"} -->
                        <li class="manifold-list-style-none manifold-text-decoration-none"><a href="#"><?php esc_html_e('Hello Agency', 'manifold') ?></a></li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":"25%","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"spacing":{"blockGap":"30px"}},"textColor":"foreground-alt"} -->
                <div class="wp-block-column has-foreground-alt-color has-text-color has-link-color" style="flex-basis:25%"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading"><?php esc_html_e('Quick Links', 'manifold') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:list {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"className":"manifold-list-style-none"} -->
                    <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0" class="manifold-list-style-none"><!-- wp:list-item {"className":"manifold-list-style-none manifold-text-decoration-none"} -->
                        <li class="manifold-list-style-none manifold-text-decoration-none"><a href="#"><?php esc_html_e('About Us', 'manifold') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"className":"manifold-list-style-none manifold-text-decoration-none"} -->
                        <li class="manifold-list-style-none manifold-text-decoration-none"><a href="#"><?php esc_html_e('Services', 'manifold') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"className":"manifold-list-style-none manifold-text-decoration-none"} -->
                        <li class="manifold-list-style-none manifold-text-decoration-none"><a href="#"><?php esc_html_e('Blog', 'manifold') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"className":"manifold-list-style-none manifold-text-decoration-none"} -->
                        <li class="manifold-list-style-none manifold-text-decoration-none"><a href="#"><?php esc_html_e('Contact Us', 'manifold') ?></a></li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":"25%","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"spacing":{"blockGap":"30px"}},"textColor":"foreground-alt"} -->
                <div class="wp-block-column has-foreground-alt-color has-text-color has-link-color" style="flex-basis:25%"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading"><?php esc_html_e('Services', 'manifold') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:list {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"className":"manifold-list-style-none"} -->
                    <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0" class="manifold-list-style-none"><!-- wp:list-item {"className":"manifold-list-style-none manifold-text-decoration-none"} -->
                        <li class="manifold-list-style-none manifold-text-decoration-none"><a href="#"><?php esc_html_e('Cozy Addons fo Elementor', 'manifold') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"className":"manifold-list-style-none manifold-text-decoration-none"} -->
                        <li class="manifold-list-style-none manifold-text-decoration-none"><a href="#"><?php esc_html_e('Cozy Essential Addons', 'manifold') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"className":"manifold-list-style-none manifold-text-decoration-none"} -->
                        <li class="manifold-list-style-none manifold-text-decoration-none"><a href="#"><?php esc_html_e('FotaWP', 'manifold') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"className":"manifold-list-style-none manifold-text-decoration-none"} -->
                        <li class="manifold-list-style-none manifold-text-decoration-none"><a href="#"><?php esc_html_e('Hello Agency', 'manifold') ?></a></li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","align":"center","className":"is-style-logos-only","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
            <ul class="wp-block-social-links aligncenter has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                <!-- wp:social-link {"url":"#","service":"instagram"} /-->

                <!-- wp:social-link {"url":"#","service":"x"} /-->

                <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
            </ul>
            <!-- /wp:social-links -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->