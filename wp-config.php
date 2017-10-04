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
define('DB_NAME', 'techvisitor');

/** MySQL database username */
define('DB_USER', 'techvisitor');

/** MySQL database password */
define('DB_PASSWORD', 'CJIW3PxoKN6cFyCx');

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
define('AUTH_KEY',         'v*NhK0m[EIxv,EX?g>B)qJpIvbBE==R9R3%+csqSA2L.qUbzsKCN 0^pdr6/=]hc');
define('SECURE_AUTH_KEY',  'h!|03 y^z*[(UHMCc9iqE(YM2Qh%>zBs80u1^oL=K0R/H(zGMl^^`*F4VW+wr56+');
define('LOGGED_IN_KEY',    '{6LA|q%k2CE~F|wcSEeb;;1p%AbpP#-J~g$x4&|oY!`@Ou]o-]gTA7sNz.?l|t(.');
define('NONCE_KEY',        'V-6M)[/7V#@j8<Pr{JYE|=(~^s:vpIjKeh,<<[3]6_}rQ9-X61B4.q@R@@~E[C r');
define('AUTH_SALT',        '^a%wWe|s@X75c2[M;NvSWK:QxY|z)Q <>0,u,^{{`3%?>i$Z+xlDy$f>s>ot{pml');
define('SECURE_AUTH_SALT', 'chxkogG.|4BvS*^%+!n[h]^,a#0vHlIyS;Grn#+<U5cospL<&?Ksz.jz;9_P2(rs');
define('LOGGED_IN_SALT',   'Ll.FzRwuB$.q !S&Lm(;*-i5;}=#0`)$IGbV4hGRUWN5S^UKRY28,}xig~b*P+k.');
define('NONCE_SALT',       '4^h8pgcxdb#Cduc0-TDfe@Uy[bV1i$WhY[Er`W~WXr%6Vyj3Xb(-FC`<f7 `6[b@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tv_';

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
