<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Just News
 */

get_header();
?>

<!-- Error Page -->
<section class="error-page section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/error-bg.jpg" alt="404 not found">
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<!-- Error Inner -->
				<div class="error-inner">
					<h2><?php esc_html_e('404',"just-news"); ?><span><?php esc_html_e('Opps! page not found',"just-news"); ?></span></h2>
					<p><?php esc_html_e('The page you are looking for was moved, removed,',"just-news"); ?><br> <?php esc_html_e('renamed or might never existed.',"just-news"); ?></p>
					<div class="button">
						<a href="<?php echo esc_url(home_url());?>" class="justnews-btn"><?php esc_html_e('Go Home',"just-news"); ?></a>
					</div>
				</div>
				<!--/ End Error Inner -->
			</div>
		</div>
	</div>
</section>	
<!--/ End Error Page -->

<?php
get_footer();
