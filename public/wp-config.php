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
define( 'AUTH_KEY',          'rI[`yOOH<8:2I%sY#0+zF14ayfrWUM>lR5d%ja6$^J.c X;XQnJoo{u1=>khLfi]' );
define( 'SECURE_AUTH_KEY',   'h$7!xCHF7W*+ueYI`uAo+QRWBA@_p>.AnRvNBBQ,qG6@L&@10f-0A5Nk2T<PIo/{' );
define( 'LOGGED_IN_KEY',     ';9To^3Y r^wb$#lQOoha>WK]>P8DN`<Q5|NWw|gwlfe|1]#n{(WCa=P~,dkCH2p;' );
define( 'NONCE_KEY',         'Lq<Ane:1j.rPmV&!Gr{<n!:ta!p$IE4S,{*7N!g0$SZTx~y~&4}xXr4x@vk$.KE$' );
define( 'AUTH_SALT',         '/U`CzwTRas9L@a3 JjB 4@[E%>Mqgq ZD(E9|R$mrAQ,*gEyz.;6/^+{$]+C1Mj{' );
define( 'SECURE_AUTH_SALT',  '%t#h,/ZOi?||VdGfQL*qt/Ahns+/3H+j$l6>>+&i&auP}}O#y7-4+v(:0RU$#MWh' );
define( 'LOGGED_IN_SALT',    't#wz`4&N+`]dB{^C,?iDfpJwRQ=PTp|n  1Uf|7.6,r^I~aJrsM=6vedShVjn`D}' );
define( 'NONCE_SALT',        '+Rb,E(u[3?@T}E$FRsttVg&(kv.}n#hJ9QP.3dX:MBqY!xtE|Im1^$ZB)V<|3=y,' );
define( 'WP_CACHE_KEY_SALT', 'CT,EJCz;J9M.CB?J-4[1J#IVgWJE<2xMAkiuU(369!GQDhPG5xDkPwS_!xNyP`O?' );


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
