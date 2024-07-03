<?php
 
// Si uninstall.php n'est pas appelé par WordPress, die
if  ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    die;
}
global $wpdb;
$table_parametres = $wpdb->prefix . 'mpp_parametres';
$wpdb->query( "DROP TABLE IF EXISTS $table_parametres" );

$table_inscriptions = $wpdb->prefix . 'mpp_inscriptions';
$wpdb->query( "DROP TABLE IF EXISTS $table_inscriptions" );