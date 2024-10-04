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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pix_gallery_fi' );

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
define( 'AUTH_KEY',         '@XoB[{KD>Xfu?ZB$u*e*|L^Ghiw&piS<<TH.O+m+``[QDC?mNge,w! StZ%-%dZ5' );
define( 'SECURE_AUTH_KEY',  '3ORe$GG[ 9L+=krbVg,/,!6%+qF}?Y hqmK>+Wzd?A%NMpnI-a,js7>ssx^Osop>' );
define( 'LOGGED_IN_KEY',    '+Ig/FaZ2!$JBP?Qry$K{oKo=@U(Z<0#<nZ1bnp+dzD)0A4_XTtRiLj0_J~VPn|*c' );
define( 'NONCE_KEY',        'Qx()xm@q.j(apfJ0V+nL8:LDcL6xDp[%1Sq/pF4MV,w*g78E55bDmlM%~r:f;i9/' );
define( 'AUTH_SALT',        '#@Avn@2F;=Vv^BK(6,}+6z|%#>DSE8/i)>@L/Y-4.Lpk67Ku$/zjE|sy;zRJ>e^?' );
define( 'SECURE_AUTH_SALT', ';z_C`&#1n@yRr@_@nTlBu)LT8]<eHB1])v3vki2  nf}(x(fgp^cKc`en0B0E90X' );
define( 'LOGGED_IN_SALT',   'KGm}Zn9*wS|wpDP~037kd#SojW2H54*~jlZU{^-*zQ*49uLy+`h5pxKXE;Ca(;: ' );
define( 'NONCE_SALT',       '(}[pwklg%0^)AREvkF^~{7+@BF!$@.y.?kkE!1m_x[F#Eav*qf0D 4aC,>xhPZ!e' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
