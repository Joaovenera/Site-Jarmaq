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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '0dklirE8ZTGVw0' );

/** Database username */
define( 'DB_USER', '0dklirE8ZTGVw0' );

/** Database password */
define( 'DB_PASSWORD', 'WcoXMHKY0zcday' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'pH~-B}N@E!b8xL]sd5y9@RN}yP96NL*!Mi#1.dy6U#:CO/e V@wOwi9/i$U:s0_l' );
define( 'SECURE_AUTH_KEY',   '`)d.#5)[Fh&~URy8f[8ID&&i]cbTkVpa[UC8 Ue.T}M&u|*SB}/m$#o4iQAJ3r/s' );
define( 'LOGGED_IN_KEY',     '},nR|=K^}uflEG=ny874FgvM7?mZ_J5EU.,4<vpH|%8Qt!9>OtkyoKS^nz#!IQ.a' );
define( 'NONCE_KEY',         '?hc;YPHfcqp{QS`,RFLG.66#{0`wkUP)Uk@p|k?K0zVZ$/$azi=C{|`y[dSG6;NC' );
define( 'AUTH_SALT',         '!(VxO.YZO,n7RCWc2HZ}*d*~Xk6X~s{J$TGKKt(;2 pQoJ2QusBjcBKZ%{KVV:pP' );
define( 'SECURE_AUTH_SALT',  'v]vB[bU9me{,vSkL_M~hTz1K9+JAg#FOW+oo6l{XKBg4|<oB{[?!,FI=>%m/ltMo' );
define( 'LOGGED_IN_SALT',    'x4yie*0Z))xiL|1MrD0c,P:.d;#nc91QBqrELa#%#|f5cw!JG%C~_|DGDo.nmT>9' );
define( 'NONCE_SALT',        'y>Fnb{&LLnA5sL!(JH]NhUCbB(H+G :5eMc3xd[lAKXujUPcT,|*b J3_Lwe%0}3' );
define( 'WP_CACHE_KEY_SALT', ':Ok:hr5gND9s<iK/7TW_ZJbuSjhQ?}Mx#<udqqv===UT)P<n+|7eRFGHDxuE0I,}' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
