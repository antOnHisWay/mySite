<?php
/**
 * The template for displaying Category pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Just News
 */

get_header();
?>
<?php 
$category = get_queried_object();
// echo $category->term_id;
$cat_layout = get_term_meta( $category->term_id, '_cat_layout', true );
?>
<?php if($cat_layout == 'layout-1'):?>
<!-- Category Top Post -->
<div class="category-post-top">
	<div class="container-fluid">
		<div class="row no-gutters">
			<?php
				if ( have_posts() ) :
					$count = 0;
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();
						if($count < 4):?>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-grid-news shadow">
								<!-- News Head -->
								<div class="image-head">
									<a href="<?php the_permalink();?>"><?php the_post_thumbnail('just-news-308X345-thumbnail'); ?></a>
								</div>
								<!-- Trendnews Content -->
								<div class="justnews-content">
									<h2 class="news-title medium"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
									<?php the_excerpt();?>
									<a href="<?php the_permalink();?>" class="justnews-btn"><?php esc_html_e('Read News','just-news');?></a>
								</div>
							</div>
						</div>
					<?php	endif;
					$count++;	
					endwhile;
				endif;
			?>
		</div>
	</div>
</div>
<!--/ End Category Top Post -->
<?php endif;?>

<?php if($cat_layout == 'layout-2'):?>
<!-- Category Featured -->
<div class="category-featured">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="category-inner">
					<?php
				if ( have_posts() ) :
					$count = 0;
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();
						if($count < 2):?>
					<!-- Single Category Slider -->
					<div class="single-c-slider">
						<div class="row">
							<div class="col-lg-6 col-12">
								<div class="image-head">
									<div class="top-title"><?php esc_html_e('Featured','just-news');?></div>
									<a href="<?php the_permalink();?>"><?php the_post_thumbnail('just-news-538X294-thumbnail'); ?></a>
								</div>
							</div>
							<div class="col-lg-6 col-12">
								<!-- Trendnews Content -->
								<div class="justnews-content">
									<h2 class="news-title medium"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
									<?php the_excerpt();?>
									<a href="<?php the_permalink();?>" class="justnews-btn"><?php esc_html_e('Read Full News','just-news');?></a>
									
								</div>
							</div>
						</div>
					</div>
					<!--/ End Single Category Slider -->
					<?php	endif;
					$count++;	
					endwhile;
				endif;
				?>
				</div>
			</div>
		</div>
	</div>
</div>
<!--/ End Category Top Post -->
<?php endif;?>	
<?php if($cat_layout == 'layout-1'):?>
<!-- Start Blog Single -->
<section class="category-archive section">
	<div class="container">
		<?php if(get_theme_mod('just_news_blog_category_layout_settings') == 'right'):?>
		<div class="row flex-row-reverse">
		<?php else:?>
			<div class="row">
		<?php endif;?>	
			<?php if(get_theme_mod('just_news_blog_category_layout_settings') != 'none'):?>
			<div class="col-lg-4 col-md-4 col-12">
				<!-- Blog Sidebar -->
				<div class="blog-sidebar">
					<?php get_sidebar();?>
				</div>
				<!--/ End Blog Sidebar -->
			</div>
			<?php endif;?>

			<?php if(get_theme_mod('just_news_blog_category_layout_settings') != 'none'):?>
				<div class="col-lg-8 col-md-8 col-12">
			<?php else:?>	
				<div class="col-lg-12 col-md-12 col-12">
			<?php endif;?>
			
				<div class="row">
				<?php
				if ( have_posts() ) :
					$count = 0;
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();
						if($count > 3){
						/*
						 * Include the Post-Type-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'category' );
						}
					$count++;	
					endwhile;
					the_posts_navigation();
					?>
				</div>	
					<!-- End Blog Single -->
				<div class="row">
					<div class="col-12">
						<!-- Start Pagination -->
						<div class="pagination-main">
							<?php the_posts_pagination();?>
						</div>
						<!--/ End Pagination -->
					</div>
				</div>
				<?php 

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>

		
			</div>
			
		</div>
	</div>
</section>
<!--/ End Blog Single -->
<?php elseif($cat_layout == 'layout-2'):?>
<!-- Start Blog Single -->
<section class="category-archive section">
	<div class="container">
		<?php if(get_theme_mod('just_news_blog_category_layout_settings') == 'right'):?>
		<div class="row flex-row-reverse">
		<?php else:?>
			<div class="row">
		<?php endif;?>	
			<?php if(get_theme_mod('just_news_blog_category_layout_settings') != 'none'):?>
			<div class="col-lg-4 col-md-4 col-12">
				<!-- Blog Sidebar -->
				<div class="blog-sidebar">
					<?php get_sidebar();?>
				</div>
				<!--/ End Blog Sidebar -->
			</div>
			<?php endif;?>

			<?php if(get_theme_mod('just_news_blog_category_layout_settings') != 'none'):?>
				<div class="col-lg-8 col-md-8 col-12">
			<?php else:?>	
				<div class="col-lg-12 col-md-12 col-12">
			<?php endif;?>
			
				<div class="row">
				<?php
				if ( have_posts() ) :
					$count = 0;
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();
						if($count > 1){
						/*
						 * Include the Post-Type-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'category' );
						}
					$count++;	
					endwhile;
					the_posts_navigation();
					?>
				</div>	
					<!-- End Blog Single -->
				<div class="row">
					<div class="col-12">
						<!-- Start Pagination -->
						<div class="pagination-main">
							<?php the_posts_pagination();?>
						</div>
						<!--/ End Pagination -->
					</div>
				</div>
				<?php 

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>

		
			</div>
			
		</div>
	</div>
</section>
<!--/ End Blog Single -->
<?php else:?>
	<section class="category-archive section">
	<div class="container">
		<?php if(get_theme_mod('just_news_blog_category_layout_settings') == 'right'):?>
		<div class="row flex-row-reverse">
		<?php else:?>
			<div class="row">
		<?php endif;?>	
			<?php if(get_theme_mod('just_news_blog_category_layout_settings') != 'none'):?>
			<div class="col-lg-4 col-md-4 col-12">
				<!-- Blog Sidebar -->
				<div class="blog-sidebar">
					<?php get_sidebar();?>
				</div>
				<!--/ End Blog Sidebar -->
			</div>
			<?php endif;?>

			<?php if(get_theme_mod('just_news_blog_category_layout_settings') != 'none'):?>
				<div class="col-lg-8 col-md-8 col-12">
			<?php else:?>	
				<div class="col-lg-12 col-md-12 col-12">
			<?php endif;?>
			
				<div class="row">
				<?php
				if ( have_posts() ) :
				
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();
				
						/*
						 * Include the Post-Type-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'category' );
					
					endwhile;
					the_posts_navigation();
					?>
				</div>	
					<!-- End Blog Single -->
				<div class="row">
					<div class="col-12">
						<!-- Start Pagination -->
						<div class="pagination-main">
							<?php the_posts_pagination();?>
						</div>
						<!--/ End Pagination -->
					</div>
				</div>
				<?php 

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>

		
			</div>
			
		</div>
	</div>
</section>
<?php endif;?>

<?php
get_footer();
?>