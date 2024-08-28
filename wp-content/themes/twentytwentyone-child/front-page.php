
<?php
   
    get_header();









$args = [
    'posts_per_page'    => -1,
    'post_type'     => 'chaise',
];

// arguments pour la requête WP_Query
$the_query = new WP_Query( $args );

// si la requête a retourné des posts
if( $the_query->have_posts() ):


?>

<header class="titre-catalogue">
    <h1>Nous aidons à créer des lieux inspirants où les gens aiment être.</h1>
</header>

<div class="catalog_container">
    <?php while( $the_query->have_posts() ) : $the_query->the_post();
    $champs = get_fields();

    $chaise_titre = $champs['chaise_titre'];
    $chaise_anee = $champs['chaise_anee'];
    $chaise_designer = $champs['chaise_designer'];
    $chaise_prix = $champs['chaise_prix'];
    $chaise_image = $champs['chaise_image']?>
    
    <div class="carte-chaise">
        <div class="chaise-image">
            <a href="<?php the_permalink(); ?>">
                <img src="<?= $chaise_image; ?>" />
            </a>
        </div>
        <div class="chaise-titre">
            <h1><?php echo $chaise_titre; ?></h1>
        </div>
        <div class="chaise-designer">
            <p><?php echo $chaise_designer; ?></p>
        </div>
        <div class="link-wrapper">
            <a class="link-btn" href="<?php the_permalink(); ?>">Voir plus</a>
        </div>
    </div>
    <?php endwhile; ?>
</div>
<?php endif; ?>

<?php wp_reset_query(); ?>

<?php get_footer();



 