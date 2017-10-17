<?php 


$hote='localhost';// chemin vers le serveur

$bdd='projet_annonceo';// le nom de la base de données

$utilisateur='root';// le nom de l'utilisateur pour se donnecter

$passe='';// le mot de passe de l'utilisateur local pc

$pdo = new pdo ('mysql:host=localhost;dbname='.$hote.';dbname='.$bdd, $utilisateur, $passe);// $pdo est le nom de la variable de la connexion qui sert partout ou l'on doit se servir de cette connexion
// constante pour les chemain
$pdo ->exec("SET NAMES utf8");


define('RACINE_SITE','/projet_annonceo/');

// declaration variable pour afficher le message d'erreur
$msg='';

require('fonction.inc.php');// c est pour l'appeler a la page fonction

 ?>