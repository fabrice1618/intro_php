<?php

$iGrandPere = 1;
$iPere = 1;
printf("%3d\n", $iGrandPere);
printf("%3d %8.5f\n", $iPere, $iPere / $iGrandPere);

while ($iGrandPere + $iPere <= 100) {
  $iFils = $iGrandPere + $iPere;
  printf("%3d %8.5f\n", $iFils, $iFils / $iPere);
  $iGrandPere = $iPere;
  $iPere = $iFils;
}
