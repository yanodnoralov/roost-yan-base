<?php
/*
Template Name: Template 1
*/
get_header();
?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="jumotron d-flex page-hero" style="background-image:url(<?php echo get_field('page_hero_background_image');?>);">
    <div class="container my-auto">
        <div class="row">
            <div class="col-md-12 pull-left border-green-left">
                <h1><?php echo get_the_title();?></h1>
                <p><?php echo get_field('page_subtitle');?></p>
            </div>
        </div>
    </div>
</div>
<div class="jumbotron section-claims">
    <div class="container">
        <div class="row">
            <div class="col-md-12 first-sec">
                <h2 class="section-title">Save Millions in Claims Every Year</h2>
                <p>
                    Fire, water and theft claims in the US exceed $42B per year. Insurance companies that deploy Roost Home Telematic solutions can expect to cut their annual claims cost, savings millions each year.
                </p>
            </div>
        </div>
        <div class="row white-sec-cont">
                <div class="col-md-6 offset-md-3 top-cont-card">
                    <span class="price">$42B</span> in Annual Claims (US)
                </div>
                <div class="col-md-12 card-deck">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo get_template_directory_uri();?>/img/water-leaks.svg" alt="Card image cap">
                        <div class="card-body">
                            <h2 class="card-title">Water Leaks</h2>
                            <p class="card-text">Severity: $7,958<br>
                                Frequency: 1.86
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="middle-vert">
                            $9,6 B
                            <p>
                                in Annual Claims
                            </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="<?php echo get_template_directory_uri();?>/img/water-leaks.svg" alt="Card image cap">
                        <div class="card-body">
                            <h2 class="card-title">Water Leaks</h2>
                            <p class="card-text">Severity: $7,958<br>
                                Frequency: 1.86
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="middle-vert">
                                $9,6 B
                                <p>
                                    in Annual Claims
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="<?php echo get_template_directory_uri();?>/img/water-leaks.svg" alt="Card image cap">
                        <div class="card-body">
                            <h2 class="card-title">Water Leaks</h2>
                            <p class="card-text">Severity: $7,958<br>
                                Frequency: 1.86
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="middle-vert">
                                $9,6 B
                                <p>
                                    in Annual Claims
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="<?php echo get_template_directory_uri();?>/img/water-leaks.svg" alt="Card image cap">
                        <div class="card-body">
                            <h2 class="card-title">Water Leaks</h2>
                            <p class="card-text">Severity: $7,958<br>
                                Frequency: 1.86
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="middle-vert">
                                $9,6 B
                                <p>
                                    in Annual Claims
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

</div>










<?php endwhile; endif; ?>
<?php
get_footer();
?>
