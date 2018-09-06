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
	<?php
        $slider=get_field('rev_slider_shortcode','option');
        echo do_shortcode($slider);
	?>
</div>

<!-- first cta -->
<div class="container cta-cont">
    <div class="row">
        <div class="card-deck">

            <?php if( have_rows('homepage_cta','option') ): while ( have_rows('homepage_cta','option') ) : the_row(); ?>
            <div class="card">



                <img class="card-img-top" <?php ar_responsive_image( get_sub_field('image') ,'full','152px' ); ?>>
                <div class="card-body">
                    <h5 class="card-title"><?php echo get_sub_field('title'); ?></h5>
                    <p class="card-text"><?php echo get_sub_field('text'); ?></p>

                </div>
                <div class="card-footer">
                    <a href="<?php echo get_sub_field('button_url'); ?>" class="btn btn-primary"><?php echo get_sub_field('button_text'); ?></a>
                </div>
            </div>
            <?php endwhile; endif; ?>

        </div>
    </div>
</div>
<!-- end first cta -->

<?php include ('sections/slider.php'); ?>

<!-- winwin area -->
<div class="jumbotron h-100 d-flex globe-area" style="background-image:url(<?php echo get_field('cta_2_background_image','option');?>);">
    <div class="container my-auto">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2><?php echo get_field('cta_2_title','option');?></h2>
                <p><?php echo get_field('cta_2_text','option');?></p>
                <a href="<?php echo get_field('cta_2_cta_link','option');?>" class="btn btn-primary letstalk"><?php echo get_field('cta_2_cta_text','option');?></a>
            </div>
        </div>
    </div>
</div>
<!-- end win win area -->
<?php
get_footer();
