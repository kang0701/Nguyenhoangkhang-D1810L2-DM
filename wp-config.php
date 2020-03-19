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
define( 'DB_NAME', 'Khang0701' );

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
define( 'AUTH_KEY',         'N1,G;Lk|k3 O2L_S{|xQ6rL1~Yz<%a-K)r}XM2MVaN+HAaz~s=?Q(bC%x{BJu%&I' );
define( 'SECURE_AUTH_KEY',  '*d$#wR,~W6k;}!6S$AJW;R,L2(T;AbOy~G*<$y9e_wOx:lse6qo6X+f*t4c]*2=5' );
define( 'LOGGED_IN_KEY',    'YP::a*7Wuowe1OH+7A)Fof7@U^NTe?uz69SPYOB269_8YwZUUuC^:]w:AJ#[U$UL' );
define( 'NONCE_KEY',        'P-EG]b5#pZ/wz!]TdTQ5+jsZ]gnDN9IO3ly_mO.*ZfJ-[m!+G78Vq/wl$/:L|wM*' );
define( 'AUTH_SALT',        'MX8x:wy#kOcMvOZkEMt5I30A~ RG1Y%B}w=P:HxgO,G@RVd_6$r++M=gEXCOE0;u' );
define( 'SECURE_AUTH_SALT', '0!zw=XU3juPu++SQ,]_ksG:ve%)0oeTdH8QQLWZ7F<_u#j,{T]-rWzM: zza<(fo' );
define( 'LOGGED_IN_SALT',   'nZ)&}BZ!:%aY@4>4ACpPi.1o=BFG35E</vrTICgS_%8taqU,OpkL1qyvj9$O~W2:' );
define( 'NONCE_SALT',       'b!$Hn6*Q1I%%:aTYIp W@a3>3L67%T#T2[S3M4Xu _`+K:$3DE_vu9LfUH!Hi(1C' );

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
