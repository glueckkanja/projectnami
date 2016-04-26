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
define('DB_NAME', ( getenv('ProjectNami.DBName') ));

/** MySQL database username */
define('DB_USER', ( getenv('ProjectNami.DBUser')));

/** MySQL database password */
define('DB_PASSWORD', ( getenv('ProjectNami.DBPass')));

/** MySQL hostname */
define('DB_HOST', ( getenv('ProjectNami.DBHost')));

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'O#CSno^}e +[HNp`D_FHmjWBpu(~!D^$hDByTF_:qxIl_V;$(F9nu!=i[N*k?7Ix');
define('SECURE_AUTH_KEY',  'j!6B/pn{<lf&mTfCsy%Lf%G4]nhna<AuN5{u*2qr0^>tQkvI%&fs!r`l!GX6f3}b');
define('LOGGED_IN_KEY',    '@:~HW[gG@T~vLMN]69!/ueRE:=YN)N-&w!c%Zdzy&Q/BN:<z|J<>U.HIIJAqm$Vw');
define('NONCE_KEY',        ':BZHQfuvgupA{)Vm.,(^UdmL@?S%D#ff6KI9_MOjeUI/ J,CFJ,*,D/1`c)P!j]|');
define('AUTH_SALT',        '20,Bs}G]_yTJ7GJxaI_gd6<eX?=&<._QEL 9ffBLQr%}*Ws~$pTAYLnhP8%M>|5+');
define('SECURE_AUTH_SALT', '12z#wn_S`8|zJhW&344_1-.Zqu5]rrla)WMK$FGqiEZD~GDm$2k&::_dlpKFn#~2');
define('LOGGED_IN_SALT',   'M5KBAY*NB7T7=D$i?Ek&vug,&dLL(SP5?`FtV*sdb%[VW5Y(s] 9UZ- t_/QV|6;');
define('NONCE_SALT',       'eWyzi(HkT,XEfT0`%#mulWq/r,;qJqu:T~yd>*Fi{#,bu*-pQCH&E(j|aW*`Y:>2');

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
 
//define( 'WP_SITEURL', 'http://example.com/wordpress' );
//define( 'WP_HOME', 'http://example.com' );

define( 'WP_DEBUG', false);
define( 'WP_DEBUG_LOG', false);
define( 'WP_DEBUG_DISPLAY', false);
define( 'SCRIPT_DEBUG', false);
define( 'CONCATENATE_SCRIPTS', true );
define( 'COMPRESS_SCRIPTS', true );
define( 'COMPRESS_CSS', true );
define( 'ENFORCE_GZIP', true);
define( 'SAVEQUERIES', true );

define( 'WP_MEMORY_LIMIT', '128M' );
define( 'FORCE_SSL_LOGIN', true );
define( 'WP_ALLOW_REPAIR', true );
define( 'EMPTY_TRASH_DAYS', 30);
define( 'WP_POST_REVISIONS', 30 );

define( 'WP_CACHE', true);
define( 'WP_AUTO_UPDATE_CORE', false );

/** plugin settings **/

define( 'ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS', true);
define( 'AUTOSAVE_INTERVAL', 160 );

/* define("OTGS_DISABLE_AUTO_UPDATES", true); */

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
