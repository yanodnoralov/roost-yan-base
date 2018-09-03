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

<div class="hero">
	<div class="container">
		<header class="entry-header rellax hide" data-rellax-speed=".5" data-rellax-percentage="0.5">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<?php if( get_field('sub_title') ): ?>
				<p class="sub-title"><?php the_field('sub_title'); ?></p>
			<?php endif; ?>
		</header><!-- .entry-header -->
	</div>
	<?php if( get_field('header_image') ): ?>
		<div class="img-overlay" style="background-image: url('<?php the_field('header_image'); ?>');"></div>
	<?php endif; ?>
	<?php if( get_field('parallax_image') ): ?>
		<div class="parallax-overlay rellax" data-rellax-speed="-1" data-rellax-percentage="0.5">
			<img class="parallax-img hide" src="<?php the_field('parallax_image'); ?>" width="<?php if( get_field('parallax_image_width') ): the_field('parallax_image_width'); endif;?>"/>
		</div>
	<?php endif; ?>
</div>
	<div id="primary" class="content-area">
		<div class="container">
		<main id="main" class="site-main">
			
		<?php if( get_field('overview') ): ?>
			<div class="overview hide">
				<div class="row">
					<div class="col-12 text-center">
						<h2>Overview</h2>
						<span class="span-line"></span>
						<?php the_field('overview'); ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
		
		<?php if( get_field('left_content') || get_field('right_content') ): ?>
			<div class="product-content-row">
				<div class="row">
					<div class="col-md-6 hide">
						<?php the_field('left_content'); ?>
					</div>
					<div class="col-md-6 hide">
						<?php the_field('right_content'); ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
		
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		
		</main><!-- #main -->
		</div>
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
