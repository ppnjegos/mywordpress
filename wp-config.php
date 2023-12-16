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
define( 'DB_NAME', 'mywordpress' );

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
define( 'AUTH_KEY',         '`>@h$gBgr4jp6:m_6@0,S:7H)9q?Bc,7=`W?8Dml(!T6V1O@Z;2E} S%sl/*2>mj' );
define( 'SECURE_AUTH_KEY',  'X|m!Fu>9<ZJF]?bO{r&_#Z5R-2ERG&TP +#[p[t$sCU;_,yP@Asxm3+cIL [izg(' );
define( 'LOGGED_IN_KEY',    'CND.+#:Ml0oz+JLO_[MlqCpbRRoMxI]=ovj0kR<CQtVF]xX,Jn3C#M8(1Ho/K:I0' );
define( 'NONCE_KEY',        '+j|Z+IWolwgTl`,$;OZ~F{iO9MjA|!YImunKom1q0+:C-hWa%sgRq+_]#)&+mjpK' );
define( 'AUTH_SALT',        '86rxgky K|]yEY%OEK8l0S`kX+_p2N95[J+;?+NL|u!S22]b_w0ED(yc;MY1<hma' );
define( 'SECURE_AUTH_SALT', 'RzDRfXT>1IN<L&oQqhNQIA3cIpM$6UH21P?I6jFL~qlt$+(eWq?K V!y:9RUJoD)' );
define( 'LOGGED_IN_SALT',   'j!LoS*^(G!r]c${+xJ(mpzh(vE[IMB;6IB2+~BQ/s{:Acg/CH~(!yc!.;#F_Iryy' );
define( 'NONCE_SALT',       'RmcTb#zZspORR^E[Mp)J(2$r|m)T}Tq*,)+lnMg1_).Tt[3A;^uab im6@Nrp5w{' );

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
