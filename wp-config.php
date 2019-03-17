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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nct_tmdt' );

/** MySQL database username */
define( 'DB_USER', 'nct_tmdt' );

/** MySQL database password */
define( 'DB_PASSWORD', 'nct' );

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
define( 'AUTH_KEY',         ':+ZlFArRHc+K|zQx<<WL0s,6fl7g??b}E}*vIZcJ`o6.qN#&#*hQhZs+X;gE~GBe' );
define( 'SECURE_AUTH_KEY',  '{KoaE)QgaO{uY4h2VOzt?#ToW$RF]uhIi-h-w9Ko8j[unmcUK}w%Tm<s<??%D-DG' );
define( 'LOGGED_IN_KEY',    't* _51Q ,Yg_h=PCAn)RdD^J*VzYi@%gBj/<;RuT_QnY:$R?;97]Bge*?+=tc>!j' );
define( 'NONCE_KEY',        'm2}/_>;BQl1{iX(w<dfCw47w[&zl(^sQ[ascsxF}a!H]O>CQN&2-2k;nfX7_eO(n' );
define( 'AUTH_SALT',        ')0b!MDV+/`+2M(@]L4%roA)fUMyN)Mk &C,_.c%zk ~/;>n#Y/u~8A&c59]#_1T_' );
define( 'SECURE_AUTH_SALT', 'vZ,j@k?X/A>g_w&Op^HAhAAX~cg;WX?6!$JGf$mo)])F;pDUr7~.cm>TzP*}!U(F' );
define( 'LOGGED_IN_SALT',   '{3P1<qmtL2K}yCu~jPF$IsY*[O7&[OrhD3W8Dtm0z)A9dgc6Kj=Hj%5-<uiko+w:' );
define( 'NONCE_SALT',       'Ll.O7(?SUwnL&xVrdii`>v*Pk=e7Z{.$#<4I@x</KQ5P.7nE:pcwis1@59Z!m~+2' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nct_tmdt';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
