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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ')GupHHLmM?&>lP` UCt~{?x_vEQMHN%P6#mGwD_0<0DiGxF1n88m UxIY62OKX}S');
define('SECURE_AUTH_KEY',  '&$zOu3jMFV/(Ob9*yE9`zh+:|&_Dg/=nf5c9pIfKt`0`.YWSM@>k1Jz/}0`k*1 C');
define('LOGGED_IN_KEY',    '~OrQot$Gn#dwiniMmUH 9<b*|I,8H(7n7d0&,Ku]D2$Er@^T77A]w66YOM;-A)UI');
define('NONCE_KEY',        '^L_ %OaSt`.W,r`(=Zk9rlQ7#xKtLbVhgy;7P~:+]~@h4SZy9>CrN*(CpG%W2-cp');
define('AUTH_SALT',        '`tP4KRSay<,hx g9m2w)M~+`[5hb_R#nC3~-+HTsd,%w;_q{/jMsQ*;si,TFP)k8');
define('SECURE_AUTH_SALT', 'IaGLjF|OaYLcn1}uPS$/iM}:DG`RlkV`Zl/>iHMay1|qp`5^`L]wW*XMPGhfl5pQ');
define('LOGGED_IN_SALT',   'fYhyO=NS&mzc)r;k)ainy<l8G2=wu[:YyCe<~@]x=5 <nJo&iLt(5n-zsMn^=YT,');
define('NONCE_SALT',       'ODTT&0[AN*eOsXS0LIv!1DJ$%1+nIJN7v31)VDi$cG)3g`QBy%/Wbu{Gc9+K,;bX');

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
