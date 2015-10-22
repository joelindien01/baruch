<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Le script de création wp-config.php utilise ce fichier lors de l'installation.
 * Vous n'avez pas à utiliser l'interface web, vous pouvez directement
 * renommer ce fichier en "wp-config.php" et remplir les variables à la main.
 * 
 * Ce fichier contient les configurations suivantes :
 * 
 * * réglages MySQL ;
 * * clefs secrètes ;
 * * préfixe de tables de la base de données ;
 * * ABSPATH.
 * 
 * @link https://codex.wordpress.org/Editing_wp-config.php 
 * 
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'baruch');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'a&+o~kR+<Ms%[rGpyUV2[Vi$sn`|Zw8dft?R#0jwA[@fZ{?.1xRambGSStZ$0g?L');
define('SECURE_AUTH_KEY',  '+|N-|OgE,R+n,`5Zf`8s>2(>hsl!}`Gg{xk7tw&:tXfZ*9+KE6g1_t@-+awU[Fx!');
define('LOGGED_IN_KEY',    '4y=ABR6/}7|@Mi!(_GuN|/;NQi@wO/zRy11Gz17T%@2jF6@m[ZHWd@FJ=IR)kc(d');
define('NONCE_KEY',        '^OHqE[|B 0!-+k4:rhVFJ#}e=BP_N3>pa5K#}Pt|Gfg&vI^WHBdnP8]:A!3$BdBy');
define('AUTH_SALT',        'wSgaCB{Jt^RTd{]B%013m>U%I>O<HQv`4,lmBA&`OG#8i4}3$3gp@3Zl~3>T-^F=');
define('SECURE_AUTH_SALT', '?CARrjSk-+OD<M|+0SLFN|=]uP6ZIFL:%{Vh2j}@t5Jrp}lzrtO5!x6 $3g}z{p+');
define('LOGGED_IN_SALT',   'hK0UmF-p{yMO`46$7IRj?Sp<U-11U%4TuPP2nQZ(7lz.-.yA!IKf-Y):hwF6t,^o');
define('NONCE_SALT',       'vsQ&5ojSo{9B!L.JK*-Q`-7uu_ZFxQp06b#vI$ZSX8b&xD: ;9ztZ26N1:A)0Hxu');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode déboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 * 
 * Pour obtenir plus d'information sur les constantes 
 * qui peuvent être utilisée pour le déboguage, consultez le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');