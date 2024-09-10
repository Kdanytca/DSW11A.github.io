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
define( 'DB_NAME', 'new' );

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
define( 'AUTH_KEY',         'h=^8u6C2;KTM+/4]_k/pT}}kEpRG_#V)mAXuahj0g>vEn=p0K[?e.<4bLWOHdNr=' );
define( 'SECURE_AUTH_KEY',  'rK [@1Z*9pD3|Sh49tFt3dJfg0VMkKj5iIZ_x*IjNW9<rYi0~Fpev6@su[NI%G[A' );
define( 'LOGGED_IN_KEY',    '_nij;8+/?Ip!}$??Eh/6,Z84=bhcgQbCFyCQ+5)ekG-9Ro7kecMOn,zYs-m[{nE(' );
define( 'NONCE_KEY',        ';+uCC9dzDiYZQNbWX@XPc*DA|9J9)0zKhj% H+;(T;ezPC0qAO%UaSS}NQ]-qS}k' );
define( 'AUTH_SALT',        '$t,1~}Bki#$Q85H%bY|*3/==<GX*uqKnNt9hCH= N`}V{kq{%l)Gpr7/yp<G<V*Z' );
define( 'SECURE_AUTH_SALT', '5B=]Ph{P[^bH{{,!k861C!X}-F;P*;4@$J-@M=nuWg&VdY[ICZv@,v#B8jREcD:a' );
define( 'LOGGED_IN_SALT',   'D(b/r`,~g8dr/stv+b|EcdsA|m)wjV-N.f?^u[[L]2.W~{,2>O_}&sHF21Brm5eJ' );
define( 'NONCE_SALT',       'K<;|XKS:]:^b&V+OA.(<X3,+CCudXu2&}/h3vZI5S0p(AsW5a&c+(pb8Fx5PherT' );

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
