<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?VVzLNmUv l/ux!+aG</qu=L;4|ZKFJGO9XoC`Jo 3Nj?N(TIJ6J{bTg:OSNDZ)X' );
define( 'SECURE_AUTH_KEY',  'vMWHo}PL(mC//AmL~$m{(3mi*([u-0D^XM5R<.8#Gn+8`0N*54Ccqv8m.d;|y{;G' );
define( 'LOGGED_IN_KEY',    ']AWrtGS>_Sy$d7B/V*cif{bnBvC@]-kn87Q2qR(k|+? Pkj%`b2:QsH*K*$e]zHB' );
define( 'NONCE_KEY',        'A.sVcOj[cl3~EZ_`hz7Ss1ws6h8}w-VvV^OKer1?8{.|O#XpLY`+rs:S4_+oU^hP' );
define( 'AUTH_SALT',        '|<EpSwG+~B^*@r+ANKqT/idn7b~}<J^q/PE/YA. Pg*pHwGzK@Hz-/$7O|q}&5)f' );
define( 'SECURE_AUTH_SALT', '?s]<CKt99-*C0udhU7kiCBkt]3OWcf/HeM{Q(S2+VROD45BdH,.o}BQzz8Ji-F(:' );
define( 'LOGGED_IN_SALT',   '1&[$LYY+VrT(v*S7J#q%}@I*f]R</rStrR}=9K]=]Gvc@l$Bi$>$.H11BYsGh37{' );
define( 'NONCE_SALT',       'vNYWSL:(}538gi=$]_[$BVw$cX!#B$%*WA/ hX6?_:LzDToRf1_4s5R$E~)4>s`&' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
