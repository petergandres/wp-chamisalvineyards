<?php
/**
 * Chamisal Custom functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Chamisal_Custom
 */

if ( ! function_exists( 'chamisal_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function chamisal_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Chamisal Custom, use a find and replace
		 * to change 'chamisal' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'chamisal', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'chamisal' ),
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
		add_theme_support( 'custom-background', apply_filters( 'chamisal_custom_background_args', array(
			'default-color' => 'EC008C',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'chamisal_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function chamisal_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'chamisal_content_width', 640 );
}
add_action( 'after_setup_theme', 'chamisal_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function chamisal_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'chamisal' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'chamisal' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'chamisal_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function chamisal_scripts() {
	wp_register_style('optinmonster', "$blogPath/css/optin-monster.css", false, '1.0', 'screen');

	wp_enqueue_style( 'chamisal-style', get_stylesheet_uri(),array(),filemtime(get_template_directory() . '/style.css') );
	wp_enqueue_style('optinmonster');

	// wp_enqueue_script( 'chamisal-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	// wp_enqueue_script( 'chamisal-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_register_script('third', get_stylesheet_directory_uri () . '/js/third.js', array( 'jquery'),date("h:i:s"),true );
	wp_enqueue_script('third');




    wp_register_script('custom_script', get_stylesheet_directory_uri () . '/js/custom.js', array( 'jquery' , 'third'),filemtime(get_template_directory() . '/js/custom.js'),true );
    wp_enqueue_script('custom_script');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// wp_deregister_script('jquery'); wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"), false, '2.2.4', true);

}
add_action( 'wp_enqueue_scripts', 'chamisal_scripts',20 );

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

// add_action( 'init', 'create_post_type' );
// function create_post_type() {
//     register_post_type( 'eventscustom', 
//         array(
//             'labels' => array(
//                 'name' => __( 'Events' ),
//                 'singular_name' => __( 'Event' )
//             ),
// 		'public' => true,  // it's not public, it shouldn't have it's own permalink, and so on
// 		'has_archive' => true,
// 		'publicly_queryable' => true,  // you should be able to query it
// 		'show_ui' => true,  // you should be able to edit it in wp-admin
// 		'menu_icon' => 'dashicons-megaphone',
// 		'supports'  => array('page-attributes','title','editor'),
// 		'rewrite' => array('slug' => 'events')
//         )
//     );
// }


add_action('acf/input/admin_head', 'my_acf_admin_head');

function my_acf_admin_head() {
    
    ?>
    <script type="text/javascript">
    (function($) {
        
        $(document).ready(function(){

			if($('.acf-field-5bedf679fed8a .acf-input').length){
				  
				$('.acf-field-5bedf679fed8a .acf-input').append( $('#et_pb_layout'));
				$('#postdivrich').hide();
			}	
          
            
        });
        
    })(jQuery);    
    </script>
    <style type="text/css">
        .acf-field #wp-content-editor-tools {
            background: transparent;
            padding-top: 0;
        }
    </style>
    <?php    
    
}

function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
   }
add_filter('upload_mimes', 'cc_mime_types');

function wpb_custom_new_menu() {
	register_nav_menu(
		'my-custom-menu', __('My Custom Menu')
	);
}
add_action('init', 'wpb_custom_new_menu');


function wp_footer_menu() {
	register_nav_menu(
		'footer-menu', __('Footer Menu')

	);
}
add_action('init', 'wp_footer_menu');

function wp_footer_contact_menu() {
	register_nav_menu(
		'contact-menu', __('Contact Menu')
	);
}

add_action('init', 'wp_footer_contact_menu');

add_filter( 'flamingo_map_meta_cap', 'chamisal_flamingo_map_meta_cap' );

function chamisal_flamingo_map_meta_cap( $meta_caps ) {
	$meta_caps = array_merge( $meta_caps, array(
		'flamingo_edit_contacts' => 'edit_pages',
		'flamingo_edit_inbound_messages' => 'edit_pages',
	) );

	return $meta_caps;
}


add_action( 'after_setup_theme', 'register_multiple_widget_areas' );

function register_multiple_widget_areas()
{

    register_sidebar(
        array(
        'name'          => 'Custom',
        'id'            => 'custom-widget',
        'description'   => 'Goes at the top of the page.'
        )
    );
}

function my_deregister_scripts(){
	wp_deregister_script( 'wp-embed' );
  }
  add_action( 'wp_footer', 'my_deregister_scripts' );


  /**
 *	This will hide the Divi "Project" post type.
 *	Thanks to georgiee (https://gist.github.com/EngageWP/062edef103469b1177bc#gistcomment-1801080) for his improved solution.
 */
add_filter( 'et_project_posttype_args', 'chamisal_et_project_posttype_args', 10, 1 );
function chamisal_et_project_posttype_args( $args ) {
	return array_merge( $args, array(
		'public'              => false,
		'exclude_from_search' => false,
		'publicly_queryable'  => false,
		'show_in_nav_menus'   => false,
		'show_ui'             => false
	));
}



add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);

function my_wp_nav_menu_objects( $items, $args ) {
	
	// loop
	foreach( $items as &$item ) {
		
		// vars
		$aria = get_field('aria_label', $item);
		
		
		// append icon
		if( $aria ) {
			
			$item->title .= ' <i aria-label="hidden" class="'.$aria.'"></i>';
			
		}
		
	}
	
	
	// return
	return $items;
	
}
