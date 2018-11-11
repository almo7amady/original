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
define('DB_NAME', 'original');

/** MySQL database username */
define('DB_USER', 'almohamady');

/** MySQL database password */
define('DB_PASSWORD', 'aA@01093301320');

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
define('AUTH_KEY',         ';QXvtI]IUqQ^~mrJn8.>VL|JmU@I`.h`#V~c91S%z1(RA{RAl$EslE*q_--$GlX ');
define('SECURE_AUTH_KEY',  'zC9D$lxYX|xMQY=|e+366Tw;dh~`MgUl0X1Sl`tqIWdwaSMZp2tn]y0qUdz5_XI<');
define('LOGGED_IN_KEY',    'oU1&X7-JR.Z#LvP$WtsOp5l@y`;p$Esx-::8}&93_%WB/%`mq-3 4^tSY7Kp&lDF');
define('NONCE_KEY',        ' tt$3=q#`.W9f,QhCBC:2`TUAFeRKoA^zxs$3&4FWp,N^x;v1HO.  ~}c.--e#m.');
define('AUTH_SALT',        'Va`e#}VA~;6+RzXnKkhIg#fv4PZ8IU]{aQ2YOf](tHd3GY,9M OF^+MBY<XNBamR');
define('SECURE_AUTH_SALT', 'k#>;*-P~^L8Y9q<~64}Y@k{/u.31eXa6jO3oejq+v|R[|R2.).ul/7F}m_6]Uu#7');
define('LOGGED_IN_SALT',   'bcoqXZ=C{K]B+H^X+heQ//[?2){J%ce*FSi9RW/l.Uby>{L`m<7vUkweh338l@|Y');
define('NONCE_SALT',       'mnIaNS%#VP`1[841)9paL72FIa}1]K?jh>]U4j*vX<v(Xdn=1.c^E:gb$/ES{oE>');

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
define('WP_CACHE', true);
