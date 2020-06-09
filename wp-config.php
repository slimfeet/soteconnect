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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'soteconnect_db' );

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
define( 'AUTH_KEY',         'Qg#+5e?A@H8|i=_Ts]SNbuKv/0@Us3F<rgOdG*{oghFxQ5M#I0O<*_oS7$N|g4U3' );
define( 'SECURE_AUTH_KEY',  'Q=T6}e?s8z/IF/Z/4/qCId=j{BjvTTtnHB4{67*;GHWcb>Or8-6>{P@</39|#.3&' );
define( 'LOGGED_IN_KEY',    'qsecndz 7,],- oKkt+$GGr_ivu~72_tS)Vc<|~|1<G$?`Gwh>(5@G-H;a.R|D=e' );
define( 'NONCE_KEY',        '`QotzoeIl|r9b+`35wvsy#^VgaZnkTd(S4|QZd:WbgNO;rDwoX5t)N>]akuP+]yK' );
define( 'AUTH_SALT',        'VpCS:PkXYo&@wf0,w|7O20oiOm1T4;r53kBjVx#VE0<<m4=T*!<v(_subd~]6!hZ' );
define( 'SECURE_AUTH_SALT', 'GhvKcQ0.i1I,OIa*juk_NV+~k*U ZkaG6n>jcQ33cx-a3P{*;u)xQuK(ghu%RS-r' );
define( 'LOGGED_IN_SALT',   '}<v$X%GF9vy`1)[u(e$fXv=3RFQ4xN}Pmtt)s| Q4&225>QsT>kt)-9G/ZETp0W%' );
define( 'NONCE_SALT',       '=#]GMea~>J6~KU`,vf4#c}m|}.E.kssM]0QQbKthu+Q9UmuZ6ffZqo?V/Hi~]V14' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
