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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'thuchanh_db' );

/** Database username */
define( 'DB_USER', 'Duyanh' );

/** Database password */
define( 'DB_PASSWORD', 'duya2074' );

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
define( 'AUTH_KEY',         'g`0I2-R^#gX6v2WtlBEfowB6-CLh/S=x`CSmG$=T_&oI<0LWZDd2QU3)UY*s~s<u' );
define( 'SECURE_AUTH_KEY',  'w}J?^#ylmww<U/iRNL2@U36FCYxFr*Th;$HMbt>y/Hom}rt5^q:/y_)I]iog_OVD' );
define( 'LOGGED_IN_KEY',    '($`LpBxbmk/Gxulq(9#[Wq8:lF`(eK!(2p8Gz!ASUNz?b^1Y<v}f)xPs|y9L}Pe[' );
define( 'NONCE_KEY',        'N*yO?Dn}LQ>{}V=7e_  :0R&s%vSaIi>3|0H)%t|%Z~P1k(g5$UXuUE(Q1OsF849' );
define( 'AUTH_SALT',        '`^~HSC<(qJl_)TkY_`w|u>L^Cf.h[UxNaRp3k1;XA*^U+<gSXgJH!rV/-`ui)M1$' );
define( 'SECURE_AUTH_SALT', '|D?]?o>!I!?4rQdx >:}Q?@LR]zKr.ahot{kpC0IJ!~dzVW/Lv^!?4oT>sUEEwIm' );
define( 'LOGGED_IN_SALT',   'M+ffaV>UHsiS0ETF2:6%E3os&2m}T/:C:0::4MAwTvHRz|uV)}ccX(S*k#A1L_MJ' );
define( 'NONCE_SALT',       'YuC]-0ZoM>rd$r=nh4`]8Y|Br*o|,r4*1edB $MCIH2&hA9t|g;clXAG(EeIa{s1' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
