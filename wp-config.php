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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'oneimaxrepository_db' );

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
define( 'AUTH_KEY',         '8b/v?NL-^VKoXkiD[=<u )}ful?9qtUcKU!1:/TC0X~0}|y*_0f7rdS)+& TQLV?' );
define( 'SECURE_AUTH_KEY',  'pQrEKmm}|PZ:l`JV^p~,H.p{[6aQ%Yw?Or)fJ ,Ws)1Zgh^tn90B1*+--hieIo@2' );
define( 'LOGGED_IN_KEY',    'b+6B+g`n3wY6/rT;JSg:#(Ch9Hd.fIsJ18c[Eu|D(([[du3~LBQaVq!5JqP@JugL' );
define( 'NONCE_KEY',        'FHE=!jX~-OYNb1J%7xi{u4:0mF}{MniK6zH;s-$OMx=+)[EpdVz%qLJh#y^{aRki' );
define( 'AUTH_SALT',        'U%YKO5 /Op14`V |CY5=O/N!**<)]NPm#bC2ovviy4vf;}m/K29NSl;4L?NDz<u5' );
define( 'SECURE_AUTH_SALT', 'e6.KqwX5aoMDSaF!g/?,fQdHj)RX),Yo.RSlei-5PW,RW6_Z/y;^?A [EE|Yq|22' );
define( 'LOGGED_IN_SALT',   '!W1hpsy8Fu2g*j#+0-P(?8N IaO(9 Tg<ug1$Jb5<Of/6elR=%c1vYTolouX=ID9' );
define( 'NONCE_SALT',       ' =r8~)!ZZ6gT3<[kh<)H;w:8Tdw@#AS>L)mBQ3+B^K=Nqno? =V$ cOe@m[)m|S-' );

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
