
<!-- testemonials -->
<div class="testimonials-wrapper">
<div class="container section slider-cont">
    <div class="row">
        <div class="col-12 px-lg-50 first-sec title green_border">
            <h2><?php echo get_field('section2_title','option');?></h2>
        </div>
    </div>
    <div class="row testimonial-outer">
	    <div class="col-12">
        <div id="testimonial-slider" class="testimonial-slider carousel slide">
            <div class="testimonial-slider-inner">
	            
                <?php

                $args=array(
                    'post_type' => 'testimonials',
                    'posts_per_page' => -1,
                    'post_status' => 'publish'
                );
                $query = new WP_Query( $args );

                if( $query->have_posts() ): while ( $query->have_posts() ) : $query->the_post();
                
                	$logo = get_field('testimonial_image');
                	?>

                    <div class="card card-body justify-content-center">
                        <img class="" <?php ar_responsive_image( $logo ,'full','200px' ); ?> alt="Card image cap">
                        <div class="hover-content">
                            <img class="" <?php ar_responsive_image( $logo ,'full','200px' ); ?> alt="Card image cap">
                            <?php echo get_field('testemonial_slider_text');?>
                            <br>
                            <?php if ( get_field('testimonial_author') ):?>
                            	<div class="card-author"><?php echo get_field('testimonial_author');?></div>
                            <?php endif;?>
                            <div class="card-author-position"><?php echo get_field('testimonial_author_position');?></div>
                            <div class="read-more"><a class="caret" href="<?php echo get_the_permalink(get_the_ID());?>">Read more</a></div>
                        </div>
                    </div>
                    
                <?php
	            endwhile;
                endif;
                ?>
            </div>
        </div>
	    </div>
    </div>
    <script>
        jQuery(document).ready(function() {
            jQuery('.testimonial-slider-inner').slick({
				infinite: true,
				slidesToShow: 4,
				rows: 2,
				slidesToScroll: 1,
				infinite: true,
				arrows: true,
				prevArrow: '<div class="custom-nav prev"></div>',
				nextArrow: '<div class="custom-nav next"></div>',
				responsive: [
			    {
			      breakpoint: 992,
			      settings: {
			        slidesToShow: 3,
			      }
			    },
			    {
			      breakpoint: 767,
			      settings: {
			        slidesToShow: 2,
			      }
			    }
			    ]
			});
        });
    </script>
    <div class="row">
        <div class="col-md-12 text-center">
            <a href="<?php echo get_field('carousel_cta_url','option'); ?>" class="btn btn-primary cta-carousel mt-md-5 mt-4"><?php echo get_field('carousel_cta','option'); ?></a>
        </div>
    </div>
</div>
<!-- end testimonials -->