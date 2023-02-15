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
define( 'DB_NAME', 'simportfolio' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'OoGTLft[|Y?GzB&j$gpWs T:`XB`Ie%tn6XHz9,<,^91uf=Q?VaF]iGKin1*aGJT' );
define( 'SECURE_AUTH_KEY',  '+!xxwQEEd!]q>DIU`%4P0!),5e6c;Ya2v?53CC;pJAoe)Tn5k.+=Tvs:9`#5*OVj' );
define( 'LOGGED_IN_KEY',    '2eRn}P$QUhj&$Vb_~14~EyacFXX#f1i{<^#z4SLaKASBkX<0{K]@HzJ:|cOBh/MF' );
define( 'NONCE_KEY',        '+{`8su*bA+?U7{|%_.$<H/~Daa)zI^26Q/dS]vOf|k!:W`ksU!B+[lX-uub}zf`q' );
define( 'AUTH_SALT',        '^H)dSfq483@V8@O1rM-XA@vi9 LjSWEe!di@uR*!>yU6ERBdkzW79wZ(Ntr-SERy' );
define( 'SECURE_AUTH_SALT', 'aBQH?RvB+@4u:O7VAWP(`GSxoV_3)VQ?/,.(#RqW8T@o{X>KreSe?rU^mrM+V dm' );
define( 'LOGGED_IN_SALT',   'A{1H;;jCFfE^xT!Hvta()^CXo4t(dz$!M71#F<Eq0Rw+~Bw ?J_[<}Xl]utTx@wj' );
define( 'NONCE_SALT',       'o_6eR~@<)Kh-FtY3 }&lcHvRo?37b7f}MGC4u!2mE9YkT#`iO%Xe(kb+5^{Vu=ul' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
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
