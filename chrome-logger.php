<?php
/*
Plugin Name: WP Chrome Logger
Description: output anything in chrome console ( yet another debugging tool )
Plugin URI: http://blogdesignstudio.com
Author: Mayank Gupta / Ravinder Kumar
Author URI: http://blogdesignstudio.com
Version: 0.1
License: GPL2
Text Domain:
Domain Path:
*/

/*

	Copyright (C) Year  Author  Email

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License, version 2, as
	published by the Free Software Foundation.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/**
 * [chrome_logger_init description]
 *
 * @since 0.1
 * @package chrome logger
 */
function chrome_logger_init() {
	ob_start();
	require_once "chromephp/ChromePhp.php";
}
add_action( 'init', 'chrome_logger_init' );

/**
 * [chrome_logger_footer_output description]
 *
 * @since 0.1
 * @package  chrome logger
 */
function chrome_logger_footer_end() {
	ob_end_flush();
}
add_action( 'wp_footer', 'chrome_logger_footer_end', 999999 );

/**
 * [chrome_logger_footer_test description]
 *
 * @since 0.1
 * @package chrome logger
 */
function chrome_logger_footer_test() {
	$user = wp_get_current_user();
	ChromePhp::log( get_posts() );
	ChromePhp::log( 'Hello console!' );
	ChromePhp::log( $_SERVER );
	ChromePhp::warn( 'something went wrong!' );
}
add_action( 'wp_footer', 'chrome_logger_footer_test' );
?>
