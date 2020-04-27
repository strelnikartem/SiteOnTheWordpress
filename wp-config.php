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
define( 'DB_NAME', 'WordPress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '57bfIktz8qCTckwaiul4g9mKP04p1Lil0fIpbridNjTcTl5vqtKqonoDRRxJVqgv' );
define( 'SECURE_AUTH_KEY',  'p4oHZUQSMZg4Rwhj5BZfNLLuwCNN5f3dVIi872L24b7L5qWdOvuM3OncSHcuG4e7' );
define( 'LOGGED_IN_KEY',    'a6BzZ03kp8pkpBUmc74fmwQHq6AR4iBJmGEC50NzPj6qFhqupFbwBAxocaSeaTou' );
define( 'NONCE_KEY',        'JFxBrU0juWbfeyxvzt8o49WhrDzSKpHor3Sr0eNl73txatj0iv7GxV3Masvjpjr8' );
define( 'AUTH_SALT',        'pJvP7BNWKJ0Xl0Svi5REcnOqYCUCM9MeKPIPp9ntoQpnVXPaZTZgdlBeS3ZMJTED' );
define( 'SECURE_AUTH_SALT', 'aiugWfYbauhsMqTonSf2Mes0Z1A7bsSgj60KRRxXGIUWVKYxvOOgDReKkVkB7E22' );
define( 'LOGGED_IN_SALT',   '1v0QAcPRGzc9L8ovlvK9EPhzlEOKuciJGj1I7s6HYjsDL4RaUrVeR7eYgGU1QQaF' );
define( 'NONCE_SALT',       'Ry0vDMxKfivqv38gMxNCFjGRSrQXg9oVu25bJ1PyhgwT28DUeUHE1HWysR8chMHX' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
