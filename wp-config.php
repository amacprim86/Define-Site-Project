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
define('DB_NAME', 'define');

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
define('AUTH_KEY',         'zWbW2EtZ@Q=5`58!-.iw<^JudD)b@p:s1$qx.NmIezM>gS#&}Cn5k!_[41fJ&qUR');
define('SECURE_AUTH_KEY',  'JH<QYc5XHi?n hWX!E5IQ*P.Q4jl-Hx{yra9$YCIohK2v%$y}po]qT(DN&Tz;$>C');
define('LOGGED_IN_KEY',    'Sqe~Y-#o$G%agtp|k{%`hwllIj9SRw$5~.{0~0)`gTq?24 ]tF`g~|6.9uMMa0Iz');
define('NONCE_KEY',        '5U$OA3O;{I,23HdP*@>|!=FKe9<<wTa2jFM AJ<<937!d#VbyRl: d*E-l15cR(`');
define('AUTH_SALT',        'lRL2F-9DzHmSLd~{.#$;-uFY.#?}A}<g9tGoNiV7l0y9N>Jo<_}gMoCdN08QEIX,');
define('SECURE_AUTH_SALT', '.W3KkJ )j^Z~Z|xFU$c_c,ffbGmHMuXjR&yxj$:9,LIwbTPM^bj&S#r[:W|+7#<j');
define('LOGGED_IN_SALT',   ';C`lTGr>SLF@.o*f7zwl+AZW KUfty.6KipbZNOQ4?&E/m^9;q#DlLamVUBE8z}+');
define('NONCE_SALT',       '@o/Iq)7!/w&u)Ygi;PeE3(3}w)Uow4&}G5iv9n~Mh!92T5Tj2b.YDr>5h#=BHmpt');

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
