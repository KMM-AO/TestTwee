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
define('AUTH_KEY',         'qEPd63x1q2nlKpN4DZ1Im85kt+TEj9aEBxFHI/V2noTc5OBz2+wfUUSpchK67E0zxEtJWeTOHmxP0301NXs1SQ==');
define('SECURE_AUTH_KEY',  'Un0dDQRVu+NOpUSmq8tpRwwiQb+U4D4dfyO118Z4GytUIP6hySbe6HddpvMyFrwYXW63J/OQOYM0pbYuhfx8BA==');
define('LOGGED_IN_KEY',    'WWpGpavqyROCG9JOnQQDFx0NfU/zLMI+qPLgOhsPjsxeih3fMntauQ18drWrtL/8uQbo5cDFshafFeKoJDb1hQ==');
define('NONCE_KEY',        'm5auGgsnOQwJRjdaEnDIN+Dm8mdZBaUny4zUtYzDLpr3FKO4LHOp7R6yau7SR480l/r3+qaJQhOeUH3FaeuOAg==');
define('AUTH_SALT',        '7Wr3C0z9gqNEyhnx9rbu8kBKCPUFYdJVG61PbL9Pw+IMh5zpRb7bVxFNwZRjbIFino4AQqr5+BXwaSvRRMwQNA==');
define('SECURE_AUTH_SALT', '8/bJEoj4wG7PlS0KLRhkaJoEbJ0odhSUyenBJHXu8LIpxNEEUzLbRsrQwZrEUDg/5spp3eZr9KoTY+aH9dTUUA==');
define('LOGGED_IN_SALT',   'ftdcXItEBBgCYGAOLhDg+pTJo0F1k4ygeJkZjnDxCTY4Hw2+BP3vQep6lCZfV/ndiZC8LOefk6wXPpei+NapGw==');
define('NONCE_SALT',       'gTSd2Ss/CjOScUB47o8Yv6z0Z25s+bsIYPxnT2wL/BB4bbgVGcuNrG+SI7EI+dgITkhc6ST3496/PZmyb59lCQ==');

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
