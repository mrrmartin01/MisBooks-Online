<?php
define( 'WP_CACHE', false ); // By SiteGround Optimizer
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
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'Qwerty123456' );

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
define( 'AUTH_KEY',         '=zP#L`y{De$,7[v=b@p4e$Yy>M+;ENgy%t=b6=yA?%b&#<pR:Kc]r8Hd2LBv/uw=' );
define( 'SECURE_AUTH_KEY',  '}1ov e<i.&-YkPA$J|b!k2@.`M4<Y?dkwzR%/QX~o2)0>7yf^mOb[#O[2v{V,MVg' );
define( 'LOGGED_IN_KEY',    '?gsePxi6?.Z1l~YMmg+MeKW4Vq_0`zb:?lK]5uk.p?TqV;|XVn%V|fsr+ejp,:A_' );
define( 'NONCE_KEY',        ':JsR>xK=?#Vf{-k:w:Eh{[E$&V+`%a^FN|tWiUn::CnxyxXJ>Ev@Wv9) x]QC2/b' );
define( 'AUTH_SALT',        '0XzBmho}pf^3+>F}2_VD&6DipCs2v;jPg6:,5j21I3Gn-a)},5STmJ02x)WX`Eo2' );
define( 'SECURE_AUTH_SALT', 'V1qBdpS#Mr##W30*-joX`c{eL,+421mWswiO.w=9sUo$?rqLB,1%M+hb1;[4qG?h' );
define( 'LOGGED_IN_SALT',   'OI}{k/;5@uk{(g?kXUeqz#x1CI%`Bb2hC-sHC$aqt0fZs~SyU;,9YsBPn3(mG:*j' );
define( 'NONCE_SALT',       '--4f!2UJlfA%LZI&B9AXpvB.0TkIGSV1gi~Ekk3.>E4{1{$)mi?ktLsXH4#IWx[U' );

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
