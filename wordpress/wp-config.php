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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'yves' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         '5vIzIJy$@I5v<1>UV8=IlOE(ll9VyCVTB%fh!x7Qa500vaA[6#og?}(;_}Nl]F|I' );
define( 'SECURE_AUTH_KEY',  'x#aP/*sc1m&FsDz8!k8o=8XdTp`.=MEFv&4|3RSj&YwoJvV*d]gQIp?meswb%BWo' );
define( 'LOGGED_IN_KEY',    'IqZU]vNE{/F%DmJ JW3T#Rq6Jg{0Y`k sQS?>l3T$*07w:K(Px}6T~lV^/Us*2 .' );
define( 'NONCE_KEY',        '3N?i;X!2q4$=`*+utOL-f2Z7ficj3z6&9K]h+$#=F4mge}5~lF}tOv$b8I<v{^?m' );
define( 'AUTH_SALT',        '()ilQ;(S!MZwU=f*q uWC(z(Jop&!i.b(* Lg9[G`ouQL2#ffwr<?>fBpby*M_%F' );
define( 'SECURE_AUTH_SALT', '~r*031^4]Wpl9b6l5X7#wg}1@tBAZ?cITB:pcLf+>e8v?RBJBlKHMQ(Ij;d4eeB~' );
define( 'LOGGED_IN_SALT',   '%(Fum(:tnC|lnOHAkj03ou1IOj<pRJg*$rtIE:hrbGDb/gAadH:`~!j)kpCe.n5V' );
define( 'NONCE_SALT',       '=An-V8S9,Tp^XUPREpJ wXb[,R]8d4GXMas##hbXi=b:FBg;(OrARk7C~sT]LE}u' );

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
