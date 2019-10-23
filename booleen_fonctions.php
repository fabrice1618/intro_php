<?php

/// $a="toto";  Pas d'instructions qui executent du code ici

function isVrai( $parametre, $langue )
{

  if (($langue=="fr") || ($langue=='en')) {
    // On execute la fonction

    if ($langue=="fr") {
      $messageParametre="La valeur de mon parametre est : ";
      $messageVrai = "C'est vrai";
      $messageFaux = "C'est faux";
    } else {
      $messageParametre="The value of parameter is : ";
      $messageVrai = "It's true";
      $messageFaux = "It's false";
    }

    echo $messageParametre;
    var_dump($parametre);

    if ($parametre==true) {
      echo $messageVrai;
    } else {
      echo $messageFaux;
    }
    echo "\n\n";

  } else {
    // Il y a une erreur
    echo "Erreur: langue inconnue!!!\n\n";
  }
  // Le point de sortie de la fonction
}
