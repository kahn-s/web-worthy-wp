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
define( 'DB_NAME', 'web-worthy' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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

define('AUTH_KEY',         'G Z!!I??l7.D=o}!nF@mdKF;eIwc|CX#<72:Z+q9|/4l:!#W{.MIe-z2H1gYRIvw');
define('SECURE_AUTH_KEY',  'zy}FCouK,+&x2w32A]LossV37iUf+-G~2O#4!5[ag&KjSOMz( ^].}i}oM<+<3*Y');
define('LOGGED_IN_KEY',    ')[%TZ;)8<ajC9-~D!(@Pl2_@|PU%^K@&LQ$HLq>1iS{Y|ZQT$C!Hmj%RlfgQk-/S');
define('NONCE_KEY',        '{!qAP;NGe-N|,y<XAksNI4Ove5H29kVTl|m0-x;0vM%zMgl=BKY!m67on-t$~D%#');
define('AUTH_SALT',        'l?1j][5a-?%<+`?93 uf2fb[{4I{YQ)*#x])NP%RGpIaxZBo5Wf#yUV*C= pL$f*');
define('SECURE_AUTH_SALT', 'fQnqUe>$G?8dCbXkTw]W,Iedpd4DKKX.W};ihHU`%^}Biw`TfNFRx&<Jop6gf4JJ');
define('LOGGED_IN_SALT',   '<L;gTbNd8i?~ JxFKYkSl{(NI05LTD!v MlVc{*o23sF6z?1!hj7F:Pn@2UeI;w;');
define('NONCE_SALT',       '%m>}=x|](.z$)|-BF_Mm#k-Z8J;?0l]tc6q=Ub6J]rqsl`{4|mTc^z<vB1hx]wjB');
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
define('DISALLOW_FILE_EDIT',true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
