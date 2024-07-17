<?php
 
get_header();


/* Marqueurs de modèles (template tags) communs de WordPress */

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


    <?php // Sans condition, si l'extrait n'est pas saisi, par défaut WordPress va récupérer les 55 premiers mots ?>
		<div>
			<h6>Extrait</h6>
	        <?php esc_html( the_excerpt() ); ?>
		</div>
    

    <?php // Sans condition, toutes les entrées on un id ?>
		<div>
			<h6>ID</h6>
	        <p><?php esc_html( the_ID() ); ?></p>
		</div>


    <?php // Sans condition ?>
		<div>
			<h6>Shortlink</h6>
	        <?php esc_html( the_shortlink( 'Lien' ) ); ?>
		</div>


    <?php
        $tags = get_the_tags();
        //var_dump($tags);
        if ( ! empty( $tags ) ) :
    ?>
		<div>
			<h6>Tags</h6>
	        <?php esc_html( the_tags() ); ?>
		</div>
    <?php endif; ?>


    <?php if ( get_the_title() ) : ?>
		<div>
			<h6>Titre</h6>
	        <p><?php esc_html( the_title() ); ?><p>
		</div>
    <?php endif; ?>


    <?php // Sans condition ?>
		<div>
			<h6>Time</h6>
	        <p><?php esc_html( the_time() ); ?></p>
		</div>
	<?php


	endwhile; 
endif; 


get_footer();