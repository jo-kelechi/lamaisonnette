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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/lamaison/public_html/articles/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'lamaison_wp40' );

/** MySQL database username */
define( 'DB_USER', 'lamaison_wp40' );

/** MySQL database password */
define( 'DB_PASSWORD', '4)Sp7P(58e' );

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
define( 'AUTH_KEY',         '4gmbngnfjwjzvxdkzcp5r83kqstzeu5e1x6jawvia2zfdjynri0rz9xogbc63qxh' );
define( 'SECURE_AUTH_KEY',  'qgk6kculz04ziybtbvxzhsryzztetu4q6mxdtzktsproye0igbeks2vwy8mav5ps' );
define( 'LOGGED_IN_KEY',    '53dwsz4pkk4qyypsjqv4lh4dpgc0rn17hrlo1uuokm8e5rakw5uifoxzzh5iyzxl' );
define( 'NONCE_KEY',        'tdcdx4qftzdxmw2obsa4pnbzukbh5ey63iadyyhsbvqh2bgtgw7dwevqyjoferae' );
define( 'AUTH_SALT',        'pjvx7qzqjxlmgj3wotcuddqs8xfvdwg2ll8jldsovswp39gauu6trcfjjakr3bnm' );
define( 'SECURE_AUTH_SALT', 'yi0zo8wvdpjziq2umhpbisil90zeluaaf4vieeauvbrxfzko9amtflddoemtwhdy' );
define( 'LOGGED_IN_SALT',   'yq1xny5w6desbmdbquffvdjfeey6k1rfkmahfy03f5fzqokl9hvbbx2qq30pkoow' );
define( 'NONCE_SALT',       '4g44zsagljuykd3fesv1ygtd4q66kj2nqe8lcsaxkwoutsvplz6v5mauqfwbxfft' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpgx_';

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
