<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'sbesnz_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '7^ezmw?)c0K,[M;6BAv<e@C{~GVSuj,!CBjt3&M:AMSVbJ36=udVA&*UWn3$PdVy');
define('SECURE_AUTH_KEY',  'xcy>T(jU3:yKlAJ(l;RB7R]gEUvoKl0_BBQMV>~OQIwyg@^6{IyqyVXxSD);Md](');
define('LOGGED_IN_KEY',    'P?>#)tHyIh`p`a|n0BVa2:EzS%)(JMtu{)[ZqF/d8{+JT0l>a,/FTC!MTHm 4#Z2');
define('NONCE_KEY',        '/Wr`F#}e*z$cIY6N>> kv:&&HY(6nsJaNT) s@vQb_]2ht!;b%{e5Tc=YAF4gAm}');
define('AUTH_SALT',        'i!0_b8A%-MBh$3-|=C,P>VCNTH8/u*W7>_0s`8HOc17nK%&wdERJo{![QA=2HeFw');
define('SECURE_AUTH_SALT', 'a|H_shXs!UO&_3Y?5NE2Qd1kuMsX{Oj+np!k1JBqs1k_h&sJRDq5B1T}]~l=.6JU');
define('LOGGED_IN_SALT',   'Lkg>5!aQP%Mn{{v9//^s0OgRn+!g*;e9fZW6V7O?@9TU7Xs R=NwK%}Avt>Wn!Lk');
define('NONCE_SALT',       '/qk`Hi ]0VUBi!h[vO?Kpyy[z;Mvy}410J* 7c_s1+XzlaHm_-<BYLEl{95<)Ck]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sbesnz_';

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
