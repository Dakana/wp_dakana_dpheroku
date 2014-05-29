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
define('DB_NAME', 'dd5hmtm6s4amef');

/** MySQL database username */
define('DB_USER', 'pckyctydajsktx');

/** MySQL database password */
define('DB_PASSWORD', 'zdYzy14020AsUcVj8QuQNtUu4s');

/** MySQL hostname */
define('DB_HOST', 'ec2-54-197-237-171.compute-1.amazonaws.com:5432');

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
define('AUTH_KEY',         'sz|W!s Vopz6T~g;>^ruRwLd`A_y~1w&Wt,!gGMtziaLSS5%?>9g,y:|nSN36a/~');
define('SECURE_AUTH_KEY',  '=J1jwR6xV92!9,IFil94c`&?:hMBfc(GQJOQL[$|LA+of!PPk%?7,j?&4++9w-s0');
define('LOGGED_IN_KEY',    'PsTh@_x9v4#t4=<s+|2!uwf--w0-]AK7$N^IXC^GF!.-i%cw%XqT6r4PyZy|NT0L');
define('NONCE_KEY',        'x,Ya;|3@Dpqg`+yt&pAU]yw0?<sDdIfDc^w8|&++E!:}ThC6R~vSHrLEsFa|tF.?');
define('AUTH_SALT',        'u68,y16+QQw6Zf|%s@n(Hz]+Am/]NCy/OG?7jrj7DP<rTsLuyi} X9v;+}<MEU;i');
define('SECURE_AUTH_SALT', '&2a#6/*=lqTT_q3d*+JgH,Of}6h7)ELcS]$(Gv%ko@9Ovt37F7I+cv-(=E+v-Re/');
define('LOGGED_IN_SALT',   '  $g.3I2Np48+Uns}|N@xRApGy1<?Cn`MMvR_vz<!5;=N6Wp}<Yd-UJ,Q>Gn8G,$');
define('NONCE_SALT',       'ep~5-Utqnh WeRkOpQ1Gx2F{^yt8rRJYE`..>]E=Hx8MgmMf0a@N#}T%3LFt(;*2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
