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
define( 'DB_NAME', 'eTechnoLab' );

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
define( 'AUTH_KEY',         'GfahX,x`Va_REACDR*!g5!<qllfwZg=+m(M,VWsK{> m]hibAr76[E~Jy6Q$L]r~' );
define( 'SECURE_AUTH_KEY',  ']k-o]9E.h#ajU VKf]w~9su 9~9:~fb5!Y55iX~XM+*:D<G#|T+:}RLQ+8}TJkA3' );
define( 'LOGGED_IN_KEY',    'K:jx1)/;S!SRDbS1a$m/r<n._Z8!-_OgJLQ^H::kfS6>?;fF#4gndPx#=aZ8?/Ms' );
define( 'NONCE_KEY',        '#/m[bZ8!Sg#i>*whTE1XEm}&J$$^@JMfCBDe0`O)jq0;Iqq1Q5DD}Are$F:eM<b<' );
define( 'AUTH_SALT',        'GXC6zzMufla&8IjG13l$9A3kucZJSLFfV7FXBX?79#XBaYgGw+P.^<[ef{NP9ftu' );
define( 'SECURE_AUTH_SALT', '8;lYDt+IoAZ=?Wm8cr$cf)IvG,8Xd+CI?b5F*%YsR2[qwQvf#etA$pw*oTt(h]kl' );
define( 'LOGGED_IN_SALT',   ':n.|yJ~1Ix=j?CPyq4/:PA&?$Y_YAqrbm&t:Vv@&a,L]a_[-gYteO8p`J<2(#=rX' );
define( 'NONCE_SALT',       '~L{(}3=`{C|[_c@e,0wSLYvjq3K$llpVVPU(t&}1U,}gUvhHMCK0K[XuhmGovRz%' );

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
