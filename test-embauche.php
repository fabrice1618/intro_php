<?php

for($iNombre=1;$iNombre<=42;$iNombre++) {
//  $aDiviseur = [];
  $aDiviseur = array();

  if ($iNombre%2==0) {
    $aDiviseur[] = "2";
  }
  if ($iNombre%3==0) {
    $aDiviseur[] = "3";
  }
  if ($iNombre%5==0) {
    $aDiviseur[] = "5";
  }

  $sMessage = "";
//  print_r($aDiviseur);
  switch (count($aDiviseur)) {
    case 1:
      // Est divisible par 2
      $sMessage = "Est divisible par " . $aDiviseur[0];
      break;
    case 2:
      // Est divisible par 2 et 3
      $sMessage = "Est divisible par " . $aDiviseur[0] . " et " . $aDiviseur[1];
      break;
    case 3:
      // Est divisible par 2, 3 et 5
      $sMessage .= "est divisible 2, 3 et 5";
      break;

    default:
      break;
  }

  echo $iNombre . " " . $sMessage."\n";
}
