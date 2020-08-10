<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'ingrid_lucas' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'x/^{FGkf@AIt6Zpv-WXsJ_F4UDaW}7GrTmRw_U`-_HW9]vhv1EMOYD~(7ttmU{3a' );
define( 'SECURE_AUTH_KEY',  'At8 DC/_2`3yOX]48o50/,W~0zXn/R*kop0p5a%O^o&|Q772sD9&%E4>d@o#-6/u' );
define( 'LOGGED_IN_KEY',    '1Y4#D|mthP,)~b`Cy3L#CSB9PdqKTBZE}2Frb8}`e@Ay!b(,7bKE|chHc!@MfoZx' );
define( 'NONCE_KEY',        'tWUwB1-J!K4G$km-ii?>;KDW0e+DHUiDrK|@COTr[53({byK#;kSh][6gf#t>SCp' );
define( 'AUTH_SALT',        'tIFB-KW_>|<&{ri`b@`v4|UbbD/qkYEU=jG$6BPv)H1^BjH{lC&/A8Jwh?V<qv#X' );
define( 'SECURE_AUTH_SALT', '7hM?VuLTS~V,Rh!VBw0&180L$F8Pw+L@+9-Jb4qCF~wN@%/A`bzo.&ZYA(+4sObr' );
define( 'LOGGED_IN_SALT',   'LQ#S;W~/pc!5gb]<9Q>q-CMS0YK%i]Ad5zp63+IofbJ510ET%Vq_OsWC~8wW?T3c' );
define( 'NONCE_SALT',       'dA64pAGo<<Q.-hs])SM_l?=F6}W4NZu:LPZC[2e(`7T5(%urzud_E.RO(F8|qRbU' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'inluc_';

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
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
