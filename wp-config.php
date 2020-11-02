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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp7');

/** MySQL database username */
define( 'DB_USER', 'user_wp7');

/** MySQL database password */
define( 'DB_PASSWORD', 'user_password');

/** MySQL hostname */
define( 'DB_HOST', 'wp7-db:3306');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1f1b01f45928df2d00e65fccdaf1626c00d40985');
define( 'SECURE_AUTH_KEY',  'd1d362a16a765a20dc39720cb3842037eb6b8514');
define( 'LOGGED_IN_KEY',    '9667a08d6041e995aa5aa9cb1527080b56f1c853');
define( 'NONCE_KEY',        '63f0e018cf44b464dd4bb33209d8b87be1309b2b');
define( 'AUTH_SALT',        '34cc9cb40d9f4aef2b8c18ef144fcf52a7d85925');
define( 'SECURE_AUTH_SALT', 'dce51cfc298289746fcbc6004486544c7a7eddba');
define( 'LOGGED_IN_SALT',   'e46404180dc0ab9e4c5037efa6157cfcc67cc473');
define( 'NONCE_SALT',       '053270c4b82a0c617634faf863ed81b5ced6d49f');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
define('DISALLOW_FILE_EDIT', true);
// If we're behind a proxy server and using HTTPS, we need to alert WordPress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
