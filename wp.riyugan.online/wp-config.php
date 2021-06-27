<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


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
define( 'DB_NAME', 'riyugano_wp190' );

/** MySQL database username */
define( 'DB_USER', 'riyugano_wp190' );

/** MySQL database password */
define( 'DB_PASSWORD', '[pSKc81N@5' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'wukqnwd67kizhndptzgauyy4101ogltsgijlpjir1c11fdpx0kmjlrvyhmlu2zms' );
define( 'SECURE_AUTH_KEY',  'zgvk7gtgag72hwjfnkbarlr4voar8e1ln4wz62cxmacovkwurpknc9nnh0yqhbgq' );
define( 'LOGGED_IN_KEY',    'gwftjgiv7koqiyxgkwtpvusnjgekikffuuhtuzblwxyevd5j9iiww8pjnrydeazk' );
define( 'NONCE_KEY',        'kgq92ewopc1ssjr3qwiadsr8ch5bgckctpjfz7nrbyzyby5lfd7dheww2gd4kfcn' );
define( 'AUTH_SALT',        'm1tskp3jv7iqo8msufcr5mntyb1uto5jxqjtws1eob3naxecfofokdfjvrndutnd' );
define( 'SECURE_AUTH_SALT', 'xbeszhp5uxjpkzcp0rnbbb0alaqo9u4evrr1bifsttqpcwm4qmjvkrx2rugwhhhd' );
define( 'LOGGED_IN_SALT',   'pyloojutnkhrelvsg9zbytldfm6k9spi4wduhfqxyzppoilxxsnyye98gta1ivpm' );
define( 'NONCE_SALT',       '55qple9tgogedunwuegnaoyqxkdwz1tihb8trmydxpmhbfckuwovlfdbseiqwt5j' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wppr_';

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
