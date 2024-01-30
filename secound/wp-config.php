<?php
define( 'WP_CACHE', true );
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ali' );

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
define( 'AUTH_KEY',         '.c[Bfmu1X%oOg5D&Hb]^-WO( L+dU=ZmTn{W|i:J%-flG4T-w[2UQ~(N/NmAN(u+' );
define( 'SECURE_AUTH_KEY',  'A<Z+)-8#5c`]^Y!1[=2J8m<_s9#gC#|x@TcN<K>k6_r_Zp<Su?eIr_B8Z>i*=6=c' );
define( 'LOGGED_IN_KEY',    '/[NmO6}0p9?d=q~X?/J|+QK}[LN>+SCeUKAL1 rw2WO<{DK/%D2]Md,(8`5`sf}[' );
define( 'NONCE_KEY',        'm%W[-2K/F%KuZzGDpq(wBpUEy(lII`%E;hRXvBfH,ZBHhhq MgsEXV2npdQDES^P' );
define( 'AUTH_SALT',        '}9#bG1^HAQ1Y!7@}|^f/B,K?-p4N%To6O(^C7Gn(o`TA+?!VTZ2&@7kSB3y-[~6}' );
define( 'SECURE_AUTH_SALT', '8}fcUG=!pXrKMv@%O/zDy.{Zu7]RiHn3u$G+hKyr#!P<8NUJXOQ[LNfuh80{T]-O' );
define( 'LOGGED_IN_SALT',   '?!ALD5h$@u`OD3KL-c%;,UF(C@LmS2d92?J8G=f)K#06,t?kU1hICzDiO2@Q,rT%' );
define( 'NONCE_SALT',       '7Wk>BLeQB_bnYS`4k6:cm[bAn]IQeC@7NcOh<b|V.HbY)Y3%A#0;R>B,Rb7ci$Z(' );

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
