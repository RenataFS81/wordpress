<?php
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
define('DB_NAME', 'mina.dev'); // O nome do seu banco de dados
define('DB_USER', 'root'); // Usuário padrão do XAMPP
define('DB_PASSWORD', ''); // Senha padrão (vazia no XAMPP)
define('DB_HOST', 'localhost'); // Host padrão
 
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
define( 'AUTH_KEY',         ')x]?!=;woNj}&6Wg5,V^#hUUSUk8PI9s]bz~c#/Rv^u|6i|AMN+o:KubjQj)$x8N' );
define( 'SECURE_AUTH_KEY',  'RrMNK?r.T5?&(8f]lbNUbHi<iqQE(>VTTe_:{eK=sF<=mqNnGhGT1oCG/;@^!y=>' );
define( 'LOGGED_IN_KEY',    'Pa5c@XJ1/JGyQ52T^N(TJ4Gq!PB(zwf`fLd?$GaB>OniBv)*DRBcH1dT]{$2:;dA' );
define( 'NONCE_KEY',        'v3SsXYKi$qvXnHavT/a2|x;1+{1i*D:+8g9R_0yTr[^@ {`WNv!y3r[C@)^<p|Gz' );
define( 'AUTH_SALT',        'zk:I/b!y5#vZHu&^TW;u8Bc(.[xL~iSgIcoD>1zc Vd6lfbwGI:u9~E7v>;YFjXG' );
define( 'SECURE_AUTH_SALT', ':CjHI6&jUf_-nM0^|*9,Azj]~Fi]G-Zn_>PrjBGDT`_@)S2c1)*TRW(eT@Z+u*v^' );
define( 'LOGGED_IN_SALT',   'lh?RkcGTjYV/=1?ah~`;:d`u,._PePF7gv`+=6iD;I,@Q*6_dE(Mt3F)b|Cv_-07' );
define( 'NONCE_SALT',       '^ I%1J=+s_USj<j(~?;jSfxsEph BHYB7]P+k2xKX_LoA,4|wD]@X72Jt}F2,1!&' );

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
