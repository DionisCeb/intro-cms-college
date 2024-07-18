<?php

$champs = get_fields();
//var_dump($champs);

 $produit_description = $champs['produit_description'];
 $produit_prix = $champs['produit_prix'];
 $produit_image = $champs['produit_image']['url'];

?>
 <article>
    
    <div class="wrapper">
        <h2>
            <?php the_title(); ?>
        </h2>
        <div>
            <?php if( $produit_description ) : ?>
                <p><?php echo  $produit_description; ?></p>
            <?php endif; ?>
            <?php if( $produit_image ) : ?>
            <div>
                <img src="<?php echo $produit_image; ?>" alt="<?php  the_title(); ?>">
            </div>
            <?php endif; ?>
            <?php if( $produit_prix ) : ?>
                <p><?php echo  $produit_prix; ?></p>
            <?php endif; ?>
        </div>
    </div>
 </article>