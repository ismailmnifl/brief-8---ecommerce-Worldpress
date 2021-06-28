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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'q4drs<0f*}IZl{eeRz%y1RHSbRLp{.gxL|!!Kscr2rCz)f{EEr`U~F[XdAiTL`h(' );
define( 'SECURE_AUTH_KEY',  'Ol]yQx5(9LDR}(9{mgygE r!m/Dm6JxnWn!mB&[ ,r/ V!m<Sn)g5i?Kuj^3Smz2' );
define( 'LOGGED_IN_KEY',    'C|XuTcy8<s!783tSdzP})2 {+4JPa).stQ?)dtwXwkcO$Xd bLI]E456P:-}yAy[' );
define( 'NONCE_KEY',        'ao,yIyz4|fne lH7h|tJdrGA)40-N19B^#6FjmGXyr~&@)b+0T;/{nhjxo^+kB^u' );
define( 'AUTH_SALT',        'dA;+K|3,{+B[]s[x_A;GBB1~B=S=t[+9$TW4wa`[Cp%j9#y+~>!Yw_AB%1xke @0' );
define( 'SECURE_AUTH_SALT', 'mqly,=.1i8@!}f!=g6H<R!NNE})6!9xM{&2vdI^oo?}2h$3?AL-]zrEwUnXKT&I!' );
define( 'LOGGED_IN_SALT',   'hV-3?]&Hxx:GL@yd47S1^o1DPnVZ79t.~i;g4j~Ruh3@NUTExx%$Z7Y@~kV?vj9W' );
define( 'NONCE_SALT',       ':u=ZY=$&=dy!fj:$[P!@t#%fxxU<gl;S$^`WzYf{8zoxLU.vV1PEPP>h_LHMI A&' );

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
