<?php

$table_prefix  = 'wp_'; // CHANGE ME

$config_dir = dirname( dirname( __FILE__ ) ) . '/config/';

include $config_dir . 'shared.php';

if ( file_exists( $config_dir . 'prod.php' ) ) {
	define( 'WP_LOCAL_DEV', false );
	if ( ! defined( 'WP_DEBUG' ) ) {
		define( 'WP_DEBUG', false );
	}
	include $config_dir . 'prod.php';
} else {
	define( 'WP_LOCAL_DEV', true );
	include $config_dir . 'dev.php';
}

define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
