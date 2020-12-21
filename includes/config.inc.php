<?php

include_once "con_database.inc.php";

$question = $_POST['question'];
$choixUn = $_POST['choixUn'];
$choixDeux = $_POST['choixDeux'];
$timeLeft = $_POST['timeLeft'];

// Convertion en date de debut et date de fin pour enregistrement database
$dateGiven = new DateTime($timeLeft);
$dateDebut =  date("Y-m-d") . " " . date("h:i:s");
$dateFin = $dateGiven->format('Y-m-d H:i:s');

$conn->query("INSERT INTO creation(question, choixUn, choixDeux, dateDebut, dateFin) VALUES('$question', '$choixUn', '$choixDeux','$dateDebut', '$dateFin');");

$userConId = $_SESSION['membre']['id_user'];
$mailAmis = $conn->query("SELECT mail FROM membre WHERE id_user IN (SELECT user_id2 FROM amis WHERE user_id1='$userConId')");

while($info_mail_amis = $mailAmis->fetch(PDO::FETCH_ASSOC)){
    $to .= $info_mail_amis['mail'];
    $to .= ";";
}
$subject = "Nouveau sondage pour vous !";
$message = "Bonjour ! Vous pouvez accéder au lien de mon sondage en cliquant sur le lien http://projet-php-sql-ajax.test/deconnexion.php";
mail ($to ,$subject ,$message);

header("Location: ../index.php");

?>

!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<p> <?php echo $timeLeft;?></p>
</body>
</html>
