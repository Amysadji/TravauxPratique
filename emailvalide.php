<?php
  function emailValide($email){
  /*validation de l'adress avec filter-var */
  if (filter_var($email,filter_validate_email)){
    echo"L'adresse email '$email' est valide.";
  } else{
    echo "L'adresse email  '$email' est invalide.";  
  }
} 
   echo"<br/> appel de la fonction  emailValide() <br/>;
      $email="myasadji@gmail.com";
      emailValide($email)
?>


