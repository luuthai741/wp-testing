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
define( 'DB_NAME', 'test_project' );

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
define( 'AUTH_KEY',         '{:|*1El*79NHTZLRiG/V[_+pyq{~joi6!;)Xk%%-cNw;4=gx%=/uv*aSOR0ZwL}>' );
define( 'SECURE_AUTH_KEY',  'wIXm#qEn8]xjuH`4*l%pF&>+3e_YW(dWh6$N2mfx$C[ZU<kF3]v:7!AfyiX1TbjQ' );
define( 'LOGGED_IN_KEY',    ')Lkkxh=nn2RE*cJl7ooIiAc0MO%C]ku!kso!&<j7kKPRQD4#?p[<1eEOWfR6NSLV' );
define( 'NONCE_KEY',        'k1Wyl>6Bs&6,6A,oA=])HfvO}e/9p}C3CXGZ7WOe7<]%p7_I@C_6TJoWfnsX>= b' );
define( 'AUTH_SALT',        'LeRH$MO@o,6wmu~>_v+Dm8gQ*kYP[U^5;R]U>K~,.K/OQ[x[-@[dTirNpIn0KY@V' );
define( 'SECURE_AUTH_SALT', '.H0FJ}E)MvrcVO:iT;iC7>NsDB;Ajf TGyHVsV:(ac7E6kDj+dSmb7Qo8Pj{+H<(' );
define( 'LOGGED_IN_SALT',   'Jv:^Ak+P2/#+0Oc.sf3Jv+}D.2nH/[q+pLD!|L *T?#[CA}#`d#9!nE+0zrMD/%_' );
define( 'NONCE_SALT',       't-f)FKdC{.|bD>|)CQdg ( U+VF-^Lm<cCKELBn$hlPjA0$y2tPKDA0:thCsO5ur' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
