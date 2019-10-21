<?php
require_once("booleen_fonctions.php");

$langueduprojet = "fr";

$a = -12; //true
isVrai( $a, "fr" );

$b=0;     //false
isVrai( $b, $a );   // Il est possible d'ecrire des bugs !!!!
                    // Un seul parametre declaré
$a=0.0;   //false
isVrai( $a, 'en' );

$c=0.1;   //true
isVrai( $c, $langueduprojet );

$a="0";   //false
isVrai( $a, $langueduprojet );
isVrai( "1", $langueduprojet );

//$a="1";   //true  avec === c'est false
//$a="";      //false
//$a='0';     //false

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
