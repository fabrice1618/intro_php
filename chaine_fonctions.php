<?php

function isBonPassword($motDePasse)
{
  $passwordOK = false;

  $condition1 = false;  // Chiffres
  $condition2 = false;  // Symboles presents
  $condition3 = false;  // Minuscules
  $condition4 = false;  // Majuscules
//  $condition5 = false;  // Longueur 8 caracteres
  $caractereInterdit = false;

  // Faire tous les tests
  $pointeur = 0;
//  echo "Mot de passe:" . $motDePasse . " Longueur:" . strlen($motDePasse) . "\n";
  $longueurPassword = 0;

  while ( ($pointeur < strlen($motDePasse)) && ($caractereInterdit==false)) {
    // Lire le caractere pointé par pointeur
//    $caractere = substr( $motDePasse, $pointeur, 1 ); // Identique a la ligne ci-dessous
    $caractere = $motDePasse[$pointeur];

//    echo "Caractere : " . $caractere ;
    // Verifier si le caractere est un chiffre
    if (isChiffre($caractere)) {        // Si le caractere est un chiffre
      $condition1 = true;               // Alors la condition1 est vraie
//      echo " Chiffre";
      $longueurPassword++;              // Et j'ajoute un a la Longueur du mot de passe
    }

    // Verifier si le caractere est un symbole
    if (isSymbole($caractere)) {
      $condition2 = true;
//      echo " Symbole";
      $longueurPassword++;
    }

    // Verifier si le caractere est une lettre minuscule
    if (isLettreMinuscule($caractere)) {
      $condition3 = true;
//      echo " Minuscule";
      $longueurPassword++;
    }

    // Verifier si le caractere est un chiffre majuscule
    if (isLettreMajuscule($caractere)) {
      $condition4 = true;
//      echo " Majuscule";
      $longueurPassword++;
    }

    if (
        ( isChiffre($caractere) == false ) &&
        ( isSymbole($caractere) == false ) &&
        ( isLettreMinuscule($caractere) == false ) &&
        ( isLettreMajuscule($caractere) == false ) ) {
//          echo "Erreur";
          $caractereInterdit = true;
        }

//    echo "\n";

    $pointeur++;
  }


  if (
      ($longueurPassword>=8) &&
      ( $condition1 == true) &&
      ( $condition2 == true) &&
      ( $condition3 == true) &&
      ( $condition4 == true)
    ) {
      $passwordOK = true;
    }

  return($passwordOK);
}


function isChiffre($caractere)
{
  $resultat = false;

  if ( ($caractere>='0') && ($caractere<='9')) {
    $resultat = true;
  }

  return($resultat);
}

// Verifier si le caractere est un symbole
function isSymbole($caractere)
{
  $resultat = false;

  if (
      ($caractere=='@') ||
      ($caractere=='/') ||
      ($caractere=='-') ||
      ($caractere==':') ||
      ($caractere=='=')
    ) {
    $resultat = true;
  }

  return($resultat);
}


// Verifier si le caractere est une lettre minuscule
function isLettreMinuscule($caractere)
{
  $resultat = false;

  if ( ($caractere>='a') && ($caractere<='z')) {
    $resultat = true;
  }

  return($resultat);
}


// Verifier si le caractere est un chiffre majuscule
function isLettreMajuscule($caractere)
{
  $resultat = false;

  if ( ($caractere>='A') && ($caractere<='Z')) {
    $resultat = true;
  }

  return($resultat);
}







function isVide($chaine)
{
  $resultat = false;

  if (($chaine=='') || ($chaine=="")) {
    echo "La chaine est vide\n\n";
    $resultat = true;
  } else {
    echo "La chaine n'est pas vide\n\n";
    $resultat = false;
  }

  return($resultat);
}
