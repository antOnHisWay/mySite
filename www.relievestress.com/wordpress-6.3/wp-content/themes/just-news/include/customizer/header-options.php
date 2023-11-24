<?php
/**
 * WP News Header Options at Theme Customizer
 *
 * @package Just News
 * @since 1.0.0
 */

add_action( 'customize_register', 'just_news_header_options_register' );

function just_news_header_options_register( $wp_customize ) {
 
	/**
     * Add Header options Panel
     *
     * @since 1.0.0
     */
    $wp_customize->add_panel(
     'just_news_header_options_panel',
     array(
         'priority'       => 10,
         'capability'     => 'edit_theme_options',
         'theme_supports' => '',
         'title'          => __( 'Header Options', 'just-news' ),
     )
    );

 
    require get_template_directory() . '/include/customizer/header/top-header-display-section.php';

    require get_template_directory() . '/include/customizer/header/middle-header.php';

}