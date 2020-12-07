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
define('DB_NAME', 'lqsorgsa_last');

/** MySQL database username */
define('DB_USER', 'lqsorgsa_last');

/** MySQL database password */
define('DB_PASSWORD', '41810242');

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
define('AUTH_KEY',         'r[n95L.=##1jl:;~l%!n?fPf#J,*u[IS&RoWF_T=gxub,)W^yP7e%ZRsXj,Gq3D)');
define('SECURE_AUTH_KEY',  'PC &d~[imr6A|O!Zsy5m/8TEB}F8rT={D4tWZv%J%dT#y~0Vd^kbuI$H]+H`%<-6');
define('LOGGED_IN_KEY',    'acY^Cr7@b)o^Zm=p.cAI>Uw5^p]#P0Q%Nh-(d z#{2LL,NQTk^$<LEk1.v(W{pCe');
define('NONCE_KEY',        '80nV;%|J}U~Vn`uHYlKH[ClP-8^<%:Ul,1ZvjI|4B*m$+)&eaV~)p>$[]T)%2Fk)');
define('AUTH_SALT',        '=>gQkn1m^ bLK-6,c.7qH/&kWLSXd{d S,hkyZ`_lo=q55or>aqPPaC+RcU,5Gq-');
define('SECURE_AUTH_SALT', 'v~I-d]9=^jJ=#DI40Mpz@;%z8Eo0w?mJ}1~.Lcx bJvVIBv;%Lx~ w8ZDvNACf.i');
define('LOGGED_IN_SALT',   '/R0&qEJm&D)~&cAGk*x].#7Efb?F?6I|umx=G?oZ-9*.Vr.!e`In5h`<hL$Zg&Y,');
define('NONCE_SALT',       'G]X60,_gA/=j;KV2J[%>19[<.jW`pX,%{n.C2RVraegT[+^]B#s}l$?=`&4/VPf_');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');