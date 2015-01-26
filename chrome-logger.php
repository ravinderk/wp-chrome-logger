<?php
/*
Plugin Name: WP Chrome Logger
Description: output anything in chrome console ( yet another debugging helper )
Plugin URI:
Author: Ravinder Kumar
Author URI:
Version: 0.2
License: GPL2
Text Domain:
Domain Path:
*/

/*

	Copyright (C) 2013-14  Mayank Gupta mayankgupta.com@gmail.com

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


class MB_Ravs_Chrome_Logger{
	function __construct(){

		//include chromePHP on frontend
		add_action( 'init', array( $this, 'add_chrome_php' ) );

		//include chromePHP on backend
		add_action( 'admin_init', array( $this, 'add_chrome_php' ) );

		//test
//		add_action( 'template_redirect', array( $this, 'frontend_test' ) );
//		add_action( 'admin_init', array( $this, 'frontend_test' ) );
	}

	/**
	 * include chromePHP file
	 *
	 * @since 0.1
	 * @package chrome logger
	 */
	function add_chrome_php() {
		require_once "chromephp/ChromePhp.php";
	}

	/**
	 * [chrome_logger_footer_test description]
	 *
	 * @since 0.1
	 * @package chrome logger
	 */
	function frontend_test() {
//		ChromePhp::log( get_posts() );
		ChromePhp::log( 'Hello console!' );
		ChromePhp::log( $_SERVER );
		ChromePhp::warn( 'something went wrong!' );
	}
}

new MB_Ravs_Chrome_Logger();
