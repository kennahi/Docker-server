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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'kennahi' );

/** MySQL database password */
define( 'DB_PASSWORD', 'kennahi' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

#define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'z^ou$XT7YWm9Mi3T6D@$Z hm}|:*McPUxyXx_EaLpoy44B%3A>.84rM=AaWjAgpd');
define('SECURE_AUTH_KEY',  'w?)0EMN)M-]dXn{I5P$?Qql~[~Jgf!UIy.{sWb<`|+|<S<p,dxQ&N:vtLda0YxJZ');
define('LOGGED_IN_KEY',    '0)edF6gt[z*7nj8QN=l,qdgS[k[51:qhQD-u<]c|$&fXaW0Z<5#WgXCyqo[Ir`0e');
define('NONCE_KEY',        '}s4Z-Y>aBWbK/pdWvXG{-q-0>CQhDim$T0KdR3XB+-uR7m;wYn~N8E0^L%B,>L&+');
define('AUTH_SALT',        '1/4%}4|I$Z]b;5HGc5VbWtqzv/2!b!payY9*E<_@`HA+u=gO]YpR+vL~&frM0,|i');
define('SECURE_AUTH_SALT', 'CMalta|+Fd{E[(|9tppkfJ5`Nw)Kx)RvWDzND! -Gm%mG0>`Zx9Ie01C>Mt63WJx');
define('LOGGED_IN_SALT',   'Q9D(fx|^=4/-s;A<ulOE?+- Pq{RKML27U?bfvhO]*E,WT[+}b_}E_TAnftWz/{-');
define('NONCE_SALT',       'l (M^m }2r<u-{W//7jjgf)4dUC[e19|~GCzG)<AwTD%>8qU{S5p|0y]+lkVCFS<');

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
