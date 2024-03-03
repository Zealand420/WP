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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'q])1$&V[[]]-4;8m+Z`0b94n~cRJw{*!z)R hb-e&j&:t<+3%*3u>X_?77wj[40g' );
define( 'SECURE_AUTH_KEY',  '!>0%P*E:i_ij,vt0JP)0v8y9w=V=k2$;5(/C%Fs{l8FGzKPprj7[GxXE3ENILhL;' );
define( 'LOGGED_IN_KEY',    'C37d#0PX}~N/{(zsHEa{t@9q!S{*j3*7pcZetS|?gI9$zj#t{}x<D&]y]`b7q8n`' );
define( 'NONCE_KEY',        '/}DYK-)ouV9Uf*,b[[rCzG;^0y{5Y[n8@;#(LF!iVBg5Qw|SO,+(jf]00ETZQz;$' );
define( 'AUTH_SALT',        'rmgnub(fBV-fbc#o]N}m@]SP4kKBJ=*S~+H)@AzT5n9||,SMC2k[&^KV9 n&bdKq' );
define( 'SECURE_AUTH_SALT', '`|SFOI!E#9m#<bNj4Wg{F@}}H8*xco>1w@>ZCJo2t>R/Oi}]+7:n8i(JW(e{]dU~' );
define( 'LOGGED_IN_SALT',   '21)jjG:+f2TW>%L2?vZ+;nn4E,C5g4+={Ct<Lf<MXp/y(dI8}~}R RFns-ozHS~p' );
define( 'NONCE_SALT',       '>K4<k26EFWDd!#t.H<j:3aZ%oWH=M3+hMp Ex/S=1ktlvWZPm+OA/<PfW=V@#(Ox' );

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
