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
define('DB_NAME', 'exrds');

/** MySQL database username */
define('DB_USER', 'exrds_user');

/** MySQL database password */
define('DB_PASSWORD', 'STgg1KsyYrxCEeaDJJXQ');

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
define('AUTH_KEY',         'B^P!yu%r+)-7u?L`GCQJc_`~s=).xK?j{S*:YlLRjO:4yd~sljBxfxWSTi68+A7m');
define('SECURE_AUTH_KEY',  '7]| APe~qAi57gYk8#X:U@X5KM2d~Wf*[jL!HD$3~m^&%~]! n*m{%^7p-9)MkQe');
define('LOGGED_IN_KEY',    'naGX0n5;GpYI|OCY5!0$3mj`MmvmUI6#.]E_Y IKAZ%+^A56gr!ETfBzri`?M?S@');
define('NONCE_KEY',        'qDG%Fw6w&B;=G^>HXwjR^s+>-6T$TlD{dt#di5vT xsS=m:eK|XXWRd`9/TNFl}#');
define('AUTH_SALT',        'AM!c@9cfbVl^Qir&C F:nq(N0Yd`)}5ai]v9@]e%m`KL}Z 2I2xMP,0&6+7yGln~');
define('SECURE_AUTH_SALT', ')j nGLTGF`PZza{*e$1#7!Z~@a$fx M/yi1$icurwfLEs T?L]=^lZhLkxG]#8mr');
define('LOGGED_IN_SALT',   '3|r>ZP3(Ufh560/_BD-Us?bu)(L)}?0s4W{ncdG1|h?/Mn{5Q^#B=vL%AcY?X(t+');
define('NONCE_SALT',       '#2xXQB LZOw]:qS=9^rKoZ;M*4WUKPQy,X=6&p__|y;lZD4^T3K]CtO gZ?fx@`I');

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

define('FS_METHOD', 'direct');