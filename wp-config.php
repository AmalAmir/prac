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
define( 'DB_NAME', 'quiz' );

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
define( 'AUTH_KEY',         '7avd6j!6 *%u4OB/YKA,t0q>9ej}0#gBy6$_lwE,;<;lsqK_b)kPh/pLz]|!Y;Q+' );
define( 'SECURE_AUTH_KEY',  ' y(KTT+=;vENZ<qCqQQp 3^RbK5X#5d,UKS*7;F*:J.O=.MgTk.4MId-frOaW>nG' );
define( 'LOGGED_IN_KEY',    'YyX4M5][s1&~urTtZ_xk/jP5O]P`_US4zb+:a%Mn2BJqwQb0]D,}>K$.;X(cq?xG' );
define( 'NONCE_KEY',        'h,o=_$rix;XCtdmAX5(1;uuU,|*8PF*s?x.A|7a%-M0+aCs]hK}joiD.+_dnd6y!' );
define( 'AUTH_SALT',        '%i>wLp|!7vK22b%zN~)+N]3?v50hrgJ[@`BA4[JD[@R|&7rNqH-?!xVx}}QsO[ $' );
define( 'SECURE_AUTH_SALT', '*O:dsnmK#718vi,$x|6#W*UQ|aQ>o vIO=y*3Qqgt?Op;fsD1aF(aU:Z1qF~a8v5' );
define( 'LOGGED_IN_SALT',   'J7uR++>VGZZ<@rbVkj[#OupuV=^WQCKus`]Kft`I&~DTd5Z^Wr]8B;qc:JvupLCp' );
define( 'NONCE_SALT',       '+cM2B< ^|pttU$p+pfX,.h)G:CO{acm2J|PD~M%$#,imK^/Kx14d<>3qf-r]jCo?' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'qu_';

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
