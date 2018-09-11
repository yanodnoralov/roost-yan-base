<?php

function get_template_by_layout($layout){
    ob_start();
    $current_page =  get_the_ID();
    switch ( $layout ) {
        // save millions
        case 'layout_1':
            ?>
            <div class="jumbotron section-claims">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 first-sec">
                            <h2 class="section-title"><?php the_sub_field('title');?></h2>
                            <p>
                                <?php the_sub_field('subtitle');?>
                            </p>
                        </div>
                    </div>
                    <div class="row white-sec-cont">
                        <div class="col-md-6 offset-md-3 top-cont-card">
                            <?php the_sub_field('top_text');?>
                        </div>
                        <div class="col-md-12 card-deck">
                            <?php
                            if ( have_rows('columns') ) :
                            while ( have_rows('columns') ) : the_row();
                            ?>
                            <div class="card">
                                <img class="card-img-top" <?php ar_responsive_image(get_sub_field('image'),'full','350px');?>>
                                <div class="card-body">
                                    <h2 class="card-title"><?php the_sub_field('title');?></h2>
                                    <p class="card-text">S<?php the_sub_field('text');?>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <div class="middle-vert">
                                        <?php the_sub_field('circle_title');?>
                                        <p>
                                            <?php the_sub_field('circle_subtext');?>
                                        </p>
                                    </div>
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
            <?php
            break;

        // Roost ecosystem
        case 'layout_2':
            ?>
            <div class="container section brand">
                <div class="row">
                    <div class="col-md-12 first-sec title green_border">
                        <h2 class="section-title"><?php the_sub_field('title');?></h2>
                        <p class="sub-title-section">
                            <?php the_sub_field('subtitle');?>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <?php
                        if ( have_rows('subitems_left') ) :
                        while ( have_rows('subitems_left') ) : the_row();
                        ?>
                        <h4><?php the_sub_field('title');?></h4>
                        <p><?php the_sub_field('text');?></p>
                        <?php
                        endwhile;
                        endif;
                        ?>

                        <div class="brand-extra">
                            <h4><?php the_sub_field('subitem_last_title');?></h4>
                            <p><?php the_sub_field('subitem_last_text');?></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img <?php ar_responsive_image(get_sub_field('ride_side_image'),'full','555px');?>>
                        <div class="brand-small">
                            <?php the_sub_field('text_below_image');?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            break;

        // Turn key development
        case 'layout_3':
            ?>
            <div class="jumbotron section key-dev" style="background: url(<?php echo get_sub_field('background_image'); ?>) no-repeat bottom left; background-size: 200px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 first-sec title">
                            <h2 class="section-title"><?php the_sub_field('title');?></h2>
                            <p class="sub-title-section">
                                <?php the_sub_field('subtitle');?>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        // how many ites do we have here?
                        $count=0;
                        $column_items=0;
                        $count = count( get_sub_field('check_fields') );

                        $column_items = ceil($count/2);

                        $column_count=0;
                        if ( have_rows('check_fields') ) :
                            while ( have_rows('check_fields') ) : the_row();
                                if ($column_count==0) {
                                    ?>
                                    <div class="col-md-6">
                                    <?php
                                }
                                ?>
                                <div class="checkboxes">
                                    <h4><i class="fas fa-check"></i><?php the_sub_field('title');?></h4>
                                    <p><?php the_sub_field('text');?></p>
                                </div>



                                <?php
                                $column_count++;
                                if ($column_count==$column_items) {
                                    $column_count=0;
                                    ?>
                                    </div>
                                    <?php
                                }
                            endwhile;
                        endif;

                        ?>

                    </div>




                </div>
            </div>
            <?php
            break;
        // Cards expanding
        case 'layout_4':
            ?>
            <div class="container section sensors">
                <div class="row">
                    <div class="col-md-12 first-sec title green_border">
                        <h2 class="section-title"><?php the_sub_field('title');?></h2>
                        <p class="sub-title-section">
                            <?php the_sub_field('subtitle');?>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $cnt=0;

                    if ( have_rows('cards') ) :
                    while ( have_rows('cards') ) : the_row();
                        $cnt++;
                    ?>

                    <div class="col-md-4">
                        <div class="card c<?php echo $cnt;?>">
                            <img class="card-img-top" <?php ar_responsive_image(get_sub_field('image'),'full','350px');?>>
                            <div class="card-footer">
                                <h5 class="card-title"><?php the_sub_field('title');?></h5>
                                <div class="card-text"><?php echo get_sub_field('text');?></div>
                            </div>
                        </div>
                    </div>


                    <?php
                    endwhile;
                    endif;
                    ?>

                </div>
                <div class="row">
                    <div class="col-md-12 cta-button">
                        <a href="<?php the_sub_field('cta_url');?>" class="btn btn-primary"><?php the_sub_field('cta_text');?></a>
                    </div>
                </div>
            </div>
            <?php
            break;


        // More details
        case 'layout_5':
            ?>
            <div class="jumotron section more-details">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 first-sec title green_border">
                            <h2 class="section-title"><?php the_sub_field('title');?></h2>
                            <p class="sub-title-section">
                                <?php the_sub_field('subtitle');?>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        // how many ites do we have here?
                        $count=0;
                        $column_items=0;
                        $count = count( get_sub_field('boxes') );

                        $column_items = ceil($count/2);

                        $column_count=0;
                        if ( have_rows('boxes') ) :
                            while ( have_rows('boxes') ) : the_row();
                                if ($column_count==0) {
                                    ?>
                                    <div class="col-md-6">
                                    <?php
                                }
                                ?>

                                <div class="img-text-cont">
                                    <img class="img-more float-left" <?php ar_responsive_image(get_sub_field('image'),'full','540px');?>>
                                    <div class="text float-left">
                                        <h5><?php the_sub_field('title');?></h5>
                                        <p><?php the_sub_field('text');?></p>
                                    </div>
                                </div>


                            <?php
                                $column_count++;
                                if ($column_count==$column_items) {
                                    $column_count=0;
                                    ?>
                                    </div>
                                    <?php
                                }
                            endwhile;
                        endif;

                        ?>
                    </div>
                </div>
            </div>
            <?php
            break;


        // Intelegent app services
        case 'layout_6':
            ?>
            <div class="jumotron section app-services border-left-sec">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="col-md-12 first-sec title green_border">
                                <h2 class="section-title"><?php the_sub_field('title');?></h2>
                                <p class="sub-title-section">
                                    <?php the_sub_field('subtitle');?>
                                </p>
                            </div>
                            <div class="col-md-12">
                                <?php
                                if ( have_rows('image_text') ) :
                                    while ( have_rows('image_text') ) : the_row();
                                        ?>
                                        <div class="img-text-cont">
                                            <div class="img-more float-left">
                                                <img class="img-fluid " <?php ar_responsive_image(get_sub_field('image'),'full','540px');?>>
                                            </div>
                                            <div class="text float-left">
                                                <h5><?php the_sub_field('title');?></h5>
                                                <p><?php the_sub_field('text');?></p>
                                            </div>
                                        </div>
                                    <?php
                                    endwhile;
                                endif;
                                ?>

                            </div>

                        </div>
                        <div class="col-md-6 pull-right">
                            <img class="sli" <?php ar_responsive_image(get_sub_field('right_side_image'),'full','540px');?>>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            break;
        // Roost connects
        case 'layout_7':
            ?>
            <div class="container section roost-connects">
                <div class="row">
                    <div class="col-md-12 first-sec title green_border">
                        <h2 class="section-title"><?php the_sub_field('title');?></h2>
                        <p class="sub-title-section">
                            <?php the_sub_field('subtitle');?>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $cnt=0;

                    if ( have_rows('boxes') ) :
                        while ( have_rows('boxes') ) : the_row();
                            $cnt++;
                            ?>

                            <div class="col-md-4">
                                <div class="card c<?php echo $cnt;?>">
                                    <div class="c-img">
                                    <img class="card-img-top" <?php ar_responsive_image(get_sub_field('image'),'full','260px');?>>
                                    </div>
                                    <div class="card-footer">
                                        <h5 class="card-title"><?php the_sub_field('title');?></h5>
                                        <div class="card-text"><?php echo get_sub_field('subtitle');?></div>
                                    </div>
                                </div>
                            </div>


                        <?php
                        endwhile;
                    endif;
                    ?>

                </div>

            </div>


            <?php
            break;
        // Meet Roost
        case 'layout_8':
            ?>
            <div class="container section meet-roost">
                <div class="row">
                    <div class="col-md-12 first-sec title green_border">
                        <h2 class="section-title"><?php the_sub_field('title');?></h2>
                        <p class="sub-title-section">
                            <?php the_sub_field('subtitle');?>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $cnt=0;

                    if ( have_rows('boxes') ) :
                        while ( have_rows('boxes') ) : the_row();
                            $cnt++;
                            ?>

                            <div class="col-md-4">
                                <div class="card c<?php echo $cnt;?>">
                                    <div class="c-img">
                                        <img class="card-img-top" <?php ar_responsive_image(get_sub_field('image'),'full','260px');?>>
                                    </div>
                                    <div class="card-footer">
                                        <h5 class="card-title"><?php the_sub_field('title');?></h5>
                                        <div class="card-text"><?php echo get_sub_field('subtitle');?></div>
                                        <div class="card-link"><a class="btn" href="<?php echo get_sub_field('link'); ?>">Learn More</a></div>
                                    </div>
                                </div>
                            </div>


                        <?php
                        endwhile;
                    endif;
                    ?>


                </div>
            </div>
            <?php
            break;
        // What's New
        case 'layout_9':
            ?>

            <div class="jumotron section whats-new jumbotron-fluid" style="background: url('<?php the_sub_field('background');?>') no-repeat center center; background-size: cover;">
                <div class="container">
                    <div class="row align-items-center atop">
                        <div class="col">
                            <h2><?php the_sub_field('title');?></h2>
                            <p><?php the_sub_field('subtitle');?></p>
                            <a href="<?php the_sub_field('cta_1_url');?>" class="btn"><?php the_sub_field('cta_1_text');?></a>
                            <a href="<?php the_sub_field('cta_2_url');?>" class="btn"><?php the_sub_field('cta_2_text');?></a>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            break;

            // meet the team
                case 'layout_10':
                    ?>
                    <div class="container section the-team">
                        <div class="row">
                            <div class="col-md-12 first-sec title green_border">
                                <h2 class="section-title"><?php the_sub_field('title');?></h2>

                            </div>
                        </div>
                        <div class="row">
                            <?php
                            $cnt=0;
                            $size='offset-2';
                            if ( have_rows('team_members') ) :
                            while ( have_rows('team_members') ) : the_row();
                            $cnt++;
                            if ($cnt>1) { $size='';}
                            ?>
                            <div class="col-4 <?php echo $size;?>">
                                <div class="image">
                                    <?php
                                    if (get_sub_field('image')){
                                        ?>
                                        <img <?php ar_responsive_image(get_sub_field('image'),'full','260px');?> >
                                        <?php
                                    }
                                    else {
                                        ?>
                                        <img src="<?php echo get_template_directory_uri();?>/img/no_face.png">
                                        <?php
                                    }
                                    ?>

                                </div>
                                <div class="top-name-title">
                                    <span class="name"><?php the_sub_field('name');?></span> - <?php the_sub_field('title');?>
                                </div>

                                    <?php the_sub_field('about');?>

                            </div>
                            <?php
                            endwhile;
                            endif;
                            ?>
                        </div>
                    </div>

                    <?php
                    break;



        // roost careers
        case 'layout_11':
            ?>
            <div class="jumbotron roost-careers" style="background: url(<?php the_sub_field('background_image');?>);">
                <div class="container section " >
                    <div class="row">
                        <div class="col-md-12 first-sec title green_border">
                            <h2 class="section-title"><?php the_sub_field('title');?></h2>
                        </div>
                        <div class="col-md-12 sub">
                            <?php the_sub_field('subtitle'); ?>
                        </div>
                        <div class="col-md-12">
                            <a class="btn" href="<?php the_sub_field('cta_link');?>"><?php the_sub_field('cta_text');?></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            break;




        // horizontal boxes
        case 'layout_16':
            ?>
                <div class="jumbotron horizontal-boxes" style="background: #f7f7f7 url(<?php the_sub_field('background_image');?>) right top no-repeat;">
                    <div class="container section horizontal-boxes" >
                        <div class="row">
                            <div class="col-md-5 dotted-gradient ff">
                                <h2 class=""></h2>

                            </div>
                            <div class="col-md-6">

                            </div>
                            <?php
                            if ( have_rows('boxes') ) :
                                while ( have_rows('boxes') ) : the_row();
                                    ?>
                                        <div class="col-md-5 dotted-gradient">
                                            <h2 class="green_border"><?php the_sub_field('title');?></h2>
                                            <?php the_sub_field('sub_text');?>
                                        </div>
                                        <div class="col-md-6 offset-md-1 img-cont">
                                            <img <?php ar_responsive_image(get_sub_field('image'),'full','450px'); ?>>
                                        </div>
                                    <?php
                                endwhile;
                            endif;
                            ?>
                            <div class="col-md-5 dotted-gradient ff">
                                <h2 class=""></h2>

                            </div>
                            <div class="col-md-6">

                            </div>
                        </div>
                    </div>

                </div>


            <?php
            break;
        // additional application options
        case 'layout_17':
            ?>
            <div class="jumotron section additonal-app">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12 first-sec title green_border">
                            <h2 class="section-title"><?php the_sub_field('title');?></h2>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">

                                <?php
                                $cnt=0;
                                $slide_cnt=1;
                                if ( have_rows('slides') ) :
                                    while ( have_rows('slides') ) : the_row();
                                        if ($cnt==0) {
                                            $te='active-box';
                                            $te1='';
                                        }
                                        else {
                                            $te='';
                                            $te1='display: none';
                                        }
                                        ?>
                                        <div class="col-md-12">
                                            <div class="img-text-cont <?php echo $te;?>" data-slide="<?php echo $slide_cnt;?>">
                                                <div class="img-more float-left">
                                                    <img class="img-fluid " <?php ar_responsive_image(get_sub_field('image'),'full','540px');?>>
                                                </div>
                                                <div class="text float-left">
                                                    <h5><?php the_sub_field('title');?></h5>
                                                    <p><?php the_sub_field('text');?></p>
                                                    <a href="<?php the_sub_field('read_more_link');?>">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        $cnt++;
                                        $slide_cnt++;
                                    endwhile;
                                    endif;

                                    ?>
                        </div>
                        <div class="col-md-6 carou-items">
                            <?php
                            $cnt=0;
                            $slide_cnt=1;
                                if ( have_rows('slides') ) :
                                    while ( have_rows('slides') ) : the_row();
                                        if ($cnt==0) {
                                            $te='active-box';
                                            $te1='';
                                        }
                                        else {
                                            $te='';
                                            $te1='display: none';
                                        }
                                        ?>
                                        <div class="col-md-12">
                                            <div id="carouselExampleIndicators<?php echo $cnt;?>" class="carou-items carousel slide slco image-cont-<?php echo $slide_cnt;?>" style="<?php echo $te1;?>" data-ride="carousel">

                                                <div class="carousel-inner">
                                                        <?php
                                                        $cl=0;
                                                        if ( have_rows('inner_slides') ) :
                                                        while ( have_rows('inner_slides') ) : the_row();
                                                            if ($cl==0) {
                                                                $te2='active';
                                                            }
                                                            else {
                                                                $te2='';
                                                            }
                                                            ?>
                                                            <div class="carousel-item <?php echo $te2;?>">
                                                                <img class="img-fluid sli" <?php ar_responsive_image(get_sub_field('image'),'full','540px');?>>
                                                            </div>
                                                            <?php
                                                            $cl++;
                                                        endwhile;
                                                        endif;
                                                        ?>
                                                </div>
                                                <ol class="carousel-indicators">
                                                    <?php for ($i=0;$i<$cl;$i++){
                                                        if ($i==0) {
                                                            $acl='active';
                                                        }
                                                        else {
                                                            $acl='';
                                                        }
                                                        ?>
                                                    <li data-target="#carouselExampleIndicators<?php echo $cnt;?>" data-slide-to="<?php echo $i;?>" class="<?php echo $acl;?>"></li>
                                                    <?php
                                                    }
                                                    ?>
                                                </ol>
                                            </div>
                                        </div>
                                        <?php
                                        $cnt++;
                                        $slide_cnt++;
                                    endwhile;
                                endif;
                                ?>

                        </div>

                    </div>
                </div>
            </div>
            <script>
                jQuery( document ).ready(function() {
                    jQuery('.img-text-cont').click(function() {
                        var slide_cont= $(this).data("slide");
                        $(".slco").hide("fast");
                        $('.image-cont-'+slide_cont).show("fast");
                        $(".img-text-cont").removeClass("active-box");
                        $(this).addClass("active-box");
                    });
                });
            </script>

            <?php
            break;
        // Full custom integration
        case 'layout_18':
            ?>
            <div class="jumbotron full-custom-integration">
                <div class="container section ">
                    <div class="row">
                        <div class="col-md-12 first-sec title green_border">
                            <h2 class="section-title"><?php the_sub_field('title');?></h2>
                        </div>
                        <div class="col-md-12 pp">
                            <div class="float-left img-h"><img class="float-left" <?php ar_responsive_image(get_sub_field('icon'),'full','240px');?>></div>

                            <div class="sub-title-section">
                                <?php the_sub_field('text');?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            break;
        // Horizontal boxes with slider
        case 'layout_19':
            ?>
            <div class="jumbotron horizontal-boxes boxes-with-carousel" style="background: #f7f7f7 url(<?php the_sub_field('background_image');?>) right top no-repeat;">
                <div class="container section horizontal-boxes" >
                    <div class="row">
                        <div class="col-md-5 dotted-gradient ff">
                            <h2 class=""></h2>

                        </div>
                        <div class="col-md-6">

                        </div>
                        <?php
                        $cnt=0;
                        $slide_cnt=1;
                        if ( have_rows('boxes') ) :
                            while ( have_rows('boxes') ) : the_row();

                                ?>
                                <div class="col-md-5 dotted-gradient">
                                    <h2 class="green_border"><?php the_sub_field('title');?></h2>
                                    <?php the_sub_field('subtext');?>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-box-<?php echo $cnt;?>">
                                        Learn More
                                    </button>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-action-<?php echo $cnt;?>">
                                        <?php the_sub_field('cta_text');?>
                                    </button>
                                </div>

                                <!-- Modal1 -->
                                <div class="modal fade" id="modal-action-<?php echo $cnt;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <?php the_sub_field('cta_link');?>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal2 -->
                                <div class="modal fade bd-example-modal-lg" id="modal-box-<?php echo $cnt;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <nav>
                                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                    <a class="nav-item nav-link active" id="nav-<?php echo $cnt;?>a-tab" data-toggle="tab" href="#nav-<?php echo $cnt;?>a" role="tab" aria-controls="nav-<?php echo $cnt;?>a" aria-selected="true">Key Benefits</a>
                                                    <a class="nav-item nav-link" id="nav-<?php echo $cnt;?>b-tab" data-toggle="tab" href="#nav-<?php echo $cnt;?>b" role="tab" aria-controls="nav-<?php echo $cnt;?>b" aria-selected="false"><i class="fas fa-check-square"></i> Included</a>
                                                    <a class="nav-item nav-link" id="nav-<?php echo $cnt;?>c-tab" data-toggle="tab" href="#nav-<?php echo $cnt;?>c" role="tab" aria-controls="nav-<?php echo $cnt;?>c" aria-selected="false"><i class="far fa-list-alt"></i> Requirements & Specs</a>
                                                </div>
                                            </nav>
                                            <div class="tab-content" id="nav-tabContent">
                                                <?php
                                                $cnt_tabs=0;
                                                if ( have_rows('learn_more_modal') ) :
                                                while ( have_rows('learn_more_modal') ) : the_row();
                                                ?>
                                                    <div class="tab-pane fade show active" id="nav-<?php echo $cnt;?>a" role="tabpanel" aria-labelledby="nav-<?php echo $cnt;?>a"><?php the_sub_field('key_benefits_tab')?></div>
                                                    <div class="tab-pane fade" id="nav-<?php echo $cnt;?>b" role="tabpanel" aria-labelledby="nav-<?php echo $cnt;?>b"><?php the_sub_field('included')?></div>
                                                    <div class="tab-pane fade" id="nav-<?php echo $cnt;?>c" role="tabpanel" aria-labelledby="nav-<?php echo $cnt;?>c"><?php the_sub_field('requirements_&_specs')?></div>
                                                <?php
                                                endwhile;
                                                endif;
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 offset-md-1 img-cont">

                                    <div id="carouselExampleIndicators<?php echo $cnt;?>" class="carou-items carousel slide slco image-cont-<?php echo $slide_cnt;?>" data-ride="carousel">

                                        <div class="carousel-inner">
                                            <?php
                                            $cl=0;


                                            if ( have_rows('images') ) :
                                                while ( have_rows('images') ) : the_row();
                                                    if ($cl==0) {
                                                        $te2='active';
                                                    }
                                                    else {
                                                        $te2='';
                                                    }
                                                    ?>
                                                    <div class="carousel-item <?php echo $te2;?>">
                                                        <img class="img-fluid sli" <?php ar_responsive_image(get_sub_field('image'),'full','540px');?>>
                                                    </div>
                                                    <?php
                                                    $cl++;

                                                endwhile;
                                            endif;

                                            ?>
                                        </div>
                                        <ol class="carousel-indicators">
                                            <?php for ($i=0;$i<$cl;$i++){
                                                if ($i==0) {
                                                    $acl='active';
                                                }
                                                else {
                                                    $acl='';
                                                }
                                                ?>
                                                <li data-target="#carouselExampleIndicators<?php echo $cnt;?>" data-slide-to="<?php echo $i;?>" class="<?php echo $acl;?>"></li>
                                                <?php
                                            }
                                            $cnt++;
                                            $slide_cnt++;
                                            ?>
                                        </ol>
                                    </div>
                                </div>
                            <?php
                            endwhile;
                        endif;
                        ?>
                        <div class="col-md-5 dotted-gradient ff">
                            <h2 class=""></h2>

                        </div>
                        <div class="col-md-6">

                        </div>
                    </div>
                </div>

            </div>


            <?php
            break;
        // The policyholder experience
        case 'layout_20':
            ?>
            <div class="jumotron d-flex page-hero" style="
                    background-image:url(<?php echo get_sub_field('background_image');?>);
                    background-position: center center;
                    background-size: cover;">
                <div class="container align-b">
                    <div class="row">
                        <div class="col-md-7 pull-left border-green-left">
                            <h1><?php echo get_sub_field('title');?></h1>
                            <p><?php echo get_sub_field('subtext');?></p>

                        </div>

                    </div>
                </div>
            </div>

            <?php
            break;
        // How it works
        case 'layout_21':
            ?>



            <?php
            break;
        // Roost policyholder stories
        case 'layout_22':
            ?>


            <!-- testemonials -->
            <div class="container section slider-cont policy-stories">
                <div class="row">
                    <div class="col-md-12 first-sec title green_border">
                        <h2><?php echo the_sub_field('title');?></h2>
                        <?php echo the_sub_field('subtitle');?>
                    </div>

                </div>
                <div class="row">
                    <div id="carouselExampleControls" class="carousel slide policyholder-stories-carousel" data-ride="carousel">
                        <div class="carousel-inner">
                            <?php
                            $cnt=0;
                            $cnt_slider=0;

                            $args=array(
                                'post_type' => 'policyholder_stories',
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
                                    <div class="card-columns" style="column-count: 3;">
                                    <?php
                                }
                                ?>


                                <div class="card card-body h-100 justify-content-center">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                            <?php the_post_thumbnail('full'); ?>
                                        </a>
                                        <?php the_title(); ?>
                                        <?php the_excerpt(); ?>
                                    <?php endif; ?>

                                </div>

                                <?php
                                $cnt_slider++;
                                if ($cnt_slider==3){

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
                        jQuery('.policyholder-stories-carousel').carousel({
                            interval: false,
                            pause: 'hover',

                        })
                    });
                </script>

            </div>
            <!-- end testimonials -->

            <?php
            wp_reset_query();
            break;

        case 'layout_101' :
            ?>
            <!-- learn more -->
            <?php
            include (get_template_directory().'/page-templates/sections/learn_more.php');
            break;

        case 'layout_102' :
            ?>
            <!-- slider -->
            <?php
            include (get_template_directory().'/page-templates/sections/slider.php');
            break;

        case 'layout_103' :

            ?>
            <!-- team talk -->
                <div class="jumotron section team-talk ins-sol">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>Interested in learning more about
                                    Roost’s insurance solutions?</h2>
                                <a href="#" class="btn" data-toggle="modal" data-target="#myModal">Lets talk!</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            break;
        /*
            // empty
            case 'layout_8':
                ?>



                <?php
                break;
    */
    }
    $template = ob_get_clean();

    return $template;
}