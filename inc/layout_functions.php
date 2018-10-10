<?php

function get_template_by_layout($layout){
    ob_start();
    $current_page =  get_the_ID();
    switch ( $layout ) {
        // save millions
        case 'layout_1':
            ?>
            <div class="section section-claims">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 first-sec title green_border">
                            <h2 class="section-title"><?php the_sub_field('title');?></h2>
                            <p>
                                <?php the_sub_field('subtitle');?>
                            </p>
                        </div>
                    </div>
                    
                    <div class="row white-sec-row mt-3">
	                    <div class="col-12">
		                    <div class="white-sec-inner">
                        <div class="annual-claims-title h4">
                            <?php the_sub_field('top_text');?>
                        </div>
                        <?php
                        if ( have_rows('columns') ) :
                        while ( have_rows('columns') ) : the_row();
                        ?>
	                        <div class="claim-item">
		                        <div class="claim-img">
	                            	<img <?php ar_responsive_image(get_sub_field('image'),'full','350px');?>>
		                        </div>
	                            <div class="claim-body">
	                                <h4 class="claim-title"><?php the_sub_field('title');?></h4>
	                                <p class="claim-text x"><?php the_sub_field('text');?>
	                                </p>
	                            </div>
                                <div class="circle-text">
                                    <span class="price"><?php the_sub_field('circle_title');?></span>
                                    <span class="tiny"><?php the_sub_field('circle_subtext');?></span>
                                </div>
	                        </div>
                        <?php
                        endwhile;
                        endif;
                        ?>
		                    </div>
	                    </div>
                    </div>
                    
<!--
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
                                <img <?php ar_responsive_image(get_sub_field('image'),'full','350px');?>>
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
-->
                </div>
            </div>
            <?php
            break;

        // Roost ecosystem
        case 'layout_2':
            ?>
            <div class="container section ecosystem">
                <div class="row">
                    <div class="col-md-12 first-sec title green_border">
                        <h2 class="section-title"><?php the_sub_field('title');?></h2>
                        <p class="sub-title-section">
                            <?php the_sub_field('subtitle');?>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-6 pr-xl-10">
                        <?php
                        if ( have_rows('subitems_left') ) :
                        while ( have_rows('subitems_left') ) : the_row();
                        ?>
                        <div class="subitem mb-4 mb-lg-5">
	                        <h4 class="mt-0"><?php the_sub_field('title');?></h4>
	                        <?php the_sub_field('text');?>
                        </div>
                        <?php
                        endwhile;
                        endif;
                        ?>

                        <div class="brand-extra">
                            <h4><?php the_sub_field('subitem_last_title');?></h4>
                            <p><?php the_sub_field('subitem_last_text');?></p>
                        </div>
                    </div>
                    <div class="col-12 mt-4 mt-lg-0 col-lg-6 text-center">
                        <img class="w-auto mx-auto" <?php ar_responsive_image(get_sub_field('ride_side_image'),'full','555px');?>>
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
            <div class="jumbotron section key-dev seperator-y" style="background: url(<?php echo get_sub_field('background_image'); ?>) no-repeat #f9f9f9; background-size: 262px;">
             	<div class="seperator-top">
             	<svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 2694 123"><path d="M0,91S553,35,894,35s817,88,1144,88,656-88,656-88V0H0Z" style="fill:#fff"/></svg>
	            </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 first-sec title">
                            <h2 class="section-title"><?php the_sub_field('title');?></h2>
                            <p class="sub-title-section">
                                <?php the_sub_field('subtitle');?>
                            </p>
                        </div>
                    </div>
                    <div class="row turn-key-list">
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
                                    <h4 class="text-444"><?php the_sub_field('title');?></h4>
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

				<div class="seperator-bottom">
             	<svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 2694 123"><path d="M2694,32s-553,56-894,56S983,0,656,0,0,88,0,88v35H2694Z" style="fill:#fff"/></svg>
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
                <div class="row sensor-items-row">
                    <?php
                    $cnt=0;

                    if ( have_rows('cards') ) :
                    while ( have_rows('cards') ) : the_row();
                        $cnt++;
                    ?>

                    <div class="col-md-4">
                        <div class="item c<?php echo $cnt;?>" style='background-image:url("<?php echo get_sub_field("image");?>");'>
                            <div class="item-copy">
                                <h4 class="item-title"><?php the_sub_field('title');?></h4>
                                <div class="item-text"><?php echo get_sub_field('text');?></div>
                            </div>
                            <?php if(get_sub_field('link')):?>
                            	<a title="<?php the_sub_field('title')?>" class="link" href="<?php the_sub_field('link')?>"></a>
                            <?php endif;?>
                        </div>
                    </div>


                    <?php
                    endwhile;
                    endif;
                    ?>

                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <a href="<?php the_sub_field('cta_url');?>" class="btn btn-primary mt-5"><?php the_sub_field('cta_text');?></a>
                    </div>
                </div>
            </div>
            <?php
            break;


        // More details
        case 'layout_5':
            ?>
            <div class="section more-details">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 first-sec title green_border">
                            <h2 class="section-title"><?php the_sub_field('title');?></h2>
                            <p class="sub-title-section">
                                <?php the_sub_field('subtitle');?>
                            </p>
                        </div>
                    </div>
                    <div class="row more-details-row">
                        <?php
                        // how many ites do we have here?
                        $count=0;
                        $column_items=0;
                        $count = count( get_sub_field('boxes') );

                        $column_items = ceil($count/2);

                        $column_count=0;
                        if ( have_rows('boxes') ) :
                            while ( have_rows('boxes') ) : the_row();?>
                            
                              	<div class="img-text-cont-outer">
	                              	<div class="img-text-cont">
		                                <div class="img-more float-left">
	                                    	<img <?php ar_responsive_image(get_sub_field('image'),'full','540px');?>>
		                                </div>
	                                    <div class="text float-left">
	                                        <h5><?php the_sub_field('title');?></h5>
	                                        <?php the_sub_field('text');?>
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
            <?php
            break;
        
                                
//                                 more details into cols
/*
                                if ($column_count==0) {
                                    ?>
                                    <div class="col-md-6">
                                    <?php
                                }
                                ?>

                                <div class="img-text-cont">
	                                <div class="img-more float-left">
                                    	<img <?php ar_responsive_image(get_sub_field('image'),'full','540px');?>>
	                                </div>
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
*/



        // Intelligent app services
        case 'layout_6':
            ?>
            <div class="section title-left app-services border-left-sec">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-6">
                            <div class="first-sec title green_border">
                                <h2 class="section-title"><?php the_sub_field('title');?></h2>
                                <p class="sub-title-section">
                                    <?php the_sub_field('subtitle');?>
                                </p>
                            </div>
                            <div class="d-block">
                                <?php
                                if ( have_rows('image_text') ) :
                                    while ( have_rows('image_text') ) : the_row();
                                        ?>
                                        <div class="img-text-cont">
                                            <div class="img-more float-left">
                                                <img class="img-fluid " <?php ar_responsive_image(get_sub_field('image')['id'],'full','218px');?>>
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
                                <?php if (get_sub_field('cta_button')):
	                            $cta_button = get_sub_field('cta_button');?>
                                	<a class="btn btn-primary mt-3 mt-lg-4" title="<?php echo $cta_button['title']; ?>" target="<?php echo $cta_button['target']; ?>" href="<?php echo $cta_button["url"]?>"><?php echo $cta_button["title"]?></a>
                                <?php endif;?>
                            </div>

                        </div>
                        <div class="col-12 col-lg-6 text-center text-lg-right">
                            <img class="sli img-fluid mt-5 mt-lg-3" <?php ar_responsive_image(get_sub_field('right_side_image'),'full','917px');?>>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            break;
        // Roost connects
        case 'layout_7':
            ?>
            <div class="container section roost-connects pb-0">
                <div class="row">
                    <div class="col-md-12 first-sec title green_border">
                        <h2 class="section-title"><?php the_sub_field('title');?></h2>
                        <p class="sub-title-section">
                            <?php the_sub_field('subtitle');?>
                        </p>
                    </div>
                </div>
                <div class="row row-of-cards text-center">
                    <?php
                    $cnt=0;

                    if ( have_rows('boxes') ) :
                        while ( have_rows('boxes') ) : the_row();
                            $cnt++;
                            ?>

                            <div class="col-12 col-md-4">
                                <div class="card c<?php echo $cnt;?>">
                                    <div class="c-img">
                                    <img <?php ar_responsive_image(get_sub_field('image'),'full','260px');?>>
                                    </div>
                                    <div class="card-footer">
                                        <h4 class="card-title"><?php the_sub_field('title');?></h4>
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

                            <div class="col-md-4 mb-5 mb-md-0">
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

            <div class="section whats-new seperator-y text-white text-center" style="background: url('<?php the_sub_field('background');?>') no-repeat center center; background-size: cover;">
                <div class="seperator-top">
             	<svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 2694 123"><path d="M0,91S553,35,894,35s817,88,1144,88,656-88,656-88V0H0Z" style="fill:#fff"/></svg>
	            </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 title green_border">
                            <h2><?php the_sub_field('title');?></h2>
                        </div>
                    </div>
                    <div class="row">
	                    <div class="col-12">
                            <p class="lead px-xl-75"><?php the_sub_field('subtitle');?></p>
                            <a href="<?php the_sub_field('cta_1_url');?>" class="btn btn-white mr-md-1 mb-3"><?php the_sub_field('cta_1_text');?></a>
                            <a href="<?php the_sub_field('cta_2_url');?>" class="btn btn-white ml-md-1 mb-3"><?php the_sub_field('cta_2_text');?></a>
	                    </div>
                    </div>
                </div>
                <div class="seperator-bottom">
             	<svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 2694 123"><path d="M2694,32s-553,56-894,56S983,0,656,0,0,88,0,88v35H2694Z" style="fill:#fff"/></svg>
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
                            $size='offset-md-2';
                            if ( have_rows('team_members') ) :
                            while ( have_rows('team_members') ) : the_row();
                            $cnt++;
                            if ($cnt>1) { $size='';}
                            ?>
                            <div class="mb-5 col-md-4 <?php echo $size;?>">
                                <div class="image mb-3">
                                    <?php
                                    if (get_sub_field('image')){
                                        ?>
                                        <img <?php ar_responsive_image(get_sub_field('image'),'full','400px');?> >
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
            <div class="roost-careers" style="background: url(<?php the_sub_field('background_image');?>);">
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
            
        // Lets talk main call to action
        case 'layout_33':
            ?>
            <div class="team-talk py-6 bottom-cta" style="background: url(<?php the_sub_field('bg_img');?>);">
			    <div class="container">
			        <div class="row">
			            <div class="col-md-12 text-center">
				            <?php if (get_sub_field('title')):?>
			                	<h2 class="display-3 mt-0"><?php the_sub_field('title');?></h2>
			                <?php endif;?>
			                <?php if (get_sub_field('html_content')):?>
				                <?php the_sub_field('html_content');?>
			                <?php endif;?>
			                <?php if (get_sub_field('button_link') ):?>
			                	<?php $link = get_sub_field('button_link');?>
			                	<?php if (get_sub_field('if_contact_modal') == true ):?>
			                		<a class="modal-target-contact btn btn-white btn-lg" data-toggle="modal" data-target="#myModal" href="#" class="btn"><?php echo $link['title'];?></a>
			                	<?php else:?>
				                	<a class="modal-target-contact btn btn-white btn-lg" href="<?php echo $link['url'];?>" class="btn"><?php echo $link['title'];?></a>
			                	<?php endif;?>
			                <?php endif;?>
			            </div>
			        </div>
			    </div>
			</div>
            <?php
            break;




        // horizontal boxes
        case 'layout_16':
            ?>
                <div class="horizontal-boxes" style="background: #ffffff url(<?php the_sub_field('background_image');?>) right top no-repeat;">
                    <div class="container section horizontal-boxes title-left" >
	                    <div class="boxes-all-wrap">
	                        <?php if ( have_rows('boxes') ) :
	                            while ( have_rows('boxes') ) : the_row();
	                                ?>
	                                <div class="row boxs-row">
	                                <div class="col-md-6 dotted-gradient">
	                                    <h2 class="green_border"><?php the_sub_field('title');?></h2>
	                                    <?php the_sub_field('sub_text');?>
	                                </div>
	                                
	                                <div class="col-md-5 offset-md-1 pt-5 img-col px-md-0">
		                                <div class="img-cont">
                                            <img class="img-fluid sli d-block" <?php ar_responsive_image(get_sub_field('image'),'full','956px');?>>
		                                </div><!-- /img-cont -->
	                                </div>
	                                </div><!-- /row -->
	                            <?php
	                            endwhile;
	                        endif; ?>
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
                        <div class="col-md-12 title green_border">
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
                                                    <?php the_sub_field('text');?>
                                                    <a class="mt-3 d-inline-block caret" href="<?php the_sub_field('read_more_link');?>">Read more</a>
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
                                                                <img class="img-fluid sli" <?php ar_responsive_image(get_sub_field('image'),'full','640px');?>>
                                                            </div>
                                                            <?php
                                                            $cl++;
                                                        endwhile;
                                                        endif;
                                                        ?>
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

                    </div>
                </div>
            </div>
            <script>
                jQuery( document ).ready(function() {
	                
                    jQuery('.img-text-cont').hover(function() {
	                    if (!$(this).hasClass("active-box")) {
	                        var slide_cont= $(this).data("slide");
	                        $(".slco").fadeOut("fast");
	                        $('.image-cont-'+slide_cont).fadeIn("fast");
	                        $(".img-text-cont").removeClass("active-box");
	                        $(this).addClass("active-box");
                        }
                    });
                });
            </script>

            <?php
            break;
        // Full custom integration
        case 'layout_18':
            ?>
            <div class="jumbotron full-custom-integration section">
                <div class="container text-center text-md-left section">
	                <div class="full-custom-integration-inner bg-white">
	                    <div class="row">
	                        <div class="col-md-12 first-sec title green_border pp">
	                            <h2 class="section-title"><?php the_sub_field('title');?></h2>
	                        </div>
	                    </div>
	                    <div class="row">
	                        <div class="col-md-12 pp">
	                            <div class="float-md-left text-center text-md-left">
		                            <img class="img-h mb-4 float-md-left" <?php ar_responsive_image(get_sub_field('icon'),'full','240px');?>></div>
	
	                            <div class="sub-title-section">
	                                <?php the_sub_field('text');?>
	                            </div>
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
            <div class="jumbotron horizontal-boxes boxes-with-carousel" style="background: #fff url(<?php the_sub_field('background_image');?>) right top no-repeat;">
                <div class="container section horizontal-boxes title-left" >
                    <div class="boxes-all-wrap">
                        <?php
                        $cnt=0;
                        $slide_cnt=1;
                        if ( have_rows('boxes') ) :
                            while ( have_rows('boxes') ) : the_row();
                                ?>
                                <div class="row boxs-row">
                                <div class="col-md-6 dotted-gradient">
                                    <h2 class="green_border"><?php the_sub_field('title');?></h2>
                                    <?php the_sub_field('subtext');?>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-outline btn-light mr-3 learn-more-btn" data-toggle="modal" data-target="#modal-box-<?php echo $cnt;?>">
                                        Learn More
                                    </button>
                                    <!-- Button trigger modal -->
                                    <?php if (get_sub_field('cta_text')):?>
	                                    <button type="button" class="btn btn-play" data-toggle="modal" data-target="#modal-action-<?php echo $cnt;?>">
	                                        <i class="fas fa-play-circle mr-2"></i><?php the_sub_field('cta_text');?>
	                                    </button>
                                    <?php endif;?>
                                </div>

                                <!-- Modal1 -->
                                <div class="modal fade" id="modal-action-<?php echo $cnt;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <?php the_sub_field('modal2_content');?>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal2 -->
                                <div class="modal fade bd-example-modal-lg learn-more-modal" id="modal-box-<?php echo $cnt;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
	                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <nav>
                                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                    <a class="nav-item nav-link active" id="nav-<?php echo $cnt;?>a-tab" data-toggle="tab" href="#nav-<?php echo $cnt;?>a" role="tab" aria-controls="nav-<?php echo $cnt;?>a" aria-selected="true"><i class="fas fa-thumbs-up"></i> Key Benefits</a>
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
                                <div class="col-md-5 offset-md-1 pt-5 img-col">
	                                <div class="img-cont">
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
	                                                        <img class="img-fluid sli d-block" <?php ar_responsive_image(get_sub_field('image'),'full','540px');?>>
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
	                                </div><!-- /img-cont -->
                                </div>
                                </div><!-- /row -->
                            <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>

            </div>


            <?php
            break;
        // Full width hero flexible
        case 'layout_20':
            ?>
            <div class="page-hero flexible-hero" style="
                    background-image:url(<?php echo get_sub_field('background_image');?>);
                    background-position: <?php if (get_sub_field('subtext')) { the_sub_field('background_position'); } else { echo 'center center'; }?>;
                    background-size: cover;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 align-b border-green-left">
                            <h1><?php echo get_sub_field('title');?></h1>
                            <p><?php echo get_sub_field('subtext');?></p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="page-hero flexible-hero page-hero-mobile">
		        <div class="mobile-hero-row"></div>
	            <div class="container">
	                <div class="row mobile-hero-content-row">
	                    <div class="col-12">
	                        <h1><?php echo get_sub_field('title');?></h1>
                            <p><?php echo get_sub_field('subtext');?></p>
	                    </div>
	                    <?php
						if (get_sub_field('enable_button')) {?>
		                    <div class="col-md-12 head-action mt-3 mt-lg-4" style="clear:both;">
		                        <?php
			                        $heroLink = get_sub_field('hero_cta');
		                        ?>
		                        <div class="header-action">
		                            <a class="btn btn-primary" title="<?php echo $heroLink["title"];?>" href="<?php echo $heroLink["url"];?>"><?php if (get_field('button_play_icon')) { echo '<i class="fas fa-play-circle mr-2"></i>';} echo $heroLink["title"];?></a>
		                        </div>
		                    </div>
	                    <?php
	                    }
	                    ?>
	                </div>
	            </div>
	        </div>
	        <style>
		        @media (max-width:767px){
			        .page-hero-mobile.flexible-hero .mobile-hero-row {
				        <?php if(get_sub_field('page_hero_background_image_mobile_flexible')):?>
							background-image:url(<?php echo get_sub_field('page_hero_background_image_mobile_flexible');?>);
			        	<?php else:?>
				        	background-image:url(<?php echo get_sub_field('background_image');?>);
						<?php endif?>
			        }
				}
		    </style>

            <?php
            break;
        // How it works
        case 'layout_21':
            ?>
            <div class="how-it-works" style="background-color: #f6f9fb;">
	            <div class="container section">
	                <div class="row">
	                    <div class="col-md-12 first-sec title green_border">
	                        <h2 class="section-title"><?php the_sub_field('title');?></h2>
	                        <p class="sub-title-section">
	                            <?php the_sub_field('subtitle');?>
	                        </p>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-12 col-lg-4">
	                        <?php
	                        if ( have_rows('left_boxes') ) :
	                        while ( have_rows('left_boxes') ) : the_row();
	                        ?>
		                        <div class="img-text-cont-outer">
		                          	<div class="img-text-cont">
		                                <div class="img-more">
		                                	<img <?php ar_responsive_image(get_sub_field('icon'),'full','220px');?>>
		                                </div>
		                                <div class="text">
		                                    <?php the_sub_field('text');?>
		                                </div>
		                          	</div>
		                        </div>                       
	                        <?php
	                        endwhile;
	                        endif;
	                        ?>
	                    </div>
	                    <div class="col-12 col-lg-8 text-center">
	                        <img class="w-auto mx-auto sli mt-5 mt-lg-0" <?php ar_responsive_image(get_sub_field('right_side_image'),'full','1540px');?>>
	                    </div>
	                </div>
	            </div>
            </div>
            <?php
            break;

        // Roost policyholder stories
        case 'layout_22':
            ?>


            <!-- testemonials -->
            <div class="container section policy-stories slider-cont">
                <div class="row">
                    <div class="col-md-12 first-sec title green_border">
                        <h2><?php echo the_sub_field('title');?></h2>
                        <?php echo the_sub_field('subtitle');?>
                    </div>

                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="stories-slider-inner carousel">
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
                                ?>

								<div class="stories-item-wrapper <?php echo $class;?>">
									<div class="stories-item">
										<?php if ( has_post_thumbnail() ) : ?>
		                                    <div class="story-img" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
		                                    </div>
		                                <?php endif; ?>
		                                <div class="story-body justify-content-center">
	                                        <h5 class="story-title"><?php the_field('slider_title');?></h5>
	                                        <p><?php the_field('slider_excerpt');?>...</p>
	                                        <a href="<?php the_permalink()?>">Read More</a>
		                                </div>
									</div>
								</div>

                                <?php
                                $cnt_slider++;
                            endwhile;
                            endif;
                            ?>

                        </div>
                    </div>
                </div>
                <?php if (get_sub_field('link')):
                $cta_button = get_sub_field('link');?>
                <div class="row"><div class="col-12 text-center">
                	<a class="btn btn-primary mt-4 mt-lg-5" title="<?php echo $cta_button['title']; ?>" target="<?php echo $cta_button['target']; ?>" href="<?php echo $cta_button["url"]?>"><?php echo $cta_button["title"]?></a>
                <?php endif;?>
                </div></div>
                
                <script>
			        jQuery(document).ready(function() {
			            jQuery('.stories-slider-inner').slick({
							infinite: true,
							slidesToShow: 2,
							rows: 1,
							slidesToScroll: 1,
							infinite: true,
							arrows: true,
							prevArrow: '<div class="custom-nav prev"></div>',
							nextArrow: '<div class="custom-nav next"></div>',
							responsive: [
						    {
						      breakpoint: 768,
						      settings: {
						        slidesToShow: 1,
						      }
						    }
						    ]
						});
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
            include (get_template_directory().'/page-templates/sections/slider-alt.php');
            
            wp_reset_query();
            break;
            
            
        // Press Releases
        case 'press_releases_latest_8':
        	global $wp_query;
	        $args = array(
	        'cat' => '10',
	        'posts_per_page' => 8); //get all posts
	
			// The Query
			query_posts( $args );?>
			
            <div class="press-releases" style="background-color: #f9f9f9;">
	            <div class="container section">
	                <div class="row">
	                    <div class="col-md-12 first-sec title green_border">
	                        <h2 class="section-title"><?php the_sub_field('title');?></h2>
	                    </div>
	                </div>
	                <div class="row">
	                <?php
		            $counter = 0;
		            while ( have_posts() ) : the_post();?>
	                    <div class="col-12 col-sm-6 col-lg-3 d-flex">
                          	<div class="img-text-cont post-box">
                                <div class="img-meta">
	                                <div class="img float-left">
		                                <?php if ( has_post_thumbnail() ) {
											the_post_thumbnail("medium");
										} ?>
	                                </div>
	                                <div class="meta float-right">
		                                <?php echo get_the_date('m/d/y'); ?>
	                                </div>
	                                <div class="clearfix"></div>
                                </div>
                                <div class="text">
                                    <h5><a href="<?php echo the_permalink();?>"><?php echo short_get_the_title(39, get_the_id());?></a></h5>
                                    <p class="mb-2"><?php echo excerpt(65)?>...</p>
                                    <a class="read-more" href="<?php echo the_permalink();?>">Read More <i class="fas fa-chevron-right"></i></a>
                                </div>
                          	</div>
	                    </div>
	                <?php $counter++;?>
	                <?php endwhile; wp_reset_query();?>
	                </div>
	                <div class="row">
		                <div class="col-12 text-center">
	                		<a href="<?php echo get_category_link(12) ?>" class="mt-3 btn btn-primary">Show More</a>
		                </div>
	                </div>
	            </div>
            </div>
            <?php
            break;
            
            
        // Press Coverage
        case 'press_coverage_latest_8':
        	global $wp_query;
	        $args = array(
	        'cat' => '12',
	        'posts_per_page' => 8); //get all posts
	
			// The Query
			query_posts( $args );?>
			
            <div class="press-coverage" style="background-color: #ffffff;">
	            <div class="container section">
	                <div class="row">
	                    <div class="col-md-12 first-sec title green_border">
	                        <h2 class="section-title"><?php the_sub_field('title');?></h2>
	                    </div>
	                </div>
	                <div class="row">
	                <?php
		            $counter = 0;
		            while ( have_posts() ) : the_post();?>
	                    <div class="col-12 col-sm-6 col-lg-3 d-flex">
                          	<div class="img-text-cont post-box">
                                <div class="img-meta">
	                                <div class="img mb-3">
		                                <?php if ( has_post_thumbnail() ) {?>
											<a href="<?php echo the_permalink();?>"><?php the_post_thumbnail();?></a>
										<?php } ?>
	                                </div>
	                                <div class="meta w-100 mb-2">
		                                <?php echo get_the_date('m/d/y'); ?>
	                                </div>
                                </div>
                                <div class="text">
                                    <h5><a href="<?php echo the_permalink();?>"><?php echo short_get_the_title(39, get_the_id());?></a></h5>
                                    <p class="mb-2"><?php echo excerpt(85)?>...</p>
                                    <a class="read-more" href="<?php echo the_permalink();?>">Read More <i class="fas fa-chevron-right"></i></a>
                                </div>
                          	</div>
	                    </div>
	                <?php $counter++;?>
	                <?php endwhile; wp_reset_query();?>
	                </div>
	                <div class="row">
		                <div class="col-12 text-center">
	                		<a href="<?php echo get_category_link(10) ?>" class="mt-3 btn btn-primary">Show More</a>
		                </div>
	                </div>
	            </div>
            </div>
            <?php
            break;
            
        // Two Column Row
        case 'two_cards_row':
            ?>
            <div class="section two-cards-row position-relative" style="background: #f7f7f7;">
	            <?php if ( is_page_press() ):?>
		            <div class="seperator-top">
	             		<svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 2800 63.18"><path d="M2800,0V63.18C2604.1,39.25,2051.3,6,1400,6S195.9,39.25,0,63.18V0Z" style="fill:#fff"/></svg>
		            </div>
	            <?php endif;?>
                <div class="container">
	                <?php if ( get_sub_field('title') || get_sub_field('subtitle') ):?>
                    <div class="row">
                        <div class="col-md-12 first-sec title green_border">
	                        <?php if ( get_sub_field('title') ):?>
                            	<h2 class="section-title"><?php the_sub_field('title');?></h2>
                            <?php endif; ?>
                            <?php if ( get_sub_field('subtitle') ):?>
                            	<p class="sub-title-section">
                                <?php the_sub_field('subtitle');?>
                            	</p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                        <?php
                        if ( have_rows('boxes') ) :?>
	                        <div class="row two-cards-row">
		                        <?php
	                            while ( have_rows('boxes') ) : the_row();?>
	                            	<div class="col-md-6">
		                              	<div class="img-text-cont no-floats text-center">
			                              	<?php if (get_sub_field('image')):?>
				                                <div class="img-more w-100">
			                                    	<img class="p-0 mb-3" <?php ar_responsive_image(get_sub_field('image'),'full','540px');?>>
				                                </div>
			                                <?php endif;?>
		                                    <div class="text w-100">
			                                    <?php if (get_sub_field('title')):?>
		                                        	<h2><?php the_sub_field('title');?></h2>
		                                        <?php endif;?>
		                                        <?php the_sub_field('text');?>
		                                        <?php if (get_sub_field('button')):
					                            	$cta_button = get_sub_field('button');?>
				                                	<a class="btn btn-primary btn-outline mt-3" title="<?php echo $cta_button['title']; ?>" target="<?php echo $cta_button['target']; ?>" href="<?php echo $cta_button["url"]?>"><?php echo $cta_button["title"]?></a>
				                                <?php endif;?>
		                                    </div>
		                              	</div>
	                            	</div>
	                            <?php
	                            endwhile;?>
	                        </div>
                        <?php endif;?>
                    
                </div>
            </div>
            <?php
            break;


		case 'layout_all_insurance_customers' :
			?>
			<!-- testemonials -->
			<div class="all-insurance-wrapper">
			<div class="container section slider-cont">
				<?php if ( the_sub_field('title') ):?>
				    <div class="row">
				        <div class="col-12 px-lg-50 first-sec title green_border">
				            <h2><?php echo the_sub_field('title'); ?></h2>
				        </div>
				    </div>
			    <?php endif;?>
			    <div class="row all-insurance-outer">
				    <div class="col-12">
			        <div id="all-insurance-slider" class="all-insurance-slider carousel slide">
			            <div class="all-insurance-slider-inner">
				            
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
			                            <?php if(get_field('link')):?>
			                            	<div class="read-more"><a class="caret" href="<?php echo get_field('link');?>">Read more</a></div>
			                            <?php endif; ?>
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
			</div>
			</div>
			<!-- end testimonials -->
            
            <?php
            wp_reset_query();
            break;
        
        
        // Two Column Row
        case 'flexible_cards_row':
            ?>
            <div class="section flexible_cards_row position-relative" style="background: <?php if ( get_sub_field('background_color') ){ echo get_sub_field('background_color'); }?>;">
                <div class="container">
	                <?php if ( get_sub_field('title') || get_sub_field('subtitle') ):?>
                    <div class="row">
                        <div class="col-md-12 first-sec title green_border">
	                        <?php if ( get_sub_field('title') ):?>
                            	<h2 class="section-title"><?php the_sub_field('title');?></h2>
                            <?php endif; ?>
                            <?php if ( get_sub_field('subtitle') ):?>
                            	<p class="sub-title-section">
                                <?php the_sub_field('subtitle');?>
                            	</p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php 
	                    $col_count=0;
                        $column_items=0;
                        $col_count = count( get_sub_field('boxes') );

                        if ( $col_count == 1 ) {
	                        $column_class = "12";
	                    } else if ( $col_count == 2 ) {
		                    $column_class = "6";
	                    } else if ( $col_count == 3 ) {
		                    $column_class = "4";
	                    }
	                    else if ( $col_count == 4 ) {
		                    $column_class = "3";
	                    }
					?>
                        <?php
                        if ( have_rows('boxes') ) :?>
	                        <div class="row flex-cards-row">
		                        <?php
	                            while ( have_rows('boxes') ) : the_row();?>
	                            	<div class="col-md-<?php echo $column_class?>">
		                              	<div class="img-text-cont no-floats">
			                              	<?php if (get_sub_field('image')):?>
				                                <div class="img-more w-100">
			                                    	<img class="p-0 mb-3" <?php ar_responsive_image(get_sub_field('image'),'full','540px');?>>
				                                </div>
			                                <?php endif;?>
		                                    <div class="text w-100">
			                                    <?php if (get_sub_field('title')):?>
		                                        	<h4><?php the_sub_field('title');?></h4>
		                                        <?php endif;?>
		                                        <?php the_sub_field('text');?>
		                                        <?php if (get_sub_field('button')):
					                            	$cta_button = get_sub_field('button');?>
				                                	<a class="btn btn-primary btn-outline mt-3" title="<?php echo $cta_button['title']; ?>" target="<?php echo $cta_button['target']; ?>" href="<?php echo $cta_button["url"]?>"><?php echo $cta_button["title"]?></a>
				                                <?php endif;?>
		                                    </div>
		                              	</div>
	                            	</div>
	                            <?php
	                            endwhile;?>
	                        </div>
                        <?php endif;?>
                    
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