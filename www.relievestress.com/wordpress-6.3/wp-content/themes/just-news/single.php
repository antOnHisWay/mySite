<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Just News
 */

get_header();
?>

<!-- News Single -->
<section class="blog-single section">
	<div class="container">
		<?php if(get_theme_mod('just_news_blog_single_layout_settings') == 'left'):?>
		<div class="row flex-row-reverse">
		<?php else:?>
			<div class="row">
		<?php endif;?>	
		<?php if(get_theme_mod('just_news_blog_single_layout_settings') != 'none'):?>
		<div class="col-lg-8 col-md-8 col-12">
			<?php else:?>	
			<div class="col-lg-12 col-md-12 col-12">
		<?php endif;?>		
				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'single' );
					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'just-news' ) . '</span> <span class="nav-title">%title</span>',
							'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'just-news' ) . '</span> <span class="nav-title">%title</span>',
						)
					);

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

					
				endwhile; // End of the loop.
				
				?>
			</div>
			<?php if(get_theme_mod('just_news_blog_single_layout_settings') != 'none'):?>	
			<div class="col-lg-4 col-12">
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
<!--/ End News Single -->

<?php
get_footer();