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
define( 'DB_NAME', 'tivybootcamp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 's3cr3t' );

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
define( 'AUTH_KEY',         '{112Lc^I2=Cy,Xz4gT)6Y$RWfmN3]C`o(*[ Rs$1^p#QOSf28UfZdE@,?/M}hb^m' );
define( 'SECURE_AUTH_KEY',  '<GJps9H[:Lp3s8ZSf*z[QASJs![-5@(Qr}SjQF9l_U6E+mrk$c^ca(E([GDm)jn@' );
define( 'LOGGED_IN_KEY',    'G$(7D1yF)uS,IUj7Z9x%-R+KV[N;:!~7F8>m-t|e[?TL2s58Wus7*#89$c<Jz|Mp' );
define( 'NONCE_KEY',        ' F%}X[T1z|;q?lz8:J_ziCp-LT_,ar21{Lvq`D{km!k[|5TT:[5AT)z$)f&e~;N%' );
define( 'AUTH_SALT',        'HZ$UiiaJV [}%gwP?NSn&1mZ~L;NBe5(+p)T9!q6!j6cBiq0>LKkwrLV+AkNK6P2' );
define( 'SECURE_AUTH_SALT', 'm j2xs^27DeO{ANB@g:-9]ZJ+fRxk~p5eI6F*[dbJhfGF@y>9Ug~LTDwc(0]=K3+' );
define( 'LOGGED_IN_SALT',   'F^FerZ9kQ#i4kYj,mF@ixX0.II{WkgQLOkfWQ#xE M)_gwb/C~WPsoksP[Z+>l>A' );
define( 'NONCE_SALT',       '`,}4e>*JOhjS`Z,,v&7?J66Eh?ax>+!O&<z`#u-Tv&IEOT9kvJ<9|g&q7?bm_$E#' );

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
