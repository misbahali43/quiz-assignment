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
define( 'DB_NAME', 'misbah_ali' );

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
define( 'AUTH_KEY',         '#wuSrzbHgch5^M|.Ad{72sJi/g37})B[6;jD--[tgrOmZ?`F8#1{)97YqFZho0K-' );
define( 'SECURE_AUTH_KEY',  '<^Ki4hE`mL&jgQ07HIIt3SyDen$N` wyP`0scu%^EqV+ZE%I,wbR6Wr_.Ba>rX=g' );
define( 'LOGGED_IN_KEY',    '*G/| L!IqM[1ht5Ss=}Z2GUoF;pd4ABqCPg[~Ck_j@yi:>a:)S!FO@-Ll;n0*+Qu' );
define( 'NONCE_KEY',        '7O.Rz+[4;N&HwSt9fzv2FPh:c>fawZQ.3C+?m&d_9Pc?xN(b1;n8veR_Ri?8;zvC' );
define( 'AUTH_SALT',        '*6PZ<(0w{Q;)u!P_NeIU]&ZSARhlpl/Ap@]YN<[@`fM!>r3*!j{BE==:@@em+O?D' );
define( 'SECURE_AUTH_SALT', ';rl,Bcsz2QAqKTab=xTpzz[ECup;CHH5zwe5;! P!Hj M,sgd1q6m7oCx@ON-Q :' );
define( 'LOGGED_IN_SALT',   '&84fsER#!b=Gs>:X&dR~;04({`f2_342$[$3D)8D<l_&c?$hX*hPRCR_bN0aKxch' );
define( 'NONCE_SALT',       '~gO9k{5p%~[/hh*!Mh)zP!!F?2R c; VnKSVS1y/97)-+I&}kX-W%~ S*a0ovd$n' );

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
