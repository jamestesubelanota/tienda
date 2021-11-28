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
define( 'AUTH_KEY',         '/MT331I#_}>oU*p:R6Kr+`M^51&/8L{h:W| CMvk*Ms+2A%!mG(@2s$3ayIGTs_$' );
define( 'SECURE_AUTH_KEY',  'MD)d6xr.T,5bx.~:Y`%hX$#eXZ,CST72aYG3M+#ALMREu}{S+)xmvXyT &R-+R;:' );
define( 'LOGGED_IN_KEY',    'm>.~vkHp@YvT[18AH7$8w:,M2u).xTS+&!yf)z$qPQh.?Nq`YxYMb@X;)3Etb`-<' );
define( 'NONCE_KEY',        'UY&q5yCt.}T-l3&*s?B>Vp7Cokc5n;S5!:(5*8^ihY##)Vldp^q,IbgB9&0F;~*|' );
define( 'AUTH_SALT',        'KMva,w]V;+v,2<16mog$eT5X nxR`>YbC.pzC Wu@}n&`kX1Q}n*^Y~,F0/KCVK6' );
define( 'SECURE_AUTH_SALT', 'J=*@I7&jF}NE8F`^P1F>f4`th~,}gnFMI/;o[m,d!JH?KMg&BdH;0*Hc(qp:<<>}' );
define( 'LOGGED_IN_SALT',   '/PKX&j2.7({mN)=G`8qffSh*O#|,Wgr_p{)xVb<ReyH6tfrlwq)19F*f W~C>2@s' );
define( 'NONCE_SALT',       'Neb64EF634Hia.gmk8`tl>iq-a~!?v^KTwU(z+]0z0TI3.[:XI}.zB_|6:yPeM?L' );

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
