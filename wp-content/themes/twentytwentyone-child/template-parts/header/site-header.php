<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= ( true === get_theme_mod( 'display_title_and_tagline', true ) ) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';
$bg_header = get_theme_mod( 'ttoc_parametres_bg_header' );

if ( empty( $bg_header ) ) {
    $bg_header = wp_get_attachment_url( 15 );
}
?>

<header id="masthead" style="background-image: url(<?php echo $bg_header; ?>)" class="<?php echo esc_attr( $wrapper_classes ); ?>">

	<?php get_template_part( 'template-parts/header/site-branding' ); ?>
	<?php get_template_part( 'template-parts/header/site-nav' ); ?>

</header><!-- #masthead -->
