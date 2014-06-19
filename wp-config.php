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
define('DB_NAME', 'box2box');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '28010Langside');

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
define('AUTH_KEY',         'VZl[4(fKIjmm~@iG8Qti6%6k+SpXHgK*0j[W4rrg.fB:rUAMcx{?v+@qJmz[>BL(');
define('SECURE_AUTH_KEY',  'V?|AA~a/DH*,vl<(_}(8GS6!,!#~|fIss-t}ied{y|^`dZXe<xW -GK}%SV4{:R`');
define('LOGGED_IN_KEY',    '+}7E6hkl|;.4M1/ut>fTz,L9?cCA5qWG|&B&f,`Q,k:HYfW8=.AE=VgOLuV*dJr(');
define('NONCE_KEY',        'VVJbxdh4<-<]HL_N3BN^kD90=/Zavo67S6%+w8xWY+UWX3s~#u088FiZcnVLV0q]');
define('AUTH_SALT',        'f9x7Bto21cShRv-,$ZRRab|,dx,rv0d6`1I[{S+VSR$xff@<7XB/1GznE4$o{or2');
define('SECURE_AUTH_SALT', 'iv}4BHO{<mJ!{N8k7,S+k@X+~%WvI+|*zar=Cx|16B<f1;a6p~< y#&ZsfjzH}H9');
define('LOGGED_IN_SALT',   ')%b!pt{5``7HAl?Sj4qpLT]-Te,xC{`S3(CoZ7svmc_o7-|GHv9@z](r-%t@cGNZ');
define('NONCE_SALT',       '98y3ho!8ECMt_g]IG.R-e&K^u8+Dz{:R|.%&W~JG+EX<xwc3I)|hfVc?|-nIiSTM');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'scg_';

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
