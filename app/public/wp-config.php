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
define('AUTH_KEY',         '4SVsqhUwCSSIiiaND/hQ7sk8wKPJXlEZ0nzwgvVIQlbiuhT3QLAUCJLhjohFImdhGcoa5hik1rVPbPwotoS6jQ==');
define('SECURE_AUTH_KEY',  'ER9TMc1xQLlaaVgIXN5N9KSFoQS4ZF1c2XhOk3W8rwE4cyRdpT7+4Gd0jh9Kmc1Dkc2e3KfynBxBqJlc9zzIMg==');
define('LOGGED_IN_KEY',    'jlw4jgR87ZQslvfwUQ6aeYjEPaf9CaUgoebLslcRujWO+G0M0+LMHSwqYje3pA2UsQFFDn4wXgyQ7jhPP8zLQg==');
define('NONCE_KEY',        'dUUudm0dHawfgdLiREa+NXwVSRTxN+5HR1UTgi78jRfYy4aB7NlaOR1G53nNHnob/ncyK0Oyy2/pav0jYu0EVg==');
define('AUTH_SALT',        'UwEszBVx0z3F7yjqEBWj3cBk8vON2QqwKU8UYlxKl90NpoEbe10wUOcon3FfMMJO0hmniW/ST/ALADxhVNQHlw==');
define('SECURE_AUTH_SALT', 'IIozr7ZUh1rJNBeYRB7MWKvvGBSZEDIBxeaCKMJv3pYiAlHKZtyn4VrPk0X6+bcg1Ykycn2SBkPPgwE3D5qG+A==');
define('LOGGED_IN_SALT',   'agNcMmG2PhV479lxhg41SeWxv0/PSLcgGb7RpzcOdEJ6Hn1AxxKpcpor0h+XN3SZGQ43Owp531/Z+zO8MisciQ==');
define('NONCE_SALT',       'IqQxyp5hm2ycnBd3zkWUwPnFnJrDDp56zoHdKebf4YvSSpbph3CyAFqdGMJWqXuGAZ9ZGjZs5Y/i536q3tskFA==');

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
