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
define('DB_NAME', 'Vishal_dbweb');

/** MySQL database username */
define('DB_USER', 'vweb');

/** MySQL database password */
define('DB_PASSWORD', 'xopaJkqJ7.)>');

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
define('AUTH_KEY',         'IB]ObYcS>tx5vL/7IEJ47Vx/s(Rv]%qui#R)x{Zc#NSXMfBT.nC~+m#_KEEc=-gC');
define('SECURE_AUTH_KEY',  'F/Fl_~a}dVQeL]f$1:v?x>oX&P=4G>9@1X+zOc4eKA0XGkV^yS+mU}ftb$K]+Mrl');
define('LOGGED_IN_KEY',    ':.S!Z-j3rUNxA[j3Ok`&emtY4.wE8>[XAx%jDr:-SAOlwMVT$SXm=5.aXttU_c{Q');
define('NONCE_KEY',        'A~^{<Xa2[LhaP_h2`;BxIiAo>F/K >9Q%.@{I/28w2H[Fh.oP^GWfMkX 5t_XpZk');
define('AUTH_SALT',        '<#a/lT}>gb}z!1{M&%G4X3dhpoFnE_>1L]#nH,Gnfm:< #od]%40CdB9x$@N%=;|');
define('SECURE_AUTH_SALT', '9:0wrTv2zaQy9tYP:#;SW6@foz?&oa(G.ozr]F2-,uIu>N0gDaY3^axW5SY?]$>-');
define('LOGGED_IN_SALT',   '!Os+I-T$^+7_Bcf)WC~d&s`5-.G]2_yNV%vJ=4LoHB*^*kR[ TzKb5^,H&[UWj8[');
define('NONCE_SALT',       'B#z(5<XY5oRfe+?zUJ{o2+KkaP)G@9`H=FVt9F!H?@Bw1>;,j7WZp&Cp~*qJ:Sl*');

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
