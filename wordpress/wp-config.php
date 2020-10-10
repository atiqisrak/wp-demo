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
define( 'DB_NAME', 'mysite' );

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
define( 'AUTH_KEY',         'QvXWv*s44mgjdiW94TqSFha5Ul}#QA781-{3V_i8*::I3p+q^IL2XB%R3R|6:|3s' );
define( 'SECURE_AUTH_KEY',  '(GN5YZ;^uH_Hg#?o|xJe(:.kQ$Z .hi4k`8Aq+WU;X{+VS~W}Q&S&CGtmLrH{ZRm' );
define( 'LOGGED_IN_KEY',    '>[nWC_9(:IK#D]AyX<1%C>&_?c6~_!Cxm^mFV;XNsQ5D_G<*I/P5)KfHIBw4WY[*' );
define( 'NONCE_KEY',        '>u!wqLv$PjPM.Lo$?3;U  ]}b6SU*gHp,D2^ gg)Td=P$uqehTsQ .h_Z Vfe?kV' );
define( 'AUTH_SALT',        '9f@64p6Ar:NFS~T}/Y6QP%@C*`vM[-HV:UA6!Y{2!EV<nz;Nwa!bx;AF mVv$Pu*' );
define( 'SECURE_AUTH_SALT', 'h:9:Eoh+X&-bR/Wm)?8eDQ2vr^z?@5Y6CJ.Z}:h~k_5wKzS}O_?:0uL,IPzYN)WM' );
define( 'LOGGED_IN_SALT',   'Jsbv}3_IRrAY(G4V,D*OM=Sd`CteQCPa)J?_zQ5WpIDhy{o;3./y7ymgN<DCkk1q' );
define( 'NONCE_SALT',       '<zsW35N-l/u/._1M+Re(tR8jd6?(YJh|vGI#[Ca@.#e(IA0>:{l2`ai2}ArtRYLZ' );

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
