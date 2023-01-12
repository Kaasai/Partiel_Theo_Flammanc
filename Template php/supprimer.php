<?php
include 'connexion.php';

error_reporting(0);

  if (isset($_POST['button'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom']; 
    $sql = "SELECT * FROM informations";
    $sql = "DELETE FROM informations WHERE nom='$nom' AND prenom='$prenom'";
    //J'ignore pourquoi mais il ne veut pas supprimer
    $result = mysqli_query($conn, $sql);
    } 
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form">
        <a href="index.php" class="back_btn"><img src="images/back.png"> Retour</a>
        <h2>Modifier l'employé : <?= $row['nom'] ?> </h2>
        <p class="erreur_message">
        </p>
        <form action="" method="POST">
            <label>Nom</label>
            <input type="text" name="oldnom" value="">
            <label>Prénom</label>
            <input type="text" name="prenom" value="">
            <input type="submit" value="Modifier" name="button">
        </form>
    </div>
</body>

</html>