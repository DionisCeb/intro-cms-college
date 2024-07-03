<?php

/**
 * Title: Testimonial
 * Slug: manifold/testimonial
 * Categories: manifold-template
 */
$manifold_testimonial_url = get_template_directory_uri();
$manifold_testimonial_img = array(
    $manifold_testimonial_url . '/assets/images/testimonial-waves.png',
    $manifold_testimonial_url . '/assets/images/person_1.jpg',
    $manifold_testimonial_url . '/assets/images/person_2.jpg',
    $manifold_testimonial_url . '/assets/images/person_3.jpg'
)
?>
<!-- wp:group {"style":{"background":{"backgroundImage":{"url":"<?php echo esc_url($manifold_testimonial_img[0]) ?>","id":62,"source":"file","title":"testimonial-waves"},"backgroundPosition":"50% 100%","backgroundSize":"cover","backgroundRepeat":"no-repeat"},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"110px","bottom":"110px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:110px;padding-right:var(--wp--preset--spacing--40);padding-bottom:110px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"constrained","wideSize":"1180px"}} -->
    <div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"30px","left":"50px"}}}} -->
        <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"30px"}}} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":12,"width":"70px","height":"70px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100px"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($manifold_testimonial_img[2]) ?>" alt="" class="wp-image-12" style="border-radius:100px;object-fit:cover;width:70px;height:70px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                        <h3 class="wp-block-heading has-white-color has-text-color has-link-color"><?php esc_html_e('Anjelique', 'manifold') ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                        <p class="has-white-color has-text-color has-link-color"><?php esc_html_e('Customer', 'manifold') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"normal"} -->
                    <p class="has-foreground-alt-color has-text-color has-link-color has-normal-font-size"><?php esc_html_e("Working with Master Home Renovation was a pleasure from start to finish. Their team's expertise and creativity outdated spaces into modern, functional, and beautiful areas.", 'manifold') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"medium"} -->
                    <p class="has-secondary-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('★★★★★', 'manifold') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"30px"}}} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":18,"width":"70px","height":"70px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100px"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($manifold_testimonial_img[1]) ?>" alt="" class="wp-image-18" style="border-radius:100px;object-fit:cover;width:70px;height:70px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                        <h3 class="wp-block-heading has-white-color has-text-color has-link-color"><?php esc_html_e('Benjamin', 'manifold') ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                        <p class="has-white-color has-text-color has-link-color"><?php esc_html_e('Customer', 'manifold') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"normal"} -->
                    <p class="has-foreground-alt-color has-text-color has-link-color has-normal-font-size"><?php esc_html_e("Working with Master Home Renovation was a pleasure from start to finish. Their team's expertise and creativity outdated spaces into modern, functional, and beautiful areas.", 'manifold') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"medium"} -->
                    <p class="has-secondary-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('★★★★★', 'manifold') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"30px"}}} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":13,"width":"70px","height":"70px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100px"},"layout":{"selfStretch":"fit","flexSize":null}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($manifold_testimonial_img[3]) ?>" alt="" class="wp-image-13" style="border-radius:100px;object-fit:cover;width:70px;height:70px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                        <h3 class="wp-block-heading has-white-color has-text-color has-link-color"><?php esc_html_e('Cristian Jones', 'manifold') ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                        <p class="has-white-color has-text-color has-link-color"><?php esc_html_e('Customer', 'manifold') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"normal"} -->
                    <p class="has-foreground-alt-color has-text-color has-link-color has-normal-font-size"><?php esc_html_e("Working with Master Home Renovation was a pleasure from start to finish. Their team's expertise and creativity outdated spaces into modern, functional, and beautiful areas.", 'manifold') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"medium"} -->
                    <p class="has-secondary-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('★★★★★', 'manifold') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->