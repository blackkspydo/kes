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
define( 'DB_NAME', 'kes' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'HAg/dH+zusN{Jj&dBFSBZ8fWMfXJjyk+*heDwtDsKg4#=J%?*7UkTM,f#RTZqLP`' );
define( 'SECURE_AUTH_KEY',  ' s@V~wZ))JHiasWM+^NXM6JY:ak|J,a%x:xZ.UJfJzG*n=77<G:@>f&#1e~X@mv?' );
define( 'LOGGED_IN_KEY',    ']ND}`C4t;I1kt_3e3-]H[a4b^ucmTI`F&L4$9KY%mt+qnR[bQ{i[Y%AhhZ)r&_~~' );
define( 'NONCE_KEY',        'xE-,{(5sK*v8k8u3b&l{ca7c:kPM+k#E!ia|QW!P&Yw#&kPW-n4^tF$?q?4Mo$(8' );
define( 'AUTH_SALT',        '*Cd0.B_ZlnU.jL|(HHp3`qd08?Gc#ls8~BJb:o^Yebh`*xz%,L8^1&Tk^0gsl3z!' );
define( 'SECURE_AUTH_SALT', 'RFvc#-<D(o)N/ZbjXH+q<L sGpp/1cMoZ~I6&^L7?Lq(l4wXiYm7^wOsRl57uCsz' );
define( 'LOGGED_IN_SALT',   '}P?7gWaEo%.~V].cV5% CcoQ6{e|=,}?i~{?cVf|=54Bq}r_Z<YyT)-0Q)EM[ H5' );
define( 'NONCE_SALT',       'zQI#LQpagV&L={%qL7M+K$/SSx#-`6U;OyH e@tba|p)Go#ohHTbtN#qt$kPH)D+' );

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
