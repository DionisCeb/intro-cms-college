<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

	<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

	<footer id="colophon" class="site-footer">

		<?php if ( has_nav_menu( 'footer' ) ) : ?>
			<nav aria-label="<?php esc_attr_e( 'Secondary menu', 'twentytwentyone' ); ?>" class="footer-navigation">
				<ul class="footer-navigation-wrapper">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'items_wrap'     => '%3$s',
							'container'      => false,
							'depth'          => 1,
							'link_before'    => '<span>',
							'link_after'     => '</span>',
							'fallback_cb'    => false,
						)
					);
					?>
				</ul><!-- .footer-navigation-wrapper -->
			</nav><!-- .footer-navigation -->
		<?php endif; ?>
		<div class="site-info">
			<div class="site-name">
				<?php if ( has_custom_logo() ) : ?>
					<div class="site-logo"><?php the_custom_logo(); ?></div>
				<?php else : ?>
					<?php if ( get_bloginfo( 'name' ) && get_theme_mod( 'display_title_and_tagline', true ) ) : ?>
						<?php if ( is_front_page() && ! is_paged() ) : ?>
							<?php bloginfo( 'name' ); ?>
						<?php else : ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						<?php endif; ?>
					<?php endif; ?>
				<?php endif; ?>
			</div><!-- .site-name -->

			<?php
			if ( function_exists( 'the_privacy_policy_link' ) ) {
				the_privacy_policy_link( '<div class="privacy-policy">', '</div>' );
			}
			?>

				<?php if ( get_theme_mod('footer_address_func') || get_theme_mod('footer_phone_func') || get_theme_mod('footer_email_func') ) : ?>
					<div class="footer-contacts__wrapper">
						<div class="footer-contacts">
							<?php if ( get_theme_mod('footer_address_func') ) : ?>
								
								<address class="footer-address"><?php echo nl2br(esc_textarea(get_theme_mod('footer_address_func'))); ?></address>
							<?php endif; ?>
							<?php if ( get_theme_mod('footer_phone_func') ) : ?>
								<p class="footer-phone">
									<a class="tel-lien" href="tel:"><?php echo esc_html(get_theme_mod('footer_phone_func'));?></a>
								</p>
							<?php endif; ?>
							<?php if ( get_theme_mod('footer_email_func') ) : ?>
								<p class="footer-email"> <a href="mailto:<?php echo esc_attr(get_theme_mod('footer_email_func')); ?>">
								<?php echo esc_html(get_theme_mod('footer_email_func')); ?>
									</a>
									</p>
							<?php endif; ?>
						</div>
					</div>
				<?php endif; ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->





<?php wp_footer(); ?>

</body>
</html>
