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
define('DB_NAME', 'wp_db');

/** MySQL database username */
define('DB_USER', 'sathya');

/** MySQL database password */
define('DB_PASSWORD', 'srikanth@1909');

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
define('AUTH_KEY',         '_Y^>(s|Ik&bH{p;7xV1_Mjrgh!ZdD-8d116c<p @#k5Z#Od:8,fNp-g}J-LqOO|9');
define('SECURE_AUTH_KEY',  '.`|HkH3o]`XCL403<+Ad[ 35RM9K~;M6rl6zl)C|+_LL4V{v9f:pwvX z2kyk1|;');
define('LOGGED_IN_KEY',    '=<@BFYCPLVt1d~[~HB=6sx`D^YAH:Pv8{w<f$:BCnthzzYUy5^9MFwOMzYO_tQf:');
define('NONCE_KEY',        '+vrZ9L_q?(S?<PCd+Nq`A%>7Y[JzbDm.6_gk5%FA^4N-xUR5<1|r4W779&uSUWd`');
define('AUTH_SALT',        '!t>KBB<-]0FsxVz}wYiDAi3iHqR/Ywn1@_I(@j@r^;HsZM8|Ftt[;?hn/7mFSj:7');
define('SECURE_AUTH_SALT', 'KxSrfpNKN^+zOs0JP7kbJF)_T% %=&D t5rJ`WCVC&T5^OBJ_K_t:42H(z|GD{ub');
define('LOGGED_IN_SALT',   '17XvPNH ]fu^yFsG9K7.O^DvfD8Ov<`Uqu[^!}aDTQ(% :OlXS,|)` 1o+YNYek ');
define('NONCE_SALT',       'DU+{o?u7J0gLtS^]81:?9,):YI/IOB]*a^-yj+#}bt=sar4_582s(_QAK/{d2-Ik');

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
