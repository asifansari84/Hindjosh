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
define( 'DB_NAME', 'hindjosh' );

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
define( 'AUTH_KEY',         'sBW1Qf?_s<[j^qx19gD{`wIib7;YJVek?)ZEJX)Ar;fXDl=*%K#<%+2~@_|esU^J' );
define( 'SECURE_AUTH_KEY',  'A=CB7MG@?b](d.kdycN3]^7u1`1^#%kgh=Sg+3Lba1=lCn>rr#A9f/HQ`qtMsrFI' );
define( 'LOGGED_IN_KEY',    'Qe9:soKn,I<K[~;+~ w44Nvhep2INpPBHVZY[6iCX8Y?9eP8=V;-upsV/*<h9DXq' );
define( 'NONCE_KEY',        'ECZES<I_@vb`xj+-|fiaCvq}-v:1rMY 5y,J,}pTCQK=TY`aA)gYx`KvnEb45:;$' );
define( 'AUTH_SALT',        'TOl:;rB5zZu6IYgx:XP$;B3#.,!L)9JBo@AzsG{F*b[A./9PH7+n8O+md:[]_Yb`' );
define( 'SECURE_AUTH_SALT', 'q]gs=25yY8N$csYac}49e@#H:/9RND@G9w,gM:/;3:juBgzA0I[oi`#SE&82b~h_' );
define( 'LOGGED_IN_SALT',   'Fg#5_~e~PzZ$d<S]QfybD5E,*/e<!2WDrf|s`KePE;^Ve*A6jC|iA8y}eaQ7 f$W' );
define( 'NONCE_SALT',       'n6J-*wZ}7IJD]9NT~-f-q00/efC;_zj$;:LJ1>X/Y)>Gr}A~B;xFr4YXseuzs=Et' );

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
