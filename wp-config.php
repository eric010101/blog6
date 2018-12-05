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
define('DB_NAME', 'esbcwp_blog6');

/** MySQL database username */
define('DB_USER', 'esbcwp_blog6_admin');

/** MySQL database password */
define('DB_PASSWORD', 'esbcwp_blog6_happy');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '6b8LbXEuVWIccuSDgNqxsLcw2zyBxi8uSrrpOQXnjGxJXkMLIgLcgRLk79hKzQ65');
define('SECURE_AUTH_KEY',  'HbtapONtKSnYczF7Nbw3AQ4lCKoulTw6KXpvMjg01eWb05msWAqa1YMBWblQfX6g');
define('LOGGED_IN_KEY',    'ICdfDVL3SNBtMOecVzlG5jHr9cwUBAYZTmA6spg4WyTI0H08u3qljjWfP0y3jkTZ');
define('NONCE_KEY',        'US2rDRrwS4W6JjROWnR0vXfisVeB7kGEWwZTqApwqp48RjFwRsTHzAYLG7GWsa2z');
define('AUTH_SALT',        'HqUsYMn9CwYCymIpVQQHSBrvdLxr03POrX3ssAX0W5VJLeXK2HSrlUQkDbtKrzXq');
define('SECURE_AUTH_SALT', 'L5IjBC6tyTPtsfT3thgd6Xvvhuy4SFhTHkNFynXkml6DIXOJOF2RDXcfA4EghKP1');
define('LOGGED_IN_SALT',   'tmKZSE2PfUg2MeXGp5btMKGdLYc782BskBZIuyyekV4PTQsGH4PL4wdVlOPKuh8S');
define('NONCE_SALT',       'Yk3FF3FDUBujqo2dXFegtxp2w5eGre8SdfEiNfWjuT4l5smlKn6jvaklB7CJaYRF');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
