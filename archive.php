<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Yan_Designs_Base
 */

get_header();
?>
<?php if ( have_posts() ) : ?>
	<header class="page-header archive">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
					?>
				</div>
			</div>
		</div>
	</header><!-- .page-header -->
<?php endif?>
<div class="container">
	<div class="row">
		<div class="col-12">
			<div id="primary" class="content-area">
				<main id="main" class="site-main">
		
				<?php if ( have_posts() ) : ?>
					
					<div class="row">
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();?>
						
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
						
						<?php/*  get_template_part( 'template-parts/content', get_post_type() ); */ ?>
		
					<?php endwhile; ?>
					</div>
					<?php the_posts_navigation();?>
		
				<?php
				else :
		
					get_template_part( 'template-parts/content', 'none' );
		
				endif;
				?>
		
				</main><!-- #main -->
			</div><!-- #primary -->
		</div>
	</div>
</div>

<?php
get_footer();
