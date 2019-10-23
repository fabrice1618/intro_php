<?php
require_once("chaine_fonctions.php");

$test1 = isVide('');

$test2 = isVide("");

$test3 = isVide("A");

$test4 = isVide(" ");

$test5 = isBonPassword(" ");
if ($test5==true) {
  echo "password OK\n";
} else {
  echo "password NOK\n";
}
$test6 = isBonPassword("Aa1-Bb2@");
if ($test6==true) {
  echo "password OK\n";
} else {
  echo "password NOK\n";
}
$test7 = isBonPassword("Aa1- Bb2");
if ($test7==true) {
  echo "password OK\n";
} else {
  echo "password NOK\n";
}
$test8 = isBonPassword("Aa-Bb@CcTtY");
if ($test8==true) {
  echo "password OK\n";
} else {
  echo "password NOK\n";
}
$test9 = isBonPassword("Aa1-Bb2");
if ($test9==true) {
  echo "password OK\n";
} else {
  echo "password NOK\n";
}
