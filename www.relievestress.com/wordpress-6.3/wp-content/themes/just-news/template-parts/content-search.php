<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Just News
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- Start Blog Single -->
	<div class="blog-single-main">
		<div class="single-inner">
			<?php 
				$categories = get_the_category(get_the_ID());
			?>
			<div class="blog-head">
				<?php if(absint(get_theme_mod('just_news_archive_category_enable')) == 1):?>
				<?php if( isset($categories) && !empty($categories) ){?>
				<div class="cat-name"><a href="<?php echo esc_url(get_category_link($categories[0]->term_id));?>" class="default-cat"><?php echo esc_html($categories[0]->name); ?></a></div>
				<?php }?>
				<?php endif;?>
				<?php just_news_post_thumbnail(); ?>
			</div>
			<div class="blog-detail">
				<!-- Trending Meta -->
				<div class="justnews-meta">
					<?php if(absint(get_theme_mod('just_news_archive_author_enable')) == 1):?>
					<span class="author"><?php just_news_posted_by();?></span>
					<?php endif;?>

					<?php if(absint(get_theme_mod('just_news_archive_postdate_enable')) == 1):?>
					<span><i class="fa fa-calendar"></i><?php just_news_posted_on();?></span>
					<?php endif;?>
					<?php if(absint(get_theme_mod('just_news_archive_commentno_enable')) == 1):?>
					<?php if(absint(get_comments_number()) > 0):?>
					<span class="comment"><i class="fa fa-comment-o"></i>(<?php echo absint(get_comments_number());?>)</span>
					<?php endif;?>
					<?php endif;?>
				</div>
				<h2 class="blog-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
				<div class="content">
					<?php the_excerpt();?>
					<a href="<?php the_permalink();?>" class="btn"><?php esc_html_e('Read More','just-news');?></a>
				</div>
			</div>
		</div>		
	</div>
	<!-- End Blog Single -->
	<?php
	wp_link_pages( array(
		'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'just-news' ),
		'after'  => '</div>',
	) );
	?>
</article><!-- #post-<?php the_ID(); ?> -->