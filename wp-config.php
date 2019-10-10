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
define( 'DB_NAME', 'kodesha_db' );

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
define( 'AUTH_KEY',         'ncLqp-TP8kfrKXTSXvDMj[ju8]c4gJwtsC0F9M}aQF#%BpP|lMd/Asfu[ZI=M4=&' );
define( 'SECURE_AUTH_KEY',  's{gn* 7iEC^0cOr6-Rm-<98?m3M9#ecLg~+-5CH}_A#arfUiH8lF7/<UfYG{xN) ' );
define( 'LOGGED_IN_KEY',    '0C2en2?hlC^=+!/!3D@8WOt8e4Um%4Kp9_2e#*>$hfDcAr|K0V9IcqHGOu;7d$dh' );
define( 'NONCE_KEY',        '2.gQr~8jm7(rd&IIH8P3]Hv)964<?{no<n6q/`DiwsUQgC75Q1XPZE?,hZll7k;:' );
define( 'AUTH_SALT',        'M:!?5b8W-*2N&X74U|=PeM<U|?0?%s/sWkPaG{l&7`P -oan7]SR L+%!<ZcPRZb' );
define( 'SECURE_AUTH_SALT', 'bS9[k!Db_ro9gpKO7^S kteR/Ndh]2xy*/n3MRbC9P!@5Co6`U16F`2W[UBcPE^/' );
define( 'LOGGED_IN_SALT',   '?(FRv.:t#<DwRMkcjBv_;jYc<2:XItRyYEK16~M;dYTP^r@M/-VkzTu+Lv>Q5*Zy' );
define( 'NONCE_SALT',       '4|W8^Fddx7h}S49rPAoEPmM0`CCs/zgn(g?TcUq]uv4^gSqk<6YW&movE8Zs0v4|' );

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
