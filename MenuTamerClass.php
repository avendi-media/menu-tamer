<?php

class MenuTamer {

	public static function init() {
		self::load_l10n();
		wp_enqueue_script( 'menu-tamer', plugins_url( 'js/menu-tamer.js', __FILE__ ), array( 'nav-menu' ), '0.1', true );
		wp_localize_script( 'menu-tamer', 'MenuTamerL10n', array(
			'collapse' => __( 'Collapse', 'menu-tamer' ),
			'expand' => __( 'Expand', 'menu-tamer' ),
		) );
	}

	protected static function load_l10n() {
		load_plugin_textdomain( 'menu-tamer', false, dirname( MT_PLUGIN_BASENAME ) . '/lang' );
	}

}
