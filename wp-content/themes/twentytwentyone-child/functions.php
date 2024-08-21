
<?php
   
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

/* FOOTER CUSTOMIZER*/
function contact_customizer($wp_customize) {
    // Section Footer
    $wp_customize->add_section('contact_customiser_section_data', array(
        'title'    => __('Footer Contact', 'mon-theme'),
        'priority' => 160,
    ));
    
    // Adresse
    $wp_customize->add_setting('footer_address_func', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('footer_address_func', array(
        'label'    => __('Adresse', 'mon-theme'),
        'section'  => 'contact_customiser_section_data',
        'type'     => 'textarea',
    ));
    
    // Téléphone
    $wp_customize->add_setting('footer_phone_func', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('footer_phone_func', array(
        'label'    => __('Téléphone', 'mon-theme'),
        'section'  => 'contact_customiser_section_data',
        'type'     => 'tel',
    ));
    
    // Courriel
    $wp_customize->add_setting('footer_email_func', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_email',
    ));
    
    $wp_customize->add_control('footer_email_func', array(
        'label'    => __('Courriel', 'mon-theme'),
        'section'  => 'contact_customiser_section_data',
        'type'     => 'email',
    ));
}

add_action('customize_register', 'contact_customizer');

