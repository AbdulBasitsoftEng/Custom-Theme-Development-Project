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
define( 'DB_NAME', 'customtheme' );

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
define( 'AUTH_KEY',         ',r^9Rk1P{FnHa9h#6mo.P,CPyf(QTrK6:-TA^WPGg<2)RsH#|EmjEFx?,a}WTdL{' );
define( 'SECURE_AUTH_KEY',  'G?Y)OGnt$+YM2T5Bw]cjL+JNb-H0P=A|xD(U2>Vq>~ti*L(tdSK[N0tSQ7ZL`Jw4' );
define( 'LOGGED_IN_KEY',    '}Ni^ tk(,ohpw/cPTURPowj/>Xae(N1Ri;21);<hT`3Hmp9:j2:uQ_&9.%^8}Re8' );
define( 'NONCE_KEY',        '!=@s5$]Pc9q%t>3R2@lj0*1fLLpVdvkm~RaTT3sn~N!HXM:jjU-rkON24T[BczN]' );
define( 'AUTH_SALT',        'x:FV}kI*]:INpyn9I<X%XI]KkyH:L_]^}x++Ly>p@/R_R!hSq$]J*Gr|J!H7e)?U' );
define( 'SECURE_AUTH_SALT', 'UzqPxec-*h%be,$rx),AR| 2P}B&2O:A?IR-LqJuVFN2)q%Hzt+L#m>K-x6~G*+z' );
define( 'LOGGED_IN_SALT',   '6wq/;=/nI+#^cNJ0u i370P$$Q&;[8!sq<ss:9#z*$|aW]I/OR1m[`Os00TQ5+:.' );
define( 'NONCE_SALT',       'zN_ZZ{[LX+ThQu/jvw]?555(e#5eD[}q5i h*jC0|{uxL!?x43cI?W ^6w+/ulsw' );

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
