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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'projectfix' );

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
define( 'AUTH_KEY',         'dA!K$$%:s9EK(nqDpGt!Px?v`-mhqb[EF8&?&zs+?Nn3)+N)PJkm=0WBe#IS:HWf' );
define( 'SECURE_AUTH_KEY',  'dsI@7Kw[G#NQ7<G|IC-uLNY3dDbnc*BcSDBe2z9*}#yP+Po.e9ZoMm$hs*3qj*(5' );
define( 'LOGGED_IN_KEY',    '+3{x6ylo/HO(3jTsbY6vm0($t[;(IZ/u*BiW||Zhed<tlpwGt6GT7Nb~^5r QaZp' );
define( 'NONCE_KEY',        '*2_~g!-Bu:rfSfb$nO54gRf1/+fe!2FHCRT@o{3p,2!=>FrLk054F3[#-IY?`m3)' );
define( 'AUTH_SALT',        '7:?5mMV`{,tT+rqgeFeLUCyhY$kPaxA]~ #&WD_~}z:{.(OjmjSM(l4`#[DkfJ1a' );
define( 'SECURE_AUTH_SALT', 's~P*ge0VRp:{}I@+Z4F(qd}Gaa1iZjjj*Ry1W%~>z.o(oLyM~>**RewQ)Cp|K9TL' );
define( 'LOGGED_IN_SALT',   ')$z/Yaqok%@MInVFoe~p+7Hp:M4hnEwbl}g8~3lj_SA%VY[wx%3e&)(^wBinz^&q' );
define( 'NONCE_SALT',       '+`/G0<Xclux)TKG+.}3w(Z jU3l84_Gwww[M|.NN)Z$hM*mD!0-QEV[l_ESMF+Gw' );

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
