<?php
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
define( 'DB_NAME', 'wp_jnl_given' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'Z_D:?-u+er.%Ff{fLR,!3Yu]_3/Lv}V?#R0S+3dd8QUpGik>Ho}&b+R,OTZ0~U#B' );
define( 'SECURE_AUTH_KEY',  '`_|I6VKr3)bh|G^8YfgzA&o)J3Up_Jazg8K@RJ<=(Z<S<U8mb?%+*Qn]iz/$V!D?' );
define( 'LOGGED_IN_KEY',    '/X)`kX=^=G*P^cvq84.TV|DE]bQA2deb*!g.c&pl+{=`$6^SKw j=~^zfz}Lym=6' );
define( 'NONCE_KEY',        'l_u%2`H??;5_7C9WyWHhqB1@jrYAAI=oPw=+c=kVX|[S!g1RNCA[!gMB~:m}QNCS' );
define( 'AUTH_SALT',        'XfO_U3Qd$GSOF<+awTM8PQSs*|uf.2%{n7t9TV6n03%_BH,Be.!09*^}&bu`/vhT' );
define( 'SECURE_AUTH_SALT', '/wIh}&tD#P v.|GH_(^m4WM ,6?0LrIm.9%8lqg2I&|.S,1LFzm+w~oSTH[%rlE3' );
define( 'LOGGED_IN_SALT',   '3C9.SRnd@kI9sgr&1}?{b5Q:&KlVMOHivUflIZnOYskR?ca5JO.Le%y_MC _w2&~' );
define( 'NONCE_SALT',       'o8VRKL#[yp6_SM9UPI@6[wo$ ?*^Q}*4b~idv=p5opVy:PQjP^<t4/Yy-`.SIGSk' );

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

// define( 'WP_DEBUG_LOG', true );
// define( 'WP_DEBUG_DISPLAY', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );