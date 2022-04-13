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
define( 'DB_NAME', 'bintango' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '1qaZXsw2!!' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define( 'WP_HOME', 'http://bintango.com' );
define( 'WP_SITEURL', 'http://bintango.com' );
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
define( 'AUTH_KEY',         'Z*,~b%pxQxh2$_IL<(Wj&8D:61yO%i--36`k7V|]}Oqlg_K.1L0%MPOvgWXHY[nK' );
define( 'SECURE_AUTH_KEY',  'zn@}otS(e6ie{VA~[yk.cfge{1g#)c;5o+?HSHw&-+4`5v$TPW%IAmn&;~+@)-C8' );
define( 'LOGGED_IN_KEY',    'lX9rxJ[sC?<0wqnSpuC`6&GpsQ[/f0FE4DhYh3#K^7V7._UxhIfNL;].gYGhdK6I' );
define( 'NONCE_KEY',        ')-T*OPW{Tc5@Z(a(Vq`mSiFjxe,WTMjP=b1<_PQT19+3|A/=r>j9Vl(ww@Q:LDV_' );
define( 'AUTH_SALT',        ']sg0J1_dOJp34}n-94Idmi:W>faGVS^1 bdO.2tgN/fEn9^:526m=aJ6oHRBgI~r' );
define( 'SECURE_AUTH_SALT', 'q|0(L8`=s>sBVAu4qYr]=`Qmd&XZ4uD_XF`$w?A-_H*iW=H@}`wL~08bN-sugD}T' );
define( 'LOGGED_IN_SALT',   '^Da@#k8}{M6Ac{m//Zsq1DwZz6jweBEQY[NQI})4n}>QZ)D]n,eu>VZi#)w7be=*' );
define( 'NONCE_SALT',       'S;:1Ls9X&@-2vbiOEFu*ScU3,f)ype*B;n^ns-KJ42QPVfX}l)z7Gh>-;!`.u~A1' );

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
define( 'UPLOADS', 'wp-content/uploads' );
require_once ABSPATH . 'wp-settings.php';
