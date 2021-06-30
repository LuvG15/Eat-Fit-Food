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
define( 'DB_NAME', 'eat-fit-food_db' );

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
define( 'AUTH_KEY',         'R$=S,;p@&h_I0YL<}$F9?7ADRtOYZ/NFN/cHq.6D)IfBd~p.NY&E@r{>;%N-!:Oh' );
define( 'SECURE_AUTH_KEY',  'TDoH:$TIsi<UG~@2Z_0 5qxVT_oXz1X4)KK{lBzBc ~.BJHKY!r;(shQMq<(r|]O' );
define( 'LOGGED_IN_KEY',    'q1<~BC|RKsZTx_Yy?qqh7d:G+bs*C3uQ8:CtMFlO_H4<m*I=9kCS?y%I0-$gL=@e' );
define( 'NONCE_KEY',        '3m)@)yr0o)17o-`W>kc.FJQ7ww~I8VA_h~[>?zlbplVW<2p;?oJ|)oowtvJ8WQRm' );
define( 'AUTH_SALT',        '!7-W`ij[NR`pTs9qmRD4tH20C1PlvOEwlKjp[B`yUCnNyo.`N=O^PLKaEpQlGO&n' );
define( 'SECURE_AUTH_SALT', 'Yt9^{td*0z{b/.~!I@)%HaU@i2~Cu%BI`.mr6)&nnz3q1%CH@Bb_#/MkkO?K>Ph.' );
define( 'LOGGED_IN_SALT',   'MA5CD`~ltCA_tM2#hflk8/w,xY%~~c]O-A42s1RfE:pj)BsRCM*)Mf3L^$JK-W:k' );
define( 'NONCE_SALT',       'UusdC&^cK6jV~wd4x@5iy_W0P]F`f5`Urr,)P@a!tuyGxVGUw#tk@fP7HPC&W`HK' );

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
