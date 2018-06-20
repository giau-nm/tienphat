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
define('DB_NAME', 'u882584740_deli');

/** MySQL database username */
define('DB_USER', 'u882584740_deli');

/** MySQL database password */
define('DB_PASSWORD', '1234567890');

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
define('AUTH_KEY',         '>6Ud;#y&GN%3rb#G9d?VNeUHY 1Cq.r3PrZ?3]_8j^sl5iFf*/YWvVS3GuvUi]2W');
define('SECURE_AUTH_KEY',  'B79p0}m4ZZ,MWe?xwu0IX>?JXzf<DmMZ~:-ks?Wc;!$p9oKgb)A`qT|7z.b(ltQs');
define('LOGGED_IN_KEY',    ':oNuP[W0rBUzFW(l,($l@v_@l>N?d9_d$]bzP>VeOa7;1uG=T:!h<0}|C_,q-<A*');
define('NONCE_KEY',        '!^DadHkN;IR7fuCaCj8/3|5e-B0?YX&;:gY[prEu,7MPj7>M+7Ok2a9v?>/C~ot|');
define('AUTH_SALT',        'Oq8qIvJg18f9f&W6PIj6g=KLpy$clB1P<B[.Vrr4$m ^m_B&;*b(qL5)y|_Itg2)');
define('SECURE_AUTH_SALT', 'p!{3)0HMqRU<-@`b-sh3V<&Ek-F34c&sPJu<$OfFm;9?_jv~u*<&x?+Izu$dxLa9');
define('LOGGED_IN_SALT',   'ZN-cB.4S_!lO8e.zGZJdx*;%5ZNce2]lb B>%9@Bfa =1F#wAayzGfF7YC/X) wL');
define('NONCE_SALT',       '^?R)PSDjv$/];_^wj!:Tw;gLad}n~w<C%6)dz4h|{}a{^e[%H+pkHg2zwp $rCNP');

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
