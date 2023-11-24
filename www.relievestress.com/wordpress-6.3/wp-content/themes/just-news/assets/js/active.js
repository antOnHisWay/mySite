(function($) {
    "use strict";
     jQuery(document).on('ready', function() {	
		
		/*==============================
			Mobile Nav
		================================*/ 	

		jQuery('.menu-click,.close-menu a').on('click', function(){
			jQuery('.menu-inner').toggleClass('active');
		});
	 
		/*====================================
			TrendNews Click JS
		======================================*/ 	
		jQuery('.icon.search').on( "click", function(){
			jQuery('.search-form, .side-icon').toggleClass('active');
		});	

		jQuery('.search-icon-last').focusout(function(){
			jQuery('.search-form, .side-icon').removeClass('active');
		});	
	
		jQuery('.icon.latest').on( "click", function(){
			jQuery('.icon.latest').toggleClass('active');
			jQuery('.icon.trending').removeClass('active');
		});
		jQuery('.icon.trending').on( "click", function(){
			jQuery('.icon.trending').toggleClass('active');
			jQuery('.icon.latest').removeClass('active');
		});
		jQuery('.latest-trending .latest').on( "click", function(){
			jQuery('.menu-post.latest').toggleClass('active');
			jQuery('.menu-post.trending').removeClass('active');
		});
		jQuery('.latest-trending .trending').on( "click", function(){
			jQuery('.menu-post.trending').toggleClass('active');
			jQuery('.menu-post.latest').removeClass('active');
		});
		jQuery('nav,section').on('click',function(){
			jQuery('.menu-post.trending').removeClass('active');
			jQuery('.menu-post.latest').removeClass('active');
			jQuery('.icon.latest').removeClass('active');
			jQuery('.icon.trending').removeClass('active');
		});
	
		
		/*===============================
			Hero Slider
		=================================*/ 
		jQuery(".hero-slider-active").owlCarousel({
			loop:true,
			autoplay:false,
			smartSpeed: 500,
			autoplayTimeout:2500,
			autoplayHoverPause:true,
			center:false,
			nav:false,
			navText: ['<i class="fa fa-long-arrow-left" aria-hidden="true"></i>', '<i class="fa fa-long-arrow-right" aria-hidden="true"></i>'],
			dots:true,
			items:1,
		});
		/*===============================
			Hero SLider Two
		=================================*/ 
		$(".hero-slider-two").owlCarousel({
			loop:true,
			autoplay:false,
			smartSpeed: 500,
			autoplayTimeout:2500,
			autoplayHoverPause:true,
			center:false,
			nav:true,
			navText: ['<i class="fa fa-long-arrow-left" aria-hidden="true"></i>', '<i class="fa fa-long-arrow-right" aria-hidden="true"></i>'],
			dots:false,
			items:1,
		});
		/*===============================
			Hero Slider Three
		=================================*/ 
		$(".hero-slider-three").owlCarousel({
			loop:true,
			autoplay:false,
			smartSpeed: 500,
			autoplayTimeout:2500,
			autoplayHoverPause:true,
			center:false,
			nav:true,
			navText: ['<i class="fa fa-long-arrow-left" aria-hidden="true"></i>', '<i class="fa fa-long-arrow-right" aria-hidden="true"></i>'],
			dots:false,
			items:1,
		});
		
		/*===============================
			Popular List Slider
		=================================*/ 
		jQuery(".popular-list-slider").owlCarousel({
			loop: $(".popular-list-slider .popular-single-slider").length > 0 ? true : false,
			autoplay:false,
			smartSpeed: 500,
			autoplayTimeout:3000,
			autoplayHoverPause:true,
			dots:false,
			nav:true,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			items:1,
		});
		
		/*===============================
			Top Featured Slider
		=================================*/ 
		jQuery(".top-feature-slider").owlCarousel({
			loop:true,
			autoplay:false,
			smartSpeed: 500,
			autoplayTimeout:2500,
			autoplayHoverPause:true,
			center:false,
			nav:false,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			dots:true,
			items:1,
		});
		
		/*===============================
			Post Thumbnail Slider
		=================================*/ 
		jQuery(".post-thumbnail-slider").owlCarousel({
			loop:true,
			autoplay:false,
			smartSpeed: 500,
			autoplayTimeout:3000,
			autoplayHoverPause:true,
			nav:false,
			dots:false,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			items:1,
		});			
		
		/*===============================
			News Grid Slider
		=================================*/ 
		jQuery(".news-grid-slider").owlCarousel({
			loop:true,
			autoplay:false,
			smartSpeed: 500,
			autoplayTimeout:2500,
			autoplayHoverPause:true,
			center:false,
			nav:true,
			margin:30,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			dots:false,
			items:3,
			responsive:{
				300: {
					items:1,
				},
				480: {
					items:1,
				},
				768: {
					items:2,
				},
				1170: {
					items:3,
				},
			}
		});
		
		/*===============================
			Top News Slider
		=================================*/ 
		jQuery(".top-slider-news-active").owlCarousel({
			loop:true,
			autoplay:false,
			smartSpeed: 500,
			autoplayTimeout:2500,
			autoplayHoverPause:true,
			center:false,
			nav:true,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			dots:false,
			items:1,
		});
		
		
		/*===============================
			Trending Post Slider
		=================================*/ 
		jQuery(".trending-post-slider").owlCarousel({
			loop:true,
			autoplay:false,
			smartSpeed: 500,
			autoplayTimeout:2500,
			autoplayHoverPause:true,
			center:false,
			nav:true,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			dots:false,
			items:5,
		});
	
		/*===============================
			Blog Slider News
		=================================*/ 
		jQuery(".blog-slider").owlCarousel({
			loop:true,
			autoplay:false,
			smartSpeed: 500,
			autoplayTimeout:2500,
			autoplayHoverPause:true,
			center:false,
			nav:false,
			dots:true,
			items:1,
		});
		/*===============================
			Blog Slider News
		=================================*/ 
		jQuery(".b-news-slider").owlCarousel({
			loop:true,
			autoplay:false,
			smartSpeed: 500,
			autoplayTimeout:2500,
			autoplayHoverPause:true,
			center:false,
			nav:true,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			dots:false,
			items:1,
		});
		/*===============================
			Blog Slider News
		=================================*/ 
		jQuery(".category-inner").owlCarousel({
			loop:true,
			autoplay:false,
			smartSpeed: 500,
			autoplayTimeout:2500,
			autoplayHoverPause:true,
			center:false,
			nav:true,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			dots:false,
			items:1,
		});
		
		/*=====================================
			Video Popup
		======================================*/ 
		jQuery('.video-popup').magnificPopup({
			type: 'iframe',
			removalDelay: 300,
			mainClass: 'mfp-fade'
		});
		
		/*====================================
			Scrool Up
		======================================*/ 	
		jQuery.scrollUp({
			scrollName: 'scrollUp',      // Element ID
			scrollDistance: 300,         // Distance from top/bottom before showing element (px)
			scrollFrom: 'top',           // 'top' or 'bottom'
			scrollSpeed: 1000,            // Speed back to top (ms)
			animationSpeed: 200,         // Animation speed (ms)
			scrollTrigger: false,        // Set a custom triggering element. Can be an HTML string or jQuery object
			scrollTarget: false,         // Set a custom target element for scrolling to. Can be element or number
			scrollText: ["<i class='fa fa-angle-double-up'></i>"], // Text for element, can contain HTML
			scrollTitle: false,          // Set a custom <a> title if required.
			scrollImg: false,            // Set true to use image
			activeOverlay: false,        // Set CSS color to display scrollUp active point, e.g '#00FFFF'
			zIndex: 5344           // Z-Index for the overlay
		});
		
	});	
		/*====================================
			Preloader JS
		======================================*/
		jQuery(window).on('load', function() {
			// Preloader
			$('.popup-adver').delay(2000).fadeOut('slow');

		});
		
		jQuery('body').addClass('boxed-bg');

		// Mega menu Jquery
		$(".mega-menu .mega-inner").wrapInner('<li><div class="mega-menu-content clearfix"><div class="menu-tab"><div class="row first-row"><ul class="menu-tab-menu nav nav-tabs" data-toggle="tab-hover"></ul></div></div></div></li>');  
		$( ".menu-tab .first-row" ).after( '<div class="row"><div class="col-12"><div class="tab-content"></div></div></div>' );
		$(".menu-tab-menu li:first a").addClass('active');

		var megatabActive = $('menu-tab-menu li a.active').attr('href');
		$(megatabActive).addClass('show');
		$(megatabActive).addClass('active');

		
		// Added code for layouts
		jQuery('.blog-sidebar .widget_categories').addClass('category-list');
		jQuery('.blog-sidebar .widget_meta').addClass('category-list');
		jQuery('.blog-sidebar .widget_archive').addClass('category-list');
		jQuery('.blog-sidebar .widget_recent_entries').addClass('category-list');
		jQuery('.blog-sidebar .widget_recent_comments').addClass('category-list');
		jQuery('.blog-sidebar .widget_search').addClass('blog-search');
		jQuery('.blog-sidebar .search-submit').addClass('button');
		jQuery('.comments-body .comment').addClass('single-comment');
		jQuery('footer .widget_categories').addClass('single-footer f-link');

		jQuery('#menu-right-search-form .fa-search').on('click',function(){
			jQuery('#menu-right-search-form').submit();
		});

		jQuery('#navbarSupportedContent').on('keydown', function (e) {
		    if ((e.which === 9 && !e.shiftKey)) {
		        // e.preventDefault();
		        jQuery('.header .main-menu .nav .dropdown li').css('opacity','1');
		        jQuery('.header .main-menu .nav .dropdown li').css('visibility','visible');
		    }	  
	    });

		jQuery(".header .main-menu .nav .dropdown li").hover(
		  function() {
		    jQuery('.header .main-menu .nav .dropdown li').css('opacity','');
	        jQuery('.header .main-menu .nav .dropdown li').css('visibility','');
		  }, function() {
		   jQuery('.header .main-menu .nav .dropdown li').css('opacity','');
	       jQuery('.header .main-menu .nav .dropdown li').css('visibility','');
		  }
		);

		jQuery(".just-news-mobile-menu .close-menu a").on('click',function(){
			jQuery(".menu-click a").focus();
		});
})(jQuery);

// Sidenav JS

(function ($) {
  'use strict';
  // Sidenav focus Javascript
  $('.sidebar-menu').hide();
  window.lastTabbable = '';
  var findInsiders = function(elem) {
    
    var tabbable = elem.find('input, button, a').filter(':visible');
    
    var firstTabbable = tabbable.first();

    if(tabbable.last().next().children().length  == 0){
       lastTabbable  = tabbable.last();
    }
    else{
      tabbable.last().focus(function(){
        // alert('test');
        $(this).addClass('show');
        tabbable.last().next().addClass('show');
      })

      tabbable.last().next().children().last().focusout(function(){
        tabbable.last().removeClass('show');
        tabbable.last().next().removeClass('show');
      });
      lastTabbable  = tabbable.last().next().children().last();     
    }

    
    /*set focus on first input*/
    firstTabbable.focus();

    /*redirect last tab to first input*/
    lastTabbable.on('keydown', function (e) {
      if ((e.which === 9 && !e.shiftKey)) {
        e.preventDefault();
        firstTabbable.focus();
      }
    });

    /*redirect first shift+tab to last input*/
    firstTabbable.on('keydown', function (e) {
      if ((e.which === 9 && e.shiftKey)) {
        e.preventDefault();
        lastTabbable.focus();
      }
    });

  };
  
  
  $('.icon.bars').click(function(e){
    e.preventDefault(); 
    $('.sidebar-menu').addClass('active');
    $('.sidebar-menu').show();
    findInsiders($('.sidebar-menu'));
  });
  
  $('.cross').on( "click", function(e){
    e.preventDefault();
    $('.sidebar-menu').removeClass('active');
    $('.sidebar-menu').hide();
    $(".icon.bars").focus();
  });
 

})(window.jQuery);
