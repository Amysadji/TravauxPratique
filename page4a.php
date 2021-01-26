<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body style="font-size: 25px:;">
    <?php if (isset($_GET["Valider"])){ ?>
    <p>Les différentes donées saisie sont:</p>
    <div>
        Votre matricule est <?php echo $_GET["matricule"];?>
    </div>
    <div>
        Vous vous appelez <?php echo $_GET["Nom"]," ",$_GET["Prenom"];?>
    </div>
    <div>
        Vous êtes du genre <?php if( $_GET["Sexe"]=="M"){ echo "masculin";}else{ echo "Feminin";} ?>
    </div>
    <div>
        Votre adresse <?php echo $_GET["Adresse"];?>
    </div>
    <div>
        Votre service <?php echo $_GET["Service"];?>
    </div>
    <div> 
        Votre fonction <?php echo $_GET["Fonction"];?>
    </div>
    <?php }else{ ?>
        <div>Veuillez d'abord saisir vos <a href="page4.php">coordonnées</a></div>
    <?php } ?>
</body>
</html>