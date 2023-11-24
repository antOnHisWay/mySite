<?php
/**
* Widget - News Block Trending Tags
*
* @package Just News
*/


/*-----------------------------------------------------
News Block Trendings News Widgets
-----------------------------------------------------*/

	if ( ! class_exists( 'Just_News_Trending_Tags' ) ) :
/**
* News Block Trending Tags Trending Tags
*/
class Just_News_Trending_Tags extends WP_Widget
{

	function __construct()
	{
		$opts = array(
			'classname' => 'block-layout-a',
			'description'	=> esc_html__( 'Trend Trending Tags. Place it within "Frontpage Area at first"', 'just-news' )
		);

		parent::__construct( 'just-news-block-trending-tags', esc_html__( 'JN:Trending Tags', 'just-news' ), $opts );
	}

	function form( $instance ) {

		?>
	
		<?php
		$layout_enable = ! empty( $instance[ 'layout_enable' ] ) ? $instance[ 'layout_enable' ] : 'on';
		$title = ! empty( $instance[ 'title' ] ) ? $instance[ 'title' ] : __('Trending Tags','just-news');	
		$post_no = ! empty( $instance[ 'post_no' ] ) ? $instance[ 'post_no' ] : 4;
		?>

		<p>
			<input class="checkbox" type="checkbox" <?php checked( $layout_enable, 'on' ); ?> id="<?php echo esc_attr($this->get_field_id( 'layout_enable' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'layout_enable' ) ); ?>" /> 
			<label for="<?php echo esc_attr($this->get_field_id( 'layout_enable' )); ?>"><?php esc_html_e('Display Trendings Tags', 'just-news'); ?></label>
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
		$instance[ 'layout_enable' ] = $new_instance[ 'layout_enable' ];
		$instance[ 'title' ] = sanitize_text_field( $new_instance[ 'title' ] );
		$instance[ 'post_no' ] = absint( $new_instance[ 'post_no' ] );
		return $instance;
	}

	function widget( $args, $instance ) {

		$title = apply_filters( 'widget_title', ! empty( $instance['title'] ) ? $instance['title'] :  $instance['title'], $instance, $this->id_base );
	
		$layout_enable_check = isset( $instance['layout_enable'] ) ? esc_attr( $instance['layout_enable'] ) : '';
		$layout_enable = $layout_enable_check ? 'true' : 'false';
		$post_no = ! empty( $instance[ 'post_no' ] ) ? $instance[ 'post_no' ] : 4;
		// echo "<pre>"; print_r($all_tags); echo "</pre>"; exit;
		echo $args[ 'before_widget' ];
		if($layout_enable =='true'):
			?>
			
			<!-- Trending Tags -->
			<div class="trending-tags">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="title"><?php echo esc_html($title);?></div>
							<div class="tag-list">
								<ul>
							
								<?php
								global $wpdb;
								$term_ids = $wpdb->get_col("
								    SELECT term_id FROM $wpdb->term_taxonomy
								    INNER JOIN $wpdb->term_relationships ON $wpdb->term_taxonomy.term_taxonomy_id=$wpdb->term_relationships.term_taxonomy_id
								    INNER JOIN $wpdb->posts ON $wpdb->posts.ID = $wpdb->term_relationships.object_id
								    WHERE DATE_SUB(CURDATE(), INTERVAL 30 DAY) <= $wpdb->posts.post_date");

								if(count($term_ids) > 0){

								  $tags = get_tags(array(
								    'orderby' => 'count',
								    'order'   => 'DESC',
								    'number'  => $post_no,
								    'include' => $term_ids,
								  ));
								foreach ( (array) $tags as $tag ) {
								echo '<li><a href="' . esc_url(get_tag_link ($tag->term_id)) . '" rel="tag">#' . $tag->name . '</a></li>';
								}
								}
								?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/End Trending Tags -->
			<?php
		
		endif;
		echo $args[ 'after_widget' ];
	}
}
endif;