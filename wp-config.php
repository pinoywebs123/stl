<?php
define( 'WP_CACHE', false ); // Added by WP Rocket

/**

 * The base configuration for WordPress

 *

 * The wp-config.php creation script uses this file during the

 * installation. You don't have to use the web site, you can

 * copy this file to "wp-config.php" and fill in the values.

 *

 * This file contains the following configurations:

 *

 * * MySQL settings

 * * Secret keys

 * * Database table prefix

 * * ABSPATH

 *

 * @link https://codex.wordpress.org/Editing_wp-config.php

 *

 * @package WordPress

 */


// ** MySQL settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define( 'DB_NAME', "stalinks_db" );


/** MySQL database username */

define( 'DB_USER', "stalinks_dev" );


/** MySQL database password */

define( 'DB_PASSWORD', "/@89@M*g2unDCFH" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


/** Database Charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8mb4' );


/** The Database Collate type. Don't change this if in doubt. */

define( 'DB_COLLATE', '' );


/**#@+

 * Authentication Unique Keys and Salts.

 *

 * Change these to different unique phrases!

 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}

 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define( 'AUTH_KEY',         ';Eg`0OlA;p]Lc.,b^xEeF3wCIcy+a 6%1dTwJ@;_jWUlsvfO7/li#jH8k;{!{ye(' );

define( 'SECURE_AUTH_KEY',  ')0j7x2i,2~BfE5R$vyDt6?~$8,RhPOc|2ME%Za`4$[5C2p*KYP+=tAI;s0!~iX|]' );

define( 'LOGGED_IN_KEY',    'B[aU}Pg;{xeqB3,S/+-D5tTnDhz^@tfwj@Cx<QUT=Kg&%q7l7xGy,u6&@B!h}IOv' );

define( 'NONCE_KEY',        'y0wv=_&m6bJy-p2q)aY6U9hoS}^]n$leXrl|dm9Dn]n.zcW$j=;/e{``lTDS,HKi' );

define( 'AUTH_SALT',        'EkWubPL4uD5Cqiq+Z`=tDZfj*?Z;8?|A)<S{eojQs}cs4_C;(^<S)(I)g2`s[u98' );

define( 'SECURE_AUTH_SALT', '<A}:CQv2kRv,tD%jIZm,!I<WVW^N!>:<3X1cPZ*v^EZUn6xTu8a&C.~Y0V_uIj1}' );

define( 'LOGGED_IN_SALT',   '&}Mj$WBw*G2f1-X}U[%0p C_TZ@j3),,TE?zVdgio$Z1&]atUWgV7EjxW::p*;3z' );

define( 'NONCE_SALT',       '_.1^g |ZyA0ipF;_Al7jxVYMMU)+Fu:Z#rt0bc8Bd|J3scof,7FEiLE iTi#=4sI' );


/**#@-*/


/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = 'wp_';


/**

 * For developers: WordPress debugging mode.

 *

 * Change this to true to enable the display of notices during development.

 * It is strongly recommended that plugin and theme developers use WP_DEBUG

 * in their development environments.

 *

 * For information on other constants that can be used for debugging,

 * visit the Codex.

 *

 * @link https://codex.wordpress.org/Debugging_in_WordPress

 */

define( 'WP_DEBUG', false );
define('FS_METHOD','direct');


/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

}


/** Sets up WordPress vars and included files. */

require_once( ABSPATH . 'wp-settings.php' );

