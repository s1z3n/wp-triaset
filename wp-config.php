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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-triaset' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'jy+=.e.=~CWm/[L7|b?_z?XdTw0(.AlB5 ]r;?8I$G<iC!v4EbD9>oYkM,Z#^&@;' );
define( 'SECURE_AUTH_KEY',  '=6 0l[oXv^aer7E+,gc=[.H0a6fyUG7mf[8p>,Nu5q0J4dLqzbZ%FZD]sQ,5C^#9' );
define( 'LOGGED_IN_KEY',    '5@c-NLCu:JBA)sBDbm!$#IMI9::W) {69%cHwxo/BEq-aEB=mX&`}Ht{,dO<t`9Y' );
define( 'NONCE_KEY',        '0w6ng]pcM`GfJbMC^V$YQN0i@<ytLo;z~4Z1qPJjg s=olP7hn:}xJXvcTD<*)sH' );
define( 'AUTH_SALT',        'Q+aB1-j* xN@#*a>b7iC3Yfxfa}#XWz=^PUm()!W,}>&TTV.k:In2_}(^%-UA5sq' );
define( 'SECURE_AUTH_SALT', '>~&w%(e!#kiL-r&_d%,GY;*@AI|h}NGI5/H@R6>Twxk,u$FLsG)999~S=`i5}bPH' );
define( 'LOGGED_IN_SALT',   '4KvAP&^M:[)kH8Nsu#K46WO%*S{.q9r<Z9l<>^TjRH8t0Bqd0#wJ>vGx[oe~={is' );
define( 'NONCE_SALT',       '3.p]k[W3j3`B!A!0u l=]Z,ZOhNT<_S7[(:$$7vmZ_bq)rO>9U?8XYdr@iPpuDAK' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
