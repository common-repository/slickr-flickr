<?php
/*
 * Plugin Name: Slickr Flickr
 * Plugin URI: https://www.slickrflickr.com
 * Description: Displays photos from Flickr in slideshows and galleries
 * Version: 2.8.1
 * Author: Russell Jamieson
 * Author URI: https://www.diywebmastery.com/about/
 * Text Domain: slickr-flickr
 * License: GPLv3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 */
define('SLICKR_FLICKR_VERSION','2.8.1');
define('SLICKR_FLICKR_PLUGIN_NAME', 'Slickr Flickr');
define('SLICKR_FLICKR_SLUG', 'slickr-flickr');
define('SLICKR_FLICKR_PATH', SLICKR_FLICKR_SLUG.'/slickr-flickr.php');
define('SLICKR_FLICKR_PLUGIN_URL', plugins_url(SLICKR_FLICKR_SLUG));
define('SLICKR_FLICKR_ICON', 'dashicons-format-gallery');
define('SLICKR_FLICKR_CHANGELOG', 'https://www.slickrflickr.com/about/');
define('SLICKR_FLICKR_HELP', 'https://www.slickrflickr.com/slickr-flickr-help/');
define('SLICKR_FLICKR_HOME', 'https://www.slickrflickr.com');
define('SLICKR_FLICKR_PRO', 'https://www.slickrflickr.com/members/');
define('SLICKR_FLICKR_NEWS', 'https://www.slickrflickr.com/tags/newsfeed/feed/?images=1&featured_only=1');
if (!defined('DIYWEBMASTERY_NEWS')) define('DIYWEBMASTERY_NEWS', 'https://www.diywebmastery.com/tags/newsfeed/feed/?images=1&featured_only=1');
require_once(dirname(__FILE__) . '/classes/class-plugin.php');
Slickr_Flickr_Plugin::get_instance();
