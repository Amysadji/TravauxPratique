<?php
$servername = "mysql.hostinger.fr";
$database = "u000000001_nom";
$login = "u000000001_user";
$password = "MotDePasse";
// Create connection
$connexion = mysqli_connect($servername, $login, $password, $database);
header('Location: menu.php');
exit();
// Check connection
if (!$connexion) {
      die("Échec de la connexion : " . mysqli_connect_error());
};
 