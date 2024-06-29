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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demo2' );

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
define( 'AUTH_KEY',         'Yso)u]>MwUPnH8h5SI*$AgG p2JKzIIL+0,K?z96}OrdwoMYs%5#oTR0AvFE2Q_v' );
define( 'SECURE_AUTH_KEY',  '6SU>aSf3flRWSM8 =X1Wo:3n`+W.1nj]N]~^)+`] by?=otx^FlL3FrRdPnOt3!c' );
define( 'LOGGED_IN_KEY',    '=(ZBM ?k0wpX^Oi{uIGr%sJ|uF8=m-fD%Ay/Km-Aw?J}J)gsBs/+,6+b:p/2!1<N' );
define( 'NONCE_KEY',        'Zij(D&t&AhM[=W[r(Sow2z{p68q~1NauwT*O2)}}~sN5J$&gX]YNtG/pr4Q!HF+9' );
define( 'AUTH_SALT',        'Hd+RK/./C0PAPfH-~.#q?XCAi9]-mtm}!.Cv[#{gPgT$CZ/(Ln!FN<hQr,O#YFaU' );
define( 'SECURE_AUTH_SALT', 'Mk~GvdH?UFXXOnVC@Yt/j4Lx$*wCVnswlqNtAvxZSOMkJ&m?5ykT[E6%9MqE;n;&' );
define( 'LOGGED_IN_SALT',   'inJSgIF9C{Iq. An:%|tJ`Ba,URj]DX8)u@la$Z<#F32G*zI?4,W*2|~uEv,SIK.' );
define( 'NONCE_SALT',       'R.5){mZdiqR}%T4jXFAm|.%m[Nm3H#>A6Q@P{q^KSx(u96]9O?X<,:Asfxq:X=e.' );

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
