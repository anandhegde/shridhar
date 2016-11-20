<?php
/**
 * crucible functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package crucible
 */

if ( ! function_exists( 'crucible_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function crucible_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on crucible, use a find and replace
	 * to change 'crucible' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'crucible', get_template_directory() . '/languages' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'crucible' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'crucible_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // crucible_setup
add_action( 'after_setup_theme', 'crucible_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function crucible_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'crucible_content_width', 640 );
}
add_action( 'after_setup_theme', 'crucible_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function crucible_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'crucible' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'crucible_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function crucible_scripts() {
	//wp_enqueue_style( 'crucible-style', get_stylesheet_uri() );
	if(is_page('about') || is_page('portfolio') || is_page('clients') || is_page('adfilmsnpromos') || is_page('corporatefilms') || is_page('documentaryfilms') || is_page('telefilmsnseries'))
	{
		wp_enqueue_style( 'crucible-grid', get_template_directory_uri() . '/css/grid.css' );

		wp_enqueue_style( 'crucible-jquery.fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css' );

		wp_enqueue_style( 'crucible-jquery.fancybox-buttons', get_template_directory_uri() . '/css/jquery.fancybox-buttons.css' );

		wp_enqueue_style( 'crucible-style', get_template_directory_uri() . '/css/style.css', array(), '20161120', false );

		wp_enqueue_script( 'crucible-jquery', get_template_directory_uri() . '/js/jquery.js', array(), '20151115', true );

		wp_enqueue_script( 'crucible-jquery-1.11.2', get_template_directory_uri() . '/js/jquery-1.11.2.min.js', array(), '20151115', true );

		wp_enqueue_script( 'crucible-jquery-migrate-1.2.1', get_template_directory_uri() . '/js/jquery-migrate-1.2.1.js', array(), '20151115', true );

		wp_enqueue_script( 'crucible-fancybox-pack', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array(), '20151115', true );

		wp_enqueue_script( 'crucible-fancybox-buttons', get_template_directory_uri() . '/js/jquery.fancybox-buttons.js', array(), '20151115', true );

		wp_enqueue_script( 'crucible-fancybox-media', get_template_directory_uri() . '/js/jquery.fancybox-media.js', array(), '20151115', true );

		wp_enqueue_script( 'crucible-wow', get_template_directory_uri() . '/js/wow/wow.js', array(), '20151115', true );
	}
	else if(is_page('contact'))
	{
		wp_enqueue_style( 'crucible-grid', get_template_directory_uri() . '/css/grid.css' );

		wp_enqueue_style( 'crucible-style', get_template_directory_uri() . '/css/style.css', array(), '20161120', false );

		wp_enqueue_script( 'crucible-jquery', get_template_directory_uri() . '/js/jquery.js', array(), '20151115', true );

		wp_enqueue_script( 'crucible-jquery-1.11.2', get_template_directory_uri() . '/js/jquery-1.11.2.min.js', array(), '20151115', true );

		wp_enqueue_script( 'crucible-jquery-migrate-1.2.1', get_template_directory_uri() . '/js/jquery-migrate-1.2.1.js', array(), '20151115', true );

		wp_enqueue_script( 'crucible-wow', get_template_directory_uri() . '/js/wow/wow.js', array(), '20151115', true );
	}
	else
	{
		wp_enqueue_style( 'crucible-grid', get_template_directory_uri() . '/css/grid.css' );

		wp_enqueue_style( 'crucible-camera', get_template_directory_uri() . '/css/camera.css' );

		wp_enqueue_style( 'crucible-jquery.fancybox-buttons', get_template_directory_uri() . '/css/jquery.fancybox-buttons.css' );

		wp_enqueue_style( 'crucible-jquery.fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css' );

		wp_enqueue_style( 'crucible-style', get_template_directory_uri() . '/css/style.css', array(), '20161120', false );

		wp_enqueue_script( 'crucible-jquery', get_template_directory_uri() . '/js/jquery.js', array(), '20151115', true );

		wp_enqueue_script( 'crucible-jquery-1.11.2', get_template_directory_uri() . '/js/jquery-1.11.2.min.js', array(), '20151115', true );

		wp_enqueue_script( 'crucible-jquery-migrate-1.2.1', get_template_directory_uri() . '/js/jquery-migrate-1.2.1.js', array(), '20151115', true );

		wp_enqueue_script( 'crucible-camerajs', get_template_directory_uri() . '/js/camera.js', array(), '20151115', true );

		wp_enqueue_script( 'crucible-fancybox-pack', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array(), '20151115', true );

		wp_enqueue_script( 'crucible-fancybox-buttons', get_template_directory_uri() . '/js/jquery.fancybox-buttons.js', array(), '20151115', true );

		wp_enqueue_script( 'crucible-fancybox-media', get_template_directory_uri() . '/js/jquery.fancybox-media.js', array(), '20151115', true );

		wp_enqueue_script( 'crucible-jquery-responsive-tabs', get_template_directory_uri() . '/js/jquery.responsive.tabs.js', array(), '20151115', true );

		wp_enqueue_script( 'crucible-jquery-migrate-1.2.1', get_template_directory_uri() . '/js/jquery-migrate-1.2.1.js', array(), '20151115', true );

		wp_enqueue_script( 'crucible-jquery-mobile-customized', get_template_directory_uri() . '/js/jquery.mobile.customized.min.js', array(), '20151115', true );

		wp_enqueue_script( 'crucible-wow', get_template_directory_uri() . '/js/wow/wow.js', array(), '20151115', true );
	}
	
	wp_enqueue_script( 'crucible-script', get_template_directory_uri() . '/js/script.js', array(), '20151115', true );

	wp_enqueue_script( 'crucible-device', get_template_directory_uri() . '/js/device.min.js', array(), '20151115', true );
	wp_enqueue_script( 'crucible-custom', get_template_directory_uri() . '/js/custom.js', array(), '20160822', true );
	wp_enqueue_script( 'crucible-smooth-scroll', get_template_directory_uri() . '/js/jquery.simplr.smoothscroll.min.js', array(), '20160822', true );
	//wp_enqueue_script( 'crucible-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	//wp_enqueue_script( 'crucible-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'crucible_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load client info 
*/
require get_template_directory(). '/inc/clients.php';

/**
 * Load HomePageImage info
*/
require get_template_directory(). '/inc/homePageImage.php';

/**
 * Load corporate films info
*/
require get_template_directory(). '/inc/corporatefilms.php';
/**
 * Load ad films info
*/
require get_template_directory(). '/inc/adfilms.php';
/**
 * Load documentary films info
*/
require get_template_directory(). '/inc/documentaryfilms.php';
/**
 * Load tele films info
*/
require get_template_directory(). '/inc/telefilms.php';

require get_template_directory(). '/inc/recentworks.php';

require get_template_directory(). '/inc/camera-production.php';

require get_template_directory(). '/inc/post-production.php';

require get_template_directory(). '/inc/motion-graphic-vfx.php';

require get_template_directory(). '/inc/profesional-audio-video.php';
 
add_action("admin_init", "admin_init");
function admin_init(){
    add_meta_box("clientsInfo-meta", "Clients Options", "meta_options_client", "client", "normal", "low");
    add_meta_box("homePageImageInfo-meta", "Home Page Image Options", "meta_options_homePageImage", "homePageImage", "normal", "low");
    add_meta_box("corporateFilmsInfo-meta", "Corporate Films Options", "meta_options_corporateFilm", "corporateFilm", "normal", "low");
    add_meta_box("adFilmsInfo-meta", "Ad Films Options", "meta_options_adFilm", "adFilm", "normal", "low");
    add_meta_box("documentaryFilmsInfo-meta", "Documentary Films Options", "meta_options_documentaryFilm", "DocumentaryFilm", "normal", "low");
    add_meta_box("teleFilmsInfo-meta", "Tele Films Options", "meta_options_teleFilm", "telefilm", "normal", "low");
    add_meta_box("recentworks-meta", "Recent Works", "meta_options_RecentWorks", "recentworks", "normal", "low");
    add_meta_box("camera-production-meta", "Camera and Produciton", "meta_options_cameraProduction", "cameraproduction", "normal", "low");
    add_meta_box("post-production-meta", "Post Produciton", "meta_options_postProduction", "postProduction", "normal", "low");
    add_meta_box("motion-graphic-vfx-meta", "Motion Graphic Vfx", "meta_options_motionGraphicVfx", "motiongraphic", "normal", "low");
    add_meta_box("profesional-audio-video-meta", "Profesional Audio Video", "meta_options_profesionalAudioVideo", "profesionalAudioVdio", "normal", "low");
}
