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
define( 'DB_NAME', 'lavishlifecollections' );

/** MySQL database username */
define( 'DB_USER', 'lavishlife' );

/** MySQL database password */
define( 'DB_PASSWORD', '~%MRHtulO$YU' );

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
define( 'AUTH_KEY',         '>?ZX]=Mm1?K$T:cDyscb$b2OEe9Rgdl(aVnyrhQ7s`]H)Pq__1dotjen;~$E6tK5' );
define( 'SECURE_AUTH_KEY',  '%?`UtHKr)o)TM=KV;]{<malV+,SzY.?NK_b#RDQFw-R^4+rDQ9Vv?9L9UdX|Fb[{' );
define( 'LOGGED_IN_KEY',    'w.*(k6,IE ^P3Q?^fmFN9:Ev<^f!(n9>Qr>P:#0%B;R&mBy4?2^|L1(egg43~ZqC' );
define( 'NONCE_KEY',        '3Qavx|EzmGBzWDqD`3|R<#ss`*{$Xlnf DxI)8bf]gl?$x@94,X}(_VE]EJ!:-OA' );
define( 'AUTH_SALT',        'H?  ;Z26uSmZ(5fg@Hv22f2}JD7xm?{g>3CGWg4^bG64}s|PK$Y7$sjb6U-F>?wy' );
define( 'SECURE_AUTH_SALT', '9=:3cvf]RHH0.PL)t)2eT.vZ#_Mfx{/5iOBy!J^wdXH+gd?=Rlf#~]DIt<C!_35-' );
define( 'LOGGED_IN_SALT',   '|h?XtA0:$|j(Gcy~Bs<qOGXmr&*8>{9XPGt~sl.=>x{~B^emHw&%2gC{1Lp?NF5@' );
define( 'NONCE_SALT',       'H4]E:(j`yg`5@L_VBkIX6axW*S+3<C2UNb$YZ7+9;Y8qo0z7w.41cq[l9nk-4A1D' );

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
