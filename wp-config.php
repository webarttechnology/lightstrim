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
define( 'DB_NAME', 'lightstreamdata' );

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
define( 'AUTH_KEY',         'w~mwBpY84%rTl-~7AN%~!q.*r0>[?qwA5vpIi>(BNB9;2nqZ/Fkc2pB %P bF e3' );
define( 'SECURE_AUTH_KEY',  'YTACamoljAU2j&LI<8/wD s(>Q|vHZdz->&S6RYjC,yabB+irl1t.my&7,VsdAFt' );
define( 'LOGGED_IN_KEY',    'PQ`Fh<A0e^K3T]lITK;.asWk ,f&B;)y^#5w9QNGJcto5wPZL}Co;`<&V%C(v=F%' );
define( 'NONCE_KEY',        'r`G>lU46:oF,b%#!6IM@+}S;Vpaq4?4|)w[0NlmTKOE.zn(@i5;|b}EpH.hjwBC.' );
define( 'AUTH_SALT',        ';!A[tr!bF2@l<~yo7&d)]@`ySLS.Le1#qSdlSwy]fPP?PELeEo+}%,1V+eOSBVV9' );
define( 'SECURE_AUTH_SALT', '2)+PsLZ|;zNFO&Mp]t]c;sR7~49yN]>m]x7zXLdveaq8*@t8}dV>:_nzcwgLwRRP' );
define( 'LOGGED_IN_SALT',   'L/^3)3pIzN/_l`*m@(O4cZ]CH]I<] ?+JDzc^e7]UcCJ^<u8Mf}^%gmX!9vcaS<t' );
define( 'NONCE_SALT',       '_9;eRttj<-RFx=~.#/5Vf?UJpbO t0yOLZ #B9xBL=VZZZv5:!KJ~ BDUi1m[4fw' );

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
