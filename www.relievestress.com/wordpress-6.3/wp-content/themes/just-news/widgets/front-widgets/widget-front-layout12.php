<?php
/**
* Widget - News Block Layouts Twelve
*
* @package Just News
*/


/*-----------------------------------------------------
Front Page News Layout Twelve Widgets
-----------------------------------------------------*/

	if ( ! class_exists( 'Just_News_Block_Layout_Twelve' ) ) :
/**
* News Block Layout Twelve
*/
class Just_News_Block_Layout_Twelve extends WP_Widget
{

	function __construct()
	{
		$opts = array(
			'classname' => 'block-layout-a',
			'description'	=> esc_html__( 'Just News Block Layout Twelve. Place it within "Frontpage Layouts Area"', 'just-news' )
		);

		parent::__construct( 'just-news-block-layout-twelve', esc_html__( 'JN:News Block Layout 12', 'just-news' ), $opts );
	}

	function form( $instance ) {
		?>
	
		<?php
		$layout_enable = ! empty( $instance[ 'layout_enable' ] ) ? $instance[ 'layout_enable' ] : 'on';
		
		$cat = ! empty( $instance[ 'cat' ] ) ? $instance[ 'cat' ] : 0;
		$post_no = ! empty( $instance[ 'post_no' ] ) ? $instance[ 'post_no' ] : 3;

		$admin_enable = ! empty( $instance[ 'admin_enable' ] ) ? $instance[ 'admin_enable' ] : 'off';
		$date_enable = ! empty( $instance[ 'date_enable' ] ) ? $instance[ 'date_enable' ] : 'off';
		$comment_enable = ! empty( $instance[ 'comment_enable' ] ) ? $instance[ 'comment_enable' ] : 'off';

		$post_read_enable = ! empty( $instance[ 'post_read_enable' ] ) ? $instance[ 'post_read_enable' ] : 'off';
		

		$author_1 = ! empty( $instance[ 'author_1' ] ) ? $instance[ 'author_1' ] : 0;
		$color = ! empty( $instance[ 'color' ] ) ? $instance[ 'color' ] : __('#ffffff','just-news');
		$orderby = ! empty( $instance[ 'orderby' ] ) ? $instance[ 'orderby' ] : 'date';
	    $background_image = !empty($instance['background_image']) ? $instance['background_image'] : '';
	 
		?>

		<p>
			<input class="checkbox" type="checkbox" <?php checked( $layout_enable, 'on' ); ?> id="<?php echo esc_attr($this->get_field_id( 'layout_enable' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'layout_enable' ) ); ?>" /> 
			<label for="<?php echo esc_attr($this->get_field_id( 'layout_enable' )); ?>"><?php esc_html_e('Display News Block Layout 12', 'just-news'); ?></label>
		</p>

	<p>
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
		<label for="<?php echo $this->get_field_id( 'color' ); ?>" style="display:block;"><?php esc_html_e( 'Background Color:','just-news' ); ?></label> 
		<input class="widefat color-picker" id="<?php echo $this->get_field_id( 'color' ); ?>" name="<?php echo $this->get_field_name( 'color' ); ?>" type="text" value="<?php echo esc_attr( $color ); ?>" />
	</p>

	<p>
	    <label for="<?php echo $this->get_field_id('background_image'); ?>">
	        <?php _e('Backgroud Image', 'just-news'); ?>
	    </label>
	    <br><br>
	     <img class="custom_media_image_footer_about" src="<?php if(!empty($instance['background_image'])){echo esc_url($instance['background_image']);} ?>"/>
	    <input type="hidden" class="widefat custom_media_url_footer_about" name="<?php echo $this->get_field_name('background_image'); ?>" id="<?php echo $this->get_field_id('background_image'); ?>" value="<?php echo esc_url($instance['background_image']); ?>">
	  
	    <input type="button" value="<?php esc_attr_e( 'Upload Image', 'just-news' ); ?>" class="button custom_media_upload" id="custom_image_uploader_<?php echo esc_attr($this->get_field_id('background_image')); ?>"/>
	    <?php if(isset($instance['background_image']) && !empty($instance['background_image'])):?>
	    	<a class="just-news-remove-counter button" data-id="remove_media_button"><?php esc_html_e('Remove Image', 'just-news'); ?></a>
		<?php endif;?>
    </p>

	
		
	 <p>
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
	</p>

		<p>	
			
			<label for="<?php echo esc_attr( $this->get_field_id( 'cat' ) )?>"><strong><?php echo esc_html__( 'Select Category: ', 'just-news' ); ?></strong></label>
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
				'show_option_all'	=> esc_html__( 'All category', 'just-news' )
			);
			wp_dropdown_categories( $cat_args );
			?>
		</p>

	<p>
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
		$instance[ 'layout_enable' ] = $new_instance[ 'layout_enable' ];
	
		$instance[ 'cat' ] = absint( $new_instance[ 'cat' ] );
		$instance[ 'post_no' ] = absint( $new_instance[ 'post_no' ] );
	
	$instance[ 'admin_enable' ] = $new_instance[ 'admin_enable' ];
	$instance[ 'date_enable' ] = $new_instance[ 'date_enable' ];
	$instance[ 'comment_enable' ] = $new_instance[ 'comment_enable' ];

	// Added featured 
	$instance[ 'post_read_enable' ] = $new_instance[ 'post_read_enable' ];

	// Added Featured End

	$instance[ 'orderby' ] = sanitize_text_field( $new_instance['orderby'] );
	$instance[ 'author_1' ] = absint( $new_instance[ 'author_1' ] );
    $instance['background_image'] = esc_url_raw($new_instance['background_image']);
    $instance[ 'color' ] = sanitize_text_field( $new_instance[ 'color' ] );
   

	return $instance;
	}

	function widget( $args, $instance ) {
		$cat = ! empty( $instance[ 'cat' ] ) ? $instance[ 'cat' ] : 0;
		
	
		$post_no = ! empty( $instance[ 'post_no' ] ) ? $instance[ 'post_no' ] : 3;
		$layout_enable_check = isset( $instance['layout_enable'] ) ? esc_attr( $instance['layout_enable'] ) : '';
		$layout_enable = $layout_enable_check ? 'true' : 'false';

	$color = ! empty( $instance[ 'color' ] ) ? $instance[ 'color' ] : '#ffffff';
	$author_1 = ! empty( $instance[ 'author_1' ] ) ? $instance[ 'author_1' ] : 0;
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

	
	// Added Featured End
    $background_image = !empty($instance['background_image']) ? $instance['background_image'] : '';	
		echo $args[ 'before_widget' ];
		if($layout_enable =='true'):
			?>
		<!-- Main Layout -->
<section class="hero-style-three" style="<?php if (! $background_image == null) { ?> background-image:url(<?php echo esc_url($background_image); ?>); <?php } ?>; background-color:<?php echo $color ;?>">
	<div class="hero-slider-three">
		<!-- Single Slider Loop-->
	<?php
		$arguments = array(
			'cat'	=> absint( $cat ),
			'posts_per_page' => absint( $post_no ),
			'author'	   => esc_attr( $author_1 ),
			'orderby' => array( esc_attr( $orderby ) => 'DSC', 'date' => 'DSC'),
		);
		$query = new WP_Query( $arguments );
		if( $query->have_posts() ) :
			while( $query->have_posts() ) :
			$query->the_post();
			$categories = get_the_category(get_the_ID());
			$image_url = get_the_post_thumbnail_url(get_the_ID());
			?>
		<div class="single-slider shadow" style="background-image:url('<?php echo esc_url($image_url);?>')">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-9 col-12">
						<!-- Slider Head -->
						<div class="slider-head">
							<!-- Slider Content -->
							<div class="slider-content">
								<?php if( isset($categories) && !empty($categories) ){?>
								<div class="cat-name"><a href="<?php echo esc_url(get_category_link($categories[0]->term_id));?>" class="default-cat"><?php echo esc_html($categories[0]->name); ?></a></div>
								<?php }?>
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
									<a href="<?php the_permalink();?>" class="btn"><?php esc_html_e('Read more','just-news');?>  <i class="fa fa-long-arrow-right"></i></a>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Single Slider -->
			<?php
			endwhile;
			wp_reset_postdata();
		endif;?>
	</div>
</section>
<!--/ End Main Layout -->
			<?php
		endif;
		echo $args[ 'after_widget' ];
	}
}
endif;