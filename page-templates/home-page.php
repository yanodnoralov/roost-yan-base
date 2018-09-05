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
	<?php
        $slider=get_field('rev_slider_shortcode','option');
        echo do_shortcode($slider);
	?>
</div>

<!-- first cta -->
<div class="container cta-cont">
    <div class="row">
        <div class="card-deck">

            <?php if( have_rows('homepage_cta','option') ): while ( have_rows('homepage_cta','option') ) : the_row(); ?>
            <div class="card">
                <img class="card-img-top" src="<?php echo get_sub_field('image'); ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?php echo get_sub_field('title'); ?></h5>
                    <p class="card-text"><?php echo get_sub_field('text'); ?></p>

                </div>
                <div class="card-footer">
                    <a href="<?php echo get_sub_field('button_url'); ?>" class="btn btn-primary"><?php echo get_sub_field('button_text'); ?></a>
                </div>
            </div>
            <?php endwhile; endif; ?>

        </div>
    </div>
</div>
<!-- end first cta -->

<!-- testemonials -->
<div class="container slider-cont">
    <div class="row">
        <div class="col-md-12 section-title">
            <h2><?php echo get_field('section2_title','option');?></h2>
        </div>
    </div>
    <div class="row">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php
                $cnt=0;
                $cnt_slider=0;

                $args=array(
                    'post_type' => 'testimonials',
                    'posts_per_page' => -1,
                    'post_status' => 'publish'
                );
                $query = new WP_Query( $args );

                if( $query->have_posts() ): while ( $query->have_posts() ) : $query->the_post();

                if ($cnt==0){
                    $class='active';
                    $cnt++;
                }
                else {
                    $class='';
                }
                if ($cnt_slider==0){
                    ?>
                    <div class="carousel-item <?php echo $class;?>">
                        <div class="card-columns">
                    <?php
                }
                ?>


                            <div class="card card-body h-100 justify-content-center">
                                <img class="" src="<?php echo get_field('testimonial_image');?>" alt="Card image cap">
                                <div class="hover-content">
                                    <img class="" src="<?php echo get_field('testimonial_image');?>" alt="Card image cap">
                                    <?php echo get_field('testemonial_slider_text');?>
                                    <br>
                                    <div class="card-author"><?php echo get_field('testimonial_author');?></div>
                                    <div class="card-author-position"><?php echo get_field('testimonial_author_position');?></div>
                                    <div class="read-more"><a href="<?php echo get_the_permalink(get_the_ID());?>">Read more ></a></div>
                                </div>
                            </div>

                <?php
                    $cnt_slider++;
                   if ($cnt_slider==8){

                    ?>
                        </div>
                    </div>
                    <?php
                    $cnt_slider=0;
                }
                endwhile;
                   endif;
                ?>






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
    <div class="row">
        <div class="col-md-12 text-center">
            <a href="<?php echo get_field('carousel_cta_url','option'); ?>" class="btn btn-primary cta-carousel"><?php echo get_field('carousel_cta','option'); ?></a>
        </div>
    </div>
</div>
<!-- end testimonials -->

<!-- winwin area -->
<div class="jumbotron h-100 d-flex globe-area" style="background-image:url(<?php echo get_field('cta_2_background_image','option');?>);">
    <div class="container my-auto">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2><?php echo get_field('cta_2_title','option');?></h2>
                <p><?php echo get_field('cta_2_text','option');?></p>
                <a href="<?php echo get_field('cta_2_cta_link','option');?>" class="btn btn-primary letstalk"><?php echo get_field('cta_2_cta_text','option');?></a>
            </div>
        </div>
    </div>
</div>
<!-- end win win area -->
<?php
get_footer();
