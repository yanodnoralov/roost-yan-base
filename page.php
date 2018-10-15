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

	<?php if( !get_field('page_hero_title')): ?>
		<div class="container">
	        <div class="row">
	            <div class="col-12 col-lg-8">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	            </div>
	        </div>
		</div>
	<?php endif;?>

	<div id="primary" class="content-area">
		<div class="container">
			<div class="row">
			<div class="col-12">
				<main id="main" class="site-main">
				<?php
				while ( have_posts() ) :
					the_post();
		
					get_template_part( 'template-parts/content', 'page' );
		
				endwhile; // End of the loop.
				?>
		
				</main><!-- #main -->
			</div>
			</div>
		</div>
	</div><!-- #primary -->

<?php
get_footer();
