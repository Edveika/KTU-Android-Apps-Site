<?php
// Begin AIOWPSEC Firewall
if (file_exists('/home/edvbur/websites/site-1/public_html/grupinis/aios-bootstrap.php')) {
	include_once('/home/edvbur/websites/site-1/public_html/grupinis/aios-bootstrap.php');
}
// End AIOWPSEC Firewall
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
define( 'DB_NAME', 'edvbur' );

/** Database username */
define( 'DB_USER', 'edvbur' );

/** Database password */
define( 'DB_PASSWORD', 'pahchooJ9Ayai8Ar' );

/** Database hostname */
define( 'DB_HOST', '10.2.3.22' );

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
define( 'AUTH_KEY',         'zOV0/L%P0JuOyX#]SwADu[/^b<gchK9Mm=2N(N_N;-eh8^Q-[Hp#kSo8qZRs2CuB' );
define( 'SECURE_AUTH_KEY',  'U7O2#blo-*oX(Af,V)E4`LeqkBdH5*nxe=MDSmoZzK$Xx:MPkH5agr+LgKChwQHh' );
define( 'LOGGED_IN_KEY',    'dWrjm!FkeDG$NA`d*R^E!D$)HLx:OVXVhGgz5aL~cv{f@4@Oc= P-D^ff7k4|5H=' );
define( 'NONCE_KEY',        '[a.zDzdJ_OAz, Uo+(Admy-Td)~zDg@PW!eR]NHhbjYRhLEOZd[Tr=#T1YwMBrR/' );
define( 'AUTH_SALT',        'A( 6<eD^>-$]D]n%*nhxrPBp B00RjTQF})-Jn+fdbuQaLN)g(OQ^hnE-Lp$:*Rk' );
define( 'SECURE_AUTH_SALT', 'Xh/<,a)aLoJXYp@Q+< vj*gr-snx<F<s+;))u+@H2^} A|eJDQF.J/S&P%pf|0}~' );
define( 'LOGGED_IN_SALT',   'MB@6e6?ahT{Gvs|?j[{m[9`oEl.6st#_J( gm_Vg|6Zm )YNG6vAWxmt,wi:&9k>' );
define( 'NONCE_SALT',       '~mcH.m|V;zuDO(pGARzMO0M8i4Pdr@,i~b(H+27N{$e{jdI{>AZ$;d!p/~Nvg3zI' );

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
$table_prefix = 'grupinis_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';