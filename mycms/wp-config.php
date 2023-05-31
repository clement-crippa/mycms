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
define('DB_NAME', 'clement-crippa_wordpress_8');

/** MySQL database username */
define('DB_USER', 'wordpress_ce');

/** MySQL database password */
define('DB_PASSWORD', '6kpD7Hq_A2');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         '6h3Vr301Ihw*rM8*rBqO^l6h1Boco9Bk6PqyJI4T0W8QfJorLWWkAwzyO)BsXRs*');
define('SECURE_AUTH_KEY',  'M^!obtfVFitD6u2wBLqfWXh30BA95pAxo6)Teo(Yvf^k3ND*hXm5Dqyzm3eUYABc');
define('LOGGED_IN_KEY',    '^vuXHqt&S1Ta)dZ8fXCqn5pE&Ga!wHO(^LqUlEk)^NkRMRji37dG9kuO5tps5x4L');
define('NONCE_KEY',        'Ds%X8BA3b3G4tkbWGF%W4TNRPLN2xOiLSbFg7hqEg2vHdPrIp#K3Vlul*ht31SI7');
define('AUTH_SALT',        '^d(SbUHhUIu5%laoD3O(iBcH*Tji6nsck*@XttNYp2et16SKtex!Bn!8e1@!CIqP');
define('SECURE_AUTH_SALT', '6pCVVaY@Ib9cQTwZ8&W8D%u0*hAJB)mc4k2vLA^!iVTN((oXP1)EpgoWhF^Ato7u');
define('LOGGED_IN_SALT',   'RTPo3cnOpXEz2gZyC7LX0W#ibQ8FETaPzfEx(hghqa9%trfa8vcbm**xtK2JGZSK');
define('NONCE_SALT',       '&AXa&U(JuT8@ni1T6AYRE7avqn9&SWdmoX47@fV)7X)&tIe69kBgpyOeLWUAh^#p');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'KoKqL_';

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

define( 'DISALLOW_FILE_EDIT', true );
define( 'CONCATENATE_SCRIPTS', false );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
