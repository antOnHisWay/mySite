<?php

add_action( 'customize_register', 'just_news_color_settings_register' );

function just_news_color_settings_register( $wp_customize ) {

   /**
   * Primary Theme Color
   */
   $wp_customize->add_setting( 'just_news_primary_theme_color_setting', array(
      'capability'        => 'edit_theme_options',
      'default'           => '#000000',
      'sanitize_callback' => 'sanitize_hex_color'
  	) );

   	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'just_news_primary_theme_color_setting',array(
          'label'                 =>  __( 'Primary Theme Color', 'just-news' ),
          'section'               => 'colors',
          'type'                  => 'color',
          'priority'              => 0,
          'settings' 			  => 'just_news_primary_theme_color_setting',
      ) )
   	);


    /**
    * Seconday Theme Color
    */
    $wp_customize->add_setting( 'just_news_secondary_theme_color_setting', array(
      'capability'        => 'edit_theme_options',
      'default'           => '#0dbe98',
      'sanitize_callback' => 'sanitize_hex_color'
  	) );

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'just_news_secondary_theme_color_setting',array(
      'label'                 =>  __( 'Theme Color', 'just-news' ),
      'section'               => 'colors',
      'type'                  => 'color',
      'priority'              => 0,
      'settings' => 'just_news_secondary_theme_color_setting',
  	) ));


    /**
    * Top Header BG Color
    */
    $wp_customize->add_setting( 'just_news_top_header_bg_color_setting', array(
      'capability'        => 'edit_theme_options',
      'default'           => '#fff',
      'sanitize_callback' => 'sanitize_hex_color'
    ) );

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'just_news_top_header_bg_color_setting',array(
      'label'                 =>  __( 'Top Header Background Color', 'just-news' ),
      'section'               => 'colors',
      'type'                  => 'color',
      'priority'              => 40,
      'settings' => 'just_news_top_header_bg_color_setting',
    ) ));

     $wp_customize->add_setting( 'just_news_top_header_text_color_setting', array(
      'capability'        => 'edit_theme_options',
      'default'           => '#555',
      'sanitize_callback' => 'sanitize_hex_color'
    ) );

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'just_news_top_header_text_color_setting',array(
      'label'                 =>  __( 'Top Header Text Color', 'just-news' ),
      'section'               => 'colors',
      'type'                  => 'color',
      'priority'              => 40,
      'settings' => 'just_news_top_header_text_color_setting',
    ) ));

    /**
    * Middle Header BG Color
    */
    $wp_customize->add_setting( 'just_news_middle_header_bg_color_setting', array(
      'capability'        => 'edit_theme_options',
      'default'           => '#fff',
      'sanitize_callback' => 'sanitize_hex_color'
    ) );

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'just_news_middle_header_bg_color_setting',array(
      'label'                 =>  __( 'Middle Header Background Color', 'just-news' ),
      'section'               => 'colors',
      'type'                  => 'color',
      'priority'              => 40,
      'settings' => 'just_news_middle_header_bg_color_setting',
    ) ));


    /**
    * Body BG Color
    */
    $wp_customize->add_setting( 'just_news_body_bg_color_setting', array(
      'capability'        => 'edit_theme_options',
      'default'           => '#fff',
      'sanitize_callback' => 'sanitize_hex_color'
    ) );

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'just_news_body_bg_color_setting',array(
      'label'                 =>  __( 'Body Background Color', 'just-news' ),
      'section'               => 'colors',
      'type'                  => 'color',
      'priority'              => 40,
      'settings' => 'just_news_body_bg_color_setting',
    ) ));


    $wp_customize->add_setting( 'just_news_body_text_color_setting', array(
      'capability'        => 'edit_theme_options',
      'default'           => '#0dbe98',
      'sanitize_callback' => 'sanitize_hex_color'
    ) );

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'just_news_body_text_color_setting',array(
      'label'                 =>  __( 'Body Text Color', 'just-news' ),
      'section'               => 'colors',
      'type'                  => 'color',
      'priority'              => 40,
      'settings' => 'just_news_body_text_color_setting',
    ) ));


    /**
    * Footer BG Color
    */
    $wp_customize->add_setting( 'just_news_footer_bg_color_setting', array(
      'capability'        => 'edit_theme_options',
      'default'           => '#0dbe98',
      'sanitize_callback' => 'sanitize_hex_color'
    ) );

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'just_news_footer_bg_color_setting',array(
      'label'                 =>  __( 'Footer Background Color', 'just-news' ),
      'section'               => 'colors',
      'type'                  => 'color',
      'priority'              => 40,
      'settings' => 'just_news_footer_bg_color_setting',
    ) ));


    $wp_customize->add_setting( 'just_news_footer_text_color_setting', array(
      'capability'        => 'edit_theme_options',
      'default'           => '#ccc',
      'sanitize_callback' => 'sanitize_hex_color'
    ) );

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'just_news_footer_text_color_setting',array(
      'label'                 =>  __( 'Footer Text Color', 'just-news' ),
      'section'               => 'colors',
      'type'                  => 'color',
      'priority'              => 40,
      'settings' => 'just_news_footer_text_color_setting',
    ) ));



    $wp_customize->add_setting( 'just_news_trending_bg_color_setting', array(
      'capability'        => 'edit_theme_options',
      'default'           => '#000000',
      'sanitize_callback' => 'sanitize_hex_color'
    ) );

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'just_news_trending_bg_color_setting',array(
      'label'                 =>  __( 'Trending Tags Background Color', 'just-news' ),
      'section'               => 'colors',
      'type'                  => 'color',
      'priority'              => 40,
      'settings' => 'just_news_trending_bg_color_setting',
    ) ));


    $wp_customize->add_setting( 'just_news_trending_text_color_setting', array(
      'capability'        => 'edit_theme_options',
      'default'           => '#FFF',
      'sanitize_callback' => 'sanitize_hex_color'
    ) );

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'just_news_trending_text_color_setting',array(
      'label'                 =>  __( 'Trending Tags Text Color', 'just-news' ),
      'section'               => 'colors',
      'type'                  => 'color',
      'priority'              => 40,
      'settings' => 'just_news_trending_text_color_setting',
    ) ));

}