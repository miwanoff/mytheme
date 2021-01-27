function fashion_designer_menu_open_nav() {
	window.fashion_designer_responsiveMenu=true;
	jQuery(".sidenav").addClass('show');
}
function fashion_designer_menu_close_nav() {
	window.fashion_designer_responsiveMenu=false;
 	jQuery(".sidenav").removeClass('show');
}

jQuery(function($){
 	"use strict";
   	jQuery('.main-menu > ul').superfish({
		delay:       500,
		animation:   {opacity:'show',height:'show'},
		speed:       'fast'
   	});
});

jQuery(document).ready(function () {
	window.fashion_designer_currentfocus=null;
  	fashion_designer_checkfocusdElement();
	var fashion_designer_body = document.querySelector('body');
	fashion_designer_body.addEventListener('keyup', fashion_designer_check_tab_press);
	var fashion_designer_gotoHome = false;
	var fashion_designer_gotoClose = false;
	window.fashion_designer_responsiveMenu=false;
 	function fashion_designer_checkfocusdElement(){
	 	if(window.fashion_designer_currentfocus=document.activeElement.className){
		 	window.fashion_designer_currentfocus=document.activeElement.className;
	 	}
 	}
 	function fashion_designer_check_tab_press(e) {
		"use strict";
		// pick passed event or global event object if passed one is empty
		e = e || event;
		var activeElement;

		if(window.innerWidth < 999){
		if (e.keyCode == 9) {
			if(window.fashion_designer_responsiveMenu){
			if (!e.shiftKey) {
				if(fashion_designer_gotoHome) {
					jQuery( ".main-menu ul:first li:first a:first-child" ).focus();
				}
			}
			if (jQuery("a.closebtn.mobile-menu").is(":focus")) {
				fashion_designer_gotoHome = true;
			} else {
				fashion_designer_gotoHome = false;
			}

		}else{

			if(window.fashion_designer_currentfocus=="responsivetoggle"){
				jQuery( "" ).focus();
			}}}
		}
		if (e.shiftKey && e.keyCode == 9) {
		if(window.innerWidth < 999){
			if(window.fashion_designer_currentfocus=="header-search"){
				jQuery(".responsivetoggle").focus();
			}else{
				if(window.fashion_designer_responsiveMenu){
				if(fashion_designer_gotoClose){
					jQuery("a.closebtn.mobile-menu").focus();
				}
				if (jQuery( ".main-menu ul:first li:first a:first-child" ).is(":focus")) {
					fashion_designer_gotoClose = true;
				} else {
					fashion_designer_gotoClose = false;
				}
			
			}else{

			if(window.responsiveMenu){
			}}}}
		}
	 	fashion_designer_checkfocusdElement();
	}
});

(function( $ ) {
	jQuery(window).load(function() {
	    jQuery("#status").fadeOut();
	    jQuery("#preloader").delay(1000).fadeOut("slow");
	})
	$(window).scroll(function(){
		var sticky = $('.header-sticky'),
		scroll = $(window).scrollTop();

		if (scroll >= 100) sticky.addClass('header-fixed');
		else sticky.removeClass('header-fixed');
	});
	$(document).ready(function () {
		$(window).scroll(function () {
		    if ($(this).scrollTop() > 100) {
		        $('.scrollup i').fadeIn();
		    } else {
		        $('.scrollup i').fadeOut();
		    }
		});
		$('.scrollup i').click(function () {
		    $("html, body").animate({
		        scrollTop: 0
		    }, 600);
		    return false;
		});
	});
})( jQuery );