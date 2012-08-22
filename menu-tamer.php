<?php

/**
 * Plugin Name: Menu Tamer
 * Version: 0.1
 * Description: Make your nav menus easier to work with
 */
if ( is_admin() ) {
	define( 'MT_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );
	require dirname( __FILE__ ) . '/MenuTamerClass.php';
	add_filter( 'wp_edit_nav_menu_walker', array( 'MenuTamer', 'nav_edit_walker' ) );
	add_action( 'load-nav-menus.php', array( 'MenuTamer', 'init' ) );
}
