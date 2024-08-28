<?php

$champs = get_fields();
//var_dump($champs);
 $chaise_titre = $champs['chaise_titre'];
 $chaise_anee = $champs['chaise_anee'];
 $chaise_designer = $champs['chaise_designer'];
 $chaise_prix = $champs['chaise_prix'];
 $chaise_image = $champs['chaise_image'];

?>
    
    <div class="container--chaise">
        <h2>
            <?php the_title(); ?>
        </h2>
        <div class="produit--chaise">
            <?php if( $chaise_image ) : ?>
                <div class="produit__chaise--image">
                <img src="<?php echo $chaise_image; ?>" alt="<?php  the_title(); ?>">
            </div>
            <div class="produit__chaise--titre">
                <?php if( $chaise_titre ) : ?>
                    <h1><?php echo  $chaise_titre; ?></h1>
                <?php endif; ?>
            </div>
            <div class="produit__chaise--designer">
                <?php if( $chaise_designer ) : ?>
                    <p><?php echo  $chaise_designer; ?></p>
                <?php endif; ?>
            </div>
            
            <div class="produit__chaise--anee">
                <?php if( $chaise_anee ) : ?>
                    <h1><?php echo  $chaise_anee; ?></h1>
                <?php endif; ?>
            </div>
            
            <?php endif; ?>
            <div class="produit__chaise--prix">
                <?php if( $chaise_prix ) : ?>
                    <p><?php echo $chaise_prix; ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>