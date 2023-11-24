<?php 
function just_news_color_font_css(){?>
	<style type="text/css">
	<?php if( get_theme_mod('just_news_primary_theme_color_setting') ):?>
	
	.justnews-btn{
		background:<?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.shadow.primary::before{
		background-image:linear-gradient(transparent, <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>), linear-gradient(#0000, #ffffff);
	}

	.grid-title:before{
		background: <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.grid-title i {
	    background: <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.breadcrumbs ul li .middle-icon {
	    color: <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.lang-nav .lang-dropdown {
	    border-top: 2px solid <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.lang-nav .lang-dropdown li a:hover{
		color:<?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}
	.top-menu ul li a:hover{
		color:<?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}
	.side-icon li a:hover{
		background:<?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}
	.header .search-form .form input {
		border-top-color: <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.header .search-form .form input:hover{
		border-color:<?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}
	.header .search-form .form a {
	    color: <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}
	.header .search-form .form a:hover{
		background:<?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}
	.main-menu {
	    background: <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.main-menu .nav li .dropdown li .dropdown.sub-menu li:hover a{
		color:<?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}
	.main-menu .nav li .dropdown .menu-tab ul.menu-tab-menu li a:hover,
	.main-menu .nav li .dropdown .menu-tab ul.menu-tab-menu li a.active{
		background:<?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}
	.main-menu .nav li .dropdown .tab-content .tab-single-post a:hover{
		color:<?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}
	.main-menu .nav .tab-content .post-content .date span i{
		color:<?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}
	.menu-right .single-menu .icon:hover {
	    color: <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}
	.sidebar-menu .social ul li a:hover{
		background:<?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}
	.header.style2 .top-menu ul li a:hover{
		color:<?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}
	.header.style2 .lang-dropdown li a:hover{
		color:<?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}
	.header.style2 .main-menu .nav li .new {
	    background: <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}
	.header.style2 .main-menu .nav li .new:before{
		border-top-color:<?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}
	.header.style2 .main-menu .nav li.active a,
	.header.style2 .main-menu .nav li:hover a {
	    color: <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.header.style2 .main-menu .nav .dropdown li a:hover{
		color:<?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.header.style3 .main-menu {
		border-bottom:3px solid <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.header.style3 .main-menu .nav li.active a,
	.header.style3 .main-menu .nav li:hover a {
	    color: <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.header.style3 .main-menu .nav li .dropdown li a:hover{
		color:<?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.menu-post .post-info h4 a:hover{
		color:<?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}
	.menu-post .cat-name i {
	    color: <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}
	.trending-tags .title {
		background: <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.trending-tags .tag-list ul li a:hover{
		color:<?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}
	.header.style4 .main-menu .nav .dropdown li:hover a {
	    color: <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}
	.header.style4 .main-menu .nav li .dropdown .tab-content .tab-single-post a:hover{
		color:<?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}
	.header.blog .main-menu .nav li.active a,
	.header.blog .main-menu .nav li:hover a {
	    background: <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.breaking-news .breaking-title h2 {
	    background: <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}
	.hero-big-slider .justnews-meta span i{
		color:<?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}
	.hero-big-slider .slider-content h2 a:hover{
		color:<?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}
	.hero-big-slider .slider-content .read-more:hover{
		background:<?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}
	.hero-big-slider .owl-controls .owl-nav div {
	    color: <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}
	.hero-big-slider .owl-controls .owl-nav div:hover{
		background:<?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}
	.hero-style-three .slider-head .btn:hover{
		background:<?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.hero-style-three .owl-controls .owl-nav div {
	    color: <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;    
	}

	.hero-style-three .owl-controls .owl-nav div:hover{
		background:<?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.featured-inner .post-content h2 a {
	    color: <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.featured-inner .post-text {
		border-top: 2px solid <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.post-tab-sidebar .post-tab .nav li a.active,
	.post-tab-sidebar .post-tab .nav li a:hover {
		border-bottom: 4px solid <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.post-tab-sidebar .post-tab .single-post .p-number {
	    color: <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.single-grid-news .post-formet {
	    color: <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.single-grid-news .default-cat {
	    color: <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.single-grid-news .justnews-content h2 a:hover{
		color:<?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}
	.popular-list-slider .owl-controls .owl-nav div:hover{
		background:<?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.top-feature-news .justnews-content {
	    border-top: 6px solid <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.top-feature-news .owl-dots .owl-dot.active span,
	.top-feature-news .owl-dots .owl-dot:hover span{
		background:<?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.post-thumbnail-feature .cat-name a {
	    color: <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.post-thumbnail-feature .owl-controls .owl-nav div:hover{
		background:<?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.trend-newsletter .form .btn:hover{
		color:<?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.video-big-news .justnews-content h2 a:hover{
		color:<?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.small-video-list .justnews-content .news-title a:hover{
		color:<?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.tab-first-news .justnews-content .news-title a:hover{
		color:<?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.tab-news-right .single-news:hover img{
		border-color:<?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}


	.news-grid-slider .justnews-content .date a {
		color: <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.news-grid-slider .justnews-content h2 a:hover{
		color:<?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.news-grid-slider .owl-controls .owl-nav div {
	    background: <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>; 
	}

	.news-grid-slider .owl-controls .owl-nav div:hover{
		color:<?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.top-slider-news .justnews-content .justnews-btn {
	    color: <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.top-slider-news .justnews-content .justnews-btn:hover{
		background:<?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.top-slider-news .owl-controls .owl-nav div {
	    color: <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.top-slider-news .owl-controls .owl-nav div:hover{
		background:<?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.small-grid-thumbnail:hover .justnews-content .cat-name a{
		color:<?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.post-one-single .news-title a:hover{
		color:<?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.blog-sidebar .category-list li:before {
	    background: <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.tab-sidebar .post-tab-sidebar .post-tab .nav li a.active,
	.tab-sidebar .post-tab-sidebar .post-tab .nav li a:hover {
	    background: <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.blog-head.video-play .video {
	    color: <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}
	.blog-head.video-play .video:hover{
		background:<?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}
	.blog-slider .owl-controls .owl-dots .owl-dot.active span {
	    background: <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.jn-comments .comment-form .form-submit input {
	    background:<?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>; 
	}

	.contact .form-group input:hover,
	.contact .form-group textarea:hover{
		border-color:<?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.contact .single-address i {
	    color: <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.single-team .member-name h4 {
		color: <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.single-team.featured {
		border-bottom: 4px solid <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.category-featured .justnews-content h2 a:hover{
		color:<?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.category-featured .justnews-btn {
		color: <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
		border-bottom: 2px solid <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}
	.category-featured .top-title {
	    color: <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.category-inner .owl-controls .owl-nav div {
		color: <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}
	.category-inner .owl-controls .owl-nav div:hover {
		background: <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.popup-adver .closed-btn button {
	    background: <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}

	.footer .f-news .post-info h4 a:hover{
		color:<?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}
	
	.footer .f-news .cat-name i {
	    color: <?php echo esc_attr(get_theme_mod('just_news_primary_theme_color_setting'));?>;
	}
	<?php endif;?>

	/*Secondary*/
	<?php if( get_theme_mod( 'just_news_secondary_theme_color_setting' ) ):?>
		body {
			color: <?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.justnews-btn:hover{
			background:<?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.overlay:before{
			background:<?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.shadow::before {
			background-image: linear-gradient(transparent, <?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>), linear-gradient(#0000, <?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>);
		}

		.hero-big-slider .slider-content {
			background: <?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.side-icon li a {
		    color: <?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.top-social ul li a {
		    color: <?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.main-menu .nav li .new {
		    color: <?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}


		.main-menu .nav li .dropdown .menu-tab ul.menu-tab-menu li a {
		    color: <?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		 
		}

		.main-menu .nav li .dropdown .tab-content .tab-single-post a {
		 
		    color: <?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.menu-right .single-menu .icon {
		    color: <?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		 
		}

		.sidebar-menu .single-content .links li a{
			
			color:<?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
			
		}

		.header.style2 .topbar {
		    background: <?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		   
		}
		.header.style3{
			background:<?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.header.style3 .main-menu .nav li a{
			color:<?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.menu-post .post-info h4 a {
		    color: <?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.header.style4 .main-menu .nav .dropdown {
		    background: <?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.header.style4 .main-menu .nav li .dropdown .menu-tab ul.menu-tab-menu li a {
		    color: <?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.header.blog .main-menu{
			background:<?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.breaking-post {
		    background: <?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.breaking-news .owl-controls .owl-nav div {
		    background: <?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.top-post-thumb .cat-name a {
		    color: <?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.top-post-thumb .post-content h4 a {
		    color: <?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.hero-style-three .slider-head .btn {
		    color: <?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.featured-inner .post-content h2 a:hover{
			color:<?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.post-tab-sidebar .post-tab .post-info a {
		    color: <?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.single-grid-news .justnews-content h2 a {
			color:<?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.popular-single-slider {
		    background: <?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.popular-list-slider .owl-controls .owl-nav div {
		    color: <?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.top-feature-news .justnews-content h2 a {
		    color: <?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.top-feature-news .owl-dots .owl-dot span {
		    padding: 0;
		    margin: 0;
		    background: <?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		    width: 12px;
		    height: 12px;
			-webkit-transition:all 0.3s ease;
			-moz-transition:all 0.3s ease;
			transition:all 0.3s ease;
		}

		.post-thumbnail-feature .owl-controls .owl-nav div {
		 
		    color: <?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		 
		}


		.trend-newsletter .form .btn{

			background:<?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		} 

		.video-news {
		    background: <?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.video-big-news .justnews-content h2 a {
		    color: <?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.small-video-list .justnews-content .news-title a {
		    color: <?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.news-tab-nav ul.nav-tabs li a {
		    color: <?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.tab-first-news .justnews-content .news-title a {
		    color: <?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.tab-news-right .justnews-content h4 a{
			color:<?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.news-grid-slider .justnews-content h2 a {
		    color: <?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.post-one-single .news-title a{
			color:<?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.trending-post .title-head .view-all:hover{
			color:<?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.blog-sidebar .blog-search .button {
			background: <?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.blog-sidebar .category-list li a {
			color: <?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.blog-sidebar .side-tags .tag li a {
			background: <?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.blog-sidebar .newsletter .letter-inner .form-inner a:hover{
			background:<?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
			color:#fff;
		}

		.c-single-popular .content h5 a {
		    color: <?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.tab-sidebar .post-tab-sidebar .post-tab .single-post .p-number{
			background: <?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.blog-slider .owl-controls .owl-dots .owl-dot span {
		    background: <?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.blog-single .content-tags .tag-inner li a:hover{
			background:<?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.jn-comments .single-comment .comment-body .comment-meta {
			color: <?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.blog-page .blog-title a{
			color:<?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.blog-page .blog-detail .content .btn:hover{
			background:<?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.error-page .error-inner h2 {
			color: <?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.error-page .error-inner h2 span {
		    color: <?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.category-archive .news-title a {
		    color: <?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.category-featured .justnews-content h2 a {
		    color: <?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.popup-adver .closed-btn button:hover{
			background:<?php echo esc_attr(get_theme_mod( 'just_news_secondary_theme_color_setting' ));?>;
		}

		.footer {
		    background: <?php echo esc_attr(get_theme_mod('just_news_secondary_theme_color_setting'));?>;
		}
		<?php endif;?>
		<?php if(get_theme_mod('just_news_select_bw_layout') == 'box'):?>
		#page.boxed-layout { width: <?php echo esc_attr(get_theme_mod('just_news_select_bw_pixel'));?>px; margin:auto} 
		<?php endif;?>	

		<?php if(get_theme_mod('just_news_top_header_bg_color_setting')):?>
		.topbar { background: <?php echo esc_attr(get_theme_mod('just_news_top_header_bg_color_setting'));?>} 
		<?php endif;?>

		<?php if(get_theme_mod('just_news_top_header_text_color_setting')):?>
		.top-menu ul li a { color: <?php echo esc_attr(get_theme_mod('just_news_top_header_text_color_setting'));?>} 
		<?php endif;?>

		<?php if(get_theme_mod('just_news_middle_header_bg_color_setting')):?>
		.header-inner { background: <?php echo esc_attr(get_theme_mod('just_news_middle_header_bg_color_setting'));?>} 
		<?php endif;?>	





		/*Start*/
		<?php if(get_theme_mod('just_news_body_bg_color_setting')):?>
		#page.boxed-layout {
			background:<?php echo esc_attr(get_theme_mod('just_news_body_bg_color_setting'));?>; 
		}
	<?php endif;?>

	<?php if(get_theme_mod('just_news_body_text_color_setting')):?>
		body{
			color:<?php echo esc_attr(get_theme_mod('just_news_body_text_color_setting'));?>; 
		}
	<?php endif;?>	

	<?php if(get_theme_mod('just_news_footer_bg_color_setting')):?>
		.footer{
			background: <?php echo esc_attr(get_theme_mod('just_news_footer_bg_color_setting'));?>; 
		}
	<?php endif;?>	

	<?php if(get_theme_mod('just_news_footer_text_color_setting')):?>
		.footer p,.footer li a,.footer a{
		color: <?php echo esc_attr(get_theme_mod('just_news_footer_text_color_setting'));?>; 
		}
	<?php endif;?>	
	/*Google Font family */
	<?php if(get_theme_mod('google_fontfamily_setting')):?>
		body{
			font-family:<?php echo esc_attr( get_theme_mod('google_fontfamily_setting'));?>;
		}
	<?php endif;?>

	<?php if(get_theme_mod('section_title_google_fontfamily_setting')):?>
		section h1,section h2,section h3,section h4,section h5,section h6, h1 a,h2 a,h3 a,h4 a,h5 a,h6 a{
			font-family:<?php echo esc_attr( get_theme_mod('section_title_google_fontfamily_setting'));?>;
		}
	<?php endif;?>

	<?php if(get_theme_mod('section_description_google_fontfamily_setting')):?>
		section p{
			font-family:<?php echo esc_attr( get_theme_mod('section_description_google_fontfamily_setting'));?>;
		}
	<?php endif;?>

	<?php if(get_theme_mod('just_news_trending_bg_color_setting')):?>
		.trending-tags .title {
			background:<?php echo esc_attr( get_theme_mod('just_news_trending_bg_color_setting'));?>;
		}
	<?php endif;?>

	<?php if(get_theme_mod('just_news_trending_text_color_setting')):?>
	.trending-tags .title {
		color:<?php echo esc_attr( get_theme_mod('just_news_trending_text_color_setting'));?>;
	}
<?php endif;?>
</style>	
<?php
}
add_action('wp_head','just_news_color_font_css');