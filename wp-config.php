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
define( 'DB_NAME', 'elementor-addons-development' );

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
define( 'AUTH_KEY',         'FU;dFb7hH!*&toLoJ,Fv,09nb?yCCET8Po(ZJaOLG2x]t*xoGF:7H()PifJ9e`yg' );
define( 'SECURE_AUTH_KEY',  'C-ui:GXz-ZpEG?V;$O_E5@ _ks5,J!czxeaAmo@E4?F$qoy[( 5Ywz:=i^91ciYv' );
define( 'LOGGED_IN_KEY',    'bqAp~e_[f~-^gMZ]aqKfP,,G 7{={bCGX-a]FTr:O>(ae|x2Y}?.NEkp&SiEYxDF' );
define( 'NONCE_KEY',        'vJ62>{h=V00UeZ=;#k|( yUg`Q Qf2,7@Rup#3FP3VdF8<($L3&r4asfZ)rY-H8g' );
define( 'AUTH_SALT',        'v 0/#&_Izs>{K0hzH!i5K0RpT/;LD:-:2I/OBYJ^,}HGI9%`v1q~2&BfuaLs<~4$' );
define( 'SECURE_AUTH_SALT', 'tw)f?#;cZY-Oa2YyKsb`UMuX*;%OpGNNK|sUyfm?M+a_[jVf1aW,#r>]--kz4ae.' );
define( 'LOGGED_IN_SALT',   'lkXad~s,&M9;G#t]L*:V?C[cV<.+<im>w!AR(mRR:l8cTA`1KxW0tbIah2hb]KsB' );
define( 'NONCE_SALT',       'Z%jinbw~qa~XYSELaELsg*#PaA)=nH]Bpsf%kRKzw[+>h?!s}N8{HrL~ph#f@|bT' );

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
