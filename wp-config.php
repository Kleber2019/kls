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
define( 'DB_NAME', 'u435110360_quzep' );

/** MySQL database username */
define( 'DB_USER', 'u435110360_syvep' );

/** MySQL database password */
define( 'DB_PASSWORD', 'GepeMehesu' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define('AUTH_KEY',         '8uuYicNll[m k>Gwhyix>b!/*rz<~Wzn,|;ZyOup]_;7y)s~|R+1IEfrVB9tY%:e');
define('SECURE_AUTH_KEY',  'WJYAm(ns}=fe-)#MLu_iDQDiX[@z*VD}9|o5;+4Z95=(Co#nss=_]/ZX!N{)V|V!');
define('LOGGED_IN_KEY',    '5:Fa`NC_mkbXu_JZRE#jo~T_<)d7E `E0N>0v7(Tz2_tw4ls0[6=IxU -j|mu`02');
define('NONCE_KEY',        '0qX-%R+RJD-, zTl{$2d kQs!b$x6+B_n^z!%ApsA-u#O}xrp-ktQpaVVH!IaL*4');
define('AUTH_SALT',        'x(*uu~+d 4l+}&!9!1!av2Cqtc]:-!lM!_EX*n+YE|-cl~eivT+o{/4dK)*oK@yz');
define('SECURE_AUTH_SALT', 'x)I+c[P%A=MznDRLVZq0fV(*y01lqjk|=6%>CS2`F)I;+I~MBxNF3+-+M,y?2/Y3');
define('LOGGED_IN_SALT',   '0gK%o+Enj52zj2)amv&Vr6pR7c-9 /(2`D-n&3d/Nk[?469?]#w+j|?mB)6o*`p%');
define('NONCE_SALT',       'H%f2K&*~]OWbSVWbOrkJNN|hp]+6Gq>n[2 ^-S0_VDl23!lY.|HT@-)R|0G{Gbx~');


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
