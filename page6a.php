<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page6a</title>
</head>
<body style="font-size: 25px:;">
    <?php if (isset($_GET["Valider"])){ ?>
    <p>Les différentes donées saisie sont:</p>
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
    <?php }else{ ?>
        <div>Veuillez d'abord saisir vos <a href="page6.php">coordonnées</a></div>
    <?php } ?>
</body>
</html>