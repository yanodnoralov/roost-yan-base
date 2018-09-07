<?php

function get_template_by_layout($layout){
    ob_start();
    $current_page =  get_the_ID();
    switch ( $layout ) {
        // save millions
        case 'layout_1':
            ?>
            <div class="jumbotron section-claims">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 first-sec">
                            <h2 class="section-title"><?php the_sub_field('title');?></h2>
                            <p>
                                <?php the_sub_field('subtitle');?>
                            </p>
                        </div>
                    </div>
                    <div class="row white-sec-cont">
                        <div class="col-md-6 offset-md-3 top-cont-card">
                            <?php the_sub_field('top_text');?>
                        </div>
                        <div class="col-md-12 card-deck">
                            <?php
                            if ( have_rows('columns') ) :
                            while ( have_rows('columns') ) : the_row();
                            ?>
                            <div class="card">
                                <img class="card-img-top" <?php ar_responsive_image(get_sub_field('image'),'full','350px');?>>
                                <div class="card-body">
                                    <h2 class="card-title"><?php the_sub_field('title');?></h2>
                                    <p class="card-text">S<?php the_sub_field('text');?>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <div class="middle-vert">
                                        <?php the_sub_field('circle_title');?>
                                        <p>
                                            <?php the_sub_field('circle_subtext');?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php
                            endwhile;
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            break;

        // Roost ecosystem
        case 'layout_2':
            ?>
            <div class="container section brand">
                <div class="row">
                    <div class="col-md-12 first-sec title green_border">
                        <h2 class="section-title"><?php the_sub_field('title');?></h2>
                        <p class="sub-title-section">
                            <?php the_sub_field('subtitle');?>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <?php
                        if ( have_rows('subitems_left') ) :
                        while ( have_rows('subitems_left') ) : the_row();
                        ?>
                        <h4><?php the_sub_field('title');?></h4>
                        <p><?php the_sub_field('text');?></p>
                        <?php
                        endwhile;
                        endif;
                        ?>

                        <div class="brand-extra">
                            <h4><?php the_sub_field('subitem_last_title');?></h4>
                            <p><?php the_sub_field('subitem_last_text');?></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img <?php ar_responsive_image(get_sub_field('ride_side_image'),'full','555px');?>>
                        <div class="brand-small">
                            <?php the_sub_field('text_below_image');?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            break;

        // Turn key development
        case 'layout_3':
            ?>
            <div class="jumbotron section key-dev" style="background: url(<?php echo get_sub_field('background_image'); ?>) no-repeat bottom left; background-size: 200px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 first-sec title">
                            <h2 class="section-title"><?php the_sub_field('title');?></h2>
                            <p class="sub-title-section">
                                <?php the_sub_field('subtitle');?>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        // how many ites do we have here?
                        $count=0;
                        $column_items=0;
                        $count = count( get_sub_field('check_fields') );

                        $column_items = ceil($count/2);

                        $column_count=0;
                        if ( have_rows('check_fields') ) :
                            while ( have_rows('check_fields') ) : the_row();
                                if ($column_count==0) {
                                    ?>
                                    <div class="col-md-6">
                                    <?php
                                }
                                ?>
                                <div class="checkboxes">
                                    <h4><i class="fas fa-check"></i><?php the_sub_field('title');?></h4>
                                    <p><?php the_sub_field('text');?></p>
                                </div>



                                <?php
                                $column_count++;
                                if ($column_count==$column_items) {
                                    $column_count=0;
                                    ?>
                                    </div>
                                    <?php
                                }
                            endwhile;
                        endif;

                        ?>

                    </div>




                </div>
            </div>
            <?php
            break;
        // Cards expanding
        case 'layout_4':
            ?>
            <div class="container section sensors">
                <div class="row">
                    <div class="col-md-12 first-sec title green_border">
                        <h2 class="section-title"><?php the_sub_field('title');?></h2>
                        <p class="sub-title-section">
                            <?php the_sub_field('subtitle');?>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $cnt=0;

                    if ( have_rows('cards') ) :
                    while ( have_rows('cards') ) : the_row();
                        $cnt++;
                    ?>

                    <div class="col-md-4">
                        <div class="card c<?php echo $cnt;?>">
                            <img class="card-img-top" <?php ar_responsive_image(get_sub_field('image'),'full','350px');?>>
                            <div class="card-footer">
                                <h5 class="card-title"><?php the_sub_field('title');?></h5>
                                <div class="card-text"><?php echo get_sub_field('text');?></div>
                            </div>
                        </div>
                    </div>


                    <?php
                    endwhile;
                    endif;
                    ?>

                </div>
                <div class="row">
                    <div class="col-md-12 cta-button">
                        <a href="<?php the_sub_field('cta_url');?>" class="btn btn-primary"><?php the_sub_field('cta_text');?></a>
                    </div>
                </div>
            </div>
            <?php
            break;


        // More details
        case 'layout_5':
            ?>
            <div class="jumotron section more-details">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 first-sec title green_border">
                            <h2 class="section-title"><?php the_sub_field('title');?></h2>
                            <p class="sub-title-section">
                                <?php the_sub_field('subtitle');?>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        // how many ites do we have here?
                        $count=0;
                        $column_items=0;
                        $count = count( get_sub_field('boxes') );

                        $column_items = ceil($count/2);

                        $column_count=0;
                        if ( have_rows('boxes') ) :
                            while ( have_rows('boxes') ) : the_row();
                                if ($column_count==0) {
                                    ?>
                                    <div class="col-md-6">
                                    <?php
                                }
                                ?>

                                <div class="img-text-cont">
                                    <img class="img-more float-left" <?php ar_responsive_image(get_sub_field('image'),'full','540px');?>>
                                    <div class="text float-left">
                                        <h5><?php the_sub_field('title');?></h5>
                                        <p><?php the_sub_field('text');?></p>
                                    </div>
                                </div>


                            <?php
                                $column_count++;
                                if ($column_count==$column_items) {
                                    $column_count=0;
                                    ?>
                                    </div>
                                    <?php
                                }
                            endwhile;
                        endif;

                        ?>
                    </div>
                </div>
            </div>
            <?php
            break;


        // Intelegent app services
        case 'layout_6':
            ?>
            <div class="jumotron section app-services border-left-sec">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="col-md-12 first-sec title green_border">
                                <h2 class="section-title"><?php the_sub_field('title');?></h2>
                                <p class="sub-title-section">
                                    <?php the_sub_field('subtitle');?>
                                </p>
                            </div>
                            <div class="col-md-12">
                                <?php
                                if ( have_rows('image_text') ) :
                                    while ( have_rows('image_text') ) : the_row();
                                        ?>
                                        <div class="img-text-cont">
                                            <div class="img-more float-left">
                                                <img class="img-fluid " <?php ar_responsive_image(get_sub_field('image'),'full','540px');?>>
                                            </div>
                                            <div class="text float-left">
                                                <h5><?php the_sub_field('title');?></h5>
                                                <p><?php the_sub_field('text');?></p>
                                            </div>
                                        </div>
                                    <?php
                                    endwhile;
                                endif;
                                ?>

                            </div>

                        </div>
                        <div class="col-md-6 pull-right">
                            <img class="sli" <?php ar_responsive_image(get_sub_field('right_side_image'),'full','540px');?>>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            break;
    }
    $template = ob_get_clean();

    return $template;
}