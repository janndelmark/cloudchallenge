<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
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
define( 'DB_NAME', 'wordpress' );
/** Database username */
define( 'DB_USER', 'wordpress' );
/** Database password */
define( 'DB_PASSWORD', 'kVYWEN1z' );
/** Database hostname */
define( 'DB_HOST', 'localhost' );
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
define( 'AUTH_KEY',          '%cAy2Eg!;`inZlT!U8=)7VrOV.?oyOo=zK4&*N[z{>-vuF nr,Vd5d;(e<PM|?Kq' );
define( 'SECURE_AUTH_KEY',   'b]^[Tm.tCOLDjty4zYyN .%mR;9-ACf[iFqL_e:KO`QY/iUu&M7gJ.Iw3}.1$/dG' );
define( 'LOGGED_IN_KEY',     '/%pR@$EUekHH`?ii6Kh aTSWz4SRDU{pyy9ZVJ6kuM_s%d~f~g~?GM/?B]=UFFh$' );
define( 'NONCE_KEY',         'U#]&Ma4g!$7Ihg1_%a0U2[QB)ovQ.Mba>#bg#_t1hcT!z(jWSulzr, 2)/j=B]-,' );
define( 'AUTH_SALT',         '2^H=ViwVU>K,KLnr29}V](CGIjM!8tB a xFo53XL-D|*z 4M}T+@{`*Ng8?>R54' );
define( 'SECURE_AUTH_SALT',  'B`P/CJDpGQ1$cMf4Jk|L~a?JXcgFhYgyiV|?YBw]n`%e[g(hvN?C&5X^i.,|hBlK' );
define( 'LOGGED_IN_SALT',    '+8otiXuI<f.wsq06vM-Cw(mb _ReW*m_o<{Rf|2GyyU+H]{Byo(bZ6Pp]it+/y#i' );
define( 'NONCE_SALT',        '<+7pPhJ&&g@U~NT,iQe+~LL]ND9n.O=])DtABSJ08f^JGo@M<vCK-WnGvMA=%s?%' );
define( 'WP_CACHE_KEY_SALT', '-SoXAreu-))GDjX+!,_#9-Rz4*cU<i`0Z=Zd|d?Cz=^*KyGs*y@::cQO~f7hS/6{' );
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
/* Add any custom values between this line and the "stop editing" line. */
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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', true );
}
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';