var $ = jQuery;
var bod = $("body");
var menuItemWithSub = $(".menu-item.menu-item-has-children > a");
var mastHead = $("#masthead");

//nav dropdown plugin
$(function() {
	$('.desktop-navigation #primary-menu').smartmenus({
		showTimeout: 75,
		hideTimeout: 100,
		collapsibleBehavior: 'toggle',
		hideOnClick: false,
		showOnClick: false
	});
	
});

//appear effects
$(document).ready(function(){
	//appear effects
	bod.addClass("hide-elements");
	
	//timers function
	var waitForFinalEvent = (function () {
	  var timers = {};
	  return function (callback, ms, uniqueId) {
	    if (!uniqueId) {
	      uniqueId = "Don't call this twice without a uniqueId";
	    }
	    if (timers[uniqueId]) {
	      clearTimeout (timers[uniqueId]);
	    }
	    timers[uniqueId] = setTimeout(callback, ms);
	  };
	})();
	
	//insurance testimonials slider
	if ( $(".insurance-slider:not(.all-insurance-slider)").length) {
		$insuranceBreak = 576;
	}
	if ( $(".all-insurance-slider").length) {
		$insuranceBreak = 980;
	}
	if ( $(".insurance-slider").length) {
		function wrapCards() {
			if ($(window).width() < $insuranceBreak) {
				$(".insurance-slider").each(function(){
					$card_body = $(this).find('.card.card-body');
					$card_body.each(function(){
						$(this).addClass("poop");
						thisHref = $(this).find(".read-more a").attr('href');
						console.log(thisHref);
						$(this).wrapInner('<a href="'+thisHref+'" class="wrapped-link"></a>')
					});
				});
			}
		}
		wrapCards();
		$(window).resize(function () {
		    waitForFinalEvent(function(){
		    	console.log('Resize...');
				wrapCards()
		    }, 500, "unique_s");
		});	
	}
})

inView('.hide').on('enter', function(t) {
	setTimeout(function(){
			$(t).addClass("now-in-view");
		}, 200);
});




//gravity forms confirmation
jQuery(document).ready(function(){
	hidethese = $(".modal-header");
    jQuery(document).bind('gform_confirmation_loaded', function(){
        hidethese.hide();
    });
})



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
	menuIn.play().reverse().timeScale(3);
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


//contact modal
jQuery(document).ready(function ($) {

    $(function () {
        var onClass = "on";
        var showClass = "show";
        var labelOn = "labelOn";

        $(".js-floatInput").bind("checkval", function () {
            var label = $(this).closest('.formGroup ').find(".js-floatLabel");
            if (this.value !== "") {
                label.addClass(showClass);
                $(this).closest('.formGroup ').addClass(labelOn);
            } else {
                label.removeClass(showClass);
                $(this).closest('.formGroup ').removeClass(labelOn);
            }
        }).on("keyup", function () {
            $(this).trigger("checkval");
        }).on("focus", function () {
            $(this).closest('.formGroup ').find(".js-floatLabel").addClass(onClass);

        }).on("blur", function () {
            $(this).closest('.formGroup ').find(".js-floatLabel").removeClass(onClass);
        }).trigger("checkval");
    });
    
    //load all events
	$(".load-all-events").on('click touchstart', function(e) {
		e.preventDefault();
		console.log("load all events");
		$(this).closest(".show-some").removeClass("show-some");
	});
	
	//
	if(window.location.href.indexOf("?contact-roost") > -1) {
       $('#myModal').modal('show');
    }
    
    //$('#popverexample-0').popover('show')
    
    
    $("[data-toggle=popover]").each(function(i, obj) {
		$(this).popover({
		  html: true,
		  positionFixed: true,
		  content: function() {
			popoverID = $(this).attr("data-popover-id");
			popContent = $("[data-popcontent-id="+popoverID+"]");
		    return popContent.html();
		    //return $('#popover-content-' + id).html();
		  }
		});
		console.log('hi');
	});

});


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