<?php
/**
 * Widget - Footer About Widget
 *
 * @package Just News
 */


/*-----------------------------------------------------
Footer About Widgets
-----------------------------------------------------*/
if (!class_exists('Just_News_Footer_About_Widget')) {
    class Just_News_Footer_About_Widget extends WP_Widget
    {
        public function __construct()
        {
            parent::__construct(
            'just_news_about_widget',
            esc_html__('JN :Footer About', 'just-news'),
            array('description' => esc_html__('Footer About widgets. Place it within "Footer widget Area"', 'just-news'))
            );
        }

        public function form( $instance )
        {
            $image_url   = ( ! empty( $instance['image_url'] ) ) ? $instance['image_url'] : '';

            $description    = ! empty( $instance[ 'description' ] ) ? $instance[ 'description' ] : '';

            $facebook_url   = ! empty( $instance[ 'facebook_url' ] ) ?  $instance[ 'facebook_url' ] : '';
            $twitter_url   = ! empty( $instance[ 'twitter_url' ] ) ?  $instance[ 'twitter_url' ] : '';
            $dribble_url   = ! empty( $instance[ 'dribble_url' ] ) ?  $instance[ 'dribble_url' ] : '';
            $pinterest_url   = ! empty( $instance[ 'pinterest_url' ] ) ?  $instance[ 'pinterest_url' ] : '';
            $instagram_url   = ! empty( $instance[ 'instagram_url' ] ) ?  $instance[ 'instagram_url' ] : '';

            $youtube_url   = ! empty( $instance[ 'youtube_url' ] ) ?  $instance[ 'youtube_url' ] : '';

            $layout_enable  = ! empty( $instance[ 'layout_enable' ] ) ? $instance[ 'layout_enable' ] : 'on';
            ?>
            <p>
            <input class="checkbox" type="checkbox" <?php checked( $layout_enable, 'on' ); ?> id="<?php echo esc_attr($this->get_field_id( 'layout_enable' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'layout_enable' ) ); ?>" /> 
            <label for="<?php echo esc_attr($this->get_field_id( 'layout_enable' )); ?>"><?php esc_html_e('Display Footer About Section', 'just-news'); ?></label> 
            </p>

           <p>
              <label for="<?php echo esc_attr($this->get_field_id('image_url')); ?>"><?php esc_html_e( 'Logo:', 'just-news' );?></label><br />
                <img class="custom_media_image_footer_about" src="<?php if(!empty($instance['image_url'])){echo esc_url($instance['image_url']);} ?>"/>
                <input type="hidden" class="widefat custom_media_url_footer_about" name="<?php echo $this->get_field_name('image_url'); ?>" id="<?php echo $this->get_field_id('image_url'); ?>" value="<?php echo esc_url($instance['image_url']); ?>">
                <input type="button" value="<?php esc_attr_e( 'Upload Image', 'just-news' ); ?>" class="button custom_media_upload" id="custom_image_uploader_<?php echo esc_attr($this->get_field_id('image_url')); ?>"/>
                <a class="just-news-remove-counter button" data-id="remove_media_button"><?php esc_html_e('Remove Image', 'just-news'); ?></a>
            </p>

            <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'description' ) ); ?>"><strong><?php echo esc_html_e( 'Description: ', 'just-news' ); ?></strong></label>
            <input type="text" id="<?php echo esc_attr( $this->get_field_id( 'description' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'description' ) ); ?>" value="<?php echo esc_attr( $description ); ?>" class="widefat">
            </p>

            <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'facebook_url' ) ); ?>"><strong><?php echo esc_html__( 'Facebook Url: ', 'just-news' ); ?></strong></label>
            <input type="text" id="<?php echo esc_attr( $this->get_field_id( 'facebook_url' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'facebook_url' ) ); ?>" value="<?php echo esc_url( $facebook_url ); ?>" class="widefat">
            </p>


            <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'twitter_url' ) ); ?>"><strong><?php echo esc_html__( 'Twitter Url: ', 'just-news' ); ?></strong></label>
            <input type="text" id="<?php echo esc_attr( $this->get_field_id( 'twitter_url' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'twitter_url' ) ); ?>" value="<?php echo esc_url( $twitter_url ); ?>" class="widefat">
            </p>


            <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'dribble_url' ) ); ?>"><strong><?php echo esc_html__( 'Dribbble Url: ', 'just-news' ); ?></strong></label>
            <input type="text" id="<?php echo esc_attr( $this->get_field_id( 'dribble_url' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'dribble_url' ) ); ?>" value="<?php echo esc_url( $dribble_url ); ?>" class="widefat">

            </p>
            <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'pinterest_url' ) ); ?>"><strong><?php echo esc_html__( 'Pinterest Url: ', 'just-news' ); ?></strong></label>
            <input type="text" id="<?php echo esc_attr( $this->get_field_id( 'pinterest_url' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'pinterest_url' ) ); ?>" value="<?php echo esc_url( $pinterest_url ); ?>" class="widefat">
            </p>

            <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'instagram_url' ) ); ?>"><strong><?php echo esc_html__( 'Instagram Url: ', 'just-news' ); ?></strong></label>
            <input type="text" id="<?php echo esc_attr( $this->get_field_id( 'instagram_url' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'instagram_url' ) ); ?>" value="<?php echo esc_url( $instagram_url ); ?>" class="widefat">
            </p>


            <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'youtube_url' ) ); ?>"><strong><?php echo esc_html__( 'Youtube Url: ', 'just-news' ); ?></strong></label>
            <input type="text" id="<?php echo esc_attr( $this->get_field_id( 'youtube_url' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'youtube_url' ) ); ?>" value="<?php echo esc_url( $youtube_url ); ?>" class="widefat">
            </p>

        <?php
        }

        public function update($new_instance, $old_instance)
        {
            $instance = $old_instance;
            $instance[ 'layout_enable' ] = $new_instance[ 'layout_enable' ];
            $instance['image_url'] = esc_url_raw($new_instance['image_url']);
            $instance[ 'description' ] = sanitize_text_field( $new_instance[ 'description' ] );
            $instance[ 'facebook_url' ] = esc_url_raw( $new_instance[ 'facebook_url' ] );
            $instance[ 'twitter_url' ] = esc_url_raw( $new_instance[ 'twitter_url' ] );
            $instance[ 'dribble_url' ] = esc_url_raw( $new_instance[ 'dribble_url' ] );
            $instance[ 'pinterest_url' ] = esc_url_raw( $new_instance[ 'pinterest_url' ] );
            $instance[ 'instagram_url' ] = esc_url_raw( $new_instance[ 'instagram_url' ] );
            $instance[ 'youtube_url' ] = esc_url_raw( $new_instance[ 'youtube_url' ] );
            return $instance;
        }

        public function widget($args, $instance)
        {
            if (!empty($instance)) {
                $layout_enable_check = isset( $instance['layout_enable'] ) ? esc_attr( $instance['layout_enable'] ) : '';
                $layout_enable = $layout_enable_check ? 'true' : 'false';
                 $image_url = (!empty($instance['image_url'])) ? $instance['image_url'] : array();
                $description = ! empty( $instance[ 'description' ] ) ? $instance[ 'description' ] : '';

                $facebook_url   = ! empty( $instance[ 'facebook_url' ] ) ?  $instance[ 'facebook_url' ] : '';
                $twitter_url   = ! empty( $instance[ 'twitter_url' ] ) ?  $instance[ 'twitter_url' ] : '';
                $dribble_url   = ! empty( $instance[ 'dribble_url' ] ) ?  $instance[ 'dribble_url' ] : '';
                $pinterest_url   = ! empty( $instance[ 'pinterest_url' ] ) ?  $instance[ 'pinterest_url' ] : '';
                $instagram_url   = ! empty( $instance[ 'instagram_url' ] ) ?  $instance[ 'instagram_url' ] : '';

                $youtube_url   = ! empty( $instance[ 'youtube_url' ] ) ?  $instance[ 'youtube_url' ] : '';


                if($layout_enable =='true'):
                echo $args[ 'before_widget' ];
                ?>
                <!-- Single Widget -->
                <div class="single-footer f-about">
                    <?php if(!empty($image_url)):?>
                        <div class="logo">
                            <div class="text-logo"><a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo esc_url($image_url);?>" alt="#"></a></div>
                        </div>
                    <?php else:?>
                    <?php  
                        echo $args[ 'before_title' ];
                            bloginfo( 'name' );
                        echo $args[ 'after_title' ];
                    endif;?>
                    <p class="text"><?php echo esc_html($description);?></p>
                    <div class="social">
                    <ul>
                        <?php if($facebook_url != ''):?>
                        <li><a href="<?php echo esc_url($facebook_url);?>" class="facebook"><i class="fa fa-facebook-f"></i></a></li>
                        <?php endif;?>
                        <?php if($twitter_url != ''):?>
                        <li><a href="<?php echo esc_url($twitter_url);?>" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <?php endif;?>
                        <?php if($instagram_url != ''):?>
                        <li><a href="<?php echo esc_url($instagram_url);?>" class="instagram"><i class="fa fa-instagram"></i></a></li>
                        <?php endif;?>
                        <?php if($pinterest_url != ''):?>
                        <li><a href="<?php echo esc_url($pinterest_url);?>" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                        <?php endif;?>
                        <?php if($dribble_url != ''):?>
                        <li><a href="<?php echo esc_url($dribble_url);?>" class="dribbble"><i class="fa fa-dribbble"></i></a></li>
                        <?php endif;?>

                         <?php if($youtube_url != ''):?>
                        <li><a href="<?php echo esc_url($youtube_url);?>" class="youtube"><i class="fa fa-youtube-play"></i></a></li>
                        <?php endif;?>
                    </ul>
                    </div>
                </div>
                <!--/ End Single Widget -->
                <?php
                echo $args[ 'after_widget' ];
                endif;
            }
        }

    }
}