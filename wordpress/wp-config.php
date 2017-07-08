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
define('DB_NAME', 'dibsaData');

/** MySQL database username */
define('DB_USER', 'dibsamx');

/** MySQL database password */
define('DB_PASSWORD', 'DIBSA13127');

/** MySQL hostname */
define('DB_HOST', 'http://127.0.0.1');

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
define('AUTH_KEY',         'LBlJ!WxVX;c2|@TKfWz7p)DB6+1Pa}/&X4$;5|d} <R6+w^YDk0Rt=cS[xp$!cR?');
define('SECURE_AUTH_KEY',  '8.ci[~[ ei6>(Ps]Fwz-|Z9wy:mU_|MSb9.|7/Sz{:76-y=ec06RHsFJ c,Vn_$7');
define('LOGGED_IN_KEY',    'jrb7D 12e!BD3i:4@Zr4h]>+A-56jo ({>.,zLedJFKfKcN_O5.fF4V<JQ@9[qC|');
define('NONCE_KEY',        '_WzIp^`^iX^jXT-a yh!pVT;:B(.G<?/JN<*LF$%RhN$$]qfd=-@IFr_ZgOD%DeG');
define('AUTH_SALT',        '#;-EpV_*]U;`Z|}W; YOe+6wH=+-5nIpi]F~zjl9]5mhj[+?:ErOSEz7tIkGL+`r');
define('SECURE_AUTH_SALT', '*79=eg`p&@J?onWh(oqtx #|A+)Q+jZofr3|P!1[xE`x8M.n??q3d}5[<st.=dT[');
define('LOGGED_IN_SALT',   '?PJ/X@:GNCxJB#HOy]QV;$hEq35 !p{K@eXh%LT}]Jmab$jyO}xI30*Scy1h{U(J');
define('NONCE_SALT',       '`KohMDD@E aC?[:Yio!Kg[p=l9UGftM^EHdZ>w_^/5|iDBCK+D>u<;P@f<|8);2H');

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
