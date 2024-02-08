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
define( 'DB_NAME', 'test' );

/** Database username */
define( 'DB_USER', 'rafa' );

/** Database password */
define( 'DB_PASSWORD', 'radar' );

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
define( 'AUTH_KEY',         ',4}sp@jh{Yu9ZpPz)^s-.S[Lt$F7[r<J@Q*lb.R8TJ! 9j|F)~Nvvfg|[Lq5FKBS' );
define( 'SECURE_AUTH_KEY',  'C8O|OiS+$[n;%DzCc&O@XL)|I,-]@AL`F(|bQB7SX$O@:r&X/<!q`:@^6PS:p.d5' );
define( 'LOGGED_IN_KEY',    'g#6H@||M/*sz#8=!H_,QsL7t) WN8^_BdN26sbec4%^uch;s?</xmtd^Wa@Dz te' );
define( 'NONCE_KEY',        '1c4Tg;=,dkl<tE^W>-&AC,tIwK)AXCO6b+$N.:@7B+0JyAJdNKL%9PQk&GI;mW>h' );
define( 'AUTH_SALT',        'X@n?9TFTytKGCfF-h0e<-vnkzgnO88<v*53?`s^mQd:,E:FQ[^gTt [{+QhSBAEg' );
define( 'SECURE_AUTH_SALT', ' C7AZa1^tJu3m`1c#)`!e]]7ohQ4{HBPad/GA!u`&T ||hF}QWRq<#hbl|lSu<_R' );
define( 'LOGGED_IN_SALT',   '{8/YbZFt<ub3/gIWgTl2?04q_9G~|tQ>~ZySU;[(m0pt;[PfX3Sv6[Z:UD?7h%K=' );
define( 'NONCE_SALT',       'SckX,dhZG]@D1YF~-8^L$/Yg]YzTZYNus:bZS|<YBWA#ExNXPZnjBLUT@MtdqsaG' );

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
