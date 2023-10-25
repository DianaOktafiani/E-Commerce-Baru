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
define( 'DB_NAME', 'bd-belajarwoo' );

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
define( 'AUTH_KEY',         'j,3jKI{L1+p_=;~ic07GPG<O^}7&THw>!g}cn[./hjKlHEQtK<.3CL$ZC+p`O@t6' );
define( 'SECURE_AUTH_KEY',  'voxf;g3.;tKeYy.-*/x.K^w]A$v[~2]%I<[1lu!zKf(wB$:Ug>-)UsevBXgi|_6R' );
define( 'LOGGED_IN_KEY',    'qE+^ dj:?HH3^@FEa0AcFR0fN/%nYYXMikJ3#p|i!6WI!K`fZ6GuWX5=o#FO{lxY' );
define( 'NONCE_KEY',        'ewz@S73<LD$d(HK@>=Sj`YFd+kmO;#MC1hnDI(ulF7J}2xi.VjpjB[CIWba8TS>A' );
define( 'AUTH_SALT',        'Zt!mc77@rI%MOM-(y)t=2^d%JybpOx{EvP&T2]U)1jom`fd/T]t9Pu;Ce*wYDKO;' );
define( 'SECURE_AUTH_SALT', 'a*vv(U,2]vz,cdL~~@`>Hs~gqTk6{mhs]#sc-ZdTc8$n1`C0>M%WFQHlp82O)TKv' );
define( 'LOGGED_IN_SALT',   'HSCX]sG# M!/[Hn5qry+C;xk$v8W2h$+u%yo[QL,T6)Vp,mtG(C?7Rpr<FG#`o)0' );
define( 'NONCE_SALT',       'g(1+3#L{5ay{|&gR@_e`T3z^8{1hm*}NJD5)u.Mj,31%Y3]T{>lBW/SD/H=4+XF.' );

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
