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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

define('FS_METHOD', 'direct');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'i400_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Rw18dyrw');

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
define('AUTH_KEY',         'PaPc:g#b+:Ra;jH:brzIZLR 8(;_nP4.j0aNR,yNdER >Y>H3kW!`C%&gm:1M%7|');
define('SECURE_AUTH_KEY',  'e7b+riXd#q#&WJbn49Wp445;+wV8=2*H}I^4fg&>_amc5!WbY+.@imYm~pa_i^kq');
define('LOGGED_IN_KEY',    'B.!_Zzn5~(,}dN&!_kL&&zCQSeOz+3|S.hhi[hZ*m9]MZ2)1JcaX<TFo9%I|ZZ$f');
define('NONCE_KEY',        '-@/R WU%aC:XEhTpn[p_Bnq6}3-g3:Bn.Q>P4-|aQac@mzi.lhC&J{qA(zit0P[{');
define('AUTH_SALT',        ' ;^+se2E=6U8oUs%TQva=_BfoQ[32$}NodVA>EhE5 As_Rqq>xL3=t@JXoJ*L`BI');
define('SECURE_AUTH_SALT', 'HKc%U4R?J.[EL-^ 5AqbTi_PdWJ07OW//mb>cinA7fw~L&n`Q6t?nP<|i/[AeQlH');
define('LOGGED_IN_SALT',   '6qPLm>Yo.IAGosl<S<Fa rl)TYMF}Fi:lq[BN5%$ZxIjC5Nl{e4(MBNz)NHI8xTx');
define('NONCE_SALT',       ')H%_%j>M*e8Ag!?Zss>qXet=b|hQios+h0bg<O3LW/J{ nSBLW?.v&yl/lWzZo=b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
