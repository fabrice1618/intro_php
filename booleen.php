<?php

//$a = -12; //true
//$a=0;     //false
//$a=0.0;   //false
//$a=0.1;   //true
//$a="0";   //false
$a="1";   //true  avec === c'est false
//$a="";      //false
//$a='0';     //false

//if ($a==true) {
if ($a===true) {
  echo "C'est vrai";
} else {
  echo "C'est faux";
}


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
