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
define('DB_NAME', 'JennPortfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'l>Og)GiN8>I=]Y}C;Qitg0*L.=M&PY8U%C)nr_O&q<f):hd7jzzc0~;D!e]nT+E^');
define('SECURE_AUTH_KEY',  'EP<}M!W++2 %i$Q`hL]TsEyCcZ^Qk zL7 X/apy]^7sPhrfOxIK$wP;xt}t-U~0*');
define('LOGGED_IN_KEY',    'D:P+!TkVh`^Rvc0148kkuVZ!R>8]`1/Go`NQ(1V8?3W<)i ~`PXnl32/rr.N?9hN');
define('NONCE_KEY',        'Na04Y_ZQh?)CQ0~&S&P6>tJju`fqvcv}I8J(G^yd]WAC|~ Euw~^ZfhL::(MZ7N:');
define('AUTH_SALT',        '3UOMWB#=h@g0zUT})+P(C*4F)W<FkGz|Oh^.JWYI$)W9A$vjDjJs&qZ|?<eBD[R9');
define('SECURE_AUTH_SALT', '<:d8eKewR=51r7R!W)^,=]n5D&@d50n,&zsf7(zIK+oOQV R@1-C9}vz]Xxd/nHG');
define('LOGGED_IN_SALT',   '^<SlIff:b2~@yzc;ys1]<YI`B,SOsJ}Ebs+vOnOm`R+KlD;06!:/DZ,UhgTb`iD+');
define('NONCE_SALT',       'pvX.IEvmyk8?:Rb%o7QmHLD]/j+7zPWI#!iX(Nf((([{jD|E)/%5uU0-2]@(TGEN');

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
