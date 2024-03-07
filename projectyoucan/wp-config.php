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
define( 'DB_NAME', 'projectyoucan' );

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
define( 'AUTH_KEY',         '[IPg]HM.Fn|#i2[^KlP5{(bJ%%Eu4}VP]9~tb&{TDq|~{RZCU&,jWYp[-;/D d<`' );
define( 'SECURE_AUTH_KEY',  '9O=JSQVE?_mS4}i>t*I0XqFcMs;6#7b9!/b(vUTH^7i !5ep6n~*!WtRO]lBs3%(' );
define( 'LOGGED_IN_KEY',    'Gd%rT[t&;G!]u!>O&a1RR;4G`:Ge~+Dv,`gp^9VGj&Ls3Nby.g+i?Q{M!!$;ipE8' );
define( 'NONCE_KEY',        '3j?X99`DOgt`4C?gQ# c:B_h:TT&)3-K$zwS(4bfCGgH_qwaT~X).a{7:[*?7@||' );
define( 'AUTH_SALT',        '`AN6.?x<tfOeck_igO0LfsRvbeaHB$,2y64[P[4j|Bk$/$0&qWkQ>k*{,rFL3aTh' );
define( 'SECURE_AUTH_SALT', '5Sve/aa:}$ s*%e37S<)KR/tt`!3iqkdbkG$h f:mG~g`#j}]Nm~^ c-|;Se.vIu' );
define( 'LOGGED_IN_SALT',   'nG;&w6Rma_Ct!GIB|by*:]f#Y-OsN5cbjqxnlUB-Iw7?r~WHR$GtnI+h8xzJU[u7' );
define( 'NONCE_SALT',       '<_%Sy}~YwB889Dvb%-]/6uu7?P6:ssZ45_eCOiy@HsZ|` B#:_Ym(DB4z6No<8ZW' );

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
