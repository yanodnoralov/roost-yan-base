var $ = jQuery;
var bod = $("body");
var menuItemWithSub = $(".menu-item.menu-item-has-children > a");
var mastHead = $("#masthead");

//nav dropdown plugin
$(function() {
	$('.desktop-navigation #primary-menu').smartmenus({
		showTimeout: 75,
		hideTimeout: 100
	});
	
});

//appear effects
$(document).ready(function(){
	bod.addClass("hide-elements")
})

inView('.hide').on('enter', function(t) {
	setTimeout(function(){
			$(t).addClass("now-in-view");
		}, 200);
});



//navigation stuff
var menuBtn = $("#nav-toggle"),
	//menuBtnClose = $(".menu-close-button"),
	collapsingMenu = $("#site-navigation"),
	menuOpenFlag = false;
	subMenuOpenFlag = false;

//timeline for menu coming in and out
	var menuIn       = new TimelineLite({paused:true}),
		//preMenu		 = $(".pre-menu-slide"),
		preMenuBG    = $(".pre-menu-background"),
		menuPanel    = $("#site-navigation"),
		menuAs		 = $("#site-navigation #primary-menu > li"),
		//menuTopStuff = $(".navbar-collapse-top-links"),
		preMenuContainer = $(".pre-menu-container");
		
	menuIn.to(preMenuBG, 0.5, {scaleY:1, ease:Power3. easeOut, onReverseComplete:hidePreMenu})
		  .to(collapsingMenu, 0, {css:{display:"block"}}, "-=0.5")
		  .from(collapsingMenu, 0.3, {autoAlpha: 0, ease:  Power4. easeIn}, "-=0.4")
		  .staggerFrom(menuAs, 0.3, {autoAlpha: 0,  ease:Power2. easeIn}, 0.08, "-=.4")


menuBtn.on('click touchstart', function() {
	console.log("click");
	if (menuOpenFlag == false) {
		openMenuFunction();
	}
	else {
		closeMenuFunction();
	}
});

function openMenuFunction() {
	preMenuContainer.css("display", "block");
	bod.addClass("open-menu");
	setTimeout(function(){
		menuOpenFlag = true;
	}, 1000)
    menuIn.play().timeScale(1);
    //console.log("open success");
}

function closeMenuFunction() {
	preMenuContainer.css("display", "block");
	bod.removeClass("open-menu");
	setTimeout(function(){
		menuOpenFlag = false;
	}, 1000)
	menuIn.play().reverse().timeScale(2.5);
	//console.log("close success");
}

function hidePreMenu() {
  preMenuContainer.css("display", "none");
  preMenuContainer.removeClass("open-menu");
}

menuItemWithSub.on('click touchstart', function(e) {
	e.preventDefault();
	$(this).parent(".menu-item").toggleClass("show-sub");
	$(this).siblings(".sub-menu").slideToggle(200);
});

//navigation anchors links
$hashnavlinks = $('.main-navigation li:not(.menu-item-has-children) a[href*="#"]');
$hashnavlinks.click(function(){
	closeMenuFunction();
});



//all hash links smooth scroll
$(document).on('click', '.site-main a[href^="#"], .home .btn-header', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);
});