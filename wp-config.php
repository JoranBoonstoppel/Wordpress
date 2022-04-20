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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'I=rUwYYcFIbV|_OW;z&{Z/X78t@41WyQmo2pK]+Zx a6-sv^=0ua(Fxz|Lk-E=aV' );
define( 'SECURE_AUTH_KEY',  'Q{ay-5tndFGwb1Q{,Mz]ULlY,D4Tpt~~GR|P8P]VL0Q0_iQ0k,XDC7hOa]$B<~2r' );
define( 'LOGGED_IN_KEY',    'a}4nnHzdR#rp&N(d_]+Qpe#:ko^ xjE;[bIYa@l^LIdtAUj*WjtARRYpyN|p}w0@' );
define( 'NONCE_KEY',        'E{Z6Mkho&.5f7enL^1:*$Xczi35aLCSyVW/LYBl-qiC}jXH7gC2SBl@[+YY`vf-}' );
define( 'AUTH_SALT',        'J78Xud|gSN1.?.5JW%R(}+SBsy-}Q@t74{EZ7^s5Sq8R)7Xs~MM8hd{x:fb8<OpQ' );
define( 'SECURE_AUTH_SALT', 'fpi00!@<@U;etB<MkuVwQ_DKlL;q+XG*xY1#180>r3?h,UR73)T+<_IN6<~SC3ul' );
define( 'LOGGED_IN_SALT',   'Wm{N|=l%5b%bGTWs$2;#E3IrVtg)_{/z?*@C*Pj-FRIv5gjd51fy {cQxc/,B8&1' );
define( 'NONCE_SALT',       'R<vf?7c.}^m&xFdL1O*11_8X+ay/D|J2<(8N^|8 Dae($>Z!b{ud]55Rh*|c5=:[' );

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
