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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'app3' );

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
define( 'AUTH_KEY',         'w:NJLJh6goQyx5n*Dl:gXzf&(e*Y4W+XXv`2P>n)g)aa<tekr8,c]o6&W~;<_89R' );
define( 'SECURE_AUTH_KEY',  '8|biXts<|Ki Q8~ 0+YE~)VERu`@2]61rKu;=-4R6a_kx^=x>Q-Q6:EwJKzbQF=r' );
define( 'LOGGED_IN_KEY',    '-y6v+Bn6Y7g/FSTFSbOcxJl}5RcY;8|$$M.|~Ycm}-`58tN)?0B}&wBB;L6$PaxH' );
define( 'NONCE_KEY',        '?(/dLlPkUjJ>z#_juc(=I&d10=#&)XLtX$CpE*U(h^mwd)afj.t$uTGU{l54~qvC' );
define( 'AUTH_SALT',        'mWn,P7qB7hx6/qT;}4D]pFxPFd23hMb0w~jQ kN3;h2Cpr~^TP=GHvUbCYG/yG(!' );
define( 'SECURE_AUTH_SALT', 'YFF>uSenP&;C3=J)CFG{,9t7wV.%6pxP:%bMA8&.+hk !10F-`9g(0jvjX^J2lE}' );
define( 'LOGGED_IN_SALT',   ']_6YWso5b%:#`]h]Zr[Ym98Kh+,1&6aYkDm]ZkS1m~z$AP#*]a&vs6%] PA_J9{u' );
define( 'NONCE_SALT',       'QI42g5q)=6;r]Jz~Lm6sxdIaQ7:2Ffy`K/S-iT<<r1HQrKq3w(l&>q-jTpIJ&/P2' );

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
