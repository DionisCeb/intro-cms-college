<?php

/**
 * manifold: Block Patterns
 *
 * @since manifold 1.0.0
 */

/**
 * Registers pattern categories for manifold
 *
 * @since manifold 1.0.0
 *
 * @return void
 */
function manifold_register_pattern_category()
{
    /* This code snippet is defining an array called `` which contains various
	block patterns categories for a WordPress theme or plugin called "manifold". Each key in the array
	represents a category name, and the corresponding value is an array with a 'label' key that holds
	the translated label for that category. */
    $block_pattern_categories = array(
        'manifold-template' => array('label' => __('Manifold: Patterns', 'manifold')),
    );
    $block_pattern_categories = apply_filters('manifold_block_pattern_categories', $block_pattern_categories);

    foreach ($block_pattern_categories as $name => $properties) {
        if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
            register_block_pattern_category($name, $properties);
            // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
        }
    }
}
add_action('init', 'manifold_register_pattern_category', 1);
