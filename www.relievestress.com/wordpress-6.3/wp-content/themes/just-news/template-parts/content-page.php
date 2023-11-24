<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Just News
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<!-- Start Blog Single -->
	<div class="blog-single-main">
		<div class="row">
			<div class="col-12">
				<div class="blog-head">
					<?php just_news_post_thumbnail(); ?>
				</div>
				<div class="blog-detail">
					<!-- Trending Meta -->
					<h2 class="blog-title"><?php the_title()?></h2>
					<div class="justnews-content">
						<?php the_content();?>
					</div>
				</div>
				<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'just-news' ),
					'after'  => '</div>',
				) );
				?>
			</div>
			
		</div>
	</div>
	<!-- End Blog Single -->
</article><!-- #post-<?php the_ID(); ?> -->