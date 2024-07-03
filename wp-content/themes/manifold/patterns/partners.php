<?php

/**
 * Title: Partners
 * Slug: manifold/partners
 * Categories:manifold-template
 */
$manifold_partner_url = get_template_directory_uri();
$manifold_partner_img = array(
    $manifold_partner_url . '/assets/images/logo_1.png',
    $manifold_partner_url . '/assets/images/logo_2.png',
    $manifold_partner_url . '/assets/images/logo_3.png',
    $manifold_partner_url . '/assets/images/logo_4.png',
    $manifold_partner_url . '/assets/images/logo_5.png',
)
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"70px","bottom":"70px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"10px"}},"backgroundColor":"white","layout":{"type":"constrained","wideSize":"1180px"}} -->
<div class="wp-block-group has-white-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:70px;padding-right:var(--wp--preset--spacing--40);padding-bottom:70px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"30px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0"><!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:image {"id":21,"width":"200px","height":"50px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($manifold_partner_img[0]) ?>" alt="" class="wp-image-21" style="object-fit:contain;width:200px;height:50px" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:image {"id":22,"width":"200px","height":"50px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($manifold_partner_img[1]) ?>" alt="" class="wp-image-22" style="object-fit:contain;width:200px;height:50px" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:image {"id":23,"width":"200px","height":"50px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($manifold_partner_img[2]) ?>" alt="" class="wp-image-23" style="object-fit:contain;width:200px;height:50px" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:image {"id":24,"width":"200px","height":"50px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($manifold_partner_img[3]) ?>" alt="" class="wp-image-24" style="object-fit:contain;width:200px;height:50px" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:image {"id":25,"width":"200px","height":"50px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($manifold_partner_img[4]) ?>" alt="" class="wp-image-25" style="object-fit:contain;width:200px;height:50px" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->