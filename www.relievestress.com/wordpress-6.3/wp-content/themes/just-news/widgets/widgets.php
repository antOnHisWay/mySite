<?php
/**
* @package Just News
=========================
		WIDGET CLASS
=========================
*/

// widget Footer
require_once trailingslashit( get_template_directory() ) . '/widgets/footer-widgets/widget-footer-about.php';

// widget Common
require_once trailingslashit( get_template_directory() ) . '/widgets/common-widgets/widget-popular-posts.php';
require_once trailingslashit( get_template_directory() ) . '/widgets/common-widgets/widget-breaking-news.php';

require_once trailingslashit( get_template_directory() ) . '/widgets/front-widgets/widget-front-layout9.php';
require_once trailingslashit( get_template_directory() ) . '/widgets/front-widgets/widget-front-layout10.php';
require_once trailingslashit( get_template_directory() ) . '/widgets/front-widgets/widget-front-layout11.php';
require_once trailingslashit( get_template_directory() ) . '/widgets/front-widgets/widget-front-layout12.php';


// widget Template
require_once trailingslashit( get_template_directory() ) . '/widgets/template-widgets/widget-contact.php';

// Register Widget
if ( ! function_exists( 'just_news_register_widget' ) ) {

    /**
     * Load widget.
     *
     * @since 1.0.0
    */
    function just_news_register_widget() {

        // Footer Widgets
        register_widget( 'Just_News_Footer_About_Widget' );

        // Commom WIdgets
        register_widget( 'Just_News_Popular_Posts_Widget' );
        register_widget( 'Just_News_Breaking_News' );


        register_widget( 'Just_News_Block_Layout_Nine' );
        register_widget( 'Just_News_Block_Layout_Ten' );
        register_widget( 'Just_News_FrontLayout_Eleven' );
        register_widget( 'Just_News_Block_Layout_Twelve' );

        // Template widgets
        register_widget( 'Just_News_Contact_Template_Widget' );
    }
}

add_action( 'widgets_init', 'just_news_register_widget' );