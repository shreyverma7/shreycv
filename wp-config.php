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
define( 'AUTH_KEY',         '*8m*P3*tJ`KLz@O:=w28pg^kN_5I.(O}dSmajf&yf(D4%GELf,-~N.T%m~xRWr97' );
define( 'SECURE_AUTH_KEY',  'Q_m]7T#|Mo!sKOFBo@/DmTt_>y/nV<WYQf9Ny#P(L|Zm>3*;V?UI{|,<E89M[sm?' );
define( 'LOGGED_IN_KEY',    '-hq#DEcKdyX-RHe_R{Kp5epX)tq/H5R}%h%n-/E3!-#_l.*N*pp9ThCsArAmKpN5' );
define( 'NONCE_KEY',        'uUH%.>-.eUcP`S3)8Z*gio&jsYOw.-~X(3l/0XM4|yf=6 !ZsEv>|oIX)X_{SdHx' );
define( 'AUTH_SALT',        ')Va=c&$JMydKB;]9Y*#Oh6-Md^?]QRzX9 o<hJG|6OC1+?uM;UF[upkgx^6-UWo:' );
define( 'SECURE_AUTH_SALT', 'GMS>8m ms,0BgtO*p[1 VxG.GU6|P25xKiOs9[99%q>+pxx|}s:=>Mcq?OL5KZQN' );
define( 'LOGGED_IN_SALT',   '[AD)cPt>T0Cvta-f9IrXPmVf`Z`oPI?d6VV|j+QXLFW7<ui*:O@EZr[3%-1F7tFn' );
define( 'NONCE_SALT',       '$]F1H?c,3n)}8v95ubG@5.:#mlaB=(mWq(pai9_qM;1u]*V<88Nrv1493V&|NmV#' );

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
