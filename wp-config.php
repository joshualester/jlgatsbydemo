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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'EWTXcDT7' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '{:b${u(=%[g>[w[[klS|HWwH=(Y^pq)QR+n4}G=k/j%Q-euxtOQ;f^uG]e6+Q>SF' );
define( 'SECURE_AUTH_KEY',   'dqYd?CQ[o4N{3aE~({nYRP_njmr9+yCE 5:hC|fUT}&s&?W<J%uF<yiXTaA7hn 1' );
define( 'LOGGED_IN_KEY',     'M*`vcr]}r`fDm}AG9i(+R0a>dQUnGK)]?&R C{*{Rq>w?`{)i#hrUtF#rk< _,&]' );
define( 'NONCE_KEY',         '|7RLe;HklIXR+HpPB%aTF&/e+7Vz{DO*vJud!p+;fd?VQSxZ(q4-Ho%;[!`a8n{r' );
define( 'AUTH_SALT',         '}(TWVDjxg(eGf+cly9JIZS2J+3s;2,P_~ v=3/bCbiO716o5Ly7Gj9B,5WK/7xy{' );
define( 'SECURE_AUTH_SALT',  'H``x-he|4f.+iXt{tcS4vWlA%RbAh4/U3,irG$^Y(,MH{VUY$QHq&Bpe/f{tE}V0' );
define( 'LOGGED_IN_SALT',    'kE]O{CN5i$M.yRWIRIzECH_xv}o?IYNJ-Ns%j|>x*#CT5s#1s~J4afebq<&y<0oS' );
define( 'NONCE_SALT',        '&Y4$lLjh3ix`VQpb]U-F$opfzC!L0K_W$s}7_0B>/G*0TOF~=sBx@9i_?wLYIIa]' );
define( 'WP_CACHE_KEY_SALT', '<KG 14/>>`niw<|Yzg:I}E{C{QY/JU^{n*l#X7,sNnZN1NTD|<EX:[LQ;~UZ_.vD' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
