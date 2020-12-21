    <?php 
include_once "includes/con_database.inc.php"; // les outils php pour le bon fonctionnement de ce site (ouverture de session, connexion à la BDD ...)
// Code PHP
// restriction d'accès, si l'utilisateur n'est pas admin on le redirige sur accueil
if(empty($_SESSION['membre'])) {
    // si c'est vide ou ça n'existe pas, alors l'utilisateur n'est pas connecté, on le redirige
    header('location:../connexion.php');
} else if(isset($_SESSION['membre']['statut']) && $_SESSION['membre']['statut'] != 2) {
    header('location:../page3.php');
}


$liste_membre = $pdo->query("SELECT * FROM membre");


    
       include_once '../inc/header.inc.php';

?>
    <title>Membres</title>



    <?php
    include_once '../inc/load.inc.php';
    
            ?>


    <div class="header2">
        <nav>
            <ul class="navMenu">
                <li class="preso"><a href="<?php echo URL;?>index.php">Presonnage</a></li>
                <li><a href="<?php echo URL;?>page2.php">Compagnons</a></li>
                <li><a href="<?php echo URL;?>page3.php">Blog</a></li>
                <li><a href="<?php echo URL;?>pageGalerie.php">Galerie d'image</a></li>
                <li><a href="<?php echo URL;?>page4.php">Profil</a></li>
                <li><a href="<?php echo URL;?><?php echo URL;?>page5.php">Contact</a></li>
                <li><a href="<?php echo URL;?>page6.php">Mentions légales</a></li>
            </ul>

            <div class="croix">
                <a href="#" class="fermeBouton">X</a>
            </div>


        </nav>


        <div class="burgerIcone">

            <div class="burgerLine"></div>
            <div class="burgerLine"></div>
            <div class="burgerLine"></div>



        </div>


    </div>


    <div id="banniere">
        <img src="../img/logo2.png" id="logo" alt="Logo Vegeta">
        <h1>Liste des membres</h1>

    </div>

    <?php
    include_once '../inc/nav_profil.inc.php';
    ?>

    <section>
        <div class="conteneur">

<br>
            <h2>Membres</h2>
            <div class="membres">
                <p><b>Nombre de membres :</b> <?php echo $liste_membre->rowCount(); ?> </p>
                <br>
                <br>
                <?php
            
		while($liste = $liste_membre->fetch(PDO::FETCH_ASSOC)) {
                    echo '<div class="leslistes" style="text-align: justify; justify-content:space-between;">';?>
                <tr>
                    <td class="listes listeid"><?php echo htmlspecialchars($liste['id_membre']); ?></td>
                    <td class="listes listenom"><?php echo htmlspecialchars($liste['nom']); ?></td>
                    <td class="listes listeprenom"><?php echo htmlspecialchars($liste['prenom']); ?></td>
                    <td class="listes listepseudo"><?php echo htmlspecialchars($liste['pseudo']); ?></td>
                    <td class="listes listeemail"><?php echo htmlspecialchars($liste['email']); ?></td>
                    <br>
                    <br>
                </tr>
                <?php echo '</div>'; }  ?>

            </div>
        </div>


    </section>


    <?php
        include_once'../inc/footer_profil.inc.php'
        ?>
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/TweenMax.min.js"></script>
    <script src="../js/monscript2.js"></script>
    </body>

    </html>
