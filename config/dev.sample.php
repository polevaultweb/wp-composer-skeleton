<?php

define('DB_NAME', 'database_name_here');
define('DB_USER', 'username_here');
define('DB_PASSWORD', 'password_here');
define('DB_HOST', 'localhost');

define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

define('SCRIPT_DEBUG', true);

if ( function_exists( 'xdebug_disable' ) ) {
	xdebug_disable();
}