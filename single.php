<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Yan_Designs_Base
 */

get_header();
?>
<div class="container">
	<div class="row">
		<div class="col-12">
			<div id="primary" class="content-area">
				<main id="main" class="site-main">
					<?php
					while ( have_posts() ) :
						the_post();
			
						get_template_part( 'template-parts/content', get_post_type() );
			
						the_post_navigation();
			
					endwhile; // End of the loop.
					?>
				</main>
			</div><!-- #primary -->
		</div>
	</div>
</div>
<?php get_footer();
