<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Just News
 */

?>
</div> <!-- End #primary -->
<!-- Footer Area -->
<footer class="footer">
	<?php if(get_theme_mod('just_news_footer_area_enable','1') == 1):?>
	<!-- Footer Top -->
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<?php if ( is_active_sidebar( 'footer-widget' ) ) {
					dynamic_sidebar( 'footer-widget' );
				}?>
			</div>
		</div>
	</div>
	<!-- End Footer Top -->
	<?php endif;?>

	<?php if(get_theme_mod('just_news_footer_bottom_enable','1') == 1):?>
	<!-- Copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-6">
					<div class="copyright-content text-left">
						<?php if(get_theme_mod('just_news_footer_copyright_text')):?>
						<p><?php echo esc_html(get_theme_mod('just_news_footer_copyright_text'));?></p>
						<?php else:?>	
						<p><?php esc_html_e('&copy; All Right Reserved ','just-news'); bloginfo('title');?> </p>
						<?php endif;?>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-6">
					<div class="copyright-content text-right">
						<?php if(get_theme_mod('just_news_footer_company_text')):?>
 						<p><?php echo esc_html(get_theme_mod('just_news_footer_company_text'));?></p>
						<?php else:?>
						<p>
							<?php
            				/* translators: 1: Theme name, 2: Theme author. */
            				printf( esc_html__( '%2$s  By  %1$s', 'just-news' ), '<a href="https://wpnewstheme.com/" target="_blank" > WPNewsThemes </a>' , '<a href="https://wpnewstheme.com" target="_blank">Just News</a>' );?>
						</p>
						<?php endif;?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Copyright -->
	<?php endif;?>
</footer>
<!-- End Footer Area -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
