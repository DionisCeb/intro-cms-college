<?php






/**
 * Gestion de la soumission du formulaire côté client
 */
function mpp_nouvelle_inscription() {

    if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
        
        if ( !empty( $_POST['mpp-courriel'] ) ) {

            global $wpdb;

            $mpp_courriel = sanitize_email( $_POST['mpp-courriel'] );

            $wpdb->insert( MPP_TABLE_INSCRIPTIONS,
                array(
                    'courriel' => $mpp_courriel
                ), array(
                    '%s'        // $format (optionnel) => string
                )
            );

            /**
             * Rafraîchi la page pour faire la communication client serveur
             * Détruit la variable spécifiée
             * exit pour stopper l'exécution de la suite du code
             */
            header( "Location: http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" );
            unset( $_POST );
            exit;
        }
    }
}
add_action( 'init', 'mpp_nouvelle_inscription' );