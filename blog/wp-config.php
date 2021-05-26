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
define('DB_NAME', '');

/** MySQL database username */
define('DB_USER', '');

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
define('AUTH_KEY',         '09Qk%`0rNt;Sgp!/?Yl:c$wU6Fpg{lT&S:_N@CK4r(mpn,!r:9/qfvNu4X [mO}Z');
define('SECURE_AUTH_KEY',  'Uv]Jk.ez7*vc|qHLy1v]b!/xp_4gkpLzJcUz1%6P&]YM!xx!hu,Ak #rYCZ{R1nR');
define('LOGGED_IN_KEY',    'Ig7OiV_OHjM[1LWwSKv//W{8ts!<SSGma=}ke3D4cv-&!B6&Fq)XHo[4WaIA&gyz');
define('NONCE_KEY',        '#w%d?5zp^W&%LM{)dM$V|c%%#<kS8{&lO0m{]`Pg*r&D|$!q3dq?oJ`*+H]G5M=x');
define('AUTH_SALT',        'E{R@k]F.nVt@i)2fiif#@?.Dwu=8ah1+e6-ZOZAM=pm_vr*r;lI]KRq<h;p4MRl.');
define('SECURE_AUTH_SALT', '@[P3*5MJt;qKeWlqr:AvyWiS=qF~9i911s)TqVz$}TH#f+$-k6kiN!x4(m:nC<!4');
define('LOGGED_IN_SALT',   'dMx&kH9cm*/n<zb8;;tVLVec0gXlWu,n0).#m4l:s(:9;J]qQ(wXezpJyR{9A|_3');
define('NONCE_SALT',       '1wW6Z/^9 5A1#lI8Dag72Y^+RoP)J~v81g?QE@gzr7/gY_j)az! 1Rm.aSap4*K7');

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
