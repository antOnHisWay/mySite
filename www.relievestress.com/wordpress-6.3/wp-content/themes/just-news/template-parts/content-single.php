<?php /**
 * Template part for displaying posts
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
					<div class="justnews-meta">
						<?php if(absint(get_theme_mod('just_news_singlepage_author_enable')) == 1):?>
						<span class="author"><?php just_news_posted_by();?></span>
						<?php endif;?>
						<?php if(absint(get_theme_mod('just_news_singlepage_postdate_enable')) == 1):?>
						<span><i class="fa fa-calendar"></i><?php just_news_posted_on();?> </span>
						<?php endif;?>

						<?php if(absint(get_theme_mod('just_news_singlepage_commentno_enable')) == 1):?>
						<?php if(absint(get_comments_number()) > 0):?>
						<span class="comment"><i class="fa fa-comments"></i><?php esc_html_e('Comment', 'just-news');?>  (<?php echo absint(get_comments_number());?>)</span>
						<?php endif;?>
						<?php endif;?>

						<?php if(absint(get_theme_mod('just_news_singlepage_timetoread_enable')) == 1): ?>
						<span class="date pl-1">
						<?php just_news_count_content_words( get_the_ID());
						?> 								
						</span>

						<?php endif;?>
					</div>
					<h2 class="blog-title"><?php the_title()?></h2>
					<div class="justnews-content">
						<?php the_content();?>
					</div>
				</div>
				<!-- Tag and Share -->
				<div class="tag-share">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-xs-12">
							<div class="content-tags">
								<h4><?php esc_html_e('Tags:', 'just-news');?></h4>
								<?php $just_news_tags = get_the_tags(get_the_ID());?>
								<ul class="tag-inner">
									<?php
									if(!empty($just_news_tags)):
										foreach ($just_news_tags as $just_news_tag):?>
										<li><a href="<?php echo esc_url(get_tag_link($just_news_tag->term_id));?>"><?php echo esc_html($just_news_tag->name);?></a></li>
									<?php 
										endforeach;
									endif;
									?>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!--/ End Tag and Share -->
			</div>
			
		</div>
	</div>
	<!-- End Blog Single -->

</article><!-- #post-<?php the_ID(); ?> -->
