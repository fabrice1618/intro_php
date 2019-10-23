<?php
require_once("booleen_fonctions.php");

$langue2 = "ita";

$a = -13; //true
isVrai( $a, "fr" );

$b=0;     //false
isVrai( $b, $a );   // Il est possible d'ecrire des bugs !!!!
                    // Un seul parametre declaré
$a=0.0;   //false
isVrai( $a, 'en' );

$c=0.1;   //true
isVrai( $c, $langue2 );

$a="0";   //false
isVrai( $a, $langue2 );
isVrai( "1", $langue2 );

isVrai( "", $langue2 );

isVrai( '0', $langue2 );

//if ($a==true) {
/*
if ($a===true) {
  echo "C'est vrai";
} else {
  echo "C'est faux";
}
*/

/*
$erreur = false;

if (!$erreur) {
  echo "Tout va bien";
} else {
  echo "Il y a une erreur";
}
*/

/*
//$a = true;
$a = false;

if ($a==true) {
  echo "C'est vrai";
} else {
  echo "C'est faux";
}
*/
