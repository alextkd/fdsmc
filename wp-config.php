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
define('DB_NAME', 'c0fdsmc');

/** MySQL database username */
define('DB_USER', 'c0fdsmc_dev');

/** MySQL database password */
define('DB_PASSWORD', 'fdsmc2014');

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
define('AUTH_KEY',         'Y+yABw{I?_y;5^I&;pCv8I?E7-~40Opl_kBw #dhw&*_Rvj>]H[mNv!Os^?Wn0|$');
define('SECURE_AUTH_KEY',  '>m!^sMRc06Ah!5VkW+<=1MQ|Jn7iGgVF|||+3Ud&55Py;KpXgZhtz~dn9t`Vskug');
define('LOGGED_IN_KEY',    '9?32JhKVRKaIq](XQV/wU)5a5r!d?@@:+QTCZOQI-(Yo+lM#M@Jq;N`]H?8oa@>G');
define('NONCE_KEY',        'a7C,0+`+ +NQ1dN|&]IL6veOh-7@,`:WW@DC/GT|J#F$dQMR+bJ7F-$[j}5.}5~N');
define('AUTH_SALT',        'n(|xs@>j }yO;vK]0aPLgjja-^vZUY+sUvt*gpsH3+%koqMFKYL%KGe_xCh>`[^~');
define('SECURE_AUTH_SALT', '5iap]*TVs|!q$rr`QS<>sFBGS+WVP/BA$1;C_C7VwYNT,aHGuxMvx&+KZ[ ?F=sN');
define('LOGGED_IN_SALT',   '6p#H^uYBR+9C1oz&M1{hVw.?FL.7[@g~6Z}8X@pTPF9vazxA3Mc$[R )Z-2s+QH.');
define('NONCE_SALT',       '^lVOZy[oasiX[ZYKg%Ki[5lB ]t4T7rs!KMX#GO8BT>Pi{!f@R5NZ(NYU-&&a#pX');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

