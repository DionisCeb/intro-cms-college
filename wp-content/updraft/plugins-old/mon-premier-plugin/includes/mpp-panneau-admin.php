<?php
function mpp_ajouter_menu() {
    add_menu_page(
        'Mon Premier Plugin',// Page title
        'Mon Premier Plugin',// Menu title
        'manage_options',// Capability
        'mpp-menu-page',// Menu slug
        'mpp_ajouter_formulaire' // Callable function  
        );
    }
add_action( 'admin_menu', 'mpp_ajouter_menu' );
   

function mpp_ajouter_formulaire() {

    // S'il y a un query string nom, ajoute sa valeur à la db  
    if ( isset( $_POST['icms-mode-sombre'] ) ) {
        mpp_update_data(); // Appelle la fonction pour l’appel à la db
    };

    require_once( 'mpp-get-couleurs.php' );
    $mpp_couleur_bg = mpp_get_couleur();


/*     echo '
    <div style="padding:5vw;">
    <h2>' . get_admin_page_title() . '</h2>
        <form method="post" style="margin-top:25px;">
            <label for="mpp-couleur-bg">Couleur de fond</label>
            <input type="color" id="mpp-couleur-bg" name="mpp-couleur-bg" value="' . esc_attr( $mpp_couleur_bg ) . '">
            <button type="submit" name="enregistrer">Enregistrer</button>
        </form>
    </div>';   */
    echo '
    <div class="ims-formulaire">
        <h2>' . get_admin_page_title() . '</h2>
        <form method="post" style="margin-top:25px;">
            <select name="icms-mode-sombre">
                <option value="sombre-fonce">Mode sombre foncé</option>
                <option value="sombre-leger">Mode sombre léger</option>
                <option value="sombre-bleute">Mode sombre bleuté</option>
                <option value="clair">Mode clair</option>
            </select>
            <button type="submit">Changer</button>
        </form>
    </div>';


    /*  mpp_afficher_data(); */    // Appelle la fonction qui affiche les datas
}

function mpp_update_data() {
    global $wpdb;


    $mpp_couleur_bg = sanitize_text_field( $_POST['icms-mode-sombre'] );

    $table_parametres = $wpdb->prefix . 'mpp_parametres';

    echo $mpp_couleur_bg;

    $data = [ 'couleur_bg' => $mpp_couleur_bg ];
    $where = [ 'id' => 1 ];
    $wpdb->update( MPP_PARAMETRES, $data, $where );
}

?>