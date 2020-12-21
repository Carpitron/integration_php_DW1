<?php
    include_once "includes/con_database.inc.php"; // les outils php pour le bon fonctionnement de ce site (ouverture de session, connexion à la BDD ...)
    $msg = "";
    // Code PHP
    
    if(isset($_SESSION['membre'])) {
    $pseudo = $_SESSION['membre']['pseudo'];
    $st_update = $conn->prepare("
        UPDATE membre
        SET statut = '1'
        WHERE pseudo = '$pseudo'
    ");
    
    $st_update->execute(); 
    session_destroy();
    }
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="CSS/deconnexion.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"></head>

<body>   

</head>

        <body>

            <section>
            <h2>Vous n'êtes pas connecté !</h2>
                <div class="divconnexion">
                
                
                    <h1>Connexion</h1>

                    <form method="post" action="connexion.php" class="formulaire_connexion">
                        
                        <label for="pseudo">Pseudo</label>
                        
                        <input type="text" name="pseudo" class="form_connexion" id="pseudo">

                        <label for="mdp">Mot de passe</label>
                        
                        <input type="password" name="mdp" class="form_connexion" id="mdp">
                        

                        <button type="submit" name="connexion" class="form_connexion_submit" id="connexion"> Se connecter </button>

                    </form>
                    <a href="inscription.php">Inscription</a>
                </div>
            </section>

        </body>

</html>

</body>

</html>
