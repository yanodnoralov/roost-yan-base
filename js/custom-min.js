function openMenuFunction(){preMenuContainer.css("display","block"),bod.addClass("open-menu"),setTimeout(function(){menuOpenFlag=!0},1e3),menuIn.play().timeScale(1)}function closeMenuFunction(){preMenuContainer.css("display","block"),bod.removeClass("open-menu"),setTimeout(function(){menuOpenFlag=!1},1e3),menuIn.play().reverse().timeScale(3)}function hidePreMenu(){preMenuContainer.css("display","none"),preMenuContainer.removeClass("open-menu")}var $=jQuery,bod=$("body"),menuItemWithSub=$(".menu-item.menu-item-has-children > a"),mastHead=$("#masthead");
//nav dropdown plugin
$(function(){$(".desktop-navigation #primary-menu").smartmenus({showTimeout:75,hideTimeout:100})}),
//appear effects
$(document).ready(function(){bod.addClass("hide-elements")}),inView(".hide").on("enter",function(e){setTimeout(function(){$(e).addClass("now-in-view")},200)}),
//gravity forms confirmation
jQuery(document).ready(function(){hidethese=$(".modal-header"),jQuery(document).bind("gform_confirmation_loaded",function(){hidethese.hide()})});
//navigation stuff
var menuBtn=$("#nav-toggle"),
//menuBtnClose = $(".menu-close-button"),
collapsingMenu=$("#site-navigation"),menuOpenFlag=!1;subMenuOpenFlag=!1;
//timeline for menu coming in and out
var menuIn=new TimelineLite({paused:!0}),
//preMenu		 = $(".pre-menu-slide"),
preMenuBG=$(".pre-menu-background"),menuPanel=$("#site-navigation"),menuAs=$("#site-navigation #primary-menu > li"),
//menuTopStuff = $(".navbar-collapse-top-links"),
preMenuContainer=$(".pre-menu-container");menuIn.to(preMenuBG,.5,{scaleY:1,ease:Power3.easeOut,onReverseComplete:hidePreMenu}).to(collapsingMenu,0,{css:{display:"block"}},"-=0.5").from(collapsingMenu,.3,{autoAlpha:0,ease:Power4.easeIn},"-=0.4").staggerFrom(menuAs,.3,{autoAlpha:0,ease:Power2.easeIn},.08,"-=.4"),menuBtn.on("click touchstart",function(){console.log("click"),0==menuOpenFlag?openMenuFunction():closeMenuFunction()}),menuItemWithSub.on("click touchstart",function(e){e.preventDefault(),$(this).parent(".menu-item").toggleClass("show-sub"),$(this).siblings(".sub-menu").slideToggle(200)}),
//navigation anchors links
$hashnavlinks=$('.main-navigation li:not(.menu-item-has-children) a[href*="#"]'),$hashnavlinks.click(function(){closeMenuFunction()}),
//all hash links smooth scroll
$(document).on("click",'.site-main a[href^="#"], .home .btn-header',function(e){e.preventDefault(),$("html, body").animate({scrollTop:$($.attr(this,"href")).offset().top},500)}),
//contact modal
jQuery(document).ready(function(t){t(function(){var e="on",n="show",o="labelOn";t(".js-floatInput").bind("checkval",function(){var e=t(this).closest(".formGroup ").find(".js-floatLabel");""!==this.value?(e.addClass(n),t(this).closest(".formGroup ").addClass(o)):(e.removeClass(n),t(this).closest(".formGroup ").removeClass(o))}).on("keyup",function(){t(this).trigger("checkval")}).on("focus",function(){t(this).closest(".formGroup ").find(".js-floatLabel").addClass(e)}).on("blur",function(){t(this).closest(".formGroup ").find(".js-floatLabel").removeClass(e)}).trigger("checkval")})});
//slider stuff
/*
$(document).ready(function(){
	logoheight = $(".logo").find("img").outerHeight();
	console.log("l = " + logoheight);
	$tp_caption = $(".tp-caption");
	$tp_caption.addClass("yanz");
	$tp_caption.each(function(){
	var $childh2 = $(this).find("h2");
	var $childp = $(this).find("p");
		setTimeout(function(){
			$childp.addClass("fonz");
			var hh = $childh2.outerHeight();
			var ph = $childp.outerHeight();
			var combineHeight = hh + ph;
			console.log("children_height = " + combineHeight);
		}, 1000);
	})
});
*/