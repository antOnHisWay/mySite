<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bloggist
 */

?>
</div>
</div><!-- #content -->

<footer id="colophon" class="site-footer clearfix">

	<div class="content-wrap">
		<?php if ( is_active_sidebar( 'footerwidget-1' ) ) : ?>
			<div class="footer-column-wrapper">
				<div class="footer-column-three footer-column-left">
					<?php dynamic_sidebar( 'footerwidget-1' ); ?>
				</div>
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'footerwidget-2' ) ) : ?>
				<div class="footer-column-three footer-column-middle">
					<?php dynamic_sidebar( 'footerwidget-2' ); ?>
				</div>
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'footerwidget-3' ) ) : ?>
				<div class="footer-column-three footer-column-right">
					<?php dynamic_sidebar( 'footerwidget-3' ); ?>				
				</div>
			<?php endif; ?>

		</div>

		<div class="site-info">

			&copy;<?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>
							<!-- Delete below lines to remove copyright from footer -->
				<span class="footer-info-right">
					<?php echo __(' | Powered by ', 'bloggist') ?> <a href="<?php echo esc_url('https://superbthemes.com/', 'bloggist'); ?>" rel="nofollow noopener"><?php echo __('Superb Themes', 'bloggist') ?></a>
				</span>

                <div>
                    <div style="width:300px;margin:0 auto; padding:20px 0 0 0; display: inline-block;">
                        <a target="_blank" href="https://beian.miit.gov.cn/" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;"><p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px; color:#939393;">蜀ICP备2023021836号-1</p></a>
                    </div>
                    <div style="width:300px;margin:0 auto; padding:20px 0 0 0; display: inline-block;">
                        <a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=51010702003667" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;"><img src="./images/beian.png" style="float:left;"><p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px; color:#939393;">川公网安备 51010702003667号</p></a>
                    </div>
                </div>
				<!-- Delete above lines to remove copyright from footer -->
		</div><!-- .site-info -->
	</div>



</footer><!-- #colophon -->
</div><!-- #page -->

<div id="smobile-menu" class="mobile-only"></div>
<div id="mobile-menu-overlay"></div>

<?php wp_footer(); ?>
</body>
</html>
