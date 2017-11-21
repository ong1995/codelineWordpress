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
define('DB_NAME', 'codeline_wordpress');

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
define('AUTH_KEY',         ' 9LN?1%Kl=%`IL?8{vfrkF$)+-rT=Z-qo+**R6]hMKo|#,~oR6RCWFUh47k|k>|0');
define('SECURE_AUTH_KEY',  ' aX^Y1s}BIYJ9QyFV8WZc=CSzgobMyNT[W3JfU?lFp5D[PlE3_zto=MHn bA4N#o');
define('LOGGED_IN_KEY',    'I[=fdDJ4,OXCCRt:7|Vz{m*bl3=#*g</37%38iLM=tzhOE<k2(9}xgr}^)MHK<#C');
define('NONCE_KEY',        '&.Nb5N1W{T!u12nJNM}t~t V=%A&v?}KSF,}=rB]?1v.|D{qH1_=#Z<|&`x+nJGk');
define('AUTH_SALT',        '#fQwFpC5!yl6~)kv<}dXqKGE>esx=ay_ gMGfVayeqlg(DqMnzU}(y`7/6z LH>R');
define('SECURE_AUTH_SALT', 'GEFQPJ8co[d>IGkO<fmHTL6Q+Sxa}DspSe!]LFwV&S,i HwRGSGzK/%XjvWC^/K2');
define('LOGGED_IN_SALT',   'BSV@^Mkw14p}L(7-7}O#Y*in5YRM{zCFSqHt4.S4Fxw|4]@?&TGb{A:&+#(@ek3x');
define('NONCE_SALT',       'u{_&uxmDz!!QUGODf.)zwp^yCsgvw@y^CK6j:|#{L!mDw8me?%PCK{mP|NgKwFT}');

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
