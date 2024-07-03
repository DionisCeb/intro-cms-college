<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'intro-cms' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'mD!n4``#!|Ri26Z/4Kd#_go{s)!yAWuhI./PztSoeL[$CON2NpWPiS4c$nqfao(3' );
define( 'SECURE_AUTH_KEY',  'FAaEJEmO|(5,06GETzIhv$Zg-qxe#}_g0]7HDHRqr/I{7HoK&WX_;<S>ub(k5a&h' );
define( 'LOGGED_IN_KEY',    '{>l`6EQZgF@GF)6;Si?4`0OiP3qsRm-`lo) wN,{3ymaZlopd7|pKCmzLApq5{<P' );
define( 'NONCE_KEY',        '|g&i}ZP7bFA#LC?+d<A4EId=9bGi.cgh]03m4fC](<WZBSin&0q Cgd-Da}s#0zV' );
define( 'AUTH_SALT',        '/bX 0)#7p;%,*27l(Q?CQn<yWHC4XM7bW;@Ycv_o`:ToK@n<Kb8v6R[zK95>`-+j' );
define( 'SECURE_AUTH_SALT', 'Pqy#V)14F5MOO ctPg?{X%k{^ML>m`eXQp:OPpb8BTO5GL,eO*L+t*t43{/M$KcB' );
define( 'LOGGED_IN_SALT',   'HfIv+uboU548Jj<4N>!@.fO]_;K#Of.j-~+ bS:Wfu.sx897A!o`vko_qX)bmx$C' );
define( 'NONCE_SALT',       '_:F%*v1ocI?gTUz~@{lcVrqUS:0Eh<_Gbgm:j5RN@_o:7|_x>^9f-*NoY=wmNBHX' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
