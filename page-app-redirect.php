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

<style>
	html {
		border-top: 2px solid #3283c8;
		margin-top: 0 !important;
	}
</style>

	<div id="primary" class="content-area">
		<div class="container">
			<div class="row">
			<div class="col-12">
				<main id="main" class="site-main row">
					<?php if (get_field('logo')):?>
					<div class="col-sm-3 mb-4 text-sm-right">
						<img <?php ar_responsive_image(get_field('logo'),'full','350px');?>>
					</div>
					<?php endif;?>
					<div class="col-sm-9">
						<?php if (get_field('message')):?>
							<?php the_field('message');?>
						<?php else:?>
							<p>Please download the app on your phone from either your Google Play App Store or iTunes App Store.</p>
							<p>Have questions? Contact <a href="mailto:support@getroost.com">support@getroost.com</a></p>
						<?php endif;?>
					</div>
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