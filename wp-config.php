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
define( 'DB_NAME', 'Remede' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'K~m$Hs|/cU!@/nNli6>?c-CN?6GE8Fw]Unxmy5q[Oh)]=PXiF$<R_fx5?mr55Hn2' );
define( 'SECURE_AUTH_KEY',  'WOf)Bf1zQfWX0w|SV9C xQrF-)Sbt8HBtK>y[l(aF9&VrNy8A}naQz3iXK>K}P:l' );
define( 'LOGGED_IN_KEY',    '3W!+VG.J96<Nk*vKWomQ>y&g{sO].sXVWyz!$9UGil5`3<_b5C=Gzmy-[Y[N;Co7' );
define( 'NONCE_KEY',        'POZoDo>}f.j_(IqC}9CVe6-aV|`kx=K7Yxd%UPMz0ugE[%#(B+H5AMXa@] &c$!-' );
define( 'AUTH_SALT',        '&brCL*TJ)PH6%:hnuAavmavPO)o&>wdRVXly6w9tt!>9A[M;oD`jM#RMl9-0ZwwM' );
define( 'SECURE_AUTH_SALT', 'C13]BVAIt.+S]}kL7Fq!vBxV;?6T|gQB{v!F?bsk3.Yq/n.Zg~> 3T&f?wrk!mS~' );
define( 'LOGGED_IN_SALT',   'AFR~rtBXej$n V!]@<^l(z88}j>bZs$wvO[gSV0]{a/W/DE^|`T 7PQSATahbGUu' );
define( 'NONCE_SALT',       '>L}cd2g7(K8(AO<3v<kwFV(YFyctI;d=8jBZ[-assdGnWkidfkAs+DAtVKroa,K)' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
