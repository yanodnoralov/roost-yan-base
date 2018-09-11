<?php
/*
Template Name: Layout template
*/
get_header();
?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php
    if (get_field('page_hero_title')){
        $position = get_field('background_position') ? get_field('background_position') : 'center center';
    ?>
        <div class="jumotron d-flex page-hero" style="
                background-image:url(<?php echo get_field('page_hero_background_image');?>);
                background-position: <?php echo $position;?>;
                background-size: cover;">
            <div class="container align-b">
                <div class="row">
                    <div class="col-md-7 pull-left border-green-left">
                        <h1><?php echo get_the_title();?></h1>
                        <p><?php echo get_field('page_subtitle');?></p>

                    </div>
                    <div class="col-md-12 head-action" style="clear:both;">
                        <?php

                        if (get_field('header_cta_text')) {
                        ?>
                        <div class="header-action">
                            <a class="btn" href="<?php echo get_field('header_cta_link');?>"><i class="fas fa-play-circle"></i> <?php echo get_field('header_cta_text');?></a>
                        </div>
                        <?php
                        }
                        ?>
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
