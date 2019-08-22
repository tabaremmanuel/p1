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
define( 'DB_NAME', 'p1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'D-lSDh2j6^xEb`k}-ZKL hp[5Qk5=,9mU-+$Gy6qlTj}|u5O4UV<}cCsQ#lyT-Z4' );
define( 'SECURE_AUTH_KEY',  'X7tu:xo0(;kqAgM^?Aeg-w`:;WZ!O _ XDqGsai9)h4eqZWIAg!K|X`fRSW&f9s ' );
define( 'LOGGED_IN_KEY',    'AmtJ0c{2K(sEBwY*&4Fh6*$NMN2x,4/AlSIs1X*=;GZEj0lGp&KlsjF$z/hVIa}N' );
define( 'NONCE_KEY',        'Jk;>Y~!mR;~Kvp&)a1k}-ou46gK1>I0es/+]>5sGq0TG9>-.e.YJH-CXn#0P4B!y' );
define( 'AUTH_SALT',        '._d|G0+{sA lLqK7SC=0AjSq%uoNSY5X~hhf)Wq!]Kd2-`)h >P%lmHOH&Za99$2' );
define( 'SECURE_AUTH_SALT', 'V7S;C;()QpFiUg&QS<E4rQ2=mor}p!BG(wx-Sb*M0QB-mM&cS#:~1Dh0;=W?,TAN' );
define( 'LOGGED_IN_SALT',   '[*CY;+qbJG{bhgBbNv*6W0{[x{i4HR]lB6`6z[4(4,A9E?Hz$!tb/4L?1CRsERo=' );
define( 'NONCE_SALT',       '*eGuy%#Ms?6H?!]lYohonBF>PZUpykf*|0 BXAHCa[02Fb.t9+zOt%w K|FGr:|u' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
