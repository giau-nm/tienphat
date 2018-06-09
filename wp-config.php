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
define('DB_NAME', 'u468139870_nhat');

/** MySQL database username */
define('DB_USER', 'u468139870_nhat');

/** MySQL database password */
define('DB_PASSWORD', '123456');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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

define('AUTH_KEY',         '$!%|b 9Mm~jPDYacC<ei~?h#c^&8|B1Mj$fU?ry]D?D$./TaHJWh03f>t,ACG-VT');
define('SECURE_AUTH_KEY',  '8 b<Z;G~dyim>|Uo77tk69`Om5Oq`?VM$vYX7#Oxyi)ks=@gGhSXauifN4:86#=4');
define('LOGGED_IN_KEY',    '|Hi%U`7D*g+rl4X>(l!u;,_,XnyY+L~PAfwWfbDweCWrt|Ipm=qb)kd<6?wl+x6%');
define('NONCE_KEY',        '}>h|9m!oDkC8|m6[M{CQ:/I/#e}8:BNZD9_E[$W74d..-d],S(e6Ki|+`7nY5;QO');
define('AUTH_SALT',        'g.t78-&Ej4|R;F[+u)WH 0S#I^`g&<d`.Ln!4no%I4xGueDnfy0dARKcuUT`*oyY');
define('SECURE_AUTH_SALT', 'Oi-D+Ueqj*7v`O?d?e3#vuBbs_bJm8lL|>WtewMkA|5 x@L$OB^;rAcv`0Oy8Zp4');
define('LOGGED_IN_SALT',   '-&puAH{>@MJAQa%TKhrJeRWc2o|(KgOt`i$cFn5#_Bzb -96K5fe<2(zy/eZIWg-');
define('NONCE_SALT',       'X#iJqgs+OVr?#<YuDlN_<ot5B}$&K+_k1xEB@f-+*WE|0B(?d>P@h${[gFgf1>+&');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bz_';

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
