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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bibitberbuahcom');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '[8%[=RYI=N>Nw<Ff-P4$-Hrgnit1(pBmPV n!XWIJ2=WRN/C9=XDm9Y1X|WKXxL4');
define('SECURE_AUTH_KEY',  '~$VXBkC.>E0/g2xx~>bmyEpxKga$&*)~?es}?qf4=c6HOcWEz 9JQ?Hk@dnoexkA');
define('LOGGED_IN_KEY',    'B}$_&X(77:[,i5Y</huDOLYJMgUT7S}:EhHxw%7a``qf?e&=*^RknC;H&kn&f(3Y');
define('NONCE_KEY',        '-S#LEd}Nfj:Rs]@@#SIBUIK$Fq4X=Gph,vE|*U2@fI!{&cB>b-(hWGUR@(H0.i(F');
define('AUTH_SALT',        '@7xn3 lidE54v>k;N,;?Y9`]5~+AZ8Ii-VF8`N9iNcx}!dv{T7g65Rk@5I2K{?x-');
define('SECURE_AUTH_SALT', 'lKns^mjGKX7x);D,hyRPR.2sAOZ.x=CqcT+1U%6]/k4 >C3ScM!e(>^oJm#SVFQ_');
define('LOGGED_IN_SALT',   '<Fy8s~JRMr%_d;$GQ21#k%Vw~$nq6KHc9cxt`N.hpYZPPI]o;z&zsMQA6r:NyRv1');
define('NONCE_SALT',       '2c`$OwlZpmqIc0k2RA!@F>+Yr#SH>s#l_AFz/At.!+P)e9l`uFt~oQnm=zAXr/E>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
