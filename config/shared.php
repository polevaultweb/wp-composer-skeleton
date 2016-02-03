<?php

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WPLANG', 'en_GB' );

if ( ! file_exists( dirname( __FILE__ ) . '/keys.php' ) ) {
	$keys = file_get_contents( 'https://api.wordpress.org/secret-key/1.1/salt/' );
	file_put_contents( dirname( __FILE__ ) . '/keys.php', '<?php ' . $keys );
}

include dirname( __FILE__ ) . '/keys.php';

define( 'WP_AUTO_UPDATE_CORE', false );
define( 'DISALLOW_FILE_EDIT', true );