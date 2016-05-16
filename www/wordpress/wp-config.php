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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'SegundaEstrella');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'c)X2!.CfBAdlfrSK/}:rNd1P@J~)v<m03t#3WP91)2,5@k2-!)k{+nCZQ<%@z}e%');
define('SECURE_AUTH_KEY',  '6US6kVH*#y.d1P3Acf$5[AfH^ z]:rrdXQbL09.En2$%DaV55@k_JFtZ9#yna7}5');
define('LOGGED_IN_KEY',    '-u8u!lo5|1fp3,tON]@[q>3QM?(f+KIjJ,/EBtb!2>UAuis7RwP_i?G#Vn>P5^C^');
define('NONCE_KEY',        'S6ErG/*As{F$/sKPWXbqX[o50LxB8-N<_Fq|1n fYJ%(1]5^ACWPBVSH_cWP4yG&');
define('AUTH_SALT',        '>Ae**)KRPfmQz&Tl_.|OmBkVTqOJ%#|u2dC}.`0OA*-;4edv=y(HdEY+4U0QKlc^');
define('SECURE_AUTH_SALT', '3s^C/iIp%Z8F7Ju|%{hCr~(ys~8!/T]{luXf9=PS6>E(ibiJ P0YNO)dv$?P]%U#');
define('LOGGED_IN_SALT',   '?hhL.ql9O0ZCL4`]v{]5E<nyK:l<4iJX*S=H5HNY~DLFbPr~h+(p[_6(<WRho@&P');
define('NONCE_SALT',       'fF0;$Ct</mK`zn*e]:{Z=`j0K3F|y<tBL*L.b:f|I~#]cDY1(cxj]GH~,.htTp~/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'se_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

