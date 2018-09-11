<?php
/*
Template Name: Layout template
*/
get_header();
?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php
    if (get_field('page_hero_title')){
    ?>
        <div class="jumotron d-flex page-hero" style="background-image:url(<?php echo get_field('page_hero_background_image');?>);">
            <div class="container align-b">
                <div class="row">
                    <div class="col-md-7 pull-left border-green-left">
                        <h1><?php echo get_the_title();?></h1>
                        <p><?php echo get_field('page_subtitle');?></p>
                    </div>
                </div>
            </div>
        </div>
<?php
    }
 ?>

    <?php
        // get layuot from acf and print it out
        if ( have_rows('sections') ) {
            while ( have_rows('sections') ) {
                the_row();
                echo get_template_by_layout( get_row_layout() );
            }
        }
    ?>

<?php endwhile; endif; ?>
<?php
get_footer();
?>
