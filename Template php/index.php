
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Utilisateurs</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <a href="ajouter.php" class="Btn_add"> <img src="images/plus.png"> Ajouter</a>

        <table>
            <tr id="items">
                <th>Nom</th>
                <th>Prénom</th>
                <th>Age</th>
                <th><a href="modifier.php"><input type="button" value="Modifier"></a></th>
                <th><a href="supprimer.php"><input type="button" value="Supprimer"></a></th>
            </tr>
        </table>
<?php

include 'connexion.php';
error_reporting(0);

$sql = "SELECT * FROM informations";
$result = mysqli_query($conn, $sql);

if ($result = $conn->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        $nom = $row["nom"];
        $prenom = $row["prenom"];
        $age = $row["age"];
        echo '<table border="1"> <tr> 
            <td>'.$nom.'</td> 
            <td>'.$prenom.'</td> 
            <td>'.$age.'</td> 
        </tr>';
         }
    $result->free();
    } 
?>



    </div>
</body>

</html>