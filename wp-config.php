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
define( 'DB_NAME', 'finals-lim' );

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
define( 'AUTH_KEY',         'vBF`dxLE7|%[%I3hp|$W4W<M*$pv/e+^:_}g7+*a5BUTCM$$^m#CfeAzc^|9eO30' );
define( 'SECURE_AUTH_KEY',  'd,T#LN?;J*%@bOGL6$W]^r#6:!h%^euOTgqn:Qee+eV#SZAP$M|CGIBU`y}kb -)' );
define( 'LOGGED_IN_KEY',    '}YWLR,vf-ZOv_^H)GI4jrG DVVvg>PxBNs7H@u&o!<.WHdv03.~W&<M$Qh`i@~}2' );
define( 'NONCE_KEY',        '7QbPc0y7w9+mF46CZ}iHTT1-#&$i0PpfF]CT)BZX7cCQOfJtR:,9R83*D4Juu~XF' );
define( 'AUTH_SALT',        'CLK./t<%rs8e/;?a@ #uN>G*g$G#Wo+vC@IJO^h>UYj:x08(P>Ube!{*6~xrZAKE' );
define( 'SECURE_AUTH_SALT', '{^x-jaNIhs&,b3%I;=Q@B bAftgI4)$q6`k9+7vq37coEe4{fx9,xw(7pDEzAqwb' );
define( 'LOGGED_IN_SALT',   '~e+D~:N%;(}XAa*H81}6$$+#-n.r9{#EL:mG]!mW&. ?29]^j~$&g+57gULM>6hv' );
define( 'NONCE_SALT',       'yLGy,n6@,vJ:VHMrC1H`u[053zm0KO{0@mS(pzWA%i`oLLi@BQeUos6pu:H##cLi' );

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
