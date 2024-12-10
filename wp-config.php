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
define( 'DB_NAME', 'yzk_blog' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Yzk190326.' );

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
define( 'AUTH_KEY',         '_yBPXgG8[nMcGVI9aZ`;oPZd;b*g+]v+2AMpM.TURcj)rZch:LPuv#+r48mZ-5&f' );
define( 'SECURE_AUTH_KEY',  '?>oq7&ngmW.W,S#t72zWm^69.+NFW)cj{A[_JX}4R{$u+O>G%E=y.,gf])+S>y*u' );
define( 'LOGGED_IN_KEY',    '-s[D#PWF#@mi2bzQDB=d`?L=+:bFP.)SD3Zur?p4nR]l{ABal<}#H3dv`1y:d&)8' );
define( 'NONCE_KEY',        '<hq<D2.fmC0GuJa#@/n8H5ks=Dm:,o lj=E0Ym_ThfOAe&lg)~<pEH`i[vQ*Bb/:' );
define( 'AUTH_SALT',        'i<Sg2Is!4p-*5rV^3/Vh5Ueo]9V/peOU7rvNM4*3F}ZYu^~0!%z|A5(Fwts4-;oe' );
define( 'SECURE_AUTH_SALT', 'p_$Kam;/#SB  qcR34Z+|%.W;OhB#BBe,0?E1nDU<G_>(Kw9IYvH)SQO8JUs(7&m' );
define( 'LOGGED_IN_SALT',   'yq}[;X!rC+A+1pQ+Yf&*)&N=]j!,AHQjrtojF7#6Q]31|-~,skLk GJ&S/N+Exb.' );
define( 'NONCE_SALT',       '(]65hpe|7i1bGhzG=,r7;ELH_{ O-@ zKhGI0C;}K_>vo$.2pG=U!c5nMNjNS<5e' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
