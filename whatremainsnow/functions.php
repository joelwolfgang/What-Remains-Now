<?php

if (function_exists('register_sidebar'))
{
	
	register_sidebar(
		array(
			'name'          => 'Sidebar',
	        'before_widget' => '<li id="%1$s" class="widget %2$s">',
    	    'after_widget'  => '</li>',
        	'before_title'  => '<h2 class="widgettitle">',
        	'after_title'   => '</h2>'
		)
	);

	register_sidebar(
		array(
			'name'          => 'Footer Bar',
	        'before_widget' => '<li id="%1$s" class="widget %2$s">',
    	    'after_widget'  => '</li>',
        	'before_title'  => '<h2 class="widgettitle">',
        	'after_title'   => '</h2>'
		)
	);

}
add_custom_background();

add_action( 'after_setup_theme', 'whatremainsnow_setup' );

if ( ! function_exists( 'whatremainsnow_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * To override whatremainsnow_setup() in a child theme, add your own whatremainsnow_setup to your child theme's
 * functions.php file.
 *
 * @uses add_theme_support() To add support for post thumbnails and automatic feed links.
 * @uses register_nav_menus() To add support for navigation menus.
 * @uses add_custom_background() To add support for a custom background.
 * @uses add_editor_style() To style the visual editor.
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_custom_image_header() To add support for a custom header.
 * @uses register_default_headers() To register the default custom header images provided with the theme.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @since Twenty Ten 1.0
 */
function whatremainsnow_setup() {

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// This theme uses post thumbnails
	add_theme_support( 'post-thumbnails' );

	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

	// Make theme available for translation
	// Translations can be filed in the /languages/ directory
	load_theme_textdomain( 'whatremainsnow', TEMPLATEPATH . '/languages' );

	$locale = get_locale();
	$locale_file = TEMPLATEPATH . "/languages/$locale.php";
	if ( is_readable( $locale_file ) )
		require_once( $locale_file );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'whatremainsnow' ),
	) );

	// This theme allows users to set a custom background
	add_custom_background();

	// Your changeable header business starts here
	define( 'HEADER_TEXTCOLOR', '' );
	// No CSS, just IMG call. The %s is a placeholder for the theme template directory URI.
	define( 'HEADER_IMAGE', '%s/images/headers/green_header.jpg' );

	// The height and width of your custom header. You can hook into the theme's own filters to change these values.
	// Add a filter to whatremainsnow_header_image_width and whatremainsnow_header_image_height to change these values.
	define( 'HEADER_IMAGE_WIDTH', apply_filters( 'whatremainsnow_header_image_width', 980 ) );
	define( 'HEADER_IMAGE_HEIGHT', apply_filters( 'whatremainsnow_header_image_height', 250 ) );

	// We'll be using post thumbnails for custom header images on posts and pages.
	// We want them to be 980 pixels wide by 250 pixels tall.
	// Larger images will be auto-cropped to fit, smaller ones will be ignored. See header.php.
	set_post_thumbnail_size( HEADER_IMAGE_WIDTH, HEADER_IMAGE_HEIGHT, true );

	// Don't support text inside the header image.
	define( 'NO_HEADER_TEXT', true );

	// Add a way for the custom header to be styled in the admin panel that controls
	// custom headers. See whatremainsnow_admin_header_style(), below.
	add_custom_image_header( '', 'whatremainsnow_admin_header_style' );

	// ... and thus ends the changeable header business.

	// Default custom headers packaged with the theme. %s is a placeholder for the theme template directory URI.
	register_default_headers( array(
		'green_header' => array(
			'url' => '%s/images/headers/green_header.jpg',
			'thumbnail_url' => '%s/images/headers/green_header_thumb.jpg',
			/* translators: header image description */
			'description' => __( 'Green Header', 'whatremainsnow' )
		),
		'blue_header' => array(
			'url' => '%s/images/headers/blue_header.jpg',
			'thumbnail_url' => '%s/images/headers/blue_header_thumb.jpg',
			/* translators: header image description */
			'description' => __( 'Blue Header', 'whatremainsnow' )
		)
	) );
}
endif;

if ( ! function_exists( 'whatremainsnow_admin_header_style' ) ) :
/**
 * Styles the header image displayed on the Appearance > Header admin panel.
 *
 * Referenced via add_custom_image_header() in whatremainsnow_setup().
 *
 * @since Twenty Ten 1.0
 */
function whatremainsnow_admin_header_style() {
?>
<style type="text/css">
/* Shows the same border as on front end */
#headimg {
	border-bottom: 1px solid #000;
	border-top: 4px solid #000;
}
/* If NO_HEADER_TEXT is false, you would style the text with these selectors:
	#headimg #name { }
	#headimg #desc { }
*/
</style>
<?php
}
endif;
?>
