<?php
// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

define( 'POSLUSHEN_ADMIN__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

require_once( POSLUSHEN_ADMIN__PLUGIN_DIR . 'class.poslushen-dogs.php' );

add_action( 'init', array( 'Poslushen_Dogs', 'init' ) );