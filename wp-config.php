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
define('DB_NAME', 'shopmypham');

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
define('AUTH_KEY',         'z`3-1O..n8oDRajK*H?O#%$9tGLc94leh>lFgkvcpDaj< L=r$GBjDiQ`f^QuPyi');
define('SECURE_AUTH_KEY',  '7*ukN.)/sqqm79:^G1!5Vqh^&_0h)8kz4>vU^&bHb[}]0g<Y(:RMJs|}2BPzt.[ ');
define('LOGGED_IN_KEY',    's,Ql{s6#{8-A_2SDDQ`<}4v]K[O@>BH.})a/Q)4+GIPx|tKuA[8N%|&$|q|CbAnt');
define('NONCE_KEY',        'phVfi(uhx-mb85Fpu x=sDmx)Q?o;CpgiL}~cs<pF7rTJCS*c,2y?SpQ_lr%jURB');
define('AUTH_SALT',        '_2rDkZ`HAEyUNes|Vt8pMlFbA:ITNVCsEqbw1uqt/Kwy0I+7]DF>Z6A82DOWR15n');
define('SECURE_AUTH_SALT', 'L`jP79Lt)N0`-7|E&&wkPfC7 k<n]bnp*/=`usEZ^lcVX2.1dqr9-y%^=7cURCbP');
define('LOGGED_IN_SALT',   'GC+sV1FHCH8BB%jgs_o:AmG{4-UU&Z|73wl1:E:&@K[/O3!G.p@b2]N>.7U^XM}}');
define('NONCE_SALT',       'v`I)_nE-4JA3Dm15.:AWJ+Vr {7)|]vqA XqyR!^e0IC<L`~:K!mESHVt,~wMV !');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'shop_';

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
