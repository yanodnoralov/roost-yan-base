<?php
function cptui_register_my_cpts() {

    /**
     * Post Type: Testimonials.
     */

    $labels = array(
        "name" => __( "Testimonials", "yan-base" ),
        "singular_name" => __( "Testimonial", "yan-base" ),
    );

    $args = array(
        "label" => __( "Testimonials", "yan-base" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => false,
        "rest_base" => "",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "testimonials", "with_front" => true ),
        "query_var" => true,
        "supports" => array( "title", "editor", "thumbnail" ),
    );

    register_post_type( "testimonials", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
