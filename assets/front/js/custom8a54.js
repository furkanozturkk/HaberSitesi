(function($) { "use strict";
	
	/* NiceScroll */
	
	if (jQuery(".wrap-nicescroll").length) {
		jQuery("html").niceScroll({
			scrollspeed: 60,
			mousescrollstep: 38,
			cursorwidth: 6,
			cursorborder: 0,
			cursorcolor: '#252525',
			autohidemode: false,
			zindex: 9999999,
			horizrailenabled: false,
			cursorborderradius: 0,
		});
	}
	
	/* Search */
	
	if (jQuery(".top-search").length) {
		jQuery(".top-search a").click(function () {
			var top_search = jQuery(this);
			top_search.parent().find(".search-inner").slideToggle();
			top_search.parent().parent().toggleClass("top-search-active");
			return false;
		});
	}
	
	/* Menu */
	
	jQuery("#header .has-a-sub").find("a:first").append("<span class='menu-nav-arrow'><i class='fa fa-angle-down'></i></span>");
	
	if (jQuery(".mega-menu-posts").length) {
		jQuery(".mega-menu-posts").each(function () {
			var mega_menu_posts = jQuery(this);
			mega_menu_posts.find(".mega-cat-tab").hide();
			mega_menu_posts.find("ul.mega-cat-sub-categories li:first").addClass("cat-active").show();
			mega_menu_posts.find(".mega-cat-tab:first").show();
			mega_menu_posts.find(".mega-cat-link").on("click",function () {
				var mega_link   = jQuery(this);
				var mega_id     = mega_link.attr("href");
				var mega_id_    = mega_id.replace("#","");
				var mega_tab    = mega_link.parent().parent().parent().parent().find(mega_id);
				
				if (mega_tab.find(" > div").length) {
					mega_tab.find(".loader_html").remove();
					mega_menu_posts.parent().parent().find(".mega-cat-tab").css({"display":"none"});
					mega_menu_posts.parent().parent().find(mega_id).fadeIn();
				}else {
					var mega_cat    = mega_link.attr("data-cat");
					var mega_sub    = mega_link.attr("data-sub");
					var mega_type   = mega_link.attr("data-type");
					var mega_object = mega_link.attr("data-object");
					
					mega_tab.append('<i class="loader_html fa-spin"></i>');
					mega_link.parent().parent().find("li").removeClass("cat-active");
					mega_link.parent().addClass("cat-active");
					mega_link.parent().parent().parent().parent().find(".mega-cat-tab").hide();
					jQuery.ajax({
						url: admin_url,
						type: "POST",
						data: { action : 'worldplus_mega_menu_cat',mega_cat : mega_cat,mega_sub : mega_sub,mega_type : mega_type,mega_object : mega_object },
						success:function(data) {
							mega_tab.find(".loader_html").remove();
							mega_tab.html(data);
						}
					});
					mega_menu_posts.parent().parent().find(mega_id).fadeIn();
				}
				return false;
			});
		});
	}
	
	/* Mobile */
	
	if( navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || 
		navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || 
		navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || 
		navigator.userAgent.match(/Windows Phone/i) ){ 
		var mobile_device = true;
	}else{ 
		var mobile_device = false;
	}
	
	if (jQuery(".navigation").length) {
		jQuery(".navigation").each(function () {
			var rel_attr = jQuery(this).attr("rel");
			jQuery(this).find(" > div > ul > li").clone().appendTo('.'+rel_attr+' > ul');
		});
	}
	
	if (jQuery(".navigation_mobile_click").length) {
		jQuery(".navigation_mobile_click").click(function() {
			if (jQuery(this).hasClass("navigation_mobile_click_close")) {
				jQuery(this).next().slideUp(500);
				jQuery(this).removeClass("navigation_mobile_click_close");
				if (jQuery("#wrap").hasClass("fixed-enabled")) {
					var attr_style = jQuery("#header").attr("style");
					attr_style = attr_style.replace("position","");
					jQuery("#header").attr("style",attr_style);
				}
			}else {
				jQuery(this).next().slideDown(500);
				jQuery(this).addClass("navigation_mobile_click_close");
				if (jQuery("#wrap").hasClass("fixed-enabled")) {
					jQuery("#header").css({"position":"static"});
					jQuery('html,body').animate({scrollTop: jQuery("#wrap").offset().top},"slow");
				}
			}
		});
		
		jQuery(".navigation_mobile ul li").each(function() {	
			var sub_menu = jQuery(this).find("ul:first");
			jQuery(this).find("> a > .menu-nav-arrow").click(function() {
				if (jQuery(this).parent().parent().find("ul").length) {
					if (jQuery(this).parent().parent().find("> ul").hasClass("sub_menu")) {
						jQuery(this).parent().parent().find("> ul").removeClass("sub_menu");
						sub_menu.stop().slideUp(250,function() {	
							jQuery(this).css({overflow:"hidden",display:"none"});
						});
					}else {
						jQuery(this).parent().parent().find("> ul").addClass("sub_menu");
						sub_menu.stop().css({overflow:"hidden",height:"auto",display:"none",paddingTop:0}).slideDown(250,function() {
							jQuery(this).css({overflow:"visible",height:"auto"});
						});
					}
					return false;
				}else {
					return true;
				}
			});
		});
	}
	
	/* Search */
	
	if (jQuery(".header-search").length) {
		jQuery(".header-search").click(function (){
			var header_search = jQuery(".header-search");
			if (header_search.hasClass("header-search-active")) {
				header_search.removeClass("header-search-active");
				header_search.find("i").addClass("fa-search").removeClass("fa-times");
				jQuery(".wrap-search").slideUp(300);
			}else {
				var header = jQuery("#header").height();
				header_search.addClass("header-search-active");
				header_search.find("i").addClass("fa-times").removeClass("fa-search");
				jQuery(".wrap-search").slideDown(300);
			}
		});
	}
	
	/* Breaking news */
	
	if (jQuery(".breaking-news-content > ul").length) {
		firenewsticker();
	}
	
	/* Single navigation */
	
	if (jQuery(".page-navigation-single").length) {
		jQuery('.page-navigation-single').each(function() {
			jQuery(this).find(' > div,> div > div').matchHeight({});
		});
	}
	
	/* Review */
	
	if (jQuery(".review_results").length) {
		jQuery(".review_results").each(function () {
			jQuery(this).find(' > div').matchHeight({});
		});
	}
	
	/* Blockquote */
	
	if (jQuery("blockquote").length) {
		jQuery("blockquote").each(function () {
			if (!jQuery(this).parent().hasClass("quote") && !jQuery(this).parent().hasClass("post-img")) {
				jQuery(this).wrap("<div class='quote'></div>");
				jQuery(this).wrapInner("<div class='quote-inner'></div>");
			}
		});
	}
	
	/* Facebook */
	
	if (jQuery(".facebook-remove").length) {
		jQuery(".facebook-remove").remove();
	}
	
	/* Owl */
	
	if (jQuery(".related-posts").length) {
		jQuery(".related-posts > ul").each(function () {
			var vids = jQuery(".related-post-item",this);
			for(var i = 0; i < vids.length; i+=3) {
			    vids.slice(i,i+3).wrapAll('<li></li>');
			}
		});
	}
	
	if (jQuery(".box-slideshow > ul,.head-slide-show > ul,.slider-owl").length) {
		jQuery(".box-slideshow > ul,.head-slide-show > ul,.slider-owl").each(function () {
			var $slider = jQuery(this);
			var $slider_item = $slider.find('.slider-item').length;
			$slider.find('.slider-item').css({"height":"auto"});
			if ($slider.find('img').length) {
				var $slider = jQuery(this).imagesLoaded(function() {
					$slider.owlCarousel({
						autoplay: 3000,
						margin: 10,
						responsive: {
							0: {
								items: 1
							}
						},
						autoplayHoverPause: true,
						navText : ["", ""],
						nav: ($slider_item > 1)?true:false,
						rtl: jQuery('body.rtl').length?true:false,
						loop: ($slider_item > 1)?true:false,
					});
				});
			}else {
				$slider.owlCarousel({
					autoplay: 3000,
					margin: 10,
					responsive: {
						0: {
							items: 1
						}
					},
					autoplayHoverPause: true,
					navText : ["", ""],
					nav: ($slider_item > 1)?true:false,
					rtl: jQuery('body.rtl').length?true:false,
					loop: ($slider_item > 1)?true:false,
				});
			}
		});
	}
	
	/* Portfolio */
	
	if (jQuery(".portfolio-filter").length) {
		jQuery(".portfolio-filter ul").each(function() {
			var $this = jQuery(this);
			$this.find("li a").click(function() {
				$this.find("li").removeClass("current");
				jQuery(this).parent().addClass("current");
			});
		});
		
		jQuery(window).load(function() {
			if (jQuery(".portfolio-filter").length) {
				jQuery(".portfolio-filter ul li:first-child a").click();
			}
		});
		
		var $container = jQuery(".portfolio-0 ul");
		$container.imagesLoaded( function() {
			$container.isotope({
				filter: "*",
				animationOptions: {
					duration: 750,
					itemSelector: '.isotope-portfolio-item',
					easing: "linear",
					queue: false,
				}
			});
		});
		
		jQuery(".portfolio-filter ul li a").click(function() {
			var selector = jQuery(this).attr("data-filter");
			$container.isotope({
				filter: selector,
				animationOptions: {
					duration: 750,
					itemSelector: '.isotope-portfolio-item',
					easing: "linear",
					queue: false,
				}
			});
			return false;
		});
	}
	
	/*
	jQuery(".head-slide").imagesLoaded( function() {
		jQuery(".head-slide").isotope({
			filter: "*",
			animationOptions: {
				duration: 750,
				itemSelector: '.slide-item.slide-item-width',
				queue: false,
			}
		});
	});
	*/
	
	/* Post 3 */
	
	worldplus_posts();
	
	/* News style 15 & 16 */
	
	if (jQuery(".box-news-small-4").length) {
		jQuery(".box-news").on("click",".box-news-small-4 .box-news-img",function () {
			var image_small = jQuery(this);
			var image_small_parents = image_small.parent().parent().parent().parent().parent();
			var post_id = image_small.find(".box-news-overlay > a").attr("data-id");
			var worldplus_sidebar_all = image_small_parents.find(".box-news-images").attr("data-sidebar");
			var post_category = image_small_parents.find(".box-news-images").attr("data-category");
			var meta = image_small_parents.find(".box-news-images").attr("data-meta");
			var date = image_small_parents.find(".box-news-images").attr("data-date");
			var author = image_small_parents.find(".box-news-images").attr("data-author");
			var comment = image_small_parents.find(".box-news-images").attr("data-comment");
			var views = image_small_parents.find(".box-news-images").attr("data-views");
			var excerpt_title = image_small_parents.find(".box-news-images").attr("data-title");
			var box_style = image_small_parents.find(".box-news-images").attr("data-box");
			var box_news = image_small_parents;
			var box_news_add = box_news.find(".box-news-add");
			if (box_news.parent().parent().parent().find(".tab-news-4").length) {
				var tab_new_height = box_news.parent().parent().parent().find(".tab-news-4").outerHeight();
			}
			
			box_news_add.find(".loader_html").remove();
			box_news_add.append('<i class="loader_html fa-spin"></i>');
			box_news_add.addClass("fadeOut2 animation");
			image_small.parent().parent().parent().find(".box-news-active").removeClass("box-news-active");
			image_small.parent().parent().addClass("box-news-active");
			
			jQuery.ajax({
				url: admin_url,
				type: "POST",
				data: { action : 'worldplus_builder_box',post_id : post_id,worldplus_sidebar_all : worldplus_sidebar_all,post_category : post_category,meta : meta,date : date,author : author,comment : comment,views : views,excerpt_title : excerpt_title,box_style : box_style },
				success:function(data) {
					box_news_add.html(data);
					if (box_news.parent().parent().parent().find(".tab-news-4").length) {
						box_news_add.find(".box-news-outer").css({"bottom":tab_new_height-1});
					}
					box_news.find(".box-news-add").removeClass("fadeOut2 animation");
				}
			});
			return false;
		});
	}
	
	/* Go up */
	
	jQuery(window).scroll(function () {
		if(jQuery(this).scrollTop() > 100 ) {
			jQuery(".go-up").css("right","20px");
		}else {
			jQuery(".go-up").css("right","-60px");
		}
	});
	jQuery(".go-up").click(function(){
		jQuery("html,body").animate({scrollTop:0},500);
		return false;
	});
	
	/* Accordion & Toggle */
	
	if (jQuery(".accordion").length) {
		jQuery(".accordion .accordion-title").each(function(){
			jQuery(this).click(function() {
				if (jQuery(this).parent().parent().hasClass("toggle-accordion")) {
					jQuery(this).parent().find("li:first .accordion-title").addClass("active");
					jQuery(this).parent().find("li:first .accordion-title").next(".accordion-inner").addClass("active");
					jQuery(this).toggleClass("active");
					jQuery(this).next(".accordion-inner").slideToggle().toggleClass("active");
					if (!jQuery(this).parent().parent().hasClass("accordion-archive")) {
						jQuery(this).find("i").toggleClass("fa-minus").toggleClass("fa-plus");
					}
				}else {
					if (jQuery(this).next().is(":hidden")) {
						jQuery(this).parent().parent().find(".accordion-title").removeClass("active").next().slideUp(200);
						jQuery(this).parent().parent().find(".accordion-title").next().removeClass("active").slideUp(200);
						jQuery(this).toggleClass("active").next().slideDown(200);
						jQuery(this).next(".accordion-inner").toggleClass("active");
						jQuery(this).parent().parent().find("i").removeClass("fa-plus").addClass("fa-minus");
						jQuery(this).find("i").removeClass("fa-minus").addClass("fa-plus");
					}
				}
				return false;
			});
		});
		
		jQuery(".accordion-archive").each(function(){
			jQuery(this).find(".section-content:first-child .accordion-title").slideDown(500).addClass("active");
			jQuery(this).find(".section-content:first-child .accordion-inner").slideDown(500).addClass("active");
		});
	}
	
	/* animation */
	
	if(!mobile_device && jQuery(window).width() > 960) {
		jQuery(".animation").each( function() {
			var $this = jQuery(this);
			var animation = $this.attr("data-animate");
			$this.bind("inview",function(event,isInView,visiblePartX,visiblePartY) {
				if (isInView) {
					$this.css("visibility","visible");
					$this.addClass(animation);
					if(animation.indexOf("fade") === -1) {
						$this.css("opacity","1");
					}
				}
			});
		});
	}else {
		jQuery('.animation').removeClass("animation");
	}
	
	/* post like */
	
	if (jQuery(".post-like").length) {
		jQuery(".post-like").live("click" ,function() {
			var post_like = jQuery(this);
			var id = post_like.attr('id');
			id = id.replace('post-like-',"");
			post_like.hide();
			
			if (jQuery(this).hasClass("post-like-done")) {
				post_like.show();
			}else {
				jQuery.ajax({
					url: admin_url,
					type: "POST",
					data: { action : 'worldplus_post_like',id : id },
					success:function(data) {
						post_like.addClass("post-like-done");
						post_like.find("span").html(data);
						post_like.find("i").removeClass("fa-heart-o").addClass("fa-heart");
						post_like.show();
					}
				});
			}
			return false;
		});
	}
	
	/* Add post */
	
	if (jQuery("input[type='file']").length) {
		jQuery(".fileinputs input[type='file']").change(function () {
			var file_fake = jQuery(this);
			file_fake.parent().find("button").text(file_fake.val());
		});
		
		jQuery(".fakefile").click(function () {
			jQuery(this).parent().find("input[type='file']").click();
		});
	}
	
	if (jQuery(".post_tag").length) {
		jQuery('.post_tag').tag();
	}
	
	if (jQuery(".post-delete").length) {
		jQuery(".post-delete").click(function () {
			if (confirm(sure_delete)) {
				return true;
			}else {
				return false;
			}
		});
	}
	
	/* Login */
	
	if (jQuery(".login-form").length) {
		jQuery(".login-form").submit(function() {
			var thisform = jQuery(this);
			jQuery('.required-error',thisform).remove();
			jQuery('input[type="submit"]',thisform).hide();
			jQuery('.loader_2',thisform).show();
			var fields = jQuery('.inputs',thisform);
			jQuery('.required-item',thisform).each(function () {
				var required = jQuery(this);
				if (required.val() == '') {
					required.after('<span class=required-error>'+worldplus_error_text+'</span>');
					return false;
				}
			});
		    var data = {
				action:      'worldplus_ajax_login_process',
				security:    jQuery('input[name=\"login_nonce\"]',thisform).val(),
				log:         jQuery('input[name=\"log\"]',thisform).val(),
				pwd:         jQuery('input[name=\"pwd\"]',thisform).val(),
				redirect_to: jQuery('input[name=\"redirect_to\"]',thisform).val()
			};
			jQuery.post(jQuery('input[name=\"ajax_url\"]',thisform).val(),data,function(response) {
				var result = jQuery.parseJSON(response);
				if (result.success == 1) {
					window.location = result.redirect;
				}else if (result.error) {
					jQuery(".worldplus_error",thisform).slideDown(300).html(result.error).delay(3000).slideUp(300);
				}else {
					return true;
				}
				jQuery('.loader_2',thisform).hide();
				jQuery('input[type="submit"]',thisform).show();
			});
			return false;
		});
	}
	
	/* Select */
	
	if (jQuery(".widget select").length) {
		jQuery(".widget select").wrap('<div class="styled-select"></div>');
	}
	
	/* Widget */
	
	if (jQuery(".widget li.cat-item,.widget.widget_archive li").length) {
		jQuery(".widget li.cat-item,.widget.widget_archive li").each(function() {
			var e= jQuery(this).contents();e.length > 1 && (e.eq(1).wrap('<span class="widget-span"></span>'),e.eq(1).each(function(){}))
		}).contents();
		
		jQuery(".widget li.cat-item .widget-span,.widget.widget_archive li .widget-span").each(function() {
			if (jQuery(this).text() != "") {
				jQuery(this).html(jQuery(this).text().substring(2));
				jQuery(this).html(jQuery(this).text().replace(/\)/gi,""));
			}
		});
	}
	
	/* Woocommerce */
	
	if (jQuery(".woocommerce").length > 0) {
		jQuery("ul.products li .product-details h3 a").each(function () {
			var shortlink = jQuery(this);
			var txt = shortlink.text();
			shortlink.html(trunc(txt,products_excerpt_title));
		});
	}
	
	function trunc(str,n) {
		return str.substr(0,n-1);
	}
	
	if (jQuery(".cart_control").length) {
		jQuery(document).on('click','.cart_control',function() {
			if (jQuery(this).next('.cart_wrapper').hasClass('cart_wrapper_active')) {
				jQuery(this).next('.cart_wrapper').removeClass('cart_wrapper_active');
				jQuery(this).next('.cart_wrapper').slideUp();
			}else {
				jQuery(this).next('.cart_wrapper').slideDown();
				jQuery(this).next('.cart_wrapper').addClass('cart_wrapper_active');
			}
			return false;
		});
	}
	
	/* Lightbox */
	
	var lightboxArgs = {			
		animation_speed: "fast",
		overlay_gallery: true,
		autoplay_slideshow: false,
		slideshow: 5000,// light_rounded / dark_rounded / light_square / dark_square / facebook
		theme: "pp_default",
		opacity: 0.8,
		show_title: false,
		social_tools: "",
		deeplinking: false,
		allow_resize: true,// Resize the photos bigger than viewport. true/false
		counter_separator_label: "/",// The separator for the gallery counter 1 "of" 2
		default_width: 940,
		default_height: 529
	};
	
	if (jQuery(".gallery").length) {
		jQuery(".gallery").each(function () {
			jQuery(this).find("a[href$=jpg],a[href$=JPG],a[href$=jpeg],a[href$=JPEG],a[href$=png],a[href$=gif],a[href$=bmp]:has(img)").attr("rel","prettyPhoto["+jQuery(this).attr("id")+"]");
			
			jQuery(this).find("a[href$=jpg],a[href$=JPG],a[href$=jpeg],a[href$=JPEG],a[href$=png],a[href$=gif],a[href$=bmp]:has(img)").prettyPhoto(lightboxArgs);;
		});
	}
	
	jQuery("a[href$=jpg],a[href$=JPG],a[href$=jpeg],a[href$=JPEG],a[href$=png],a[href$=gif],a[href$=bmp]:has(img)").prettyPhoto(lightboxArgs);
			
	jQuery("a[class^='prettyPhoto'],a[rel^='prettyPhoto']").prettyPhoto(lightboxArgs);
	
	/* Tipsy */
	
	jQuery(".tooltip-n").tipsy({fade:true,gravity:"s"});
	jQuery(".tooltip-s").tipsy({fade:true,gravity:"n"});
	jQuery(".tooltip-nw").tipsy({fade:true,gravity:"nw"});
	jQuery(".tooltip-ne").tipsy({fade:true,gravity:"ne"});
	jQuery(".tooltip-w").tipsy({fade:true,gravity:"w"});
	jQuery(".tooltip-e").tipsy({fade:true,gravity:"e"});
	jQuery(".tooltip-sw").tipsy({fade:true,gravity:"sw"});
	jQuery(".tooltip-se").tipsy({fade:true,gravity:"se"});
	
	/* resize */
	
	jQuery(window).resize(function() {
		
		/* Main Block */
		
		if (jQuery(".main-block").length) {
			jQuery(".main-block").each(function () {
				var main_block_r = jQuery(this);
				main_block_r.css("height","auto");
				var main_block_r_h = main_block_r.outerHeight();
				if (!main_block_r.hasClass("bottom-header-logo")) {
					main_block_r.css("height",main_block_r_h);
				}
				if (jQuery(window).width() < 991 && jQuery(window).width() > 600 && main_block_r.find(".navigation_mobile")) {
					main_block_r.find(".navigation_mobile").each(function () {
						var navigation_mobile_r   = jQuery(this);
						var navigation_mobile_r_h = navigation_mobile_r.outerHeight();
						navigation_mobile_r.css({"margin-top":((main_block_r_h-navigation_mobile_r_h)/2)-1});
					});
				}
			});
		}
		
		/* Logo */
		
		worldplus_logo();
		
		/* Header */
		
		worldplus_header();
		
		/* Single navigation */
		
		if (jQuery(".page-navigation-single").length) {
			jQuery('.page-navigation-single').each(function() {
				jQuery(this).find(' > div,> div > div').matchHeight({});
			});
		}
		
		/* Review */
		
		if (jQuery(".review_results").length) {
			jQuery(".review_results").each(function () {
				jQuery(this).find(' > div').matchHeight({});
			});
		}
		
		/* MatchHeight sidebar & content */
		
		if (jQuery(window).width() > 991 && jQuery(".sections-content").length) {
			jQuery(".main-container,.main-content,.first-sidebar,.secondary-sidebar").css({"min-height":"inherit"});
			worldplus_sections_content();
		}else if (jQuery(window).width() < 991 && jQuery(".sections-content").length) {
			jQuery(".main-container,.main-content,.first-sidebar,.secondary-sidebar").css({"min-height":"inherit"});
		}
		
		/* Portfolio */
		
		if (jQuery(".portfolio-filter").length) {
			var $container = jQuery(".portfolio-0 ul");
			$container.imagesLoaded( function() {
				$container.isotope({
					filter: "*",
					animationOptions: {
						duration: 750,
						itemSelector: '.isotope-portfolio-item',
						easing: "linear",
						queue: false,
					}
				});
			});
		}
		
		/* Post 3 */
		
		worldplus_posts();
	});
	
	/* Page Builder */
	
	if (jQuery(".box-news").length) {
		jQuery(".box-news").each(function () {
			jQuery(this).find('.box-news-small').matchHeight();
			jQuery(this).find('.box-news-big').matchHeight();
		});
	}
	
	/* Load */
	
	jQuery(window).load(function() {
		
		/* Main Block */
		
		if (jQuery(".main-block").length) {
			jQuery(".main-block").each(function () {
				var main_block   = jQuery(this);
				var main_block_h = main_block.outerHeight();
				if (!main_block.hasClass("bottom-header-logo")) {
					main_block.css("height",main_block_h);
				}
				if (jQuery(window).width() < 991 && jQuery(window).width() > 600 && main_block.find(".navigation_mobile")) {
					main_block.find(".navigation_mobile").each(function () {
						var navigation_mobile   = jQuery(this);
						var navigation_mobile_h = navigation_mobile.outerHeight();
						navigation_mobile.css({"margin-top":((main_block_h-navigation_mobile_h)/2)-1});
					});
				}
			});
		}
		
		/* Logo */
		
		worldplus_logo();
		
		/* Header */
		
		setTimeout(function() {
			worldplus_header();
		}, 1500);
		
		/* Header fixed */
		
		var fixed_enabled = jQuery("#wrap").hasClass("fixed-enabled");
		if (fixed_enabled && jQuery(".bottom-header").length) {
			var bottom_header = jQuery(".bottom-header").outerHeight();
			var hidden_header = jQuery(".hidden-header").offset().top;
			var aboveHeight = hidden_header-(bottom_header/2);
			jQuery(window).scroll(function(){
				if(jQuery(window).scrollTop() > aboveHeight ){
					jQuery(".bottom-header").css({"top":"0"}).addClass("fixed-nav");
				}else{
					jQuery(".bottom-header").css({"top":"auto"}).removeClass("fixed-nav");
				}
			});
		}else {
			jQuery(".bottom-header").removeClass("fixed-nav");
		}
		
		/* Gallery */
		
		if (jQuery('.gallery').length) {
			jQuery('.gallery').find("br").remove();
			jQuery('.gallery').imagesLoaded( function() {
				jQuery('.gallery').isotope({
					filter: "*",
					animationOptions: {
						duration: 750,
						itemSelector: '.gallery-item',
						easing: "linear",
						queue: false,
					}
				});
			});
		}
		
		/* Loader */
		
		jQuery(".loader").fadeOut(500);
		
		/* Post 3 */
		
		var post_style = "";
		if (jQuery(".post-style-3").length) {
			post_style = "post-style-3";
		}else if (jQuery(".post-style-4").length) {
			post_style = "post-style-4";
		}
		
		if (post_style != "" && jQuery("."+post_style).length) {
			var $container = jQuery(".blog-all");
			if (jQuery("."+post_style).hasClass("post-masonry")) {
				$container.isotope({
					filter: "*",
					animationOptions: {
						duration: 750,
						itemSelector: '.'+post_style,
						easing: "linear",
						queue: false,
					}
				});
			}else {
				$container.each(function() {
				    jQuery(this).find('.'+post_style).matchHeight();
				});
			}
		}
		
		/* MatchHeight sidebar & content */
		
		if (jQuery(window).width() > 991 && jQuery(".sections-content").length) {
			jQuery(".main-container,.main-content,.first-sidebar,.secondary-sidebar").css({"min-height":"inherit"});
			worldplus_sections_content();
		}else if (jQuery(window).width() < 991 && jQuery(".sections-content").length) {
			jQuery(".main-container,.main-content,.first-sidebar,.secondary-sidebar").css({"min-height":"inherit"});
		}
		
		/* Sticky sidebar */
		
		if (!mobile_device) {
			jQuery(".main-container").each(function () {
				var main_container = jQuery(this);
				var sticky_sidebar = main_container.parent().find(".sticky-sidebar");
				if (sticky_sidebar.length) {
					sticky_sidebar.theiaStickySidebar({
					    "containerSelector"   : main_container,
					    "additionalMarginTop" :  30
					});
				}
			});
		}
		
		/* Slide sidebar */
		
		if (jQuery(".slide-sidebar").length) {
			jQuery(".slide-sidebar-scroll").niceScroll({
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
		}
		
	});
	
})(jQuery);

/* Post style 3 */

function worldplus_posts() {
	var post_style = "";
	if (jQuery(".post-style-3").length) {
		post_style = "post-style-3";
	}else if (jQuery(".post-style-4").length) {
		post_style = "post-style-4";
	}
	
	if (post_style != "" && jQuery("."+post_style).length) {
		var $container = jQuery(".blog-all");
		$container.imagesLoaded( function() {
			if (jQuery("."+post_style).hasClass("post-masonry")) {
				$container.isotope({
					filter: "*",
					animationOptions: {
						duration: 750,
						itemSelector: '.'+post_style,
						easing: "linear",
						queue: false,
					}
				});
			}else {
				$container.each(function() {
				    jQuery(this).find('.'+post_style+' > article').matchHeight();
				});
			}
		});
	}
}

/* Logo */

function worldplus_logo() {
	var logo = jQuery("#header .logo");
	var logo_h = logo.outerHeight();
	var header_is = "no";
	if (jQuery(".main-header.main-header-center").length == 0 && jQuery(".bottom-header-logo").length == 0) {
		var header_container = jQuery(".main-header > .container");
		var header_is = "yes";
	}else if (jQuery(".bottom-header-logo").length) {
		var header_container = jQuery(".bottom-header > .container");
		var header_is = "yes";
	}
	if (header_is == "yes") {
		var header_container_h = header_container.outerHeight();
		logo.css({"margin-top":(header_container_h-logo_h)/2});
	}
}

/* Sections content */

function worldplus_header() {
	if (jQuery('.fixed-enabled #header').length) {
		var $headerHeight = jQuery('.fixed-enabled .bottom-header').height();
		jQuery('.hidden-header').css({ 'height' : $headerHeight  + 'px' });
	}
}

function worldplus_sections_content() {
	setTimeout(function() {
		jQuery(".sections-content").each(function () {
			var sections_content = jQuery(this);
			
			var main_container   = sections_content.find(".with-sidebar-container .main-container");
			var main_content     = sections_content.find(".with-sidebar-container .main-content");
			var main_sidebar     = sections_content.find(".with-sidebar-container .first-sidebar");
			var main_sidebar_2   = sections_content.find(".with-sidebar-container .secondary-sidebar");
			
			var main_container_h = main_container.height();
			var main_content_h   = main_content.height();
			var main_sidebar_h   = main_sidebar.height();
			var main_sidebar_2_h = main_sidebar_2.height();
			
			if (main_container.hasClass("col-md-9")) {
				if (main_content_h >= main_sidebar_h && main_content_h >= main_sidebar_2_h) {
					main_container.css({"min-height":main_container_h});
					main_content.css({"min-height":main_container_h});
					main_sidebar.css({"min-height":main_container_h});
					main_sidebar_2.css({"min-height":main_container_h});
				}else if (main_sidebar_h >= main_content_h && main_sidebar_h >= main_sidebar_2_h) {
					main_container.css({"min-height":main_sidebar_h});
					main_content.css({"min-height":main_sidebar_h});
					main_sidebar.css({"min-height":main_sidebar_h});
					main_sidebar_2.css({"min-height":main_sidebar_h});
				}else if (main_sidebar_2_h >= main_content_h && main_sidebar_2_h >= main_sidebar_h) {
					main_container.css({"min-height":main_sidebar_2_h});
					main_content.css({"min-height":main_sidebar_2_h});
					main_sidebar.css({"min-height":main_sidebar_2_h});
					main_sidebar_2.css({"min-height":main_sidebar_2_h});
				}
			}else if (main_container.hasClass("col-md-8")) {
				if (main_container_h >= main_sidebar_h) {
					main_container.css({"min-height":main_container_h});
					main_sidebar.css({"min-height":main_container_h});
				}else if (main_sidebar_h >= main_container_h) {
					main_container.css({"min-height":main_sidebar_h});
					main_sidebar.css({"min-height":main_sidebar_h});
				}
			}
		});
	}, 1500);
}

/* Captcha */

function worldplus_get_captcha(captcha_file,captcha_id) {
	var img = jQuery("#"+captcha_id).attr("src",captcha_file+'?'+Math.random());
}

/* Firenewsticker */

function firenewsticker() {
	if (typeof tickerstarted == "undefined") {
		var tickeritems = jQuery(".breaking-news-content > ul").children();
		tickersarray 	= new Array();
		tickeritems.each(function() {
			tickersarray.push(jQuery(this).html());
		});
		tickerstarted = true;
		tickeritem = 0;
	}
	
	letter = 0;
	if (tickersarray.length == tickeritem) {
		tickeritem = 0;
	}
	currentticker = tickersarray[tickeritem];
	printnewsticker();
	setTimeout("firenewsticker()",5000);
	tickeritem++;
}

/* Printnewsticker */
    
function printnewsticker() {
	var $tickerwrapper = jQuery('.breaking-news-content > ul');
	if ($tickerwrapper.length && currentticker) {
		var currentchar = currentticker.substr(letter, 1);
		if( currentchar == '<' ){ tickerprintingtag = true; }
		if( currentchar == '>' ){ tickerprintingtag = false; }
		$tickerwrapper.html(currentticker.substr(0, letter++));
		if (letter < currentticker.length+1) {
			if (tickerprintingtag) {
				printnewsticker();
			}else {
				setTimeout("printnewsticker()", 40);
			}
		}else {
			letter = 1;
			currentticker = "";
		}
	}
}