<?php
/*
Template Name: Layout template
*/
get_header();
?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
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
