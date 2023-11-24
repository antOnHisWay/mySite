<?php
/**
* Widget - News Block Layouts Ten
*
* @package Just News
*/


/*-----------------------------------------------------
Front Page News Layout Ten Widgets
-----------------------------------------------------*/

if ( ! class_exists( 'Just_News_Block_Layout_Ten' ) ) :
/**
* News Block Layout Ten
*/
	class Just_News_Block_Layout_Ten extends WP_Widget
	{

		function __construct()
		{
			$opts = array(
			'classname' => 'block-layout-a',
			'description'	=> esc_html__( 'Just News Block Layout Ten. Place it within "Frontpage Layouts Area"', 'just-news' )
			);

			parent::__construct( 'just-news-block-layout-ten', esc_html__( 'JN:News Block Layout 10', 'just-news' ), $opts );
		}
		function form( $instance ) {
			// Defaults.
			$admin_enable = ! empty( $instance[ 'admin_enable' ] ) ? $instance[ 'admin_enable' ] : 'off';

			$date_enable = ! empty( $instance[ 'date_enable' ] ) ? $instance[ 'date_enable' ] : 'off';
			$comment_enable = ! empty( $instance[ 'comment_enable' ] ) ? $instance[ 'comment_enable' ] : 'off';

			$post_read_enable = ! empty( $instance[ 'post_read_enable' ] ) ? $instance[ 'post_read_enable' ] : 'off';
		
			$cat = ! empty( $instance[ 'cat' ] ) ? $instance[ 'cat' ] : 0;
			$post_no = ! empty( $instance[ 'post_no' ] ) ? $instance[ 'post_no' ] : 5;
			$layout_enable = ! empty( $instance[ 'layout_enable' ] ) ? $instance[ 'layout_enable' ] : 'off';
			$twenty4_enable = ! empty( $instance[ 'twenty4_enable' ] ) ? $instance[ 'twenty4_enable' ] : 'off';
			
			$author_1 = ! empty( $instance[ 'author_1' ] ) ? $instance[ 'author_1' ] : 0;
			$orderby = ! empty( $instance[ 'orderby' ] ) ? $instance[ 'orderby' ] : 'date';
            
			?>
			<p>
				<input class="checkbox" type="checkbox" <?php checked( $layout_enable, 'on' ); ?> id="<?php echo esc_attr($this->get_field_id( 'layout_enable' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'layout_enable' ) ); ?>" /> 
				<label for="<?php echo esc_attr($this->get_field_id( 'layout_enable' )); ?>"><?php esc_html_e('Enable/Disable News Block Layout 10', 'just-news'); ?></label>
				<br/>

				<input class="checkbox" type="checkbox" <?php checked( $twenty4_enable, 'on' ); ?> id="<?php echo esc_attr($this->get_field_id( 'twenty4_enable' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'twenty4_enable' ) ); ?>" /> 
				<label for="<?php echo esc_attr($this->get_field_id( 'twenty4_enable' )); ?>"><?php esc_html_e('Enable/Disable 24 hours or any', 'just-news'); ?></label>
				<br/>

				<input class="checkbox" type="checkbox" <?php checked( $admin_enable, 'on' ); ?> id="<?php echo esc_attr($this->get_field_id( 'admin_enable' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'admin_enable' ) ); ?>" /> 
				<label for="<?php echo esc_attr($this->get_field_id( 'admin_enable' )); ?>"><?php esc_html_e('Display author to show', 'just-news'); ?></label>

				<br/>

				<input class="checkbox" type="checkbox" <?php checked( $date_enable, 'on' ); ?> id="<?php echo esc_attr($this->get_field_id( 'date_enable' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'date_enable' ) ); ?>" /> 
				<label for="<?php echo esc_attr($this->get_field_id( 'date_enable' )); ?>"><?php esc_html_e('Display date to show', 'just-news'); ?></label>
				<br/>

				<input class="checkbox" type="checkbox" <?php checked( $comment_enable, 'on' ); ?> id="<?php echo esc_attr($this->get_field_id( 'comment_enable' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'comment_enable' ) ); ?>" /> 
				<label for="<?php echo esc_attr($this->get_field_id( 'comment_enable' )); ?>"><?php esc_html_e('Display comment to show', 'just-news'); ?></label>
				<br/>

				<input class="checkbox" type="checkbox" <?php checked( $post_read_enable, 'on' ); ?> id="<?php echo esc_attr($this->get_field_id( 'post_read_enable' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'post_read_enable' ) ); ?>" /> 
				<label for="<?php echo esc_attr($this->get_field_id( 'post_read_enable' )); ?>"><?php esc_html_e('Display read time to show', 'just-news'); ?></label>
				<br/>

			</p>
			
			<p>
			<!-- CODE FOR ORDER BY IN LAYOUT -->
			<label><strong><?php esc_html_e( 'Select chronological order', 'just-news' ); ?></strong></label>
				<select class='widefat' id="<?php echo $this->get_field_id('orderby'); ?>"
					name="<?php echo $this->get_field_name('orderby'); ?>" type="text">
					<option value='date'<?php echo ($orderby=='date')?'selected':''; ?>>
					<?php esc_html_e('Date','just-news'); ?>
					</option>
					<option value='comment_count'<?php echo ($orderby=='comment_count')?'selected':''; ?>>
					<?php esc_html_e('Comment count','just-news'); ?>
					</option> 
					<option value='rand'<?php echo ($orderby=='rand')?'selected':''; ?>>
					<?php esc_html_e('Random date','just-news'); ?>
					</option> 
				</select>
			<br>
				<label for="<?php echo esc_attr( $this->get_field_id( 'cat' ) )?>"><strong><?php echo esc_html__( 'Select Category: ', 'just-news' ); ?></strong></label>
				<?php
				$cat_args = array(
					'orderby'	=> 'name',
					'hide_empty'	=> 1,
					'show_count'    => 1,
					'hierarchical'  => 1,
					'id'	=> absint($this->get_field_id( 'cat' )),
					'name'	=> esc_html($this->get_field_name( 'cat' )),
					'class'	=> 'widefat',
					'taxonomy'	=> 'category',
					'selected'	=> absint( $cat ),
					'show_option_all'	=> esc_html__( 'All category', 'just-news' )
				);
				wp_dropdown_categories( $cat_args );
				?>
				<label for="<?php echo esc_attr( $this->get_field_id( 'author_1' ) )?>"><strong><?php echo esc_html__( 'Select author', 'just-news' ); ?></strong></label>
				<br>
				<?php
		
				$author_args_1 = array(
					'show_option_all'         => __('All author ','just-news'),
					'hide_if_only_one_author' => null, // string
					'orderby'                 => 'display_name',
					'order'                   => 'ASC',
					'include'                 => null, // string
					'exclude'                 => null, // string
					'multi'                   => false,
					'show'                    => 'display_name',
					'echo'                    => true,
					'selected'                => $author_1,
					'include_selected'        => false,
					'name'               => esc_html( $this->get_field_name('author_1') ),
					'id'                 => absint( $this->get_field_id('author_1') ),
					'class'                   => null, // string 
					'blog_id'                 => $GLOBALS['blog_id'],
					'who'                     => null, // string,
					'role'                    => null, // string|array,
					'role__in'                => null, // array    
					'role__not_in'            => null, // array 
				);
				wp_dropdown_users($author_args_1);
				?>
			</p>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'post_no' ) )?>"><strong><?php echo esc_html__( 'Post No: ', 'just-news' )?></strong></label>
				<input type="number" id="<?php echo esc_attr( $this->get_field_id( 'post_no' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'post_no' ) ); ?>" value="<?php echo esc_attr( $post_no ); ?>" class="widefat">
			</p>
		
			<?php
		}
		function update( $new_instance, $old_instance ) {
			$instance = $old_instance;
			$instance[ 'cat' ] = absint( $new_instance[ 'cat' ] );
			$instance[ 'post_no' ] = absint( $new_instance[ 'post_no' ] );
			$instance[ 'layout_enable' ] = $new_instance[ 'layout_enable' ];
			$instance[ 'twenty4_enable' ] = $new_instance[ 'twenty4_enable' ];
			
			$instance[ 'orderby' ] = sanitize_text_field( $new_instance['orderby'] );
			$instance[ 'author_1' ] = absint( $new_instance[ 'author_1' ] );

            $instance[ 'admin_enable' ] = $new_instance[ 'admin_enable' ];
            $instance[ 'date_enable' ] = $new_instance[ 'date_enable' ];
			$instance[ 'comment_enable' ] = $new_instance[ 'comment_enable' ];
			$instance[ 'post_read_enable' ] = $new_instance[ 'post_read_enable' ];

			return $instance;
		}

		
		function widget( $args, $instance ) {
			
			$admin_enable_check = isset( $instance['admin_enable'] ) ? esc_attr( $instance['admin_enable'] ) : '';
			$admin_enable = $admin_enable_check ? 'true' : 'false';
			$date_enable_check = isset( $instance['date_enable'] ) ? esc_attr( $instance['date_enable'] ) : '';
			$date_enable = $date_enable_check ? 'true' : 'false';
			$comment_enable_check = isset( $instance['comment_enable'] ) ? esc_attr( $instance['comment_enable'] ) : '';
			$comment_enable = $comment_enable_check ? 'true' : 'false';
			$post_read_enable_check = isset( $instance['post_read_enable'] ) ? esc_attr( $instance['post_read_enable'] ) : '';
			$post_read_enable = $post_read_enable_check ? 'true' : 'false';

			$cat = ! empty( $instance[ 'cat' ] ) ? $instance[ 'cat' ] : 0;
			$post_no = ! empty( $instance[ 'post_no' ] ) ? $instance[ 'post_no' ] : 2;
			$author_1 = ! empty( $instance[ 'author_1' ] ) ? $instance[ 'author_1' ] : 0;
			$orderby = ! empty( $instance[ 'orderby' ] ) ? $instance[ 'orderby' ] : 'date';
			$layout_enable_check = isset( $instance['layout_enable'] ) ? esc_attr( $instance['layout_enable'] ) : '';
			$layout_enable = $layout_enable_check ? 'true' : 'false';
			$twenty4_enable_check = isset( $instance['twenty4_enable'] ) ? esc_attr( $instance['twenty4_enable'] ) : '';
			$twenty4_enable = $twenty4_enable_check ? 'true' : 'false';
			
			// Added featured 
			
			echo $args[ 'before_widget' ];
			if($layout_enable =='true'):
				?>
				<section class="featured-post big-story">
			<div class="container">
				<div class="row">
		            	<?php
		            	if($twenty4_enable == 'true'):
						$arguments = array(
							'cat'	=> absint( $cat ),
							'posts_per_page' => absint( $post_no ),
							'author'	   => esc_attr( $author_1 ),
							'orderby' => array( esc_attr( $orderby ) => 'DSC', 'date' => 'DSC'),

							 'date_query' => array(
	                                array(
	                                    'after' => '24 hours ago'
	                                ))

						);
						else:
						$arguments = array(
							'cat'	=> absint( $cat ),
							'posts_per_page' => absint( $post_no ),
							'author'	   => esc_attr( $author_1 ),
							'orderby' => array( esc_attr( $orderby ) => 'DSC', 'date' => 'DSC'),

						);
					    endif;		
						$query = new WP_Query( $arguments );
						if( $query->have_posts() ) :?>
						<?php
						while( $query->have_posts() ) :
							$query->the_post();
							?>
				             <div class="col-12">
								<div class="featured-inner">
									<div class="post-content">
										<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
										<div class="justnews-meta">
										
											<?php if($admin_enable =='true'): ?>
											<span class="author">
												
												<?php just_news_posted_by();?>
											</span>
											<?php endif; ?>
											<?php if($date_enable =='true'): ?>
											<span class="date">
												<i class="fa fa-clock-o"></i>
												<?php just_news_posted_on();?>
											</span>
											<?php endif; ?>
											<?php if($comment_enable =='true'): ?>
											<span class="date"><i class="fa fa-comments"></i><?php just_news_post_comment();?></span>
											<?php endif; ?>
											
										
											<?php 
											if($post_read_enable =='true'):
												just_news_count_content_words( get_the_ID());
											endif;	
											?>
											
											
										</div>
									</div>
									<div class="post-head">
										<a href="<?php the_permalink();?>"><?php the_post_thumbnail('just-news-635X530-thumbnail');?></a>
									</div>
									<div class="post-text">
										<?php the_excerpt();?>
										<a href="<?php the_permalink();?>" class="justnews-btn"><?php esc_html_e('Read Full News','just-news');?></a>
									</div>
								</div>
							</div>
	       					<?php
						endwhile;
						wp_reset_postdata();
						endif;?> 
					</div>
				</div>
			</section>

				<?php
			endif;
			echo $args[ 'after_widget' ];
		}

		
	}
endif;