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
define('DB_NAME', 'aboutus');

/** MySQL database username */
define('DB_USER', 'homestead');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

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
define('AUTH_KEY',         '*lWkj3xouiD}~F#g4[8SCS=]t01q,b){.0[sm!;T6.Y@1_2=q}ylrI5[>l;EG2o>');
define('SECURE_AUTH_KEY',  'f:&ex#{IymSUO&Aplf9%]4B7rb9,vpl_y>o[#!oLP72PzEfC=D|ZaPQrF1}#,~P:');
define('LOGGED_IN_KEY',    'K}*cbf`k:-RD_#g&O.3n^mfb9SH>gXF&}*C/(]r2<u.%u];Ot2/${s~PZnYK1gID');
define('NONCE_KEY',        'G*lx6_M|Z>w6&b^mzUd}ky:cJ?w{c=u1yL_e~zzm5/2,ZxsJGsa6v WRLuw/Rl-s');
define('AUTH_SALT',        'c~bJyrN2mjQ=vaH~PAjbM#2-)Barj#7b^2%TEUe|Rf,s~5qw$DG]>=5eA@W2pDGn');
define('SECURE_AUTH_SALT', '@:KAI(te7hQ*{&)6S{s`cc;~j6X:A VI_!Jae6}A}{Pb5)6rW`H@>01^KEub*E#}');
define('LOGGED_IN_SALT',   'C*AEwtAullp@Z>O$ektX4w$2;XDCm>|I2K~hQ#FiX5eWYPjA8z)tZ%J|^C5T.:H`');
define('NONCE_SALT',       'JF]QjlZC6@Zn<>HFY:vVZ4z4f]vri$uQ<X_6-um3x>)$lWEh0!}$k@tkF,$zMhyU');

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
