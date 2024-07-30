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
define( 'AUTH_KEY',         '284E-+G=7]g<#_-7`mbqc~pN%uEG$ z8KfXT}8>KrJ;|i3~A^b5@vQlgI|D#J3A4' );
define( 'SECURE_AUTH_KEY',  'l_?=>)U]7|=S23,YQwsU/+s)[hu=1dWFp[i>2gA~{%O>/jCuM7t1_T=+kAgfqB<I' );
define( 'LOGGED_IN_KEY',    'cpZo4<v)UdhB3y~Xjq hK8d~`GD5!p3*s]xCPul+Z*?tZU$B3tW5p|5^#:gE?mc_' );
define( 'NONCE_KEY',        '$q3X ToPs&vsoeMW]qbx]ewSOgN!f%g!L,}W(,!Xkrg-W*GHX*T;B.MF%nvrQ2c{' );
define( 'AUTH_SALT',        'qlOgHRX.,Zv!?j%3):4l`YuCDkNKT{.!GNrUC#HF/7<_t_scBlTW^[0*GCI;::3l' );
define( 'SECURE_AUTH_SALT', 'LcY;Wi)/-;kXO2P#I>GD.Sbn(Y]w!pE;=jXd`V*Km9RM(@[rpRH*exYoi/D*Q1&x' );
define( 'LOGGED_IN_SALT',   'TU(=$d~iGJ53e<5!)oj^9%T1+yAZPuLG|0M#$SCU)ip4c7qd1r?Z!&NpmrVG`S%h' );
define( 'NONCE_SALT',       'Tr.0v1IkEr1oE.##8X;:yvKCcxB(eAh9a&e#bwC+iiv1e3DRuSzWD[k#jEkv 7{q' );

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
