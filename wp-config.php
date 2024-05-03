<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'AUTH_KEY',         '?7Si372mfuz8<Qo_(MuV9y+DHD3U#c|*L4+SX_Ru`lr;$_nqAE#uT;%FXHl9x8jG' );
define( 'SECURE_AUTH_KEY',  'r?PBM=SKqbAQ$K2o{j8}s%fX(E!/>n;.y-If)U9SJTbJK/uhen95GI0$kcj!PTBA' );
define( 'LOGGED_IN_KEY',    'o4ZV^ck-KAzR6mf8k`$wxR5u{h0]a%<ADj$W}@5,|S2X.dvFC+wJWtt/UyyHn?I+' );
define( 'NONCE_KEY',        'Xgjlw9/B&sHkt16&~5dK}sAT0SE3msDO6g?ry&/+ABh_H+n[.V5b&VQ]z3sn%Q)D' );
define( 'AUTH_SALT',        'W)zARiV@T5C>U<FJ8.{=`&_kY&[MEQ7nc~)X:Q:VN_5$HJsX4J!U2mVq%r@0BNn/' );
define( 'SECURE_AUTH_SALT', '^X&mf{}_TrSuemR+kQCLK+jep7qY60,l;/O]Ww^yb|2bfKM3@==o401O*^nn()=^' );
define( 'LOGGED_IN_SALT',   'ye!YL]Gk$erWBG;4C~hm6[0j^lGu<(1UZW5Co)TTRgN:=Cn4mFvc(+h2BNX~]o@)' );
define( 'NONCE_SALT',       'pV02nX-~.59so#EQUi2w;H^f%ImNb~tw^6+?!wuDy$5U!jIt0Qin&e-.RNPX(vqE' );

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
