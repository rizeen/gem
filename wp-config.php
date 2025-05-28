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
define( 'DB_NAME', 'gemcomm_rizeen' );

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
define( 'AUTH_KEY',         '{<EnlP^~CH/YyRg~p$M&} ZL9iBk0M#1PgZ78,~>Xn%c3 zo1WC.ejDzhjubLq|U' );
define( 'SECURE_AUTH_KEY',  'tf=!+l@Ao=R*?2=U/)*_+tg<PL=yFU]noIy1aKs1&j$34sZ czux=:xq-q]8{f$_' );
define( 'LOGGED_IN_KEY',    'uUAZz/Hnmr+!nq QP{1b/65KHL:)1I@|9C3Rqj}>Xoc)}X7CKkICh;Vu`y)z+n* ' );
define( 'NONCE_KEY',        'b9WB~k:Va+hhEh+=A9vcQ dU#+a}1cbRYa#;k#$;3YSZV`^0qpy5bU9%p45K)+9*' );
define( 'AUTH_SALT',        '70&r|<sT q[<Ys&P!,Q!4PM{8@x-MBUc/0Kh_0QTJK{p4!!3re0.n@^GrO5A,`IB' );
define( 'SECURE_AUTH_SALT', 'mkN<#2c0z?86%0:]q]S|#Onmccw84Q;-17q$@A9j_/ByQce2u&!&]c5h@m{TfqxW' );
define( 'LOGGED_IN_SALT',   'rFq:yJ%0F C|W1ELd[Zqy?aiq]t0wHTUyGe)IB1_2<S@I;[6DWL@)QdWe! jVF^t' );
define( 'NONCE_SALT',       '~qXMg]P(?2KfzJ=TwMw4R%99V9`2PHb1t!pS.##}dm|EpC$fx*0B/6>$97+3WK1I' );

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
