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
define( 'DB_NAME', 'aaponkotha' );

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
define( 'AUTH_KEY',         '~D(JpJH5xB&r(4<nP%#c$0cVx_h0Of1k!W6mIt:aB1*BFBJXob6R%&+=@KXyX97x' );
define( 'SECURE_AUTH_KEY',  '$Z>sy7Q0 d`zbI #A?$RVYvaoJK`I{RW_qZK]7-r6EmwG5b#r49Vboo>Lp?Xm|[K' );
define( 'LOGGED_IN_KEY',    '1PJMg{}3xg4QLS.KeMp(,3-[RdEnMsp0L+If;!N8flEaZ|<QcA?RpR3D^6]M6bES' );
define( 'NONCE_KEY',        'E)R-Ahn.A+!BW5l1F!0[eQX3ux`rJa6ro]riKB({M6y#[h1PP ,tWuMOd~`:Vi.p' );
define( 'AUTH_SALT',        'OUDw=V(!BF`>X-BG9&/9EHp^~FLVxp|9kL<p{Zqe& o4i)%fiia%^2|Dx!LnwaE:' );
define( 'SECURE_AUTH_SALT', '<~8=39=o)U0)SrXU/goocc^%9kUuWy(aR5pu@Up&j5Ad>f]X!e+bA7E!RQ=4p7N9' );
define( 'LOGGED_IN_SALT',   '( .Vug:}5c.kxJ},jp@YMd!<<H;N~]d)&c=w5)l8WGSKeh#%yPhd^l4htS!UJJ~)' );
define( 'NONCE_SALT',       '$`cJyn}%BsU+ToM_FF^)7NO]/f:`.*]Lz9/Yo,>mc9PiuYH1IC;SES*EO2L3DT;h' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
