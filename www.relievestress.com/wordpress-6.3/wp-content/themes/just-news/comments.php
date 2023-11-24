<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Just News
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div class="jn-comments">
			<?php // You can start editing here -- including this comment! ?>
			<h3 class="comment-title"><?php esc_html_e('Comments','just-news');?> (<?php echo absint(get_comments_number());?>)</h3>
			<?php if ( have_comments() ) : ?>
				
				<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
				<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
					<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'just-news' ); ?></h2>
					<div class="nav-links">

						<div class="nav-previous"><?php previous_comments_link( esc_html( 'Older Comments') ); ?></div>
						<div class="nav-next"><?php next_comments_link( esc_html( 'Newer Comments') ); ?></div>

					</div><!-- .nav-links -->
				</nav><!-- #comment-nav-above -->
				<?php endif; // Check for comment navigation. ?>

			
				<div class="comments-body">
					<?php
						wp_list_comments( array(
							'type'=>'comment',
							
						) );
					?>
				</div>

				<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
				<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
					<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'just-news' ); ?></h2>
					<div class="nav-links">

						<div class="nav-previous"><?php previous_comments_link( esc_html( 'Older Comments') ); ?></div>
						<div class="nav-next"><?php next_comments_link( esc_html( 'Newer Comments') ); ?></div>

					</div><!-- .nav-links -->
				</nav><!-- #comment-nav-below -->
				<?php endif; // Check for comment navigation. ?>

			<?php endif; // Check for have_comments(). ?>

			<?php
				// If comments are closed and there are comments, let's leave a little note, shall we?
				if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
			?>
				<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'just-news' ); ?></p>
			<?php endif; ?>

			<?php comment_form(); ?>
		</div><!-- #comments -->
