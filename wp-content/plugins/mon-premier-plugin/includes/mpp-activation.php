<?php
    function mpp_activation() {
        global $wpdb;  
        $charset_collate = $wpdb->get_charset_collate();


        $table_parametres = $wpdb->prefix . 'mpp_parametres';
        
       
        if  ( $wpdb->get_var( "SHOW TABLES LIKE '$table_parametres'" ) != $table_parametres ) {
            $sql = "CREATE TABLE $table_parametres (
                id int NOT NULL AUTO_INCREMENT,
                couleur_bg varchar (10) NOT NULL,
                PRIMARY KEY (id)
            ) $charset_collate";
            require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
            dbDelta( $sql );
            
            $wpdb->insert( $table_parametres, array('couleur_bg' => '#ffffff'));
        }


        $table_inscriptions = $wpdb->prefix . 'mpp_inscriptions';
        
       
        if  ( $wpdb->get_var( "SHOW TABLES LIKE '$table_inscriptions'" ) != $table_inscriptions ) {
            $sql = "CREATE TABLE $table_inscriptions (
                id int NOT NULL AUTO_INCREMENT,
                courriel varchar(100) NOT NULL,
                PRIMARY KEY (id)
            ) $charset_collate";

            require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
            dbDelta( $sql );
            
            $wpdb->insert( $table_inscriptions, array('couleur_bg' => '#ffffff'));
        }
    }
?>