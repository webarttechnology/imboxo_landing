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
define( 'DB_NAME', 'imboxo-landing' );

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
define( 'AUTH_KEY',         'H@FiS]W5qvZ<j4!M~,<FkB=by{A.(V-c~s/b^iRAW(d1iudE$;EV&:YI[3{G6`5b' );
define( 'SECURE_AUTH_KEY',  '2JS%I+>5h1iz^S[BzOOwW<se6ilc82-1RdI2wh=IodBu|EP4|J9#|cNuF#Sp<;|7' );
define( 'LOGGED_IN_KEY',    '9tI(OJ}fJ06=RS,[,hagi+Wj,Enf$r]{a)tb7.!M2y|S0J|OVU]Unw/-0!SWB-X@' );
define( 'NONCE_KEY',        'G?<SVlu-eyVfm/, Mfil9X@x1}Okk+iEp@,}4TEf_UTMs[dX/~DbJ&jE>_uj3+XP' );
define( 'AUTH_SALT',        '=;LfHXR<Q}Ep98j={$?M*y4[Ele(F}tr`YU8yL4LDC?|_Q6Z5wu^by`{-[hFdAmZ' );
define( 'SECURE_AUTH_SALT', 'SVv)Va^r5SbJ_%QYYibS`K?|ubaJNyA9>&,[184#d;=MCWo//N{F%SnP^>6K)MFS' );
define( 'LOGGED_IN_SALT',   'L%Y?^BMxd,Y5,b@[j+M^X^7h*@VIo}ycyx@R;N&%=lkl23dPjQ5tSh+_^+pyy.tp' );
define( 'NONCE_SALT',       'ztFPhp;k%3aHF|z,2`7z$AVxMcm?uR_i#Z@c`6^dTKd*@6v7P@h qIxk|LL-y:C3' );

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
