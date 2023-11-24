<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Just News
 */

get_header();
?>


<!-- Start Blog Single -->
<section class="blog-page section">
	<div class="container">
		<?php if(get_theme_mod('just_news_blog_archive_layout_settings') == 'left'):?>
		<div class="row flex-row-reverse">
		<?php else:?>
			<div class="row">
		<?php endif;?>	
		<?php if(get_theme_mod('just_news_blog_archive_layout_settings') != 'none'):?>
		<div class="col-lg-8 col-md-8 col-12">
			<?php else:?>	
			<div class="col-lg-12 col-md-12 col-12">
		<?php endif;?>
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
						get_template_part( 'template-parts/content', get_post_type() );

					endwhile;
					the_posts_navigation();
					?>

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
			<?php if(get_theme_mod('just_news_blog_archive_layout_settings') != 'none'):?>		
			<div class="col-lg-4 col-md-4 col-12">
				<!-- Blog Sidebar -->
				<div class="blog-sidebar">
					<?php get_sidebar();?>
				</div>
				<!--/ End Blog Sidebar -->
			</div>
			<?php endif;?>
		</div>
	</div>
</section>
<!--/ End Blog Single -->

<?php
get_footer();
