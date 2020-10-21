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
define( 'DB_NAME', 'benny_db' );

/** MySQL database username */
define( 'DB_USER', 'benny' );

/** MySQL database password */
define( 'DB_PASSWORD', 'PPEmRlgDXiDbrugM' );

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
define( 'AUTH_KEY',         '#CrWvtW4M?,,Uc}(p5sRJwjPa72!^Y,BV,1}]:eQ}mO%C}orNW2%KTTZ9x.$yeX ' );
define( 'SECURE_AUTH_KEY',  'WG_jpO5pK;LcXR^D|gEyS:8hk!C(<]^>yv,E[gxA|E&tpBPH1?ty.}MH,SE0Jpw_' );
define( 'LOGGED_IN_KEY',    '8$;O~|F.eR5~=kuj8&5=]68CR<TgLt[!wp8m~O1*;/K`a0;ur*Ik*]qH3!6q79tA' );
define( 'NONCE_KEY',        'glJuNk;Ci;({o+!N|*,wrCt0P2RdGt/hWWj2K#6Y_E#`y$d?j)%7XNs0dA{pg#.8' );
define( 'AUTH_SALT',        ';ZD?W0ZWOSzzld]G{`0w^Bx?.9Toc 1d6]d;][^Q<T!?vE->hmK9Am5D7)])rxx}' );
define( 'SECURE_AUTH_SALT', '~X-glFU|MQ11kl4e^{j9_eWCUv->b2;{1IhPoc37~?<dAC9loO}5|4E3GWJo[t7t' );
define( 'LOGGED_IN_SALT',   'f?qsCLcbx|H0:=Wi^78>0/5zs<48Z99k~P@) Y.2h.AbLIR5g@1YtBYdYK@o}kr-' );
define( 'NONCE_SALT',       '6[ v0to8WN)?fH{#^Dm;;/ji<%2+<.NtG8x rQ!<L<v`.Y#J^rQ7{xYo)vC#z=0 ' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
