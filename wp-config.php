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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kuoptimasi' );

/** Database username */
define( 'DB_USER', 'kuoptimasi' );

/** Database password */
define( 'DB_PASSWORD', 'hXiLgzavwwunfMpwgh5i' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'om`5`Tfm6>nuQ/AJUMvlG/gE?d{4]Y3Rfp]L0x4X6%o|?}Glnt5VqZ<q;:i9%PM|' );
define( 'SECURE_AUTH_KEY',   '-~PY-<:]#A}/yj%JLz]EOO{atO M9$=[NoB qOx>D(U0X7Y*X80WBd#:`(L17%cF' );
define( 'LOGGED_IN_KEY',     's(V(4]i:e}npPG,17vNsW-N}#uHj+z!4#fTfST7*[VLmI3bl91Xw<?A]0P ^OgN-' );
define( 'NONCE_KEY',         'rr#,uHUaPpwAjeWK_NpfajHnY9 [0{?QA%pQ?5j>,CHO 1Bt@I#ReB`}U|M/hE=|' );
define( 'AUTH_SALT',         '86inLzWJA5kNN3o*O6KB|lr(v#i|-OZ4Ov(_<0}3I+M,EeCgx^Dq(y!=_/MFT+>$' );
define( 'SECURE_AUTH_SALT',  '%`9 `i&::`/!jAGT?PG|gfX%6(,]eBc6*`B,HCfrP5pFqrUd23D2ydV%Gen]O@9y' );
define( 'LOGGED_IN_SALT',    'mxfr5hoO{>MlufKWDg$c]TQn#[_,8OFHk>/+g5KjCT$,*`{!}M9)bq7(A~Seo q-' );
define( 'NONCE_SALT',        '&MHp>N6h<w@YEb{@t!h/<FgRA>_)t8S>#>oj9t) >ClZ9^#|{H]<rt}Wo6iUA%VN' );
define( 'WP_CACHE_KEY_SALT', 'cFtI#hSegD>n*AUioqt;KAM{BL-bHL`08f3w.z;*rBTSL*,~4aR!t31m p`#.1n-' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DEBUG_LOG', true );
define( 'CONCATENATE_SCRIPTS', false );
define( 'AUTOSAVE_INTERVAL', 600 );
define( 'WP_POST_REVISIONS', 5 );
define( 'EMPTY_TRASH_DAYS', 21 );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
