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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Winessy' );

/** Database username */
define( 'DB_USER', 'winessy_admin' );

/** Database password */
define( 'DB_PASSWORD', 'Ez7nw,dkV5Ewbkg' );

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
define( 'AUTH_KEY',         'Bev)|eOpsU/77mRmv#.9 v:UgCEVY6m$Nd=!!3z4O=V o7[0H/JEv+c{e:g>ada,' );
define( 'SECURE_AUTH_KEY',  'Fx$0b-/sQtWlrEPi8@z],ASD|;K+P%p=}!cB;Z/<6`ClnZgHzdV]n)iDmaQ/&bvZ' );
define( 'LOGGED_IN_KEY',    'BCMgFaw)4X[$bn652kv|_&G M;1:W<Q@&c:aUH,)!cm~z7WJ7=NKK[r+#BHs^fJF' );
define( 'NONCE_KEY',        '{<^_`)m]k~pIHbSC>nY5O;M}O7QA}q}{.{1jo3Qx)tVn$Ea &C~u/Eyq|/R;Am)[' );
define( 'AUTH_SALT',        'al!^CE~#sgx<Ou+1DXo!s{+Y!nT#s |rwD0$$~3-n7-oSJ#n9|<FirB=s=h^yK&~' );
define( 'SECURE_AUTH_SALT', 'h4MtW9JnWlmBM$@e`xy+!wnF#V1~G/rEPoz_0|1&G6%aD aS`jaU:=]T`-gK4X):' );
define( 'LOGGED_IN_SALT',   'rdflGl> m:wPe 5[o$5tyU2ZGM~BjWB:dC8vf)&U/4G870F-SM}*  T#,2Qc;Yd;' );
define( 'NONCE_SALT',       'h.MzA=KgRF(,f6d=Yq,7S1_^LM9ciQ(<Lb3v9eHy=W6V|C?=L(kRnaPd5Q(.Swb ' );

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
