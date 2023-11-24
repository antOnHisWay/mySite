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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'relievestress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

/** Database hostname */
define( 'DB_HOST', '172.17.0.3' );

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
define( 'AUTH_KEY',         '4.aWXoQ(`c/T/iD&.8WI#;(R=I8CB2qLt5(r[@tI0%^vS/GQ&YT`ehWa-xoxcL}w' );
define( 'SECURE_AUTH_KEY',  'rGTwe^f%F2(_`e{}Ij`.OS~K{Fl }*&OT]YBWB?X :(k4D3nuAZjWlz5 0_2J(nr' );
define( 'LOGGED_IN_KEY',    '>L7fNlN9)#68)62M.]M6U%t#EM]UK< m+=ZA<+r*5bIW?jbmVCISp1Wiv|Zpy3*Y' );
define( 'NONCE_KEY',        '{WMW_QzQ)F5B]|mZOEauSMfzbJ70i.~_&INQ}ada KYKVH fAh|Kt@@%<0WkiC%)' );
define( 'AUTH_SALT',        'n/rJ]Z}B:P=<7KTRV`hw2FAk*X$+&@+zcf_~7feO7Mx*C^cK3THeeoHArH8{9JpI' );
define( 'SECURE_AUTH_SALT', 'd<s*0=Vv32.zL]Q;@h{k4>0<;o7htDYw$DiU^El8t4Sa6uKqz2:=Ft_vll$uJba.' );
define( 'LOGGED_IN_SALT',   'I9{7gaLDwwi8a>#G]nhLl]<kf?qmz%J]N^YL=wQ5MTvm}+7?;7oIA3w8i1M!&au0' );
define( 'NONCE_SALT',       '8UbKF[ErMS581>2|c-H6kO7r=#~JDroM._}cSa[@Ae6P#C<=h1;<ZDnH;3yqH,@U' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rs_';

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
