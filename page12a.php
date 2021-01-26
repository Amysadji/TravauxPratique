<?php
$servername = "mysql.hostinger.fr";
$database = "u000000001_nom";
$username = "u000000001_user";
$password = "MotDePasse";
// Create connection
$connexion = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$connexion) {
      die("Échec de la connexion : " . mysqli_connect_error());
};
 
echo "Connexion réussie";
 
$sql = "INSERT INTO Fonction (numf , nom, design) VALUES (1,'COMPTABLE', 'RESPONSABLE')";
if (mysqli_query($connexion, $sql)) {
      echo "Nouveau enregistrement créé avec succès";
      $afficher="SELECT numf , nom , design from Fonction";
      echo "$afficher";
} else {
      echo "Erreur : " . $sql . "<br>" . mysqli_error($connexion);
};