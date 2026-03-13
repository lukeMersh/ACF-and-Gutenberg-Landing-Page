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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'v5*xI %CocL4b$IK(D4uO{_:A^:uc]W_ Y_ZR+hT^Y~rB-O4[-~@J2uA$CWjU?Ji' );
define( 'SECURE_AUTH_KEY',   ']K.o]$^yvCp$kd2_AK!Pe> K@0bfGN}/9/NP{xL*w?$8CdBYncr3je7W!&c%v#[M' );
define( 'LOGGED_IN_KEY',     'z[2IEh+Ir3P9vD>=JQ@>T3{$L>{.(/8w?lV/M@D7Y],V[nwZqt97C7[xaY}za[-y' );
define( 'NONCE_KEY',         'OAMH$VYHLv,O]S40?A|ihVlz-oT6.XgAtn$;UIT&+%/Q9`QG~P*efVDJAu$UThS[' );
define( 'AUTH_SALT',         'cLgzt|H+(=@a(fm700{v7Q0ik%wmi:NsrgudKC[KYM;}g3d(uO^wNa%fsn=2jsSF' );
define( 'SECURE_AUTH_SALT',  'bDH[*r$j!E)9&1DM$:Q+_;&`U?9RfNWCEE*y$Q|;K,K}* 7`TS,;%5:*TOM7**0R' );
define( 'LOGGED_IN_SALT',    '!$U]p1gXazn.E1/rg1TI &O!z_21A0Z$#yuxYxIb-f|Cw:J5rvvio+nqr*p3rR0#' );
define( 'NONCE_SALT',        'x/|@Ci~@e{i3*0VmxF%^&)8Zn(MQX:,#O ,#]8>Gw)=_Z!Wda>Q@jHQ_#6X.s#S3' );
define( 'WP_CACHE_KEY_SALT', '4L3a Cew|_>`JK$?9(uN|=st#q]0cDvVMyJT,8,*6Yu}-CwU>[/S]pi4$/rHlv@!' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
