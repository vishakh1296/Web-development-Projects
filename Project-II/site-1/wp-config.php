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
define( 'DB_NAME', 'wp-site1' );

/** MySQL database username */
define( 'DB_USER', 'wp-site1' );

/** MySQL database password */
define( 'DB_PASSWORD', '3aeCEdDunQHTm3hF' );

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
define( 'AUTH_KEY',         '[VxlHXmUQbC]H^.>$>6)sv2[<dc$.TG?Inl9h$hH[V?*zUog%A+uJT[E:Hil{C7$' );
define( 'SECURE_AUTH_KEY',  'W2h?6AOK<6/[Z7hy[I?p>=@7U6Y]>PEvR87~6C:@/u[3q QQ5HTij8x8~wPL^UG#' );
define( 'LOGGED_IN_KEY',    '@cn_Y}LQm<oxbWTC?`%AnSwhwKbu$hm F=.ufMmGr4Po3KmS^X`-[Y6Bw_Gyz8xF' );
define( 'NONCE_KEY',        '>iMfyjcD8<2b:{e.^a,~tynt]K#RcoJM=^dL~oByc53%>z+:}BG.PuPLW[9Y[c$b' );
define( 'AUTH_SALT',        'X6>tW^K0`qAal&%o/V!VjG7CYr:|u(Mm}K1r}~$p`K5qUSPe*gCD0_>Z7L~cAD?&' );
define( 'SECURE_AUTH_SALT', ')*.#jvp7Z{x*Hz4{Eej(+) :=/),iHFeBK{{{/_+W*L<tD9&:-ev})mCn#KY%>+h' );
define( 'LOGGED_IN_SALT',   'b-+B;)xWL6R^Qan7tj.|~UfTejppQQEmqf>1Hun_u?Fx`!|FLi1j6hy4*![y)g7.' );
define( 'NONCE_SALT',       '-8KUC`l?,|a6bg44_~pOf6qVh+^V_]<%!L:,OlVLwnD!=}i^fj~+@sVFBz(|,_gu' );

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
