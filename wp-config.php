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
define( 'AUTH_KEY',         'bCMeRaVhIkp;Tye5KYA32Cj@-J4Qz#?ue({ltDuS|<Q[Nr2^>A]jyLcgVutzrQa;' );
define( 'SECURE_AUTH_KEY',  '@{sR=fdDNyR;oITMc~RWy_xL]&o!FZ)1}M{_F/@fyNHGN=1@W6~OJg/c&Y8Jta4;' );
define( 'LOGGED_IN_KEY',    '!y)!r!wPW(DaUK=>-=C%WD;[R~0PDCv^(vdM=p~QP8@iAYICa7_K9sc]0,FyKXVI' );
define( 'NONCE_KEY',        'B2SS-[a/5Fj2S#k_6xTvt&<=v`v(ALL& AGV)-PBikl=VhnQq^KgFVmfxcaTF`7@' );
define( 'AUTH_SALT',        'I>~n]@CI4)[0,w: oY}$2)b$u(A{_)kxZTc@%wq-v&twIbeo$z9m!GZ~C.A[Lvek' );
define( 'SECURE_AUTH_SALT', '6%%)I;653{G,M4aVr$:n=Y,|5yC!QB>/yWvvEkPe?<;F{}BoyBzRjv`H+-Lzo ho' );
define( 'LOGGED_IN_SALT',   '2v6jpK6N.{W]1t!(xje7Q:MgoeW Qz^7!D*VT~1#P3 1u%cRHxI5kL3g[>X9?G5p' );
define( 'NONCE_SALT',       'K/iIt4D{8n0WcnS!f95_fQ-f};1t|{7^L!ag}&FS=DiaL$X+!w7+*6.&BGTx,7B ' );

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
