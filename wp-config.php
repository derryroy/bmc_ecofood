<?php
define( 'WP_CACHE', true );

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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u167104691_kQ0AU' );

/** Database username */
define( 'DB_USER', 'u167104691_JXz06' );

/** Database password */
define( 'DB_PASSWORD', 'WXNZNuFPdB' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Z-mjFfzozW_` T![dI}o]VJ)u<3wYA?oOGN@p;19?)KXwsU#<_r$*E.Jsgv*c$q@' );
define( 'SECURE_AUTH_KEY',   '6D}^)AOkC}w/p;Ez6*7+mkQ^|p MHYMJaoF{U5p3)H,;P7cllA1Ql=.4C.8*FvM9' );
define( 'LOGGED_IN_KEY',     '4G-9]dEhPh0*8a<=*x$D;!bCmR/(C7,?q-hnVHKdM*U+h}x5t/(xnFi#oY?=mn14' );
define( 'NONCE_KEY',         '9q%dCf[Oi*by`.(<&a*HLbYJ1&a%:2_+cdgHhVM>-N=z~[r]L/;)tg!*-Hv|WPZD' );
define( 'AUTH_SALT',         '?zc3T&)N=PE-]{S<(}Bz}+3hl@~TO(&=j`:w)T+8(OrL+&e{;1Gu]^Cx2uH$:!0J' );
define( 'SECURE_AUTH_SALT',  'YwK1q3@1]=yXaYS}c8iI+dRB,`kQ~7ne~oR&g{?Lo8=!(vVs1kF>LiyOu=LnaSMK' );
define( 'LOGGED_IN_SALT',    ')KYB^[nAFVvNCZ?u8h`-A{$mB>.#,~e8q*$|,KTf-^}L^{7TEC[q:Q[^=d@<C)sj' );
define( 'NONCE_SALT',        '6FUI7<Mn31*8x`nwVf/y!9BE)6~toBG0mElhn=CJ<i_*!}8+vDSSp0(5(G|tcE%)' );
define( 'WP_CACHE_KEY_SALT', 'T,e6)%}T:Qs6,gO>5eH9fYb?!JW>{=>%-f)=whWOs+g,q{P*Y2OULiVsm@N)EEm3' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
