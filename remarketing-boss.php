<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/*
 * Plugin Name: Remarketing - like a Boss!
 * Plugin URI: http://webhaven.com/remarketing/
 * Description: Add ReMarketing Code to every page in your website easily using this 1x simple plugin. Retargeting plaforms - Google, Facebook, Retargetter, Adroll, Perfect Audience, Bing and also as a bonus can add Google Analytics. Allows different Remarketing Code on individual Page/Post if you just want to use different campaign for that page/post. For more information, visit; <a href="http://webhaven.com/web-design-brisbane/">Website Design Brisbane</a>
 * Version: 1.0.2
 * Author: Jesse Wade
 */

define( 'REMARKETING_PATH', plugin_dir_path( __FILE__ ) );
define( 'REMARKETING_URL', plugins_url( ).'/remarketing-boss' );

function remarketingboss_init() {

	require_once( REMARKETING_PATH . 'inc/main.php' );
	$remarketing_boss = new RemarketingBoss();
	
}

add_action( 'after_setup_theme', 'remarketingboss_init' );