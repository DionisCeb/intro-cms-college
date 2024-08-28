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
        <div class="produit--chaise">
            <?php if( $chaise_image ) : ?>
                <div class="produit__chaise--image">
                    <img src="<?php echo $chaise_image; ?>" alt="<?php  the_title(); ?>">
                </div>
                <div class="info-chaise">
                    <div class="produit__chaise--titre">
                        <?php if( $chaise_titre ) : ?>
                            <h1><?php echo  $chaise_titre; ?></h1>
                        <?php endif; ?>
                    </div>
                    <div class="produit__chaise--designer">
                        <?php if( $chaise_designer ) : ?>
                            <p>Designer: <span class="designer"><?php echo  $chaise_designer; ?></span></p>
                        <?php endif; ?>
                    </div>
                    <div class="produit__chaise--anee">
                        <?php if( $chaise_anee ) : ?>
                            <p>Année <span class="annee"><?php echo  $chaise_anee; ?></span></p>
                        <?php endif; ?>
                    </div>
                    
                    <?php endif; ?>
                    <div class="produit__chaise--prix">
                        <?php if( $chaise_prix ) : ?>
                            <p>Prix: <span class="prix"><?php echo $chaise_prix; ?></span></p>
                        <?php endif; ?>
                    </div>
                </div>
        </div>
    </div>