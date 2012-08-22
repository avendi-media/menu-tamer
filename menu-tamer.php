<?php

/**
 * Plugin Name: Menu Tamer
 * Version: 0.1
 * Description: Make your nav menus easier to work with
 */
if ( is_admin() && (!defined( 'DOING_AJAX' ) || !DOING_AJAX ) ) {
	require dirname( __FILE__ ) . '/MenuTamerClass.php';
	add_action( 'init', array( 'MenuTamer', 'init' ) );
}
