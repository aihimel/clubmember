<?php
/*
Plugin Name: Clubmember 
Plugin URI: http://alaminopu.me/plugins/
Description: To manage different type of Clubs
Author: Md. Al-Amin opu
Author URI: http://alaminopu.me
Version: 0.1
License: GPL2
*/

if( !defined("ABSPATH") ) exit();

if( is_admin() ){
	require_once dirname(__FILE__) ."/includes/admin/profile.php";
	require_once dirname(__FILE__) ."/includes/admin/menu.php";
}

/**
* Activation function
*
* Creating table when installing the plugin
*/

function clubmember_activation(){
	global $wpdb;
	$table_name = $wpdb->prefix."clubmember_users";

	$sql = "CREATE TABLE IF NOT EXISTS $table_name(
		`id` bigint(25) unsigned NOT NULL AUTO_INCREMENT,
		`user_id` bigint(25) DEFAULT NULL,
		`status` tinyint(1) DEFAULT '1',
		PRIMARY KEY(`id`),
		KEY `user_id` (`user_id`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

	// db query 
	require_once ABSPATH . 'wp-admin/includes/upgrade.php';
	dbDelta($sql);
}

register_activation_hook( __FILE__ , "clubmember_activation" );