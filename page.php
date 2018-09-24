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
		<header class="entry-header rellax" data-rellax-speed=".5" data-rellax-percentage="0.5">
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
		<div class="parallax-overlay rellax" data-rellax-speed="-1.5" data-rellax-percentage="0.5">
			<img class="parallax-img" src="<?php the_field('parallax_image'); ?>" width="<?php if( get_field('parallax_image_width') ): the_field('parallax_image_width'); endif;?>"/>
		</div>
	<?php endif; ?>
</div>
	<div id="primary" class="content-area">
		<div class="container">
		<main id="main" class="site-main">
		
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
		</div>
	</div><!-- #primary -->

<?php
get_footer();
