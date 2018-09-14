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
<div class="container cta-cont mt-10">
    <div class="row">
        <div class="card-deck">
            <?php if( have_rows('homepage_cta','option') ): while ( have_rows('homepage_cta','option') ) : the_row(); ?>
            <div class="card p-4 p-lg-5">
                <img class="card-img-top w-auto mr-auto" <?php ar_responsive_image(get_sub_field('image')['id'],'full','540px'); ?>/>
                <div class="card-body p-0">
                    <h4><?php echo get_sub_field('title'); ?></h4>
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

<?php include ('sections/slider-alt.php'); ?>

<!-- winwin area -->
<div class="py-6 d-flex globe-area text-white text-center text-md-left bottom-cta" style="background-image:url(<?php echo get_field('cta_2_background_image','option');?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 offset-lg-4">
                <h2 class="display-3 mt-0"><?php echo get_field('cta_2_title','option');?></h2>
                <?php echo get_field('cta_2_text','option');?>
                <a data-toggle="modal" data-target="#myModal" href="<?php echo get_field('cta_2_cta_link','option');?>" class="btn btn-white btn-lg"><?php echo get_field('cta_2_cta_text','option');?></a>
            </div>
        </div>
    </div>
</div>
<!-- end win win area -->
<?php
get_footer();
