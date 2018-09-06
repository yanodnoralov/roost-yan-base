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
            <p class="sub-title-section">
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

<div class="jumbotron section key-dev">
    <div class="container">
        <div class="row">
            <div class="col-md-12 first-sec title">
                <h2 class="section-title">Turn Key Development</h2>
                <p class="sub-title-section">
                    No IT resources or big budget required, Roost takes care of it all!
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 ">
                <div class="checkboxes">
                    <h4><i class="fas fa-check"></i>Easy to implement</h4>
                    <p>Takes less than 90 days to launch and deploy.</p>
                </div>
                <div class="checkboxes">
                    <h4><i class="fas fa-check"></i>Easy to implement</h4>
                    <p>Takes less than 90 days to launch and deploy.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="checkboxes">
                    <h4><i class="fas fa-check"></i>Easy to implement</h4>
                    <p>Takes less than 90 days to launch and deploy.</p>
                </div>
                <div class="checkboxes">
                    <h4><i class="fas fa-check"></i>Easy to implement</h4>
                    <p>Takes less than 90 days to launch and deploy.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container section sensors">
    <div class="row">
        <div class="col-md-12 first-sec title green_border">
            <h2 class="section-title">Smart Sensors Your Customers Will Trust and Love</h2>
            <p class="sub-title-section">
                Monitor real life situations, in real time.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card c1">
                <img class="card-img-top" src="<?php echo get_template_directory_uri();?>/img/water-leak-detector.jpg" alt="Card image cap">
                <div class="card-footer">
                    <h5 class="card-title">sometitle</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>


        <div class="col-md-4">
            <div class="card c2">
                <img class="card-img-top" src="<?php echo get_template_directory_uri();?>/img/smart-battery.jpg" alt="Card image cap">
                <div class="card-footer">
                    <h5 class="card-title">sometitle</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card c3">
                <img class="card-img-top" src="<?php echo get_template_directory_uri();?>/img/garage-door-sensor.jpg" alt="Card image cap">
                <div class="card-footer">
                <h5 class="card-title">sometitle</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12 cta-button">
            <a href="#" class="btn btn-primary">Learn more about Roost Sensors</a>
        </div>
    </div>
</div>

<div class="jumotron section more-details">
    <div class="container">
        <div class="row">
            <div class="col-md-12 first-sec title green_border">
                <h2 class="section-title">More Details</h2>
                <p class="sub-title-section">
                    Monitor real life situations, in real time.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="img-text-cont">
                    <img class="img-more float-left" src="<?php echo get_template_directory_uri();?>/img/cusomter-engagement.svg" alt="Card image cap">
                    <div class="text float-left">
                        <h5>User friendly</h5>
                        <p>Roost sensors and app are easy to install, use and manage.</p>
                    </div>
                </div>
                <div class="img-text-cont">
                    <img class="img-more float-left" src="<?php echo get_template_directory_uri();?>/img/cusomter-engagement.svg" alt="Card image cap">
                    <div class="text float-left">
                        <h5>User friendly</h5>
                        <p>Roost sensors and app are easy to install, use and manage.</p>
                    </div>
                </div>

                <div class="img-text-cont">
                    <img class="img-more float-left" src="<?php echo get_template_directory_uri();?>/img/cusomter-engagement.svg" alt="Card image cap">
                    <div class="text float-left">
                        <h5>User friendly</h5>
                        <p>Roost sensors and app are easy to install, use and manage.</p>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="img-text-cont">
                    <img class="img-more float-left" src="<?php echo get_template_directory_uri();?>/img/cusomter-engagement.svg" alt="Card image cap">
                    <div class="text float-left">
                        <h5>User friendly</h5>
                        <p>Roost sensors and app are easy to install, use and manage.</p>
                    </div>
                </div>
                <div class="img-text-cont">
                    <img class="img-more float-left" src="<?php echo get_template_directory_uri();?>/img/cusomter-engagement.svg" alt="Card image cap">
                    <div class="text float-left">
                        <h5>User friendly</h5>
                        <p>Roost sensors and app are easy to install, use and manage.</p>
                    </div>
                </div>

                <div class="img-text-cont">
                    <img class="img-more float-left" src="<?php echo get_template_directory_uri();?>/img/cusomter-engagement.svg" alt="Card image cap">
                    <div class="text float-left">
                        <h5>User friendly</h5>
                        <p>Roost sensors and app are easy to install, use and manage.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="jumotron section app-services border-left-sec">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="col-md-12 first-sec title green_border">
                    <h2 class="section-title">Intelligent App Services</h2>
                    <p class="sub-title-section">
                        Integrated services make the co-branded app useful on a regular basis – putting your brand visibility at the forefront of every notification and interaction.
                    </p>
                </div>
                <div class="col-md-12">
                    <div class="img-text-cont">
                        <div class="img-more float-left">
                            <img class="img-fluid " src="<?php echo get_template_directory_uri();?>/img/tvc.png" alt="Card image cap">
                        </div>
                        <div class="text float-left">
                            <h5>IBM The Weather Company Integration</h5>
                            <p>Users can get weather updates through the Roost
                                app to help alert them of situations that may impact
                                their home. </p>
                        </div>
                    </div>
                    <div class="img-text-cont">
                        <div class="img-more float-left vertical-middle align-middle align-items-center">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/img/ha.png" alt="Card image cap">
                        </div>

                        <div class="text float-left">
                            <h5>User friendly</h5>
                            <p>Roost sensors and app are easy to install, use and manage.</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-6 pull-right">
                <img class="sli" src="<?php echo get_template_directory_uri();?>/img/slides.png">
            </div>
        </div>
    </div>
</div>

    <?php include ('sections/slider.php'); ?>

    <?php include ('sections/team-talk.php'); ?>

<?php endwhile; endif; ?>
<?php
get_footer();
?>
