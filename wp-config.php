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
define( 'DB_NAME', 'emall' );

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
define( 'AUTH_KEY',         'lqTab1Rq3M`;Zj;L$ZUXm*d^b.90GvEdXE$qdv]uP;Cw_7&2/MsNo]HrJ.|*Iktx' );
define( 'SECURE_AUTH_KEY',  '` sbbh9>YO&EMI5U~L*Ow|m65HjYBX`8P=QdGoJ}p.i*Hg:91l]uV&Vh=Vo_NOTW' );
define( 'LOGGED_IN_KEY',    'dz16diRs8E}Q[j3-U O2`JbawZT[VXo[)s54jHhqz3;W*.fF|WT5lEPENF$4U[/,' );
define( 'NONCE_KEY',        '?%BiS~ur*Rp%mO|%4:sdPJ(/8DeogQ>9ubP0DqkEvmm:PX<?J4T5)TtG^[E-C$P&' );
define( 'AUTH_SALT',        'T.2d!9@*@*7Hoft%e<getTT&H%vo$l4};f+lX(9GsIwIB8HY?-]$T^s(Av4MY;Ap' );
define( 'SECURE_AUTH_SALT', '0>vlKgsI`+dIru0&s;:XwQ%*+U[4+@* TApG[js`=Ve9zKq)hpS3I}8]*JU)9A.X' );
define( 'LOGGED_IN_SALT',   '~qw_U2F0{{xR1Su~>u*f(t?xW^2eF:3MXUx|oA/Qi+ |U1-=Az.JmOR3C,9,[=cw' );
define( 'NONCE_SALT',       '025u>G{)7CHp%~jGbspAd 31}=XNl-a^1X^:zl:80Xx.yuGy<mI&HTjD(AE<>[fI' );

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
