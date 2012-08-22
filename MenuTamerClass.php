<?php

class MenuTamer {

	public static function init() {
		self::load_l10n();
		wp_enqueue_script( 'menu-tamer', plugins_url( 'js/menu-tamer.js', __FILE__ ), array( 'nav-menu' ), '0.1', true );
	}

	protected static function load_l10n() {
		load_plugin_textdomain( 'menu-tamer', false, dirname( MT_PLUGIN_BASENAME ) . '/lang' );
	}

}
