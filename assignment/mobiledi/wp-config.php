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
define('DB_NAME', 'mobiledi');

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
define('AUTH_KEY',         '4:;Cg}&*ZDrOKN}F`doO-i.pOYi$c_e7ZD+,Bn8{+dZF|zu~#eTQcL{q|hg,Wz&$');
define('SECURE_AUTH_KEY',  'tWG7C[?p$|jX^6nQvsYjp_$EPeO+P=DuI=%W^+1poxJ7byq-POR`xt)y5)|AgHQ_');
define('LOGGED_IN_KEY',    '7BOq]{S7Dh=$45(F)JlZK;-VuK|`,J&8,0CU+kemq_A#cVa]*qC?:D`&$9f$6OfV');
define('NONCE_KEY',        'p%UDL9Y7UcE)CiPr!/6,@og1vO>|rWUax.I--,iP+;J0ND}nhC!bH*<AgWuY4_5q');
define('AUTH_SALT',        'kOQ+=W ]MOk3iiE6/+}VnM]*S+V>blW8*dV$Y9-8K9-iLnk/c>rU+OKH%-DjwE2m');
define('SECURE_AUTH_SALT', 'pG9&z._+{N3-UP6y< AjrLOc8o3<OK+!98uq|**MiH-iMb)$+P{nka_k`kO=-b_:');
define('LOGGED_IN_SALT',   ':2ROqo>|nZ|rQ*?tUtwHfhf9u>oka<JS o5h!-P+v)D:~7rZJFuszdL}%5m||=ZM');
define('NONCE_SALT',       'a{,+ozq~d$vNo!wynxSL7p{IR qAZ&XKq7l_dte<7y%W]EWT*)leG&LwD|U#)Llj');

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
