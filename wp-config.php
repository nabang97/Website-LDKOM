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
define('DB_NAME', 'wp_upgrading');

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
define('AUTH_KEY',         'UeSSI.T$(1~GF!)`YS+9vGwyTwW/~.H2>HQICi8?751n->{mmFZ/4YuIffVsm@aJ');
define('SECURE_AUTH_KEY',  'D $Ge?k;dZuBY2Z<k_.uB,r?={D;lH<%h1TGS4N~3:,mq&)5<[g{b$uj&CRC7eG(');
define('LOGGED_IN_KEY',    ')vR<3I}(BI}+K05MjF-I`C8DK#e3o[;eQ<xWjv*zN)C8LrjIeas+Vxr6|`8A9JN{');
define('NONCE_KEY',        '8qu?7m[p&R`d6kSnoiK^aZ1;j7Z|X|!$Dm1#6> f(kd~;(P^skBakOP<<1lq=+Ks');
define('AUTH_SALT',        '/k5;-Sc6(uvzm^xbKID(tb-Ti~O0!PI6IV:}Ph Bw&9pkp(1~$BY6LNqkz/sGqn-');
define('SECURE_AUTH_SALT', 'a7j<HjzMSsnr|`/{Xxu5}cobOBCGhlVl--Xc=.)cG,F]_m,|Y{y]PIlMf?kjZuGF');
define('LOGGED_IN_SALT',   'uRL#;G`p7tT#lKY!}2PzUy^0lkl{wkt(gg%Tqiqp-baX0J@ma_bi<O|LsCrtE8IK');
define('NONCE_SALT',       'hFjB_zp*HICP9|}yW6`6Xw)%W`mYsz:YezKP%_HJg}7AF{NZ^Q2O3K+,J%G jK[1');

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
