<?php
/**
 * wp news Theme Customizer
 *
 * @package Just News
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function just_news_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'just_news_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'just_news_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'just_news_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function just_news_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function just_news_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function just_news_customize_preview_js() {
	wp_enqueue_script( 'just-news-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'just_news_customize_preview_js' );

/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Load customizer required panels.
 */
require get_template_directory() . '/include/customizer/header-options.php';
require get_template_directory() . '/include/customizer/color/color-customizer.php';
require get_template_directory() . '/include/customizer/layout-options.php';
require get_template_directory() . '/include/customizer/blog-options.php';
require get_template_directory() . '/include/customizer/other-options.php';
require get_template_directory() . '/include/customizer/typography.php';
require get_template_directory() . '/include/customizer/color/customizer-css.php';

require get_template_directory() . '/include/customizer/sanitize.php';
require get_template_directory() . '/include/customizer/classes.php';