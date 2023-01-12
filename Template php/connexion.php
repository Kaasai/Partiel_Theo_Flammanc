<?php

$server = "localhost";
$user = "root";
$pass = "root";
$database = "partielphp";

$conn = mysqli_connect($server, $user, $pass, $database);
if (!$conn) {
    die('erreur de connexion');
}
//$pdo= new PDO('mysql:dbname=$partielphp;charset=utf8;host=$server','$user','$pass');
//if (!$pdo) {
//    die('erreur de connexion');
//}
// Je n'arrive pas à le faire marcher
?>
