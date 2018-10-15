<?php

function get_template_by_layout_simple($layout){
    ob_start();
    $current_page =  get_the_ID();
    switch ( $layout ) {
        
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

                    
        // Lets talk main call to action
        case 'layout_33':
            ?>
            <div class="team-talk py-6 bottom-cta" style="background: url(<?php the_sub_field('bg_img');?>);">
			    <div class="container">
			        <div class="row">
			            <div class="col-md-12 text-center bottom-cta-col">
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
			        <div id="all-insurance-slider" class="all-insurance-slider carousel slide insurance-slider">
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
	                        $column_class = " col-md-12";
	                    } else if ( $col_count == 2 ) {
		                    $column_class = " col-md-6";
	                    } else if ( $col_count == 3 ) {
		                    $column_class = " col-md-4";
	                    }
	                    else if ( $col_count == 4 ) {
		                    $column_class = " col-lg-3";
		                    $column_class_md = " col-sm-6";
	                    }
					?>
                        <?php
                        if ( have_rows('boxes') ) :?>
	                        <div class="row flex-cards-row">
		                        <?php
	                            while ( have_rows('boxes') ) : the_row();?>
	                            	<div class="<?php echo $column_class; echo $column_class_md; ?>">
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
            
            
        // Lets talk main call to action
        case 'image_and_content_column':
        	$secbgcolor = get_sub_field('bg-color');
            ?>
            <div class="section image_and_content_column" style="background-color: <?php echo $secbgcolor;?>; background-image: url(<?php the_sub_field('bg_img');?>);">
			    <div class="container">
				    <?php if (get_sub_field('title') || get_sub_field('subtitle') ):?>
				        <div class="row">
					        <div class="col-md-12 first-sec title green_border">
						        <?php if (get_sub_field('title') ):?>
		                        	<h2 class="section-title"><?php the_sub_field('title');?></h2>
		                        <?php endif;?>
		                        <?php if (get_sub_field('subtitle') ):?>
			                        <p class="sub-title-section">
			                            <?php the_sub_field('subtitle');?>
			                        </p>
			                    <?php endif;?>
		                    </div>
				        </div>
			        <?php endif;?>
			        <?php if (get_sub_field('html_content') || get_sub_field('image')):?>
				        <div class="row <?php if (get_sub_field('invert_order')) { echo 'invert-row';}?> image_content_row <?php if (get_sub_field('vertical_center')) { echo 'align-items-center';}?>">
					        <div class="col-md-6">
						        <?php if (get_sub_field('image')):?>
						        	<img class="img-fluid" <?php ar_responsive_image(get_sub_field('image'),'full','900px');?>>
						        <?php endif;?>
					        </div>
				            <div class="col-md-6">
				                <?php if (get_sub_field('html_content')):?>
					                <?php the_sub_field('html_content');?>
				                <?php endif;?>
				                <?php if (get_sub_field('button_link') ):?>
				                	<?php $link = get_sub_field('button_link');?>
				                	<?php if (get_sub_field('if_contact_modal') == true ):?>
				                		<a class="modal-target-contact btn btn-primary" data-toggle="modal" data-target="#myModal" href="#" class="btn"><?php echo $link['title'];?></a>
				                	<?php else:?>
					                	<a class="modal-target-contact btn btn-primary" href="<?php echo $link['url'];?>" class="btn"><?php echo $link['title'];?></a>
				                	<?php endif;?>
				                <?php endif;?>
				            </div>
				        </div>
			        <?php endif;?>
			    </div>
			</div>
            <?php
            break;
            
            
        // Policyholders Stories
        case 'policyholder_stories' :
        	$secbgcolor = get_sub_field('bg-color');
        	global $wp_query;
        	
        	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
			    $query = new WP_Query( array(
			        'posts_per_page' => 6,
			        'paged' => $paged,
			        'post_type' => 'policyholder_stories',
			    ) );
			?> 
	        
			<?php if ( $query->have_posts() ) : ?>
			
            <div class="policyholder-stories-roll" style="background-color: <?php echo $secbgcolor;?>;">
	            <div class="container section">
		            <?php if (get_sub_field('title')):?>
				        <div class="row">
					        <div class="col-md-12 first-sec title green_border">
						        <?php if (get_sub_field('title') ):?>
		                        	<h2 class="section-title"><?php the_sub_field('title');?></h2>
		                        <?php endif;?>
		                    </div>
				        </div>
			        <?php endif;?>
	                <div class="row">
		                <div class="col-12">
			                <div class="post-roll-outer">
				                <?php
					            $counter = 0;
					            while ( $query->have_posts() ) : $query->the_post(); ?>
		                          	<article class="post-roll">
			                          	<h2><a href="<?php echo the_permalink();?>"><?php echo get_the_title();?></a></h2>
			                          	<div class="post-roll-content">
			                                <div class="post-img" style="background-image: url(<?php the_post_thumbnail_url("post-roll");?>);">
					                                <a class="block-link d-block" href="<?php echo the_permalink();?>"></a>
			                                </div>
			                                <div class="post-text">
				                                <div class="meta w-100">
					                                Posted <?php echo get_the_date('m/d/y'); ?> by <?php the_author();?>
				                                </div>
			                                    <p class="mb-2"><?php echo excerpt(265)?>...</p>
			                                    <div class="read-more-wrap">
			                                    	<a class="read-more" href="<?php echo the_permalink();?>">Read More <i class="fas fa-chevron-right"></i></a>
			                                    </div>
			                                    <div class="clearfix"></div>
			                                </div>
			                          	</div>
		                          	</article>
				                <?php $counter++;?>
				                <?php endwhile; wp_reset_query();?>
			                </div>
		                </div>
	                </div>
	                <div class="row">
		                <div class="col-12 text-center">
			                <div class="pagination">
							    <?php 
							        echo paginate_links( array(
							            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
							            'total'        => $query->max_num_pages,
							            'current'      => max( 1, get_query_var( 'paged' ) ),
							            'format'       => '?paged=%#%',
							            'show_all'     => false,
							            'type'         => 'plain',
							            'end_size'     => 2,
							            'mid_size'     => 1,
							            'prev_next'    => true,
							            'add_args'     => false,
							            'add_fragment' => '',
							        ) );
							    ?>
							</div>
							<?php wp_reset_postdata(); ?>
		                </div>
	                </div>
	            </div>
            </div>
            <?php endif; ?>
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