<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'amaurybdd');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'L^Z!skW$k-_5-oMjv@ZD:rp^nk6q>|T1Bt-t<hKyL-c^^L!+iCtrFk>gtSh5(0*A');
define('SECURE_AUTH_KEY',  'hFr(H3GLZ3f3;jZt.0e-5<s4&Ew-sJi(3~r@bj.|*sfZ_77/_)?dDvOXs^XFl@^.');
define('LOGGED_IN_KEY',    '8LXMT$gU1t5h%f9GW]=IKp|,w*Y;qKJUv/]JO$.Rj/kGY[>s+]X*VML93N(KX!44');
define('NONCE_KEY',        'vYvbujL`Rj^1r-kd@A93QHgIVCHb }i ?+VhW|@TY|,LuLa]-K#P3J&{]({z-NEl');
define('AUTH_SALT',        'o3*U8Xir26w-t7qH;YU1Q[L>j=F]-!4L+8sORj@S 9<F !02awtC+<NXzTq=Y)8 ');
define('SECURE_AUTH_SALT', 'nPgB+4|N?1>/H {0&DDS$h1Nv?./zR>>q3.-<XUdMx!j7-1SK}S(-dR^3~rn3Mf]');
define('LOGGED_IN_SALT',   'vdC+9w~7{uByunub+}R;/uaM6_[E5R_3w`LQ_avhhhmIUu`48-:C-Iw?;49Slji|');
define('NONCE_SALT',       'O)c6Qu<@k[|k(Ti#ZMd;Iy cDt)U[!|:ElBY:WAV[`.:L<IiyctL7$+TrDs!w=Tp');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
