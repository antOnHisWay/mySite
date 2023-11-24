<?php
/**
* Widget - News Block Breaking News
*
* @package Just News
*/


/*-----------------------------------------------------
News Block Breaking News Widgets
-----------------------------------------------------*/

	if ( ! class_exists( 'Just_News_Breaking_News' ) ) :
/**
* News Block Layout Seven
*/
class Just_News_Breaking_News extends WP_Widget
{

	function __construct()
	{
		$opts = array(
			'classname' => 'block-layout-a',
			'description'	=> esc_html__( 'Just News Breaking News. Place it within "Frontpage layout_enables Area at first"', 'just-news' )
		);

		parent::__construct( 'just-news-block-breaking-news', esc_html__( 'JN:Breaking News', 'just-news' ), $opts );
	}

	function form( $instance ) {
		?>
	
		<?php
		$layout_enable = ! empty( $instance[ 'layout_enable' ] ) ? $instance[ 'layout_enable' ] : 'on';
		$color = ! empty( $instance[ 'color' ] ) ? $instance[ 'color' ] : __('#0dbe98','just-news');
		$title = ! empty( $instance[ 'title' ] ) ? $instance[ 'title' ] : __('Breaking News','just-news');
		$cat = ! empty( $instance[ 'cat' ] ) ? $instance[ 'cat' ] : 0;
		$post_no = ! empty( $instance[ 'post_no' ] ) ? $instance[ 'post_no' ] : 3;

	
		?>

		<p>
			<input class="checkbox" type="checkbox" <?php checked( $layout_enable, 'on' ); ?> id="<?php echo esc_attr($this->get_field_id( 'layout_enable' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'layout_enable' ) ); ?>" /> 
			<label for="<?php echo esc_attr($this->get_field_id( 'layout_enable' )); ?>"><?php esc_html_e('Display Breaking News', 'just-news'); ?></label>
		</p>

	
		<p>
			<label for="<?php echo $this->get_field_id( 'color' ); ?>" style="display:block;"><?php esc_html_e( 'Background Color:','just-news' ); ?></label> 
			<input class="widefat color-picker" id="<?php echo $this->get_field_id( 'color' ); ?>" name="<?php echo $this->get_field_name( 'color' ); ?>" type="text" value="<?php echo esc_attr( $color ); ?>" />
		</p>
	

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><strong><?php echo esc_html__( 'Title: ', 'just-news' ); ?></strong></label>
			<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" value="<?php echo esc_attr( $title ); ?>" class="widefat">
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
			<label for="<?php echo esc_attr( $this->get_field_id( 'post_no' ) )?>"><strong><?php echo esc_html__( 'Post No: ', 'just-news' )?></strong></label>
			<input type="number" id="<?php echo esc_attr( $this->get_field_id( 'post_no' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'post_no' ) ); ?>" value="<?php echo esc_attr( $post_no ); ?>" class="widefat">
		</p>
		<?php
	}
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance[ 'layout_enable' ] = $new_instance[ 'layout_enable' ];
		$instance[ 'title' ] = sanitize_text_field( $new_instance[ 'title' ] );
		$instance[ 'cat' ] = absint( $new_instance[ 'cat' ] );
		$instance[ 'post_no' ] = absint( $new_instance[ 'post_no' ] );
		$instance[ 'color' ] = sanitize_text_field( $new_instance[ 'color' ] );
		return $instance;
	}
	function widget( $args, $instance ) {
		$cat = ! empty( $instance[ 'cat' ] ) ? $instance[ 'cat' ] : 0;
		
		$title = apply_filters( 'widget_title', ! empty( $instance['title'] ) ? $instance['title'] : get_cat_name( $cat ), $instance, $this->id_base );
		$post_no = ! empty( $instance[ 'post_no' ] ) ? $instance[ 'post_no' ] : 3;
		$color = ! empty( $instance[ 'color' ] ) ? $instance[ 'color' ] : '#0dbe98';
		$layout_enable_check = isset( $instance['layout_enable'] ) ? esc_attr( $instance['layout_enable'] ) : '';
		$layout_enable = $layout_enable_check ? 'true' : 'false';

		echo $args[ 'before_widget' ];
		if($layout_enable =='true'):
			?>
			<!-- Breaking News -->
			<div class="breaking-news">
				<div class="container">
					<div class="container-inner">
						<div class="row">
							<div class="col-lg-2 col-md-3 col-12">
								<div class="breaking-inner">
									<!-- Ticker title -->
									<div class="breaking-title">
										<h2><?php echo esc_html($title);?></h2>
									</div>	
								</div>
							</div>
							<div class="col-lg-10 col-md-9 col-12" style="background-color:<?php echo $color ;?>">
								<!-- Breaking News Slider-->
								<div class="b-news-slider">
									<?php
									$arguments = array(
										'cat'	=> absint( $cat ),
										'posts_per_page' => absint( $post_no ),
										'orderby' => 'DESC',
									);
									$query = new WP_Query( $arguments );
								
									if( $query->have_posts() ) :
										while( $query->have_posts() ) :
										$query->the_post();
									?>
									<!-- Single Slider loop-->
									<div class="single-slider">
										<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
									</div>
									<!--/ End Single Slider -->
									<?php
							
										endwhile;
									endif;
									wp_reset_postdata();
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Breaking News -->
			<?php
		endif;
		echo $args[ 'after_widget' ];
	}
}
endif;