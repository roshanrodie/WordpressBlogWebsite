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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Y~:3~k!i7wSp&N@wMkw_IwNF;K2LOtK-N,emO]0Rl9c@f^Ev=A3[8u?eo8B1a`G(' );
define( 'SECURE_AUTH_KEY',  'gSmdERcm[`H(A$@:z(#aocP)>%h]qTvxW?P6m@^D:Ptxj_5Gs:`Am/|=S<N=J:N~' );
define( 'LOGGED_IN_KEY',    '~MEgZ?gwkVD(gY:B#{q]1P>Gzb{R7Xc|u(#Jz^OM$|)tE2M&/V}J@F~&c2p6k;}L' );
define( 'NONCE_KEY',        'saS|v@X6;le=IeIv:G=Z]5,QFgvw#-L*N3an*n%>#nhK%zD9`,r}w.}K.DVC1mE4' );
define( 'AUTH_SALT',        'Z?9.RKMA:>rzcM`zb2V*ZYr,l&mAGJtuNs:@]5vb[I89eP,G:LBq/oOw5aF&eDD$' );
define( 'SECURE_AUTH_SALT', '<bycUf_Z/Lo-R5?Y_.0Skes085%XbgIyoqlY~_T9utUi4{Hcvf0Z]3b;A>}k|wf{' );
define( 'LOGGED_IN_SALT',   'qd(YmeHuxY:?zO$Qd#]rL8rlONOkq<Pq^YH`Q6hz>;ujc< UH(#y/am}%(!#abOU' );
define( 'NONCE_SALT',       'K33c.BTeSCDd7!MoC32{WE~pt+~pj)Jq5.K|f<IWuxF|GvRW+izsjn+/)e;$T+np' );

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
