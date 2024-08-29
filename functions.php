<?php
/**
 * Theme Functions
 * 
 * @package Zuxtheme
 */

if( ! defined( 'ZUXTHEME_DIR_PATH' ) ) {
    define( 'ZUXTHEME_DIR_PATH', untrailingslashit( get_template_directory() ) );
}


if ( ! defined( 'ZUXTHEME_DIR_URI' ) ) {
	define( 'ZUXTHEME_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

if ( ! defined( 'ZUXTHEME_BUILD_URI' ) ) {
	define( 'ZUXTHEME_BUILD_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build' );
}

if ( ! defined( 'ZUXTHEME_BUILD_PATH' ) ) {
	define( 'ZUXTHEME_BUILD_PATH', untrailingslashit( get_template_directory() ) . '/assets/build' );
}

if ( ! defined( 'ZUXTHEME_BUILD_JS_URI' ) ) {
	define( 'ZUXTHEME_BUILD_JS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/js' );
}

if ( ! defined( 'ZUXTHEME_BUILD_JS_DIR_PATH' ) ) {
	define( 'ZUXTHEME_BUILD_JS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/js' );
}

if ( ! defined( 'ZUXTHEME_BUILD_IMG_URI' ) ) {
	define( 'ZUXTHEME_BUILD_IMG_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/src/img' );
}

if ( ! defined( 'ZUXTHEME_BUILD_CSS_URI' ) ) {
	define( 'ZUXTHEME_BUILD_CSS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/css' );
}

if ( ! defined( 'ZUXTHEME_BUILD_CSS_DIR_PATH' ) ) {
	define( 'ZUXTHEME_BUILD_CSS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/css' );
}

if ( ! defined( 'ZUXTHEME_BUILD_LIB_URI' ) ) {
	define( 'ZUXTHEME_BUILD_LIB_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/library' );
}

if ( ! defined( 'ZUXTHEME_ARCHIVE_POST_PER_PAGE' ) ) {
	define( 'ZUXTHEME_ARCHIVE_POST_PER_PAGE', 9 );
}

if ( ! defined( 'ZUXTHEME_SEARCH_RESULTS_POST_PER_PAGE' ) ) {
	define( 'ZUXTHEME_SEARCH_RESULTS_POST_PER_PAGE', 9 );
}


require_once ZUXTHEME_DIR_PATH . '/inc/helpers/autoloaders.php';

function Zuxtheme_get_theme_instance() {
	ZUXTHEME\Inc\Classes\ZUXTHEME::get_instance();
}

Zuxtheme_get_theme_instance();