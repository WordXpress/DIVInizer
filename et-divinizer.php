<?php
/**
 * Plugin Name: WXP DIVInizer
 * Plugin URI: http://wordx.press/divi-support-maintenance/?utm_source=divinizer_plugin&utm_medium=plugin_uri&utm_campaign=plugins
 * Description: A plugin that adds functionality to non-Divi-builder posts and pages: lightbox, author boxes, remove sidebar, and more!
 * Version: 1.2.0
 * Author: WordXpress - Divi Support
 * Author URI: http://wordx.press/divi-support-maintenance/?utm_source=divinizer_plugin&utm_medium=author_uri&utm_campaign=plugins
 * Text Domain: divinizer
 * License: GPLv2 or later
 * @package DIVInizer
 *
 * This software is forked from the original [Expand Divi](https://wordpress.org/plugins/expand-divi/) plugin (c) Faycal Boutam
 * Lightbox functionality forked from [Surbma - Divi Lightbox] (https://wordpress.org/plugins/surbma-divi-lightbox/) plugin (c) Surbma
 */

/*
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// exit when accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// define plugin url constant
if ( ! defined( 'DIVINIZER_URL' ) ) {
	define( 'DIVINIZER_URL', plugin_dir_url( __FILE__ ) );
}

// define plugin path constant
if ( ! defined( 'DIVINIZER_PATH' ) ) {
	define( 'DIVINIZER_PATH', plugin_dir_path( __FILE__ ) );
}

if ( ! defined( 'DIVINIZER_VERSION' ) ) {
	define( 'DIVINIZER_VERSION', '1.2.0-beta' );
}

// require setup class
require_once DIVINIZER_PATH . 'inc/DIVInizerSetup.php';

// localization
function divinizer_localization() {
	load_plugin_textdomain( 'divinizer', false, dirname( plugin_basename( __FILE__ ) ) . '/lang' );
}

add_action( 'init', 'divinizer_localization' );
