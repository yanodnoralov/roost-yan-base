<?php
	/*
Template Name: App redirect template
*/
/**
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
