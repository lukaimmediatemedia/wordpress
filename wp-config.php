<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'lukasz');

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
define('AUTH_KEY',         ')^SK^t>N-6}PO{Ma2A6KI<u+h=M--ZZ}-[Xy>:-d[Rt(OW)FR}3&v;zD0SXl<j-l');
define('SECURE_AUTH_KEY',  'Tk7[/>;=x^sI!2V(oBR4-+S8;+_sk#ZL5.>WdDOxbz|0mcdjZ#i [XQ34.[k*|;O');
define('LOGGED_IN_KEY',    '@azYF7}T]AT(A.pIBT+-4+|JndgWA~er^2H|bMq8/;j%5~Q2hGO-QhIgIS|a;oac');
define('NONCE_KEY',        ']A@G:C;n+!pQHD#ICVmc(RT>Z9uanAH6B%euv7?f![+Z+0Ty;^{bY^<%p?.?#K?@');
define('AUTH_SALT',        'x23lkusqOM</J.e_6mcwsW*VXL84)xGscKL/kL7xsY+%n^1$,pq|+7?K/s-q`+7-');
define('SECURE_AUTH_SALT', 'n(Ni` gA!} +CRlkey*2B(4X.b&:pYm@{~D5&E-zdGS@s[JME1{|?FObD`aO&]q#');
define('LOGGED_IN_SALT',   '>nn(cjIsbC}f;KeU+U&]u&IVYoP-ZS~6vs&>M:]>:KW?:MXWR!p~J }(`!u+w_tc');
define('NONCE_SALT',       '^PCwSDv1.-&duP!@yS(AF(l%#)RUIN*;Ju:)wZ;v,h5OAH/r<Wi.=@a$D!z9mJ_3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
