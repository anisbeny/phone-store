<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'phone' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ZR4pGBRBLyMuN24u86wMzLTBkRU24oSN4MIWBe8eEYRTaj8UatnVg9tDOzu3xdP0' );
define( 'SECURE_AUTH_KEY',  'uBKYdxnaOp6OfkoEoh4kTEKNS8vTTm3UwgSLsG6e0WG0qDuIgjDgZb2YB5JBCSOc' );
define( 'LOGGED_IN_KEY',    'qpigAPJWUskpPHxAyaCczN1zpV3kAGbXz2nibdy4Ct88bb6ntQc4jIaWZNPXmvQW' );
define( 'NONCE_KEY',        'xbUZl19YkrUA3n6gqtvj9cNuXygeZdkm7G7WiocB60HvrkWJjtFG8qr3Q7D3dubs' );
define( 'AUTH_SALT',        'WrzkG19Uel39b2JymsnJ2sS7ZovltztilIFdX1zeA3X3rlGbAKXB8oUjUj1ffY1D' );
define( 'SECURE_AUTH_SALT', 'wFi7pSb7sawfWZNBZSynNXuR35rWF0Dz5FrAZh7B75k1XYGlt90mAywIr88boN0z' );
define( 'LOGGED_IN_SALT',   '8U2S0LeiG11mHXQDCiJ3ys8C6JnxSJNRNBdX2xEXC7IYtAFvnvl84H89ZUd9yCiv' );
define( 'NONCE_SALT',       'T7N5hwlKdMQ36eiqX0fTccgw8eZBNwXuZtdqqql30hemtMVoUYqJZ2RFZj3OOLLd' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
