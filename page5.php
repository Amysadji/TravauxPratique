<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page5</title>
</head>
<body style="font-size:25px">
    <form action="page4a.php" method="GET" style="margin-top: 150px">
        <label for="matricule">Matricule</label> <input type="text" required  style="background-color: pink" name="matricule"><br><br>
        <label for="Nom">Nom</label><input type="text" required style="margin-left:50px; background-color: pink" name="Nom"><br><br>
        <label for="Prenom">Prenom</label><input type="text" required style="margin-left:20px" name="Prenom"><br><br>
        <label for="sexe">Sexe</label> <label for="M" style="font-size: 15px; margin-left: 40px;">Masculin</label><input type="radio" name="Sexe"><label for="m" style="font-size: 15px;">Feminin</label><input type="radio" name="Sexe" checked><br><br>
        <label for="Adresse">Adresse</label><input type="text" required style="margin-left:15px;" name="Adresse"><br><br>
        <label for="Service">Service</label>
        <select name="Service" required style="margin-left:15px;">
            <option value="">--choisir--</option>
            <option value="assurance">Assurance</option>
            <option value="Banque">Banque</option>
            <option value="Admimistration">Administraction</option>
            <option value="Fonction_publique">Fonction publique</option>
            <option value="Douanes">Douanes</option>
        </select><br><br>
        <label for="Fonction">Fonction</label>
        <select name="Fonction" required>
            <option value="">--choisir--</option>
            <option value="Expertise Comptable">Expertise Comptable</option>
            <option value="Enseignant">Enseignant</option>
            <option value="PDG">PDG</option>
            <option value="conseiller">Conseiller</option>
            <option value="DirCab">Directeur de cabinet</option>
            <option value="Secretaire">Secretaire</option>
            <option value=technicien>technicien</option>
        </select><br><br>
        <input type="submit" value="Valider" name="Valider" ><input type="submit" value="Reinitialiser" name="Reinitialiser" style="margin-left:30px;"><br><br>
    </form>
    <?php 
        if (isset($_GET["Valider"])) {
    ?>
            <table style="width:100%" style="border: 1px solid black; border-collapse:collapse;">
                <tr style="font-color:bolder">
                    <th style="border:1px solid black;">Matricule</th>
                    <th style="border:1px solid black;">Nom</th>
                    <th style="border:1px solid black;">Prenom</th>
                    <th style="border:1px solid black;">Genre</th>
                    <th style="border:1px solid black;">Adresse</th>
                    <th style="border:1px solid black;">Service</th>
                    <th style="border:1px solid black;">Fonction</th>
                </tr>
                <tr>
                    <td style="border:1px solid black;"><?php echo $_GET["matricule"];?></td>
                    <td style="border:1px solid black;"><?php echo $_GET["Nom"];?></td>
                    <td style="border:1px solid black;"><?php echo $_GET["Prenom"];?></td>
                    <td style="border:1px solid black;"><?php if( $_GET["Sexe"]=="M"){ echo "masculin";}else{ echo "Feminin";} ?></td>
                    <td style="border:1px solid black;"><?php echo $_GET["Adresse"];?></td>
                    <td style="border:1px solid black;"><?php echo $_GET["service"];?></td>
                    <td style="border:1px solid black;"><?php echo $_GET["Fonction"];?></td>
                </tr>
            </table> 
    <?php
        }else if (isset($_GET["Reinitialiser"])) {
            header("Refresh:0");
        }
    ?>
</body>
</html>
