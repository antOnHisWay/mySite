<?php

/**
 * Other Settings panel at Theme Customizer
 *
 * @package  Trend_News
 * @since 1.0.0
 */
add_action( 'customize_register', 'just_news_other_settings_register' );

function just_news_other_settings_register( $wp_customize ) {

/**
 * Add Other Settings Panel
 *
 * @since 1.0.0
 */
$wp_customize->add_panel(
    'just_news_other_settings_panel',
    array(
        'priority'       => 15,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __( 'Other Options', 'just-news' ),
    )
);


/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Footer Section
 *
 * @since 1.0.0
 */
$wp_customize->add_section(
    'just_news_footer_area_section',
    array(
        'priority'       => 1,
        'panel'          => 'just_news_other_settings_panel',
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __( 'Footer Settings', 'just-news' ),
        'description'    => __( 'Choose this options to display at Footer  display section', 'just-news' ),
    )
);


// Display Footer Top Area
$wp_customize->add_setting(
'just_news_footer_area_enable',
array(
  'default'           => 1,
  'sanitize_callback' => 'just_news_sanitize_checkbox',
)
);

$wp_customize->add_control(
'just_news_footer_area_enable',
array(
  'section'     => 'just_news_footer_area_section',
  'label'       => __( 'Display Footer Top Area', 'just-news' ),
  'type'        => 'checkbox'
)       
);

// Display Footer Bottom Area
$wp_customize->add_setting(
'just_news_footer_bottom_enable',
array(
  'default'           => 1,
  'sanitize_callback' => 'just_news_sanitize_checkbox',
)
);

$wp_customize->add_control(
'just_news_footer_bottom_enable',
array(
  'section'     => 'just_news_footer_area_section',
  'label'       => __( 'Display Footer Bottom Area', 'just-news' ),
  'type'        => 'checkbox'
)       
);


$wp_customize->add_setting( 'just_news_footer_copyright_text', array(
    'capability'            => 'edit_theme_options',
    'default'               => '© All Right Reserved WP News 2020',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'just_news_footer_copyright_text', array(
    'label'                 =>  __( 'Footer Copyright Text', 'just-news' ),
    'section'               => 'just_news_footer_area_section',
    'settings'              => 'just_news_footer_copyright_text',
    'type'                  => 'text',
) );

$wp_customize->add_setting( 'just_news_footer_company_text', array(
    'capability'            => 'edit_theme_options',
    'default'               => 'Theme Just News By WP News Theme',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'just_news_footer_company_text', array(
    'label'                 =>  __( 'Footer Company and theme Text', 'just-news' ),
    'section'               => 'just_news_footer_area_section',
    'settings'              => 'just_news_footer_company_text',
    'type'                  => 'text',
) );

/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * other Section
 *
 * @since 1.0.0
 */
$wp_customize->add_section(
    'just_news_other_settings_section',
    array(
        'priority'       => 1,
        'panel'          => 'just_news_other_settings_panel',
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __( 'Other Settings', 'just-news' ),
      
    )
);


$wp_customize->add_setting( 'just_news_excerpt_limit', array(
    'capability'            => 'edit_theme_options',
    'default'               => 10,
    'sanitize_callback'     => 'absint'
) );

$wp_customize->add_control( 'just_news_excerpt_limit', array(
    'label'                 =>  __( 'Excerpt Limit', 'just-news' ),
    'section'               => 'just_news_other_settings_section',
    'settings'              => 'just_news_excerpt_limit',
    'type'                  => 'text',
) );


$wp_customize->add_setting( 'just_news_min_read_number', array(
    'capability'            => 'edit_theme_options',
    'default'               => 100,
    'sanitize_callback'     => 'absint'
  ) );

  $wp_customize->add_control( 'just_news_min_read_number', array(
    'label'                 =>  __( 'Number of word per minute read ', 'just-news' ),
    'section'               => 'just_news_other_settings_section',
    'type'                  => 'number',
    'settings'              => 'just_news_min_read_number',
  ) );
}