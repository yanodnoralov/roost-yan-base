<?php
/**
 * Yan Designs Base functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Yan_Designs_Base
 */

if ( ! function_exists( 'yan_base_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function yan_base_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Yan Designs Base, use a find and replace
		 * to change 'yan-base' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'yan-base', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'yan-base' ),
			'menu-2' => esc_html__( 'Right', 'yan-base' ),
            'menu-3' => esc_html__( 'Footer 1', 'yan-base' ),
            'menu-4' => esc_html__( 'Footer 2', 'yan-base' ),
            'menu-5' => esc_html__( 'Footer 3', 'yan-base' ),
            'menu-6' => esc_html__( 'Footer 4', 'yan-base' ),
            'mobile-menu' => esc_html__( 'Mobile', 'yan-base' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'yan_base_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
/*
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
*/
	}
endif;
add_action( 'after_setup_theme', 'yan_base_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function yan_base_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'yan_base_content_width', 640 );
}
add_action( 'after_setup_theme', 'yan_base_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function yan_base_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'yan-base' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'yan-base' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'yan_base_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function yan_base_scripts() {
	wp_enqueue_style( 'yan-base-style', get_stylesheet_uri(), '1.25', true );
	
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), '1', true );

	wp_enqueue_script( 'yan-base-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	
	wp_enqueue_script( 'plugins', get_template_directory_uri() . '/js/plugins-min.js', array('jquery'), '1.1', true );
	
	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom-min.js', array('plugins'), '1.2', true );

	wp_enqueue_script( 'yan-base-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'yan_base_scripts' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


/**
 * Implement ACF options pages.
 */
require get_template_directory() . '/inc/acf.php';

/**
 * Implement Custom Post Types
 */
require get_template_directory() . '/inc/cpt.php';

/**
 * Include layout functions
 */
require get_template_directory() . '/inc/layout_functions.php';

/**
 * Include layout functions
 */
require get_template_directory() . '/inc/simple_layout_functions.php';


//custom title length
function short_get_the_title( $length = null, $id = 0 ) {
    $post = &get_post($id);

    $title = isset($post->post_title) ? $post->post_title : '';
    $id = isset($post->ID) ? $post->ID : (int) $id;
    
    $titleCount = strlen($title);

    if ( !is_admin() ) {
        if ( !empty($post->post_password) ) {
            $protected_title_format = apply_filters('protected_title_format', __('Protected: %s'));
            $title = sprintf($protected_title_format, $title);
        } else if ( isset($post->post_status) && 'private' == $post->post_status ) {
            $private_title_format = apply_filters('private_title_format', __('Private: %s'));
            $title = sprintf($private_title_format, $title);
        }
    }

    // Shorten the title
    if ( null != $length ) {
        $length = (int) $length;

        $title = substr( $title, 0, $length ); // Only take the first 20 characters
		if ($titleCount > $length) {
        	$title .= "...";
        }
    }

    return apply_filters( 'the_title', $title, $id );
}

function short_the_title($before = '', $after = '', $echo = true, $length = null) {
    $title = get_the_title($length);

    if ( strlen($title) == 0 )
        return;

    $title = $before . $title . $after;

    if ( $echo )
        echo $title;
    else
        return $title;
}

function excerpt($limit) {
    return wp_html_excerpt( get_the_excerpt(), $limit );
}

//timezone
date_default_timezone_set('America/Los_Angeles'); 



//redirect external url field
function wpdev_permalink_links( $link, $post ) {
    $meta = get_post_meta( $post->ID, 'external_url', TRUE );
    $url = esc_url( filter_var( $meta, FILTER_VALIDATE_URL ) );
    return $url ? $url : $link;
}
add_filter( 'post_link', 'wpdev_permalink_links', 10, 2 );

//Page Slug Body Class
function add_slug_body_class( $classes ) {
	global $post;
	if ( isset( $post ) ) {
	$classes[] = $post->post_type . '-' . $post->post_name;
	}
	if (get_field('hide_nav_and_footer')) {
		$classes[] = 'hide-nav-footer';
	}
	return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

//add image size
add_image_size( 'post-roll', 700, 500, array( 'center', 'center' ) );