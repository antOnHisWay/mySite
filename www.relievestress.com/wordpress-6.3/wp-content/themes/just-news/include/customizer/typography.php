<?php

add_action( 'customize_register', 'just_news_typography_settings_register' );

function just_news_typography_settings_register( $wp_customize ) {

  // Typography for theme
  $wp_customize->add_section('typography_theme_option' , array(
      'priority' => 50,
      'title' => __('Typography Options','just-news'),
  ));


 $wp_customize->add_setting( 'google_fontfamily_setting', array(
    'capability'        => 'edit_theme_options',
    'default'           => 'Roboto',
    'sanitize_callback' => 'sanitize_text_field'
  ) );

  $wp_customize->add_control( 'google_fontfamily_setting', array(
    'settings'              => 'google_fontfamily_setting',
    'label'                 =>  __( 'Select Font Family', 'just-news' ),
    'section'               => 'typography_theme_option',
    'type'                  => 'select',
    'choices'               => just_news_get_fonts(),
  ) );

  $wp_customize->add_setting( 'section_title_google_fontfamily_setting', array(
    'capability'        => 'edit_theme_options',
    'default'           => 'Roboto',
    'sanitize_callback' => 'sanitize_text_field'
  ) );

  $wp_customize->add_control( 'section_title_google_fontfamily_setting', array(
    'settings'              => 'section_title_google_fontfamily_setting',
    'label'                 =>  __( 'Section Title Font', 'just-news' ),
    'section'               => 'typography_theme_option',
    'type'                  => 'select',
    'choices'               => just_news_get_fonts(),
  ) );

   $wp_customize->add_setting( 'section_description_google_fontfamily_setting', array(
    'capability'        => 'edit_theme_options',
    'default'           => 'Roboto',
    'sanitize_callback' => 'sanitize_text_field'
  ) );

  $wp_customize->add_control( 'section_description_google_fontfamily_setting', array(
    'settings'              => 'section_description_google_fontfamily_setting',
    'label'                 =>  __( 'Section Description Font', 'just-news' ),
    'section'               => 'typography_theme_option',
    'type'                  => 'select',
    'choices'               => just_news_get_fonts(),
  ) );
}