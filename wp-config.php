<?php
define( 'WP_CACHE', true );


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
define( 'DB_NAME', 'pizza' );

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
define( 'AUTH_KEY',         'A6-s+qI$+U6d_SeqWB(U7`2!]g<bO7w?u_2xQz!N`IAFY6RixO)GsZ|!J{2x4CIZ' );
define( 'SECURE_AUTH_KEY',  '=TKBA{TT_6lLa:|l5QH#hY3gg<)Y,[/>U2?[z?pY.is)Gt3 pW$0uZs*t?aQN7_v' );
define( 'LOGGED_IN_KEY',    '|cP6fZnRu~{:/HNQRy8N:*Yq.9Old1 UY~1@ZwV$VXeSSEmq[9-P.J)!|#AY(62h' );
define( 'NONCE_KEY',        'oIJuS{8XHW3|;Xd1F=<Q#@,H(`.@vr~M~+kl.X,hQi0D=NNrQ=f{V3ppP-A)GFMk' );
define( 'AUTH_SALT',        'mzO/y3HlHMLlS#w&8*i!,3~596?xh9c5xAMp$DLaS=8w|T|/CwlzPI2{5}x!X<oz' );
define( 'SECURE_AUTH_SALT', 'QxhgwRiy7UprT[hW=bUuD6b{bfsX9EPIr8XkircxhzYm*>z~OSH>f6Vh!wv%2>,q' );
define( 'LOGGED_IN_SALT',   'mSl{s0/5Rnw%icKl |HH]1@m;C<Su_`:<.VKy6a%#fA0d][Nq+f6~%dlJAA1EJ<k' );
define( 'NONCE_SALT',       'd5}G=&ZKV6[7nmok&^h1dS)D.=/u*?QQZw:,kGjAfy&0!O,,L!sUKFpuFL7q}fRF' );

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
