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
define( 'DB_NAME', 'Owen' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Af/MUdY%<]1]d[ IVygqbQ?8=oK!Q!$xdoZDu$xisv#K}_4J+$H&n$jz9/v:ZH@;' );
define( 'SECURE_AUTH_KEY',  'H|4PU G?q2WfC~m6*=s0Z}s9n,cn<IHaF2E U:Yn&$fh=g<Sqz>zsOL1zDSSki.7' );
define( 'LOGGED_IN_KEY',    'EW!FPJ9QV`X7f(goIJ05k_P!T2v$-(@OR^c!mSk:3AH[DqBsf;DNV!I_F?a1_*?~' );
define( 'NONCE_KEY',        'p}.Gq%^ E~O`I8$pK&P(w}_L`KT2KhvB2l(a}S%j?GYKvx]8i[Au#vgs2#W?%F-{' );
define( 'AUTH_SALT',        'x3i5NqI`3TGc_#rfeWTMrBbSjU`kg#fml,xsqjwC5>{$xH(xvM+FkE9*bvF/<L>T' );
define( 'SECURE_AUTH_SALT', 'n6$d(GBd[tQV.T_h]R+T{1c2R$5>Uj,X_3f5>1hUBQgg7Cw~#w&cyS^p=S1Z@@Ta' );
define( 'LOGGED_IN_SALT',   '1!(b~%4q8EzRZ@oucu!@/^QWrYLvMq>}(#?fN_6h#(fH_/)Zdg3}1.+vHvaZY[Z1' );
define( 'NONCE_SALT',       '^;W_E_ng9d6~9|0iLivPe[euA+KniC~D<G<E13I0f>R~t{}`CtY%<Zh^@g&lPxTy' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
