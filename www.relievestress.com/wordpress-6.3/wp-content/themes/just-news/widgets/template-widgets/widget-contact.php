<?php
if (!class_exists('Just_News_Contact_Template_Widget')) {
class Just_News_Contact_Template_Widget extends WP_Widget
{

    private function defaults()
    {

        $defaults = array(
            'layout_enable' => 'on',
            'title' => esc_html__('Contact with Us', 'just-news'),
            'shortcode' => '',
            'office_address' => esc_html__('Office Address', 'just-news'),
            'office_description' => '',
            'address_text'   =>  '',
            'address_name'   =>  '',
            'email_text'     =>  '',
            'email1'    =>  '',
            'email2'     =>  '',
            'phone_text'     =>  '',
            'phone1'    =>  '',
            'phone2'     =>  ''
        );
        return $defaults;
    }

    public function __construct()
    {
        parent::__construct(
            'just_news_contact_template_widget',
            esc_html__('JN :Contact Page Widget', 'just-news'),
            array('description' => esc_html__('Contact widget Section', 'just-news'))
        );
    }
    public function form( $instance )
    {
        $instance = wp_parse_args( (array ) $instance, $this->defaults() );
        $layout_enable =  $instance[ 'layout_enable' ];
        $title =  $instance['title'] ;
        $shortcode =  $instance['shortcode'];
        $office_address =  $instance['office_address'];
        $office_description =  $instance['office_description'];
        $address_text =  $instance['address_text'];
        $address_name =  $instance['address_name'];
        $email_text =  $instance['email_text'];
        $email1 =  $instance['email1'];
        $email2 =  $instance['email2'];
        $phone_text =  $instance['phone_text'];
        $phone1 =  $instance['phone1'];
        $phone2 =  $instance['phone2'];
        ?>
        <p>
           <input class="checkbox" type="checkbox" <?php checked( $layout_enable, 'on' ); ?> id="<?php echo esc_attr($this->get_field_id( 'layout_enable' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'layout_enable' ) ); ?>" /> 
            <label for="<?php echo esc_attr($this->get_field_id( 'layout_enable' )); ?>"><?php esc_html_e('Display Contact Page Section', 'just-news'); ?></label> 
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>">
                <?php esc_html_e('Title', 'just-news'); ?>
            </label><br/>
            <input type="text" name="<?php echo esc_attr( $this->get_field_name('title') ); ?>" class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title') ); ?>" value="<?php echo esc_attr($title); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id('shortcode') ); ?>">
                <?php esc_html_e( 'Contact Form 7 Shortcode', 'just-news'); ?>
            </label><br/>
            <input type="text" name="<?php echo esc_attr($this->get_field_name('shortcode')); ?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('shortcode')); ?>" value="<?php echo esc_attr($shortcode); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id('office_address') ); ?>">
                <?php esc_html_e( 'Office Address', 'just-news'); ?>
            </label><br/>
            <input type="text" name="<?php echo esc_attr($this->get_field_name('office_address')); ?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('office_address')); ?>" value="<?php echo esc_attr($office_address); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id('office_description') ); ?>">
                <?php esc_html_e( 'Office Description', 'just-news'); ?>
            </label><br/>
            <input type="text" name="<?php echo esc_attr($this->get_field_name('office_description')); ?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('office_description')); ?>" value="<?php echo esc_attr($office_description); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id('address_text') ); ?>">
                <?php esc_html_e( 'Address Text', 'just-news'); ?>
            </label><br/>
            <input type="text" name="<?php echo esc_attr($this->get_field_name('address_text')); ?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('address_text')); ?>" value="<?php echo esc_attr($address_text); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id('address_name') ); ?>">
                <?php esc_html_e( 'Address Name', 'just-news'); ?>
            </label><br/>
            <input type="text" name="<?php echo esc_attr($this->get_field_name('address_name')); ?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('address_name')); ?>" value="<?php echo esc_attr($address_name); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id('email_text') ); ?>">
                <?php esc_html_e( 'Email Text', 'just-news'); ?>
            </label><br/>
            <input type="text" name="<?php echo esc_attr($this->get_field_name('email_text')); ?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('email_text')); ?>" value="<?php echo esc_attr($email_text); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id('email1') ); ?>">
                <?php esc_html_e( 'Email 1', 'just-news'); ?>
            </label><br/>
            <input type="text" name="<?php echo esc_attr($this->get_field_name('email1')); ?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('email1')); ?>" value="<?php echo esc_attr($email1); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id('email2') ); ?>">
                <?php esc_html_e( 'Email 2', 'just-news'); ?>
            </label><br/>
            <input type="text" name="<?php echo esc_attr($this->get_field_name('email2')); ?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('email2')); ?>" value="<?php echo esc_attr($email2); ?>">
        </p>


        <p>
            <label for="<?php echo esc_attr( $this->get_field_id('phone_text') ); ?>">
                <?php esc_html_e( 'Phone text', 'just-news'); ?>
            </label><br/>
            <input type="text" name="<?php echo esc_attr($this->get_field_name('phone_text')); ?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('phone_text')); ?>" value="<?php echo esc_attr($phone_text); ?>">
        </p>
        
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id('phone1') ); ?>">
                <?php esc_html_e( 'Phone 1', 'just-news'); ?>
            </label><br/>
            <input type="text" name="<?php echo esc_attr($this->get_field_name('phone1')); ?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('phone1')); ?>" value="<?php echo esc_attr($phone1); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id('phone2') ); ?>">
                <?php esc_html_e( 'Phone 2', 'just-news'); ?>
            </label><br/>
            <input type="text" name="<?php echo esc_attr($this->get_field_name('phone2')); ?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('phone2')); ?>" value="<?php echo esc_attr($phone2); ?>">
        </p>

        <?php
    }

    public function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance[ 'layout_enable' ] = $new_instance[ 'layout_enable' ];
        $instance['title'] = sanitize_text_field($new_instance['title']);
        $instance['shortcode'] = sanitize_text_field($new_instance['shortcode']);

        $instance['office_address'] = sanitize_text_field($new_instance['office_address']);
        $instance['office_description'] = sanitize_text_field($new_instance['office_description']);
        $instance['address_text'] = sanitize_text_field($new_instance['address_text']);
         $instance['address_name'] = sanitize_text_field($new_instance['address_name']);
        $instance['email_text'] = sanitize_text_field($new_instance['email_text']);
        $instance['email1'] = sanitize_email($new_instance['email1']);
        $instance['email2'] = sanitize_email($new_instance['email2']);

        $instance['phone_text'] = sanitize_text_field($new_instance['phone_text']);
        $instance['phone1'] = sanitize_text_field($new_instance['phone1']);
        $instance['phone2'] = sanitize_text_field($new_instance['phone2']);
      
        return $instance;
    }

    public function widget($args, $instance)
    {
        if (!empty($instance)) {
            $instance = wp_parse_args((array )$instance, $this->defaults());
            $layout_enable_check = isset( $instance['layout_enable'] ) ? esc_attr( $instance['layout_enable'] ) : '';
            $layout_enable = $layout_enable_check ? 'true' : 'false';
            $title = apply_filters('widget_title', !empty($instance['title']) ? esc_html($instance['title']) : '', $instance, $this->id_base);
            $shortcode =$instance['shortcode'];

            $office_address =$instance['office_address'];
            $office_description =$instance['office_description'];
            $address_text =$instance['address_text'];
            $address_name =$instance['address_name'];
            $email_text =$instance['email_text'];
            $email1 =$instance['email1'];
            $email2 =$instance['email2'];

            $phone_text =$instance['phone_text'];
            $phone1 =$instance['phone1'];
            $phone2 =$instance['phone2'];
            if($layout_enable =='true'):
            ?>
            <section class="contact section">
	            <!-- Contact Us -->
	           	<div class="container">
	                <div class="row">
	                    <div class="col-12">
	                        <h3 class="grid-title"><i class="fa fa-users"></i><?php echo esc_html($title);?></h3>
	                <div class="row">
	                    <!-- Contact Form -->
	                    <div class="col-lg-8 col-md-8 col-12">
	                        <?php if ($shortcode):
	                              echo do_shortcode($shortcode); 
	                            endif; ?>
	                    </div>
	                    <!--/ End Contact Form -->
	                    <div class="col-lg-4 col-md-4 col-12">
	                        <div class="address-inner">
	                            <div class="contact-title">
	                                <h2><?php echo esc_html($office_address);?></h2>
	                                <p><?php echo esc_html($office_description);?></p>
	                            </div>
	                            <div class="single-address">
	                                <i class="fa fa-map-marker"></i>
	                                <h4><?php echo esc_html($address_text);?></h4>
	                                <p><?php echo esc_html($address_name);?></p>
	                            </div>
	                            <div class="single-address">
	                                <i class="fa fa-envelope"></i>
	                                <h4><?php echo esc_html($email_text);?></h4>
	                                <p><a href="mailto:<?php echo esc_attr($email1);?>"><?php echo esc_html($email1);?></a><br><a href="mailto:<?php echo esc_attr($email2);?>"><?php echo esc_html($email2);?></a></p>
	                                <p></p>
	                            </div>
	                            <div class="single-address">
	                                <i class="fa fa-phone"></i>
	                                <h4><?php echo esc_html($phone_text);?></h4>
	                                <p> <?php echo esc_html($phone1);?></p>
	                                <p> <?php echo esc_html($phone2);?></p>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <!--/ End Contact Us -->
        	</section>
            <?php
            endif;
        }
    }

    }
}