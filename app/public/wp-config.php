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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'Pk6JEQr1-i-fv_yF`?Lm^ctiT<>tZG*M&NS{#{L3%W]?($tmV#$Q]vq}l.enQ2r/' );
define( 'SECURE_AUTH_KEY',   '?8SQ1@.a:cgEtM){UJ{ q~#;qOa_6?*oNbR.5MxWEi*K)I]4&G-}0Wj!t>0gc,f,' );
define( 'LOGGED_IN_KEY',     '}xnM3;[i~3c0N.Rbopqz{meThFkk=VCGX/3`2))n{QH.GuC/[0A4^xL |GJ}FB.9' );
define( 'NONCE_KEY',         'a0/J8bDm&!.uYcAPM?/RA21O?*@Py:3?oev))g?snhBaQ(tAeJX9Nw{S09dZN .5' );
define( 'AUTH_SALT',         'j {YO7-U[P!xvDhHI^$U}IVK[AMjW9,*2a.P25.RK<$I6-DFrLi`6#BSEA6z_-[>' );
define( 'SECURE_AUTH_SALT',  'iFxkp-<2H^JEWW(y!1j=u<,~7;P@w06ewr0b^8Yxs#B,Vre7t~gP2ug^ysp!Lg~h' );
define( 'LOGGED_IN_SALT',    'F/vr8=IkAi]T}aa^f-)??d^u5RQv,uXg|9r8AP0)&Ud_`nb+vFuF85AlLGA=p#Ek' );
define( 'NONCE_SALT',        '3OF46F*XNa.d2XUB&YQvRz@K#MAxT#jK-3sF(jAy$qZv>eAEeYBsDrqs%$.B@s2~' );
define( 'WP_CACHE_KEY_SALT', 'mUM8g7I=.Elxi<l1/6O4fl%h/PHYgb;~e7Ba6K+p*0f`0^uo<i9#zQTCfu$Q,4{H' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
