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
define('DB_NAME', 'wp_udemy');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'j&2(X1yH 9wm-}5d<CA^c<:D<CO^c7L]?B]p0]$X*[h.?f^:xl~-yNX^h&;J Rv<');
define('SECURE_AUTH_KEY',  ')EuQA!B8g}@JK`jt`G:q:MmS7:H9~z17Qq*dD)s_</T)MEG|_?m296hUG(t(HfZH');
define('LOGGED_IN_KEY',    'vyUb`p)i,<H~LHe!=9_l+D/dCZ4K(e4Z3ULl9txLEN#n)G_%~EUw!J|=:C4XmcL4');
define('NONCE_KEY',        'MQ.KcMn&+a,SS@c]A:d!6[Fs,[Gg*M%OA2[JHYuVfgf*c^lb~7,62 4w#QEzbZ0f');
define('AUTH_SALT',        ',%89L$29N+*/X:vjG^<$m!^-Yu:qh=]cSq[fW?xEy>/ZaLaQID`I7NFE^i~#(:bI');
define('SECURE_AUTH_SALT', 'J9rj2&YU;zoqDt!Q$1%r-=FfM}8]OO%~TKV2Df=SXg=>3luJR:ncoze#Sq?]BsOK');
define('LOGGED_IN_SALT',   '^J0OV2A9i+Q@[&+pQyFD4Ou11^Qo}+iSF0{}kvyJL2r:KWHIE:Dh$i=6J+QF5|;x');
define('NONCE_SALT',       'xC*7A4@oNy;6S6(:J4 H]54_WGL^Se9]e-a?i7xvNssn.96,9<fq&vUt.r<IHhDF');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
