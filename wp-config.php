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
define('DB_NAME', 'sample');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

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
define('AUTH_KEY',         'wth3<yTcH)-<>Q9QD;P|UqGy9C^Y 00^q(2gmpS2(+i75;>^[r_nMX{rC_uePF/r');
define('SECURE_AUTH_KEY',  'Z 4tU>d$~lC=|@,K]%X3O^Qc 7<gInVC(f1+9:cV}GHC/KL+c4VdN~`9ldary)0a');
define('LOGGED_IN_KEY',    '%=+L;=eTj~D$II&#A2[$xHLU]RWzLoeD^QG,pU BCY717.a-gs9H*Xx}ShC)&Bt<');
define('NONCE_KEY',        ',;iQ$lfd L^:!Vns`|(`5^.R3 GXdjA*}cOBQ&V9@HDSt2L%_i7qdRN;]5WhegcS');
define('AUTH_SALT',        'Uk}9SnH397lv8:{{yQu_w46~rq7(l+6+Zh,]H~oQl](#Lwy{8,Vm@PVzeHzN}eYn');
define('SECURE_AUTH_SALT', '.EM,/]X5fXByYf#mj~)kvXjU4zV5v,z*rGBJ)&x0{@~KtturZLw6Ue-WIj>[mi}Y');
define('LOGGED_IN_SALT',   'QP2p@K$G-B>{z=;yKQBCc2M)ZA<tLn`--yA/8yli5Xe3V5`pVuwicCAK/G>X5<:*');
define('NONCE_SALT',       '8^)B?t1yN2t1.XXD15z8wjfo/=ZBOE6^KdD%*daMb-~du`<O0E#(z.}qw}cpZ~Mr');

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
