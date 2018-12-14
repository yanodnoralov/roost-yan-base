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
	
	
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-PHMN4C5');</script>
	<!-- End Google Tag Manager -->
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-55382605-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	
	  gtag('config', 'UA-55382605-1');
	</script>

	
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
	@media (max-width:767px){
		.page-hero-mobile:not(.flexible-hero) .mobile-hero-row {
			<?php if(get_field('page_hero_background_image_mobile')):?>
				background-image:url(<?php echo get_field('page_hero_background_image_mobile');?>);
        	<?php else:?>
	        	background-image:url(<?php echo get_field('page_hero_background_image');?>);
			<?php endif?>
        }
        .page-hero-mobile.flexible-hero .mobile-hero-row {
	        <?php if(get_sub_field('page_hero_background_image_mobile_flexible')):?>
				background-image:url(<?php echo get_sub_field('page_hero_background_image_mobile_flexible');?>);
        	<?php else:?>
	        	background-image:url(<?php echo get_sub_field('background_image');?>);
			<?php endif?>
        }
	}
	</style>
	
	
	<!-- app template redirection code -->
	<?php if (is_page_template('page-app-redirect.php')):?>
		<?php $onload = 'onload="DetectAndServe()"';?>
		<script>
			function getMobileOperatingSystem() {
			  var userAgent = navigator.userAgent || navigator.vendor || window.opera;
			
			    // Windows Phone must come first because its UA also contains "Android"
			    if (/windows phone/i.test(userAgent)) {
			        return "Windows Phone";
			    }
			
			    if (/android/i.test(userAgent)) {
			        return "Android";
			    }
			
			    // iOS detection from: http://stackoverflow.com/a/9039885/177710
			    if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
			        return "iOS";
			    }
			
			    return "unknown";
			}
			
			function DetectAndServe(){
				
			<?php if (get_field('android-link')):
				$androidLink = get_field('android-link');?>
			
				if (getMobileOperatingSystem() == "Android") {
				    window.location.href = "<?php echo $androidLink;?>";
				}
			
			<?php endif;?>  
			
			<?php if (get_field('ios-link')):
				$iosLink = get_field('ios-link');?>
			
				if (getMobileOperatingSystem() == "iOS") {
				    window.location.href = "<?php echo $iosLink;?>";
				}
			
			<?php endif;?>
			
			};
			
		</script>
	<?php endif;?>
	
</head>

<body <?php echo $onload;?> <?php body_class();?> >
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PHMN4C5"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'yan-base' ); ?></a>
	
	<?php if (!is_page_template('page-app-redirect.php')):?>
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
	if ( 'post' == get_post_type() && !get_field('page_hero_background_image')) {
		$defaultHero = 'default-hero';
	}
	if ( get_field('page_hero_background_image')) {
		$titleWidth = 'col-md-7 col-lg-7';
	} else {
		$titleWidth = 'col-12';
	}
	$headerHasNotClass = "";
	if (!get_field('page_subtitle')) {
		$headerHasNotClass = $headerHasNotClass . " no-sub-title";
	}
	if (!get_field('page_hero_title')) {
		$headerHasNotClass = $headerHasNotClass . " no-title";
	}
	if (!get_field('enable_button')) {
		$headerHasNotClass = $headerHasNotClass . " no-button";
	}
	if (!get_field('page_hero_background_image')) {
		$headerHasNotClass = $headerHasNotClass . " no-hero-img";
	}
	if (get_field('light_text')) {
		$headerHasNotClass = $headerHasNotClass . " light-text";
	}
	if (get_field('fluid_height')) {
		$headerHasNotClass = $headerHasNotClass . " fluid-height";
	}
	$headerMobileHasNotClass = $headerHasNotClass;
	if ( get_field('mobile_inside_text')) {
		$headerMobileHasNotClass = $headerMobileHasNotClass . " fluid-height";
	}
	
    if (get_field('page_hero_title')){
        $position = get_field('background_position') ? get_field('background_position') : 'center center';
    ?>
        <div class="title-hero d-flex page-hero <?php echo $defaultHero; echo $headerHasNotClass;?>" style="
	        <?php if ( 'post' == get_post_type() && !get_field('page_hero_background_image')) {} else {?>
                background-image:url( <?php echo get_field('page_hero_background_image');?>);
                background-position: <?php echo $position;?>;
                background-size: cover;
	        <?php } ?>">
            <div class="container">
                <div class="row">
                    <div class="<?php echo $titleWidth;?> border-green-left">
                        <h1><?php if ( get_field('page_hero_title') ) { echo get_field('page_hero_title');} else { echo get_the_title();}?></h1>
                        <?php if(get_field('page_subtitle')):?>
                        	<p><?php echo get_field('page_subtitle');?></p>
                        <?php endif;?>

                    </div>
                    <?php
					if (get_field('enable_button')) {?>
	                    <div class="col-md-12 head-action mt-3 mt-lg-4" style="clear:both;">
	                        <?php
		                        $heroLink = get_field('hero_cta');
	                        ?>
	                        <div class="header-action">
	                            <a class="btn btn-primary" title="<?php echo $heroLink["title"];?>" href="<?php echo $heroLink["url"];?>"><?php if (get_field('button_play_icon')) { echo '<i class="fas fa-play-circle mr-2"></i>';} echo $heroLink["title"];?></a>
	                        </div>
	                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        
        <?php if ( get_field('page_hero_background_image')):?>
        <div class="title-hero page-hero page-hero-mobile <?php echo $headerMobileHasNotClass;?>">
	        <?php if ( get_field('mobile_inside_text')):?>
		        <div class="mobile-hero-row">
		            <div class="container">
		                <div class="row mobile-hero-content-row">
		                    <div class="col-12">
		                        <h1><?php if ( get_field('page_hero_title') ) { echo get_field('page_hero_title');} else { echo get_the_title();}?></h1>
		                        <p><?php echo get_field('page_subtitle');?></p>
		                    </div>
		                    <?php
							if (get_field('enable_button')) {?>
			                    <div class="col-md-12 head-action mt-3 mt-lg-4" style="clear:both;">
			                        <?php
				                        $heroLink = get_field('hero_cta');
			                        ?>
			                        <div class="header-action">
			                            <a class="btn btn-primary" title="<?php echo $heroLink["title"];?>" href="<?php echo $heroLink["url"];?>"><?php if (get_field('button_play_icon')) { echo '<i class="fas fa-play-circle mr-2"></i>';} echo $heroLink["title"];?></a>
			                        </div>
			                    </div>
		                    <?php
		                    }
		                    ?>
		                </div>
		            </div>
	            </div>
	        <?php else:?>
		        <div class="mobile-hero-row"></div>
	            <div class="container">
	                <div class="row mobile-hero-content-row">
	                    <div class="col-12">
	                        <h1><?php if ( get_field('page_hero_title') ) { echo get_field('page_hero_title');} else { echo get_the_title();}?></h1>
	                        <p><?php echo get_field('page_subtitle');?></p>
	                    </div>
	                    <?php
						if (get_field('enable_button')) {?>
		                    <div class="col-md-12 head-action mt-3 mt-lg-4" style="clear:both;">
		                        <?php
			                        $heroLink = get_field('hero_cta');
		                        ?>
		                        <div class="header-action">
		                            <a class="btn btn-primary" title="<?php echo $heroLink["title"];?>" href="<?php echo $heroLink["url"];?>"><?php if (get_field('button_play_icon')) { echo '<i class="fas fa-play-circle mr-2"></i>';} echo $heroLink["title"];?></a>
		                        </div>
		                    </div>
	                    <?php
	                    }
	                    ?>
	                </div>
	            </div>
            <?php endif;?>
        </div>
        <?php endif;?>
	<?php
	}
	?>
	<?php endif; /* is not template page-app-redirect */ ?>