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
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', '192.168.99.100');

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
define('AUTH_KEY',         'WoI$*k9[uU5+X.eE7b?!4+vss}UDU/m/`Sdz?yF_(P-cEB]}|hCExT^kg[m;4;zK');
define('SECURE_AUTH_KEY',  '3!Fb<8up.f;wJKD[5>onCkS9(1@#>9*MED6K!3]cCs?!YYy{<a7^7#[4>1.-FGP:');
define('LOGGED_IN_KEY',    ',pF}X*L`fkj1&YA[w./J^qdP|s)8(ET|B>FU@F>%E~[Uy|h=]NA=W$Z]1I*^epe_');
define('NONCE_KEY',        'kDkf&H1]b+Nu}JW7$rm:w`ulC[hv6a/93Qvbtj.yYGvLLt#H/~pK9$>r(VD ^.|c');
define('AUTH_SALT',        'b-KxnV)cmRf#L|*B=A-Wf3@Y{|)M,2!VUd/:hGD.Uqi`2n6g(?s[U(_yPK#_L#%3');
define('SECURE_AUTH_SALT', 'gcQ)O&NSszldN`YtW([w@~,VkL#{b;5EVfI&@D^{9EIv$goZs@El$u`J<N8O89;_');
define('LOGGED_IN_SALT',   'b0CV{<2f;9CMaD:ZF.Ng5S^{9Fgul5jVPC&i:WW_z^&mbLeOY$>_p[EHp7:!Z@Kh');
define('NONCE_SALT',       '`<Uw^T0>bz/2Z4Z^iJf)G?{B&=ku!d,HbkyhiOV|tSlE>6@5v4/!Z@bf~y*Z(.!q');

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
