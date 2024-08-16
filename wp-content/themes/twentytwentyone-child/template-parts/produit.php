<?php

$champs = get_fields();
//var_dump($champs);
 $chaise_titre = $champs['chaise_titre'];
 $chaise_anee = $champs['chaise_anee'];
 $chaise_designer = $champs['chaise_designer'];
 $chaise_prix = $champs['chaise_prix'];
 $chaise_image = $champs['chaise_image'];

?>
 <article>
    
    <div class="wrapper">
        <h2>
            <?php the_title(); ?>
        </h2>
        <div>
            <?php if( $chaise_titre ) : ?>
                <h1><?php echo  $chaise_titre; ?></h1>
            <?php endif; ?>
            <?php if( $chaise_anee ) : ?>
                <h1><?php echo  $chaise_anee; ?></h1>
            <?php endif; ?>
            <?php if( $chaise_designer ) : ?>
                <p><?php echo  $chaise_designer; ?></p>
            <?php endif; ?>
            <?php if( $chaise_image ) : ?>
            <div>
                <img src="<?php echo $chaise_image; ?>" alt="<?php  the_title(); ?>">
            </div>
            <?php endif; ?>
            <?php if( $chaise_prix ) : ?>
                <p><?php echo  $chaise_prix; ?></p>
            <?php endif; ?>
        </div>
    </div>
 </article>