<form action="page13.php" method="POST">
<div>
    <input type="text" id="Matricule" name="Matricule" placeholder="votre Matricule ?" required/>
    <label for="Matricule">  RECHERCHE MATRICULE </label>
</div>
</form>


<?php
$servername = "mysql.hostinger.fr";
$database = "u000000001_nom";
$username = "u000000001_user";
$password = "MotDePasse";
$Matricule=$_POST['Matricule'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Échec de la connexion : " . mysqli_connect_error());
};
 
echo "Connexion réussie";
 // requete sql
$sql="SELECT NomE, PrenomE , MatE FROM Employés where MatE = $Matricule";
if (mysqli_query($conn, $sql)) {
      echo "Employé existe ";
// affichage dans un tableau 
      echo"
    <table>
      <thead>
        <tr>  
             <th>Nom Employé</th>
             <th>Prenom Employé</th>
             <th>Matricule Employé</th>
        </tr>   
      </thead>";
      while ($res = mysqli_fetch_array($sql)){
          echo "<tbody>
                <tr>
                <td>{$res["NomE"]}</td>
                <td> {$res["PrenomE"]}</td>
                <td>{$res["MatE"]}</td>
                </tr>
                </tbody>
               ";
      };
      echo" </table>";
} else {
      echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
};