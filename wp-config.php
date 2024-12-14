<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'LUzvI-oGX bSgj@ZJM%ZQ/`pRtjzQ[:9}ml_BA%;{O8?#%33dWBNMY0w(9D 0(:G' );
define( 'SECURE_AUTH_KEY',  '%qM-_JbG]mwS6}]H<AAa:3N43#q!t.#vc0A<Q7j4eX{,&LPG>gfEcFQ%twYEe%v4' );
define( 'LOGGED_IN_KEY',    'Svu=8Ng5rtLYQ~O%0R-KeE$1R;woM#+^n1:qWADM&{P)xl@A|we:wuD%EXu7O_V!' );
define( 'NONCE_KEY',        '54V#`4f?1`W)nyX,:waU5cd21eZP5C-!_-o`~_uUdc`dy}}Kp{u/EAreeka+7:M|' );
define( 'AUTH_SALT',        'K7lF[dlJ|4TcB_=7H L?G<*c}D|k&wsD*aB6@zIej_c<L:g>ps9AyL& k(I6ej33' );
define( 'SECURE_AUTH_SALT', 'g<jToGG*8w@7FT&m.7y!_|WUS+C]6DrJzVjMn0IR05UWdf_H{yhZHa9?ED3wU _x' );
define( 'LOGGED_IN_SALT',   'Y,&ZIx?uf8P=W&*#U.*I8aBJeB%sFTXt_)W3QM=uk@vb7MAJdn{jmuP!d53m9do|' );
define( 'NONCE_SALT',       'GB-8(wSj0{N5I= ^N_H+&5v(wH(fX+`MkQV=z$W^/(}gDdv8m)m<Hr4-u`6Db-an' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
