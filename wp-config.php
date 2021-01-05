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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Cristi' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'm3rijem3rijE' );

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
define( 'AUTH_KEY',         '/-bn,E;j ly%@ZI3?$YsX*UKWZYI1hofeit@a*$gFMg,i5DwW?N#MZN6|Ud@vgVr' );
define( 'SECURE_AUTH_KEY',  'yLU}Y`-mPW@@T%8DFc!R4tp.j#OVR`$OAO!S[jWXt2x+smSwx@GdpLWw-v-^OeEC' );
define( 'LOGGED_IN_KEY',    '9c2?`GZ,B)p/)M$kEDo-}&,_OQp0Y+xU>nfiTks&VbgVx^!QWjXC/v<@-cQ:qL(z' );
define( 'NONCE_KEY',        '.IsBxXD)Rm0T^mf1%RuJZPY}G}BR7sSgn_)x%T(Ykx@{2DN> uy<|;+kw;mioU#f' );
define( 'AUTH_SALT',        'Ej4]4mrEQ{&!s7+_uBa}fLIH+tb0Le?<(|F=jvZbRPmZG{> KZ7Vc1=UsRnn4K6Q' );
define( 'SECURE_AUTH_SALT', '+zc9?*Ty/$nII-s&p&dUwPFiIxNk>[!1KNuwrAATPI-a[Tk*N{syU;c7_S.tw[& ' );
define( 'LOGGED_IN_SALT',   'W@er;qFg.@{  r36TcTa,r]ox$w7s-R,opzm|md-WyGqQI%(]DTc&7& h29&_f@:' );
define( 'NONCE_SALT',       'yiN.O,1n/,/Pw:Mbh<gKcut6ZGQ0H>pyABcQb5nA}9kM|<]nCrbIg6hsb21_$E/P' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
