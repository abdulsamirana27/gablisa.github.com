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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'ZIW$oMx>&hs|xD[w*`)LJUO>L}*Y@m@;p*g>|B8N0 w:b8RT]Gp5?oDAFc?pzINa' );
define( 'SECURE_AUTH_KEY',  '|T3jI)5M+;$3TEs66=58~*q%MXF=R1N(/q;2QJw7M1o{:>^]T#.W[z[m85Ro-N(E' );
define( 'LOGGED_IN_KEY',    'yTT=P]C-_C-?uGxLFTz#ZHe:_%Q Fl#81y]e0YfL.RSxMYc.(>[{bN$OHa VgDfn' );
define( 'NONCE_KEY',        'n+Wk9,G%! #G-Ly5Q`gf@VcRUaMGf2:8y4Rrrc0-o._vsMRI-B-QizL2kK#E0@X{' );
define( 'AUTH_SALT',        '?ULewd?UfXqOz@al(QkPi]a,)7;bCUe51hvI`]6V~dy;j6^YzYf^]]{x,A`V).L)' );
define( 'SECURE_AUTH_SALT', '$d%E=R-kYE_b9j7|Y{oG!h4Go<iYNFQwdypCDAjL)aV/$sRpH|(eNtP:_w8< )B ' );
define( 'LOGGED_IN_SALT',   'wy5R_U_X53+aOudDqk1z?fX]C]3Y`t!MV!b2JJe`6sR]&&f3[2F^0f.25-* kHCm' );
define( 'NONCE_SALT',       '9R)}b/TzLah@F(E]3rM?&gG}[/~TKjQFtE}^E=.]k*UL[09;d5z#t^meP>5K*/I/' );

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
