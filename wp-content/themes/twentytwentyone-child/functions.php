
<?php

/* function ttoc_reset_widtgets() {
    remove_action( 'wp_enqueue_scripts', 'twenty_twenty_one_scripts' );
   }
   add_action( 'wp_loaded', 'ttoc_reset_widtgets' ); */
   
    function twentytwentyonechild_styles() {
        wp_enqueue_style( 'twenty-twenty-one-child-style',
        get_stylesheet_uri(),
        array( 'twenty-twenty-one-style' ) );
}
add_action( 'wp_enqueue_scripts', 'twentytwentyonechild_styles' );
 
 
function ttoc_ajoute_auteur() {
    echo '<meta name="author" content="Cebanu Dionis">';
    }
    add_action( 'wp_head', 'ttoc_ajoute_auteur' );



