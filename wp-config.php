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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'v%6#J6K/~nzIU<S!wk@&<CDbCFuV74:oc88:!l8Cg[k?_JpdKcx/#?W{KMb+aE^e' );
define( 'SECURE_AUTH_KEY',  'VGn`h#(Q0_)Y^pr}(6[:v52M)eai6Cp21`VM}:TT]%Pv1_q@ayV`$(w;kQ1ODyNJ' );
define( 'LOGGED_IN_KEY',    'Et~,elV8wX.JvoIN~`)@6*X8|>t4rkA%b3 FDi#5-@2L$0oA=u6^ClD!Kn&$qz*&' );
define( 'NONCE_KEY',        '%jbIq)755o|1.4IEBy;%|_Y<E+;NeP?J2]a|6]Ch?;Q4}3W,Mv?~h.Qo2oS(iOtA' );
define( 'AUTH_SALT',        'K[_yH$qX7TdE+ ws5R44F=OC:S/)^u4p#OcR~O|rOyxJ=n?hQZ(kQgZteLJrKL=7' );
define( 'SECURE_AUTH_SALT', ':v2gRus=qtmvp(t!77>:f<S4(YUlb,IBh(}-ggx#}h(@D #GA%ak9Xw+>uH*u<~?' );
define( 'LOGGED_IN_SALT',   ']}/ hmu2`CdC;>@_ 4X(#ge)ZMeBWee}`&FRl^CK#oP5iDm 8-b??p[821Gc)5kx' );
define( 'NONCE_SALT',       'iv&D89 P,V{/*!-QLxfB 42#uV$/yJua:4NYQ2^r__jvxX-Yd0VA4Beh[Cb*|V&}' );

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
