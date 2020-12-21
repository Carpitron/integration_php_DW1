<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="CSS/inscription.css">
</head>

<body>

    <header>
        <nav>
            <div class="menu">
               
                <a href="index.php">Accueil</a>
                <a href="amis.php">Amis</a>
                <a href="creation.php">Créer un sondage</a>
                <a href="modification.php">Modifier données</a>
                <a href="deconnexion.php">Connexion</a>
                <a href="inscription.php">Inscription</a>
               
            </div>
        </nav>
    </header>



    <?php 
    include_once "includes/con_database.inc.php"; // les outils php pour le bon fonctionnement de ce site (ouverture de session, connexion à la BDD ...)

   ?>
        <section>
        <form method="POST" action="includes/register.inc.php" class="formulaire_connexion">
                <!-- <?php 
                        echo 'POST : <br>';
                        echo '<pre>'; print_r($_POST); echo '</pre>';
                        echo 'SESSION : <br>';
                        echo '<pre>'; print_r($_SESSION); echo '</pre>';
                        echo '<hr>';
                    ?>-->
                
                <br>
                <hr>
                <label for="mail">Adresse Mail</label><br>
                <input type="mail" name="mail" class="form_connexion" id="mail" required><br><br>

                <label for="pseudo">Pseudo</label><br>
                <input type="text" name="pseudo" class="form_connexion" id="pseudo" required><br><br>

                <label for="mdp">Mot de passe</label><br>
                <input type="text" name="mdp" class="form_connexion" id="mdp" required><br><br>

                <br>

                <button type="submit" name="Valider" class="form_connexion_submit" id="connexion"> Se connecter </button>

            </form>
        </section>
    </body>

</html>