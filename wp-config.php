<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '[x>]4D?0aMXf`cU|$:D1CR-7}qYqxIC$?[.*MJ]%AsmS>U=dX8~3|-GLMyPPIV,Z');
define('SECURE_AUTH_KEY',  'n1oqTVsW_hjPDdwm%$>tWqo|Wm{H+?e0SsQ8HIV|>JuGN2SXT]8kH c{}aa<t,3%');
define('LOGGED_IN_KEY',    'yH@1Z.AJ-pN.#!uu$ i<5}`|:^-}XGR*w?J[=Bk:^dN+@|wZ]M+8FTSSBg_C19+w');
define('NONCE_KEY',        'a+FYel+H.qv#}j]p/}sw<JX68fiO|7x]5G>jJ!~N>tR1QV(-rQy]H|UywBtm~kT)');
define('AUTH_SALT',        'yx:ShLd*9|Nce-!E$Z_$7smJw+@#~nS3b~{3W+10R_ubLpd7SjMqN2!%qksD!eYu');
define('SECURE_AUTH_SALT', 'Cs38pu|kl+8`Gr+$Fhv/T*f%LL]&Zm/_#+jq}`<]Aquq91M]DKL{sP?cy-Z<|tEm');
define('LOGGED_IN_SALT',   '0!Q^6.gtYuaJ:Gn7KpK,uHQ~P/x6_%Ab>2omjIO3-@yc$ba~AdrIu-EH>=smY8jc');
define('NONCE_SALT',       'zrrr8$Wsd<ET4R/5?}tGIRAzmtuM.2U$j0dR+xM|7=9SP0&9Dz&rhL<0!Gp-UnVF');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpeng_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
