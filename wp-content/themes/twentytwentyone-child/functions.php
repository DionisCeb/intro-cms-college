
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








    function ttoc_widgets_init() {

        register_sidebar(
            array(
                'name'          => esc_html__( 'Demo', 'twentytwentyone' ),
                'id'            => 'sidebar-2',
                'description'   => esc_html__( 'Je suis une nouvelle widget.', 'twentytwentyone' ),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget'  => '</section>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            )
        );
    }
 
    add_action( 'widgets_init', 'ttoc_widgets_init', 15 );


    function ttoc_ajoute_menus() {
        register_nav_menus(
            array(
                'social' => esc_html__( 'Social Menu')
            )
        );
    }
add_action('init', 'ttoc_ajoute_menus');


function ttoc_nav_menu_social_icons( $item_output, $item, $depth, $args ) {
 // Change SVG icon inside social links menu if there is supported URL.
    if ( 'social' === $args->theme_location ) {
        $svg = twenty_twenty_one_get_social_link_svg( $item->url, 24 );
    if ( ! empty( $svg ) ) {
        $item_output = str_replace( $args->link_before, $svg, $item_output );
    }
    }
    return $item_output;
    }
add_filter( 'walker_nav_menu_start_el', 'ttoc_nav_menu_social_icons', 10, 4 );


