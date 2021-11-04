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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'cTUhmn3N3y65I7odc4mm21RAKOWlr5TP08vNNFaLkY9l5FhW/5Fbdkbu+CpF24qcNMscRKYdhnsrRkLD8BYREw==');
define('SECURE_AUTH_KEY',  'YR4IBptfmUTxzItR7DFHtpmjiJ7u9rAWqkH1ABZtf+DUIJ1mgXkpw3zwY9uOy+SmCzTo/PrSZmEimv1OBloiEw==');
define('LOGGED_IN_KEY',    '3d/hKCguWALFdbw6268O+t5egTyd3YOYKAsXJFU8Va7mMsVmggIzGB3OL9s50PCocU3e7tvG7iIuAXaOPGaaNA==');
define('NONCE_KEY',        'PERptYP4i2vJb0MnUXxkU12klg6fC7rQgpGX4eUgKzexM3zauDYSuO6bBLU1BTGj0PwHSYMjeFt1JmsEhb5iFQ==');
define('AUTH_SALT',        'HmfNCYho1ig0h3JfvHff2aJJBUGBem56Y10AVQ7lp9e0ksoT4ta/ocKqlOx//fXbf2j94ZX+5Q1R2HGu/By7Fw==');
define('SECURE_AUTH_SALT', 'ZqbkFIqbCyQx0FptGUkz57kJi/YtwE00YpoD2uJrQ/Lp0cLqH47W/M8/sIdTz/flsfBgI7h2SP7IzOzx17Srag==');
define('LOGGED_IN_SALT',   'uxeF2rHPNCRu8Sorx5qCZmkxOMr0bQeQEOA1FBlLcGOcKnDHGuy449/XWkzGNN4k7TkuEJYNM5VUIv30gMUeuA==');
define('NONCE_SALT',       'Yq5bU+z4fUXM4U0mPeFS8sBwq6CJNWQJlQxCVHy/HnncQ84Ctcs3tYQewH4hMTJu0T14Yf3ucOmZr513+wUYUA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
