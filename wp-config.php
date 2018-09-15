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
define('DB_NAME', 'u692171344_hami');

/** MySQL database username */
define('DB_USER', 'u692171344_hami');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'wj(f)8MB),&cb{peoRl}W+n]=NC+pOK`|c1`6{!S]]G,2 BKqay jIPX(gRu?~I]');
define('SECURE_AUTH_KEY',  '3#5@D&uK)DvX*9@[*,LH@+9A/5D,d>?gt-c/iEOi>SF`swf^0&jQ21g},1!^M.!g');
define('LOGGED_IN_KEY',    'AXa6{~%$YX&l;SL]B->/0=a5]b#5VgD_-Ibci>WW+RDr~~ /^_p,{0q97K>/#u?w');
define('NONCE_KEY',        'N 2 q&)ha+rQ#U-@iq_/Vd777h{4IJsm>[4A5sEeo+5E(Fh9kYZ/)-F$Ia[-xM(&');
define('AUTH_SALT',        '>!H(OgclM`m@q?&?3pK$||;po34ae8l{s{a?*{W3+I#fvLyD,l0saL&?Y^lesQOS');
define('SECURE_AUTH_SALT', '+hN|DL:;C.||e][2(mMJ]T]?n:_WVt{TjX*>(lh9?m>-se{;>saf,iO&hFZJBo?=');
define('LOGGED_IN_SALT',   'p!ayv|/yN^a}9wq1!2 Kh$v8;4Kle^Zk7^*.?@NSqdA^P(.Y0TJ}<,] !6~d73=|');
define('NONCE_SALT',       'X+;/h8i~]p!0A:JPBB7w[Kj_e{lh;Lbf9rk)_T{V;y)?2 sg-@8unfB`{_CzqlkU');

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
