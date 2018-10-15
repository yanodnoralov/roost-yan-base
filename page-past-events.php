<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Yan_Designs_Base
 */

get_header();
?>
	<div id="primary" class="content-area">
		<div class="container">
			<div class="row">
			<div class="col-12">
				<main id="main" class="site-main">
				<?php if( !get_field('page_hero_title')): ?>
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<?php endif;
					
				//past events
		        	$secbgcolor = get_sub_field('bg-color');
		        	global $wp_query;
		        	$today = date('Ymd');
		        	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
					    $query = new WP_Query( array(
					        'posts_per_page' => 12,
					        'paged' => $paged,
					        'post_type' => 'events',
					        'meta_query' => array(
						        'relation' => 'AND',
								array(
							        'key'		=> 'start_date',
							        'compare'	=> '<',
							        'value'		=> $today,
							    ),
							     array(
							        'key'		=> 'end_date',
							        'compare'	=> '<',
							        'value'		=> $today,
							    )
						    )
					    ) );
					?> 
			        
					<?php if ( $query->have_posts() ) : ?>
					
		            
		            <div class="press-coverage event-list" style="background-color: <?php echo $secbgcolor;?>;">
			            <div class="container">
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
			                <?php
				            $counter = 0;
				            while ( $query->have_posts() ) : $query->the_post(); ?>
				            	<?php
					            // get raw date
								$start_date = get_field('start_date', false, false);
								$end_date = get_field('end_date', false, false);
								
								// make date object
								$start_date = new DateTime($start_date);
								$end_date = new DateTime($end_date);
								
								if(get_field('url')) {
									$the_link = get_field('url');
								} else {
									$the_link = the_permalink();
								}
								?>
								
			                    <div class="col-12 col-sm-6 col-lg-3 d-flex post-box-outer">
		                          	<div class="img-text-cont post-box">
		                                <div class="img-meta">
			                                <div class="img mb-3">
				                                <?php if ( has_post_thumbnail() ) {?>
													<a href="<?php echo $the_link;?>"><?php the_post_thumbnail();?></a>
												<?php } ?>
			                                </div>
		                                </div>
		                                <div class="text">
		                                    <h5><a href="<?php echo the_permalink();?>"><?php echo short_get_the_title(99, get_the_id());?></a></h5>
		                                    <?php if ($start_date == $end_date):?>
												<p class="mb-1"><strong>Date:</strong> <?php echo $start_date->format('M d');?></p>
											<?php else:?>
		                                    	<p class="mb-1"><strong>Date:</strong> <?php echo $start_date->format('M d'); if(get_field('end_date')){ echo ' - '.$end_date->format('M d');}?></p>
		                                    <?php endif;?>
		                                    <p class="mb-2"><strong>Location:</strong> <?php echo get_field('location')?></p>
		                                </div>
		                                <a class="read-more" href="<?php echo $the_link;?>">Event Website <i class="fas fa-chevron-right"></i></a>
		                          	</div>
			                    </div>
			                <?php $counter++;?>
			                <?php endwhile; wp_reset_query();?>
			                </div>
			                <div class="row">
				                <div class="col-12 text-center">
					                <?php echo get_post_type_archive_link( 'events' ); ?>
					                <div class="pagination text-center justify-content-center">
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
				</main><!-- #main -->
			</div>
			</div>
		</div>
	</div><!-- #primary -->

<?php
get_footer();
