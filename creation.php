<?php
    include_once "includes/con_database.inc.php";

    // restriction d'accès : si l'utilisateur n'est pas connecté, on l'empéche de venir sur cette page avec une redirection.
if(empty($_SESSION['membre'])) {
    // si c'est vide ou ça n'existe pas, alors l'utilisateur n'est pas connecté, on le redirige
    header('location:connexion.php');
    
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/creation.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Création d'un sondage</title>
</head>
<body>

    <header>
        <nav>
            <div class="menu">
               
                <a href="index.php">Accueil</a>
                <a href="amis.php">Amis</a>
                <a href="creation.php">Créer un sondage</a>
                <a href="modification.php">Modifier données</a>
                <a href="deconnexion.php">Deconnexion</a>
                <a href="inscription.php">Inscription</a>
               
            </div>
        </nav>
    </header>

<h1>Creez votre propre sondage !</h1>


<div class="box">
  <div class="form">
  
    <form method="POST" action="includes/config.inc.php" class="formulaire">
        
      <input type="text" name="question" id="question" placeholder="Votre question : "/>
      <input type="text" name="choixUn" id="choiUn" placeholder="Choix 1"/>
      <input type="text" name="choixDeux" id="choixDeux" placeholder="Choix 2"/>
      <input type="time" name="timeLeft" id="timeLeft" placeholder="Temps limite (en minute)" min="1" max="">
     
      <input type="submit" name="enregistrement" class="form_send_sond"></input>
      
    </form>
  </div>
</div>
</body>
</html>