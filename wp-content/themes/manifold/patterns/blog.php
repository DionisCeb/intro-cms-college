<?php

/**
 * Title: Blog
 * Slug: manifold/blog
 * Categories: manifold-template
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"120px","bottom":"120px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"60px","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"Light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-light-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:120px;padding-right:var(--wp--preset--spacing--40);padding-bottom:120px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"30px"}},"layout":{"type":"constrained","wideSize":"768px"}} -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
        <h4 class="wp-block-heading has-text-align-center has-secondary-color has-text-color has-link-color" style="text-transform:uppercase"><?php esc_html_e('-Our Blog', 'manifold') ?></h4>
        <!-- /wp:heading -->

        <!-- wp:heading {"textAlign":"center"} -->
        <h2 class="wp-block-heading has-text-align-center"><?php esc_html_e('Latest News and Insight', 'manifold') ?></h2>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained","wideSize":"1180px"}} -->
    <div class="wp-block-group"><!-- wp:query {"queryId":18,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
        <div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"className":"manifold-blog-group","layout":{"inherit":false}} -->
            <div class="wp-block-group manifold-blog-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image {"isLink":true,"width":"370px","height":"280px","style":{"border":{"radius":"10px"}},"className":"manifold-blog-img"} /-->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
                <div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black"} /-->

                    <!-- wp:post-date /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black","className":"manifold-text-decoration-none"} /-->

                <!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":15,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} /-->

                <!-- wp:read-more {"content":"Read More","style":{"elements":{"link":{"color":{"text":"var:preset|color|border"}}},"border":{"bottom":{"color":"var:preset|color|border","width":"1px"},"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}},"textColor":"border"} /-->
            </div>
            <!-- /wp:group -->
            <!-- /wp:post-template -->
        </div>
        <!-- /wp:query -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->