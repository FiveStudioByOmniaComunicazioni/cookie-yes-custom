<?php
/*
Plugin Name: CookieYes Custom
Plugin URI: https://github.com/gianlucagaspari/cookie-yes-custom-omniacom
Description: Custom CSS for Cookie Law Info
Version: 1.0
Author: Gianluca Gaspari
Author URI: https://github.com/gianlucagaspari
License: GPLv2 or later
*/
class CookieYesCustom {

	const VERSION = '1.0';

	static function pluginDirUrl() {
		return plugin_dir_url( __FILE__ );
	}

	static function pluginDirPath() {
		return plugin_dir_path( __DIR__ );
	}

	static function addActions() {
		add_action( 'wp_enqueue_scripts', [ 'CookieYesCustom', 'enqueueScripts' ], 100 );
	}
	
	static function enqueueScripts() {
		$pluginDirUrl = self::pluginDirUrl();
		$pluginDirPath = self::pluginDirPath();
		wp_enqueue_style( 'cookie-yes-custom', "{$pluginDirUrl}assets/css/style.css", null, self::VERSION );
	}

}

CookieYesCustom::addActions();