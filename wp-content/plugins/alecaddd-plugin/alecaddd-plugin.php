<?php 
/**
 * @package AlecadddPlugin
 */
/*
Plugin Name: Alecaddd Plugin
Plugin URI: http://webtechbro.com/plugin
Description: This is my first attempt on writing a custom Plugin for this amazing tutorial series
Version: 1.0.0
Author: Alessandro Castellani
Author URI: http://webtechbro.com/
License: GPLv2 or later
Text Domain: alecaddd-plugin
*/
/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

defined( 'ABSPATH' ) or die( 'Hey, you can\t access this file, you silly human!' );

// after install composer, now we can check to see if autoload.php has been created
if ( file_exists( dirname( __FILE__) . '/vendor/autoload.php' )){
    require_once dirname( __FILE__) . '/vendor/autoload.php';
}

// define constant variables
define( 'PLUGIN_PATH', plugin_dir_path(__FILE__));  // used for require_once
define('PLUGIN_URL', plugin_dir_url(__FILE__));     // used for wp_enqueue_style, wp_enqueue_script

if ( class_exists( 'Inc\\Init' )){
    Inc\Init::register_services();
}

