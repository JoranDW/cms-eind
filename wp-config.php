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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pretpark' );

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
define( 'AUTH_KEY',         'NNi^_0bTf^HcE|e,dgY(>vH5U.}&=OD.mKGDN6MjVTVNII881m[A_[gbF`Hy?n>V' );
define( 'SECURE_AUTH_KEY',  'pVU;Qbd5z$Rov/d42lRhgkS44MU~uAQ,bz_>jN03|nq_n/J%R_4ncd^t)1G-><7O' );
define( 'LOGGED_IN_KEY',    '.T5woL/3LV]L>ame(34HRD>%TnX$5I*5 3k?(t{@A]`eL?sE,>,vVxtn7|#3CIa~' );
define( 'NONCE_KEY',        ',Y+zztAEs7%+X(9x.-/Oo<OmehN~>tE5}xSMv80:WqI#%du]5>WK VmDHO~bS|9G' );
define( 'AUTH_SALT',        ':m1?zdHmtl4]nLVnba43yQ2,1Pt.1*[-z6)a`STxKO)16WL~nRDI>E0L@2X#A^fw' );
define( 'SECURE_AUTH_SALT', '(lQWz#Dwa5td3297;5Y=iXD{D!sm6E;Z1C=?8MVQXaI|dU{zX-{FhG2v_F1w^^4L' );
define( 'LOGGED_IN_SALT',   'N`<n(VGVzBYaX^;c@rzvpk{#z*+cP!l5)K+1<}ZgyHX_cUEXibEtQu`r^f_*CW|L' );
define( 'NONCE_SALT',       '5,9)=f3e;~N u:P.=GGn}6)(1<fCdI)f|J)ysk0@FH+i%SJ>|O*v|V}CsnwtH@u3' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
