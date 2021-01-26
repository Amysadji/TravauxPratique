<DOCTYPE HTML>
<html larg="fr">
<head>
     <meta charset="UTF-8">
</head>

<body>
  <p>Affichage des données du formulaire</p>

  <ul>
  <li><?php echo $_POST['name']; ?></li>
  <li><?php echo $_POST['prenom']; ?></li>
  </ul>

</body>
</html>