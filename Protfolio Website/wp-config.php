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
define( 'DB_NAME', 'razishah' );

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
define( 'AUTH_KEY',         '@<uA*p$R1k9;O04/xs/<I?7NMDi-,^WGjfvEA2UruE+jzLBqa#qC%xK%U?!TH~R:' );
define( 'SECURE_AUTH_KEY',  'rBqW<< 3-X,ANHSX{<XQy{_kx}es* $lo|02wdWR$0P6rA^E=4QRuk)r-LH2b_QX' );
define( 'LOGGED_IN_KEY',    'dh+d]vaHL],-p:1 I^wy7v<;5u00%LpB0<wH.lZusKc#`J@WY<T[X*8KhNYmq/{L' );
define( 'NONCE_KEY',        'OZ(JTjC@q!/Alyj9jQHwCkm]X^f7TzD7>)5Yxq*QlCQ`t:afqI2V?,QEtLA{EKRN' );
define( 'AUTH_SALT',        'B~O^=}eY{)Z1i03|.pq`BSHdErJ4uJX61>i{kgL_qF<EmKU./|D#<fJV3*iRR!4T' );
define( 'SECURE_AUTH_SALT', 'DW6Ac#i>gOI!5HUG%G_Tw!|wN`(*HF^;p%jQP9W,Ju0KEVC%tD}wRF7|RHI5AKM.' );
define( 'LOGGED_IN_SALT',   'Nbt?Xej@dsbuSmu>S8!@;C=Yq)0AO=}0lkkDz :?=@gD-*%},8*Cayl1RWzxA`6k' );
define( 'NONCE_SALT',       '<L[I/bMW=1p}_/C#;EChycdg${66b@O5O{9T48w{VpaWdCyuv;7QRME3ZeZj+S6N' );

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
