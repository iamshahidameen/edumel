<?php
/**
 * Edumel functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Edumel
 */

if ( ! defined( 'EDUMEL_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'EDUMEL_VERSION', '1.0.0' );
}

if ( ! function_exists( 'edumel_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function edumel_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Edumel, use a find and replace
		 * to change 'edumel' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'edumel', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'edumel' ),
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
				'edumel_custom_background_args',
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
add_action( 'after_setup_theme', 'edumel_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function edumel_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'edumel_content_width', 640 );
}
add_action( 'after_setup_theme', 'edumel_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function edumel_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'edumel' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'edumel' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'edumel_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function edumel_scripts() {
	wp_enqueue_style( 'edumel-style', get_stylesheet_uri(), array(), EDUMEL_VERSION );
	wp_style_add_data( 'edumel-style', 'rtl', 'replace' );

	wp_enqueue_script( 'edumel-navigation', get_template_directory_uri() . '/js/navigation.js', array(), EDUMEL_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

    // Edumel CSS Files
    wp_enqueue_style( 'edumel-bootstrap-style-library', get_template_directory_uri() . '/assets/vendors/bootstrap/bootstrap.css', array(), EDUMEL_VERSION);
    wp_enqueue_style( 'edumel-fontawesome-style-library', get_template_directory_uri() . '/assets/vendors/awesome/css/fontawesome-all.min.css', array(), EDUMEL_VERSION);
    wp_enqueue_style( 'edumel-flaticon-style-library', get_template_directory_uri() . '/assets/vendors/flaticon/flaticon.css', array(), EDUMEL_VERSION);
    wp_enqueue_style( 'edumel-gilroy-style-library', get_template_directory_uri() . '/assets/fonts/gilroy/font-gilroy.css', array(), EDUMEL_VERSION);
    wp_enqueue_style( 'edumel-magnific-style-library', get_template_directory_uri() . '/assets/vendors/magnific-popup/magnific-popup.css', array(), EDUMEL_VERSION);
    wp_enqueue_style( 'edumel-animate-style-library', get_template_directory_uri() . '/assets/vendors/animate-css/animate.css', array(), EDUMEL_VERSION);
    wp_enqueue_style( 'edumel-animated-headline-style-library', get_template_directory_uri() . '/assets/vendors/animated-headline/animated-headline.css', array(), EDUMEL_VERSION);
    wp_enqueue_style( 'edumel-owl-carousel-style-library', get_template_directory_uri() . '/assets/vendors/owl/assets/owl.carousel.min.css', array(), EDUMEL_VERSION);
    wp_enqueue_style( 'edumel-owl-theme-style-library', get_template_directory_uri() . '/assets/vendors/owl/assets/owl.theme.default.min.css', array(), EDUMEL_VERSION);
    wp_enqueue_style( 'edumel-woocomerce-styles', get_template_directory_uri() . '/assets/css/woocomerce.css', array(), EDUMEL_VERSION);
    wp_enqueue_style( 'edumel-main-styles', get_template_directory_uri() . '/assets/css/style.css', array(), EDUMEL_VERSION);
    wp_enqueue_style( 'edumel-responsive-styles', get_template_directory_uri() . '/assets/css/responsive.css', array(), EDUMEL_VERSION);


    // Edumel JavaScript Files
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'edumel-bootstrap-popper-js-libraray', get_template_directory_uri() . '/assets/vendors/bootstrap/popper.min.js', array(), EDUMEL_VERSION, true );
    wp_enqueue_script( 'edumel-bootstrap-main-js-libraray', get_template_directory_uri() . '/assets/vendors/bootstrap/bootstrap.js', array(), EDUMEL_VERSION, true );
    wp_enqueue_script( 'edumel-counterup-waypoint-js-libraray', get_template_directory_uri() . '/assets/vendors/counterup/waypoint.js', array(), EDUMEL_VERSION, true );
    wp_enqueue_script( 'edumel-counterup-jquery-js-libraray', get_template_directory_uri() . '/assets/vendors/counterup/jquery.counterup.min.js', array(), EDUMEL_VERSION, true );
    wp_enqueue_script( 'edumel-owl-js-libraray', get_template_directory_uri() . '/assets/vendors/owl/owl.carousel.min.js', array(), EDUMEL_VERSION, true );
    wp_enqueue_script( 'edumel-isotope-jquery-js-libraray', get_template_directory_uri() . '/assets/vendors/isotope/jquery.isotope.js', array(), EDUMEL_VERSION, true );
    wp_enqueue_script( 'edumel-isotope-imageloaded-js-libraray', get_template_directory_uri() . '/assets/vendors/isotope/imagelaoded.min.js', array(), EDUMEL_VERSION, true );
    wp_enqueue_script( 'edumel-animated-js-libraray', get_template_directory_uri() . '/assets/vendors/animated-headline/animated-headline.js', array(), EDUMEL_VERSION, true );
    wp_enqueue_script( 'edumel-magnific-js-libraray', get_template_directory_uri() . '/assets/vendors/magnific-popup/jquery.magnific-popup.min.js', array(), EDUMEL_VERSION, true );
    wp_enqueue_script( 'edumel-main-scripts', get_template_directory_uri() . '/assets/js/script.js', array(), EDUMEL_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'edumel_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}