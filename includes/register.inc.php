<?php

include_once "con_database.inc.php";

$pseudo = $_POST['pseudo'];
$mdp = $_POST['mdp'];
//$mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
$mail = $_POST['mail'];

$conn->query("INSERT INTO membre(pseudo, mdp, mail, statut) VALUES('$pseudo', '$mdp', '$mail', '1');");

header("Location: ../deconnexion.php");
