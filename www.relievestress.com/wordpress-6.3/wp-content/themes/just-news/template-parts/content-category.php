<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Just News
 */

?>
<?php if(get_theme_mod('just_news_blog_category_layout_settings') != 'none'):?>
<div class="col-lg-6 col-md-6 col-12">
<?php else:?>	
	<div class="col-lg-4 col-md-4 col-12">
<?php endif;?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- Single News -->
	<div class="single-news">
		<div class="news-head">
			<?php the_post_thumbnail('just-news-290X205-thumbnail'); ?>
		</div>
		<?php 
				$categories = get_the_category(get_the_ID());
			?>
		<div class="justnews-content">
			<?php if(absint(get_theme_mod('just_news_category_name_enable')) == 1):?>
			<?php if( isset($categories) && !empty($categories) ){?>	
			<div class="cat-name"><a href="<?php echo esc_url(get_category_link($categories[0]->term_id));?>" class="music-cat"><?php echo esc_html($categories[0]->name); ?></a></div>
			<?php }?>
			<?php endif;?>
			<h3 class="news-title medium"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
			<!-- Trending Meta -->
			<div class="justnews-meta">
				<?php if(absint(get_theme_mod('just_news_category_author_enable')) == 1):?>
				<span class="author"><?php just_news_posted_by();?></span>
			<?php endif;?>

			<?php if(absint(get_theme_mod('just_news_category_postdate_enable')) == 1):?>
				<span><i class="fa fa-calendar"></i><?php just_news_posted_on();?></span>
			<?php endif;?>

			<?php if(absint(get_theme_mod('just_news_category_commentno_enable')) == 1):?>
				<?php if(absint(get_comments_number()) > 0):?>
				<span class="comment"><i class="fa fa-comment-o"></i>(<?php echo absint(get_comments_number());?>)</span>
				<?php endif;?>
			<?php endif;?>	
			</div>
			<?php the_excerpt();?>
		</div>
	</div>
	<!--/ End Single News -->
</article><!-- #post-<?php the_ID(); ?> -->
</div>
