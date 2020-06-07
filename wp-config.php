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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_banshisbanarasi_new' );

/** MySQL database username */
define( 'DB_USER', 'banshisbanarasi' );

/** MySQL database password */
define( 'DB_PASSWORD', 'x7@PcPDd42}T' );

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
define( 'AUTH_KEY',         'h|?xPd1~SDM}L-)IcwNJL$JryuyKF5,t%Nj;O1{4j~~-`_rcF!V1`mcU@#nkF*Oo' );
define( 'SECURE_AUTH_KEY',  '6TQ[T}`TU( CJ^k%V1vgONa@f|*xaWyw6O^P5g@RAhi_(`/<xl~HdB<sS^rtk{|S' );
define( 'LOGGED_IN_KEY',    'qO*z81>5)UpF3/n.A@xY`(2#MdEu6e<G9hOSr34`}$.+6)q)bxS8au~dT&dWq0DB' );
define( 'NONCE_KEY',        'jxS$m*$KZH6PRxBOk?o;,&_t@!s[9Vy88Xo0,IO)H$zt,<E^OBWQ%:*E{Lt/GlZ*' );
define( 'AUTH_SALT',        '/W1k+h8@Jsn=dQV7nHZ^2*=fM./V+P[n6faG,(CD>b!.]V4r6PBcNnSSj`V~Rz)q' );
define( 'SECURE_AUTH_SALT', 'iN<[=YmikoqMd@}E^uygQQwd{I+4{b?HwLVRc!.$whMb#UJapD|{!-* o29,$,KU' );
define( 'LOGGED_IN_SALT',   '5d_2/HkkLoDneu=cS(g@,U!0^Z;(~J*t,-iBR .TJ)fq$v_W!.5,<enb6_P{f]%d' );
define( 'NONCE_SALT',       'H=bP^R+9NgKt3)+&@R8CIcm0xfSh;+@w|+VC%!LFOl8+<09jZ%;gj$;RS]qaE=KS' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
