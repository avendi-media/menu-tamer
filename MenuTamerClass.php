<?php

class MenuTamer {

	public static function init() {
		self::load_l10n();
	}

	protected static function load_l10n() {
		load_plugin_textdomain( 'menu-tamer', false, dirname( MT_PLUGIN_BASENAME ) . '/lang' );
	}

}
