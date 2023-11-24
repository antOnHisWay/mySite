<?php
/**
* Widget - News Block Layouts Eleven
*
* @package Just News
*/


/*-----------------------------------------------------
Front Page News Layout Eleven Widgets
-----------------------------------------------------*/

if( !class_exists('Just_News_FrontLayout_Eleven')){
	class Just_News_FrontLayout_Eleven extends WP_Widget{
	//setup the widget name, description, etc....
	public function __construct(){
		$opts = array(
		'classname' => 'block-layout-a',
		'description'	=> esc_html__( 'Just News Block Layout Eleven. Place it within "Frontpage Layouts Area"', 'just-news' )
	);

	parent::__construct( 'just-news-block-layout-eleven', esc_html__( 'JN:News Block Layout 11', 'just-news' ), $opts );
	}

		function form( $instance ) {
			$layout_enable 			  = ! empty( $instance[ 'layout_enable' ] ) ? $instance[ 'layout_enable' ] : 'on';
			$color = ! empty( $instance[ 'color' ] ) ? $instance[ 'color' ] : __('#ffffff','just-news');
			$background_image = !empty($instance['background_image']) ? $instance['background_image'] : '';
			
			// For Slider
			$cat 	 				  = ! empty( $instance[ 'cat' ] ) ? $instance[ 'cat' ] : 0;
			
			$admin_enable = ! empty( $instance[ 'admin_enable' ] ) ? $instance[ 'admin_enable' ] : 'off';
			$date_enable = ! empty( $instance[ 'date_enable' ] ) ? $instance[ 'date_enable' ] : 'off';
			$comment_enable = ! empty( $instance[ 'comment_enable' ] ) ? $instance[ 'comment_enable' ] : 'off';

			$post_read_enable = ! empty( $instance[ 'post_read_enable' ] ) ? $instance[ 'post_read_enable' ] : 'off';

			$author = ! empty( $instance[ 'author' ] ) ? $instance[ 'author' ] : 0;
			$orderby = ! empty( $instance[ 'orderby' ] ) ? $instance[ 'orderby' ] : 'date';

			$post_no1	 			  = ! empty( $instance[ 'post_no1' ] ) ? $instance[ 'post_no1' ] : 3;

			// For slider end

			$title1 				  = ! empty( $instance[ 'title1' ] ) ? $instance[ 'title1' ] : __('Latest','just-news');
			$cat1 	 				  = ! empty( $instance[ 'cat1' ] ) ? $instance[ 'cat1' ] : 0;
			
			$admin_enable1 = ! empty( $instance[ 'admin_enable1' ] ) ? $instance[ 'admin_enable1' ] : 'off';
			$date_enable1 = ! empty( $instance[ 'date_enable1' ] ) ? $instance[ 'date_enable1' ] : 'off';
			$comment_enable1 = ! empty( $instance[ 'comment_enable1' ] ) ? $instance[ 'comment_enable1' ] : 'off';

			$post_read_enable1 = ! empty( $instance[ 'post_read_enable1' ] ) ? $instance[ 'post_read_enable1' ] : 'off';
			
			$author1 = ! empty( $instance[ 'author1' ] ) ? $instance[ 'author1' ] : 0;
			$orderby1 = ! empty( $instance[ 'orderby1' ] ) ? $instance[ 'orderby1' ] : 'date';


			$title2 				  = ! empty( $instance[ 'title2' ] ) ? $instance[ 'title2' ] : __('Popular','just-news');
			$cat2 	  				  = ! empty( $instance[ 'cat2' ] ) ? $instance[ 'cat2' ] : 0;
			$post_no	 			  = ! empty( $instance[ 'post_no' ] ) ? $instance[ 'post_no' ] : 4;
			$admin_enable2 = ! empty( $instance[ 'admin_enable2' ] ) ? $instance[ 'admin_enable2' ] : 'off';
			$date_enable2 = ! empty( $instance[ 'date_enable2' ] ) ? $instance[ 'date_enable2' ] : 'off';
			$comment_enable2 = ! empty( $instance[ 'comment_enable2' ] ) ? $instance[ 'comment_enable2' ] : 'off';

			$post_read_enable2 = ! empty( $instance[ 'post_read_enable2' ] ) ? $instance[ 'post_read_enable2' ] : 'off';
			
			$author2 = ! empty( $instance[ 'author2' ] ) ? $instance[ 'author2' ] : 0;
			$orderby2 = ! empty( $instance[ 'orderby2' ] ) ? $instance[ 'orderby2' ] : 'date';
			
			?>

			<p>
				<input class="checkbox" type="checkbox" <?php checked( $layout_enable, 'on' ); ?> id="<?php echo esc_attr($this->get_field_id( 'layout_enable' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'layout_enable' ) ); ?>" /> 
				<label for="<?php echo esc_attr($this->get_field_id( 'layout_enable' )); ?>"><?php esc_html_e('Display News Block Layout 11', 'just-news'); ?></label>
			</p>

			<!-- For slider start -->
			<p>
				<input class="checkbox" type="checkbox" <?php checked( $admin_enable, 'on' ); ?> id="<?php echo esc_attr($this->get_field_id( 'admin_enable' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'admin_enable' ) ); ?>" /> 
				<label for="<?php echo esc_attr($this->get_field_id( 'admin_enable' )); ?>"><?php esc_html_e('Display author to show for slider', 'just-news'); ?></label>
				<br/>

				<input class="checkbox" type="checkbox" <?php checked( $date_enable, 'on' ); ?> id="<?php echo esc_attr($this->get_field_id( 'date_enable' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'date_enable' ) ); ?>" /> 
				<label for="<?php echo esc_attr($this->get_field_id( 'date_enable' )); ?>"><?php esc_html_e('Display date to show for slider', 'just-news'); ?></label>
				<br/>

				<input class="checkbox" type="checkbox" <?php checked( $comment_enable, 'on' ); ?> id="<?php echo esc_attr($this->get_field_id( 'comment_enable' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'comment_enable' ) ); ?>" /> 
				<label for="<?php echo esc_attr($this->get_field_id( 'comment_enable' )); ?>"><?php esc_html_e('Display comment to show for slider', 'just-news'); ?></label>
				<br/>

				<input class="checkbox" type="checkbox" <?php checked( $post_read_enable, 'on' ); ?> id="<?php echo esc_attr($this->get_field_id( 'post_read_enable' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'post_read_enable' ) ); ?>" /> 
				<label for="<?php echo esc_attr($this->get_field_id( 'post_read_enable' )); ?>"><?php esc_html_e('Display read time to show for slider', 'just-news'); ?></label>
				<br/>

			</p>


			<p>
				<label><strong><?php esc_html_e( 'Select chronological order for Slider', 'just-news' ); ?></strong></label>
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
			</p>


			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'cat' ) )?>"><strong><?php echo esc_html__( 'Select Category for Slider:', 'just-news' ); ?></strong></label>
				<br>
				<?php
				$cat_args = array(
					'orderby'	=> 'name',
					'hide_empty'	=> 1,
					'show_count'    => 1,
					'hierarchical'  => 1,
					'id'	=> $this->get_field_id( 'cat' ),
					'name'	=> $this->get_field_name( 'cat' ),
					'class'	=> 'widefat',
					'taxonomy'	=> 'category',
					'selected'	=> absint( $cat ),
					'show_option_all'	=> esc_html__( 'All Category', 'just-news' )
				);
				wp_dropdown_categories( $cat_args );
				?>
			</p>

			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'author' ) )?>"><strong><?php echo esc_html__( 'Select author for slider', 'just-news' ); ?></strong></label>
				<br>
				<?php

				$author_args = array(
					'show_option_all'         => __('All author ','just-news'),
					'hide_if_only_one_author' => null, // string
					'orderby'                 => 'display_name',
					'order'                   => 'ASC',
					'include'                 => null, // string
					'exclude'                 => null, // string
					'multi'                   => false,
					'show'                    => 'display_name',
					'echo'                    => true,
					'selected'                => $author,
					'include_selected'        => false,
					'name'               => esc_html( $this->get_field_name('author') ),
					'id'                 => absint( $this->get_field_id('author') ),
					'class'                   => null, // string 
					'blog_id'                 => $GLOBALS['blog_id'],
					'who'                     => null, // string,
					'role'                    => null, // string|array,
					'role__in'                => null, // array    
					'role__not_in'            => null, // array 
				);
				wp_dropdown_users($author_args);
				?>
			</p>		

			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'post_no1' ) )?>"><strong><?php echo esc_html__( 'Post No. For slider: ', 'just-news' )?></strong></label>
				<input type="number" id="<?php echo esc_attr( $this->get_field_id( 'post_no1' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'post_no1' ) ); ?>" value="<?php echo esc_attr( $post_no1 ); ?>" class="widefat">
			</p>

			<!-- For slider End -->
			<p>
				<input class="checkbox" type="checkbox" <?php checked( $admin_enable1, 'on' ); ?> id="<?php echo esc_attr($this->get_field_id( 'admin_enable1' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'admin_enable1' ) ); ?>" /> 
				<label for="<?php echo esc_attr($this->get_field_id( 'admin_enable1' )); ?>"><?php esc_html_e('Display author to show for Latest Posts', 'just-news'); ?></label>
				<br/>

				<input class="checkbox" type="checkbox" <?php checked( $date_enable1, 'on' ); ?> id="<?php echo esc_attr($this->get_field_id( 'date_enable1' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'date_enable1' ) ); ?>" /> 
				<label for="<?php echo esc_attr($this->get_field_id( 'date_enable1' )); ?>"><?php esc_html_e('Display date to show for Latest Posts', 'just-news'); ?></label>
				<br/>

				<input class="checkbox" type="checkbox" <?php checked( $comment_enable1, 'on' ); ?> id="<?php echo esc_attr($this->get_field_id( 'comment_enable1' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'comment_enable1' ) ); ?>" /> 
				<label for="<?php echo esc_attr($this->get_field_id( 'comment_enable1' )); ?>"><?php esc_html_e('Display comment to show for Latest Posts', 'just-news'); ?></label>
				<br/>


				<input class="checkbox" type="checkbox" <?php checked( $post_read_enable1, 'on' ); ?> id="<?php echo esc_attr($this->get_field_id( 'post_read_enable1' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'post_read_enable1' ) ); ?>" /> 
				<label for="<?php echo esc_attr($this->get_field_id( 'post_read_enable1' )); ?>"><?php esc_html_e('Display read time to show for Latest Posts', 'just-news'); ?></label>
				<br/>

				
			</p>
					
					<p>
						<label for="<?php echo esc_attr( $this->get_field_id( 'title1' ) ); ?>"><strong><?php echo esc_html__( 'Latest Title: ', 'just-news' ); ?></strong></label>
						<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'title1' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title1' ) ); ?>" value="<?php echo esc_attr( $title1 ); ?>" class="widefat">
					</p>
			<p>
				<label><strong><?php esc_html_e( 'Select chronological order for Latest Posts', 'just-news' ); ?></strong></label>
				<select class='widefat' id="<?php echo $this->get_field_id('orderby1'); ?>"
					name="<?php echo $this->get_field_name('orderby1'); ?>" type="text">
					<option value='date'<?php echo ($orderby1=='date')?'selected':''; ?>>
					<?php esc_html_e('Date','just-news'); ?>
					</option>
					<option value='comment_count'<?php echo ($orderby1=='comment_count')?'selected':''; ?>>
					<?php esc_html_e('Comment count','just-news'); ?>
					</option> 
					<option value='rand'<?php echo ($orderby1=='rand')?'selected':''; ?>>
					<?php esc_html_e('Random date','just-news'); ?>
					</option> 
				</select>
			</p>		

			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'cat1' ) )?>"><strong><?php echo esc_html__( 'Select Category for latest post:', 'just-news' ); ?></strong></label>
				<br>
				<?php
				$cat1_args = array(
					'orderby'	=> 'name',
					'hide_empty'	=> 1,
					'show_count'    => 1,
					'hierarchical'  => 1,
					'id'	=> $this->get_field_id( 'cat1' ),
					'name'	=> $this->get_field_name( 'cat1' ),
					'class'	=> 'widefat',
					'taxonomy'	=> 'category',
					'selected'	=> absint( $cat1 ),
					'show_option_all'	=> esc_html__( 'Latest Posts', 'just-news' )
				);
				wp_dropdown_categories( $cat1_args );
				?>
			</p>

			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'author1' ) )?>"><strong><?php echo esc_html__( 'Select author for Latest Posts', 'just-news' ); ?></strong></label>
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
					'selected'                => $author1,
					'include_selected'        => false,
					'name'               => esc_html( $this->get_field_name('author1') ),
					'id'                 => absint( $this->get_field_id('author1') ),
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
				<label for="<?php echo esc_attr( $this->get_field_id( 'title2' ) ); ?>"><strong><?php echo esc_html__( 'Popular Title: ', 'just-news' ); ?></strong></label>
				<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'title2' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title2' ) ); ?>" value="<?php echo esc_attr( $title2 ); ?>" class="widefat">
			</p>

			<p>
				<input class="checkbox" type="checkbox" <?php checked( $admin_enable2, 'on' ); ?> id="<?php echo esc_attr($this->get_field_id( 'admin_enable2' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'admin_enable2' ) ); ?>" /> 
				<label for="<?php echo esc_attr($this->get_field_id( 'admin_enable2' )); ?>"><?php esc_html_e('Display author to show for Popular', 'just-news'); ?></label>
				<br/>

				<input class="checkbox" type="checkbox" <?php checked( $date_enable2, 'on' ); ?> id="<?php echo esc_attr($this->get_field_id( 'date_enable2' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'date_enable2' ) ); ?>" /> 
				<label for="<?php echo esc_attr($this->get_field_id( 'date_enable2' )); ?>"><?php esc_html_e('Display date to show for Popular', 'just-news'); ?></label>
				<br/>

				<input class="checkbox" type="checkbox" <?php checked( $comment_enable2, 'on' ); ?> id="<?php echo esc_attr($this->get_field_id( 'comment_enable2' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'comment_enable2' ) ); ?>" /> 
				<label for="<?php echo esc_attr($this->get_field_id( 'comment_enable2' )); ?>"><?php esc_html_e('Display comment to show for Popular', 'just-news'); ?></label>
				<br/>

			

				<input class="checkbox" type="checkbox" <?php checked( $post_read_enable2, 'on' ); ?> id="<?php echo esc_attr($this->get_field_id( 'post_read_enable2' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'post_read_enable2' ) ); ?>" /> 
				<label for="<?php echo esc_attr($this->get_field_id( 'post_read_enable2' )); ?>"><?php esc_html_e('Display read time to show for Popular', 'just-news'); ?></label>
				<br/>

			
			</p>

			<p>
				<label><strong><?php esc_html_e( 'Select chronological order for Popular', 'just-news' ); ?></strong></label>
				<select class='widefat' id="<?php echo $this->get_field_id('orderby2'); ?>"
					name="<?php echo $this->get_field_name('orderby2'); ?>" type="text">
					<option value='date'<?php echo ($orderby2=='date')?'selected':''; ?>>
					<?php esc_html_e('Date','just-news'); ?>
					</option>
					<option value='comment_count'<?php echo ($orderby2=='comment_count')?'selected':''; ?>>
					<?php esc_html_e('Comment count','just-news'); ?>
					</option> 
					<option value='rand'<?php echo ($orderby2=='rand')?'selected':''; ?>>
					<?php esc_html_e('Random date','just-news'); ?>
					</option> 
				</select>
			</p>

			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'cat2' ) )?>"><strong><?php echo esc_html__( 'Select Category for popular post:', 'just-news' ); ?></strong></label>
				<br>
				<?php
				$cat2_args = array(
					'orderby'	=> 'name',
					'hide_empty'	=> 1,
					'show_count'    => 1,
					'hierarchical'  => 1,
					'id'	=> $this->get_field_id( 'cat2' ),
					'name'	=> $this->get_field_name( 'cat2' ),
					'class'	=> 'widefat',
					'taxonomy'	=> 'category',
					'selected'	=> absint( $cat2 ),
					'show_option_all'	=> esc_html__( 'Popular Posts', 'just-news' )
				);
				wp_dropdown_categories( $cat2_args );
				?>
			</p>

			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'author2' ) )?>"><strong><?php echo esc_html__( 'Select author for Popular', 'just-news' ); ?></strong></label>
				<br>
				<?php

				$author_args_2 = array(
					'show_option_all'         => __('All author ','just-news'),
					'hide_if_only_one_author' => null, // string
					'orderby'                 => 'display_name',
					'order'                   => 'ASC',
					'include'                 => null, // string
					'exclude'                 => null, // string
					'multi'                   => false,
					'show'                    => 'display_name',
					'echo'                    => true,
					'selected'                => $author2,
					'include_selected'        => false,
					'name'               	  => esc_html( $this->get_field_name('author2') ),
					'id'                 	  => absint( $this->get_field_id('author2') ),
					'class'                   => null, // string 
					'blog_id'                 => $GLOBALS['blog_id'],
					'who'                     => null, // string,
					'role'                    => null, // string|array,
					'role__in'                => null, // array    
					'role__not_in'            => null, // array 
				);
				wp_dropdown_users($author_args_2);
				?>
			</p>

			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'post_no' ) )?>"><strong><?php echo esc_html__( 'Post No.: ', 'just-news' )?></strong></label>
				<input type="number" id="<?php echo esc_attr( $this->get_field_id( 'post_no' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'post_no' ) ); ?>" value="<?php echo esc_attr( $post_no ); ?>" class="widefat">
			</p>
	
		
			<?php
		}


		function update( $new_instance, $old_instance ) {
			$instance = $old_instance;
				
			$instance[ 'layout_enable' ] = $new_instance[ 'layout_enable' ];
			$instance[ 'title1' ] = sanitize_text_field( $new_instance[ 'title1' ] );

			// For slider start

			$instance[ 'cat' ] 		 = absint( $new_instance[ 'cat' ] );

			$instance[ 'admin_enable' ] = $new_instance[ 'admin_enable' ];
			$instance[ 'date_enable' ] = $new_instance[ 'date_enable' ];
			$instance[ 'comment_enable' ] = $new_instance[ 'comment_enable' ];

			// Added featured 
			$instance[ 'post_read_enable' ] = $new_instance[ 'post_read_enable' ];
			
			// Added Featured End

			$instance[ 'orderby' ] = sanitize_text_field( $new_instance['orderby'] );
			$instance[ 'author' ] = absint( $new_instance[ 'author' ] );
			$instance[ 'post_no1' ] = absint( $new_instance[ 'post_no1' ] );

			// For slider end

			$instance[ 'cat1' ] 		 = absint( $new_instance[ 'cat1' ] );
			
			$instance[ 'admin_enable1' ] = $new_instance[ 'admin_enable1' ];
			$instance[ 'date_enable1' ] = $new_instance[ 'date_enable1' ];
			$instance[ 'comment_enable1' ] = $new_instance[ 'comment_enable1' ];

			// Added featured 
			
			$instance[ 'post_read_enable1' ] = $new_instance[ 'post_read_enable1' ];
			
			// Added Featured End

			$instance[ 'orderby1' ] = sanitize_text_field( $new_instance['orderby1'] );
			$instance[ 'author1' ] = absint( $new_instance[ 'author1' ] );

			$instance[ 'title2' ] = sanitize_text_field( $new_instance[ 'title2' ] );
			$instance[ 'cat2' ] 		 = absint( $new_instance[ 'cat2' ] );

			$instance[ 'post_no' ] = absint( $new_instance[ 'post_no' ] );

			$instance[ 'admin_enable2' ] = $new_instance[ 'admin_enable2' ];
			$instance[ 'date_enable2' ] = $new_instance[ 'date_enable2' ];
			$instance[ 'comment_enable2' ] = $new_instance[ 'comment_enable2' ];

			// Added featured 
			
			$instance[ 'post_read_enable2' ] = $new_instance[ 'post_read_enable2' ];
			
			// Added Featured End

			$instance[ 'orderby2' ] = sanitize_text_field( $new_instance['orderby2'] );
			$instance[ 'author2' ] = absint( $new_instance[ 'author2' ] );


			$instance['background_image'] = esc_url_raw($new_instance['background_image']);
		    $instance[ 'color' ] = sanitize_text_field( $new_instance[ 'color' ] );
		 
			return $instance;
		}

		function widget( $args, $instance ) {
			$layout_enable_check = isset( $instance['layout_enable'] ) ? esc_attr( $instance['layout_enable'] ) : '';
			$layout_enable = $layout_enable_check ? 'true' : 'false';
			$color = ! empty( $instance[ 'color' ] ) ? $instance[ 'color' ] : '#ffffff';
			$background_image = !empty($instance['background_image']) ? $instance['background_image'] : '';

			// For slider start
			$cat = ! empty( $instance[ 'cat' ] ) ? $instance[ 'cat' ] : 0;

			$author = ! empty( $instance[ 'author' ] ) ? $instance[ 'author' ] : 0;
			$orderby = ! empty( $instance[ 'orderby' ] ) ? $instance[ 'orderby' ] : 'date';

			$admin_enable_check = isset( $instance['admin_enable'] ) ? esc_attr( $instance['admin_enable'] ) : '';
			$admin_enable = $admin_enable_check ? 'true' : 'false';

			$date_enable_check = isset( $instance['date_enable'] ) ? esc_attr( $instance['date_enable'] ) : '';
			$date_enable = $date_enable_check ? 'true' : 'false';

			$comment_enable_check = isset( $instance['comment_enable'] ) ? esc_attr( $instance['comment_enable'] ) : '';
			$comment_enable = $comment_enable_check ? 'true' : 'false';

			// Added featured 
			

			$post_read_enable_check = isset( $instance['post_read_enable'] ) ? esc_attr( $instance['post_read_enable'] ) : '';
			$post_read_enable = $post_read_enable_check ? 'true' : 'false';

			
			$post_no1 = ! empty( $instance[ 'post_no1' ] ) ? $instance[ 'post_no1' ] : 3;
			// For slider end

			$cat1 = ! empty( $instance[ 'cat1' ] ) ? $instance[ 'cat1' ] : 0;
			$title1 = apply_filters( 'widget_title', ! empty( $instance['title1'] ) ? $instance['title1'] : get_cat_name( $cat1 ), $instance, $this->id_base );
		
			$author1 = ! empty( $instance[ 'author1' ] ) ? $instance[ 'author1' ] : 0;
			$orderby1 = ! empty( $instance[ 'orderby1' ] ) ? $instance[ 'orderby1' ] : 'date';
			
			$admin_enable_check1 = isset( $instance['admin_enable1'] ) ? esc_attr( $instance['admin_enable1'] ) : '';
			$admin_enable1 = $admin_enable_check1 ? 'true' : 'false';

			$date_enable_check1 = isset( $instance['date_enable1'] ) ? esc_attr( $instance['date_enable1'] ) : '';
			$date_enable1 = $date_enable_check1 ? 'true' : 'false';

			$comment_enable_check1 = isset( $instance['comment_enable1'] ) ? esc_attr( $instance['comment_enable1'] ) : '';
			$comment_enable1 = $comment_enable_check1 ? 'true' : 'false';

			// Added featured 
		
			$post_read_enable_check1 = isset( $instance['post_read_enable1'] ) ? esc_attr( $instance['post_read_enable1'] ) : '';
			$post_read_enable1 = $post_read_enable_check1 ? 'true' : 'false';

			
			// Added Featured End
			$cat2 = ! empty( $instance[ 'cat2' ] ) ? $instance[ 'cat2' ] : 0;
			$title2 = apply_filters( 'widget_title', ! empty( $instance['title2'] ) ? $instance['title2'] : get_cat_name( $cat2 ), $instance, $this->id_base );
			$post_no = ! empty( $instance[ 'post_no' ] ) ? $instance[ 'post_no' ] : 4;

		    $author2 = ! empty( $instance[ 'author2' ] ) ? $instance[ 'author2' ] : 0;
			$orderby2 = ! empty( $instance[ 'orderby2' ] ) ? $instance[ 'orderby2' ] : 'date';
			
			$admin_enable_check2 = isset( $instance['admin_enable2'] ) ? esc_attr( $instance['admin_enable2'] ) : '';
			$admin_enable2 = $admin_enable_check2 ? 'true' : 'false';

			$date_enable_check2 = isset( $instance['date_enable2'] ) ? esc_attr( $instance['date_enable2'] ) : '';

			$date_enable2 = $date_enable_check2 ? 'true' : 'false';

			$comment_enable_check2 = isset( $instance['comment_enable2'] ) ? esc_attr( $instance['comment_enable2'] ) : '';
			$comment_enable2 = $comment_enable_check2 ? 'true' : 'false';

			// Added featured 
		
			$post_read_enable_check2 = isset( $instance['post_read_enable2'] ) ? esc_attr( $instance['post_read_enable2'] ) : '';
			$post_read_enable2 = $post_read_enable_check2 ? 'true' : 'false';

			
		
			if($layout_enable =='true'):?>

			<!-- Hero Slider & Tab -->
			<section class="hero-slider-tab" style="<?php if (! $background_image == null) { ?> background-image:url(<?php echo esc_url($background_image); ?>); <?php } ?>; background-color:<?php echo $color ;?>">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-12">
							<!-- News Slider -->
							<div class="hero-big-slider">

								<div class="hero-slider-two">
									<?php
										$arguments = array(
											'cat'	=> absint( $cat ),
											'posts_per_page' => absint( $post_no1 ),
											'author'	   => esc_attr( $author ),
											'orderby' => array( esc_attr( $orderby ) => 'DSC', 'date' => 'DSC'),
										);
										$query = new WP_Query( $arguments );
									
										if( $query->have_posts() ) :
											while( $query->have_posts() ) :
											$query->the_post();
											$categories = get_the_category(get_the_ID());
										?>
									<!-- Single Slider loop-->
									<div class="single-slider">
										<!-- Slider Head -->
										
										<div class="slider-head">
											<?php the_post_thumbnail('just-news-730X480-thumbnail');	?>
											<!-- Slider Content -->
											<div class="slider-content">
												<?php if( isset($categories) && !empty($categories) ){?>	
												<div class="cat-name"><a href="<?php echo esc_url(get_category_link($categories[0]->term_id));?>" class="default-cat"><?php echo esc_html($categories[0]->name); ?></a></div>
												<?php }?>
												<!-- Meta -->
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
												
												<!-- Added Featured -->
												
												<?php 
												if($post_read_enable =='true'):
													just_news_count_content_words( get_the_ID());
												endif;	
												?>
												
											</div>
												<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
												<?php the_excerpt();?>
												<div class="button">
													<a href="<?php the_permalink();?>" class="read-more"><?php esc_html_e('Read more','just-news');?> <i class="fa fa-long-arrow-right"></i></a>
												</div>	
											</div>	
										</div>
										<!--/ End Single Slider -->
									
									</div>
									<?php
									
										endwhile;
									endif;
								wp_reset_postdata();
								?>

									
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-12">
							<!-- Post Tab Sidebar -->
							<aside class="post-tab-sidebar">
								<div class="single-sidebar post-tab">
									<!-- Tab Nav -->
									<ul class="nav nav-tabs" id="myTab" role="tablist">
										<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#latest" role="tab"><i class="fa fa-clock-o"></i><?php echo esc_html($title1);?></a></li>
										<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#popular" role="tab"><i class="fa fa-bolt"></i><?php echo esc_html($title2);?></a></li>
										
									</ul>
									<!--/ End Tab Nav -->
									<div class="tab-content" id="myTabContent">
										<!-- Recent Posts -->
										<div class="tab-pane active" id="latest" role="tabpanel">
											<?php if($cat1 == 0):?>
											<?php $the_query = new WP_Query('showposts='. absint($post_no) .'&orderby=post_date&order=desc');
											$recent_post_num = 1;
											$i=1;		
											while ($the_query->have_posts()) : $the_query->the_post(); 
											$categories = get_the_category(get_the_ID());?>
											<!-- Single Post Loop-->
											<div class="single-post">
												<?php if($comment_enable1 =='true'): ?>
												<span class="p-number"><?php echo absint($i);?></span>
												<?php endif; ?>
												
												<div class="post-img">
													<?php the_post_thumbnail();?>
												</div>
												<div class="post-info">
													<?php if( isset($categories) && !empty($categories) ){?>
													<div class="cat-name"><i class="fa fa-list-alt"></i><?php echo esc_html($categories[0]->name); ?></div>
													<?php }?>
													<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
													<div class="justnews-meta">
														<?php if($admin_enable1 =='true'): ?>
														<span class="author">
															
															<?php just_news_posted_by();?>
														</span>
														<?php endif; ?>
														<?php if($date_enable1 =='true'): ?>
														<span class="date">
															<i class="fa fa-clock-o"></i>
															<?php just_news_posted_on();?>
														</span>
														<?php endif; ?>
														<?php if($comment_enable1 =='true'): ?>
														<span class="date"><i class="fa fa-comments"></i><?php just_news_post_comment();?></span>
														<?php endif; ?>
														
														<?php 
														if($post_read_enable1 =='true'):
															just_news_count_content_words( get_the_ID());
														endif;	
														?>
														
													</div>
												</div>
											</div>
											<!--/ End Single Post -->
											<?php
											$i++;
											endwhile;
											wp_reset_postdata();
											else:?>
											<?php
											$arguments = array(
												'cat'	=> absint( $cat1 ),
												'posts_per_page' => absint( $post_no ),
												'author'	   => esc_attr( $author1 ),
												'orderby' => array( esc_attr( $orderby1 ) => 'DSC', 'date' => 'DSC'),
											);
											$query = new WP_Query( $arguments );
											$i=1;

											if( $query->have_posts() ) :
												while( $query->have_posts() ) :
											$query->the_post();
											$categories = get_the_category(get_the_ID());
												?>
											<!-- Single Post Loop-->
											<div class="single-post">
												<?php if($comment_enable1 =='true'): ?>
												<span class="p-number"></i><?php echo absint($i);?></span>
												<?php endif; ?>
												
												<div class="post-img">
													<?php the_post_thumbnail();?>
												</div>
												<div class="post-info">
													<?php if( isset($categories) && !empty($categories) ){?>
													<div class="cat-name"><i class="fa fa-list-alt"></i><?php echo esc_html($categories[0]->name); ?></div>
													<?php }?>
													<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
													<div class="justnews-meta">
														<?php if($admin_enable1 =='true'): ?>
														<span class="author">
															<?php just_news_posted_by();?>
														</span>
														<?php endif; ?>
														<?php if($date_enable1 =='true'): ?>
														<span class="date">
															<i class="fa fa-clock-o"></i>
															<?php just_news_posted_on();?>
														</span>
														<?php endif; ?>
														<?php if($comment_enable1 =='true'): ?>
														<span class="date"><i class="fa fa-comments"></i><?php just_news_post_comment();?></span>
														<?php endif; ?>

														<?php 
														if($post_read_enable1 =='true'):
															just_news_count_content_words( get_the_ID());
														endif;	
														?>
													</div>

												</div>
											</div>
											<!--/ End Single Post -->
											<?php
												$i++;
												endwhile;
											endif;
												wp_reset_postdata();
											
											?>	
											<?php endif;?>
										</div>
										<!--/ End Recent Posts -->

										<!-- Popular -->
										<div class="tab-pane" id="popular" role="tabpanel">
											<?php if($cat2 == 0):
												$posts_args = array(
													'post_type'			=> 'post',
													'posts_per_page'	=> $post_no,
												 	'meta_key'       	=> 'just_news_wpb_post_views_count',
												 	'orderby'       	=> 'meta_value_num',
													'order'				=> 'DESC'
												);
											else:
												 $posts_args =array(
														'cat'	=> absint( $cat2 ),
														'posts_per_page' => absint( $post_no ),
														'author'	   => esc_attr( $author1 ),
														'orderby' => array( esc_attr( $orderby1 ) => 'DSC', 'date' => 'DSC'),
													);
											 endif;	 
											 $popular = new WP_Query( $posts_args );
											 $i=1;
											 if( $popular->have_posts() ) :
											 while ($popular->have_posts()) : $popular->the_post();
											?>
											<!-- Single Post Loop-->
											<div class="single-post">
												<?php if($comment_enable2 =='true'): ?>
												<span class="p-number"></i><?php echo absint($i);?></span>
												<?php endif; ?>
												
												<div class="post-img">
													<?php the_post_thumbnail();?>
												</div>
												<div class="post-info">
													<?php if( isset($categories) && !empty($categories) ){?>
													<div class="cat-name"><i class="fa fa-list-alt"></i><?php echo esc_html($categories[0]->name); ?></div>
													<?php }?>
													<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
													<div class="justnews-meta">
															<?php if($admin_enable2 =='true'): ?>
															<span class="author">
																
																<?php just_news_posted_by();?>
															</span>
															<?php endif; ?>
															<?php if($date_enable2 =='true'): ?>
															<span>
																<i class="fa fa-clock-o"></i>
																<?php just_news_posted_on();?>
															</span>
															<?php endif; ?>
															<?php if($comment_enable2 =='true'): ?>
															<span><i class="fa fa-comments"></i><?php just_news_post_comment();?></span>
															<?php endif; ?>

															<!-- Added Featured -->
															

															<?php 
															if($post_read_enable2 =='true'):
																just_news_count_content_words( get_the_ID());
															endif;	
															?>

															
													</div>
												</div>
											</div>
											<!--/ End Single Post -->
											<?php  
											$i++;
											endwhile; 
											endif;
											wp_reset_postdata();
											?>
										</div>
										<!--/ End Popular -->
										
									</div>
								</div>
							</aside>
							<!--/ End Post Tab Sidebar -->
						</div>
					</div>
				</div>
			</section>
			<!-- Hero Slider & Tab -->
	
			<?php
			endif;		
		}

	}
}