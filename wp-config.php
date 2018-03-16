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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

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
define('AUTH_KEY',         'd_m?a^i1G(e$q[f18tq7r+f8K?jQW=Kk.oURC-[Mnp3)l*Xe3>=;|Dhv@HF=P5,p');
define('SECURE_AUTH_KEY',  'Vd$WFt(gGU:SQ@+-I[M&==FP:kf=?)j,}>Fq;=Yt1W~;Hqyyb,d} n$aVvCX6Xn[');
define('LOGGED_IN_KEY',    '&i7#A{%q=3tq1#A]{G]apRlOA:~O~!RK1>yAr<gtUnajOsFNo=X;NnAJnh7N^Y[#');
define('NONCE_KEY',        '7f9UCu/&cX];fpEl4) 7$..P_OelfdYFlt^0{{x8{VKZbWun3qM!mEXK$hk#4Ekm');
define('AUTH_SALT',        'aK0p>po?Flz%oa,sB6<f7QhRwu;{DHS[=VZ:BPGcr|xOWLiLi ^0^~{vPlv?DioQ');
define('SECURE_AUTH_SALT', 'Tb(s3YlHvcQ4^P:=>}[lq|GP?,N&,XC*-Y[Er722:!WQX~>]>b`>IX?fIz_=K8h;');
define('LOGGED_IN_SALT',   '1D`K%#16Jw;!@c(m@{.S*jSZo!9a:X=!lZgvyO>E}s~IlbPJE3QAm1@xZz,9qA3s');
define('NONCE_SALT',       'x<1._|(G&~9vX`Ny<shiqq9s);N`K#nq_tIlDzW=;RN3k8FMp-<Q*kN[y NAf8)*');

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

