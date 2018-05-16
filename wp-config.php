<?php
/* Multisite */
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'jesuisnee21091');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'ai.0%*^a ,+Nrcot3@0<L>M3gGn]yj!$h]ss8W]HJ 7,70B3=]*FL.a[1S_%u=#Y');
define('SECURE_AUTH_KEY',  'x~TVD4y4iE{qc6=y_HD&R#G;p6O:!Js5}EPBQ:B>qqq J:aA5%BG_[6ip`3#G_y6');
define('LOGGED_IN_KEY',    'sj7(<!Ev;/>_H-@qAxf; Fr][u5FJVb1ql<s/jFVb[g>~j!0F*E,<m-;`8fP X+c');
define('NONCE_KEY',        'uXeISQ7hGA)]J{!z$n_Fj(zjY_fJ(n_dRO2=qd.V4}mB&k:WAn;OQBPWk#TL2<P?');
define('AUTH_SALT',        '*?PAgXbE/Eu:*{:Yw7~Vkp}l0p7)$qD+B?R(_&!p_vvhMU)/)tPD5N(D (be.x7s');
define('SECURE_AUTH_SALT', 'q4214%Ja104lJ.=g`R L^8^Vpp_jZ$%2O&*eUkr6u]QQSPO><n86[F^dJWgAM1ZZ');
define('LOGGED_IN_SALT',   'PxzGDC;uQF2nVOU~N:bMW;GD8BJ_~$_{~D-3sw6!@V(xDfHc#9>E]/!t5UQe4,W@');
define('NONCE_SALT',       '6dMBAVE6A(FVQu5XE1%d16N#_DXS;)nKxOh#~^Hv5Qvi;P&+bo{_K#n,<$<2WF0j');
/**#@-*/
define('FS_METHOD','direct'); // Pour configurer les widget.
/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');