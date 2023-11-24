<?php
/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Middle Header Ad
 *
 * @since 1.0.0
 */
$wp_customize->add_section(
    'just_news_middle_header',
    array(
        'priority'       => 5,
        'panel'          => 'just_news_header_options_panel',
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __( 'Middle Header Setting', 'just-news' )
    )
);


/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 *Display Latest News Button
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'just_news_middle_header_date_enable',
    array(
        'default'           => 1,
        'sanitize_callback' => 'just_news_sanitize_checkbox',
    )
);

$wp_customize->add_control(
    'just_news_middle_header_date_enable',
    array(
        'section'     => 'just_news_middle_header',
        'label'       => __( 'Display Date & Time', 'just-news' ),
        'type'        => 'checkbox'
    )       
);

