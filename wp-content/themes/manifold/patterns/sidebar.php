<?php

/**
 * Title: Sidebar
 * Slug: manifold/sidebar
 * Categories: manifold-template
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"30px","bottom":"30px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"10px"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-background-color has-background" style="border-radius:10px;margin-top:0;margin-bottom:0;padding-top:30px;padding-right:var(--wp--preset--spacing--40);padding-bottom:30px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:search {"label":"Search","width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"medium"} /-->

    <!-- wp:group {"style":{"spacing":{"blockGap":"30px"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading {"level":4} -->
        <h4 class="wp-block-heading"><?php esc_html_e('Latest Blogs', 'manifold') ?></h4>
        <!-- /wp:heading -->

        <!-- wp:query {"queryId":20,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
        <div class="wp-block-query"><!-- wp:post-template -->
            <!-- wp:columns {"className":"manifold-sidebar-blog"} -->
            <div class="wp-block-columns manifold-sidebar-blog"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"150px"} /--></div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:post-title {"level":6,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black","className":"manifold-text-decoration-none"} /--></div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
            <!-- /wp:post-template -->
        </div>
        <!-- /wp:query -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","layout":{"type":"constrained"}} -->
    <div class="wp-block-group has-secondary-color has-text-color has-link-color"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black"} -->
        <h4 class="wp-block-heading has-black-color has-text-color has-link-color"><?php esc_html_e('Categories', 'manifold') ?></h4>
        <!-- /wp:heading -->

        <!-- wp:categories {"showPostCounts":true,"className":"manifold-list-style-none manifold-text-decoration-none","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} /-->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->