<?php

function just_news_scripts() {

	// <!-- Web Font -->
	wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css?family='.get_theme_mod('google_fontfamily_setting','Roboto').':300,400,500,700,900', array(), '' );

	wp_enqueue_style( 'google-font1', 'https://fonts.googleapis.com/css?family='.get_theme_mod('section_title_google_fontfamily_setting','Roboto').':300,400,500,700,900', array(), '' );

	wp_enqueue_style( 'google-font2', 'https://fonts.googleapis.com/css?family='.get_theme_mod('section_description_google_fontfamily_setting','Roboto').':300,400,500,700,900', array(), '' );

	// <!-- Bootstrap CSS -->
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/assets/css/bootstrap.min.css', array(), '4.0.0' );
		
	// <!-- Animate CSS -->
	wp_enqueue_style( 'animate', get_template_directory_uri() .'/assets/css/animate.css', array(), '4.0.0' );
	
	// <!-- Font Awesome CSS -->
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() .'/assets/css/font-awesome.css', array(), '4.7.0' );

	// <!-- FancyBox CSS -->
	wp_enqueue_style( 'jquery-fancybox', get_template_directory_uri() .'/assets/css/jquery.fancybox.min.css', array(), '3.1.20' );

	// <!-- Magnipic Popup CSS -->
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() .'/assets/css/magnific-popup.min.css', array(), '1.1.0' );

	// <!-- owl Carousel CSS -->
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() .'/assets/css/owl-carousel.css', array(), '1.0.10' );	

	// <!-- TrendNews Stylesheet -->  
	wp_enqueue_style( 'just-news-reset', get_template_directory_uri() .'/assets/css/reset.css', array(), '1.0.10' );	
	
	wp_enqueue_style( 'just-news-style', get_stylesheet_uri(), array(), '1.0.0' );
	
	// responsive
	wp_enqueue_style( 'just-news-responsive', get_template_directory_uri() .'/assets/css/responsive.css', array(), '1.0.10' );		
	
	// Popper Js
	wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '3.3.1', true ); 

	// <!-- Bootstrap JS -->
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '4.0.0', true );
	
	// <!-- Modernizr JS -->
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/modernizr.min.js', array('jquery'), '4.0.0', true );
			
	// <!-- ScrollUp JS -->
	wp_enqueue_script( 'jquery-scrollup', get_template_directory_uri() . '/assets/js/jquery.scrollUp.min.js', array('jquery'), '2.4.1', true );
	
	// <!-- FacnyBox JS -->
	wp_enqueue_script( 'jquery-fancybox', get_template_directory_uri() . '/assets/js/jquery-fancybox.min.js', array('jquery'), '3.1.20', true );
		
	// <!-- owl carousel JS -->
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl-carousel.min.js', array('jquery'), '2.2.1', true );
	
	// <!-- Easing JS -->
	wp_enqueue_script( 'easing', get_template_directory_uri() . '/assets/js/easing.js', array('jquery'), '1.0.0', true );

	// <!-- Magnipic Popup JS -->
	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.min.js', array('jquery'), '1.0.0', true );
		
	// <!-- Active JS -->
	wp_enqueue_script( 'just-news-active', get_template_directory_uri() . '/assets/js/active.js', array('jquery'), '1.0.0', true );
	
	wp_enqueue_script( 'just-news-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'just-news-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	/* Ajax Requests */
    wp_enqueue_script( 'ajax-stuff', get_template_directory_uri() . '/js/ajax.js', array( 'jquery' ), true,true );
    wp_localize_script( 'ajax-stuff', 'ajaxStuff', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
}
add_action( 'wp_enqueue_scripts', 'just_news_scripts' );


add_action('elementor/editor/after_enqueue_scripts', function() {
    wp_enqueue_media();
    wp_enqueue_script('just-news-widget', get_template_directory_uri() . '/assets/js/just-news-widgets.js',array('jquery'), '1.0.0', true);
    wp_enqueue_style( 'wp-color-picker' );        
    wp_enqueue_script( 'wp-color-picker' ); 
    wp_enqueue_script('just-news-picker', get_template_directory_uri() . '/js/cm-widgets.js', array( 'jquery' ) );

});
