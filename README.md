# Wordpress-Based Medium-Style CMS

This is for a training program for C&T Manila's interns.

## Installation Instructions

1. Clone the repository to your desired working directory
2. Create your own `wp-config.php` file, and update the database credentials for your local machine (see `wp-config.php` example below)

```
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
define('DB_NAME', 'database_name');

/** MySQL database username */
define('DB_USER', 'database_user');

/** MySQL database password */
define('DB_PASSWORD', 'database_user_password');

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
 define('AUTH_KEY',         'A6d). U<VJM74oo+`K)Kc]lHb?O#uu5JqA7g;w %D7QrdYA(21NQU-^+w>w-.|+&');
 define('SECURE_AUTH_KEY',  '|,,N:20#5p.lbS%=siPN))VkGIUWj)C7EH+:tg[oK>yu.TPU0|?3GNZ1*|{dFO?@');
 define('LOGGED_IN_KEY',    'yh&}pEEn776!bWK%RmXJ:~xXn}X!(kjyCDe+n#5+~+2LpAC8+A)?U[?s#6Wshz0s');
 define('NONCE_KEY',        '(Q{A#Q(}-LoNIp_b$FB~vh0Y>kM?zNIE8NRd;x~woQr >x/|I|RF(pi5d{r;C{((');
 define('AUTH_SALT',        'FtWzz0T-|@!~1@A< +3P$ |H<a+{j):dsux}3Q(-y4~=ap) r}}~M<0iLz(;GZ*I');
 define('SECURE_AUTH_SALT', '0 -#q(Lv`Tkd[t86l3bz]|O||wT6cU6_<hx) 60d!~!KAkUIpnXrbq%U$-/ EU!_');
 define('LOGGED_IN_SALT',   '6h2Z[q|H=YU)p%UmDzGk2acO&c$=_X|eCW,9-6SE3dSPxw/Cq MW;2{;2X|ei0$x');
 define('NONCE_SALT',       '|Dvo`<i=%9yMQ@5bEXW*T%B[{W?!Hx;d+V/U#nu4OY:@ a-9ldiJ%+-BX^+<LdK ');

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
```


