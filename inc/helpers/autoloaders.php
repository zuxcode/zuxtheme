<?php

/**
 * Autoloader file for theme
 * 
 * @package Zuxtheme
 */

namespace ZUXTHEME\Inc\Helpers;

function autoloader($class = '') {
	$resource_path        = untrailingslashit( ZUXTHEME_DIR_PATH );
	$namespace_root       = 'ZUXTHEME\\';
	$resource             = trim( $class, '\\' );


	if ( empty( $resource ) || strpos( $resource, '\\' ) === false || strpos( $resource, $namespace_root ) !== 0 ) {
		// Not our namespace, bail out.
		return;
	}

	// Remove our root namespace.
	$resource = str_replace( $namespace_root, '', $resource );

	
	$paths = explode(
		'\\',
		str_replace( '_', '-', strtolower( $resource ) )
	);

	/**
	 * Time to determine which type of resource path it is,
	 * so that we can deduce the correct file path for it.
	 */
	if ( empty( $paths[0] ) || empty( $paths[1] ) ) {
		return;
	}

	if ( 'inc' === $paths[0] ) {
		$array_size = count( $paths );

		for ($i=0; $i < $array_size; $i++) {
			$resource_path = sprintf( '%s/%s', $resource_path, $i === $array_size -1 ? "$paths[$i].php" : $paths[$i] );
		}

	}

	/**
	 * If $is_valid_file has 0 means valid path or 2 means the file path contains a Windows drive path.
	 */
	$is_valid_file = validate_file( $resource_path );

	

	if ( ! empty( $resource_path ) && file_exists( $resource_path ) && ( 0 === $is_valid_file || 2 === $is_valid_file ) ) {
		// We already making sure that file is exists and valid.
		require_once( $resource_path ); // phpcs:ignore
	}
 
}

spl_autoload_register('\ZUXTHEME\Inc\Helpers\autoloader');