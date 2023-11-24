<?php
/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Top Header section
 *
 * @since 1.0.0
 */
$wp_customize->add_section(
    'just_news_top_header_section',
    array(
        'priority'       => 5,
        'panel'          => 'just_news_header_options_panel',
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __( 'Top Header Display Settings', 'just-news' ),
        'description'    => __( 'Managed the content display at top header section.', 'just-news' ),
    )
);

/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 *Display Top Header section
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'just_news_top_header_enable',
    array(
        'default'           => 1,
        'sanitize_callback' => 'just_news_sanitize_checkbox',
    )
);

$wp_customize->add_control(
    'just_news_top_header_enable',
    array(
        'section'     => 'just_news_top_header_section',
        'label'       => __( 'Display Top header', 'just-news' ),
        'type'        => 'checkbox'
    )       
);


/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 *Display Langage Switcher section
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'just_news_top_header_lan_switcher_enable',
    array(
        'default'           => 1,
        'sanitize_callback' => 'just_news_sanitize_checkbox',
    )
);

$wp_customize->add_control(
    'just_news_top_header_lan_switcher_enable',
    array(
        'section'     => 'just_news_top_header_section',
        'label'       => __( 'Display Language Switcher', 'just-news' ),
        'type'        => 'checkbox'
    )       
);


/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 *Display Top Header Menu
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'just_news_top_header_menu_enable',
    array(
        'default'           => 1,
        'sanitize_callback' => 'just_news_sanitize_checkbox',
    )
);

$wp_customize->add_control(
    'just_news_top_header_menu_enable',
    array(
        'section'     => 'just_news_top_header_section',
        'label'       => __( 'Display Top Menu', 'just-news' ),
        'type'        => 'checkbox'
    )       
);
/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 *Display Top Header Search Icon
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'just_news_top_header_search_icon_enable',
    array(
        'default'           => 0,
        'sanitize_callback' => 'just_news_sanitize_checkbox',
    )
);

$wp_customize->add_control(
    'just_news_top_header_search_icon_enable',
    array(
        'section'     => 'just_news_top_header_section',
        'label'       => __( 'Display Search Icon', 'just-news' ),
        'type'        => 'checkbox'
    )       
);


/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 *Display Top Header Burger Menu
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'just_news_top_header_burger_menu_icon_enable',
    array(
        'default'           => 0,
        'sanitize_callback' => 'just_news_sanitize_checkbox',
    )
);

$wp_customize->add_control(
    'just_news_top_header_burger_menu_icon_enable',
    array(
        'section'     => 'just_news_top_header_section',
        'label'       => __( 'Display Burger Menu Icon', 'just-news' ),
        'type'        => 'checkbox'
    )       
);


/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 *Display Top Header Social Media
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'just_news_top_header_social_media_enable',
    array(
        'default'           => 1,
        'sanitize_callback' => 'just_news_sanitize_checkbox',
    )
);

$wp_customize->add_control(
    'just_news_top_header_social_media_enable',
    array(
        'section'     => 'just_news_top_header_section',
        'label'       => __( 'Display Social Media', 'just-news' ),
        'type'        => 'checkbox'
    )       
);



// top social media options
$wp_customize->add_setting( 'just_news_top_header_fb_url', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'esc_url_raw'
) );

$wp_customize->add_control( 'just_news_top_header_fb_url', array(
    'label'                 =>  __( 'Facebook Url', 'just-news' ),
    'section'               => 'just_news_top_header_section',
    'settings'              => 'just_news_top_header_fb_url',
    'type'                  => 'url',
) );


$wp_customize->add_setting( 'just_news_top_header_twitter_url', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'esc_url_raw'
) );

$wp_customize->add_control( 'just_news_top_header_twitter_url', array(
    'label'                 =>  __( 'Twitter Url', 'just-news' ),
    'section'               => 'just_news_top_header_section',
    'settings'              => 'just_news_top_header_twitter_url',
    'type'                  => 'url',
) );


$wp_customize->add_setting( 'just_news_top_header_instagram_url', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'esc_url_raw'
) );

$wp_customize->add_control( 'just_news_top_header_instagram_url', array(
    'label'                 =>  __( 'Instagram Url', 'just-news' ),
    'section'               => 'just_news_top_header_section',
    'settings'              => 'just_news_top_header_instagram_url',
    'type'                  => 'url',
) );


$wp_customize->add_setting( 'just_news_top_header_youtube_url', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'esc_url_raw'
) );

$wp_customize->add_control( 'just_news_top_header_youtube_url', array(
    'label'                 =>  __( 'Youtube Url', 'just-news' ),
    'section'               => 'just_news_top_header_section',
    'settings'              => 'just_news_top_header_youtube_url',
    'type'                  => 'url',
) );


$wp_customize->add_setting( 'just_news_top_header_pinterest_url', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'esc_url_raw'
) );

$wp_customize->add_control( 'just_news_top_header_pinterest_url', array(
    'label'                 =>  __( 'Pinterest Url', 'just-news' ),
    'section'               => 'just_news_top_header_section',
    'settings'              => 'just_news_top_header_pinterest_url',
    'type'                  => 'url',
) );


$wp_customize->add_setting( 'just_news_top_header_linkedin_url', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'esc_url_raw'
) );

$wp_customize->add_control( 'just_news_top_header_linkedin_url', array(
    'label'                 =>  __( 'Linkedin Url', 'just-news' ),
    'section'               => 'just_news_top_header_section',
    'settings'              => 'just_news_top_header_linkedin_url',
    'type'                  => 'url',
) );
