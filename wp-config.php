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
define( 'DB_NAME', 'homerenov_db' );

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
define( 'AUTH_KEY',         'EQM84EjWxUeN.X{Xd+@K: 3|cJ0n_Tcv_B.$<I)pwlhg%AIyvpN:k`]TAX {[yvD' );
define( 'SECURE_AUTH_KEY',  'ZQC1S3,uy{#!*nkGDC75Dg?s?+dvn6&_TO5!PI,@{q<PizU(F1}X|!tWU|c814zr' );
define( 'LOGGED_IN_KEY',    '1KcFm%1J}^(cQQST.*80DK]Hjj]ha~MbTguU^w@!;A7J-7ipBwe%W[(bV `&GuLd' );
define( 'NONCE_KEY',        'HN-6_)|[88Q)|5;40Ly:u$psm8v%I>/gA[$vQ8|eZ`jjS%J|9ko+Jwicx}Ki|uTK' );
define( 'AUTH_SALT',        'A`D<- tt)hMv5#lrJ;6UrqYAQVPr0h^E}c<LU_rI?G}rTY2?F&Ot6v6`R(#:DgBy' );
define( 'SECURE_AUTH_SALT', 'q&.Y}CJqo#}~%[-lgBXse>F~Zdx~D2Mh<.z7J06qRS,SI]XfrSa3<9Cen?t8DjW*' );
define( 'LOGGED_IN_SALT',   'xV$y>BSS^v/lh=f)@D@p:Rrq#;/#A35p2&vpD]VkA9L*Lf-Dn(aWB_BYH*fq(7_)' );
define( 'NONCE_SALT',       'x2eK!YIoPG7I[0OyI:/lKf5$a1E8K<xG([XdIZ-kEv(ivEL0XPRqqG8!u?*T:Q<,' );

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
