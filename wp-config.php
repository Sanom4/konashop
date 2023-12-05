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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
/* Local INV - Sanom4
define( 'DB_NAME', 'konashop' );

/** Database username */
//define( 'DB_USER', 'root' );

/** Database password */
//define( 'DB_PASSWORD', 'nikolela05A@1' );

/** Database hostname */
//define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
//define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
//define( 'DB_COLLATE', '' );

/* end Local INV - Sanom4 */

//prod server
//define('DB_NAME', 'konashop_wp');

/** Database username */
//define('DB_USER', 'konashop_wp');

/** Database password */
//define('DB_PASSWORD', '&qr0582Gf');

/** Database hostname */
//define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
//define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
//define('DB_COLLATE', '');


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
define('AUTH_KEY',         'yje&-NoFqIU|uI:a:5ZrAU5scO]*Hq^e`MLUYEB]gsn.SyUR~6|;*@~8l:ul-Xe#');
define('SECURE_AUTH_KEY',  'H]:+X!/XB4zhp{Cij[$CNF%LP8y=A<[C8NTYp$oRw*o6$|Y_&jbusNzhL-v^P0Z:');
define('LOGGED_IN_KEY',    'NCly}L7))e.9XUx@8}6cZYT,K|},mib:nV)maxddVB{]^=u.2y1ODQP^!r+Qo?ez');
define('NONCE_KEY',        'bbHI}QCkMl${]Y|R,!?9S0ZMyO!Ue+6[ >@^G`5ZJ;MZTa{%XJSL=0]T:zc@Lz),');
define('AUTH_SALT',        'YFmqT$Z|y#Wuqbg.o[$:MDl=.bt(,zocSlv2Iek!QXIc2`[{3<?&3PO/8?{vGZ{6');
define('SECURE_AUTH_SALT', 'Amz}pQwEY+MH(D`4_Q?llxgSp_%YHtvsr2;!-2@u7ZdK|Pb8#w+m=YOmOVHmfb-k');
define('LOGGED_IN_SALT',   '.4w ;8Si,Y+r()BaZqeO)utv^E^*%Toznc,U )bH=-=vwK`JoR59#a-#V/RALQ^q');
define('NONCE_SALT',       ' `.+.:hgT}<!CEj=UM D%3&RSJy/f<QfthS1M`D=QBtuM_%Kx4rF]^(Am6hLNBKh');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kona_';

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
define('WP_DEBUG', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
