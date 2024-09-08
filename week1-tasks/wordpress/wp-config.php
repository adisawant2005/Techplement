<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
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
define( 'AUTH_KEY',         '])BQ%r+WY|6o_H~l(tpG&k{xO-yYZ-g:K^[izrPb/%}}]c,|yVNWC!tu*2-8!W%#' );
define( 'SECURE_AUTH_KEY',  '#Abz5_ ob0?Eq?=8Rx/)>#gcBV6lz55wz<-o6;9k2OxRXi%-U$iLgIf<bQK;>d 9' );
define( 'LOGGED_IN_KEY',    '&VWqJ+Hcv|dL(I1F?QO0ta*|1~stlYt0jDd).bxnU?R|60,hjP[BmA$L>x)=0>$~' );
define( 'NONCE_KEY',        '5>6q0_Ev(<g%)>b?u>EXb-qt! W.++b5zwW3SdMvdsEWj0c]@0|2U{n<U(T$*[:c' );
define( 'AUTH_SALT',        '.*FgiTAKDRg2aCutBvhQg(EOL=|t}YNysi;O_uQ|mYU<^r T wI)k7K.A4H;nj+}' );
define( 'SECURE_AUTH_SALT', 'IQ.Yj$.[enICG$~S!` ?N<H?VecxptPnX,g+hSP/mhnyvSNxKl3+{^qpj_al}<7H' );
define( 'LOGGED_IN_SALT',   'BXu<Z}jMEg=gAG-r)9IOMvbjVvV8WOlQz.H/2ORtk]^Jgbx6VhZZ~^qN7WTtz9u&' );
define( 'NONCE_SALT',       'lm-a*,]MJ^gDUoXPc3R(rLPEI/QNkf^BPpOiuzrhGXw!3bNhC*47>ViTH>}yI_Vs' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
