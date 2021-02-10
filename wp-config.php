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
define( 'DB_NAME', 'thetotalone_comartclub' );

/** MySQL database username */
define( 'DB_USER', 'thetotalone_comartclub' );

/** MySQL database password */
define( 'DB_PASSWORD', 'DrawClub2021' );

/** MySQL hostname */
define( 'DB_HOST', 'thetotalone.com.mysql' );

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
define( 'AUTH_KEY',         'bo47LbA^FBb<u=mK4n8v5@rH3>uYuvM#M.lAL`sy!jpI)E}.#n[#Jwo=f9gdtP1g' );
define( 'SECURE_AUTH_KEY',  'Jd6FDNom!=a^%$?JR[2[|KyIM;F^Qb!-lF]s@[),(*5Xu[t5Sw%N/x{V%PAW=qB9' );
define( 'LOGGED_IN_KEY',    'W_<&NP@{H0tUb4. B#]|B*RHktnk.-08zk8yE7&d5DAe-5bbXi?J&ZK^!:i!Xtpz' );
define( 'NONCE_KEY',        'v_sV*NXtg/j9nSHzE*8CVj]D+,`otxaY){}{R){+evc!G@#0gydeMfA1bhrK&;&=' );
define( 'AUTH_SALT',        '8yil8l)CM><7,dPhQ,vj@e5=ei9A-~5gDF!N2IurIp$Lrq}FmBk)#KvsFJTrh|u[' );
define( 'SECURE_AUTH_SALT', ' 2ow2e]|=;r(@m$ 1 q8$C$I:APnSUDe6M2,KVyl>`;.I`rghK*N4W+OXYc*rW%l' );
define( 'LOGGED_IN_SALT',   '-/b&^kAwZX/?0^,mLrZj.HkH`3$cZisXa3@ +0R;([jda{a}hMg5{8DN2>L_=[F2' );
define( 'NONCE_SALT',       'h+n<laWO pW`_XOQ>:9lmHv_VxC*Gd7BKDVoND38oSVrj&Lf C&R4qA[r=2<zVHy' );

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
