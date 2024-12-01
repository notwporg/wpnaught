<?php

define( 'USE_MYSQL', false );
define( 'DB_NAME', 'sqlite' );
define( 'DB_CHARSET', 'utf8' );
$table_prefix = 'sql3_';

//define( 'USE_MYSQL', true );
define( 'DB_DIR', dirname( __FILE__ ) . '/../_db/' );
define( 'DB_FILE', '.db.sqlite' );

if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', dirname( __FILE__ ) . '/wordpress/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
