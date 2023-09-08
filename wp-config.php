<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ditwo2_wp734' );

/** Database username */
define( 'DB_USER', 'ditwo2_wp734' );

/** Database password */
define( 'DB_PASSWORD', '98!Symp8]s' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'jaabfwofhnfmpcfwyyhog44i92ceelqdoz0mcnhtwarpt7xelmvmxktohcj11oio' );
define( 'SECURE_AUTH_KEY',  'xhj5q9bcunlcoxbut5k3mtpmswc3clcrz3bolwfkcmdb1qokoehyphkcrnjakgdc' );
define( 'LOGGED_IN_KEY',    'mb95upgmew638liyolujaamduwmqygj0ikjndceyigwurmansykf754tmyqsszjq' );
define( 'NONCE_KEY',        'pc2zhiikfexuhfkfktzqy6tctw51h9rfmt95vcw4qqfpvfyytwsef0lwwekiyckl' );
define( 'AUTH_SALT',        'ri4u0yan99xufrpaeqblzqw20ssxewlgfr8dw6fv9ujpb176qlr44obeywklslet' );
define( 'SECURE_AUTH_SALT', 'pqghhrc2tpilzsafbshnvldu6ozblstca3csrldpis672cjqkjgts9jmjtjtreb5' );
define( 'LOGGED_IN_SALT',   'pbuko4slzmpep09mz0lmfjucl27mldakqm6gqshaqnso9luyk0zqju8sn2emmzlb' );
define( 'NONCE_SALT',       'upt1hf3awvg8vhi1nctg5oqh5jl67ysmjqdtlwgh1mr2ytiblpl6hl9iixllem3c' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpyd_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
