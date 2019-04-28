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
define('DB_NAME', 'surpeer');

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
define('AUTH_KEY',         'y!kT]}>~VG=CMq_=7|A&B>w>] ]=SrFGU{r9dkx6;I#qLIJA,ek9b%y@iDSe(G6~');
define('SECURE_AUTH_KEY',  'Jg`CrHMA5HEzzBy.6zUn9tM{6$BO-9)&W^|D.a-+sSgC7-HAY:|XUHi1z3I(AwKT');
define('LOGGED_IN_KEY',    '^ARRNrgot)Lo[7J.!duoY 4oYO!~DFZM4]&iaL!Qrc.k0%2/kFk^4h{.#Foq0?Ez');
define('NONCE_KEY',        '-,W4[FtL+[crw!@5d=dzW#4bs/ S-oFdY})tceLA8er-HNY4&CiYq~f@CL9oCT/T');
define('AUTH_SALT',        'nk+vXKpeJR?,.pR:0smdvy%e8Ddq7!KO`~&dg @*rK|(4!wf OT9Rjbtq6$2Z$Ed');
define('SECURE_AUTH_SALT', 'KWpk4~VQ~lFum;|iCK|*e1]pRDNybz~e%U|V{Y([8_Z( oDhtzMGHTN5ulcn*QJR');
define('LOGGED_IN_SALT',   'N|pdK_Q%sf7wrI_AHtnE_KnHAy|#yVV{o#A*5hg)d3a&j3aMY}I:qx*BGw+dW62G');
define('NONCE_SALT',       '_{8H$fQDH,b0H[]t9X=;*M.1YVrO(1f^lBIMU1>5Tt6/Jjr#*8ZHt^YLu9c_kAkA');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sur_';

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
