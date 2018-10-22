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
	
	<?php if( get_field('footer_call_to_action', 'option') && 'post' === get_post_type() ): ?>
	<div class="footer-cta py-6 text-white text-center text-lg-left bottom-cta" style="background:url(<?php echo get_template_directory_uri();?>/img/bgmore.png);">
		<div class="container">
			<div class="row d-flex align-items-center">
				<div class="col-lg-9 text-left pr-sm-4 hide">
					<h2 class="display-3 mt-0"><?php the_field('footer_call_to_action', 'option'); ?></h2>
				</div>
				<?php if (get_field('button', 'option')):
					$link = get_field('button', 'option');?>
					<div class="col-lg-3 pl-lg-4 hide">
						<a href="<?php echo $link['url']?>" class="btn btn-outline btn-white btn-lg"><?php echo $link['title']?></a>
					</div>
				<?php endif;?>
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
                <div class="col-md-6 col-lg-4 pr-xl-5">
	                <?php if( get_field('footer_logo', 'option') ): ?>
	                    <div class="footer-logo">
		                    <img <?php ar_responsive_image(get_field('footer_logo', 'option'),'full','120px');?>>
	                    </div>
                    <?php endif; ?>
                    <?php if( get_field('footer_bio', 'option') ): ?>
	                    <div class="footer-text-logo">
							<?php the_field('footer_bio', 'option'); ?>
	                    </div>
                    <?php endif; ?>
                    <?php if( get_field('footer_social_icons', 'option') ): ?>
	                    <div class="footer-social-icons">
							<?php the_field('footer_social_icons', 'option'); ?>
	                    </div>
                    <?php endif; ?>
                </div>
                <div class="col-md-6 col-lg-2 fot-pad-top footer-widget-wrapper">
	                <?php if( get_field('footer_signup_title', 'option') ): ?>
	                    <div class="signup-text">
							<?php the_field('footer_signup_title', 'option'); ?>
	                    </div>
                    <?php endif; ?>
                    <a class="btn btn-primary" data-toggle="modal" data-target="#myModal" href="#">Sign Up</a>
                </div>
                <div class="col-12 col-lg-6 fot-pad-top footer-widget-wrapper">
                    <div class="row footer-menus">
                        <!-- footer menus -->
                        <div class="col-md-4 mb-5 mb-md-0">
	                        <?php if( get_field('footer_menu_1_title', 'option') ): ?>
			                    <div class="footer-menu-title">
									<?php the_field('footer_menu_1_title', 'option'); ?>
			                    </div>
		                    <?php endif; ?>
                            <?php
                            wp_nav_menu( array(
                                'theme_location' => 'menu-3',

                            ) );
                            ?>
                        </div>
                        <div class="col-md-4 mb-5 mb-md-0">
	                        <?php if( get_field('footer_menu_2_title', 'option') ): ?>
			                    <div class="footer-menu-title">
									<?php the_field('footer_menu_2_title', 'option'); ?>
			                    </div>
		                    <?php endif; ?>
                            <?php
                            wp_nav_menu( array(
                                'theme_location' => 'menu-4'
                            ) );
                            ?>
                        </div>
                        <div class="col-md-4">
	                        <?php if( get_field('footer_menu_3_title', 'option') ): ?>
			                    <div class="footer-menu-title">
									<?php the_field('footer_menu_3_title', 'option'); ?>
			                    </div>
		                    <?php endif; ?>
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
<div class="modal fade global-contact-modal" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h2 class="modal-title">Let's Get in Touch</h2>
                <p class="lead">Talk with our team to learn more about Roost insurance solutions. Are you looking for product help or support? <a href="https://getroost.zendesk.com/hc/en-us">Contact us here</a></p>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
	            <?php echo do_shortcode('[gravityform id=1 title=false description=false ajax=true tabindex=49]');?>
<!--                 <?php echo do_shortcode('[contact-form-7 id="351" title="Modal contact"]');?> -->
            </div>
            
        </div>
    </div>
</div>
<?php wp_footer(); ?>
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('.modal-target-contact').find('a').attr('data-toggle', 'modal');
        jQuery('.modal-target-contact').find('a').attr('data-target', '#myModal');
    });
</script>
</body>
</html>
