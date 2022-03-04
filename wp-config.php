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
define( 'DB_NAME', 'wp_ptc_58' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
//define( 'DB_PASSWORD', 'password_here' );

/** MySQL hostname */
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
define('AUTH_KEY',         ' ?^o++v?6 +);*0o)k2l]u(|~lS1%_|Cak-8{0!6y~Bp6)/6)y3TQ7*@DLYC0UWt');
define('SECURE_AUTH_KEY',  '%tF_|$ENaR0q)Zy.{zSz?bTzmAaI7n%l~A|B#myKo@&;g#{)I,fD+3u+aP1Z2d+L');
define('LOGGED_IN_KEY',    'cKJb+*[ o*$T2Kmn+s]}nSg^o1-[/tmC+sRY;DCr_Q-MxawgFli_a%Qwv$_(9`s9');
define('NONCE_KEY',        '{d. x4R>eryxP}_>0|eLLbIEU&<8g)*!M|{*:SW>>ZjQ4$V9lgb/(E TwRLUW3UE');
define('AUTH_SALT',        '.7~3<R]U}c)XXc_LeT^hL7S+1#KJU.K# $f/4|Omp!P$V&acG!%-vT%^mG!e(d@b');
define('SECURE_AUTH_SALT', 'WP,m53BVaE/PbX<T@zd>C?U0[)[t|a5Ixj#FK329uB)h]Bp`E^J{<(Mm1-)oe{D0');
define('LOGGED_IN_SALT',   'fKUd+Gz]!{}/EKv0+ZdX%0.4MZ*=2qX+*<QELg~qrMvwd#3bZz&tflGm~=K)Lb+}');
define('NONCE_SALT',       '(/k9 g*WX?H.A~|7X(d8E2z3sn42vi.~F+>>oOX8inVQdD.`@_`eU_MH>R}+ru&$');

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
//define( 'WP_DEBUG', false );
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
