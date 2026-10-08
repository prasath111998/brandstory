<?php
define( 'WP_CACHE', true ); // xSpeed owner:503e7644312edb0d60909d1b0a396a2c
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
define( 'AUTH_KEY',         '{=Bxa#Xpgo|DtW#IGlV5C4cWZGJw&ShHyt,RI{wQ;cqXy>I x>TZL9x]jJC4e%;<' );
define( 'SECURE_AUTH_KEY',  'Q+4PdIu:~s](?PbzJS;{S,a5>/SnF[n!_vn~Hjf!u| eoO3$@F*ghM|~~010sM1P' );
define( 'LOGGED_IN_KEY',    'uz 90chAUuW).RAaoUq``V|zx_~Okkj=bn+=nw_4hkk8Z{V(,(D=?fW1I$u49}${' );
define( 'NONCE_KEY',        'J?5e2s8`&W599uAJK_<e/OPuyaVF;]tegs+_OIp~&xWo>~Awj[w|OWCnu)#M1`{,' );
define( 'AUTH_SALT',        'p`ETFxyTjp@ &!GpGU_?=8~776{zEM9Gm[jczuR>P 5h9ewx(=c^3q68^LZLNk^[' );
define( 'SECURE_AUTH_SALT', '1_(M%RHWMt(yzMXmw*%|??IVEMa$UY&%DM!wPQRIDpf*9Dy`,sp5wj/<INU1BOa/' );
define( 'LOGGED_IN_SALT',   '+^|C`R{Nn#F7IL&+O@=OLEI6*!M+/Cx|)VX$p/1#UOe8;kJ`}DW/l-&<&yx`)*-8' );
define( 'NONCE_SALT',       '3>eg$`hcnHmJ.5og` IM<jUuN@)Bw HxJbJ/%Z}(6(H4M0Ta*-O@f#c cX$2wVzT' );

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
