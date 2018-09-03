<?php
	/*
Template Name: Home page
*/
/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Yan_Designs_Base
 */

get_header();
?>

<div class="hero">
	<div class="container">
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<?php if( get_field('sub_title') ): ?>
				<p class="sub-title"><?php the_field('sub_title'); ?></p>
			<?php endif; ?>
		</header><!-- .entry-header -->
	</div>
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
