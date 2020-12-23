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
define( 'AUTH_KEY',         'kObVoiH_JyUUk2wDH:*,Rfu1S:/$YUN{g_>s:yh&++87)fG$!u*bM:g`et[2j2]W' );
define( 'SECURE_AUTH_KEY',  'A[4:TLk6_>u*m#n[jvwri5aCS)8ee$p8*H3V||Sn_zT[g&raxA.; m,8U:n.y<l,' );
define( 'LOGGED_IN_KEY',    '//op_`Cq-D}xn7;*#h}4>.<!qXbOp$J.JtmZm(@q4mYx C44wsC-df<]ABO0B3pA' );
define( 'NONCE_KEY',        'JsaDR[.Ni5RZw8$xa*;7yN~VHv4I.,)zyr2KhO|9!>e_b[nU`0RsSk$bdxSlj/*-' );
define( 'AUTH_SALT',        '~2No/tU<l(I#F2XB2x/,Jt5I|{+:s g;t~E-Imut81O*Tg]*%~=n?9k jjL5r*OH' );
define( 'SECURE_AUTH_SALT', '{Lr5vv+dugp-S/o@M>hcpJ$yM)roQ*sw]7:R+^u3pA]hjRt>a7B0GeTF08rP4n!+' );
define( 'LOGGED_IN_SALT',   'UIk<F}F|uEo6,OwHB#`vpRSW48?Nl:._eL:Di 8D=`.&Gbo<M4D|ZUL`C4uuFc({' );
define( 'NONCE_SALT',       '$R~i*aqjx%)(kSs9|i&ZHC X}w+ziif`#]u=m|b7g(;L1bkCjyeB,rnobOjA.~}r' );

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
