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




define( 'DB_NAME', 'db_wp_popup' );

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
define( 'AUTH_KEY',         'ADRy{z08QAyz:J&@~87JU[NP<:l/0u=w}0%aK/`;+8_mUAap{Nj[ _LLZ,@>V8yg' );
define( 'SECURE_AUTH_KEY',  'O@ n7Ed[~p( LE24D[n/$P/X>yCviXp~`;kyHp8Eb(/C&QCT#ZE=6)^Vj_Ut1vvV' );
define( 'LOGGED_IN_KEY',    'HP7o]g;e{*/,QEZmLHzvHfIxZ+z+ 8~VwL(?0rsc[E|OB@~?|sYhTn/vW{Q.G1_5' );
define( 'NONCE_KEY',        'fy#;$[0.^A7Y+JPXlU+vlx0fm&y4NY}%aBg;WD.W.pjj5JPTqR3Q/f8M^k CMno/' );
define( 'AUTH_SALT',        '.Xo:&Wjx)SI<%>L>/vS-eqOmY~nj}]O0k;2`:*f}Gq~WX+28p;EEa*|qU#VT&XB]' );
define( 'SECURE_AUTH_SALT', '`F?:@5rL?@)y-U&f$.BF3MR].d> o|x055zxfvQa$]f$/Jo]@L+;hu%Fq]}iLA5)' );
define( 'LOGGED_IN_SALT',   'Co<~i+X6Ze`y~ -mhHiXg25Gw r8J@Ph,(qfT?;;!Ezeq;i[ui.BQ7Nxs7H)]A~$' );
define( 'NONCE_SALT',       '>jkh|7m*~P*_x4o<!<._Z=~bs!i?OIt:(>vtN}6EfB1&Ar(|vi[fMd[Kp%*eR{Za' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
// define( 'WP_DEBUG', false );
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
