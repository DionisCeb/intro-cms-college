
<?php
   
    get_header();


    $url_video = get_field( 'accueil_video');
    ?>


<div class="wrapper">
    <div class="video">
        <iframe class="video_iframe" src="https://www.youtube.com/embed/<?php echo $url_video; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
    
        </iframe>
    </div>
</div>

<div style="border: solid 2px red; margin: 0 auto; width:50%;">
    <div style="border: solid 2px red; padding-bottom: 56.25%;">

    </div>
</div>   

<?php









$args = [
    'posts_per_page'    => -1,
    'post_type'     => 'produit',
];

// query
$the_query = new WP_Query( $args );

if( $the_query->have_posts() ):


?>

<ul class="catalog_container">
    <?php while( $the_query->have_posts() ) : $the_query->the_post();
    $champs = get_fields();
    // var_dump($champs);

    $produit_description = $champs['produit_description'];
    $produit_prix = $champs['produit_prix'];
    $produit_image = $champs['produit_image']?>
    <article class="carte-produit">
        <a href="<?php the_permalink(); ?>">
            <img src="<?= $produit_image; ?>" />
            <div class="lien_produit"><div class="title-produit"><?php the_title(); ?></div></div>
        </a>
    </article>
    <?php endwhile; ?>
</ul>
<?php endif; ?>

<?php wp_reset_query();   // Restore global post data stomped by the_post(). ?>

<?php get_footer();



 