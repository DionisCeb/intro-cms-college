<?php
 
get_header();


/* Marqueurs de modèles (template tags) communs de WordPress */
?>
<div class="wrapper">

<?php
if ( have_posts() ) : 
	while ( have_posts() ) : 
		the_post(); 
    ?>


    <?php
        //if ( strlen( get_next_post()->post_title ) > 0 ) :
        //echo get_next_post()->post_title;
	?>
		<div>
			<h6>Prochain Post</h6>
	        <?php esc_html( next_post_link() ); ?>
		</div>
    <?php //endif; ?>


    <?php //if ( strlen( get_previous_post()->post_title ) > 0 ) :
    if( get_previous_post() ) :
         //echo get_previous_post()->post_title;   
    ?>
		<div>
			<h6>Post précédent</h6>
	        <?php esc_html( previous_post_link() ); ?>
		</div>
    <?php endif; ?>


    <?php
        $categories = get_the_category();
        //var_dump($categories);
        if ( ! empty( $categories ) ) :
    ?>
		<div>
			<h6>Catégorie</h6>
	        <?php esc_html( the_category( ' ' ) ); ?>
		</div>
	<?php endif; ?>


    <?php if ( get_the_author() ) :  ?>
		<div>
			<h6>Auteur</h6>
	        <p><?php esc_html( the_author() ); ?></p>
		</div>
	<?php endif; ?>


	<?php if ( get_the_content() ) : ?>
		<div>
			<h6>Contenu</h6>
	        <?php esc_html( the_content() ); ?>
		</div>
	<?php endif; ?>


    




    <?php if ( get_the_title() ) : ?>
		<div>
			<h6>Titre</h6>
	        <p><?php esc_html( the_title() ); ?><p>
		</div>
    <?php endif; ?>


<?php
	endwhile; 
endif; 


get_footer();

?>
</div>