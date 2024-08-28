<?php
/**
 * Plugin Name: ICMS Compostions
 * Description: Plugin of Patterns
 * Author: Dionis Cebanu
 * Version: 1.0.9
 */


 function icms_compositions() {
    /**
     * Ajout la categorie ICMS
     */
    register_block_pattern_category(
        'icms-compositions',
        array(
        'label' => __( 'ICMS', 'icms-compositions' ),
        'description' => __( 'Compositions du plugin ICMS Compositions.' )
        )
    );

    /**
     * Ajout la COMPOSITION Paragraphe
     */
    register_block_pattern(
        'icms-compositions/paragraphe',
        array(
        'title' => __( 'Paragraphe', 'icms-compositions' ),
        'categories' => array( 'icms-compositions' ),
        'keywords' => array( 'ICMS', '2 colonnes'),
        'content' => '<!-- wp:paragraph -->
                <p>Lorem ipsum dolor sit amet.</p>
                <!-- /wp:paragraph -->'
            )
       );


       $content = '<!-- wp:heading {"textAlign":"left"} -->
        <h2 class="wp-block-heading has-text-align-left">Titre</h2>
        <!-- /wp:heading -->
        
        <!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:paragraph {"style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
            <p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s  standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <!-- /wp:paragraph -->
        
            <!-- wp:paragraph -->
            <p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button -->
            <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">BTN</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons -->
            
            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button /-->
            
            <!-- wp:button /-->
            
            <!-- wp:button /--></div>
            <!-- /wp:buttons -->
            
            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button /--></div>
        <!-- /wp:buttons --></div>
    <!-- /wp:group -->;';
    /**
     * Ajout la COMPOSITION Paragraphe
     */
    register_block_pattern(
        'icms-compositions/titre-texte-cta',
        array(
        'title' => __( 'Titre', 'Texte + CTA', 'icms-compositions' ),
        'categories' => array( 'icms-compositions' ),
        'keywords' => array('ICMS'),
        'content' => $content,
            )
       );
   }
   add_action( 'init', 'icms_compositions' );




