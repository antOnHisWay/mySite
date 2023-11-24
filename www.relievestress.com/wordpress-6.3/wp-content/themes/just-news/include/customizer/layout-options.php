<?php
/**
 * WP News Header Options at Theme Customizer
 *
 * @package Just News
 * @since 1.0.0
 */

add_action( 'customize_register', 'just_news_layout_options_register' );

function just_news_layout_options_register( $wp_customize ) {
 
	/**
     * Add Layout options Panel
     *
     * @since 1.0.0
     */
    $wp_customize->add_panel(
     'just_news_layout_options_panel',
     array(
         'priority'       => 10,
         'capability'     => 'edit_theme_options',
         'theme_supports' => '',
         'title'          => __( 'Theme Layout', 'just-news' ),
     )
    );


    /**
     * Box and full width
     *
     * @since 1.0.0
     */
    $wp_customize->add_section(
    'just_news_box_full_width_section',
    array(
        'priority'       => 1,
        'panel'          => 'just_news_layout_options_panel',
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __( 'Box & Full width', 'just-news' ),
    )
    );

    $wp_customize->add_setting( 'just_news_select_bw_layout', array(
      'capability' => 'edit_theme_options',
      'default' => 'full',
      'sanitize_callback' => 'just_news_sanitize_select',
    ) );

    $wp_customize->add_control( 'just_news_select_bw_layout', array(
      'type' => 'radio',
      'section' => 'just_news_box_full_width_section', // Add a default or your own section
      'label' => __( 'Select Layout','just-news' ),
      'choices' => array(
        'full' => __( 'Full Width','just-news' ),
        'box' => __( 'Boxed width','just-news' ),
      ),
    ) );

    $wp_customize->add_setting( 'just_news_select_bw_pixel', array(
        'capability'            => 'edit_theme_options',
        'default'               => 1200,
        'sanitize_callback'     => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'just_news_select_bw_pixel', array(
        'label'                 =>  __( 'Boxed Width', 'just-news' ),
        'section'               => 'just_news_box_full_width_section',
        'settings'              => 'just_news_select_bw_pixel',
        'type'                  => 'text',
    ) );
}