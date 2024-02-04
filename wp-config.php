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
define( 'DB_NAME', 'demo' );

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
define( 'AUTH_KEY',         'pW=)TC$or>V79sm[}8gVkVOk`N*e:/.%YO#m6)[Ws69TO< `5Gd</mu,-X_$+=xU' );
define( 'SECURE_AUTH_KEY',  'dapdP0M&0E`ySfj)($d*X7P+cV.@.yhm?T0*::I3/g<WoGc ZciwMMW%P^.64J&6' );
define( 'LOGGED_IN_KEY',    'n,JMd] PgJ6Fi!Uu&Zm+LU# kv`vwIK(,BD8;vmKl(kYiu%SF_6(R]~kxH4OT)@B' );
define( 'NONCE_KEY',        'sXtyc[wb(}l4tBT_#[)rRrTt0|[*J&SRQZ]oO0VorpT$Of$(qC]K4WRuwna`)DB/' );
define( 'AUTH_SALT',        'dXw^{v)K*`Dp.VI?j0p[DD0|;*>y6B4X!]m+}H9BUJ<~Fq,g[Z<lLSZQ I4m=@aR' );
define( 'SECURE_AUTH_SALT', '%IU/f~GC_%H.hz!FDY3TC-V!Lz[bA*t*?=qBU33?Yxa+@fk7h ,hltk-|3[([u{2' );
define( 'LOGGED_IN_SALT',   'CDh.o=.&z<+5}HpN8Wp/Z`j[eMq^TG,pmbXgGtG+a$Cc}@NZggoBLp-Va#go;>{[' );
define( 'NONCE_SALT',       'CK7];cxmKoIc2_7YW,E}<+iwPK,MQ^S_xc~ediIf~LOv6Deqy+K3c@&AT,pHB47e' );

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
