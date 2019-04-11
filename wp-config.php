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
define( 'DB_NAME', 'wp_project' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'wuJ/Xn^q;`sCZ,3s:4)]|]RO)}n+~cXQsdEaO 1hcxp!Im86zup(LRpPO<!n3@4!' );
define( 'SECURE_AUTH_KEY',  'nq|TMD-dFi79m}NpW-NlM?rlPVm@T&eAB%.zCu?C+Kz8>~u8E`L-Zv!CnCWys.0=' );
define( 'LOGGED_IN_KEY',    'nDe/NG%;yl2NxE]@A.joO*T/[%I-D>7%Rg27MQ+Lex)C<e~_.y +zMX|W7~/YF`5' );
define( 'NONCE_KEY',        'V)rGwGYJJxE*Qto_;E#50CUakHbH}OJ!9t||2rXzG|0<FA%t@[]uc}YDgX36zc)x' );
define( 'AUTH_SALT',        'gfr+zak0KJQx|!4v`.I&Id/,d|Tk,o|^6e=q_xSJ,`v^YMMA{m*z_08]jR8a|evE' );
define( 'SECURE_AUTH_SALT', '{15%V{eSwe-8*^,T^qsx22#shDZT<!@m&`E:` G]gI*zY#EiKV[k!>qPh&P74),<' );
define( 'LOGGED_IN_SALT',   '<<S&gS+)?~dtT45<d4C,6f#v:mU->.8G]v.1lKEB.l{LQ>pV -+.{Ykr8/B;N;md' );
define( 'NONCE_SALT',       ',yDpEm]TIqsEM`nMgn.Xe%lbs_RnYIt~<zHpUm6fa|i&byFq,Y&w*vIGTfDtr;Z~' );

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
