<?php

/**
 * Title: Team
 * Slug: manifold/team
 * Categories: manifold-template
 */
$manifold_team_url = get_template_directory_uri();
$manifold_team_img = array(
    $manifold_team_url . '/assets/images/person_1.jpg',
    $manifold_team_url . '/assets/images/person_2.jpg',
    $manifold_team_url . '/assets/images/person_3.jpg'
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"80px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:80px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"blockGap":"90px"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"30px"}},"layout":{"type":"constrained","wideSize":"786px"}} -->
        <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"textTransform":"uppercase"}},"textColor":"secondary"} -->
            <h4 class="wp-block-heading has-text-align-center has-secondary-color has-text-color has-link-color" style="text-transform:uppercase"><?php esc_html_e('- Dedicated Team', 'manifold') ?></h4>
            <!-- /wp:heading -->

            <!-- wp:heading {"textAlign":"center"} -->
            <h2 class="wp-block-heading has-text-align-center"><?php esc_html_e('Team Synergy: A Decade of Resilience and Achievement', 'manifold') ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained","wideSize":"1180px","justifyContent":"center"}} -->
        <div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}}} -->
            <div class="wp-block-columns" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"width":"354px","style":{"spacing":{"blockGap":"20px","padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"className":"manifold-team-card is-style-default"} -->
                <div class="wp-block-column manifold-team-card is-style-default" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:354px"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"100px"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-bottom:100px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"id":54,"width":"350px","height":"400px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
                        <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($manifold_team_img[0]) ?>" alt="" class="wp-image-54" style="border-radius:10px;object-fit:cover;width:350px;height:400px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"15px","margin":{"top":"0","bottom":"0"}}},"className":"manifold-team-card-group","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group manifold-team-card-group" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph -->
                            <p><?php esc_html_e('Web Designer', 'manifold') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:heading {"level":3} -->
                            <h3 class="wp-block-heading"><?php esc_html_e('Daniel Wilson', 'manifold') ?></h3>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
                            <p class="has-foreground-color has-text-color has-link-color"><?php esc_html_e('Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'manifold') ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":"354px","style":{"spacing":{"blockGap":"20px"}},"className":"manifold-team-card is-style-default"} -->
                <div class="wp-block-column manifold-team-card is-style-default" style="flex-basis:354px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"100px","bottom":"100px"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:100px;margin-bottom:100px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"id":8,"width":"350px","height":"400px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
                        <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($manifold_team_img[1]) ?>" alt="" class="wp-image-8" style="border-radius:10px;object-fit:cover;width:350px;height:400px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"15px"}},"className":"manifold-team-card-group","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group manifold-team-card-group"><!-- wp:paragraph -->
                            <p><?php esc_html_e('HR (Human Resource)', 'manifold') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:heading {"level":3} -->
                            <h3 class="wp-block-heading"><?php esc_html_e('Sophia Johnson', 'manifold') ?></h3>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
                            <p class="has-foreground-color has-text-color has-link-color"><?php esc_html_e('Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'manifold') ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":"354px","style":{"spacing":{"blockGap":"20px"}},"className":"manifold-team-card is-style-default"} -->
                <div class="wp-block-column manifold-team-card is-style-default" style="flex-basis:354px"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"100px"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-bottom:100px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"id":9,"width":"350px","height":"400px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px"}},"className":"is-style-default"} -->
                        <figure class="wp-block-image size-full is-resized has-custom-border is-style-default"><img src="<?php echo esc_url($manifold_team_img[2]) ?>" alt="" class="wp-image-9" style="border-radius:10px;object-fit:cover;width:350px;height:400px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"15px"}},"className":"manifold-team-card-group","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group manifold-team-card-group"><!-- wp:paragraph -->
                            <p><?php esc_html_e('Graphic Designer', 'manifold') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:heading {"level":3} -->
                            <h3 class="wp-block-heading"><?php esc_html_e('James Warren', 'manifold') ?></h3>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
                            <p class="has-foreground-color has-text-color has-link-color"><?php esc_html_e('Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'manifold') ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
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
</div>
<!-- /wp:group -->