<?php
/**
 * Plugin Name: Bootstrap Genesis Zoom Archive Images
 * Plugin URI: http://github.com/salcode/bootstrap-genesis-zoom-archive-images
 * Description: Add CSS to zoom archive images on hover.
 * Version: 0.1.0
 * Author: Sal Ferrarello
 * Author URI: http://salferrarello.com/
 *
 * @package bootstrap-genesis-zoom-archive-images
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

add_action( 'wp_enqueue_scripts', 'bootstrap_genesis_zoom_archive_images_css' );

/**
 * Enqueue CSS for Zoom Archive Images
 */
function bootstrap_genesis_zoom_archive_images_css() {
	wp_enqueue_style(
		'bsg-zoom-archive-images',
		plugins_url( 'css/bsg-zoom-archive-images.css', __FILE__ ),
		'bsg_combined_css',
		'0.1.0'
	);
}


