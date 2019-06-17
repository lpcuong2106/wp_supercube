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
define( 'DB_NAME', 'supercubiz' );

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
define( 'AUTH_KEY',         'Y^S]U}aC0 3zI9R2.H.vAICxfHH5Yx!SYuh@5j<S0=SfM!TEuG|?oObC|{@Q:0UY' );
define( 'SECURE_AUTH_KEY',  'Lq?s:==F@Gae9ZHeu~U.TVEHp]6Sz[]ZCXq|IXw0MX8aSEc)G3}BY,^VZd(DOTx3' );
define( 'LOGGED_IN_KEY',    'VQmg|VswRs5AOYtMH)-<rBAVOx)5Vaux-x;?r$].>v& SJl ;39%gw2-Lo)Yj;-g' );
define( 'NONCE_KEY',        'S%SL9u?(^qHf&n&E>2v$u9+=N=OlCiqD@x@aMEOb98i>4WdwS2JHT2ehG2nE}Bmr' );
define( 'AUTH_SALT',        'iL>_:_r#<|-#[TzDE>3Lf7hbUlx#.i:]U~:EH4VN_cI`9/B3[HfeE_^Izw-G!Ywv' );
define( 'SECURE_AUTH_SALT', 'q%4JFqWee4A>1m]JtSy9Rs9qQ)0C:T^4om]rtCl>.&xzjhMyNAre|/bh@/Hhoz1/' );
define( 'LOGGED_IN_SALT',   'Cb0T+Ub9,QE4/nSq{?cjj{bf;M xl2G!jH5Xl*#7%~6q>-m}aQd|O{f)W:#<_Nc8' );
define( 'NONCE_SALT',       'N(#v_~[[t6ASk7(/f3/~Ha<[qTG%Hha@sBUNLyO}*T$ !1Q.E513H$IFEKYAv^)B' );

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
