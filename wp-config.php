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
define( 'DB_NAME', 'university' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ';DGSEyL}wpB7*7[+SaQ<1I2&~i4IK=I$[DroP[Z2n)#k)S9R/gM^s6MN4!T=B?q-' );
define( 'SECURE_AUTH_KEY',  '|!B6+zohU_QsEiC%EM^PYx5!krkJsv7d}xArhjrBzo(W`$,|snsA{nti7BqH_MaM' );
define( 'LOGGED_IN_KEY',    'kw[u2 %?0k}s2M+Kzy54`#5+@PLza_T:DcZ{:@N5eCRkBrkX^]jpQ!x#&>5BO7+&' );
define( 'NONCE_KEY',        '5(2GXB1.uRm&SPmwmmvYS<[HGo[&@[(g`r8<E/4T5dO/NlKJPEo]k.#i_7 ee5~Z' );
define( 'AUTH_SALT',        'r5SjlQo,{sU430xhu..Go!Ilips2?{gFBi/x=qzgx7}0r+w(V>e^z07Tlog[l}?K' );
define( 'SECURE_AUTH_SALT', '. <GY#cM@rRs N,8P8Re:rpYn6|0w=!1/{dIljJu|}@;bj$+/a7b)y}i>KZ-1Lqq' );
define( 'LOGGED_IN_SALT',   'BNzROTjR$tMQcOyejXO!<7sNHp^H?k1|./bgmN1/7.moSW$ybwlC<M0?lCy{2@A5' );
define( 'NONCE_SALT',       'qK`ZS8IR,;?t~M3Xhd+!mJyy[8U1WDK|gndUJE0?vL<<Y5w2~@fxPv,i$Dd,Q)L|' );

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
