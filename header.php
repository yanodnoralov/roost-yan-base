<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Yan_Designs_Base
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- 	<link rel="stylesheet" href="https://use.typekit.net/xyx4pqv.css"> -->
	<script>
	  (function(d) {
	    var config = {
	      kitId: 'fsl8swr',
	      scriptTimeout: 3000,
	      async: true
	    },
	    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
	  })(document);
	</script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <?php wp_head(); ?>

	<style>
	.wf-loading h1, .wf-loading .h2, .wf-loading h2, .wf-loading h3, .wf-loading .h3, .wf-loading p, .wf-loading a {
	    visibility: hidden;
	    opacity: 0;
	    transition: all .5s ease-in-out;
	}
	.wf-active h1, .wf-active .h2, .wf-active h2, .wf-active h3, .wf-active .h3, .wf-active p, .wf-loading a {
	    transition: opacity 1s ease-in-out;
	    opacity: 1;
	}
	body.hide-elements .hide {
		opacity: 0;
	}
	body.hide-elements .hide.now-in-view  {
		opacity: 1;
		transition: all .5s cubic-bezier(0.5, 1, 0.3, 1);
	}
	</style>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'yan-base' ); ?></a>
	
	<div class="pre-menu-container">
		<div class="pre-menu-background">
			<div class="pre-menu-slide"></div>
		</div>
	</div>
	
	<header id="masthead" class="site-header light">
		<div class="container-wide">
			<div class="d-flex header-inner">
				
				<div id="nav-toggle">
					<svg xmlns="http://www.w3.org/2000/svg" width="44" height="24.05" viewBox="0 0 43 24.05"><rect id="bar2" x="5.63" y="11" width="32.25" height="2.05"/><rect id="bar3" x="5.63" y="18" width="32.25" height="2.05"/><rect id="bar1" x="5.63" y="4" width="32.25" height="2.05"/></svg>
				</div>
				
				<div class="site-branding align-items-center d-flex">
					<div class="logo">
						<a href="<?php echo get_home_url(); ?>">
							<img src="<?php echo get_template_directory_uri()?>/img/logo.svg"/>	
						</a>
					</div>
					<div class="site-title-meta d-none">
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php $yan_base_description = get_bloginfo( 'description', 'display' );
						if ( $yan_base_description || is_customize_preview() ) :
							?>
							<p class="site-description"><?php echo $yan_base_description; /* WPCS: xss ok. */ ?></p>
						<?php endif; ?>
					</div>
				</div><!-- .site-branding -->
		
				<nav id="site-navigation" class="main-nav mobile-navigation">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'mobile-menu',
						'menu_id'        => 'primary-menu'					) );
					?>
				</nav><!-- #site-navigation -->
				
				<nav class="main-nav desktop-navigation">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'menu_class'	 => 'sm'
					) );
					?>
				</nav><!-- #site-navigation -->
				
				<nav id="right-menu" class="justify-self-end">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-2',
						'menu_id'        => 'right-menu',
					) );
					?>
				</nav>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		
	<?php
    if (get_field('page_hero_title')){
        $position = get_field('background_position') ? get_field('background_position') : 'center center';
    ?>
        <div class="d-flex page-hero" style="
                background-image:url(<?php echo get_field('page_hero_background_image');?>);
                background-position: <?php echo $position;?>;
                background-size: cover;">
	        <div class="hero-mobile-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-lg-7 pull-left border-green-left">
                        <h1><?php echo get_the_title();?></h1>
                        <p><?php echo get_field('page_subtitle');?></p>

                    </div>
                    <div class="col-md-12 head-action mt-3 mt-lg-4" style="clear:both;">
                        <?php

                        if (get_field('enable_button')) {
	                        $heroLink = get_field('hero_cta');
                        ?>
                        <div class="header-action">
                            <a class="btn btn-primary" title="<?php echo $heroLink["title"];?>" href="<?php echo $heroLink["url"];?>"><?php if (get_field('button_play_icon')) { echo '<i class="fas fa-play-circle mr-2"></i>';} echo $heroLink["title"];?></a>
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

