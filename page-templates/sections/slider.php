
<!-- testemonials -->
<div class="container section slider-cont">
    <div class="row">
        <div class="col-md-12 first-sec title green_border">
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