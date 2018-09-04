<?php
	/*
Template Name: Home page
*/
/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Yan_Designs_Base
 */

get_header();
?>

<div class="hero">
	<div class="container">
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<?php if( get_field('sub_title') ): ?>
				<p class="sub-title"><?php the_field('sub_title'); ?></p>
			<?php endif; ?>
		</header><!-- .entry-header -->
	</div>
</div>

<!-- first cta -->
<div class="container cta-cont">
    <div class="row">
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/card1.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Build customer Loyalty & Retention</h5>
                    <p class="card-text">Develop trust, loyalty and retention by making
                        your customer relationship tangible and relevant. </p>

                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Learn More About Roost Sensors</a>
                </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/card2.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Save on Claims</h5>
                    <p class="card-text">The quicker a policyholder is aware of a fire or water leak, the lower the hassle and overall cost of a claim.</p>

                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Loss Mitigation Solution</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end first cta -->

<!-- slider area -->
<div class="container slider-cont">
    <div class="row">
        <div class="col-md-12 section-title">
            <h2>The Fastest Growing Home Telematics Solution for</h2>
        </div>
    </div>
    <div class="row">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">

                        <div class="card-columns">
                            <div class="card card-body h-100 justify-content-center">
                                <img class="" src="<?php echo get_template_directory_uri(); ?>/img/des.png" alt="Card image cap">
                                <div class="hover-content">
                                    <img class="" src="<?php echo get_template_directory_uri(); ?>/img/des.png" alt="Card image cap">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    <br>
                                    <div class="card-author">John Claire</div>
                                    <div class="card-author-position">Founder</div>
                                    <div class="read-more"><a href="">Read more ></a></div>
                                </div>
                            </div>
                            <div class="card card-body h-100 justify-content-center">
                                <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/guide.png" alt="Card image cap">
                            </div>
                            <div class="card card-body h-100 justify-content-center">
                                <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/usaa.png" alt="Card image cap">
                            </div>
                            <div class="card card-body h-100 justify-content-center">
                                <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/fmi.png" alt="Card image cap">
                            </div>
                            <div class="card card-body h-100 justify-content-center">
                                <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/erie.png" alt="Card image cap">
                            </div>
                            <div class="card card-body h-100 justify-content-center">
                                <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/astate.png" alt="Card image cap">
                            </div>
                            <div class="card card-body h-100 justify-content-center">
                                <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/kingstone.png" alt="Card image cap">
                            </div>
                            <div class="card card-body h-100 justify-content-center">
                                <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/des.png" alt="Card image cap">
                            </div>
                        </div>

                </div>

                <div class="carousel-item">

                    <div class="card-columns">
                        <div class="card card-body h-100 justify-content-center">
                            <img class="" src="<?php echo get_template_directory_uri(); ?>/img/des.png" alt="Card image cap">

                        </div>
                        <div class="card card-body h-100 justify-content-center">
                            <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/guide.png" alt="Card image cap">
                        </div>
                        <div class="card card-body h-100 justify-content-center">
                            <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/usaa.png" alt="Card image cap">
                        </div>
                        <div class="card card-body h-100 justify-content-center">
                            <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/fmi.png" alt="Card image cap">
                        </div>
                        <div class="card card-body h-100 justify-content-center">
                            <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/erie.png" alt="Card image cap">
                        </div>
                        <div class="card card-body h-100 justify-content-center">
                            <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/astate.png" alt="Card image cap">
                        </div>
                        <div class="card card-body h-100 justify-content-center">
                            <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/kingstone.png" alt="Card image cap">
                        </div>
                        <div class="card card-body h-100 justify-content-center">
                            <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/des.png" alt="Card image cap">
                        </div>
                    </div>

                </div>

            </div>

            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <script>
        jQuery( document ).ready(function() {
            jQuery('.carousel').carousel({
                interval: false,
                pause: 'hover',

            })
        });
    </script>
</div>
<!-- end slider area -->

<!-- winwin area -->
<div class="hero globe-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2>A Win-Win For Everyone</h2>
                <p>Join insurance partners that are united by the vision of making the home a better and safer place through home telematics. </p>
                <a href="#" class="btn btn-primary letstalk">Lets talk!</a>
            </div>
        </div>
    </div>
</div>
<!-- end win win area -->
<?php
get_footer();
