<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lzzggukd_wp_2kjvo' );

/** Database username */
define( 'DB_USER', 'lzzggukd_wp_nncnf' );

/** Database password */
define( 'DB_PASSWORD', '*5!XjAd6R1Vy_DTx' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY', '5Y[xj7k9W@3_tYrsW8Ca+2w+8ObZ5akb#;9GHf-#[s6v3+k(Ue623W|2xWERk8eL');
define('SECURE_AUTH_KEY', 'Lf8:;M@wO0OaKnWhWog7hO!Kutg!G%v4F6HFV5ga@6m(AuW%93ixrQ)1~Ae4#g3n');
define('LOGGED_IN_KEY', '_[47;@6_Cz30n-8C0teHinQRFI63MZ9Sae7*q5:9S7]&J~-Jj4m4dA~5y&7qM8Lv');
define('NONCE_KEY', '4#6#DfIN9nT(kn*1!+2)fy5%8h2k|397F5)fj]zFo|48s|722Rv(94Nmma8pwto:');
define('AUTH_SALT', 'Yg9(tWVC*n0~jJYj8M:5_Xg#cR[gn8DR/2|]1m9GzTOPm45~Q29t34[p6[1ixt5%');
define('SECURE_AUTH_SALT', 'A+HR|yK:ZYyH4481x[o/a3eYzn!wqa1:ujY;37q!9i7Z))n]Gcn04xfhCEuhi;g1');
define('LOGGED_IN_SALT', '*VvqD_P+(8s86/pp8~fjUi(g+y5AeXp3%KuSe(245C80Qha6|0L[9|K8y2C_#/Jn');
define('NONCE_SALT', 'h68eib0O)4kms0##I]cBP8g5;7J&TSfX#-v@:y:@H09W@_c#jW0SOvVau7c/Ebg)');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wxdVNG_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
