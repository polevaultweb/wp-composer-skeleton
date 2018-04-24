<?php

$table_prefix  = 'wp_'; // CHANGE ME

$config_dir = dirname( dirname( __FILE__ ) ) . '/config/';

include $config_dir . 'shared.php';

if ( file_exists( $config_dir . 'prod.php' ) ) {
	define( 'WP_LOCAL_DEV', false );
	include $config_dir . 'prod.php';
    if ( ! defined( 'WP_DEBUG' ) ) {
        define( 'WP_DEBUG', false );
    }
} else {
	define( 'WP_LOCAL_DEV', true );
	include $config_dir . 'dev.php';
}

$protocol = ( ( ! empty( $_SERVER['HTTPS'] ) && $_SERVER['HTTPS'] !== 'off' ) || ( isset( $_SERVER['SERVER_PORT'] ) && $_SERVER['SERVER_PORT'] == 443 ) ) ? "https://" : "http://";

define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', $protocol . $_SERVER['HTTP_HOST'] . '/content' );

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

require_once dirname( dirname( __FILE__ ) ) . '/vendor/autoload.php';

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
