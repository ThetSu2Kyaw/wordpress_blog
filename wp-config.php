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
define( 'DB_NAME', 'flymya-blog' );

/** Database username */
define( 'DB_USER', 'default' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

/** Database hostname */
define( 'DB_HOST', 'postgres' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('DB_TYPE', 'pgsql');

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
define('AUTH_KEY',         'UMBDm%quGr--TQduTHu?i`zzo$1mgpHtgE%[IxlKzu >S@g=e!h418-hKa;YhD|B');
define('SECURE_AUTH_KEY',  'H;LB`N-XV,F62,q(,38UE<6`n7c$:z+-V{H#[6$m#H~5/{>uL7,g/MG|MT{g+I#h');
define('LOGGED_IN_KEY',    'yK?Vmb#uIhk?|2|#^5C4fU+ UW%6c7H@r0={x3`e9E>/9u|0&Yexk+FNdseW(w<-');
define('NONCE_KEY',        '.**k]M iU#p;1h^/&%*4CW%,0yPM<rd]rD+K?Hce{q|z.OGRg%w=lyW.6nm;`;W-');
define('AUTH_SALT',        'b2m/K-R,+0^I1Sf+Z%zN}{tD&?Y8)H<pP_Pa%Yk!GY,$C|FI%!F+t`]o?V7H(>m;');
define('SECURE_AUTH_SALT', 'dYMWF(Q|S_Ws|ZC$.+JVJl[1/q)Tx_%QzKA(Kjsr`.<d8dx`y0PKzd|-cqI![i-j');
define('LOGGED_IN_SALT',   '(=JZyQx6{d7D@e<3*}+ 8`t$n1N}k}yAFV+4#v)!s@3m{tfieRmkP&!E8(9Rs+#l');
define('NONCE_SALT',       'ZeKJZku[-V+b-yuv-WOVs#~L^;yXc}oEoT{/|pI3>gzEm9S#:.gQmVOhjm{-Df6C');

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
