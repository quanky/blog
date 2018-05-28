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
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'qu4ngco');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'v/U>6`[70Q+B5Pgcn%Fp9>~3Yb$5)6WL*Y5NZi!_QD/w|BXT]86kBa2p.&(AV/qv');
define('SECURE_AUTH_KEY',  'z]_<#h<*|vYRUFi6T](6>Uc@w`X??x0L?+]s6!o5_(=D<br!x+nZG6^IY_=4x*l.');
define('LOGGED_IN_KEY',    '<} Cm-u)-wpl8VAEJ*>+NzH0;Fm{$N|`Ei.aUs|RZ = #MJ3D+N8osN EfBA_jqH');
define('NONCE_KEY',        'kTz6La*my ]yr~Z0SES|3>Fh<.rlZtAky`cklps4}3PBat;&W}e%JXH+mtoXR xC');
define('AUTH_SALT',        's+PNhuA&vVMZ^;&o2ZOuaf+3)aP9#UxxE~qD|Tc1;p&,5p$xz%SAKiG;6&MX99&<');
define('SECURE_AUTH_SALT', 'OqF1j1r+crH:4?l7#<Mxwn$-)PX.:I+`KWv1 HVwBZgGb2:_Cey>dahSHlItSV 5');
define('LOGGED_IN_SALT',   '%z]%%tozJcfCKLr}qmBi3&Bm}KZw2Nla 8Mnjsn.{.s()J(ALA$ah4Ck;I}ldTCb');
define('NONCE_SALT',       ']uSRIgZ(uGNh>=.*3`U@7r+&OB7f9!z:C)ng7`(r,F_X9w~M>*<lBVHjm~g^15sz');

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

