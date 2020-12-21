<?php

$host = "localhost:3306";
$dbname = "sitesondages";
$dbuser = "root";
$dbpass = "";

$conn = new PDO("mysql:host=$host;dbname=$dbname", $dbuser, $dbpass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// ouverture d'une $_SESSION  pour la connexion utilisateur
session_start();