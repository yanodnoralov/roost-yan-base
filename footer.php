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
		<div class="container-wide pb-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-logo">
                        <img width="115" height="29" src="<?php echo get_template_directory_uri(); ?>/img/logo-white.svg">
                    </div>
                    <div class="footer-text-logo">
                        Short blurb about roost would be helpful for seo
                        Lorem ipsum dolor sit amet, consectetur adipiscing
                        Nulla convallis egestas rhoncus. Donec facilisis
                        fermentum sem, ac viverra ante luctus vel. Donec vel
                    </div>
                    <div class="footer-social-icons">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-md-4 fot-pad-top">
                    <div class="signup-text">Sign up for Roost news, solutions and advice.</div>
                    <input type="text" style="width: 100%">
                </div>
                <div class="col-md-4 fot-pad-top">
                    <div class="row footer-menus">
                        <!-- footer menus -->
                        <div class="col-md-4">
                            <div class="footer-menu-title">Company</div>
                            <?php
                            wp_nav_menu( array(
                                'theme_location' => 'menu-3',

                            ) );
                            ?>
                        </div>
                        <div class="col-md-4">
                            <div class="footer-menu-title">Solutions</div>
                            <?php
                            wp_nav_menu( array(
                                'theme_location' => 'menu-4'
                            ) );
                            ?>
                        </div>
                        <div class="col-md-4">
                            <div class="footer-menu-title">Contact</div>
                            <?php
                            wp_nav_menu( array(
                                'theme_location' => 'menu-5'
                            ) );
                            ?>
                        </div>
                    </div>



                </div>
            </div>
        </div>
        <div class="bottom-footer">
            <div class="container-wide">
                <div class="row ">
                    <div class="col-6">
                        <div class="site-info">
                            <small>
                            <?php if( get_field('copyright_', 'option') ): ?>
                                    <?php the_field('copyright_', 'option'); ?>
                                <?php else: ?>
                                Copyrights © 2018 All Rights Reserved by Roost, Inc.
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
                    <div class="col-md-6 text-right footer-sub-menu">
                        <small>
                            <?php
                            wp_nav_menu( array(
                                'theme_location' => 'menu-6',
                                'container' => '',
                                'items_wrap' => '%3$s',
                                'before' => '', 'after' => '',

                            ) );
                            ?>
                        </small>
                    </div>
                </div><!-- #row -->
            </div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Modal Heading</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                Modal body..
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<?php wp_footer(); ?>
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('.modal-target-contact').find('a').attr('data-toggle', 'modal');
        jQuery('.modal-target-contact').find('a').attr('data-target', '#myModal');
    });
</script>
</body>
</html>
