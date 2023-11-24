<?php

/**
 * Widget - Footer About Widget
 *
 * @package Just News
 */

 /*-----------------------------------------------------
Popular Posts For sidebar and Footer 
-----------------------------------------------------*/
if( !class_exists('Just_News_Popular_Posts_Widget')){
	class Just_News_Popular_Posts_Widget extends WP_Widget{
		//setup the widget name, description, etc....
		public function __construct(){
			$widget_ops=array(
				'classname'	=>	'just-news-popular-news-comment-widget',
				'description'	=>	__('Select where your widget is placed. Eg: Sidebar or Footer widget Area','just-news'),
			);

			parent::__construct( 'just_news_popular_news_comment','JN:Popular Posts', $widget_ops );
		}

		function form( $instance ) {
			$for_pp = ! empty( $instance[ 'for_pp' ] ) ? $instance[ 'for_pp' ] : '';
			$for_pl = ! empty( $instance[ 'for_pl' ] ) ? $instance[ 'for_pl' ] : '';
			$title = ! empty( $instance[ 'title' ] ) ? $instance[ 'title' ] : '';
			$post_no = ! empty( $instance[ 'post_no' ] ) ? $instance[ 'post_no' ] : 4;
			?>
			
			<p>
				<?php if($for_pp == 'footer_pp'):?>
                
                <input type="radio" id="<?php echo esc_attr( $this->get_field_id( 'for_sidebar' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'for_pp' ) ); ?>" value="<?php esc_attr_e('sidebar_pp','just-news'); ?>" class="widefat"> <?php esc_html_e('Sidebar','just-news');?> 

                <input type="radio" id="<?php echo esc_attr( $this->get_field_id( 'for_footer' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'for_pp' ) ); ?>" value="<?php esc_attr_e('footer_pp','just-news'); ?>" class="widefat" checked> <?php esc_html_e('Footer','just-news');?>
                
                <?php else:?>
                
                <input type="radio" id="<?php echo esc_attr( $this->get_field_id( 'for_sidebar','just-news' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'for_pp' ) ); ?>" value="<?php esc_attr_e('sidebar_pp','just-news'); ?>" class="widefat" checked> <?php esc_html_e('Sidebar','just-news');?>

                <input type="radio" id="<?php echo esc_attr( $this->get_field_id( 'for_footer' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'for_pp' ) ); ?>" value="<?php esc_attr_e('footer_pp','just-news'); ?>" class="widefat"> <?php esc_html_e('Footer','just-news');?>

            	<?php endif;?>
			</p>


			<p>
				<?php if($for_pl == 'popular'):?>
                
                <input type="radio" id="<?php echo esc_attr( $this->get_field_id( 'for_popular' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'for_pl' ) ); ?>" value="<?php esc_attr_e('popular','just-news'); ?>" class="widefat" checked> <?php esc_html_e('Popular','just-news');?>

                <input type="radio" id="<?php echo esc_attr( $this->get_field_id( 'for_latest' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'for_pl' ) ); ?>" value="<?php esc_attr_e('latest','just-news'); ?>" class="widefat"> <?php esc_html_e('Latest','just-news');?> 

                
                <?php else:?>
                <input type="radio" id="<?php echo esc_attr( $this->get_field_id( 'for_popular' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'for_pl' ) ); ?>" value="<?php esc_attr_e('popular','just-news'); ?>" class="widefat"> <?php esc_html_e('Popular','just-news');?>
                
                <input type="radio" id="<?php echo esc_attr( $this->get_field_id( 'for_latest','just-news' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'for_pl' ) ); ?>" value="<?php esc_attr_e('latest','just-news'); ?>" class="widefat" checked> <?php esc_html_e('Latest','just-news');?>


            	<?php endif;?>
			</p>

			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><strong><?php echo esc_html__( 'Title: ', 'just-news' ); ?></strong></label>
                <input type="text" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" value="<?php echo esc_attr( $title ); ?>" class="widefat">
			</p>

			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'post_no' ) )?>"><strong><?php echo esc_html__( 'Post No: ', 'just-news' )?></strong></label>
				<input type="number" id="<?php echo esc_attr( $this->get_field_id( 'post_no' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'post_no' ) ); ?>" value="<?php echo esc_attr( $post_no ); ?>" class="widefat">
			</p>
			
			<?php
		}
		function update( $new_instance, $old_instance ) {
			$instance = $old_instance;
			$instance[ 'post_no' ] = absint( $new_instance[ 'post_no' ] );
			$instance[ 'for_pp' ] = sanitize_text_field( $new_instance[ 'for_pp' ] );
			$instance[ 'for_pl' ] = sanitize_text_field( $new_instance[ 'for_pl' ] );
			$instance[ 'title' ] = sanitize_text_field( $new_instance[ 'title' ] );
			return $instance;
		}
		public function widget( $args, $instance){
			$post_no = ! empty( $instance[ 'post_no' ] ) ? $instance[ 'post_no' ] : 4;
			$for_pp = ! empty( $instance[ 'for_pp' ] ) ? $instance[ 'for_pp' ] : array();
			$for_pl = ! empty( $instance[ 'for_pl' ] ) ? $instance[ 'for_pl' ] : array();
			$title = apply_filters( 'widget_title', ! empty( $instance['title'] ) ? $instance['title'] : '', $instance, $this->id_base );
			echo $args[ 'before_widget' ];
			?>
			<?php if($for_pp == 'sidebar_pp' && $for_pl == 'popular'):?>
			<div class="single-widget c-popular-post">
				<?php 
					echo $args[ 'before_title' ];
                    	echo esc_html($title);
                	echo $args[ 'after_title' ];?>
					<div class="row">
						<?php $posts_args = array(
						'post_type'			=> 'post',
						'posts_per_page'	=> $post_no,
						'meta_key'       	=> 'just_news_wpb_post_views_count',
					 	'orderby'       	=> 'meta_value_num',
						'order'				=> 'DESC'
						);
						$popular = new WP_Query( $posts_args );
						$popular_post_num = 1;
						while ($popular->have_posts()) : $popular->the_post();
						?>
						<div class="col-lg-6 col-md-6 col-12">
							<div class="c-single-popular">
								<div class="image">
									<?php just_news_post_thumbnail(); ?>
								</div>
								<div class="content">
									<h5><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
									<div class="justnews-meta">
										<span><i class="fa fa-calendar"></i><?php just_news_posted_on();?></span>
										<?php if(absint(get_comments_number()) > 0):?>
											<span class="comment"><i class="fa fa-comment-o"></i>(<?php echo absint(get_comments_number());?>)</span>
										<?php endif;?>
									</div>
								</div>
							</div>
						</div>
						<?php
						endwhile; 
						wp_reset_postdata();
						?>
					</div>
			</div>	
			<?php elseif($for_pp == 'sidebar_pp' && $for_pl == 'latest'):?>
			<div class="single-widget c-popular-post">
				<?php 
					echo $args[ 'before_title' ];
                    	echo esc_html($title);
                	echo $args[ 'after_title' ];?>
					<div class="row">
						<?php $posts_args = array(
						'post_type'			=> 'post',
						'posts_per_page'	=> $post_no,
						'orderby' => array('post_date' => 'DSC', 'date' => 'DSC'),
						);
						$popular = new WP_Query( $posts_args );
						$popular_post_num = 1;
						while ($popular->have_posts()) : $popular->the_post();
						?>
						<div class="col-lg-6 col-md-6 col-12">
							<div class="c-single-popular">
								<div class="image">
									<?php just_news_post_thumbnail(); ?>
								</div>
								<div class="content">
									<h5><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
									<div class="justnews-meta">
										<span><i class="fa fa-calendar"></i><?php just_news_posted_on();?></span>
										<?php if(absint(get_comments_number()) > 0):?>
											<span class="comment"><i class="fa fa-comment-o"></i>(<?php echo absint(get_comments_number());?>)</span>
										<?php endif;?>
									</div>
								</div>
							</div>
						</div>
						<?php
						endwhile; 
						wp_reset_postdata();
						?>
					</div>
			</div>	
			<?php elseif($for_pp == 'footer_pp' && $for_pl == 'popular'):?>
				<!-- Single Widget -->
				<div class="single-footer f-news">
					<?php echo $args[ 'before_title' ];
                            echo esc_html($title);
                        echo $args[ 'after_title' ];?>
					<div class="footer-news">
						<?php $posts_args = array(
							'post_type'			=> 'post',
							'posts_per_page'	=> $post_no,
						 	'meta_key'       	=> 'just_news_wpb_post_views_count',
						 	'orderby'       	=> 'meta_value_num',
							'order'				=> 'DESC'
						);
						$popular = new WP_Query( $posts_args );
						$popular_post_num = 1;
						while ($popular->have_posts()) : $popular->the_post();
						?>
						<!-- Single Post -->
						<div class="single-menu-post">
							<div class="post-img">
								<?php just_news_post_thumbnail(); ?>
							</div>
							<div class="post-info">
								<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
								<!-- News meta -->
								<div class="justnews-meta">
									<span><i class="fa fa-calendar"></i><?php just_news_posted_on();?></span>
									<?php if(absint(get_comments_number()) > 0):?>
									<span class="comment"><i class="fa fa-comment-o"></i>(<?php echo absint(get_comments_number());?>)</span>
									<?php endif;?>
								</div>
							</div>
						</div>
						<!--/ End Single Post -->
						<?php
						endwhile; 
						wp_reset_postdata();
						?>	
					</div>
				</div>
				<!-- End Single Widget -->

			<?php elseif($for_pp == 'footer_pp' && $for_pl == 'latest'):?>
				<!-- Single Widget -->
				<div class="single-footer f-news">
					<?php echo $args[ 'before_title' ];
                            echo esc_html($title);
                        echo $args[ 'after_title' ];?>
					<div class="footer-news">
						<?php $posts_args = array(
							'post_type'			=> 'post',
							'posts_per_page'	=> $post_no,
						 	'orderby' => array('post_date' => 'DSC', 'date' => 'DSC'),
						);
						$popular = new WP_Query( $posts_args );
						$popular_post_num = 1;
						while ($popular->have_posts()) : $popular->the_post();
						?>
						<!-- Single Post -->
						<div class="single-menu-post">
							<div class="post-img">
								<?php just_news_post_thumbnail(); ?>
							</div>
							<div class="post-info">
								<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
								<!-- News meta -->
								<div class="justnews-meta">
									<span><i class="fa fa-calendar"></i><?php just_news_posted_on();?></span>
									<?php if(absint(get_comments_number()) > 0):?>
									<span class="comment"><i class="fa fa-comment-o"></i>(<?php echo absint(get_comments_number());?>)</span>
									<?php endif;?>
								</div>
							</div>
						</div>
						<!--/ End Single Post -->
						<?php
						endwhile; 
						wp_reset_postdata();
						?>	
					</div>
				</div>
				<!-- End Single Widget -->
			<?php endif;?>	
		<?php	
		 echo $args[ 'after_widget' ];
	}

	}
}