<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Yan_Designs_Base
 */

?>
	<?php if(!is_front_page() && !is_home()): ?>
	
	<?php if( get_field('footer_call_to_action', 'option') ): ?>
	<div class="footer-cta">
		<div class="separator-top">
			<svg class="seperator seperator-white" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 2800 109">
				<path class="st0" d="M0,109V0h2800v109c0-59.5-626.8-107.7-1400-107.7S0,49.5,0,109z" style="fill:#fff"//>
			</svg>
		</div>
		<div class="container">
			<div class="row d-flex align-items-center">
				<div class="col-md-6 text-right pr-sm-4 hide">
					<?php the_field('footer_call_to_action', 'option'); ?>
				</div>
				<div class="col-md-6 pl-sm-4 hide">
					<a href="<?php echo get_home_url(); ?>/#contact" class="btn btn-outline btn-white"><span class="filler"></span>Contact Us Now</a>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>
	
	<?php if( get_field('area_1', 'option') ): ?>
		<div class="footer-widgets-wrap">
			<div class="container">
				<div class="row">
					<div class="foot-widget col-sm-6 col-lg-4">
						<?php the_field('area_1', 'option'); ?>
					</div>
					<div class="foot-widget col-sm-6 col-lg-4">
						<?php if( get_field('area_2', 'option') ): ?>
							<?php the_field('area_2', 'option'); ?>
						<?php endif; ?>
					</div>
					<div class="foot-widget col-sm-6 col-lg-4 pl-xl-5">
						<?php if( get_field('area_3', 'option') ): ?>
							<?php the_field('area_3', 'option'); ?>
						<?php endif; ?>
					</div>
					<div class="sep"></div>
				</div>
			</div>
		</div>
	<?php endif; ?>
		
	<?php endif; ?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
			<div class="col-12">
				<div class="site-info">
					<small>
					<?php if( get_field('copyright_', 'option') ): ?>
							<?php the_field('copyright_', 'option'); ?>
						<?php endif; ?>
					</small>
<!--
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'yan-base' ) ); ?>">
						<?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( esc_html__( 'Proudly powered by %s', 'yan-base' ), 'WordPress' );
						?>
					</a>
					<span class="sep"> | </span>
						<?php
						/* translators: 1: Theme name, 2: Theme author. */
						printf( esc_html__( 'Theme: %1$s by %2$s.', 'yan-base' ), 'yan-base', '<a href="http://yandesigns.com">Yan Designs</a>' );
						?>
-->
				</div><!-- .site-info -->
			</div>
			</div><!-- #row -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
