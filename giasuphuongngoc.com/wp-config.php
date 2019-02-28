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
define( 'DB_NAME', 'giasuphuongngoc' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Sz~u_&S&QDJ*_B(sh)o1drwi]RSle+p,EiP;ZID6hf3+%?LS8 9Q`Vf],O]`eCAe' );
define( 'SECURE_AUTH_KEY',  'B{ AinjzDh@|~Hub:i1bi0ak-[|jOGft!)$D>DV`F]HRxvo*Vuy1%fv4>O*Yvd! ' );
define( 'LOGGED_IN_KEY',    'tyuY27:gwIP/=Z6=muSA7zeo`4AsZ*,hnCq^L@s.1P9Vrr4CYm}ZHY[=-/)5|G,E' );
define( 'NONCE_KEY',        '[pU+0;4Y}0Q~Q6$(=Auz#KIT2oyIRvi!PLOelm6j_R9.uhKY&W[BTWiB*JA%#I#H' );
define( 'AUTH_SALT',        '5FB*1!SX)*a=&$T#SQ?RHV@cKk3hqm#<x$`:>0t(to9fJeMJzQ(@dp47wevUa#FE' );
define( 'SECURE_AUTH_SALT', '/%k9 ]:c(gM6EmUH:/T DQAo-Pjl-f&3oe+cyj5to)IGFwCdCEz]n<3=8d&<}H*W' );
define( 'LOGGED_IN_SALT',   'ef`&i9Sd)83>*=inmC:2&nRFbaNPS+jqxVQ{k_Eh|J`6]wO[#[p21/I9y@)%%#$L' );
define( 'NONCE_SALT',       'zHBFNyh<|;-=<.-u]&z$z-YiOghg-w9SQ$Vc*?PMG;UXp>Ac|WRBP.+kaI/&+}ed' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_gs_';

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
