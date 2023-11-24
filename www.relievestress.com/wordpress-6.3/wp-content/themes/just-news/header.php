<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Just News
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'just-news' ); ?></a>

<div id="page" class="site boxed-layout">

<!-- Start Header -->
<header class="header style2">
	<?php if(absint(get_theme_mod('just_news_top_header_enable','1'))==1): ?>
	<!-- Topbar -->
	<div class="topbar">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-8">
					<!-- Topbar Nav -->
					<div class="topbar-nav">
						<!-- Language Nav -->
					
						<?php if(absint(get_theme_mod('just_news_top_header_menu_enable','1'))==1): ?>
						<!-- Top Menu -->
						<div class="single-nav top-menu">
							<?php
							if ( has_nav_menu( 'topmenu' ) ) :
							wp_nav_menu( array(
								'theme_location'    => 'topmenu',
								'depth'             => 1,
								'menu_class'        => '',
							) );
							endif;?>
						
						</div>
						<?php endif;?>
					</div>
					<!--/ End Topbar Nav -->
				</div>
				<div class="col-lg-4 col-md-4 col-4">
					<!-- Topbar Right -->
					<div class="top-right">
						<!-- Topbar Social -->
						<?php if(absint(get_theme_mod('just_news_top_header_social_media_enable','1'))==1): ?>
						<div class="top-social">
							<ul>
								
								<?php if(get_theme_mod('just_news_top_header_fb_url')): ?>
								<li><a href="<?php echo esc_url(get_theme_mod('just_news_top_header_fb_url'));?>" class="facebook"><i class="fa fa-facebook"></i></a></li>
								<?php endif;?>

								<?php if(get_theme_mod('just_news_top_header_twitter_url')):?>
								<li><a href="<?php echo esc_url(get_theme_mod('just_news_top_header_twitter_url'));?>" class="twitter"><i class="fa fa-twitter"></i></a></li>
								<?php endif;?>

								<?php if(get_theme_mod('just_news_top_header_instagram_url')):?>
								<li><a href="<?php echo esc_url(get_theme_mod('just_news_top_header_instagram_url'));?>" class="instagram"><i class="fa fa-instagram"></i></a></li>
								<?php endif;?>

								<?php if(get_theme_mod('just_news_top_header_youtube_url')):?>
								<li><a href="<?php echo esc_url(get_theme_mod('just_news_top_header_youtube_url'));?>" class="youtube"><i class="fa fa-youtube-play"></i></a></li>
								<?php endif;?>

								<?php if(get_theme_mod('just_news_top_header_pinterest_url')):?>
								<li><a href="<?php echo esc_url(get_theme_mod('just_news_top_header_pinterest_url'));?>" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
								<?php endif;?>

								<?php if(get_theme_mod('just_news_top_header_dribble_url')):?>
								<li><a href="<?php echo esc_url(get_theme_mod('just_news_top_header_dribble_url'));?>" class="dribble"><i class="fa fa-dribbble"></i></a></li>
								<?php endif;?>

							</ul>
						</div>
						<?php endif;?>
						<!-- Clickable Icon -->
					</div>
					<!--/ End Topbar Right -->
				</div>
			</div>
		</div>
	</div>
	<!--/ End Topbar -->
	<?php endif;?>
	<!-- Header Inner -->
	<div class="header-inner">
		<div class="container">
			<div class="row">
				<div class="offset-lg-4 col-lg-4 col-md-12 col-12">
					<!-- Logo -->
					<div class="logo">
						<?php
						the_custom_logo();
						if ( is_front_page() && is_home() ) :
							?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
						else :
							?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
						endif;
						$just_news_description = get_bloginfo( 'description', 'display' );
						if ( $just_news_description || is_customize_preview() ) :
							?>
							<p class="site-description"><?php echo $just_news_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
						<?php endif; ?>
					</div>
					<?php if(absint(get_theme_mod('just_news_middle_header_date_enable','1'))==1): ?>
					<!-- Date Forment -->
					<div class="time-date">
						<span><i class="fa fa-calendar"></i><?php echo esc_html(date_i18n(get_option('date_format'))); ?> <?php echo esc_html(date_i18n(get_option('time_format'))); ?></span>
					</div>
					<?php endif;?>
					<div class="just-news-mobile-menu">
						<div class="menu-click"><a href="#"class="fa fa-bars"><span><?php esc_html_e('Menu','just-news');?></span></a></div>
						<div class="menu-inner">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'primary',
									'menu_id'        => 'side-menu',
									'menu_class'        => 'side-nav',
								) );
							?>
							<div class="close-menu"><a href="#"><i class="fa fa-remove"></i><?php esc_html_e('Close Menu','just-news');?></a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/ End Header Inner -->
	<!-- Main Menu -->
	<div class="main-menu">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="menu-top">
						<!-- Main Menu -->
						  <nav class="navbar navbar-expand-lg">
				          
				            <?php
				            if ( has_nav_menu( 'primary' ) ) :
				            wp_nav_menu(
				              array(
				                'theme_location' => 'primary',
				                'menu_id'        => 'nav',
				                'menu_class'        => 'nav menu navbar-nav',
				                'container_class'   => 'navbar-collapse',
				                'container_id'      => 'navbarSupportedContent', 
				                'fallback_cb'       => 'Just_News_Navwalker::fallback',
				                'walker'            => new Just_News_Navwalker(),
				              )
				            );
				            else:?>
				            	<nav class="navbar navbar-expand-lg">
									<div class="navbar-collapse">
										<ul class="nav menu navbar-nav">
											<li class="active"><a href="<?php echo esc_url(home_url());?>"><i class="fa fa-home"></i></a>
											</li>
										</ul>
									</div>
								</nav>
				            	<?php
				            endif;
				            ?>
				          </nav><!-- #site-navigation -->

						
						<!--/ End Main Menu -->
						<div class="menu-right">
							<ul class="side-icon">
							<?php if(absint(get_theme_mod('just_news_top_header_search_icon_enable','0'))==1): ?>
							<li><a class="icon search" href="#"><i class="fa fa-search"></i></a></li>
							<?php endif;?>
									<!-- Search Form -->
						<div class="search-form">

							<form method ="get" action="<?php echo esc_url(home_url('/'));?>" class="form" id="menu-right-search-form">
								<input id="placeholder" type="text" value="" name="<?php esc_attr_e( 's', 'just-news' );?>" id="<?php esc_attr_e( 's', 'just-news' );?>" placeholder="">
								<a href="#" class="search-icon-last"><i class="fa fa-search"></i></a>
							</form>
						</div>
							<?php if(absint(get_theme_mod('just_news_top_header_burger_menu_icon_enable','0'))==1): ?>
							<li><a class="icon bars" href="#"><i class="fa fa-bars"></i></a></li>
							<?php endif;?>
						</ul>
						
				
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/ End Main Menu -->
	<!-- Sidebar Menu -->
	<div class="sidebar-menu">
		<a href="#0" class="cross"><i class="fa fa-times"></i></a>
		<div class="content">
			<div class="single-content">
				<!-- Logo -->
				<?php if(absint(get_theme_mod('just_news_sidenav_logo_enable','1'))==1): ?>
				<div class="logo">
					<?php
						the_custom_logo();
						if ( is_front_page() && is_home() ) :
							?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
						else :
							?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php
						endif;
						$just_news_description = get_bloginfo( 'description', 'display' );
						if ( $just_news_description || is_customize_preview() ) :
							?>
							<p class="site-description"><?php echo $just_news_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
						<?php endif; ?>
				</div>
				<!--/ End Logo -->
				<?php endif;?>
			</div>
			<?php if ( is_active_sidebar( 'sidenav-widget-area' ) ) { ?>
				<?php dynamic_sidebar( 'sidenav-widget-area' );?>
			<?php } ?>	
			
		</div>		
	</div>
	<!-- End Sidebar Menu -->
</header>

<!--/ End Header -->

<div id="primary">