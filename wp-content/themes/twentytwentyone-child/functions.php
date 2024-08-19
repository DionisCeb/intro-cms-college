
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








  


function ttoc_parametres_ajustables( $wp_customize ) {


    $wp_customize->add_section(
        'ttoc_parametres_ajustables',
        array(
            'title' => _( 'Parametres du theme '),
            'priority' => 30
        )
    );

    $wp_customize->add_setting(
        'ttoc_parametres_bg_header'
    );


    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'ttoc_parametres_bg_header',
            array(
                'label' => __( 'Image BG du header' ),
                'section' => 'ttoc_parametres_ajustables' // requis : core ou custom
            )
        )
   );
}
add_action( 'customize_register', 'ttoc_parametres_ajustables');

/* FOOTER COSTUMIZER*/
function mon_theme_customize_register($wp_customize) {
    // Section Footer
    $wp_customize->add_section('mon_theme_footer_section', array(
        'title'    => __('Footer Contact', 'mon-theme'),
        'priority' => 160,
    ));
    
    // Adresse
    $wp_customize->add_setting('mon_theme_footer_address', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('mon_theme_footer_address', array(
        'label'    => __('Adresse', 'mon-theme'),
        'section'  => 'mon_theme_footer_section',
        'type'     => 'textarea',
    ));
    
    // Téléphone
    $wp_customize->add_setting('mon_theme_footer_phone', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('mon_theme_footer_phone', array(
        'label'    => __('Téléphone', 'mon-theme'),
        'section'  => 'mon_theme_footer_section',
        'type'     => 'tel',
    ));
    
    // Courriel
    $wp_customize->add_setting('mon_theme_footer_email', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_email',
    ));
    
    $wp_customize->add_control('mon_theme_footer_email', array(
        'label'    => __('Courriel', 'mon-theme'),
        'section'  => 'mon_theme_footer_section',
        'type'     => 'email',
    ));
}

add_action('customize_register', 'mon_theme_customize_register');
