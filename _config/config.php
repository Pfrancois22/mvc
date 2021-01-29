<?php
//session
// pour activer une session ondoit obligatoirement faire "session_start()" et toujour en prmeier sur la page php
session_start();
//on dit que notre session n'est active que le temps ou la page est ouverte
//TODO me génére une erreur
// ini_set('session.cookie_lifetime', false);

//!\\//TODO a enlever lors du deploiement, ne sert qu'à voir les erreur faite en php
//error_reporting défini quel type d'erreur que l'on veux prendre en compte et E_ALL constante qui prends tout les type d'erreur
//par defaut PHP
error_reporting(E_ALL);
//je demande que les errurs soit affichées 'display_errors' mit a true
ini_set('display_errors', true);
//======================================================================================================================================
//PAS COMPRIS LA RESOLUTION DE CHEMIN video 7 chapitre 2
//======================================================================================================================================
//Paths
//j'arrive pas à comprendre cette ligne, il explique que l'on enléve le "index.php" ???? pour avoir le chemin depuis le disque dur
//possible que lorsque l'on appelle u fichier dans le répertoire view, il supprime le index.php pour le remplacer par le nom du fichier demandé
//PAH_REQUIRE --> pour le traitement des liens PHP
//TODO trouver explication resolution de chemin, je comprend pas
define("PATH_REQUIRE", substr($_SERVER['SCRIPT_FILENAME'], 0, -9));
//PATH --> pour le traitement des liens HTML (?)
define("PATH", substr($_SERVER['PHP_SELF'], 0, -9));
//=======================================================================================================================================
//=======================================================================================================================================


//Website informations
define("WEBSIE_TITLE",          "Mon site");
define("WEBSIE_NAME",           "Mon site");
define("WEBSIE_URL",            "https://monsite.com");
define("WEBSIE_DESCRIPTION",    "T");
define("WEBSIE_KEYWORDS",       "");
define("WEBSIE_LANGUAGE",       "");
define("WEBSIE_AUTHOR",         "");
define("WEBSIE_AUTHOR_MAIL",    "");


// Facebook Open Graph Tags
define("WEBSITE_FACEBOOK_NAME",         "");
define("WEBSITE_FACEBOOK_DESCRIPTION",  "");
define("WEBSITE_FACEBOOK_URL",          "");
define("WEBSITE_FACEBOOK_IMAGE",        "");


// DATABASE informations
define("DATABASE_HOST",     "localhost");
define("DATABASE_NAME",     "test");
define("DATABASE_USER",     "root");
define("DATABASE_PASSWORD", "");