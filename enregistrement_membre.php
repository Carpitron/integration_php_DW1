<?php 
include_once "includes/con_database.inc.php";
// CE FICHIER NE DOIT PAS ETRE APPELE PLUS D'UNE FOIS

// on simule une inscription d'un administrateur provenant d'un formulaire
$pseudo = 'admin';
$mdp = 'soleil';
$statut = 2; // le statut à 2 permet de savoir que ce membre est admin

var_dump($mdp);
// le mot de passe doit être crypté
$mdp = password_hash($mdp, PASSWORD_DEFAULT);
var_dump($mdp);

// pour enregistrer on se sert d'une methode de PDO : query. (Pour la  sécurité, il faut privilégier les methodes prepare et execute)
$pdo->query("INSERT INTO membre (pseudo, mdp, statut) VALUES ('$pseudo', '$mdp', $statut)");



// on simule une inscription d'un membre classique provenant d'un formulaire
$pseudo = 'test';
$mdp = 'test';
$statut = 1; // statut 1 = membre clasique (pas admin)

$mdp = password_hash($mdp, PASSWORD_DEFAULT);
$pdo->query("INSERT INTO membre (pseudo, mdp, statut) VALUES ('$pseudo', '$mdp', $statut)");