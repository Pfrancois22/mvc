<?php

//je vais chercher mon fichier config.php qui contient mes constantes des liens
include_once '_config/config.php';
//je vais chercher mon fichier db.php qui me sert pour la connexion à ma base de données
include_once '_config/db.php';
// test si bien connecté à la base de données renvoi l'objet PDO
// var_dump($db);

//DEFINITION DE LA PAGE COURANTE
// premier vérification à faire, tester si la variable page page existe et que cette variable n'est pas vide
// si c'est le cas --> alors $page vaudra "la page".
//sinon on va sur la page accueil
if(isset($_GET['page']) && !empty($_GET['page'])) {
    // j'enléve les espaces et les majuscules pour être sur d'avoir les bon nom de pages
    $page =  trim(strtolower($_GET['page']));

} else {
    $page = 'home';
}

// ensuite on liste totes les pages possible, on va allez voir dans le dossier controllers et on utilise la fonction "scandir()" qui va allez regarder dans un répertoire toous les fichiers qui s'y trouve
//ttableau qui va contenir toutes les pages
$allPages = scandir('controllers');
//comment se passe ce qu'il y a dan sle tableau
// F:\Laragon\www\mvc\index.php:18:
// array (size=4)
//   0 => string '.' (length=1) --> le dossier courant soit ici controllers
//   1 => string '..' (length=2) --> le dossier enfant le dossier d'avant soit le dossier du projet ici mvc
//   2 => string 'descriptif.txt' (length=14) soit ici mon fichier texte
//   3 => string 'home_controller.php' (length=19) soit ici mon fichier de controller

//faire test "si url = 127.0.0.1/mvc/?page=toto --> erreur 404
// var_dump($allPages);

//on test si dans le tableau $allPages il y a notre page $page soit aller voir si il y a toto.php
if(in_array($page .'_controller.php', $allPages)) {
    //ici je peu donc inclure ma page
    //j'ai été voir si dans mon fichier "controllers" il y a ma page si oui j'ecris l'URL nécessaire soit :
    //le nom du doccier source "controllers" suivi d'un "/" suivi de nom de ma page "$page" suivi de l'extension ".php"
    //idem pour les autres dosiers, on va aller voir dedans et si se sont bien les pages demandé, pour cel on met "_models" dérriere le nom de la page si necesaire idem pour les autres pages
    include_once 'models/' . $page . '_model.php';
    include_once 'controllers/' . $page . '_controller.php';
    include_once 'views/' . $page . '_view.php';
}else {
    //retour d'erreur de page absente
    echo 'Erreur 404';
}


?>


