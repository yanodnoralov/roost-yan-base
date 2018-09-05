<?php
/*
Template Name: Loss Mitigation
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


<div class="container section brand">
    <div class="row">
        <div class="col-md-12 first-sec title green_border">
            <h2 class="section-title">The Roost Ecosystem</h2>
            <p>
                Monitor real life situations, in real time.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h4>Smart Sensors</h4>
            <p>Users deploy smoke alarm, water leak and garage door sensors throughout their homes.</p>

            <h4>Mobile App & Services</h4>
            <p>
                If something goes wrong, the app will send a notification to both the policyholder and insurer with the ability to communicate in real time.<br>
                Plus, the app offers quicklinks to local service pros, weather alerts and self-service carrier support content .
            </p>
            <h4>Actionable Data</h4>
            <p>Use data analytics to proactively contact your policyholder, inform underwriting decisions and assess policyholder risk.</p>
            <div class="brand-extra">
                <h4>Your Brand</h4>
                <p>Increase NPS, retention and brand affinity by putting your brand in front of your policyholders 1-2 times / month.</p>
            </div>
        </div>
        <div class="col-md-6">
            <img src="<?php echo get_template_directory_uri();?>/img/brand.png">
            <div class="brand-small">
                Smaller disclaimer text Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            </div>
        </div>
    </div>
</div>







<?php endwhile; endif; ?>
<?php
get_footer();
?>
