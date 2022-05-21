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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fitness_zone' );

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
define( 'AUTH_KEY',         'jp4Qt|2G04[5hT@f:%7y2`%>3[{JUlg!.K7~Ma8ahm[nq%%?+PP1:.vvqoBVi]+@' );
define( 'SECURE_AUTH_KEY',  'gf]l(e%wXa,nqt].O1!O{cWi-]eqmgLIMUS!gp1I|:j@ow!w1c1,4Bv*xt!)|G7#' );
define( 'LOGGED_IN_KEY',    '7q&K<1Y,..,4,celaaWwx7SssaFYm_v%SWf?EEJ@8A{0=]`reg x:T^o_CF<-E@6' );
define( 'NONCE_KEY',        'k4FGIK,fL;Hkqsz(^#eqUCc]}(3Bfq^quIYZpKf.FK5(NfRC+_>C[ZWL<UOIi1X8' );
define( 'AUTH_SALT',        'xW9gy{13Jry>svb!,~3mFdY3I!0r`xn!Fn7.^d]D5b[A{,w#.rN?N~8zW*x1=#! ' );
define( 'SECURE_AUTH_SALT', 'nW&yDA|5QPF2Yuh[pq9JX_G;Sir!WxU-Sa}yRd|IW#VI:1-BKecegz,y>R+ia^[H' );
define( 'LOGGED_IN_SALT',   '{s?bL$]a9:u/~pY!G]9K?c|pK}t:tdP`5B}!AdO3RaR )D01>}Hv@!QjVW j$.Hk' );
define( 'NONCE_SALT',       ',4t%>Kzb?klL;IoRV(L![5R/yyzQFpXy&pI YHC9^lQDMHVrIvB6!$rMlx~$WDd2' );

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
