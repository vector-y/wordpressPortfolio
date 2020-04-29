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

ini_set('max_execution_time', '300'); //300 seconds = 5 minutes
ini_set('max_execution_time', '0'); // for infinite time of execution

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressportfolio_db' );

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
define( 'AUTH_KEY',         '0Z9LQJMp%f0W.rw}7y=L>hm-Ms-Yn6ChvWX{Oc.]ADz}B`db;^qUFTQ$ 7s:Y$]I' );
define( 'SECURE_AUTH_KEY',  '.b$G8`(p76ZZj3NJn1h3(X(3=T~a<:d!9?Ilq&T|_ze=HL&@!PS@!_L},?.+gT)0' );
define( 'LOGGED_IN_KEY',    '^(Ciw`d<t|-i)f4|XE4gW,|^G?t_UXZ}Wvy[9Bg!8gVr/aSMrsJ^0z{|N``:FzYv' );
define( 'NONCE_KEY',        '9<Hed0A@?,RyG?5BL!$n5::bM~T&#h5!`hbS:DWQ@jl_]Zll1bnb?ND^5mJLpf+y' );
define( 'AUTH_SALT',        'q&O~*>F,eeXyFUPZj[DES^J+B{n}4@K[U[Q]gJVub;_}amwh`pY)z]w[`]%6C+-;' );
define( 'SECURE_AUTH_SALT', '{GV.KtZtgH)Fn546p9UOo4wrEKXFGtQEo}U*[fB,^:LdU4[#e2%K_Na{CDG>6]Jh' );
define( 'LOGGED_IN_SALT',   'WJUkEzK -5fq&uk;o2BeW93^L^v;|f%i*DL*,4hWqV6dMnMhMDzvy?/n,]a+* YD' );
define( 'NONCE_SALT',       '>= T0/gD+z/c}Y~GTnlekuV=hfv8tHp=&w%=F.C-fd1rT|?-;>2m]I+Xqczo&:J&' );

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
