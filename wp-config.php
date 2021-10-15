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
define( 'DB_NAME', 'alecaddPlugin' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'abc123' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'mSq`[LgJ:=(q!/(o>?7gndR${#H8O${mnX+ITl;ED1u]WQe^tIw6%EX{{TtKV,Tp' );
define( 'SECURE_AUTH_KEY',  'hPsLGlQdMiq}!c.YlxqP52~}]Q*mT6HwwW:krRG}]wj5C~Q.*O%`&5aEI+3g_[+V' );
define( 'LOGGED_IN_KEY',    '|2Gt,af[mx=gxWMJ{xei|g|6qe8G*hG9]oM=f{rQ>BE1Lu$Q&P~}P]++g2I8Q;4j' );
define( 'NONCE_KEY',        'X<_dny+^9$KH3)SAj6G?z|UF:I+i >F~O#k6L[m7%jWQ;)IVxU(nRW~59F])qVAd' );
define( 'AUTH_SALT',        ']4]U(/<;wLa!w}[*vJ1ufWD}z&@==qGfGaIA<bVG5<Kv~}UnJMI@]|Yc>/Pdc)}h' );
define( 'SECURE_AUTH_SALT', 'H3cjDN8e|J[P)(b`d4EN=A/!??|<[rB(P,G(=x%1I)vr7!f@IZvThfS?esVA[6nY' );
define( 'LOGGED_IN_SALT',   ':!`HhK,p?/7W!Hfsy+.u$kiRZ$nPm3a.$=ottV[gTk^5k1XtA&#Q%PP!+2PW.0@v' );
define( 'NONCE_SALT',       ' _tO4SXMvU8_pJr+0:}}{+<2G*BFj{kA.GBjo&Q+u7%RXQ|o{r4MOk.})[UR$oCF' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
