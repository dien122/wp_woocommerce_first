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
define( 'DB_NAME', 'wordpress_woocommerce' );

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
define( 'AUTH_KEY',         '|%%QlA`p7):2{7GJ!WUY6EM/&;iQ0ra!#*ch-Y0DQd,`ZS~d0C437dm0jxVr(6=7' );
define( 'SECURE_AUTH_KEY',  'Hi02@On/g1G!r[*cV<2hys^MQ7 WeVNw6OxrA5,SW<k,GY8y]A=%@OLI>m0IMXp:' );
define( 'LOGGED_IN_KEY',    'P##/*-&gO_t2-@9cqLv/SIo[9_pA16cAavcAO0t>f^=];i7O*/~*Q1H<=|;y2[t!' );
define( 'NONCE_KEY',        'q$h|=1pLyX-8Ej ;{K*2WmQf2&x;:%,<-_Xza5TY*LLKUJ9!-V*)RexD|v(=&ra]' );
define( 'AUTH_SALT',        '8Rv4.k^Uzolb4In%ff`*:aS@gHM0/W,]%f[sJ>?IC-,(RQm48z1S2]?2msNosIw?' );
define( 'SECURE_AUTH_SALT', 'Zln7X9p-73>?[vx&jgkwoBk`AYpnWm=gc^<Q-D@6bCQElrqfUc3l^O:UA^q!`%?H' );
define( 'LOGGED_IN_SALT',   'q9:Z~)cRZ^-8L=_T}4.XQ[:&^JM!]FGD%p-iqw_KmbPDx_WtnSZx(/hk:>K$UZ]j' );
define( 'NONCE_SALT',       'C{m@Wwk|tua?X;)^##k34NA@J mf@]P*dp`C;]bmTJ8.HWU3A3tK*(TLJ&X2wZ8a' );

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
