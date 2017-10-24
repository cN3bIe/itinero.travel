<?php
/**
 * itinero functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package itinero
 */

if ( ! function_exists( 'itinero_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function itinero_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on itinero, use a find and replace
	 * to change 'itinero' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'itinero', get_template_directory() . '/languages' );

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
		'menu-1' => esc_html__( 'Primary', 'itinero' ),
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

	// Set up the WordPress core custom background feature.
	/*add_theme_support( 'custom-background', apply_filters( 'itinero_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );*/
}
endif;
add_action( 'after_setup_theme', 'itinero_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function itinero_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'itinero_content_width', 640 );
}
add_action( 'after_setup_theme', 'itinero_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function itinero_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'itinero' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'itinero' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
		) );
}
add_action( 'widgets_init', 'itinero_widgets_init' );

function my_jquery_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/js/vendor/jquery.min.js', false, null, true );
	wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'my_jquery_scripts' );

function fonts_frontend() {
	wp_enqueue_style( 'itinero-foundationcss', get_stylesheet_directory_uri() . '/css/foundation.css' );
	wp_enqueue_style( 'itinero-fullpagecss', get_stylesheet_directory_uri() . '/css/jquery.fullpage.css' );
	wp_enqueue_style( 'itinero-fonts', get_stylesheet_directory_uri() . '/fonts/font.css' );
	wp_enqueue_style( 'itinero-slickcss', get_stylesheet_directory_uri() . '/slick/slick.css' );
	wp_enqueue_style( 'itinero-slicktheme', get_stylesheet_directory_uri() . '/slick/slick-theme.css' );

}

add_action( 'wp_enqueue_scripts', 'fonts_frontend' );
/**
 * Enqueue scripts and styles.
 */
function itinero_scripts() {
	wp_enqueue_style( 'itinero-style', get_stylesheet_uri() );
	wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/css/main.css',array(),'1.0.0' );

	wp_enqueue_script( 'itinero-sizzle', get_template_directory_uri() . '/js/vendor/sizzle.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'itinero-whatinput', get_template_directory_uri() . '/js/vendor/what-input.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'itinero-foundation', get_template_directory_uri() . '/js/vendor/foundation.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'itinero-tour', get_template_directory_uri() . '/js/tour.js', array(), '1.0.0', true );
	wp_enqueue_script( 'itinero-fullpage', get_template_directory_uri() . '/js/jquery.fullpage.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'itinero-slick', get_template_directory_uri() . '/slick/slick.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'itinero-app', get_template_directory_uri() . '/js/app.js', array(), '1.0.0', true );

	wp_enqueue_script( 'materialize', get_template_directory_uri() . '/vendor/materialize/js/materialize.js', array('jquery'), '', true );
	wp_enqueue_script( 'jquery-mask', get_template_directory_uri() . '/js/jquery.mask.min.js', array('jquery'), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'itinero_scripts' );

function trim_characters($count, $after = '...'){
	$excerpt = get_the_content();
	$excerpt = strip_tags($excerpt);
	$excerpt = mb_substr($excerpt, 0, $count);
	$excerpt = $excerpt . $after;
	return $excerpt;
}
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


