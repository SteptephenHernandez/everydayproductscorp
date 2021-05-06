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
define( 'DB_NAME', 'everydayproductscorp_db' );

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
define( 'AUTH_KEY',         'o/.U~uk(Jez&e`|~OXcw2.NP5Voyy4[@it%<5OndJUhDPZulVu*E1+e)>+8;xqh1' );
define( 'SECURE_AUTH_KEY',  '<dEBc7aJfQ{ibk`d*<04 kLQm4Jv;eR18`-=Gds9zAG(4EqJ9=HU49rs`!c6eE@L' );
define( 'LOGGED_IN_KEY',    '<#KuQk!5byxYbyE5XfdSko4s_Z/An_fmX^PsNiL3B4ere,iDEdIwzFKMmDY0M}@<' );
define( 'NONCE_KEY',        'M5in|3U## D9KH^J}+`qz=rm0%&F_Ht3j.74pF3lm>I)88l5u29-Gc?#[DoBgTGO' );
define( 'AUTH_SALT',        'Rnw2Ip5.+pk#Qu65q#-M~{T#o0M0dBy2eDtrs6M`%z  P8LyLG5|E:6s?Q0u+|ye' );
define( 'SECURE_AUTH_SALT', 'g|m3^4]sRGynlVU<MsRX3Lgk<a2?%Mw% .f=.D_?m1KN4$zzynj;28<w)`/PU.cP' );
define( 'LOGGED_IN_SALT',   'K}rK5(V?c)-Slq1eIDdy.Cqw.!2!:UsU$Jb1s,AQ8s#7=epPBGuQg?##TVaZMcg9' );
define( 'NONCE_SALT',       'BfH7%([L9<ovb^7hKvV*Um,4$;aN_kc2]j`M`VLSsP[r|XfD6wD0vi)A-p:IySR:' );

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
