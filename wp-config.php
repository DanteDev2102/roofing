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
define( 'DB_NAME', 'creafzdi_roofing' );

/** Database username */
define( 'DB_USER', 'creafzdi_roofing_admin' );

/** Database password */
define( 'DB_PASSWORD', 'Admin9632$$' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'X&}Ol5ofBmk9Yk+E-,Ocf=f4U(+{+AVs`>ZPX}wYa=f2!0hTjUOP8PeWx/&f5Acc' );
define( 'SECURE_AUTH_KEY',  ',?uy{MyZS8dwd=0_7U#I:|I$p#?#_S[~0mc$M.Vm1sG^>nXWG.$YxRLnoV0J!!5:' );
define( 'LOGGED_IN_KEY',    '5Qaa,;H|0[Vijj_YAHZg()Sn_BXe@W1qi<(a?jh{U<G8bpf}H/ [@#JvQgC0>}=a' );
define( 'NONCE_KEY',        '@NazL1~1VNC@WbUw}[es(KoTJo{=`F@.SO;@xt?|l3%Hy,nrMwlU%9vrPsOT)c[=' );
define( 'AUTH_SALT',        ' <Ls$)^^d^LdvwxSlcK`Ar[JSha%~,8wsv-B-oT[2[q<ORR^!yfV|P_TfyW!jic0' );
define( 'SECURE_AUTH_SALT', '%$o-<R(+~RI-L!fOX`7p|E#bc! 1 sN/<59>yx&T@CPZ%g>+5<]dzyW7xdBW2y62' );
define( 'LOGGED_IN_SALT',   '),h;Cxb4;&<8NK2XKyDX0}u0wZ6Up&|=Y>S`?d*]2`u~IFP]3Ktp;VV-v x-M8wG' );
define( 'NONCE_SALT',       'zM<*`CN_*L`IH$//by1=D%*x<fGbHR,pfl]J_.&?hRA E81{M3dwK5ZK:29{4ia+' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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



define( 'WP_HOME', 'http://localhost:8080' );
define( 'WP_SITEURL', 'http://localhost:8080' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
