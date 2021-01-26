<form action="page7.php" method="POST">
<div>
    <input type="text" id="m" name="Mat" placeholder="votre matricule ?" required/>
    <label for="m"> MATRICULE </label>
    <input type="text" id="n" name="nom" placeholder="votre NOM ?" required/>
    <label for="n"> NOM </label>
    <input type="text" id="p" name="prenom" placeholder="votre PRENOM ?" required/>
    <label for="p"> PRENOM </label>
    <br><br>
    <input type="submit" name="envoyer " value="enregistrer" >
</div>
</form>
<table border = "1px" cellspacing= 0 style="margin-top: 50px; margin-bottom: 50px;">
      <thead>
        <tr>  
             <th style="padding: 7px;">num fonction</th>
             <th style="padding: 7px;">nom fonction</th>
             <th style="padding: 7px;">designation fonction</th>
        </tr>   
      </thead>";
<?php
while (isset($_POST['envoyer'])){
      if (isset($_POST['envoyer'])){
          echo "<tbody>
                <tr>
                <td style='padding: 7px;'>{$res["nomE"]}</td>
                <td style='padding: 7px;'> {$res["prenomE"]}</td>
                <td style='padding: 7px;'>{$res["MatE"]}</td>
                </tr>
                </tbody>
               ";
      };
    };

    echo" </table>"