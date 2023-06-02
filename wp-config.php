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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Sy}Z]ndN8]m<im.7?#ZC<S9W}/$p&-#vj-XaQt/Y#X!p~jL`zO}s].{C(6=[0`j?' );
define( 'SECURE_AUTH_KEY',  'ztR-:S:/h(s4$gK^;&A#H|I]+u*iDJWVy]Kr wwmgrQuj(;f4l#%RVi{k&G8woTv' );
define( 'LOGGED_IN_KEY',    'ZY6jXIy`b}u,P 2Rl!.:a#Of_KTv4~kAlgbCYHDE&f@=IRdRoam?}g<$BdD/+hDO' );
define( 'NONCE_KEY',        'zU7<U_;7b@^AITeHv*Y`t0 f;e!#?/%hJArZNN1Ve`d[~:=&O?zGjOGCz:sOmk^3' );
define( 'AUTH_SALT',        'N=uoEy$r9Y{bz[)FwnGceI[!Xw/ZVeRFxAK7-2Ambf^(IWGs#aBcA[p%xtij`}OZ' );
define( 'SECURE_AUTH_SALT', 'WE+a*[ZO`x}*qQ-3zMY@1R$51)s.y^J[$S4uzP{LUNEC>*ZS5QxK.XM(]1^ 4rrL' );
define( 'LOGGED_IN_SALT',   'Z+GYbRj}XTTPb6dg?0LSLi9TFPr*(KmHu<}J[3 y24a(m|8Pu>G$^-FGirMAjaOI' );
define( 'NONCE_SALT',       '?((l$7(>]qW,uNQHs+L(.%t:7=RY4k,{,?9x:yTqiqp)f43GH,e2[Pa?(6|uYF:1' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
