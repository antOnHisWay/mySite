<?php

/**
 * Blog Settings panel at Theme Customizer
 *
 * @package  Trend_News
 * @since 1.0.0
 */
add_action( 'customize_register', 'just_news_blog_settings_register' );

function just_news_blog_settings_register( $wp_customize ) {

/**
 * Add Blog Settings Panel
 *
 * @since 1.0.0
 */
$wp_customize->add_panel(
    'just_news_blog_settings_panel',
    array(
        'priority'       => 15,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __( 'Blog Options', 'just-news' ),
    )
);


/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Blog Archive Section
 *
 * @since 1.0.0
 */
$wp_customize->add_section(
    'just_news_blog_archive_options_section',
    array(
        'priority'       => 1,
        'panel'          => 'just_news_blog_settings_panel',
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __( 'Blog post/page/archive/search layout', 'just-news' ),
        'description'    => __( 'Choose this options to display at Blog post display section', 'just-news' ),
    )
);


$wp_customize->add_setting('just_news_blog_archive_layout_settings', 
    array(
        'sanitize_callback' => 'just_news_sanitize_select',
        'default'           => 'right'
    )
);

$wp_customize->add_control('just_news_blog_archive_layout_settings', 
    array(
        'label'             => __( 'Blog layouts settings', 'just-news' ),
        'section'           => 'just_news_blog_archive_options_section',
        'type'              => 'radio',
        'choices'           => array(
            'right'         => esc_html__('Right Sidebar','just-news'),
            'left'         => esc_html__('Left Sidebar','just-news'),
            'none'         => esc_html__('None','just-news'),
        ),
        'settings'          => 'just_news_blog_archive_layout_settings'
    ) 
);

// Display Archive Category name
$wp_customize->add_setting(
'just_news_archive_category_enable',
array(
  'default'           => 1,
  'sanitize_callback' => 'just_news_sanitize_checkbox',
)
);

$wp_customize->add_control(
'just_news_archive_category_enable',
array(
  'section'     => 'just_news_blog_archive_options_section',
  'label'       => __( 'Display Category Name', 'just-news' ),
  'type'        => 'checkbox'
)       
);

// Display author
$wp_customize->add_setting(
'just_news_archive_author_enable',
array(
  'default'           => 1,
  'sanitize_callback' => 'just_news_sanitize_checkbox',
)
);

$wp_customize->add_control(
'just_news_archive_author_enable',
array(
  'section'     => 'just_news_blog_archive_options_section',
  'label'       => __( 'Display author detail', 'just-news' ),
  'type'        => 'checkbox'
)       
);

// Display postdate
$wp_customize->add_setting(
  'just_news_archive_postdate_enable',
  array(
    'default'           => 1,
    'sanitize_callback' => 'just_news_sanitize_checkbox',
  )
);

$wp_customize->add_control(
  'just_news_archive_postdate_enable',
  array(
    'section'     => 'just_news_blog_archive_options_section',
    'label'       => __( 'Display post date', 'just-news' ),
    'type'        => 'checkbox'
  )       
);

// Display Comment Number
$wp_customize->add_setting(
'just_news_archive_commentno_enable',
array(
  'default'           => 1,
  'sanitize_callback' => 'just_news_sanitize_checkbox',
)
);

$wp_customize->add_control(
'just_news_archive_commentno_enable',
array(
  'section'     => 'just_news_blog_archive_options_section',
  'label'       => __( 'Display Comment Number', 'just-news' ),
  'type'        => 'checkbox'
)       
);

/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Blog Category Section
 *
 * @since 1.0.0
 */
$wp_customize->add_section(
    'just_news_blog_category_options_section',
    array(
        'priority'       => 1,
        'panel'          => 'just_news_blog_settings_panel',
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __( 'Blog/News Category layout', 'just-news' ),
        'description'    => __( 'Choose this options to display at Blog/Category post display section', 'just-news' ),
    )
);


$wp_customize->add_setting('just_news_blog_category_layout_settings', 
    array(
        'sanitize_callback' => 'just_news_sanitize_select',
        'default'           => 'left'
    )
);

$wp_customize->add_control('just_news_blog_category_layout_settings', 
    array(
        'label'             => __( 'Category layouts settings', 'just-news' ),
        'section'           => 'just_news_blog_category_options_section',
        'type'              => 'radio',
        'choices'           => array(
            'right'         => esc_html__('Right Sidebar','just-news'),
            'left'         => esc_html__('Left Sidebar','just-news'),
            'none'         => esc_html__('None','just-news'),
        ),
        'settings'          => 'just_news_blog_category_layout_settings'
    ) 
);


// Display Archive Category name
$wp_customize->add_setting(
'just_news_category_name_enable',
array(
  'default'           => 1,
  'sanitize_callback' => 'just_news_sanitize_checkbox',
)
);

$wp_customize->add_control(
'just_news_category_name_enable',
array(
    'section'     => 'just_news_blog_category_options_section',
    'label'       => __( 'Display Category Name', 'just-news' ),
    'type'        => 'checkbox'
  )       
);

// Display author
$wp_customize->add_setting(
'just_news_category_author_enable',
array(
    'default'           => 1,
    'sanitize_callback' => 'just_news_sanitize_checkbox',
  )
);

$wp_customize->add_control(
'just_news_category_author_enable',
array(
    'section'     => 'just_news_blog_category_options_section',
    'label'       => __( 'Display author detail', 'just-news' ),
    'type'        => 'checkbox'
  )       
);


// Display postdate
$wp_customize->add_setting(
  'just_news_category_postdate_enable',
  array(
    'default'           => 1,
    'sanitize_callback' => 'just_news_sanitize_checkbox',
  )
);

$wp_customize->add_control(
  'just_news_category_postdate_enable',
  array(
    'section'     => 'just_news_blog_category_options_section',
    'label'       => __( 'Display post date', 'just-news' ),
    'type'        => 'checkbox'
  )       
);

// Display Comment Number
$wp_customize->add_setting(
'just_news_category_commentno_enable',
array(
  'default'           => 1,
  'sanitize_callback' => 'just_news_sanitize_checkbox',
)
);

$wp_customize->add_control(
'just_news_category_commentno_enable',
array(
  'section'     => 'just_news_blog_category_options_section',
  'label'       => __( 'Display Comment Number', 'just-news' ),
  'type'        => 'checkbox'
)       
);
/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Blog Single Section
 *
 * @since 1.0.0
 */
$wp_customize->add_section(
    'just_news_blog_single_options_section',
    array(
        'priority'       => 2,
        'panel'          => 'just_news_blog_settings_panel',
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __( 'Single page/post layout', 'just-news' ),
        'description'    => __( 'Choose this options to display single post/page', 'just-news' ),
    )
);


$wp_customize->add_setting('just_news_blog_single_layout_settings', 
    array(
        'sanitize_callback' => 'just_news_sanitize_select',
        'default'           => 'right',
    )
);

$wp_customize->add_control('just_news_blog_single_layout_settings', 
    array(
        'label'             => __( 'Single page/post layouts', 'just-news' ),
        'section'           => 'just_news_blog_single_options_section',
        'type'              => 'select',
        'choices'           => array(
                'right'         => esc_html__('Right sidebar','just-news'),
                'left'         => esc_html__('Left sidebar','just-news'),
                'none'         => esc_html__('No sidebar','just-news'),
     ),
        'settings'          => 'just_news_blog_single_layout_settings'
    ) 
);


// Display author detail 
$wp_customize->add_setting(
  'just_news_singlepage_author_enable',
  array(
  'default'           => 1,
  'sanitize_callback' => 'just_news_sanitize_checkbox',
  )
);

$wp_customize->add_control(
  'just_news_singlepage_author_enable',
  array(
    'section'     => 'just_news_blog_single_options_section',
    'label'       => __( 'Display author detail', 'just-news' ),
    'type'        => 'checkbox'
  )       
);

  // Display post date detail 
  $wp_customize->add_setting(
    'just_news_singlepage_postdate_enable',
    array(
    'default'           => 1,
    'sanitize_callback' => 'just_news_sanitize_checkbox',
    )
  );

  $wp_customize->add_control(
  'just_news_singlepage_postdate_enable',
  array(
    'section'     => 'just_news_blog_single_options_section',
    'label'       => __( 'Display post date', 'just-news' ),
    'type'        => 'checkbox'
  )       
  );
  
  // Display no of comment detail 
  $wp_customize->add_setting(
    'just_news_singlepage_commentno_enable',
    array(
    'default'           => 1,
    'sanitize_callback' => 'just_news_sanitize_checkbox',
    )
  );

  $wp_customize->add_control(
  'just_news_singlepage_commentno_enable',
  array(
    'section'     => 'just_news_blog_single_options_section',
    'label'       => __( 'Display comment number', 'just-news' ),
    'type'        => 'checkbox'
  )       
  );
    // Display views
    $wp_customize->add_setting(
      'just_news_singlepage_view_enable',
      array(
      'default'           => 1,
      'sanitize_callback' => 'just_news_sanitize_checkbox',
      )
    );
  
    $wp_customize->add_control(
    'just_news_singlepage_view_enable',
    array(
      'section'     => 'just_news_blog_single_options_section',
      'label'       => __( 'Display view number', 'just-news' ),
      'type'        => 'checkbox'
    )       
    );


     // Display time ago
    $wp_customize->add_setting(
      'just_news_singlepage_timeago_enable',
      array(
      'default'           => 1,
      'sanitize_callback' => 'just_news_sanitize_checkbox',
      )
    );
  
    $wp_customize->add_control(
    'just_news_singlepage_timeago_enable',
    array(
      'section'     => 'just_news_blog_single_options_section',
      'label'       => __( 'Display time ago post', 'just-news' ),
      'type'        => 'checkbox'
    )       
    );


    // Display time to read
    $wp_customize->add_setting(
      'just_news_singlepage_timetoread_enable',
      array(
      'default'           => 1,
      'sanitize_callback' => 'just_news_sanitize_checkbox',
      )
    );
  
    $wp_customize->add_control(
    'just_news_singlepage_timetoread_enable',
    array(
      'section'     => 'just_news_blog_single_options_section',
      'label'       => __( 'Display time to read', 'just-news' ),
      'type'        => 'checkbox'
    )       
    );

    // Display time to read
    $wp_customize->add_setting(
      'just_news_singlepage_ldbutton_enable',
      array(
      'default'           => 1,
      'sanitize_callback' => 'just_news_sanitize_checkbox',
      )
    );
  
    $wp_customize->add_control(
    'just_news_singlepage_ldbutton_enable',
    array(
      'section'     => 'just_news_blog_single_options_section',
      'label'       => __( 'Display like & dislike', 'just-news' ),
      'type'        => 'checkbox'
    )       
    );
}