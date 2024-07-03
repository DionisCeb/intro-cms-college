<?php

/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package manifold
 * @since 1.0.0
 */

if (function_exists('register_block_style')) {
    /**
     * Register block styles.
     *
     * @since 0.1
     *
     * @return void
     */
    function manifold_register_block_styles()
    {
        register_block_style(
            'core/button',
            array(
                'name' => 'button-hover-primary',
                'label' => 'Hover : Primary', 'manifold',
            )
        );
        register_block_style(
            'core/button',
            array(
                'name' => 'button-hover-secondary',
                'label' => 'Hover : Secondary', 'manifold'
            )
        );
        register_block_style(
            'core/button',
            array(
                'name' => 'button-hover-foreground',
                'label' => 'Hover : Foreground', 'manifold'
            )
        );
        register_block_style(
            'core/button',
            array(
                'name' => 'button-hover-light',
                'label' => 'Hover : Light', 'manifold'
            )
        );
        register_block_style(
            'core/navigation',
            array(
                'name' => 'link-hover-primary',
                'label' => 'Hover : Primary', 'manifold'
            )
        );
        register_block_style(
            'core/navigation',
            array(
                'name' => 'link-hover-secondary',
                'label' => 'Hover : Secondary', 'manifold'
            )
        );
        register_block_style(
            'core/navigation',
            array(
                'name' => 'link-hover-foreground',
                'label' => 'Hover : Foreground', 'manifold'
            )
        );
        register_block_style(
            'core/navigation',
            array(
                'name' => 'link-hover-light',
                'label' => 'Hover : Light', 'manifold'
            )
        );
        register_block_style(
            'core/site-title',
            array(
                'name' => 'title-hover-primary',
                'label' => 'Hover : Primary', 'manifold'
            )
        );
        register_block_style(
            'core/site-title',
            array(
                'name' => 'title-hover-secondary',
                'label' => 'Hover : Secondary', 'manifold'
            )
        );
        register_block_style(
            'core/site-title',
            array(
                'name' => 'title-hover-foreground',
                'label' => 'Hover : Foreground', 'manifold'
            )
        );
        register_block_style(
            'core/site-title',
            array(
                'name' => 'title-hover-light',
                'label' => 'Hover : Light', 'manifold'
            )
        );
        register_block_style(
            'core/column',
            array(
                'name' => 'column-hover-border-primary',
                'label' => 'Hover : Border Primary', 'manifold'
            )
        );
        register_block_style(
            'core/column',
            array(
                'name' => 'column-hover-border-secondary',
                'label' => 'Hover : Border Secondary', 'manifold'
            )
        );
        register_block_style(
            'core/column',
            array(
                'name' => 'column-hover-border-foreground',
                'label' => 'Hover : Border Foreground', 'manifold'
            )
        );
        register_block_style(
            'core/column',
            array(
                'name' => 'column-hover-border-foreground-alt',
                'label' => 'Hover : Border Foreground Alt', 'manifold'
            )
        );
    }
    add_action('init', 'manifold_register_block_styles');
};
