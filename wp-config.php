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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_supinfo_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'z=VXp0)[%$MuM|JjQTlu~.As!gm[}(g;fyV6GJ6#nTrbIa<FH:7HzZLU,CAQe6tQ' );
define( 'SECURE_AUTH_KEY',  'C)>CQ)pC-DLZ2At-N#SZ}3)^z*Edhlz}f1c3v:C;X)Zq^qp*_?q^f/+Z]xH{IQ[k' );
define( 'LOGGED_IN_KEY',    ' n[#V$l|yP($<nRQ |~,{WHbRb-!qrbr/((KU1bdl$KNgmk *]8s9C9%Dip_C]7~' );
define( 'NONCE_KEY',        'qd1pGM%A_(e{m*`J1Z@{TS`{3|^pI~t/eD_gv@.o0vSFV*.|jh>?qPlA/U@.-<ac' );
define( 'AUTH_SALT',        '?uN*dxLVo%ScjurL#QO^MDq_nn1nDPNu5P$NDZ@cN_Mv{}6&G[n!J1FU8?zlKCKr' );
define( 'SECURE_AUTH_SALT', 's3ll%[ea>zeVyM7)B5:TBln8+`9EPUkC{&~xXe2Hm$(BD>p1gmD[,hFm+X06hZ?u' );
define( 'LOGGED_IN_SALT',   'vo2gD+W?))3_D^QJS5$Mvq+]!!L8>7EEyLo7oed=(hw39Y<As 0b~6aCVCGsp|L-' );
define( 'NONCE_SALT',       'l3;+F~[3uN~$0o&%+1vWJ*!@l=u9)vQH+L$xo?TY3}bn$pH@hb =rwEzI6wQ6gmo' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
