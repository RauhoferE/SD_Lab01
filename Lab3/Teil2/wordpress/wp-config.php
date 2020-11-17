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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', '172.17.0.1:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'i?-Zn=e`3I5-g5$nVC-3~Yupe&scZ`,d&CrCX8l!I|U}t3-d5t6[:n-|SB]nF6z8' );
define( 'SECURE_AUTH_KEY',  'S1@gYMYPzg|1#HX>lektxy,Ix3YIluzHPNyXTrN.Ui_G :N30EJE-|FkIXWTFa0p' );
define( 'LOGGED_IN_KEY',    '2O@ZATP%-+jXxJQtJ21J:A{/.][9g8>T-G1+0,<<*$|2>_:S)Ml&jSlcbP}pqy_c' );
define( 'NONCE_KEY',        'tg.Os7Gjam`%-Y>Zd~As.]>1BYU0cx@UaX0$Si@0_%g5h~VQn~r_&Y-Mr`y`%dXe' );
define( 'AUTH_SALT',        'b$V~@{TFU&+=^m9^%q;JEX>zuS@Wdr^Zk[k:vNQ`e_EE{l*u``?{>3+--<h4Y.|&' );
define( 'SECURE_AUTH_SALT', '|T+&Oxn|&=v9kYh`x]p%NBf{?:-u7f89 _TZJN::}(jwI*8K-/]XT~q&J~psoY/J' );
define( 'LOGGED_IN_SALT',   'TW4~Z*j|%f8rsb)4|}y+_kxe.8*INsF[gF<DUswx)dhnRTCo3gKLO.!9M8NsOEt+' );
define( 'NONCE_SALT',       'S#UwdUjn>cA|~YNt:1(7~dB$F?iD~`NjCx+CWG$+^xliLf$!Sw+3A}jb-<[Am]/s' );

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

@ini_set('log_errors','On');  
@ini_set('error_log','/var/log/error.log');
@ini_set('display_errors','Off');