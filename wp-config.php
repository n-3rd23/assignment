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
define( 'DB_NAME', 'sql5407668' );

/** MySQL database username */
define( 'DB_USER', 'sql5407668' );

/** MySQL database password */
define( 'DB_PASSWORD', 'DtDKRB3Kf2' );

/** MySQL hostname */
define( 'DB_HOST', 'sql5.freesqldatabase.com' );

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
define( 'AUTH_KEY',         '6%EeKSbe{x<EitG/+Rl<>Xj}|+=8iW+ZkI+`0+?IBJ21/#LiM9g7Cv{I~(pJ3)F;' );
define( 'SECURE_AUTH_KEY',  'p[)z73?tq*c,(GJ~L|c`+T7{WOV.{C7QZ9#](7yebj*v_5f#j;6dS)c)e)^uYpbR' );
define( 'LOGGED_IN_KEY',    'N/IoF{  4xmdi]X|,LfUmx{5.-5i$gi+GVg?.cgj(>-8+yF;<s=z~4rWOnbM8S3Z' );
define( 'NONCE_KEY',        'd/^89.pe7o/Au:X:Wz:<(-:}FkF-u0RI@h|CEq`V+M>PkBx5z-T>!:e.%C_MH>4f' );
define( 'AUTH_SALT',        'MZjT_A(L)O{#L}SQ)]@SRN-)D/4L8NlvSuR(O`vLSTn*ftS<xMED N;&Q,>{;Nc0' );
define( 'SECURE_AUTH_SALT', ':t&)KBc23byr>xKuRFQ=p`%{uC1Qd[GsrU<Ci`+G3Z<TR1dU|l/q&TB.)~R+=o[[' );
define( 'LOGGED_IN_SALT',   '*wXzc6`bVc,@t)UK)qEqvSN|X394saH|g>9Abm@F2O0>&&Rl(h!j6nufn}jPLn:o' );
define( 'NONCE_SALT',       '}7zqfg;[QK9FQ8Hu.>YgGaSK>%cD.Uz@+#44PT}^B$|OEMP|`4E8q1$$HVI2}8mn' );

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
