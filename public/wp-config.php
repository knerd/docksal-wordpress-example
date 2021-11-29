<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'default' );

/** MySQL database username */
define( 'DB_USER', 'user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'user' );

/** MySQL hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'ZHs_ntb~ZDJ<0Qo$(ox PQ]VVyo<NJVRp6]&w_?TX,l</TQy1[&]KUXTC_PFk Y.' );
define( 'SECURE_AUTH_KEY',  '|N-a8>15!%wc19Qn>*,o=~jb46w&7~So+OAwa$!gy<f0p-t)RU5*H$nbQm1X3nua' );
define( 'LOGGED_IN_KEY',    'zf=+CaquY&2PeRG/eaj}D]YRJC|ah#R^cPaP)k?B+%uo}=7HCc{mUKzKbRmk1B*i' );
define( 'NONCE_KEY',        ']B{uAf)YATDCMLw5+-4Ic8r$$I_#-mf]XDzliL_hk~fb4EFXa;`Xmqz`bzPt^:?2' );
define( 'AUTH_SALT',        ';pSNLZ:,=>*l:kIfm{r}p^-u=Mjj[[B>VA(+QnFFe6D{;K*}aslTu^JS8t[~|8]F' );
define( 'SECURE_AUTH_SALT', '=hw~Nd}1awrH HQ`iGd.vH+_T{B-fE1m?}~}<I@B9}puR->^TT .pO%-N<|#gS8[' );
define( 'LOGGED_IN_SALT',   'pfCuN)TJ+7q^r7Ru.rSWer7cKR`8$.2CO.kF2&*7[_#Hz;E9P7IT9He5+gwsXh:7' );
define( 'NONCE_SALT',       'k!z_W{K]jd9eaK^i]MwT,HFr^T`n_;q =)ZJPh#WtaMseON1_V@OW+qSr~EJF&Lg' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
