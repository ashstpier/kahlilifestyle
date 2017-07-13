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
define('DB_NAME', 'jespcl_wpkahli');

/** MySQL database username */
define('DB_USER', 'jespcl_wpkahli');

/** MySQL database password */
define('DB_PASSWORD', 'Sx5Pg6e61h');

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
define('AUTH_KEY',         'fgacl1micxe1advqxov8u8a4g6lzpze348ycvx5mrtutuxseynq8k3bxuidzecoc');
define('SECURE_AUTH_KEY',  'asg3ayqozpit569i0vkzqnyuijyemztkfkftz0acstivzdclysn4txnwfhtgk3xy');
define('LOGGED_IN_KEY',    'y0zebhjnhwgun5c64xnaskp7gc0a8ya7lmzydiiiyeb8z0kvpjpbcyp6pzv59epz');
define('NONCE_KEY',        'fz61cvso5gyug9fpw1wdewckp7bftkyuconfq1tv5konotoxfhm72lnofpfl9akw');
define('AUTH_SALT',        'qozlmn5ulee6k9wfu1der5ic6ak3z2jyzpuuk2m5kfvwfbq8v2nywtod5ipfyjq8');
define('SECURE_AUTH_SALT', '3uweni6qhi9iqv38cjoxshtujdjuw0cx2dxvwtfdsgggcsnvqius3dxqpxnniftx');
define('LOGGED_IN_SALT',   'igqqfsju4upyhyyvqfohlreeuo9iwdoapw1baca68m2yrhff7ezmsjpck5gyzbk3');
define('NONCE_SALT',       'gse0fzkazq000mpjb1yeo23jd3zdsrvj18konqmdopz7iogbykvomqcvwufdcufe');

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
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define ('WPLANG', '');

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
