(function($) { "use strict";
	
	//-- show and hide switcher --
	jQuery(".switcher").show();
	
	jQuery(".switcher .switcherContents").niceScroll({
		scrollspeed: 60,
		mousescrollstep: 38,
		cursorwidth: 6,
		cursorborder: 0,
		cursorcolor: '#000',
		autohidemode: false,
		zindex: 9999999,
		horizrailenabled: false,
		cursorborderradius: 0,
	});
	
	jQuery('.switcher-show-hide').click(function() {
		if ( jQuery('.switcher-show-hide').hasClass('switcher-toggle') ) {
			jQuery('.switcher-show-hide').removeClass('switcher-toggle');
			jQuery('.switcher').removeClass('opened');
		}else {   
			jQuery('.switcher-show-hide').addClass('switcher-toggle');
			jQuery('.switcher').addClass('opened');
		}

	});
	
	jQuery('.switcher').click(function(e){
		e.stopPropagation();
	});

	jQuery('html').on( 'click', function ( _ev )
	{  
		jQuery('.switcher-show-hide').removeClass('switcher-toggle');
		jQuery('.switcher').removeClass('opened');
	});
	
	
   //-- controlling the position of switcher --
	var jQueryswitcherWrappper = jQuery('.switcher-wrapper');

	jQueryswitcherWrappper.resize(function(){

		jQuery('.switcher').css({ 'right' : - jQueryswitcherWrappper.width()});

	});
	
	jQueryswitcherWrappper.trigger('resize');
	var emerald_gnrl_color=false;
	
	// Pattern
	jQuery('li[data-name=gnrl_pattern]').click(function() {
		var emerald_gnrl_gnrl_pattern = jQuery(this).attr("data-value");
		if (emerald_gnrl_gnrl_pattern!=false) {
			pointer_pattern(emerald_gnrl_gnrl_pattern);
		}
	});
	
	// General Pattern
	function pointer_pattern(pattern_style){
		if (jQuery(".active-layout").attr("data-value") == "boxed" || jQuery(".active-layout").attr("data-value") == "boxed2") {
			jQuery("body").css("background","url("+worldplus_name+"/images/patterns/"+pattern_style+".png) repeat");
		}
		if (jQuery(".active-layout").attr("data-value") == "boxed3") {
			jQuery("#wrap").css("background","url("+worldplus_name+"/images/patterns/"+pattern_style+".png) repeat");
		}
	}
	
	// Layout
	jQuery('li[data-name=gnrl_layout]').click(function() {
		jQuery("*").removeClass("active-layout");
		jQuery(this).addClass("active-layout");
		jQuery('.slider .owl-stage').resize();	
		jQuery(window).resize();
		var emerald_gnrl_layout = jQuery(this).attr("data-value");
		if(emerald_gnrl_layout!=false){
			pointer_layout(emerald_gnrl_layout);
		}
	});
	
	// General Layout
	function pointer_layout(layout_style){
		if (layout_style == "wide") {
			jQuery("#wrap").removeClass("boxed").removeClass("boxed-2").removeClass("boxed-3");
			jQuery(window).resize();
			jQuery("body,#wrap").attr("style","");
		}else if (layout_style == "boxed") {
			jQuery("#wrap").addClass("boxed").removeClass("boxed-2").removeClass("boxed-3");
			jQuery(window).resize();
			jQuery("body,#wrap").attr("style","");
			jQuery("body").css("background","url("+worldplus_name+"/images/patterns/bg13.png) repeat");
		}else if (layout_style == "boxed2") {
			jQuery("#wrap").removeClass("boxed").addClass("boxed-2").removeClass("boxed-3");
			jQuery(window).resize();
			jQuery("body,#wrap").attr("style","");
			jQuery("body").css("background","url("+worldplus_name+"/images/patterns/bg13.png) repeat");
		}else if (layout_style == "boxed3") {
			jQuery("#wrap").removeClass("boxed").removeClass("boxed-2").addClass("boxed-3");
			jQuery(window).resize();
			jQuery("body,#wrap").attr("style","");
			jQuery("#wrap").css("background","url("+worldplus_name+"/images/patterns/bg13.png) repeat");
		}
	}
	
	// Color
	jQuery('li[data-name=gnrl_color]').click(function() {
		var emerald_gnrl_color = jQuery(this).attr("data-value");
		if (emerald_gnrl_color != false) {
			pointer_color(emerald_gnrl_color);
		}
	});
	
	// General Color
	function pointer_color (color_style) {
		jQuery('head').append('<link rel="stylesheet" class="worldplus_skin" href="'+worldplus_name+'/css/skins/'+color_style+'.css">');
	}
})(jQuery);