<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'k}TL1LL_mQ=&g~;iglt,^Y#8u;0lddQ4}[BRi1i*q[G%jgz$6cu#hk0:p6VS-Q.x' );
define( 'SECURE_AUTH_KEY',  '^|ppP* ZZfQ_tY5( K2I>^&U6Ix?.v0-)U~5ON*!foRW,^X@Er! /:5[uq?^n~nH' );
define( 'LOGGED_IN_KEY',    'hW|),OT@Wv>3xshpZr$zN;WmQSb js|U]mG!MR3,qR(- Am^)4;<AV[X9v6<qHaJ' );
define( 'NONCE_KEY',        '8 GWaZ-*dSNV?jKeG}v/CZ+fOCw>9=S7Xx-XIS~(BiHof ?g%/:q*,V.ZA{p^28<' );
define( 'AUTH_SALT',        'UZ+^e6-F;!]K0=5$DdoH.qyTvQ%W,rz4uzIOU`3{d3+C3Qj?84|,nrA]0+AzHvW2' );
define( 'SECURE_AUTH_SALT', 'j  `PE.5v4%FUC-&xybIgO|=718&%1Tv98geZIPd<{%9Ut>.qSRjSH<&g.5=jRN$' );
define( 'LOGGED_IN_SALT',   'F0$y*&o3siL=FjrKG!c&V/lds~k$=(,F/5/]C;~Zw?@5M/N,6CHlT}#v>E4-e;R.' );
define( 'NONCE_SALT',       '7jT>7Z2J3o)M:`%$;1i4dl[pge#B^dU&XWcXJBBYTMf0bnz>O2.zoc[{!>Wi`rc>' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
define('FTP_HOST', 'localhost');
define('FTP_USER', 'daemon');
define('FTP_PASS', 'xampp');