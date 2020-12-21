<?php
    include_once "includes/con_database.inc.php";

    // restriction d'accès : si l'utilisateur n'est pas connecté, on l'empéche de venir sur cette page avec une redirection.
if(empty($_SESSION['membre'])) {
    // si c'est vide ou ça n'existe pas, alors l'utilisateur n'est pas connecté, on le redirige
    header('location:connexion.php');
}

if(isset($_POST['pseudo'])) {

    $new_pseudo = $_POST['pseudo'];
    $membre_id = $_SESSION['membre']['id_user'];

    $membre_update = $conn->prepare("
        UPDATE membre
        SET pseudo = '$new_pseudo'
        WHERE id_user = '$membre_id'
    ");
    
    $membre_update->execute();
    $_SESSION['membre']['pseudo'] = $new_pseudo;
    // header('location:modification.php');
}

if(isset($_POST['mdp'])) {

    $new_mdp = $_POST['mdp'];
    $membre_id = $_SESSION['membre']['id_user'];

    $membre_update = $conn->prepare("
        UPDATE membre
        SET mdp = '$new_mdp'
        WHERE id_user = '$membre_id'
    ");
    
    $membre_update->execute();
    $_SESSION['membre']['mdp'] = $new_mdp;
    // header('location:modification.php');
}


?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/modification.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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

    <section>
        <div class="divconnexion">
        <h2> Bienvenue :
        
        <?php 
        if(isset($_SESSION['membre']['pseudo'])) {
            echo $_SESSION['membre']['pseudo']; //  Affiche nom membre connecter
        }
        ?>
        </h2>
                    
        </div>
    </section>

    <div class="EbgnM">
        <section class="EformM">
 
                <h3>Modifiez vos infos personnelles</h3>

                <form id="formPseudo" method="post" action="">
                <div>
						<?php
						if(isset($err_pseudo)){
							echo $err_pseudo;
						}
										
						if(!isset($pseudo)){
							$pseudo = $_SESSION['membre']['pseudo'];
						}
					?>
					<label>Pseudo :</label>
					<br>
					<input type="text" placeholder="New Pseudonyme" name="pseudo" class="pseudo">
                    <input type="submit" value="Modifier" class="mdpM" name="Modification1">
                </div>
                <form>

                <form id="formMdp" method="post" action="">
                <div>
					<?php
						if(isset($err_mdp)){
							echo $err_mdp;
						}
								
						if(!isset($mdp)){
							$mdp = $_SESSION['membre']['mdp'];
						}
					?>
					<label>Mdp :</label>
					<br>
					<input type="password" placeholder="New Password" name="mdp" class="pseudo">
                    <input type="submit" value="Modifier" class="mdpM" name="Modification2">
				</div>
                <form>

        </section>

    </div>
</body>

</html>