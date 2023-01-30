<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
define( 'DB_NAME', 'joao-alves' );

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
define( 'AUTH_KEY',         '3*M|+]IXkN^i@:1?+02c3:u]-]e/Hes}nMhKb~`1yT}9z}qa`zS,h+s[]@k=Gtj%' );
define( 'SECURE_AUTH_KEY',  '*E<sf+L 8-.JH##uD0%^j.02UkCDpR7^x:9vKma9V4m@C[_X$Ld+]UgG77:/`pvm' );
define( 'LOGGED_IN_KEY',    'y@3h*K-u/rKavWpkK!t8GDc`$/#>;mr.(-M{|t<Q*g:Ur.Hzh$dWa</(*g&dJ #@' );
define( 'NONCE_KEY',        'c?fkO]z_fe7JSE)L*%4#)Q=V>HL)y9PJ@sdBBApK~%@ii%mk--njR,xlf-KvQs8i' );
define( 'AUTH_SALT',        '6n.Gee$dr7s7#4FeQARL]8tGzrYk$}Htnd?Mfju#A+~u9cTXiy7BY}oL->9{^E(]' );
define( 'SECURE_AUTH_SALT', 'pF5*s:FIPbLrY-&I<U%M+ak$Y;oTIdMz/BS*Pb!,]JUDow{X@B6#iw|Dgf8Y(0&r' );
define( 'LOGGED_IN_SALT',   'T,|`TC%33h1|CUd.@)q=Y6ev4~61gP(OnxC9{@p|X9P5F.4$@ 6Jo^A,teb+0#;|' );
define( 'NONCE_SALT',       'wwM5~>?R<n%f!3ZrKGot/0WLyNcm:hZFX1OJa0I<P6bsX$N2!PTrEp<>hnP/J; _' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ja_';

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
