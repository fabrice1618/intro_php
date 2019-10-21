<?php

/// $a="toto";  Pas d'instructions qui executent du code ici

function isVrai( $parametre, $langue )
{
  $maLangue="en";
  if ($langue=="fr") {
    $maLangue="fr";
  }

  if ($maLangue=='fr') {
    echo "La valeur de mon parametre est : ";
  } else {
    echo "The value of parameter is : ";
  }

  var_dump($parametre);

  if ($parametre==true) {

    if ($maLangue=='fr') {
      echo "C'est vrai";
    } else {
      echo "It's true";
    }
  } else {
    if ($maLangue=='fr') {
      echo "C'est faux";
    } else {
      echo "It's false";
    }
  }
  echo "\n\n";

}
