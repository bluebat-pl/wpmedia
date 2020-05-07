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
define( 'DB_NAME', 'wpmedia' );

/** MySQL database username */
define( 'DB_USER', 'wpmedia' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wpmedia' );

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
define( 'AUTH_KEY',         '&Sk6nZdkXwr-jf]6#u>~_H@/&4FY73~5wi^0n4aQ>wGwk<FG6DQI#hwIh7uF^;)#' );
define( 'SECURE_AUTH_KEY',  '2u?7Cua>voZ4Z><-BQKWXoU.CXeD{ lzZTrEj|tnI~($.C.tZ`*iPza|a;> MbBt' );
define( 'LOGGED_IN_KEY',    '`]odk4i`J$)R~ST@uiaT+Je=0B]E}B,$,Dr=`Q (^qhWEdjWGvF7~`~,}TyOQ/cZ' );
define( 'NONCE_KEY',        '76%@gsM<[YajjWNm@GRjbo-E<FO)q6{=u53@-69[vHvQ2|eNO.NbRdDs#N)ZI43,' );
define( 'AUTH_SALT',        '?TVJ&gTSqKz_YjyDbML8NwVRSX~6jb~BEcMnd*OByD:!Y];gWgDf{|R;r!*3x<zc' );
define( 'SECURE_AUTH_SALT', '$Q]>!V##F^_i0TU*#4g81RI]b*rQYel]{NcMC`cD/xAb%/=Y.j!b+K]WG}W/4];6' );
define( 'LOGGED_IN_SALT',   '?jF:jvxFsSZl`eu(vG?W{3.8K+yPa3NVe??dPF*Ih4GCZ{;:*9dp ,kbL|s!3j.x' );
define( 'NONCE_SALT',       'QLE$B#sA>Xwd_m7 ^A$LgZ$wa@mH,sbj!`1+)%w#e^mKt}6!cNeiiW<w@58KmhX,' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
