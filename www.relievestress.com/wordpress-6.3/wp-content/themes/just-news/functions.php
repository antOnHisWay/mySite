<?php
/**
 * wp news functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Just News
 */

if ( ! defined( 'JUST_NEWS_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'JUST_NEWS_VERSION', '1.0.0' );
}

if ( ! function_exists( 'just_news_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function just_news_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on wp news, use a find and replace
		 * to change 'just-news' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'just-news', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// Image Size
		add_image_size('just-news-540X604-thumbnail', 540, 604, true);
		add_image_size('just-news-255X180-thumbnail', 255, 180, true);
		add_image_size('just-news-350X247-thumbnail', 350, 247, true);
		add_image_size('just-news-84X84-thumbnail', 84, 84, true);
		add_image_size('just-news-445X290-thumbnail', 445, 290, true);
		add_image_size('just-news-350X196-thumbnail', 350, 196, true);
		add_image_size('just-news-635X530-thumbnail', 635, 530, false);
		add_image_size('just-news-130X105-thumbnail', 130, 105, true);
		add_image_size('just-news-469X469-thumbnail', 469, 469, true);
		add_image_size('just-news-350X245-thumbnail', 350, 245, true);
		add_image_size('just-news-350X510-thumbnail', 350, 510, true);
		add_image_size('just-news-350X240-thumbnail', 350, 240, true);
		add_image_size('just-news-320X214-thumbnail', 320, 214, true);
		add_image_size('just-news-610X335-thumbnail', 610, 335, true);
		add_image_size('just-news-290X205-thumbnail', 290, 205, true);
		add_image_size('just-news-730X480-thumbnail', 730, 480, true);
		add_image_size('just-news-240X268-thumbnail', 240, 268, true);
		add_image_size('just-news-308X345-thumbnail', 308, 345, true);
		add_image_size('just-news-538X294-thumbnail', 538, 294, true);
		add_theme_support( 'align-wide' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'responsive-embeds' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary', 'just-news' ),
				'sidemenu' => esc_html__( 'Sidemenu', 'just-news' ),
				'topmenu' => esc_html__( 'Topmenu', 'just-news' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
	
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'just_news_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'just_news_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function just_news_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'just_news_content_width', 640 );
}
add_action( 'after_setup_theme', 'just_news_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function just_news_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'just-news' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'just-news' ),
			'before_widget' => '<div id="%1$s" class="single-widget  %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget_title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar( array(
		'name'          => esc_html__( 'Frontpage Layouts Area', 'just-news' ),
		'id'            => 'frontpage-layout',
		'description'   => esc_html__( 'Add widgets here.', 'just-news' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="cat-title"><span>',
		'after_title'   => '</span></h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer widget Area', 'just-news' ),
		'id'            => 'footer-widget',
		'description'   => esc_html__( 'Add widgets here.', 'just-news' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s col-lg-3 col-md-6 col-12"><div class="single-footer">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Front Advertise widget Area', 'just-news' ),
		'id'            => 'front-ad-area',
		'description'   => esc_html__( 'Add widgets here.', 'just-news' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s advertise">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Right Side widget Area', 'just-news' ),
		'id'            => 'right-side-area',
		'description'   => esc_html__( 'Add widgets here.', 'just-news' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s advertise">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Middle Head Ad Space Widget', 'just-news' ),
		'id'            => 'middle-head-ad-space',
		'description'   => esc_html__( 'Add widgets here.', 'just-news' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s advertise text-right">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );


	register_sidebar( array(
		'name'          => esc_html__( 'Sidenav Widget Area', 'just-news' ),
		'id'            => 'sidenav-widget-area',
		'description'   => esc_html__( 'Add widgets here.', 'just-news' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s sidenav single-content">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Contact Page Area', 'just-news' ),
		'id'            => 'contact-page',
		'description'   => esc_html__( 'Add widgets here.', 'just-news' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Popup Advetisement Area', 'just-news' ),
		'id'            => 'popup-ad-area',
		'description'   => esc_html__( 'Add widgets here.', 'just-news' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s popup-adver"><div class="popup-adver-inner">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<div class="closed-btn"><button><i class="fa fa-close"></i>',
		'after_title'   => '</button></div><span class="tagline">advertisement</span>',
	) );
}

add_action( 'widgets_init', 'just_news_widgets_init' );


/**
 * Enqueue scripts and styles.
*/
require get_template_directory() . '/include/enqueues.php';

/**
 * Implement the Custom Header feature.
*/
require get_template_directory() . '/include/custom-header.php';

/**
 * Custom template tags for this theme.
*/
require get_template_directory() . '/include/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
*/
require get_template_directory() . '/include/template-functions.php';

/**
 * Customizer additions.
*/
require get_template_directory() . '/include/customizer.php';

/**
 * Navwalker for WP News
*/
require get_template_directory() . '/include/just-news-walker.php';

/**
 * Widgets for WP News
*/
require get_template_directory() . '/widgets/widgets.php';

require get_template_directory() . '/include/fonts.php';

/**
 * Load Jetpack compatibility file.
*/
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/include/jetpack.php';
}


/**
 * Admin Enqueue scripts
 */
if ( ! function_exists( 'just_news_admin_scripts' ) ) {
    function just_news_admin_scripts() {
    	wp_enqueue_media();
        wp_enqueue_script('just-news-widget', get_template_directory_uri() . '/assets/js/just-news-widgets.js');

        wp_enqueue_style('just-news-widget', get_template_directory_uri() . '/assets/css/just-news-widget.css', array(), '1.0.0');

    }
}

add_action('admin_enqueue_scripts', 'just_news_admin_scripts');



/*Method to load latest posts*/
function just_news_latest_posts( $posts = 3 ) 
{
	$the_query = new WP_Query('showposts='. $posts .'&orderby=post_date&order=desc');
	$recent_post_num = 1;		
	while ($the_query->have_posts()) : $the_query->the_post(); 
	$categories = get_the_category(get_the_ID());

	?>
	<div class="single-menu-post">
		<div class="post-img">
			<?php the_post_thumbnail();?>
		</div>
		<div class="post-info">
			<?php if( isset($categories) && !empty($categories) ){?>
			<div class="cat-name"><i class="fa fa-list-alt"></i>
			<?php echo esc_html($categories[0]->name);?>
			</div>
			<?php }?>
			<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
		</div>
	</div>

	
	<?php
	endwhile; 
}

function just_news_popular_posts( $posts = 3 ) {
	$posts_args = array(
		'post_type'			=> 'post',
		'posts_per_page'	=> $posts,
	 	'orderby'       	=> 'comment_count',
		'order'				=> 'DESC'
	);
	$popular = new WP_Query( $posts_args );
	$popular_post_num = 1;
	while ($popular->have_posts()) : $popular->the_post();
		$categories = get_the_category(get_the_ID());
	?>

	<div class="single-menu-post">
		<div class="post-img">
			<?php the_post_thumbnail();?>
		</div>
		<div class="post-info">
			<?php if( isset($categories) && !empty($categories) ){?>
			<div class="cat-name">
				<i class="fa fa-list-alt"></i><?php echo esc_html($categories[0]->name); ?>
			</div>
			<?php }?>
			<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
		</div>
	</div>

	<?php
	endwhile; 
}

function just_news_excerpt_length( $length ) {
	$excerptlength = absint(get_theme_mod('just_news_excerpt_limit',10));
    return $excerptlength;
}
add_filter( 'excerpt_length', 'just_news_excerpt_length', 999 );


if( ! function_exists( 'just_news_all_categories' ) ) {
	
	function just_news_all_categories() {

		
		$all_terms = get_terms( 'category', array(
			'number'     => '',
            'orderby'    => 'name',
            'order'      => 'ASC',
            'hide_empty' => true
		) );

		return $all_terms;
	}
}


if( ! function_exists( 'just_news_all_tags' ) ) {
	
	function just_news_all_tags() {

		
		$all_terms = get_terms( 'post_tag', array(
			'number'     => '',
            'orderby'    => 'name',
            'order'      => 'ASC',
            'hide_empty' => true
		) );

		return $all_terms;
	}
}



//To keep the count accurate, lets get rid of prefetching
function just_news_widgets_scripts( $hook ) {
    if ( 'widgets.php' != $hook ) {
        return;
    }
    wp_enqueue_style( 'wp-color-picker' );        
    wp_enqueue_script( 'wp-color-picker' ); 
    wp_enqueue_script('just-news-picker', get_template_directory_uri() . '/js/cm-widgets.js', array( 'jquery' ) );
}
add_action( 'admin_enqueue_scripts', 'just_news_widgets_scripts' );


/**
 * Run ajax request.
 */
if ( ! function_exists('just_news_wp_pages_plucker') ) :

	/**
	 * Sending pages with ids
	 */
	function just_news_wp_pages_plucker()
	{
		$pages = get_pages(
			array (
				'parent'  => 0, // replaces 'depth' => 1,
			)
		);

		$ids = wp_list_pluck( $pages, 'post_title', 'ID' );

		return wp_send_json($ids);
	}

endif;
add_action( 'wp_ajax_just_news_wp_pages_plucker', 'just_news_wp_pages_plucker' );



/* Word read count*/
if (!function_exists('just_news_count_content_words')) :
    /**
     * @param $content
     *
     * @return string
     */
    function just_news_count_content_words($post_id)
    {
            $content = apply_filters('the_content', get_post_field('post_content', $post_id));
            $read_words = get_theme_mod('just_news_min_read_number','150');
            $decode_content = html_entity_decode($content);
            $filter_shortcode = do_shortcode($decode_content);
            $strip_tags = wp_strip_all_tags($filter_shortcode, true);
            $count = str_word_count($strip_tags);
            $word_per_min = (absint($count) / $read_words);
            $word_per_min = ceil($word_per_min);

           if ( absint($word_per_min) > 0) {
                $word_count_strings = sprintf(_n('%s min to read', '%s min to read', number_format_i18n($word_per_min),'just-news'), number_format_i18n($word_per_min));
                if ('post' == get_post_type($post_id)):
                    echo '<span class="date"><a><i class="fa fa-book"></i> ';
                    echo esc_html($word_count_strings);
                    echo '</a></span>';
                endif;
            }
    }

endif;


/**
* Prints HTML with meta information for the categories, tags and comments.
*/
function just_news_post_comment() {

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( __( '0 ', 'just-news' ), __( '1', 'just-news' ), __( '% ', 'just-news' ) ); 
		echo  '</span>';
	}
}


function just_news_template_call() {
    include_once(get_template_directory().'/ajax-template/ajax.php');
    die();
}
add_action('wp_ajax_nopriv_just_news_template_call', 'just_news_template_call');
add_action('wp_ajax_just_news_template_call', 'just_news_template_call');
