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
define('DB_NAME', 'uh');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'hello54987663');

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
define('AUTH_KEY',         'txAXM%W}`%?yrA?||zJrX[a0S|LWt5sZwjCM)+5=7`-r85i(F4yJQmd;y1b`:X+o');
define('SECURE_AUTH_KEY',  '|)Xe+x%TYGZogYeva(s,>K^Uv+!Oc22tSfYjNzjl:wl2gh1Ns++-SD^x:lK6Un*+');
define('LOGGED_IN_KEY',    '?d1_k.CX9JVl^Jp1uC94 _UlIEtG{(i# zP+G{R&V;#xt,3+tjt!@u``]d47U;_t');
define('NONCE_KEY',        'NR;bJqNBsJJ1bX*@<BB%PCL4oO)5fXh28~`FsuRYPNH]wAT)w0z=AtKIC&+#m/LC');
define('AUTH_SALT',        '*W6j2VIJ,I,86x{$y8X05%M7!XKW|gi`R05ges.qug1A2xcJ=zf){&&B}<!XPDo,');
define('SECURE_AUTH_SALT', '|5~JQOsCv)7|,~^tBUjMjsMl`y@p!|Q[=Jb1I(+j]$8rCfT}]Lf{0h[0kpz.{K-k');
define('LOGGED_IN_SALT',   '<)XN*(jjDQq2qrM1;YI{f^3u3DQ<Lz%:]i[iOTa8(gF5>az>4rCVJ|F>gO eu3;f');
define('NONCE_SALT',       'b+f>>M{ bxE)`(,g^7WLO67@[|5|<(xjyx)$)kj3+6y!78:dso064(M!|+6O~=oB');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'uhwp_';

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
