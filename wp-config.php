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
define( 'DB_NAME', 'wp_start' );

/** Database username */
define( 'DB_USER', 'test' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'yl-CDxh=:::AyqHC|&i,{35GwiCf!wq8t~H,spLv7#gYw&}+u6r?L<4o_%adb+2i' );
define( 'SECURE_AUTH_KEY',  'Dkx$,(>wzTA[tBn$]i-.W07Vf+V^hm52[]K3Fhd:,1Y]|FZd|JPXMJNoDf$<sz8Q' );
define( 'LOGGED_IN_KEY',    '(DC2Hpq%X]tAw[JC,a-fMQiM-<+<Tt4rtek.hr>D1gC*M!+1Vv:k:UZjiG5.nLeu' );
define( 'NONCE_KEY',        '2d-LSH`Cc}E<0QA>L*F-en=xL~G(tA>zJmS&_os]v=+ThEU.dP1+~c85STN!*K$C' );
define( 'AUTH_SALT',        'PE<_w(`(Kv2m[ec h~douE)mru4%$-QV157db)7_5ulhSA+>=~jC]ZlNm@)ItQ4{' );
define( 'SECURE_AUTH_SALT', '5=Q/pZGbJR0:!:2`f<M,R=g$}|3bvDs#C8Y$+Rqbg)Hlhzsw>Rn;Q8)jtv6+Zsqp' );
define( 'LOGGED_IN_SALT',   'Z0*+vs!.Rw>i7e**i.==EJ3|hFD<Q2>.*zD,hsLgvhjggB]c4$M!S(sbbH_h~<Pd' );
define( 'NONCE_SALT',       '`u2VVNV.wV@tCmM1LmHD~m7m *]#P+iw1x{Ap5Y<`6ioN url4F{tS*RPG3UHWy_' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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



define('WPFC_CLEAR_CACHE_AFTER_THEME_UPDATE', true);
define('WP_MEMORY_LIMIT', '768M');
define('WP_MAX_MEMORY_LIMIT', '768M');

define('WPFC_CLEAR_CACHE_AFTER_PLUGIN_UPDATE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
